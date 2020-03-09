    <div class="panel panel-default">
        <div class="panel-heading">
            Quick Add
        </div>
        <div class="panel-body">
            <?php if(admin_in()){ ?><div><a href="javascript:void(0);" class="btn btn-success btn-lg_1 btn-block_half fancybox.ajax" id="add_client" title="Add Client">Add Client</a></div> <?php }?>
            <div><a href="javascript:void(0);" class="btn btn-success btn-lg_1 btn-block_half fancybox.ajax" id="add_client_farm" title="Add Farm">Add Farm</a></div>
            <div><a href="javascript:void(0);" class="btn btn-success btn-lg_1 btn-block_half fancybox.ajax" id="add_farm_field" title="Add Field">Add Field</a></div>
            <?php if(admin_in()){ ?><div><a href="#" class="btn btn-success btn-lg_1 btn-block_half">Shapefile</a></div> <?php }?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Quick Find
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