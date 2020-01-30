<?php
class page_v implements constants_v
{
  private $title;
  private $page;
  private $input;
  function __construct($page,$title)
  {
    $this->page=$page;
    $this->title=$title;
  }
  public function addToInput($key,$value)
  {
    $this->input[$key]=$value;
  }
  function successMsg()
  {
    $input=$this->getInput();
    if(!empty($input["success_message"]))
    {
      ?>
      <div class="alert alert-success">
        <p><?php echo $input["success_message"] ?></p>
      </div>
      <?php
    }
  }
  function getInput()
  {
    return $this->input;
  }
  function setInput($input)
  {
    $this->input=$input;
  }
  function errorMsg()
  {
    $input=$this->getInput();
    if(!empty($input["error_message"]))
    {
      ?>
      <div class="alert alert-danger">
        <p><?php echo $input["error_message"] ?></p>
      </div>
      <?php
    }
  }
  function display()
  {
    ?>
    <!DOCTYPE html>
    <html lang="en-us">
    <head>
      <?php
      $this->head();
      ?>
    </head>
    <body class="h-100">    
    <?php
    $this->wrapper();
    ?>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/index.js"></script>
    <?php
    $this->headCustomScripts();
    ?>
    </body>
    </html>
    <?php
  }
  function head()
  {
    ?>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->  <!-- Title  -->
    <title><?php echo $this->title ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--<link rel="stylesheet" href="fontawesome5112/css/all.css">-->
    <link rel="stylesheet" href="css/style.css">
    <?php
    $this->headCustomCss();    
  }
  function headCustomCss()
  {
  }
  public function wrapper()
  {
    $this->menu();
    ?>
    <div class="container-fluid mainwrapper">
      <div class="row">
        <aside class="sideBar col-sm-4 col-xs-12 wrapper_column">
          <?php
          $this->sideBar();
          ?>
        </aside>
        <section class="mainBar col-sm-8 col-xs-12 wrapper_column">
          <?php
          $this->mainBar();
          ?>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?php
        $this->footer();
        ?>
      </div>
    </div>
    <?php
  }
  function menu()
  {
    
  }
  function sideBar()
  {
    $this->sideBarMenu();
  }
  function sideBarMenu()
  {
  }
  function mainBar()
  {
  }
  function footer()
  {
    ?>
    <footer class="pageFooter">      
    </footer>
    <?php
  }
  public function headCustomScripts()
  {
  }
}
?>