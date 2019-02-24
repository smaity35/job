
$(document).ready(function(){
	
"use strict";

var $dipper = $('.dipper');
$dipper.waypoint(function (direction) {
  if (direction == 'down') {
    $dipper.addClass('dipper-animate');
  } else {
    $dipper.removeClass('dipper-animate');
  }
}, { offset: '80%' });



var $dipper2 = $('.trigar2');
$dipper2.waypoint(function (direction) {
  if (direction == 'down') {
    $dipper2.addClass('dipper-animate');
  } else {
    $dipper2.removeClass('dipper-animate');
  }
}, { offset: '80%' });


var $dipper3 = $('.trigar3');
$dipper3.waypoint(function (direction) {
  if (direction == 'down') {
    $dipper3.addClass('dipper-animate');
  } else {
    $dipper3.removeClass('dipper-animate');
  }
}, { offset: '80%' });


var $dipper4 = $('.trigar4');
$dipper4.waypoint(function (direction) {
  if (direction == 'down') {
    $dipper4.addClass('dipper-animate');
  } else {
    $dipper4.removeClass('dipper-animate');
  }
}, { offset: '80%' });

	
var $dipper5 = $('.trigar5');
$dipper5.waypoint(function (direction) {
  if (direction == 'down') {
    $dipper5.addClass('dipper-animate');
  } else {
    $dipper5.removeClass('dipper-animate');
  }
}, { offset: '80%' });


});


