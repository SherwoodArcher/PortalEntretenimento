$(function () {
    $('a[href="#esqueci"]').on('click', function(event) {
        event.preventDefault();
        $('#esqueci').addClass('open');
        $('#esqueci > form > input[type="email"]').focus();
    });
    
    $('#esqueci, #esqueci button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 28) {
            $(this).removeClass('open');
        }
    });
    
    
    //Do not include! This prevents the form from submitting for DEMO purposes only!
    $('form').submit(function(event) {
        event.preventDefault();
        return false;
    })
});