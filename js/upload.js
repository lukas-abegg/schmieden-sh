jQuery(document).ready(function ($) {

    $('.inputfile').each(function () {
        var $input = $(this),
            $label = $input.next('label'),
            labelVal = $label.html();

        $input.on('change', function (e) {
            var fileName = '';

            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else if (e.target.value)
                fileName = e.target.value.split('\\').pop();

            if (fileName) {
                $label.text(fileName);
            } else {
                $label.html(labelVal);
            }


        });

        // Firefox bug fix
        $input
            .on('focus', function () {
                $input.addClass('has-focus');
            })
            .on('blur', function () {
                $input.removeClass('has-focus');
            });
    });

    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results != null) {
            return results[1];
        } else {
            return 0;
        }
    };

    var div = 'div';
    var active = 'active';
    var hidden = 'hidden';

    var doc = $.urlParam('doc');
    var success = $.urlParam('success');

    var success_box = $('#success');
    var error_box = $('#error');

    var familien_upload_link = $('#upload_link');
    var familien_upload = $('#upload');

    if (!success_box.hasClass(hidden)) {
        success_box.addClass(hidden);
    }

    if (!error_box.hasClass(hidden)) {
        error_box.addClass(hidden);
    }


    if (doc.length > 0) {
        familien_upload_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        familien_upload_link.parent(div).addClass(active);

        familien_upload.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        familien_upload.removeClass(hidden);
    }

    var doc_text = "";

    switch (doc) {
        case "bestellschein_zunftwein":
            doc_text = "Bestellschein Zunftwein";
            break;
        case "anmeldung_zunftbot":
            doc_text = "Anmeldung Zunftbot";
            break;
        case "aufnahmegesuch_rodel":
            doc_text = "Aufnahmegesuch Rodel";
            break;
        case "anmeldung_herbstanlass":
            doc_text = "Anmeldung Herbstanlass";
            break;
        case "anmeldung_dreikoenigsumzug":
            doc_text = "Anmeldung Dreikönigsumzug";
            break;
        case "revision_statuten":
            doc_text = "Teilrevision der Statuten";
            break;
        case "statuten":
            doc_text = "Statuten inkl. historischem Anhang\n";
            break;
        case "vorstand":
            doc_text = "Mitglieder des Zunftvorstandes\n";
            break;
        case "anzahl_zuenfter":
            doc_text = "Anzahl Zünfter";
            break;
        case "rodel":
            doc_text = "Rodel";
            break;
        case "adressliste_rodel":
            doc_text = "Adressliste Rodel";
            break;
        default:
            break;
    }

    if (success === "true") {
        success_box.removeClass('hidden');
        success_box.html('Das Dokument <i><b>' + doc_text + '</b></i> wurde erfolgreich ersetzt');
    } else if (success === "false") {
        error_box.removeClass('hidden');
        error_box.html('Das Dokument <i><b>' + doc_text + '</b></i> konnte nicht ersetzt werden');
    }
});