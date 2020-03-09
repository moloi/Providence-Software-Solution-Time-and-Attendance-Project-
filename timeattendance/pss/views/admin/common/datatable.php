<?php
    $status_array = array('1'=>'Active','2'=>'Inactive');
	$position_array = array(
        'First Position' => 'First Position',
        'Second Position' => 'Second Position',
		'Third Position' => 'Third Position',
		'Fourth Position' => 'Fourth Position',
		'Fifth Position' => 'Fifth Position'
    );
    if(count($table_data)>0)
    {
        foreach($table_data as $arrays)
        {
            $data       = $arrays['rows'];
            $header     = $arrays['header'];
            $columns    = $arrays['columns'];
            $actions    = $arrays['actions'];
        }
    }
?>
<table id="example1" class="table table-bordered table-striped dataTable " aria-describedby="example1_info" style="zoom:70%;">
<thead>
<tr>
    <?php
        if(count($header)>0)
        {
            foreach($header as $title)
                echo"<th>$title</th>";
        }
        if(count($actions)>0)
        {
            echo"<th colspan='4'>Actions</th>";
        }
    ?>
</tr>
</thead>
<tbody>
<?php
    $div_id = "";
    if(count($data)>0)
    {
        foreach($data as $row)
        {
            echo"<tr>";
            foreach($columns as $column)
                if($column == "status"){
                    echo "<td>".$status_array[$row[$column]]."</td>";
                }
				else if($column == "image"){
				    echo "<td><img width='50px' height='50px' src=".$row[$column]."></td>";
				}
				else if($column == "path"){
				    echo "<td><a href=".HTTP_PATH.$row[$column].">".$row[$column]."</a></td>";
				}
				else{
                    echo "<td>".ucfirst($row[$column])."</td>";
                }
            if(count($actions)>0)
            {
                // echo"<td >";
                foreach($actions as $action => $action_array)
                {
                    $query_string = $id_value = $extra ='';
                    $i = 1;
                    if(is_array(@$action_array['QUERY_STRING']))
                    {
                        foreach($action_array['QUERY_STRING'] as $key=>$value)
                        {
                            if(@$action_array['ID'])
                            {
                                if( $action == 'assign' )
                                {
                                    if(@$row['status'] == "1"){
                                        $id_value = "inactive_".$action_array['ID']."_".$row[$value];
                                    }else{
                                        $id_value = "active_".$action_array['ID']."_".$row[$value];
                                    }
                                    $div_id   = $row[$action_array['AJAX_ID']];
                                }
                                else
                                {
                                    $id_value = $action_array['ID']."_".$row[$value];
                                }
                            }
                            $extra  .= " ".$key."=".$row[$value]." ";
                            $query_string .= "/".$row[$value];
                        }
                    }
                    if(@$action_array['TITLE'])
                        $title = "title='".$action_array['TITLE']."'";
                    else
                        $title = '';
                    $label          = @$action_array['LABEL'];
                    $url            = base_url('').$action_array['URL'].$query_string;
                    if(is_array($action_array))
                    {
                        $class = 'btn-success';
                        $icon = 'fa-thumbs-up';
                        $target_window = '';
                        $onClick='';
                        if( $action == 'edit' )
                        {
                            $class  = 'btn-info';
                            $icon   = 'fa fa-edit';
                        }

                        if( $action == 'delete' )
                        {
                            $class      = 'btn-danger';
                            $icon       = ' fa-trash-o';
                            $onClick    = 'onclick="return confirm(\'Are you sure you want to delete this record\');"';
                        }

                        if( $action == 'assign' )
                        {
                            if(@$row['status'] > "1"){
                                $class  = 'btn-info';
                                $icon   = ' fa-check-square';
                                $label  = 'Active';
                                $title  = "title = 'Active'";
                                $style  = 'style="width:99px;float:left;margin-right:-18px;"';
                            }else{
                                $class  = 'btn-danger';
                                $icon   = ' fa-times-circle';
                                $label  = 'Inactive';
                                $title  = "title = 'Inactive'";
                                $style  = 'style="width:99px;float:left;margin-right:-8px;"';
                            }
                        }

                        if( is_array($action_array) )
                        {
                            if( @$action_array['TARGET'] )
                                $target_window = "target=\"".$action_array['TARGET']."\"";

                            if( @$action_array['ICON'] )
                                $icon = $action_array['ICON'];

                            if( @$action_array['CLASS'] )
                                $class = $action_array['CLASS'];
                        }
                        if( @$action_array['POPUP'] )
                            echo $html = '<td><a class="btn '.$class.' fancybox.ajax" href="javascript:void(0);" '.$target_window.' id="'.$id_value.'" '.$title.' '.$extra.'><i class="fa '.$icon.'"></i> '. $label.'</a> </td>';
                        elseif( @$action_array['ASSIGN'] )
                            echo $html = '<td><div id="'.$div_id.'" '.$style.'><a class="btn '.$class.'" href="javascript:void(0);" '.$target_window.' id="'.$id_value.'" '.$title.' '.$extra.'><i class="fa '.$icon.'"></i> '. $label.'</a></div> </td>';
                        else
                            echo $html = '<td><a class="btn '.$class.'" href="'.$url.'" '.$target_window.' '.$onClick.' id="'.$id_value.'" '.$extra.'><i class="fa '.$icon.'"></i> '. $label.'</a> </td>';
                    }
                }
                // echo"</td>";
            }
            echo"</tr>";
        }
    }
?>
</tbody>
</table>