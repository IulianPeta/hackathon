function initPage()
{
  $("#report_table").dataTable({
    "order":[]
  });
}
initPage();
/*$(document).ready(
  function () {
    console.log("Document ready");
    $("#upload_form_parent").on('submit', '#upload_form', function (event) {
      console.log("Upload start");
      event.preventDefault();
      event.stopImmediatePropagation();
      formAjaxUpload('index.php', 'upload_form', 'upload_table_parent', clearForm);
      console.log("Upload finish");
      return false;
    });
  }
);*/
function clearForm()
{
  $("#xml_file").val('');
  initPage()
}