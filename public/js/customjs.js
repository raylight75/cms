// Ajax pagination
$(window).on('hashchange', function() {
  if (window.location.hash) {
    var page = window.location.hash.replace('#', '');
    if (page == Number.NaN || page <= 0) {
      return false;
    } else {
      getProducts(page);
    }
  }
});
$(function() {
  $('#ajaxproducts').on('click', '.pagination a', function (e) {
    var url = $(this).attr('href');
    var hashes = url.split("?")[1];
    var page = $(this).attr('href').split('page=')[1];
    getProducts(hashes.split('page').reverse()[1],page);
    e.preventDefault();
  });
});
function getProducts(data,page) {
  $.ajax({
    url : '?' + data + 'page='+ page,
    type: "GET",
    dataType: 'json',
  }).done(function (data) {
    $('#ajaxproducts').html(data);
  }).fail(function () {
    alert('Posts could not be loaded.');
  });
}
// End Ajax pagination
$(function() {
	$('#categories input:checkbox').on('click', function() {
		if ($(this).is(":checked"))
			$("#categories").submit();
		if ($('input:checkbox').is(':checked'))
			$("#categories").submit();
	});
	$(".submit").hide();
});
$("input[name=price]").on('change', function() {
	$("input[name=price]").not(this).prop('checked', false);
});
$("input[name=name]").on('change', function() {
	$("input[name=name]").not(this).prop('checked', false);
});
/* $(document).ready(function(){
$("li.pagination a, li.prev a, li.next a, li.active a ").click(function() {
$.ajax({
  type: "GET",
  url: $(this).attr('href'),
  dataType: 'html',
  success: function(html){
	    var $page_data = $(html);
	$('#container').html($page_data.find('div#container'));
  }
});               
return false;
});            
}); */