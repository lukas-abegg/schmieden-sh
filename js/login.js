jQuery(document).ready(function ($) {

    var login_failed_msg = $('#login-failed-msg');

    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results != null) {
            return results[1];
        } else {
            return 0;
        }
    };

    var login_failed = $.urlParam('login_failed');
    if (login_failed === "true") {
        login_failed_msg.removeClass("hidden");
    } else {
        login_failed_msg.addClass("hidden");
    }

});