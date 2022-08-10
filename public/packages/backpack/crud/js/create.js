/*
*
* Backpack Crud / Create
*
*/

jQuery(function ($) {

    'use strict';

    console.log("ready!");
    let url = $('#hidden_route').val();
    console.log(url);

    $('#parent_id').on('change', function () {

        console.log($(this).val());

        $('#sub_category').removeAttr('disabled');

        let id = $(this).val();

        $.ajax({
            url: "/admin/category/get_category_children",
            method: "GET",
            data: {
                id: id
            },
            success: function (data) {
                $('#sub_category_wrapper').remove();
                $(data).insertAfter("#parent_id_wrapper");
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
    // if (url === 'item.create'){

    // }
    $( document ).ajaxComplete(function() {
        $('#sub_category').on('change', function () {

            console.log($(this).val());

            $('#sub_category_2').removeAttr('disabled');

            let id = $(this).val();

            $.ajax({
                url: "/admin/category/get_category_2_children",
                method: "GET",
                data: {
                    id: id
                },
                success: function (data) {
                    $('#sub_category_2_wrapper').remove();
                    $(data).insertAfter("#sub_category_wrapper");
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    });


});
