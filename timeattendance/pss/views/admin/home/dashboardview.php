<aside class="right-side">
<section class="content-header">
    <!-- Content Header (Page header) -->
        <h1>
            Dashboard
        </h1>
                    <?php $this->load->view('admin/common/breadcrumbs' , $breadcrumbs); ?>

	</section>

<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box">
                            <h3 class="box-title">Present Employees</h3>
                        <div class="box-body table-responsive">
                            <?php $this->load->view('admin/common/datatable' , $table_data); ?>
                        </div>
</div>
</div>
</div>
</section>
</aside>
</div>
<?php require_once(APPPATH.'views/admin/common/scripts.php') ?>
</body>
</html>