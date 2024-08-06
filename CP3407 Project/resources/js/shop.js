$(document).ready(function () {
    $(".like").click(function () {
        // Get the index of the clicked icon among all elements with class 'like'
        var index = $(".like").index(this);
        console.log(index);
        if ($(".like").eq(index).attr('name') == 'heart-outline') {
            // Fill color and change icon
            $(".like").eq(index).attr('name', 'heart');
            $(".like").eq(index).addClass("text-red-500");
        } else {
            // Fill color and change icon
            $(".like").eq(index).attr('name', 'heart-outline');
            $(".like").eq(index).removeClass("text-red-500");
        }
    });

});
