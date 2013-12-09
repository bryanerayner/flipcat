$(document).ready(function(){ 

$('#slider').css("background", "url(images/slider/stuntman.jpg) no-repeat top right");

$('#slider1').click(function()
{
  $('#slider').css("background", "url(images/slider/dog.jpg) no-repeat top right");
  $('#slider1').attr('class', 'titleOn');
  $('#slider2').attr('class', 'titleOff');
  $('#slider3').attr('class', 'titleOff');
  $('#slider4').attr('class', 'titleOff');
  $('#slider5').attr('class', 'titleOff');
  $('#slider1Arrow').attr('class', 'titleArrow');
  $('#slider2Arrow').attr('class', 'titleNoArrow');
  $('#slider3Arrow').attr('class', 'titleNoArrow');
  $('#slider4Arrow').attr('class', 'titleNoArrow');
  $('#slider5Arrow').attr('class', 'titleNoArrow');
});

$('#slider2').click(function()
{
  $('#slider').css("background", "url(images/slider/depression.jpg) no-repeat top right");
  $('#slider1').attr('class', 'titleOff');
  $('#slider2').attr('class', 'titleOn');
  $('#slider3').attr('class', 'titleOff');
  $('#slider4').attr('class', 'titleOff');
  $('#slider5').attr('class', 'titleOff');
  $('#slider1Arrow').attr('class', 'titleNoArrow');
  $('#slider2Arrow').attr('class', 'titleArrow');
  $('#slider3Arrow').attr('class', 'titleNoArrow');
  $('#slider4Arrow').attr('class', 'titleNoArrow');
  $('#slider5Arrow').attr('class', 'titleNoArrow');
});

$('#slider3').click(function()
{
  $('#slider').css("background", "url(images/slider/flower.jpg) no-repeat top right");
  $('#slider1').attr('class', 'titleOff');
  $('#slider2').attr('class', 'titleOff');
  $('#slider3').attr('class', 'titleOn');
  $('#slider4').attr('class', 'titleOff');
  $('#slider5').attr('class', 'titleOff');
  $('#slider1Arrow').attr('class', 'titleNoArrow');
  $('#slider2Arrow').attr('class', 'titleNoArrow');
  $('#slider3Arrow').attr('class', 'titleArrow');
  $('#slider4Arrow').attr('class', 'titleNoArrow');
  $('#slider5Arrow').attr('class', 'titleNoArrow');
});

$('#slider4').click(function()
{
  $('#slider').css("background", "url(images/slider/stuntman.jpg) no-repeat top right");
  $('#slider1').attr('class', 'titleOff');
  $('#slider2').attr('class', 'titleOff');
  $('#slider3').attr('class', 'titleOff');
  $('#slider4').attr('class', 'titleOn');
  $('#slider5').attr('class', 'titleOff');
  $('#slider1Arrow').attr('class', 'titleNoArrow');
  $('#slider2Arrow').attr('class', 'titleNoArrow');
  $('#slider3Arrow').attr('class', 'titleNoArrow');
  $('#slider4Arrow').attr('class', 'titleArrow');
  $('#slider5Arrow').attr('class', 'titleNoArrow');
});

$('#slider5').click(function()
{
  $('#slider').css("background", "url(images/slider/team.jpg) no-repeat top right");
  $('#slider1').attr('class', 'titleOff');
  $('#slider2').attr('class', 'titleOff');
  $('#slider3').attr('class', 'titleOff');
  $('#slider4').attr('class', 'titleOff');
  $('#slider5').attr('class', 'titleOn');
  $('#slider1Arrow').attr('class', 'titleNoArrow');
  $('#slider2Arrow').attr('class', 'titleNoArrow');
  $('#slider3Arrow').attr('class', 'titleNoArrow');
  $('#slider4Arrow').attr('class', 'titleNoArrow');
  $('#slider5Arrow').attr('class', 'titleArrow');
});

});