jQuery(document).ready(function ($) {

    var nachtessen_teilnahme = $('#anmeldung_zunftbot_nachtessen_teilnahme');
    var nachtessen_teilnahme_content = $('#anmeldung_zunftbot_nachtessen_teilnahme_content');

    nachtessen_teilnahme.change(function () {
        var selected = nachtessen_teilnahme.find("option:selected").val();

        if (selected === "ja") {
            nachtessen_teilnahme_content.removeClass("hidden");
        } else {
            nachtessen_teilnahme_content.addClass("hidden");
        }
    });

    var nachmittag_teilnahme = $('#anmeldung_zunftbot_nachmittag_teilnahme');
    var nachmittag_teilnahme_content = $('#anmeldung_zunftbot_nachmittag_teilnahme_content');

    nachmittag_teilnahme.change(function () {
        var selected = nachmittag_teilnahme.find("option:selected").val();

        if (selected === "ja") {
            nachmittag_teilnahme_content.removeClass("hidden");
        } else {
            nachmittag_teilnahme_content.addClass("hidden");
        }
    });

    var apero_teilnahme = $('#anmeldung_zunftbot_apero_teilnahme');
    var apero_teilnahme_content = $('#anmeldung_zunftbot_apero_teilnahme_content');

    apero_teilnahme.change(function () {
        var selected = apero_teilnahme.find("option:selected").val();

        if (selected === "ja") {
            apero_teilnahme_content.removeClass("hidden");
        } else {
            apero_teilnahme_content.addClass("hidden");
        }
    });

    var rechnung_abweichend = $('#bestellung_zunftwein_rechnung_abweichend');
    var rechnung_content = $('#bestellung_zunftwein_rechnung_content');

    rechnung_abweichend.change(function () {
        var selected = rechnung_abweichend.find("option:selected").val();

        if (selected === "ja") {
            rechnung_content.removeClass("hidden");
        } else {
            rechnung_content.addClass("hidden");
        }
    });

    var bestellung_rot = $('#bestellung_zunftwein_bestellung_rot');
    var bestellung_rot_content = $('#bestellung_zunftwein_bestellung_rot_content');

    bestellung_rot.change(function () {
        var selected = bestellung_rot.find("option:selected").val();

        if (selected === "ja") {
            bestellung_rot_content.removeClass("hidden");
        } else {
            bestellung_rot_content.addClass("hidden");
        }
    });

    var bestellung_weiss = $('#bestellung_zunftwein_bestellung_weiss');
    var bestellung_weiss_content = $('#bestellung_zunftwein_bestellung_weiss_content');

    bestellung_weiss.change(function () {
        var selected = bestellung_weiss.find("option:selected").val();

        if (selected === "ja") {
            bestellung_weiss_content.removeClass("hidden");
        } else {
            bestellung_weiss_content.addClass("hidden");
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

    var anmeldung_zunftbot_success_box = $('#anmeldung_zunftbot_success_forms');
    var bestellung_zunftwein_success_box = $('#bestellung_zunftwein_success_forms');

    var anmeldung_zunftbot = $('#anmeldung_zunftbot');
    var forms_anmeldung_zunftbot_link = $('#forms_anmeldung_zunftbot_link');
    var forms_anmeldung_zunftbot = $('#forms_anmeldung_zunftbot');

    var bestellung_zunftwein = $('#bestellung_zunftwein');
    var forms_bestellung_zunftwein_link = $('#forms_bestellung_zunftwein_link');
    var forms_bestellung_zunftwein = $('#forms_bestellung_zunftwein');

    if (!anmeldung_zunftbot_success_box.hasClass(hidden)) {
        anmeldung_zunftbot_success_box.addClass(hidden);
    }

    if (!bestellung_zunftwein_success_box.hasClass(hidden)) {
        bestellung_zunftwein_success_box.addClass(hidden);
    }

    // Handling Menu
    switch (forms) {
        case "anmeldung_zunftbot":

            forms_anmeldung_zunftbot_link.parent(div).parent(div).children().each(function () {
                $(this).removeClass(active);
            });
            forms_anmeldung_zunftbot_link.parent(div).addClass(active);

            forms_anmeldung_zunftbot.parent().children().each(function () {
                if (!$(this).hasClass(hidden)) {
                    $(this).addClass(hidden);
                }
            });
            forms_anmeldung_zunftbot.removeClass(hidden);

            anmeldung_zunftbot.trigger('reset');

            anmeldung_zunftbot_success_box.removeClass(hidden);
            anmeldung_zunftbot_success_box.html('Liebe Z&uuml;nfterin / Lieber Zünfter, das Formular <i><b>Anmeldung Zunftbot</b></i> wurde erfolgreich dem Zunftschreiber zugestellt. <br><br>Vielen Dank');

            break;
        case "bestellung_zunftwein":

            forms_bestellung_zunftwein_link.parent(div).parent(div).children().each(function () {
                $(this).removeClass(active);
            });
            forms_bestellung_zunftwein_link.parent(div).addClass(active);

            forms_bestellung_zunftwein.parent().children().each(function () {
                if (!$(this).hasClass(hidden)) {
                    $(this).addClass(hidden);
                }
            });
            forms_bestellung_zunftwein.removeClass(hidden);

            bestellung_zunftwein.trigger('reset');

            bestellung_zunftwein_success_box.removeClass(hidden);
            bestellung_zunftwein_success_box.html('Liebe Z&uuml;nfterin / Lieber Zünfter, das Formular <i><b>Bestellung Zunftwy</b></i> wurde erfolgreich dem Silberherr und Stubenmeister zugestellt. <br><br>Vielen Dank');

            break;
        default:
            break;
    }

});