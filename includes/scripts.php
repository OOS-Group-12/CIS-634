<script src="../css/jquery/dist/jquery.min.js"></script>
<script src="../css/jquery-ui/jquery-ui.min.js"></script>
<script src="../css/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../cssextenstion/iCheck/icheck.min.js"></script>
<script src="../css/moment/moment.js"></script>
<script src="../css/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../css/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../css/chart.js/Chart.js"></script>
<script src="../css/chart.js/Chart.HorizontalBar.js"></script>
<script src="../css/moment/min/moment.min.js"></script>
<script src="../css/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../css/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../cssextenstion/timepicker/bootstrap-timepicker.min.js"></script>
<script src="../css/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../css/fastclick/lib/fastclick.js"></script>
<script src="../cssextenstion1/js/adminlte.min.js"></script>
<script>
$(function(){
	var url = window.location;
	$('ul.sidebar-menu a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');
	$('ul.treeview-menu a').filter(function() {
	    return this.href == url;
	}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
});
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
$(function(){
  $('#datepicker_add').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datepicker_edit').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  }) 
});
</script>