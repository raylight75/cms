$(document).ready(function () {
    $('#categories input:checkbox').on('click', function () {
        if ($(this).is(":checked"))
            $("#categories").submit();
        if ($('input:checkbox').is(':checked'))
            $("#categories").submit();
    });
    $(".submit").hide();
    $('#priceasc,#pricedesc,#nameasc,#namedesc').on('click', function (e) {
        e.preventDefault();
        var inputAttr = {};
        inputAttr.type = 'hidden';
        if (this.id == 'priceasc') {
            inputAttr.name = 'price';
            inputAttr.value = 'asc';
        } else if (this.id == 'pricedesc') {
            inputAttr.name = 'price';
            inputAttr.value = 'desc';
        } else if (this.id == 'nameasc') {
            inputAttr.name = 'name';
            inputAttr.value = 'asc';
        } else if (this.id == 'namedesc') {
            inputAttr.name = 'name';
            inputAttr.value = 'desc';
        }
        $('<input>').attr(inputAttr).appendTo('form');
        $('#categories').submit();
    });
});
//Live Searxh AJAX
$(document).ready(function () {
    $('#search_text').keyup(function () {
        var txt = $(this).val();
        if (txt != '') {
            $.ajax({
                url: route,//var from filter_view.blade.php
                method: "get",
                data: {search: txt},
                dataType: "json",
                success: function (data) {
                    $('#ajaxproducts').html(data);
                }
            });
        }
        else {
            $('#ajaxproducts').html('');
        }
    });
});
//End Live Search