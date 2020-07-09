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
                $(".about").fadeOut("fast", () => {
                    $(".content").fadeIn();
                });
                active = 0;
                break;

            case 'about':
                //show about
                $(".content").fadeOut("fast", () => {
                    $(".about").fadeIn();
                });
                active = 2;
                break;
            default:
                break;
        }
    });
});