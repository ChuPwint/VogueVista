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

    //Sorting
    // $("#dropdown").change(function () {
    //     console.log($(this).val());
    //     $.ajax({
    //         url: "../../Controller/allProduct/sortMerchantProductController.php",
    //         type: "POST",
    //         data: {
    //             sortText: $(this).val(),

    //         },

    //         success: function (result) {
    //             let products = JSON.parse(result);

    //             $("#sortResult").empty();
    //             let counter = 0;
    //             let count = 1;
    //             for (const product of products) {
    //                 counter++;
    //                 let rowClass = (counter % 2 === 0) ? 'bg-gray-200' : 'bg-white';
    //                 $("#sortResult").append(
    //                     `<tr class="productSubmitData ${rowClass}">
    //           <td class="p-2 text-center">${count++}</td>
    //           <td class="p-2 text-center">${product.p_name}</td>
    //           <td class="p-2 text-center">${product.category_name}</td>
    //           <td class="p-2 text-center">${product.p_stock}</td>
    //           <td class="p-2 text-center">${product.buy_price} Ks</td>
    //           <td class="p-2 text-center">${product.sell_price} Ks</td>
    //           <td class=" p-2 text-center font-semibold underline cursor-pointer">
    //           <a href="../../Controller/allProduct/productDetailShowController.php?id=${product.id}">View Detail</a> 
    //           </td>
    //           </tr>
    //           `
    //                 );
    //             }
    //         },
    //         error: function (error) {
    //             console.log(error);
    //         },
    //     });
    // });
});
