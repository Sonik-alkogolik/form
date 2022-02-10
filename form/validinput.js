$(document).ready(function(){
 let first_name = $('#first_name');
 let form_text = $('#form_text');
 let last_name = $('#last_name');
 let last_text = $('#last_text');
 let tel = $('.tel');
 let phone = $('.phone');
 let form_text_phone = $('#form_text_phone');
 let continue_to_shipping = $('#continue_to_shipping');
 let tel_input = $('#tel_input');



 first_name.blur(function(){
 if(first_name.val() != ''){  

 if(first_name.val().length <= 2) {
 $('#valid').text('Минимум 3 буквы');
 $('#valid').css('padding-left','55px');
 $('#valid').css('transform','translateX(200px)');
 $('#valid').css('color','#BE4848');
 $('#valid').css('font-size','16px');
 first_name.css('border','1px solid #BE4848');

  return false;
 }
 else
 {
 $('#valid').text('');
 first_name.css('border','1px solid #d4d9dd');
 last_name.css('border','1px solid #d4d9dd');
 last_text.css('color','#909599');
 form_text_phone.css('color','#909599');
 form_text.css('color','#909599');
 return true;
 }
 
 }
    });


 last_name.blur(function(){
 if(last_name.val() != ''){  

 if(last_name.val().length <= 2) {
$('#valid_last').text('Минимум 3 буквы');
 $('#valid_last').css('padding-left','55px');
 $('#valid_last').css('transform','translateX(200px)');
 $('#valid_last').css('color','#BE4848');
 $('#valid_last').css('font-size','16px');
 last_name.css('border','1px solid #BE4848');

  return false;
 }
 else
 {
 $('#valid_last').text('');
 last_name.css('border','1px solid #d4d9dd');
 last_text.css('color','#909599');
 form_text_phone.css('color','#909599');
 last_name.css('color','#909599');
 tel.css('border','1px solid #d4d9dd');
    return true;
 }
 
 }
    });


 tel_input.blur(function(){
 if(tel_input.val() != ''){  
 if(tel_input.val().length <= 9) {
    $('#valid_phone').text('Минимум 9 символов');
 $('#valid_phone').css('padding-left','55px');
 $('#valid_phone').css('transform','translateX(200px)');
 $('#valid_phone').css('color','#BE4848');
 $('#valid_phone').css('font-size','16px');

  console.log(false);
 }
 else
 {
  console.log(true); 
 }
 
 }
    });

if (tel_input === false || last_name === false || first_name === false) {
    

   $('#continue_to_shipping[type=submit]').attr('disabled', !isValid);
   return isValid;

    console.log(true);
}else {

    console.log(false);
}





});

 $(function() {
   var data = {
     div: {
       "class": "select"
     },
     span: {
       "class": "placeholder",
       text: ""
     },
     li: [{
       value: "es",
       text: "Украина"
     }, {
       value: "en",
       text: "Россия"
     }, {
       value: "fr",
       text: "Франция"
     }, {
       value: "de",
       text: "Германия"
     }]
   };
   $.fn.plugin = function(data) {
     return this.each(function(index,
       self) {
       self.type = "hidden";
       var span = $("<span/>", data.span);
       var ul = $("<ul/>").hide();
       var div = $("<div/>", data.div).on("click", function() {
         ul.fadeToggle("slow")
       });
       data.li.forEach(function(el) {
         var li = $("<li/>", {
           text: el.text,
           click: function() {
             self.value = el.value;
             span.text(el.text);
             $("li", ul).not(li.addClass("active")).removeClass("active")
           }
         }).appendTo(ul)
       });
       span.appendTo(div);
       ul.appendTo(div);
       $(self).replaceWith(div).appendTo(div);
       $(document).click(function(event) {
         if (!$(event.target).closest(div).length) ul.fadeOut("fast")
       })
     })
   };
   $('[name="country"]').plugin(data)
 });


 $(function() {
   var data = {
     div: {
       "class": "select"
     },
     span: {
       "class": "placeholder",
       text: ""
     },
     li: [{
       value: "es",
       text: "Киев"
     }, {
       value: "en",
       text: "Москва"
     }, {
       value: "fr",
       text: "Париж"
     }, {
       value: "de",
       text: "Берлин"
     }]
   };
   $.fn.plugin = function(data) {
     return this.each(function(index,
       self) {
       self.type = "hidden";
       var span = $("<span/>", data.span);
       var ul = $("<ul/>").hide();
       var div = $("<div/>", data.div).on("click", function() {
         ul.fadeToggle("slow")
       });
       data.li.forEach(function(el) {
         var li = $("<li/>", {
           text: el.text,
           click: function() {
             self.value = el.value;
             span.text(el.text);
             $("li", ul).not(li.addClass("active")).removeClass("active")
           }
         }).appendTo(ul)
       });
       span.appendTo(div);
       ul.appendTo(div);
       $(self).replaceWith(div).appendTo(div);
       $(document).click(function(event) {
         if (!$(event.target).closest(div).length) ul.fadeOut("fast")
       })
     })
   };
   $('[name="city"]').plugin(data)
 });





function forMobile() {
    w = screen.width;
    if (w <= 780) {
        $('.customer_info_ship').remove();
        $('.customer_info_payment').remove();
        $('.info_block').css('justify-content','center');
        $('.form_conteiner_name').css('flex-direction','column').css('align-items','left').css('height','155px').css('align-items','flex-start');
         $('.country_list').css('flex-direction','column').css('height','160px');
    }
}
forMobile();

$( window ).resize(function() {
    forMobile();
});
