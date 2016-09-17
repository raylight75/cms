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
//Fancybox
$(document).ready(function () {
    $(".fancybox").fancybox({});
});
//End Fancybox
