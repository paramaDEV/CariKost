$(document).ready(()=>{
    $(".text").animate({opacity:"100%"},1200);
    $(".imgB").animate({left:'100px'},1500);
    $(".imgC").animate({left:'150px'},2000);
    $(".imgD").animate({left:'170px'},1000);
    $(".imgA").animate({left:'30px'},1200);
    $(".text button").animate({width:'220px'},"slow");
    $(".text button").animate({width:'200px'},"slow");


    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  

});