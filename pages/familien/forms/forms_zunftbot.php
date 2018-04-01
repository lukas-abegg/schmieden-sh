<h3>An- / Abmeldung für den Zunftbot</h3>

<div class="forms">

    <div id="success_forms" class="hint hidden"></div>

    <form id="anmeldung_zunftbot" action="pages/familien/forms/send_anmeldung_zunftbot.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="name">Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Dein Name.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="vname">Vorname</label>
            </div>
            <div class="col-75">
                <input type="text" id="vorname" name="vorname" placeholder="Dein Vorname.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Deine Email.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="jahrgang">Jahrgang</label>
            </div>
            <div class="col-75">
                <input type="number" id="jahrgang" name="jahrgang" placeholder="Jahrgang.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="adresse">Adresse</label>
            </div>
            <div class="col-75">
                <input type="text" id="adresse" name="adresse" placeholder="Adresse.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="plz">PLZ / Wohnort</label>
            </div>
            <div class="col-25">
                <input type="text" id="plz" name="plz" placeholder="PLZ.." required>
            </div>
            <div class="col-5">
                &nbsp;
            </div>
            <div class="col-45">
                <input type="text" id="wohnort" name="wohnort" placeholder="Wohnort.." required>
            </div>
        </div>
        <div class="title">Ich / Wir nehmen am Nachmittagsprogramm teil</div>
        <div class="row">
            <div class="col-100">
                <label for="nachmittag_teilnahme">Bei Interesse bitte <i>Ja</i> auswählen und geforderte
                    Informationen eintragen.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="nachmittag_teilnahme" name="nachmittag_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <div id="nachmittag_teilnahme_content" class="hidden">
            <div class="row">
                <div class="col-25">
                    <label for="nachmittag_erwachsene">Erwachsene</label>
                </div>
                <div class="col-20">
                    <input type="number" class="half" id="nachmittag_erwachsene" name="nachmittag_erwachsene"
                           placeholder="Anzahl Erwachsene..">
                </div>
                <div class="col-10">
                    &nbsp;
                </div>
                <div class="col-25">
                    <label for="nachmittag_kinder">Kinder</label>
                </div>
                <div class="col-20">
                    <input type="number" class="half" id="nachmittag_kinder" name="nachmittag_kinder"
                           placeholder="Anzahl Kinder..">
                </div>
            </div>
        </div>
        <div class="title">Ich / Wir nehmen am Apero teil</div>
        <div class="row">
            <div class="col-100">
                <label for="apero_teilnahme">Bei Interesse bitte <i>Ja</i> auswählen und geforderte
                    Informationen eintragen.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="apero_teilnahme" name="apero_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <div id="apero_teilnahme_content" class="hidden">
            <div class="row">
                <div class="col-25">
                    <label for="apero_erwachsene">Erwachsene</label>
                </div>
                <div class="col-20">
                    <input type="number" id="apero_erwachsene" name="apero_erwachsene"
                           placeholder="Anzahl Erwachsene..">
                </div>
                <div class="col-10">
                    &nbsp;
                </div>
                <div class="col-25">
                    <label for="apero_kinder">Kinder</label>
                </div>
                <div class="col-20">
                    <input type="number" id="apero_kinder" name="apero_kinder"
                           placeholder="Anzahl Kinder..">
                </div>
            </div>
        </div>
        <div class="title">Teilnahme am Nachtessen der Frauen</div>
        <div class="row">
            <div class="col-100">
                <label for="nachtessen_teilnahme">Bei Interesse bitte <i>Ja</i> auswählen und geforderte
                    Informationen eintragen.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="nachtessen_teilnahme" name="nachtessen_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <div id="nachtessen_teilnahme_content" class="hidden">
            <div class="col-25">
                <label for="nachtessen_telefon">Telefon-Nr.</label>
            </div>
            <div class="col-75">
                <input type="text" id="nachtessen_telefon" name="nachtessen_telefon"
                       placeholder="Tel. Nr.."">
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="nachtessen_email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="nachtessen_email" name="nachtessen_email" placeholder="Email..">
                </div>
            </div>
        </div>

        <div class="title">Teilnahme am Zunftbot</div>
        <div class="row">
            <div class="col-100">
                <label for="zunftbot_teilnahme">Nur Zünfter bitte <i>Ja</i> oder <i>Nein</i> ankreuzen</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="zunftbot_teilnahme" name="zunftbot_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <input type="reset" id="reset" value="Formular zurücksetzen">
        <input type="submit" id="submit" value="Formular abschicken">
    </form>
</div>