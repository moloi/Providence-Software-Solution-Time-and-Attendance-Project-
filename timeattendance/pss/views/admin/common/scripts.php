<!--[if lt IE 9]>
<script src="<?php echo base_url(''); ?>assets/admin/scripts/ie9/html5shiv.js"></script>
<script src="<?php echo base_url(''); ?>assets/admin/scripts/ie9/respond.min.js"></script>
<![endif]-->


<script src="<?php echo base_url(''); ?>assets/admin/scripts/1.7.2/jquery.min.js"></script>


<script src="<?php echo base_url(''); ?>assets/admin/scripts/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(''); ?>assets/admin/scripts/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(''); ?>assets/admin/scripts/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(''); ?>assets/admin/scripts/AdminLTE/app.js" type="text/javascript"></script>
<script src="<?php echo base_url(''); ?>assets/admin/scripts/common.js" type="text/javascript"></script>
<script src="<?php echo base_url(''); ?>assets/admin/scripts/fancybox/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
<script src="<?php echo base_url(''); ?>assets/admin/scripts/fancybox/jquery.fancybox.js" type="text/javascript"></script>

<script src="<?php echo base_url(''); ?>assets/admin/scripts/editor.js" type="text/javascript"></script>
<script src="<?php echo base_url(''); ?>assets/admin/scripts/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>

<script src="<?php echo base_url(''); ?>assets/admin/scripts/ajaxfileupload.js" type="text/javascript"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(''); ?>assets/admin/scripts/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(''); ?>assets/admin/scripts/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
    	//date
        $(".date").datepicker({format:'dd/mm/yyyy'});
        $("#example1").dataTable();
        $("#example3").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
         //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>

<script type="text/javascript" language="javascript">
    var validNavigation = false;

    // Wire up the events as soon as the DOM tree is ready
    $(document).ready(function() {
        validNavigation = true;
        wireUpEvents();  
    }); 

    function endSession() {
        $.post(HTTP_PATH+"admin/logout",function(data){
        }); 
    }

    function wireUpEvents() {
        window.onbeforeunload = function() {
            if (!validNavigation) {
                endSession();
            }
        }

        // Attach the event keydown to exclude the F5 refresh
        $(document).live('keydown', function(e) {
            if (e.keyCode == 116){
                validNavigation = true;
            }
        });

         // Attach the event keydown to exclude the ctrl+R
        $(document).keydown(function (e) {
            if (e.keyCode == 65 && e.ctrlKey) {
                e.preventDefault();
            }
        });

        // Attach the event click for all links in the page
        $("a").live("click", function() {
            validNavigation = true;
        });

        // Attach the event submit for all forms in the page
        $(".btn").live("click", function() {
            validNavigation = true;
        });

        // Attach the event click for all inputs in the page
        $("input[type=submit]").live("click", function() {
            validNavigation = true;
        });
    }
</script> 