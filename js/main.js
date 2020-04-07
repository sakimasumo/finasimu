$(document).ready(function()
{
// （２）▼▼▼ 
	window.onload = function (){	$(window).scrollTop(<?php echo $position; ?>);}
// （２）▲▲▲
 
// （３）▼▼▼
	$("input[type=submit]").click(function()
	{
// （３）▲▲▲
 
// （４）▼▼▼
	 	var position = $(window).scrollTop();
		$("input:hidden[name=position]").val(position);
// （４）▲▲▲
 
		$("#form").submit();
	});
});