jQuery(function($) {
    $(window).scroll(function(){
        if($(this).scrollTop()>130){
            $('#container_menu').addClass('fixed');
        }
        else if ($(this).scrollTop()<130){
            $('#container_menu').removeClass('fixed');
        }
    });
});

$(document).ready(function(){
    var touch = $('#touch-menu');
    var menu = $('.nav');
 
    $(touch).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
    $(window).resize(function(){
        var wid = $(window).width();
        if(wid > 760 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
    
});

$(".show a").click(function(){
        
    //e.preventDefault();
    console.log(this);
    $(this).siblings().removeClass("active"); // удаление класса active у всех button в .show
    $(this).addClass("active"); // добавление класса active к выбранному button
    // return false; 
});
    
$(".faq_link").click(function(e){
        
    e.preventDefault();
    
    $(this).siblings(".faq_answ").slideToggle();
    
   $(this).closest(".faq_item").toggleClass("active"); 
    
});

$(document).ready(function(){
    $('.productItem').hover(
        function() {
            $(this).addClass('visible');
        },
        function() {
            $(this).removeClass('visible');
        }
    );

    $('.pItemImgWrap').hover(
        function() {
            $(this).addClass('visible');
        },
        function() {
            $(this).removeClass('visible');
        }
    );
    
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,        
        arrows: true,
        responsive: [
    {
      breakpoint: 1240,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true
      }
    },]
    });

  });

function del_spaces(str) {
    str = str.toString();
    str = str.replace(/\s/g, '');
	return str;
}

function input_spaces(str) {
    str = str.toString();
    str = str.replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 ');
	return str;
}

function summa(sum) {
    sum = del_spaces(sum);
    sum = parseInt(sum);
    sum += add;
    sum = input_spaces(sum);
    document.getElementsByClassName('summ')[0].innerHTML = sum;
    return sum;   
}

function minus(sum) {
    parseInt(sum);
    sum = del_spaces(sum);
    sum -= add;
    sum = input_spaces(sum);
    document.getElementsByClassName('summ')[0].innerHTML = sum; 
    return sum;
}

sum = parseInt(del_spaces(document.getElementsByClassName('summ')[0].innerHTML)); 
click = document.getElementsByClassName('checkbox');

for(y = 0; y < 4; y++) {
    click[y].onclick = function() {
        if ( this.checked ) {
            for(z = 0; z <= this.value; z++) {
                add = parseInt(del_spaces(document.getElementsByClassName('adding')[this.value].innerHTML));
                return sum = summa(sum);
            }
        } else {
            for(z = 0; z <= this.value; z++) {
                add = parseInt(del_spaces(document.getElementsByClassName('adding')[this.value].innerHTML));  
                return sum = minus(sum);
            }
        }
    };
}


answer = 'Ваше сообщение успешно отправлено!';

$(function() {
  'use strict';
  $('#form').on('submit', function(e) {
    e.preventDefault();
    console.log('#form');
    $.ajax({
      url: 'send.php',
      type: 'POST',
      contentType: false,
      processData: false,
      data: new FormData(this),
    });
    $('.form').find('input[type=text], textarea').val('');
    $('.form').find('input[type=email], textarea').val('');
    document.getElementById('answer').innerHTML = answer;  
  });
});

