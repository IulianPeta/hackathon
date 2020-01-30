<?php
/**
 * Created by PhpStorm.
 * User: Nagy Zoltan
 * Date: 2020-01-30
 * Time: 13:58
 */
class tests_m extends page_m
{
  function getRows()
  {
    $rows=$this->db->select('tests','*',null,'tst_class_name');
    return $rows;
  }
  function insert(string $tst_class_name)
  {
    $param["tst_class_name"]=$tst_class_name;
    $this->db->insert("tests",$param);
  }
  function update(int $tst_id,string $tst_class_name)
  {
    $where=[
      [
        'column'=>'tst_id',
        'value'=>$tst_id,
        'equal'=>'='
      ]
    ];
    $param["tst_class_name"]=$tst_class_name;
    $this->db->update("tests",$param,$where);
  }
  function checkIfExists(string $tst_class_name)
  {
    $where=[
      [
        'column'=>'tst_class_name',
        'value'=>$tst_class_name,
        'equal'=>'='
      ]
    ];
    $row=$this->db->selectSingle('tests',"*",$where);
    return $row;
  }
}