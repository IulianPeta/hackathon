<?php
/**
 * Created by PhpStorm.
 * User: Nagy Zoltan
 * Date: 2020-01-30
 * Time: 14:25
 */
class test_runs_m extends page_m
{
  function getRows()
  {
    $rows=$this->db->select('test_runs','*',null,'tst_class_name,tr_status,tr_date desc,tr_date_edit desc','tests','tst_class_name','tr_tst_id=tst_id','right join');
    return $rows;
  }
  function insert(int $tr_tst_id, string $tr_name,string $tr_runtime,int $tr_status,string $tr_date,?string $tr_error_msg=null,?string $tr_error_type=null,?string $tr_sys_out=null,?string $tr_sys_err=null)
  {
    $param=[
      'tr_tst_id'=>$tr_tst_id,
      'tr_name'=>$tr_name,
      'tr_runtime'=>$tr_runtime,
      'tr_date'=>$tr_date,
      'tr_status'=>[
        'value'=>$tr_status,
        'type'=>PDO::PARAM_INT
      ],
      'tr_error_msg'=>$tr_error_msg,
      'tr_error_type'=>$tr_error_type,
      'tr_sys_out'=>$tr_sys_out,
      'tr_sys_err'=>$tr_sys_err
    ];
    $this->db->insert('test_runs',$param);
  }
  function update(int $tr_id,int $tr_tst_id, string $tr_name,string $tr_runtime,int $tr_status,string $tr_date,?string $tr_error_msg=null,?string $tr_error_type=null,?string $tr_sys_out=null,?string $tr_sys_err=null)
  {
    $param=[
      'tr_tst_id'=>$tr_tst_id,
      'tr_name'=>$tr_name,
      'tr_runtime'=>$tr_runtime,
      'tr_date'=>$tr_date,
      'tr_status'=>[
        'value'=>$tr_status,
        'type'=>PDO::PARAM_INT
      ],
      'tr_error_msg'=>$tr_error_msg,
      'tr_error_type'=>$tr_error_type,
      'tr_sys_out'=>$tr_sys_out,
      'tr_sys_err'=>$tr_sys_err
    ];
    $where=[
      [
        'column'=>'tr_id',
        'value'=>$tr_id,
        'equal'=>"="
      ]
    ];
    $this->db->update('test_runs',$param,$where);
  }
  function checkIfExists(string $tr_name,string $tr_tst_id)
  {
    $where=[
      [
        'column'=>'tr_name',
        'value'=>$tr_name,
        'equal'=>'='
      ],
      [
        'column'=>'tr_tst_id',
        'value'=>$tr_tst_id,
        'equal'=>'=',
        'relation'=>'AND'
      ]
    ];
    $row=$this->db->selectSingle('test_runs','*',$where);
    return $row;
  }
}