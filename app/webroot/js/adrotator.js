jQuery.fn.adrotator = function(options)
{
        var $el = jQuery(this);
    
        var defaultOptions = {
            url :  "/adrotator/campaigns/display", 
            target: "_blank",
            captions: false,
            limit: 5,
            size: "image",
            rotate: true,
            rotateSeconds: 30,
            columns: 1
        };
        
        var config = jQuery.extend(defaultOptions,options);
        
        jQuery.fn.adrotator.load(config,$el);
    
        var interval = (config.rotateSeconds * 1000);
        
        if(config.rotate) {
            setInterval(
                function() {           
                    jQuery.fn.adrotator.reload(config,$el);
                },
                interval
            );
        }

        return $el;
};

jQuery.fn.adrotator.load = function(config, $el) 
{
   // tstamp = new Date().getDate() or some shit
    var endpoint = config.url + "/limit:" + config.limit + "/size:" + config.size;

    jQuery.ajax({ url: endpoint, dataType: 'json', cache: false, success: function(data)  
    {
        jQuery.fn.adrotator.buildCampaigns(config, $el, data);
    }});
    
    return $el;
}

jQuery.fn.adrotator.reload = function (config, $el) 
{
   
    var endpoint = config.url + "/limit:" + config.limit + "/size:" + config.size;

    jQuery.ajax({ url: endpoint, dataType: 'json', cache: false, success: function(data)  
    {
            $el.fadeOut(300, function() 
            {
                jQuery.fn.adrotator.buildCampaigns(config, $el, data);
            });
    }});

    return $el;
};

jQuery.fn.adrotator.buildCampaigns = function(config, $el, data) 
{

    $el.find(".campaign").remove();

    var counter = 1;

    jQuery.each(data, function(i,item) 
    {
        
        var $campaign = jQuery("<div></div>").addClass("campaign");
        
        var $img = jQuery("<img/>").attr("src", item.path);
        
        var $link = jQuery("<a/>").attr("href", item.link).attr("target", config.target);
        
        if(config.captions) {
            $link.attr('title',item.caption);
        }
        
        $link.append($img);
        
        $campaign.append($link).appendTo($el);
        
        if(config.columns > 0) {
            if((counter % config.columns) == 0) {

                $el.append($("<div></div>").css('clear','both'));   
            }
        }
        counter++;
    });
                
    $el.append($("<div></div>").css('clear','both'));        
    $el.fadeIn(300);

};
-->


