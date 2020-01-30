<?php 
final class ajax_main_v extends ajax_page_v
{
	function addForm()
	{
		?>
    <form action="index.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="page" value="main">
      <input type="hidden" name="action" value="add">
      <input type="file" accept="text/xml" name="xml_file" required="required">
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    <?php
	}
	function display()
	{
		$this->showErrors();
		$this->showSuccess();
	}
}
?>