$(document).ready(function () {
    active = 0;

    $(".navigation").mouseover(function () {
        $(".navigation").removeClass("active");
    });

    $(".navigation").mouseout(function(){
        $(".navigation").each(function(i){
            if(i == active){
                $(this).addClass("active");
            }
        });
    });

    $(".navigation").click(function () {
        $(".navigation").removeClass("active");
        $(this).addClass("active");

        switch ($(this).data("navigation")) {
            case 'home':
                //show home
                $(".about, .blog").fadeOut("fast", () => {
                    $(".content").fadeIn();
                });
                active = 0;
                break;

            case 'blog':
                //show about
                $(".content, .about").fadeOut("fast", () => {
                    $(".blog").fadeIn();
                });
                active = 1;
                break;

            case 'about':
                //show about
                $(".content, .blog").fadeOut("fast", () => {
                    $(".about").fadeIn();
                });
                active = 2;
                break;
            default:
                break;
        }
    });

    //open and close alert
    $(".open-alert").click(function(){
        $(".alert").css({"display":"flex"});
        $(".overlay").css({"display":"block"});
    });

    $("#close-alert").click(function(){
        $(".alert").css({"display":"none"});
        $(".overlay").css({"display":"none"});
    });
});
















// and erase
