$(document).ready(function(){

  var chosenEvent;
   $("[name='phone']").mask("+7 (999) 999-9999").css("color", "gray");

   $(".slide-button").on("click", function(event) {
     chosenEvent = $(this).parent().parent().find("h3").eq(0).text();
   });
   function get_cookie ( cookie_name ){
    var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
    if ( results )
      return ( unescape ( results[2] ) );
      else
      return null;
  };
   $('.metrika').click( function() {
    var goal_name = this.className.match(/metrika_([^\s]+)/)[1];
    if (! get_cookie(goal_name)){
      yaCounter11897987.reachGoal(goal_name);
      console.log(goal_name);
      var minus = 7;
        var d = new Date();
      var dayOfMonth = d.getDate();
        d.setDate(dayOfMonth + minus);
      document.cookie = goal_name + "=on; expires=" + d.toGMTString();
      return true;
    }
  });

   $("#info-form").on("submit", function(event){
      event.preventDefault();
      var fname  = $("#firstname").val().trim();
      var lname  = $("#lastname").val().trim();
      var phone = $("#phone").val().trim();
      var email = $("#email").val().trim();
      if (!fname || !lname || !phone && !email) {
        alert('Заполните все необходимые поля, пожалуйста!');
        return false;
      } else {
        setTimeout(function(){
         alert("Спасибо, получили Вашу заявку на участие в Active World Business Forum! В ближайшее время с Вами свяжутся менеджеры Активного Мира");
         if (! get_cookie("kreado-lid")){
            yaCounter11897987.reachGoal("kreado-lid");
            console.log("kreado-lid");
            var minus = 7;
              var d = new Date();
            var dayOfMonth = d.getDate();
              d.setDate(dayOfMonth + minus);
            document.cookie = "kreado-lid" + "=on; expires=" + d.toGMTString();
            return true;
          }
        },0);
      }

      $.post("form_handler.php", {first_name: fname,last_name: lname, phone_number: phone, email: email}).done(function(){

      });
   });

   $("#info-button").on("click", function(event){
      $("#info-form").submit().trigger( 'reset' );
   });
   document.querySelector('#info-form').reset();


  $("#price form").submit(function() {
    if ($(this).closest("#online").length){
      $.ajax({
        type: "POST",
        url: "form_handler1.php",
        data: $(this).serialize()
      }).done(function() {
        setTimeout(function(){
          console.log("11");
          alert("Спасибо, получили Вашу заявку на участие в Active World Business Forum! В ближайшее время с Вами свяжутся менеджеры Активного Мира");
          if (! get_cookie("kreado-lid")){
            yaCounter11897987.reachGoal("kreado-lid");
            console.log("kreado-lid");
            var minus = 7;
              var d = new Date();
            var dayOfMonth = d.getDate();
              d.setDate(dayOfMonth + minus);
            document.cookie = "kreado-lid" + "=on; expires=" + d.toGMTString();
            return true;
          }
          },0);
      });
    } else {
      $.ajax({
        type: "POST",
        url: "form_handler1.php",
        data: $(this).serialize()
      }).done(function() {
        setTimeout(function(){
          alert("Спасибо, получили Вашу заявку на участие в Active World Business Forum! В ближайшее время с Вами свяжутся менеджеры Активного Мира");
          if (! get_cookie("kreado-lid")){
            yaCounter11897987.reachGoal("kreado-lid");
            console.log("kreado-lid");
            var minus = 7;
              var d = new Date();
            var dayOfMonth = d.getDate();
              d.setDate(dayOfMonth + minus);
            document.cookie = "kreado-lid" + "=on; expires=" + d.toGMTString();
            return true;
          }
          },0);
      });
    }
    return false;
  });

   $("#price form .btn-reg").on("click", function(event){
      var title = $(this).closest(".row").find("h3").text();
      console.log(title);
      $(this).closest("form").append("<input type='hidden' name='class' value='"+title+"'>");
      $(this).closest("form").find(".form-group").last().children("input").attr("name","promo");
      if ($(this).closest("#online").length){
        var first_name   = $(this).closest("form").find("[name='name']").val();
        var last_name    = $(this).closest("form").find("[name='surname']").val();
        var phone_number   = $(this).closest("form").find("[name='phone']").val();
        var email        = $(this).closest("form").find("[name='email']").val();
        console.log(first_name, last_name, phone_number, email);
      } else {
        var first_name   = $(this).closest("form").find("[name='first_name']").val();
        var last_name    = $(this).closest("form").find("[name='last_name']").val();
        var phone_number   = $(this).closest("form").find("[name='phone']").val();
        var email        = $(this).closest("form").find("[name='email']").val();
        console.log(first_name, last_name, phone_number, email);
      }
      if (!first_name || !last_name || !phone_number && !email) {
        alert('Заполните все необходимые поля, пожалуйста!');
        return false;
      } else {
        $(this).closest("form").submit().trigger( 'reset' );
      }
   });
   $("#consult-form").submit(function() {
    $.ajax({
      type: "POST",
      url: "form_handler2.php",
      data: $(this).serialize()
    }).done(function() {
      setTimeout(function(){
         alert("Спасибо, получили Вашу заявку на участие в Active World Business Forum! В ближайшее время с Вами свяжутся менеджеры Активного Мира");
         if (! get_cookie("kreado-lid")){
            yaCounter11897987.reachGoal("kreado-lid");
            console.log("kreado-lid");
            var minus = 7;
              var d = new Date();
            var dayOfMonth = d.getDate();
              d.setDate(dayOfMonth + minus);
            document.cookie = "kreado-lid" + "=on; expires=" + d.toGMTString();
            return true;
          }
      },0);

    });
    return false;
  });

   $("#consult-button").on("click", function(event){
      var first_name   = $(this).closest(".modal-footer").prev(".modal-body").find("[name='first_name']").val();
      var last_name    = $(this).closest(".modal-footer").prev(".modal-body").find("[name='last_name']").val();
      var phone_number = $(this).closest(".modal-footer").prev(".modal-body").find("[name='phone']").val();
      var email        = $(this).closest(".modal-footer").prev(".modal-body").find("[name='email']").val();
      console.log(first_name, last_name, phone_number, email);
      if (!first_name || !last_name || !phone_number && !email) {
        alert('Заполните все необходимые поля, пожалуйста!');
        return false;
      } else {
        $(this).closest(".modal-footer").prev(".modal-body").find("#consult-form").submit().trigger( 'reset' );
      }
   });
   var a = 0;
   $(".modal.fade").click(function(){
    a=0;
    setTimeout(function(){
      if (a === 0){
        if (! get_cookie("kreado-form-close")){
            yaCounter11897987.reachGoal("kreado-form-close");
            console.log("kreado-form-close");
            var minus = 7;
              var d = new Date();
            var dayOfMonth = d.getDate();
              d.setDate(dayOfMonth + minus);
            document.cookie = "kreado-form-close" + "=on; expires=" + d.toGMTString();
            return true;
          }
      }
    }, 5);
  });
   $(".modal-dialog").click(function(){
    setTimeout(function(){
      a = 1;
    },0)
   })

  // $('#accordion').liteAccordion({
  //   autoPlay : true,
  //   pauseOnHover : true,
  //   theme: 'basic'
  // });
  //
  // function close_accordion_section() {
  //   $('.accordion .accordion-section-title').removeClass('active');
  //   $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
  // }
  //
  // $('.accordion-section-title').click(function(e) {
  //
  //   //Take the Current Value
  //   var currentAttrValue = $(this).attr('href');
  //
  //   if ($(e.target).is('.active')) {
  //     close_accordion_section();
  //   } else {
  //     close_accordion_section();
  //
  //     //Add Active class to Title
  //     $(this).addClass('active');
  //
  //     $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
  //   }
  //
  //   e.preventDefault();
  //
  // });

  $(".fancybox").fancybox({
  		maxWidth	: 800,
  		maxHeight	: 600,
  		fitToView	: false,
  		width		: '70%',
  		height		: '70%',
  		autoSize	: false,
  		closeClick	: false,
  		openEffect	: 'none',
  		closeEffect	: 'none'
  });
  $(".various").fancybox({
		maxWidth	: 960,
		maxHeight	: 600,
		fitToView	: false,
		width		: '80%',
		height		: '90%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

    // hide #back-top first
    $("#back-top").hide();

    // fade in #back-top
    $(function () {
    $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
    $('#back-top').fadeIn();
    } else {
    $('#back-top').fadeOut();
    }
    });
    // scroll body to 0px on click
    $('#back-top a').click(function () {

    $('body,html').animate({
    scrollTop: 0
    }, 800);
    return false;
    });
  });

  /*$("#consult-form").on("submit", function(event){
      event.preventDefault();
      var fname  = $("#firstname_cons").val().trim();
      var lname  = $("#lastname_cons").val().trim();
      var select = $("#select").val();
      var phone = $("#phone").val().trim();
      var email = $("#email").val().trim();
      if (!fname || !lname || !phone && !email) {
        alert('Заполните все необходимые поля, пожалуйста!');
        return false;
      }
      // var attrib = name + " " + phone + " " + email;
      //  console.log("form attributes", attrib);

      $.post("send.php", {first_name: fname, last_name: select: select, lname, phone_number: phone, email: email}).done(function(){
      });
   });

   $("#consult-button").on("click", function(event){
      $("#consult-form").submit().trigger( 'reset' );
   });*/
});
