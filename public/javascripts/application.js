$(document).ready(function(){

var className = $('body').attr('class');

console.log(className);

$('.'+className+'').addClass('active');

});