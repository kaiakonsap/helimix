$(document).ready(function() {

    if ($("#owl-1").length > 0){
        $("#owl-1").owlCarousel(
            {
                //autoPlay: 3000, //Set AutoPlay to 3 seconds

                items : 3,
                itemsDesktop : [1199,2],
                itemsDesktopSmall : [979,2]
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
    $(".link").click(function(e)
    {

        $(".sidebar").find("a").removeClass("active");
        var senderElement = e.target;
        var url = $(this).find("a").attr("href");
        /*
         $(".link").find("a").removeClass("active") ;
         $( "li" ).has( "ul" ).

         */
        $(this).addClass("active") ;
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