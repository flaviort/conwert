$(document).ready(function() {

    // marquee text
    $('.marquee').marquee({
        direction: 'left',
        duration: 20000,
        gap: 0,
        delayBeforeStart: 0,
        duplicated: true,
        startVisible: true
    });

    // make the input placeholders smaller on focus
    $('.line .input').focus(function(){
        $(this).parent('.line').addClass('active');
    });

    $('.line .input').blur(function(){
        if($(this).val() == ''){
            $(this).parent('.line').removeClass('active');
        }
    });

    // validate forms
    $("#contact-form").validate();
    $("#newsletter-form").validate();

    // display success popups
    if (window.location.href.indexOf("contato-sucesso") > -1) {
        $.fancybox.open($("#contato-sucesso"));
    }

    if (window.location.href.indexOf("newsletter-sucesso") > -1) {
        $.fancybox.open($("#newsletter-sucesso"));
    }

});