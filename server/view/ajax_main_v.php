<?php 
final class ajax_main_v extends ajax_page_v
{
	function addForm()
	{
		?>
    <form action="index.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="page" value="main">
      <input type="hidden" name="action" value="add">
      <div class="form-group">
        <label>XML file</label>
        <input type="file" accept="text/xml" class="form-control-file" name="xml_file" required="required" title="Jenkins report xml">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
    </form>
    <?php
	}
	function display()
	{
		$this->showErrors();
		$this->showSuccess();
		$input=$this->getInput();
		if (!empty($input['test_runs']))
    {
      ?>
      <table class="table table-striped table-hover" id="report_table">
        <thead>
          <tr>
            <th>Test ID</th>
            <th>Test case</th>
            <th>Runtime</th>
            <th>Success</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach($input['test_runs'] as $tr)
        {
          ?>
          <tr>
            <td><?php echo $tr['tst_class_name']?></td>
            <td><?php echo $tr['tr_name']?></td>
            <td><?php echo $tr['tr_runtime']?></td>
            <td>
              <?php
              if ($tr['tr_status']==1)
              {
                ?>
                <span class="bg bg-success">Yes</span>
                <?php
              }
              else
              {
                ?>
                <span class="bg bg-danger">No</span>
                <?php
              }
              ?>
            </td>
            <td>
              <?php
              if ($tr['tr_status']==0)
              {
                ?>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#errorLogModal<?php echo $tr['tr_id']?>">
                  View details
                </button>
                <div class="modal fade" id="errorLogModal<?php echo $tr['tr_id']?>" tabindex="-1" role="dialog" aria-labelledby="Error logs" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="errorLogModalTitle<?php echo $tr['tr_id']?>">Test error details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <ul>
                          <li><?php echo $tr['tr_error_type']?></li>
                          <li><?php echo $tr['tr_error_msg']?></li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
                ?>
            </td>
          </tr>
          <?php
        }
        ?>
        </tbody>
      </table>
<?php
    }
	}
}
?>