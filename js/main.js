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