<?php 
final class main_v extends page_v
{
	private $ajax_main_v;
	function __construct()
	{
		$this->ajax_main_v=new ajax_main_v();
		parent::__construct("main","Home");
	}
	function addToInput($key,$value)
  {
    $this->ajax_main_v->addToInput($key,$value);
    parent::addToInput($key,$value);
  }
	function headCustomCss()
	{
		?>
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <?php
	}
	function headCustomScripts()
	{
	?>
    <script type="text/javascript" src="datatables/datatables.min.js"></script>
	  <script type="text/javascript" src="js/main.js"></script>
	<?php
	}
	function sideBar()
	{
	  ?>
    <div class="card">
      <div class="card-header">
        <h1>Upload report</h1>
      </div>
      <div class="card-body" id="upload_form_parent">
        <?php
        $this->ajax_main_v->addForm();
        ?>
      </div>
      <div class="card-footer">
      
      </div>
    </div>
<?php
	}
	function mainBar()
	{
		?>
    <div class="card">
      <div class="card-header">
        <h1>Results</h1>
      </div>
      <div class="card-body" id="upload_table_parent">
        <?php
        $this->ajax_main_v->display();
        ?>
      </div>
      <div class="card-footer">
      
      </div>
    </div>
<?php
	}
}
?>