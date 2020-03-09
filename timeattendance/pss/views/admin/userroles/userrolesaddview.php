<?php 
    $status_array = array(
        '1' => 'Active',
        '2' => 'Inactive'
    );
    $id = $title = $description = $status = "";
    if(isset($roles) && count($roles) > 0)
    {
        foreach ($roles as $key => $array) {
            $id     = isset($array['id'])?$array['id']:'';
            $title  = isset($array['title'])?$array['title']:'';
			$description  = isset($array['description'])?$array['description']:'';
            $status = isset($array['status'])?$array['status']:'';
        }
    }

    $set_status = isset($status)?$status:set_value("status",$this->input->post("status"));
?>
    <aside class="right-side">
        <section class="content-header">
            <h1>
                Roles
            </h1>
            <?php $this->load->view('admin/common/breadcrumbs' , $breadcrumbs); ?>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                        <?php if(isset($id) && $id != ""): ?>
                            <h3 class="box-title">Edit Userrole</h3>
                        <?php else: ?>
                            <h3 class="box-title">Add Userrole</h3>
                        <?php endif; ?>
                            <h3 class="box-title" style="float:right"><a style="color:white !important;" class="btn btn-primary" href="<?php echo HTTP_PATH."userroles" ?>"><i class="fa fa-toggle-left"></i> Back</a>
                        </div>
                        <!-- general form elements -->
                        <div class="box">
                            <!-- form start -->
                            <?php $this->form_validation->set_error_delimiters("<p class='text-danger'>" , "</p>"); ?>
                            <?php if(isset($id) && $id != ""): ?>
                                <form role="form" action="<?php echo HTTP_PATH."userroles/edit/".$id; ?>" method="post">
                            <?php else: ?>
                                <form role="form" action="<?php echo HTTP_PATH."userroles/form"; ?>" method="post">
                            <?php endif; ?>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?php echo isset($title)?$title:set_value('title') ?>">
                                        <?php if(form_error('title')) echo form_error('title'); ?>
                                    </div>
									 <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea class="form-control" rows="3" id="description" name="description" placeholder="Description"><?php echo $description?$description:set_value('description') ?></textarea>
                                        <?php if(form_error('description')) echo form_error('description'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <?php echo form_dropdown('status',$status_array,$set_status,'class="form-control" id="status"'); ?>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div><!-- /.box -->
                    </div>
                </div>
        </section>
    </aside>
</div>
<?php require_once(APPPATH.'views/admin/common/scripts.php') ?>
</body>
</html>