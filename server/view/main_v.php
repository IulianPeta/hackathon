<?php 
final class main_v extends page_v
{
	private $ajax_main_v;
	function __construct()
	{
		$this->ajax_main_v=new ajax_main_v();
		parent::__construct("main","Home");
	}
	function headCustomCss()
	{
		
	}
	function headCustomScripts()
	{
	
	}
	function sideBar()
	{
		$this->ajax_main_v->addForm();
	}
	function mainBar()
	{
		$this->ajax_main_v->display();
	}
}
?>