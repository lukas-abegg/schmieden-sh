jQuery(document).ready(function ($) {

    var login_failed_msg = $('#login-failed-msg');

    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
    };

    $( document ).ready(function() {
        console.log($.urlParam('login_failed'));
        var login_failed = $.urlParam('login_failed');
        if (login_failed==="true") {
            login_failed_msg.removeClass("hidden");
        } else {
            login_failed_msg.addClass("hidden");
        }
    });

});