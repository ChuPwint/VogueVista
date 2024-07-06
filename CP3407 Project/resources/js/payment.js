$(document).ready(function () {
    $(".cardChoose").click(function () {
        //change background in button and text color
        if ($(".cardChoose").hasClass("bg-opacity-40")){
            $(".cardChoose").removeClass("bg-opacity-40");
            $(".cashChoose").addClass("bg-opacity-40");
        }

        if ($(".cardTxt").hasClass("font-light text-opacity-90")){
            $(".cardTxt").removeClass("font-light text-opacity-90").addClass("font-semibold");
            $(".cashTxt").removeClass("font-semibold").addClass("font-light text-opacity-90");
        }

        if ($(".cardPay").hasClass("hidden")) {
            $(".cardPay").removeClass("hidden").addClass("block");
            $(".cashPay").removeClass("flex").addClass("hidden");
        }
    });

    $(".cashChoose").click(function () {
        //change background in button and text color
        if ($(".cashChoose").hasClass("bg-opacity-40")){
            $(".cashChoose").removeClass("bg-opacity-40");
            $(".cardChoose").addClass("bg-opacity-40");
        }

        if ($(".cashTxt").hasClass("font-light text-opacity-90")){
            $(".cashTxt").removeClass("font-light text-opacity-90").addClass("font-semibold");
            $(".cardTxt").removeClass("font-semibold").addClass("font-light text-opacity-90");
        }

        if ($(".cashPay").hasClass("hidden")) {
            $(".cashPay").removeClass("hidden").addClass("flex");
            $(".cardPay").removeClass("block").addClass("hidden");
        }
    });
});
