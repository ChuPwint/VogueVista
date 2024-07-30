$(document).ready(function () {
    $(".categoryToggle").click(function () {
        if ($(".categoryShow").hasClass("hidden")) {
            $(".categoryShow").removeClass("hidden");
            $(".categoryShow").addClass("flex");
        } else {
            $(".categoryShow").removeClass("flex");
            $(".categoryShow").addClass("hidden");
        }
    });

    $(".womenCategory").click(function () {
        if ($(".womenCategoryShow").hasClass("hidden")) {
            $(".womenCategoryShow").toggle();
        } else {
            $(".womenCategoryShow").removeClass("flex");
            $(".womenCategoryShow").toggle();
        }
    });

    $(".menCategory").click(function () {
        if ($(".menCategoryShow").hasClass("hidden")) {
            $(".menCategoryShow").toggle();
        } else {
            $(".menCategoryShow").removeClass("flex");
            $(".menCategoryShow").toggle();
        }
    });

    $(".accessoryCategory").click(function () {
        if ($(".accessoryCategoryShow").hasClass("hidden")) {
            $(".accessoryCategoryShow").toggle();
        } else {
            $(".accessoryCategoryShow").removeClass("flex");
            $(".accessoryCategoryShow").toggle();
        }
    });


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
