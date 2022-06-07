// make the input placeholders smaller on focus
$('.line .input').focus(function(){
    $(this).parent('.line').addClass('active');
});

$('.line .input').blur(function(){
    if($(this).val() == ''){
        $(this).parent('.line').removeClass('active');
    }
});

// validate form
$("#contact-form").validate();