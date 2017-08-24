// Owlcarosoul Homepage
$('.slider-homepage').owlCarousel({
    margin:10,
    nav:true,
    navText: ["<img src='http://gettimee.ekuiva.com/wp-content/uploads/2017/08/left.png'>","<img src='http://gettimee.ekuiva.com/wp-content/uploads/2017/08/right.png'>"],
    responsive:{
        0:{
            items: 1,
            nav: false
        },
        800: {
            items: 1,
            nav: false
        },
        1000:{
            items:1
        }
    }
});

// Scrolling Smooth
$(document).ready(function() { 
    $('#nav-down').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 800);
        return false;
    });
    $('#nav-down-choose').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 800);
        return false;
    });
    $('#nav-down-gettimee-fitur').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 800);
        return false;
    });
    $('#nav-down-choose').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 800);
        return false;
    });
    $('#nav-down-contact').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 800);
        return false;
    });
});

// Validator Number
$(document).on("input", ".number", function () {
    this.value = this.value.replace(/[^\d\+]/g, '');
});

// Tabs Mobile Accordion (Untuk Membedakan Warna Ketika Aktif)
$('#accordion .card').on("click", function () {
    $(this).siblings().find(".panel-clr").removeClass("on");
    $(this).find(".panel-clr").toggleClass("on");
});