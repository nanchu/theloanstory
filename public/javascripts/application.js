$(document).ready(function(){

var className = $('body').attr('class');

$('.'+className+'').addClass('active');

$(".tab").click(function(){
	$(this).addClass('active').siblings().removeClass('active');
	$('.tab-content').removeClass('active');
	var tabClass = $(this).attr('id');
	$('.'+tabClass+'').addClass('active');

});


$(".list-item").click(function(){
	$(".list-item").removeClass('active');
	$(this).addClass('active');
	var position = $(this).position();
	console.log(position.left);
	$(this).children('.child-content').css('margin-left', '-'+ position.left - (-42) +'px');
});

$(".icon-menu").click(function(){
	$('nav').addClass('active');
});

});