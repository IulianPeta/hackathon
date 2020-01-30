<?php 
class main extends page
{
	function display()
	{
		$main_v=new main_v();
		$main_v->display();
	}
	function add()
  {
    $main_v=new ajax_main_v();
    $tests_m=new tests_m();
    $test_runs_m=new test_runs_m();
    if (!empty($_FILES['xml_file'])&&$_FILES['xml_file']['size']>0)
    {
      $upload_date=date("Ymd_His");
      $FILE=$_FILES["xml_file"];
      $finfo=finfo_open(FILEINFO_MIME_TYPE);
      $name_to_xml_path="xml_".pathinfo($FILE["name"],PATHINFO_FILENAME)."_".$upload_date;
      $ok=admin_utils::validate_uploaded_file($FILE,"xml");
      $xml_file=null;
      if ($ok)
      {
        $ext=pathinfo($FILE['name'],PATHINFO_EXTENSION);
        $filename=$name_to_xml_path.".".$ext;
        $filename=admin_utils::eliminate_special_chars($filename);
        $filename=strtolower($filename);
        $path_xml=constants::LOCAL_PATH.constants::STORAGE.$filename;
        if(move_uploaded_file($FILE['tmp_name'],$path_xml)==true)
        {
          $xml_file=$filename;
        }
        if (!empty($xml_file))
        {
          $xml_parsed=simplexml_load_file($path_xml) or die("Parse error");
          if (!empty($xml_parsed))
          {
            echo "<pre>";
            foreach($xml_parsed->children() as $child)
            {
              if ($child->getName()=="testcase")
              {
                $testcase_attributes=$child->attributes();
                $tst=$tests_m->checkIfExists($testcase_attributes->classname);
                if (empty($tst))
                {
                  //not exists yet
                  $tests_m->insert($testcase_attributes->classname);
                  $tst=$tests_m->checkIfExists($testcase_attributes->classname); //re-select to obtain the new ID
                  
                }
                $tst_id=filter_var($tst['tst_id'],FILTER_SANITIZE_NUMBER_INT,FILTER_VALIDATE_INT);
                $tr_name=filter_var($testcase_attributes->name);
                $tr_runtime=filter_var($testcase_attributes->time);
                $tr_status=1;
                $tr_error_msg=null;
                $tr_error_type=null;
                $tr_sys_out=null;
                $tr_sys_err=null;
                if (!empty($child->failure))
                {
                  $tr_status=0;
                  $failure_attributes=$child->failure->attributes();
                  $tr_error_msg=filter_var($failure_attributes->message);
                  $tr_error_type=filter_var($failure_attributes->type);
                  //print_r($child);
                }
                $tr_exists=$test_runs_m->checkIfExists($tr_name,$tst_id);
                if (empty($tr_exists))
                {
                  //does not yet exists, insert in DB
                  $test_runs_m->insert($tst_id,$tr_name,$tr_runtime,$tr_status,$tr_error_msg,$tr_error_type);
                }
              }
            }
          }
          unlink($path_xml);
          $main_v->addToInput('success','XML imported');
        }
        else
        {
          $main_v->addToInput('error',"Move file failed");
        }
      }
      else
      {
        $main_v->addToInput('error',"File validation error");
      }
    }
    else
    {
      $main_v->addToInput('error',"Empty file");
    }
    $main_v->display();
  }
}
?>