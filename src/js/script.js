// js
console.log('geral');

// $(document).ready(function () {



// });    

var regioes = $(".menu-item-has-children");

$(regioes).click(function () {

    if(regioes.find(".sub-menu").hasClass('show')) {
        $(this).find(".sub-menu").hide().removeClass('show');
    } else {
        $(this).find(".sub-menu").show().addClass('show');
    }
    
});


$(document).scroll(function() {
    var scrollTop = $(window).scrollTop();
        if (scrollTop >= 10 ) {
            $('.menu-principal').addClass("scroll");
        }
        else{
            $('.menu-principal').removeClass("scroll");
        }
  });