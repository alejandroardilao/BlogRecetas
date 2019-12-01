jQuery(document).ready(function($) {
    $('form label').parent().addClass('input-field');
    $('form input[type="text"], form input[type="password"], form input[type="email"]').each(function() {
        $(this).closest('p').prepend($(this));
        if ($(this).attr("type") == "text") {
            $(this).before('<i class="material-icons prefix">perm_identity</i>');
        } else if ($(this).attr("type") == "email") {
            $(this).before('<i class="material-icons prefix">email</i>');
        } else {
            $(this).before('<i class="material-icons prefix">lock</i>');
        }
    });
    $('form br').remove();
    $('form .button-primary').attr("class", "btn waves-effect waves-light right waves-input-wrapper");
});