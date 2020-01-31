<?php
/**
 * Created by PhpStorm.
 * User: Nagy Zoltan
 * Date: 2020-01-31
 * Time: 16:07
 */
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL&~E_NOTICE);
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
include_once 'model/constants_m.php';
include_once 'model/Db.php';
include_once 'model/page_m.php';
include_once 'model/test_runs_m.php';
include_once 'model/tests_m.php';
$json=file_get_contents("php://input");
if (!empty($json))
{
  $decoded=json_decode($json,true);
  if (!empty($decoded['classname'])&&!empty($decoded['name']))
  {
    $tst_class_name=filter_var(strip_tags(trim($decoded['classname'])));
    $tr_name=filter_var(strip_tags(trim($decoded['name'])));
    $tr_runtime=null;
    if (!empty($decoded['time']))
    {
      $tr_runtime=filter_var(strip_tags(trim($decoded['time'])));
    }
    $name_array=explode("#",$tr_name);
    if (!empty($name_array[1]))
    {
      $tr_date=filter_var($name_array[1],FILTER_SANITIZE_STRING);
    }
    else
    {
      $tr_date=date("Y-m-d H:i:s"); //if no date, we take upload date
    }
    $tests_m=new tests_m();
    $exists=$tests_m->checkIfExists($tst_class_name);
    if (empty($exists))
    {
      $tests_m->insert($tst_class_name);
      $exists=$tests_m->checkIfExists($tst_class_name);
      $tst_id=filter_var($exists['tst_id'],FILTER_SANITIZE_NUMBER_INT,FILTER_VALIDATE_INT);
    }
    else
    {
      $tst_id=filter_var($exists['tst_id'],FILTER_SANITIZE_NUMBER_INT,FILTER_VALIDATE_INT);
    }
    $test_runs_m=new test_runs_m();
    $exists=$test_runs_m->checkIfExists($tr_name,$tst_id);
    if (empty($exists))
    {
      $tr_status=1;
      if (!empty($decoded['failure']))
      {
        $tr_status=0;
        $tr_error_msg=filter_var(strip_tags($decoded['failure']['message']),FILTER_SANITIZE_STRING);
        $tr_error_type=filter_var(strip_tags($decoded['failure']['type']),FILTER_SANITIZE_STRING);
      }
      else
      {
        $tr_error_msg=null;
        $tr_error_type=null;
      }
      $test_runs_m->insert($tst_id,$tr_name,$tr_runtime,$tr_status,$tr_date,$tr_error_msg,$tr_error_type);
      echo json_encode(["status"=>"success","message"=>"Test case added"]);
    }
    else
    {
      echo json_encode(["status"=>"error","message"=>"Test case already in the database"]);
    }
  }
  else
  {
    echo json_encode(["status"=>"error","message"=>"Missing classname or test case name"]);
  }
}
else
{
  echo json_encode(["status"=>"error","message"=>"Empty JSON sent"]);
}
?>