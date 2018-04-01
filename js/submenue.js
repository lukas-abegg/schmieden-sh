
jQuery(document).ready(function ($) {

    var div = 'div';
    var active = 'active';
    var hidden = 'hidden';

    var historie_zunftbildung_link = $('#zunftbildung_link');
    var historie_zunftberufe_link = $('#zunftberufe_link');
    var historie_zunfthaus_link = $('#zunfthaus_link');
    var historie_zunfthierarchie_link = $('#zunfthierarchie_link');

    var silber_zunftgeschirr_alt_link = $('#zunftgeschirr_alt_link');
    var silber_zunftgeschirr_heute_link = $('#zunftgeschirr_heute_link');

    var vorstand_alt_link = $('#vorstand_alt_link');
    var vorstand_aktuell_link = $('#vorstand_aktuell_link');

    var familien_zunftfamilien_link = $('#zunftfamilien_link');
    var familien_login_link = $('#login_link');
    var familien_download_link = $('#download_link');
    var familien_upload_link = $('#upload_link');
    var forms_anmeldung_zunftbot_link = $('#forms_anmeldung_zunftbot_link');
    var forms_bestellung_zunftwein_link = $('#forms_bestellung_zunftwein_link');

    var historie_zunftbildung = $('#zunftbildung');
    var historie_zunftberufe = $('#zunftberufe');
    var historie_zunfthaus = $('#zunfthaus');
    var historie_zunfthierarchie = $('#zunfthierarchie');

    var silber_zunftgeschirr_alt = $('#zunftgeschirr_alt');
    var silber_zunftgeschirr_heute= $('#zunftgeschirr_heute');

    var vorstand_alt = $('#vorstand_alt');
    var vorstand_aktuell = $('#vorstand_aktuell');

    var familien_zunftfamilien = $('#zunftfamilien');
    var familien_login = $('#login');
    var familien_download = $('#download');
    var familien_upload = $('#upload');
    var forms_anmeldung_zunftbot = $('#forms_anmeldung_zunftbot');
    var forms_bestellung_zunftwein = $('#forms_bestellung_zunftwein');


    historie_zunftbildung_link.click(function () {
        historie_zunftbildung_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        historie_zunftbildung_link.parent(div).addClass(active);

        historie_zunftbildung.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        historie_zunftbildung.removeClass(hidden);
    });

    historie_zunftberufe_link.click(function () {
        historie_zunftberufe_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        historie_zunftberufe_link.parent(div).addClass(active);

        historie_zunftberufe.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        historie_zunftberufe.removeClass(hidden);
    });

    historie_zunfthaus_link.click(function () {
        historie_zunfthaus_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        historie_zunfthaus_link.parent(div).addClass(active);

        historie_zunfthaus.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        historie_zunfthaus.removeClass(hidden);
    });

    historie_zunfthierarchie_link.click(function () {
        historie_zunfthierarchie_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        historie_zunfthierarchie_link.parent(div).addClass(active);

        historie_zunfthierarchie.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        historie_zunfthierarchie.removeClass(hidden);
    });

    silber_zunftgeschirr_alt_link.click(function () {
        silber_zunftgeschirr_alt_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        silber_zunftgeschirr_alt_link.parent(div).addClass(active);

        silber_zunftgeschirr_alt.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        silber_zunftgeschirr_alt.removeClass(hidden);
    });

    silber_zunftgeschirr_heute_link.click(function () {
        silber_zunftgeschirr_heute_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        silber_zunftgeschirr_heute_link.parent(div).addClass(active);

        silber_zunftgeschirr_heute.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        silber_zunftgeschirr_heute.removeClass(hidden);
    });

    vorstand_aktuell_link.click(function () {
        vorstand_aktuell_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        vorstand_aktuell_link.parent(div).addClass(active);

        vorstand_aktuell.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        vorstand_aktuell.removeClass(hidden);
    });

    vorstand_alt_link.click(function () {
        vorstand_alt_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        vorstand_alt_link.parent(div).addClass(active);

        vorstand_alt.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        vorstand_alt.removeClass(hidden);
    });

    familien_zunftfamilien_link.click(function () {
        familien_zunftfamilien_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        familien_zunftfamilien_link.parent(div).addClass(active);

        familien_zunftfamilien.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        familien_zunftfamilien.removeClass(hidden);
    });

    familien_login_link.click(function () {
        familien_login_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        familien_login_link.parent(div).addClass(active);

        familien_login.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        familien_login.removeClass(hidden);
    });

    familien_download_link.click(function () {
        familien_download_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        familien_download_link.parent(div).addClass(active);

        familien_download.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        familien_download.removeClass(hidden);
    });

    familien_upload_link.click(function () {
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
    });

    forms_anmeldung_zunftbot_link.click(function () {
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
    });

    forms_bestellung_zunftwein_link.click(function () {
        forms_bestellung_zunftwein_link.parent(div).parent(div).children().each(function () {
            $(this).removeClass(active);
        });
        forms_bestellung_zunftwein_link.parent(div).addClass(active);

        forms_bestellung_zunftwein.parent().children().each(function () {
            if (!$(this).hasClass(hidden)) {
                $(this).addClass(hidden);
            }
            ;
        });
        forms_bestellung_zunftwein.removeClass(hidden);
    });
});