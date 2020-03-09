    <div class="panel panel-default">
        <div class="panel-heading">
            Field Submenu
        </div>
        <div class="panel-body">
            <div><a href="javascript:void(0);" class="btn btn-success btn-lg_1 btn-block_half fancybox.ajax" id="add_field" farmid = "<?php echo substr(base_url(uri_string()), strrpos(base_url(uri_string()), "/")+1); ?>" clientid="<?php echo substr(base_url(uri_string()), strrpos(base_url(uri_string()), "/")-3,+3); ?>" title="Add Field">Add Field</a></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            GFF Select
        </div>
        <div class="panel-body">
            <div>
                <form role="form">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Clients</label>
                            <select class="form-control" name="client">
                                <option>Client 1</option>
                                <option>Client 2</option>
                                <option>Client 3</option>
                                <option>Client 4</option>
                                <option>Client 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Farms</label>
                            <select class="form-control" name="farm">
                                <option>Farm 1</option>
                                <option>Farm 2</option>
                                <option>Farm 3</option>
                                <option>Farm 4</option>
                                <option>Farm 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Fields</label>
                            <select class="form-control" name="field">
                                <option>Field 1</option>
                                <option>Field 2</option>
                                <option>Field 3</option>
                                <option>Field 4</option>
                                <option>Field 5</option>
                            </select>
                        </div>
                        <div><a href="#" class="btn btn-success btn-lg_1 btn-block_half">Find</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</aside>