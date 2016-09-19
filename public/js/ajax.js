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
        e.preventDefault();
        var url = $(this).attr('href');
        var hashes = url.split("?")[1];
        var page = $(this).attr('href').split('page=')[1];
        getProducts(hashes.split('page').reverse()[1], page);
        history.pushState({page: this.href}, '', this.href);
    });
    $(window).on('popstate', function (e) {
        getHistory(e.originalEvent.state.page)
    });
});
function getHistory(url) {
    $.ajax({
        url: url,
        type: "GET",
        dataType: 'json',
    }).done(function (data) {
        $('#ajaxproducts').html(data);
    }).fail(function () {
        alert('Products could not be loaded.');
    });
}
function getProducts(data, page) {
    $.ajax({
        url: '?' + data + 'page=' + page,
        type: "GET",
        dataType: 'json',
    }).done(function (data) {
        $('#ajaxproducts').html(data);
    }).fail(function () {
        alert('Products could not be loaded.');
    });
}
// End Ajax pagination
//Submit Ajax Form with checkboxes and sorting
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
//End Ajax Form
/*
 $(document).ajaxComplete(function (ev, jqXHR, settings) {
 var stateObj = {url: settings.url, innerhtml: document.body.innerHTML};
 window.history.pushState(stateObj, settings.url, settings.url);
 });
 window.onpopstate = function (event) {
 var currentState = history.state;
 document.body.innerHTML = currentState.innerhtml;
 };*/
