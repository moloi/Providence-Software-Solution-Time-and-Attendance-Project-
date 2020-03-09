$(document).ready(function(){
    $("a[id^='active_role']").live('click',function(){
        var id          = $(this).attr('userrole_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"userroles/active_inactive_userrole/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_userrole_'+id+'" title="Inactive" userrole_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_role']").live('click',function(){
        var id          = $(this).attr('userrole_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"userroles/active_inactive_userrole/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_userrole_'+id+'" title="Active" userrole_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='active_user']").live('click',function(){
        var id          = $(this).attr('user_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"user/active_inactive_user/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_userrole_'+id+'" title="Inactive" user_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_user']").live('click',function(){
        var id          = $(this).attr('user_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"user/active_inactive_user/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_userrole_'+id+'" title="Active" user_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='active_about']").live('click',function(){
        var id          = $(this).attr('about_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"cms/active_inactive_about/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_about_'+id+'" title="Inactive" about_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                }
                location.reload();
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_about']").live('click',function(){
        var id          = $(this).attr('about_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"cms/active_inactive_about/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_about_'+id+'" title="Active" about_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                }
                location.reload();
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='active_offer']").live('click',function(){
        var id          = $(this).attr('offer_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"cms/active_inactive_offers/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_offer_'+id+'" title="Inactive" offer_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                }
                location.reload();
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_offer']").live('click',function(){
        var id          = $(this).attr('offer_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"cms/active_inactive_offers/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_offer_'+id+'" title="Active" offer_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                }
                location.reload();
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='active_terms']").live('click',function(){
        var id          = $(this).attr('terms_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"cms/active_inactive_terms/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_terms_'+id+'" title="Inactive" terms_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                }
                location.reload();
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_terms']").live('click',function(){
        var id          = $(this).attr('terms_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"cms/active_inactive_terms/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_terms_'+id+'" title="Active" terms_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                }
                location.reload();
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });
    

    $("a[id^='active_partner']").live('click',function(){
        var id          = $(this).attr('partner_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"work_locations/active_inactive_work_locations/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_partner_'+id+'" title="Inactive" partner_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_partner']").live('click',function(){
        var id          = $(this).attr('partner_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"work_locations/active_inactive_work_locations/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_partner_'+id+'" title="Active" partner_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });
    

    $("a[id^='active_quicklinks']").live('click',function(){
        var id          = $(this).attr('quicklinks_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"quicklinks/active_inactive_quicklinks/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_quicklinks_'+id+'" title="Inactive" quicklinks_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_quicklinks']").live('click',function(){
        var id          = $(this).attr('quicklinks_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"quicklinks/active_inactive_quicklinks/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_quicklinks_'+id+'" title="Active" quicklinks_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='active_event']").live('click',function(){
        var id          = $(this).attr('event_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"events/active_inactive_events/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_event_'+id+'" title="Inactive" event_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_event']").live('click',function(){
        var id          = $(this).attr('event_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"events/active_inactive_events/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_event_'+id+'" title="Active" event_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='active_help']").live('click',function(){
        var id          = $(this).attr('help_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"help/active_inactive_help/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_help_'+id+'" title="Inactive" help_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_help']").live('click',function(){
        var id          = $(this).attr('help_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"help/active_inactive_help/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_help_'+id+'" title="Active" help_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='active_categories']").live('click',function(){
        var id          = $(this).attr('categories_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"links/active_inactive_categories/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_categories_'+id+'" title="Inactive" categories_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_categories']").live('click',function(){
        var id          = $(this).attr('categories_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"links/active_inactive_categories/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_categories_'+id+'" title="Active" categories_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='active_links']").live('click',function(){
        var id          = $(this).attr('links_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"links/active_inactive_links/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_links_'+id+'" title="Inactive" links_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_links']").live('click',function(){
        var id          = $(this).attr('links_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"links/active_inactive_links/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_links_'+id+'" title="Active" links_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='active_downloads']").live('click',function(){
        var id          = $(this).attr('downloads_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"links/active_inactive_downloads/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_downloads_'+id+'" title="Inactive" downloads_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_downloads']").live('click',function(){
        var id          = $(this).attr('downloads_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"links/active_inactive_downloads/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_downloads_'+id+'" title="Active" downloads_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });
 $("a[id^='active_ad']").live('click',function(){
        var id          = $(this).attr('ad_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"ads/active_inactive_ads/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_ad_'+id+'" title="Inactive" ad_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_ad']").live('click',function(){
        var id          = $(this).attr('ad_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"ads/active_inactive_ads/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_ad_'+id+'" title="Active" ad_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });
    $("a[id^='active_banner']").live('click',function(){
        var id          = $(this).attr('banner_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"home/active_inactive_banner/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_banner_'+id+'" title="Inactive" banner_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_banner']").live('click',function(){
        var id          = $(this).attr('banner_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"home/active_inactive_banner/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_banner_'+id+'" title="Active" banner_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });
	 $("a[id^='active_content']").live('click',function(){
        var id          = $(this).attr('content_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"home/active_inactive_content/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_content_'+id+'" title="Inactive" content_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_content']").live('click',function(){
        var id          = $(this).attr('content_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"home/active_inactive_content/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_content_'+id+'" title="Active" content_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                    location.reload();
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });
	$("a[id^='active_contactus']").live('click',function(){
        var id          = $(this).attr('contactus_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"cms/active_inactive_contactus/"+id+"/active",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-danger" href="javascript:void(0);" target="_self" id="inactive_contactus_'+id+'" title="Inactive" contactus_id="'+id+'"><i class="fa  fa-times-circle"></i> Inactive</a>').css({"width":"99px","float":"left","margin-right":"-8px"});
                }
                location.reload();
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });

    $("a[id^='inactive_contactus']").live('click',function(){
        var id          = $(this).attr('contactus_id');
        var div_id      = id;
        $.ajax({
            url: HTTP_PATH+"cms/active_inactive_contactus/"+id+"/inactive",
            context: document.body,
            dataType: "html",
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data == 1){
                    $("#"+div_id).html('');
                    $("#"+div_id).html('<a class="btn btn-info" href="javascript:void(0);" target="_self" id="active_contactus_'+id+'" title="Active" contactus_id="'+id+'"><i class="fa  fa-check-square"></i> Active</a>').css({"width":"99px","float":"left","margin-right":"-18px"});
                }
                location.reload();
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
    });   
});
$("input:[type='text']").keypress(function(event) {
    if($(this).hasClass('num')){
        return isNumber(event); 
    }
});
function isNumber(evt) 
{
    var charCode = (evt.which) ? evt.which : evt.keyCode;

    if (charCode != 45 && (charCode != 46 || 
            $(this).val().indexOf('.') != -1) && (charCode < 48 || charCode > 57) && charCode != 8)
        return false;

    return true;
}  
$(".btnCloseEventQuote").live('click',function(){
    var empty = $("input:text[value='']").length
    if(empty > 0)
    {
        $("#closeerrMsg").html("Please Fille all Textboxes");
        return false;
    }
    else
    {
        $.ajax({
            url: HTTP_PATH+"quotes/validate_close_event_quote_form/",
            cache: false,
            dataType: "json",
            type: "POST",
            data : {
                'formData' : $("#close_event_quote_form").serialize()
            },
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data.status == true){
                    location.reload();
                }else{
                    $("#closeerrMsg").html(data.error);
                    return false; 
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
        return true;
    }
}); 
$(".btnOpenEventQuote").live('click',function(){
    var empty = $("input:text[value='']").length
    if(empty > 0)
    {
        $("#closeerrMsg").html("Please Fille all Textboxes");
        return false;
    }
    else
    {
        $.ajax({
            url: HTTP_PATH+"quotes/validate_open_event_quote_form/",
            cache: false,
            dataType: "json",
            type: "POST",
            data : {
                'formData' : $("#open_event_quote_form").serialize()
            },
            beforeSend: function(){
                $(".ajax_load").show();
            },
            success: function (data)
            {
                if(data.status == true){
                    location.reload();
                }else{
                    $("#closeerrMsg").html(data.error);
                    return false; 
                }
            },
            complete: function(){
                $(".ajax_load").hide();
            }
        });
        return true;
    }
});
$(document).on('keyup','.quotetxt',function(){
    var value = $(this).val();
    if(parseFloat(value) > 0){
        $(this).closest('td').next().html('Discount');
    }else{
        $(this).closest('td').next().html('No Discount');
    }
});
$(document).on('keypress','.quotetxt',function(event){
    if($(this).hasClass('num')){
        return isNumber(event); 
    }
});
$("#no_of_users").on('keyup',function(){
    var num = $(this).val();
    if(num >= 10){
        create_close_quote_table(num);
    }
});
$("#no_of_minutes").on('keyup',function(){
    var num = $(this).val();
    if(num >= 10){
        create_open_quote_table(num);
    }
});
$(document).ready(function(){
    var url     = window.location.href;
    var string  = url.substring(url.lastIndexOf('/') + 1);
    if(string == "quotes"){
        $.ajax({
            url: HTTP_PATH+"quotes/get_close_event_quote_data/",
            cache: false,
            dataType: "json",
            type: "POST",
            success: function (data)
            {
                for(i in data){
                    if(data[i] != "")
                        $("#"+i).val(data[i]);
                }
                var num = $("#no_of_users").val();
                if(num > 0)
                    create_close_quote_table(num); 
                for(i in data){
                    if(data[i] != "")
                        $("#"+i).val(data[i]);
                    if(data[i] <=0){
                        $(".close_event_quote_table #"+i).closest('td').next().html('No Discount');
                    }else{
                        $('.close_event_quote_table #'+i).closest('td').next().html('Discount');
                    }
                }
            }
        });
        $.ajax({
            url: HTTP_PATH+"quotes/get_open_event_quote_data/",
            cache: false,
            dataType: "json",
            type: "POST",
            success: function (data)
            {
                for(i in data){
                    if(data[i] != "")
                        $("#"+i).val(data[i]);
                }
                var num = $("#no_of_minutes").val();
                if(num > 0)
                    create_open_quote_table(num); 
                for(i in data){
                    if(data[i] != "")
                        $("#"+i).val(data[i]);
                    if(data[i] <=0){
                        $(".open_event_quote_table #"+i).closest('td').next().html('No Discount');
                    }else{
                        $('.open_event_quote_table #'+i).closest('td').next().html('Discount');
                    }
                }
            }
        });
        return true;
    }
});
function create_close_quote_table(num){
    var current;
        var table = '<table class="table table-hover"><tr><th style="width:27%">Discount rates applicable for user quantities</th><th style="width:11%">Users Quantities</th><th style="width:39%">Discount Rates(%)</th><th></th></tr>';
        for(var i = num; i <= 100; i++){
            if((parseInt(i) % parseInt(num)) === 0){
                current = i;
                var next    = current - parseInt(num) + parseInt(1);
                if(num == current){
                    var parmeter = "01_to_"+current+"_Users";
                    table += '<tr><td>'+"01 to "+current+" Users"+'</td><td>'+current+'</td><td><input type="text" class="form-control quotetxt num" id="'+parmeter+'" name="'+parmeter+'" value=""></td><td></td></tr>';
                }
                else{
                    var parmeter = next+"_to_"+current+"_Users";
                    table += '<tr><td>'+next+" to "+current+" Users"+'</td><td>'+current+'</td><td><input type="text" class="form-control quotetxt num" id="'+parmeter+'" name="'+parmeter+'" value=""></td><td></td></tr>';
                }
            }
        }if(current != 100){
            var number = parseInt(current) + parseInt(1);
            table += '<tr><td>'+number+" to 100 Users"+'</td><td>100</td><td><input type="text" class="form-control quotetxt num" id="'+number+"_to_100_Users"+'" name="'+number+"_to_100_Users"+'" value=""></td><td></td></tr>';
        }
        table += '</table>';
   
    $(".close_event_quote_table").html(table);
}
function create_open_quote_table(num){
    var current;
        var table = '<table class="table table-hover"><tr><th style="width:27%">Discount rates applicable for user quantities</th><th style="width:11%">Users Quantities</th><th style="width:39%">Discount Rates(%)</th><th></th></tr>';
        for(var i = num; i <= 330; i++){
            if((parseInt(i) % parseInt(num)) === 0){
                if(parseInt(2*num) != i){
                    current = i;
                    var next    = current - parseInt(num) + parseInt(1);
                    if(num == current){
                        var parmeter = "1_to_"+(2 * parseInt(current))+"_Minutes";
                        table += '<tr><td>'+"1 to "+(2 * parseInt(current))+" Minutes"+'</td><td>'+(2 * parseInt(current))+'</td><td><input type="text" class="form-control quotetxt num" id="'+parmeter+'" name="'+parmeter+'" value=""></td><td></td></tr>';
                    }
                    else{
                        var parmeter = next+"_to_"+current+"_Minutes";
                        table += '<tr><td>'+next+" to "+current+" Minutes"+'</td><td>'+current+'</td><td><input type="text" class="form-control quotetxt num" id="'+parmeter+'" name="'+parmeter+'" value=""></td><td></td></tr>';
                    }
                }
            }
        }if(current != 330){
            var number = parseInt(current) + parseInt(1);
            table += '<tr><td>'+number+" to 330 Minutes"+'</td><td>100</td><td><input type="text" class="form-control quotetxt num" id="'+number+"_to_100_Minutes"+'" name="'+number+"_to_100_users"+'" value=""></td><td></td></tr>';
        }
        table += '</table>';
   
    $(".open_event_quote_table").html(table);
}
