$(document).ready(function(){

var className = $('body').attr('class');

$('.'+className+'').addClass('active');

$(".tab").click(function(){
	$(this).addClass('active').siblings().removeClass('active');
	$('.tab-content').removeClass('active');
	var tabClass = $(this).attr('id');
	$('.'+tabClass+'').addClass('active');

});

});