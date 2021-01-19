$(function ($) {
  "use strict";


  $(document).ready(function () {


    //**************************** CUSTOM JS SECTION ****************************************

    // Search Hide
    $('.breadcrumb-area').click(function(){
      $('.search-form-area-mobile').removeClass('open');
    })
    $('.hero-area').click(function(){
      $('.search-form-area-mobile').removeClass('open');
    })

    // Search Hide



// Donate Page JS
$('.preloaded_amount').on('click',function(){
  var amount = parseFloat($(this).html());
  $('.preloaded_amountValue').val(amount);
})

$('.preloaded_amountValue').on('keyup',function(){
  var value = $(this).val();
  var value  = parseFloat(value);

  if(isNaN(value)){
      $(this).val('');
  }else{
     $('.preloaded_amountValue').val(value);
  }
  
})


$(document).ready(function(){
  $('#check').change(function(){
      if($(this).prop('checked') === true){
          $(this).val('1');
          $(".AnonymousForm").find('input').attr('required',false);
          $('.AnonymousForm').hide('slow');

      }else{
          $(this).val('0');
          $(".AnonymousForm").find('input').attr('required',true);
          $('.AnonymousForm').show('slow');

      }
  });
});
// Donate Page JS


// Campaign Page JS 
$('.preloaded_amount').on('click',function(){
  var amount = parseFloat($(this).html());
  $('.preloaded_amountValue').val(amount);
})
$('.preloaded_amountValue').on('keyup',function(){
  var value = $(this).val();
  var value  = parseFloat(value);

  if(isNaN(value)){
      $(this).val('');
  }else{
     $('.preloaded_amountValue').val(value);
  }
  
})
// Campaign Page JS 








    // LOADER
    if (gs.is_loader == 1) {
      $(window).on("load", function (e) {
        setTimeout(function () {
          $('#preloader').fadeOut(1000);
        }, 1000)
      });
    }

    // LOADER ENDS

    //  Alert Close
    $("button.alert-close").on('click', function () {
      $(this).parent().hide();
    });


    //More Categories
    $('.rx-parent').on('click', function () {
      $('.rx-child').toggle();
      $(this).toggleClass('rx-change');
    });



    //  FORM SUBMIT SECTION

    $(document).on('submit', '#contactform', function (e) {
      e.preventDefault();
      $('.gocover').show();
      $('button.submit-btn').prop('disabled', true);
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
          $('#contactform .spinner-border').removeClass('d-none');
       },
        success: function (data) {
          if ((data.errors)) {
            $('.alert-success').hide();
            $('.alert-danger').show();
            $('.alert-danger ul').html('');
            for (var error in data.errors) {
              $('#contactform .spinner-border').addClass('d-none');
              $('.alert-danger ul').append('<li>' + data.errors[error] + '</li>')
            }
            $('#contactform input[type=text], #contactform input[type=email], #contactform textarea').eq(0).focus();
            $('.refresh_code').trigger('click');

          } else {
            $('#contactform .spinner-border').addClass('d-none');
            $('.alert-danger').hide();
            $('.alert-success').show();
            $('.alert-success p').html(data);
            $('#contactform input[type=text], #contactform input[type=email], #contactform textarea').eq(0).focus();
            $('#contactform input[type=text], #contactform input[type=email], #contactform textarea').val('');
            $('.refresh_code').trigger('click');

          }
          $('.gocover').hide();
          $('button.submit-btn').prop('disabled', false);
        }

      });

    });

    //  FORM SUBMIT SECTION ENDS

    //  SUBSCRIBE FORM SUBMIT SECTION

    $(document).on('submit', '#subscribeform', function (e) {
      e.preventDefault();
      $('#sub-btn').prop('disabled', true);
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if ((data.errors)) {
            $.notify(data.errors, "error");
          } else {
            $('#subemail').val('');
            $.notify(data, "success");
          }

          $('#sub-btn').prop('disabled', false);

          $('#subemail').val('');
        }

      });

    });

    //  SUBSCRIBE FORM SUBMIT SECTION ENDS

    // LOGIN FORM

    $("#loginform").on('submit', function (e) {
      e.preventDefault();
      $('#loginform button.submit-btn').prop('disabled', true);
      $('#loginform .alert-info').show();
      $('#loginform .alert-info p').html($('#authdata').val());
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if ((data.errors)) {
            $('#loginform .alert-success').hide();
            $('#loginform .alert-info').hide();
            $('#loginform .alert-danger').show();
            $('#loginform .alert-danger ul').html('');
            for (var error in data.errors) {
              $('#loginform .alert-danger p').html(data.errors[error]);
            }
          } else {
            $('#loginform .alert-info').hide();
            $('#loginform .alert-danger').hide();
            $('#loginform .alert-success').show();
            $('#loginform .alert-success p').html(lang.sss);
            window.location = data;
          }
          $('#loginform button.submit-btn').prop('disabled', false);
        }

      });

    });


    // LOGIN FORM ENDS

    $('.checkout-btn').on('click', function (e) {
      e.preventDefault();
      var pid = $(this).parent().prev().find('.prodid').val();
      var payprice = $(this).parent().prev().find('.payprice').val();
      var minPrice = $(this).parent().prev().find('.invest-min-price').val();
      var maxPrice = $(this).parent().prev().find('.invest-max-price').val();
      var getprice = $(this).parent().prev().find('.getprice').val();
      var link = $(this).data('href');
      payprice = parseInt(payprice);
      minPrice = parseInt(minPrice);
      maxPrice = parseInt(maxPrice);

      if (payprice < minPrice) {
        alert('Please Enter Minimum Amount');
        $(this).parent().prev().find('.payprice').val(minPrice);
        return false;
      }


      if (payprice > maxPrice) {

        alert('Please Enter Minimum Amount');
        $(this).parent().prev().find('.payprice').val(maxPrice);
        return false;

      }


      $.ajax({
        method: "GET",
        url: $(this).data('url'),
        data: {
          'pid': pid,
          'payprice': payprice,
          'getprice': getprice
        },
        success: function () {
          window.location = link;
        }

      });


    });

    // REGISTER FORM

    $("#registerform").on('submit', function (e) {
      e.preventDefault();
      $('.signup-form button.submit-btn').prop('disabled', true);
      $('.signup-form .alert-info').show();
      $('.signup-form .alert-info p').html($('#processdata').val());
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {

          if (data[0] == 1) {
            window.location = data[1];
          } else {

            if ((data.errors)) {
              $('.signup-form .alert-success').hide();
              $('.signup-form .alert-info').hide();
              $('.signup-form .alert-danger').show();
              $('.signup-form .alert-danger ul').html('');
              for (var error in data.errors) {
                $('.signup-form .alert-danger p').html(data.errors[error]);
              }
              $('.signup-form button.submit-btn').prop('disabled', false);
            } else {
              $('.signup-form .alert-info').hide();
              $('.signup-form .alert-danger').hide();
              $('.signup-form .alert-success').show();
              $('.signup-form .alert-success p').html(data);
              $('.signup-form button.submit-btn').prop('disabled', false);
            }

          }
          $('.refresh_code').click();

        }

      });

    });


    // REGISTER FORM ENDS

    // FORGOT FORM

    $("#forgotform").on('submit', function (e) {
      e.preventDefault();
      $('button.submit-btn').prop('disabled', true);
      $('.alert-info').show();
      $('.alert-info p').html($('.authdata').val());
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if ((data.errors)) {
            $('.alert-success').hide();
            $('.alert-info').hide();
            $('.alert-danger').show();
            $('.alert-danger ul').html('');
            for (var error in data.errors) {
              $('.alert-danger p').html(data.errors[error]);
            }
          } else {
            $('.alert-info').hide();
            $('.alert-danger').hide();
            $('.alert-success').show();
            $('.alert-success p').html(data);
            $('input[type=email]').val('');
          }
          $('button.submit-btn').prop('disabled', false);
        }

      });

    });

    //  FORGOT FORM ENDS


    //  USER FORM SUBMIT SECTION

    $(document).on('submit', '#userform', function (e) {
      e.preventDefault();
      $('.gocover').show();
      $('button.submit-btn').prop('disabled', true);
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if ((data.errors)) {
            $('.alert-success').hide();
            $('.alert-danger').show();
            $('.alert-danger ul').html('');
            for (var error in data.errors) {
              $('.alert-danger ul').append('<li>' + data.errors[error] + '</li>')
            }
            $('#userform input[type=text], #userform input[type=email], #userform textarea').eq(0).focus();
          } else {
            $('.alert-danger').hide();
            $('.alert-success').show();
            $('.alert-success p').html(data);
            $('#userform input[type=text], #userform input[type=email], #userform textarea').eq(0).focus();
          }
          $('.gocover').hide();
          $('button.submit-btn').prop('disabled', false);
        }

      });

    });

    // USER FORM SUBMIT SECTION ENDS



    // Call back form section............//


    $(document).on('submit', '#CallbackFrom', function (e) {
      e.preventDefault();
      $('.gocover').show();
      $('button.submit-btn').prop('disabled', true);
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if ((data.errors)) {
            $('.alert-success').hide();
            $('.alert-danger').show();
            $('.alert-danger ul').html('');
            for (var error in data.errors) {
              $('.alert-danger ul').append('<li>' + data.errors[error] + '</li>')
            }
            $('#CallbackFrom input[type=text], #CallbackFrom input[type=email], #CallbackFrom textarea').eq(0).focus();

          } else {
            $('.alert-danger').hide();
            $('.alert-success').show();
            $('.alert-success p').html(data);
            $('#CallbackFrom input[type=text], #CallbackFrom input[type=email], #CallbackFrom textarea').eq(0).focus();
            $('#CallbackFrom input[type=text], #CallbackFrom input[type=email], #CallbackFrom textarea').val('');


          }
          $('.gocover').hide();
          $('button.submit-btn').prop('disabled', false);
        }

      });

    });

    // Call back form section end............//


    // MESSAGE FORM

    $(document).on('submit', '#messageform', function (e) {
      e.preventDefault();
      var href = $(this).data('href');
      $('.gocover').show();
      $('button.mybtn1').prop('disabled', true);
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if ((data.errors)) {
            $('.alert-success').hide();
            $('.alert-danger').show();
            $('.alert-danger ul').html('');
            for (var error in data.errors) {
              $('.alert-danger ul').append('<li>' + data.errors[error] + '</li>')
            }
            $('#messageform textarea').val('');
          } else {
            $('.alert-danger').hide();
            $('.alert-success').show();
            $('.alert-success p').html(data);
            $('#messageform textarea').val('');
            $('#messages').load(href);
          }
          $('.gocover').hide();
          $('button.mybtn1').prop('disabled', false);
        }
      });
    });

    // MESSAGE FORM ENDS


    // Currency and Language Section

    $(".selectors").on('change', function () {
      var url = $(this).val();
      window.location = url;
    });

    // Currency and Language Section Ends


    // IMAGE UPLOADING :)

    $(".upload").on("change", function () {
      var imgpath = $(this).parent().find('img');
      var file = $(this);
      readURL(this, imgpath);
    });

    function readURL(input, imgpath) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          imgpath.attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    // IMAGE UPLOADING ENDS :)

    //**************************** GLOBAL CAPCHA****************************************

    $('.refresh_code').on("click", function () {


      $.get($(this).data('href'), function (data, status) {
        $('.codeimg').attr("src", "" + mainurl + "/assets/images/capcha_code.png?time=" + Math.random());
      });
    })

    //**************************** GLOBAL CAPCHA ENDS****************************************


  });

});