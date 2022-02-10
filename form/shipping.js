 let input_radio_standart =$('.input_radio_standart');
 let input_radio_fast =$('.input_radio_fast');
 let continue_to_payment =$('#continue_to_payment');
 let w = screen.width;




$('.input_radio_standart').eq(0).on("change", function(e){ 
    $('input[name^=field]').each(function()
    { 
      if(e.target != this) {
        this.checked = false;
        continue_to_payment.css('cursor','pointer');
    }
    
    });
})

$('.input_radio_standart').eq(0).on('submit', function() {
     return $('input[name^=field]:checked:enabled').length == 1;
});


$('.input_radio_fast').eq(0).on("change", function(e){ 
    $('input[name^=field]').each(function()
    { 
      if(e.target != this) {
        this.checked = false;
        continue_to_payment.css('cursor','pointer');
    }
     

    });
})

$('.input_radio_fast').eq(0).on('submit', function() {
     return $('input[name^=field]:checked:enabled').length == 1;
});

function forMobile() {
    w = screen.width;
    if (w <= 780) {
        $('.customer_info').remove();
        $('.customer_info_payment').remove();
       $('.info_block').css('justify-content','center');
    }
}
forMobile();

$( window ).resize(function() {
    forMobile();
});
