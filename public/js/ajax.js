// Ajax pagination
$(window).on('hashchange', function () {
    if (window.location.hash) {
        var page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        } else {
            getProducts(page);
        }
    }
});
$(function () {
    $('#ajaxproducts').on('click', '.pagination a', function (e) {
        var url = $(this).attr('href');
        var hashes = url.split("?")[1];
        var page = $(this).attr('href').split('page=')[1];
        getProducts(hashes.split('page').reverse()[1], page);
        e.preventDefault();
    });
});
function getProducts(data, page) {
    $.ajax({
        url: '?' + data + 'page=' + page,
        type: "GET",
        dataType: 'json',
    }).done(function (data) {
        $('#ajaxproducts').html(data);
    }).fail(function () {
        alert('Posts could not be loaded.');
    });
}
// End Ajax pagination
//Submit Ajax Form with checkboxes
$(document).ready(function () {
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
    function ajaxFilters() {
        var form = $("#categories");
        $.ajax({
            type: "GET",
            url: form.attr("action"),
            data: form.serialize(),
            dataType: 'json',
        }).done(function (data) {
            $('#ajaxproducts').html(data);
        }).fail(function () {
            alert('Items could not be loaded.');
        });
    }

    $("input[type='checkbox']").on("click", ajaxFilters);
    $(".submit").hide();
});