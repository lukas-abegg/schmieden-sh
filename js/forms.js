jQuery(document).ready(function ($) {

    var nachtessen_teilnahme = $('#nachtessen_teilnahme');
    var nachtessen_teilnahme_content = $('#nachtessen_teilnahme_content');

    nachtessen_teilnahme.change(function () {
        var selected = $("#nachtessen_teilnahme option:selected").val();

        if (selected === "ja") {
            nachtessen_teilnahme_content.removeClass("hidden");
        } else {
            nachtessen_teilnahme_content.addClass("hidden");
        }
    });

    var nachmittag_teilnahme = $('#nachmittag_teilnahme');
    var nachmittag_teilnahme_content = $('#nachmittag_teilnahme_content');

    nachmittag_teilnahme.change(function () {
        var selected = $("#nachmittag_teilnahme option:selected").val();

        if (selected === "ja") {
            nachmittag_teilnahme_content.removeClass("hidden");
        } else {
            nachmittag_teilnahme_content.addClass("hidden");
        }
    });

    var apero_teilnahme = $('#apero_teilnahme');
    var apero_teilnahme_content = $('#apero_teilnahme_content');

    apero_teilnahme.change(function () {
        var selected = $("#apero_teilnahme option:selected").val();

        if (selected === "ja") {
            apero_teilnahme_content.removeClass("hidden");
        } else {
            apero_teilnahme_content.addClass("hidden");
        }
    });

    // URL Handling
    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results != null) {
            return results[1];
        } else {
            return 0;
        }
    };

    var hidden = 'hidden';
    var div = 'div';
    var active = 'active';

    var forms = $.urlParam('forms');

    var text_forms = "";

    var success_box = $('#success_forms');

    var anmeldung_zunftbot = $('#anmeldung_zunftbot');

    var forms_anmeldung_zunftbot_link = $('#forms_anmeldung_zunftbot_link');
    var forms_anmeldung_zunftbot = $('#forms_anmeldung_zunftbot');

    if (!success_box.hasClass(hidden)) {
        success_box.addClass(hidden);
    }

    switch (forms) {
        case "anmeldung_zunftbot":
            text_forms = "Anmeldung Zunftbot";
            break;
        default:
            break;
    }

    if (forms.length > 0) {
        success_box.removeClass('hidden');
        success_box.html('Liebe Z&uuml;nfterin / Lieber Zünfter, das Formular <i><b>' + text_forms + '</b></i> wurde erfolgreich dem Zunftschreiber zugestellt. <br><br>Vielen Dank');


        // Handling Menue
        switch (forms) {
            case "anmeldung_zunftbot":
                console.log("inside");
                console.log(forms_anmeldung_zunftbot_link.parent(div));
                forms_anmeldung_zunftbot_link.parent(div).parent(div).children().each(function () {
                    $(this).removeClass(active);
                });
                forms_anmeldung_zunftbot_link.parent(div).addClass(active);

                forms_anmeldung_zunftbot.parent().children().each(function () {
                    if (!$(this).hasClass(hidden)) {
                        $(this).addClass(hidden);
                    }
                    ;
                });
                forms_anmeldung_zunftbot.removeClass(hidden);

                anmeldung_zunftbot.trigger('reset');
                break;
            default:
                break;
        }
    } else {
        success_box.addClass('hidden');
    }

});