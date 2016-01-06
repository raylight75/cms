$(document).ready(function(){
	$("li.pagination a, li.prev a, li.next a, li.active a ").click(function(e) {
		 e.preventDefault();
    $.ajax({
      type: "GET",
      url: $(this).attr('href'),
      dataType: 'html',
      success: function(html){
        $("#container").html(html);
        $("#blog").html(html);
      }
    });               
    return false;
  });            
});
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