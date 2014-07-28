$(document).ready(function() {

    jQuery('.navbar-toggle').click(function (event) {
        event.preventDefault();
        if($( window ).width()<=830){
            if(!jQuery('.accordion').is(':visible')) {
                jQuery('.accordion').slideDown('fast');
            } else {
                jQuery('.accordion').slideUp('fast');
            }}
        else{
            jQuery('.accordion').css('display','none');
        }
    });
    if ($("#owl-1").length > 0){
        $("#owl-1").owlCarousel(
            {
                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items : 3,
                itemsDesktop : [1300,3],
                itemsDesktopSmall : [1199,2],
                itemsMobile : [700,1]
            });
}
    if ($("#owl-2").length > 0){
        $("#owl-2").owlCarousel(
            {
                autoPlay: false, //Set AutoPlay to 3 seconds
                singleItem:true
            });
}
/*$(".link").click(function(e)
{

    $(".sidebar").find("a").removeClass("active");
    var senderElement = e.target;
    var url = $(this).find("a").attr("href");
*//*
   $(".link").find("a").removeClass("active") ;
 $( "li" ).has( "ul" ).

 *//*   if($(this).has("ul"))
{
    $(this).find("a").addClass("active") ;

}
    else
{
    $(this).find("a").addClass("active") ;
}
    window.location = url;
    return true;
});*/
    jQuery(".link").click(function(e)
    {

        jQuery(".sidebar").find("a").removeClass("active");
        var senderElement = e.target;
        var url = jQuery(this).find("a").attr("href");
        /*
         $(".link").find("a").removeClass("active") ;
         $( "li" ).has( "ul" ).

         */
        jQuery(this).addClass("active") ;
        return true;
    });


        bodyelem = $("body");

    $(window).scroll(function () {

            if (bodyelem.scrollTop() > 218)
            {
                $('.sidebar').css('top',30);




            }
            else
            {
                $('.sidebar').css('top',256 - bodyelem.scrollTop());
            }

});
});

