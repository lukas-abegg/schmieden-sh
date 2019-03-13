<h3>An- / Abmeldung für den Zunftbot</h3>

<div class="forms">

    <div id="anmeldung_zunftbot_success_forms" class="hint hidden success_forms"></div>

    <form id="anmeldung_zunftbot" action="pages/familien/forms/send_anmeldung_zunftbot.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="anmeldung_zunftbot_name">Name (*)</label>
            </div>
            <div class="col-75">
                <input type="text" id="anmeldung_zunftbot_name" name="anmeldung_zunftbot_name" placeholder="Dein Name.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="anmeldung_zunftbot_vorname">Vorname (*)</label>
            </div>
            <div class="col-75">
                <input type="text" id="anmeldung_zunftbot_vorname" name="anmeldung_zunftbot_vorname" placeholder="Dein Vorname.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="anmeldung_zunftbot_email">Email (*)</label>
            </div>
            <div class="col-75">
                <input type="text" id="anmeldung_zunftbot_email" name="anmeldung_zunftbot_email" placeholder="Deine Email.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="anmeldung_zunftbot_geburtstag">Geburtstag (*)</label>
            </div>
            <div class="col-75">
                <input type="text" id="anmeldung_zunftbot_geburtstag" name="anmeldung_zunftbot_geburtstag" placeholder="01.01.1900..." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="anmeldung_zunftbot_telefonnummer">Telefonnummer</label>
            </div>
            <div class="col-75">
                <input type="text" id="anmeldung_zunftbot_telefonnummer" name="anmeldung_zunftbot_telefonnummer" placeholder="+41 79 123 12 12...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="anmeldung_zunftbot_adresse">Adresse (*)</label>
            </div>
            <div class="col-75">
                <input type="text" id="anmeldung_zunftbot_adresse" name="anmeldung_zunftbot_adresse" placeholder="Adresse.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="anmeldung_zunftbot_plz">PLZ (*) / Wohnort (*)</label>
            </div>
            <div class="col-25">
                <input type="text" id="anmeldung_zunftbot_plz" name="anmeldung_zunftbot_plz" placeholder="PLZ.." required>
            </div>
            <div class="col-5">
                &nbsp;
            </div>
            <div class="col-45">
                <input type="text" id="anmeldung_zunftbot_wohnort" name="anmeldung_zunftbot_wohnort" placeholder="Wohnort.." required>
            </div>
        </div>
        <div class="title">Ich / Wir nehmen am Nachmittagsprogramm teil (*)</div>
        <div class="row">
            <div class="col-100">
                <label for="anmeldung_zunftbot_nachmittag_teilnahme">Bei Interesse bitte <i>Ja</i> auswählen und geforderte
                    Informationen eintragen.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="anmeldung_zunftbot_nachmittag_teilnahme" name="anmeldung_zunftbot_nachmittag_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <div id="anmeldung_zunftbot_nachmittag_teilnahme_content" class="hidden">
            <div class="row">
                <div class="col-25">
                    <label for="anmeldung_zunftbot_nachmittag_erwachsene">Erwachsene</label>
                </div>
                <div class="col-20">
                    <input type="number" class="half" id="anmeldung_zunftbot_nachmittag_erwachsene" name="anmeldung_zunftbot_nachmittag_erwachsene"
                           placeholder="Anzahl Erwachsene..">
                </div>
                <div class="col-10">
                    &nbsp;
                </div>
                <div class="col-25">
                    <label for="anmeldung_zunftbot_nachmittag_kinder">Kinder</label>
                </div>
                <div class="col-20">
                    <input type="number" class="half" id="anmeldung_zunftbot_nachmittag_kinder" name="anmeldung_zunftbot_nachmittag_kinder"
                           placeholder="Anzahl Kinder..">
                </div>
            </div>
        </div>
        <div class="title">Ich / Wir nehmen am Apero teil (*)</div>
        <div class="row">
            <div class="col-100">
                <label for="anmeldung_zunftbot_apero_teilnahme">Bei Interesse bitte <i>Ja</i> auswählen und geforderte
                    Informationen eintragen.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="anmeldung_zunftbot_apero_teilnahme" name="anmeldung_zunftbot_apero_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <div id="anmeldung_zunftbot_apero_teilnahme_content" class="hidden">
            <div class="row">
                <div class="col-25">
                    <label for="anmeldung_zunftbot_apero_erwachsene">Erwachsene</label>
                </div>
                <div class="col-20">
                    <input type="number" id="anmeldung_zunftbot_apero_erwachsene" name="anmeldung_zunftbot_apero_erwachsene"
                           placeholder="Anzahl Erwachsene..">
                </div>
                <div class="col-10">
                    &nbsp;
                </div>
                <div class="col-25">
                    <label for="anmeldung_zunftbot_apero_kinder">Kinder</label>
                </div>
                <div class="col-20">
                    <input type="number" id="anmeldung_zunftbot_apero_kinder" name="anmeldung_zunftbot_apero_kinder"
                           placeholder="Anzahl Kinder..">
                </div>
            </div>
        </div>
        <div class="title">Teilnahme am Nachtessen der Frauen (*)</div>
        <div class="row">
            <div class="col-100">
                <label for="anmeldung_zunftbot_nachtessen_teilnahme">Bei Interesse bitte <i>Ja</i> auswählen und geforderte
                    Informationen eintragen.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="anmeldung_zunftbot_nachtessen_teilnahme" name="anmeldung_zunftbot_nachtessen_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <div id="anmeldung_zunftbot_nachtessen_teilnahme_content" class="hidden">
            <div class="row">
                <div class="col-25">
                    <label for="anmeldung_zunftbot_nachtessen_telefon">Telefon-Nr.</label>
                </div>
                <div class="col-75">
                    <input type="text" id="anmeldung_zunftbot_nachtessen_telefon" name="anmeldung_zunftbot_nachtessen_telefon"
                           placeholder="Tel. Nr.."">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="anmeldung_zunftbot_nachtessen_email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="anmeldung_zunftbot_nachtessen_email" name="anmeldung_zunftbot_nachtessen_email" placeholder="Email..">
                </div>
            </div>
        </div>

        <div class="title">Teilnahme am Zunftbot (*)</div>
        <div class="row">
            <div class="col-100">
                <label for="anmeldung_zunftbot_zunftbot_teilnahme">Nur Zünfter bitte <i>Ja</i> oder <i>Nein</i> ankreuzen</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="anmeldung_zunftbot_zunftbot_teilnahme" name="anmeldung_zunftbot_zunftbot_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <input type="reset" id="anmeldung_zunftbot_anmeldung_zunftbot_reset" value="Formular zurücksetzen">
        <input type="submit" id="anmeldung_zunftbot_anmeldung_zunftbot_submit" value="Formular abschicken">
    </form>
</div>