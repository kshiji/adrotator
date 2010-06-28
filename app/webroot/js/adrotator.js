/**
* Ad Rotator plugin
* @author fred.isaacs@gmail.com
* 
* Expects JSON format: 
* [
*    {
*        "id":"8",
*        "sponsor_id":"1",
*        "caption":"bobs face",
*        "image":"bob-0.jpg",
*        "link":"http:\/\/bob.com",
*        "created":"2010-06-26 19:05:32",
*        "modified":"2010-06-26 19:34:07",
*        "path":"\/adrotator\/uploads\/campaign\/image\/thumb\/medium\/bob-0.jpg"
*    },
*    {
*        "id":"12",
*        "sponsor_id":"1",
*        "caption":"llamas are half off!",
*        "image":"farms005650.jpg",
*        "link":"http:\/\/llama.com",
*        "created":"2010-06-26 20:49:32",
*        "modified":"2010-06-26 20:49:32",
*        "path":"\/adrotator\/uploads\/campaign\/image\/thumb\/medium\/farms005650.jpg"
*    }
* ]        
**/
(function($)
{
    $.fn.adrotator = function(options)
    {
        var $el = $(this);
    
        var defaultOptions = {
            url :  "/adrotator/campaigns/display", 
            target: "_blank",
            captions: false,
            limit: 4,
            size: "medium"    
        };
        
        var config = $.extend({},defaultOptions, options);
            
        var endpoint = config.url + "/limit:" + config.limit + "/size:" + config.size;
            
        $.getJSON(endpoint, function(data) 
        {
            $.each(data, function(i,item) 
            {
               
                var $outer = $("<div></div>").addClass("campaign");
                
                var $img = $("<img/>").attr("src", item.path);
                
                var $link = $("<a/>").attr("href", item.link).attr("target", config.target);
                
                if(config.captions) {
                    $link.attr('title',item.caption);
                }
                
                $link.append($img);
                $outer.append($link);
                $el.append($outer);
            });
            
            var $clear = $("<div></div>").css('clear','both');
            $el.append($clear);
        });
        
        
        
        return $el;
    };
    
})(jQuery);
            

            
