<?php
    $breadcrumb = "<ol class=\"breadcrumb\">";
    $bc_count = count($breadcrumbs);
    for($i=0;$i<$bc_count;$i++)
    {
        $breadcrumb_array = $breadcrumbs[$i];
        if($i == 0)
        {
            if( ($bc_count-1) == $i )
                $breadcrumb.="<li class ='active'><i class='fa fa-dashboard'></i>&nbsp;&nbsp;&nbsp;{$breadcrumb_array['LABEL']}</li>";
            else
                $breadcrumb.="<li><a href=\"{$breadcrumb_array['URL']}\"><i class='fa fa-dashboard'></i>&nbsp;&nbsp;&nbsp;{$breadcrumb_array['LABEL']}</a></li>";
        }
        else
        {
            if( ($bc_count-1) == $i )
                $breadcrumb.="<li class ='active'>{$breadcrumb_array['LABEL']}</li>";
            else
                $breadcrumb.="<li><a href=\"{$breadcrumb_array['URL']}\">{$breadcrumb_array['LABEL']}</a></li>";
        }
    }
    $breadcrumb .= "</ol>";
    echo $breadcrumb;
?>