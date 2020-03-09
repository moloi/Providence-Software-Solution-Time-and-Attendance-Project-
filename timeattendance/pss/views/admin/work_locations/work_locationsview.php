    <aside class="right-side">
        <section class="content-header">
            <h1>
                Work Locations
            </h1>
            <?php $this->load->view('admin/common/breadcrumbs' , $breadcrumbs); ?>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                        <?php if(isset($this->data['sucess']) && $this->data['sucess'] == 1): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Saved Successfully.
                            </div>
                        <?php elseif(isset($this->data['sucess']) && $this->data['sucess'] == 2): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Updated Successfully.
                            </div>
                        <?php elseif(isset($this->data['sucess']) && $this->data['sucess'] == 3): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Deleted Successfully.
                            </div>
                        <?php endif; ?>
                            <h3 class="box-title"><?php echo $title?></h3>
                            <h3 class="box-title" style="float:right;color:white !important;"><a style="color:white !important;" class="btn btn-primary" href="<?php echo HTTP_PATH."work_locations/form" ?>"><i class="fa fa-plus-square-o"></i> Add</a>
                        </div>
                        <div class="box-body table-responsive">
                            <?php $this->load->view('admin/common/datatable' , $table_data); ?>
                        </div>
                    </div>
                </div>
        </section>
    </aside>
</div>
<?php require_once(APPPATH.'views/admin/common/scripts.php') ?>
</body>
</html>