jQuery(document).ready(function() {
    if (jQuery("#owl-1").length > 0){
        jQuery("#owl-1").owlCarousel(
            {
                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items : 3,
                itemsDesktop : [1300,3],
                itemsDesktopSmall : [1199,2],
                itemsMobile : [740,1]
            });
    }
    if (jQuery("#owl-2").length > 0){
        jQuery("#owl-2").owlCarousel(
            {
                autoPlay: false, //Set AutoPlay to 3 seconds
                items : 3,
                itemsDesktop : [1300,3],
                itemsDesktopSmall : [1080,2],
                itemsMobile : [550,1],
                navigation : true,
                navigationText : false,
                pagination: false,
                slideSpeed: 500
            });
    }
    jQuery('.navbar-toggle').click(function (event) {
        event.preventDefault();
        if(jQuery( window ).width()<=830){
            if(!jQuery('.accordion').is(':visible')) {
                jQuery('.accordion').slideDown('fast');
            } else {
                jQuery('.accordion').slideUp('fast');
            }}
        else{
            jQuery('.accordion').css('display','none');
        }
    });

    jQuery(".sidebar span").click(function(){
        //slide up all the link lists
        jQuery(".sidebar ul ul").slideUp();
        //slide down the link list below the h3 clicked - only if its closed
        if(!jQuery(this).next().is(":visible"))
        {
            jQuery(this).next().slideDown();
        }
    });
    var url = window.location.toString() ;// this will return http://mydomain.com/pagename.html?query=xxxxxx

    jQuery('.sidebar .subcat a').each(function(){
        var myHref= jQuery(this).attr('href');
        if( url.match( myHref)) {
            jQuery(this).addClass('underline');
            jQuery(this).closest('ul').show();
        }
    });


    var links= jQuery(".sidebar").find("a");
    links.click(function(e)
    {

        jQuery(".sidebar").find("a").removeClass("underline");
        var senderElement = e.target;
        var url = jQuery(this).find("a").attr("href");
        jQuery(this).addClass("underline") ;
        return true;
    });


       var bodyelem = jQuery(window);

    jQuery(window).scroll(function () {
        var scrollPosition = window.pageYOffset;
        var windowSize     = window.innerHeight;
        var bodyHeight     = document.body.offsetHeight;



            if (bodyelem.scrollTop() > 150)
            {
                jQuery('.sidebar').css('top',65);
                jQuery('.sidebar').css({'bottom':'auto'});

            }
            else
            {
                jQuery('.sidebar').css('top',205 - bodyelem.scrollTop());
                jQuery('.sidebar').css({'bottom':'auto'});

            }
            if(jQuery(window).width()<=1053)
            {
                if ((bodyHeight - (scrollPosition + windowSize))<74) {

                    jQuery('.sidebar').css({'top':'auto','bottom':175});}
            }
            else
            {
                if ((bodyHeight - (scrollPosition + windowSize))<44) {

                    jQuery('.sidebar').css({'top':'auto','bottom':146});}
            }



});
});

