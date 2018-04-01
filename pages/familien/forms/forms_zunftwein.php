<h3>Bestellschein Zunftwy zu’n Schmieden Schaffhausen</h3>

<div class="forms">

    <div class="hint">Bestellschein für Osterfinger Zunftwy zu’n Schmieden Schaffhausen. Aus dem Rebgut und der
        Weinkellerei der Familie Paul Richli - Eggli, zum Hirschen, 8218 Osterfingen
        - <i><b><a href="http://www.richli-hirschen.ch" target="_blank">www.richli-hirschen.ch</i></b></a>
    </div>

    <div id="bestellung_zunftwein_success_forms" class="hint hidden success_forms"></div>

    <form id="bestellung_zunftwein" action="pages/familien/forms/send_bestellung_zunftwein.php" method="post">
        <div class="title">Lieferadresse</div>
        <div class="row">
            <div class="col-25">
                <label for="bestellung_zunftwein_name">Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="bestellung_zunftwein_name" name="bestellung_zunftwein_name" placeholder="Dein Name.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="bestellung_zunftwein_vname">Vorname</label>
            </div>
            <div class="col-75">
                <input type="text" id="bestellung_zunftwein_vorname" name="bestellung_zunftwein_vorname" placeholder="Dein Vorname.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="bestellung_zunftwein_email">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="bestellung_zunftwein_email" name="bestellung_zunftwein_email" placeholder="Deine Email.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="bestellung_zunftwein_adresse">Adresse</label>
            </div>
            <div class="col-75">
                <input type="text" id="bestellung_zunftwein_adresse" name="bestellung_zunftwein_adresse" placeholder="Adresse.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="bestellung_zunftwein_plz">PLZ / Wohnort</label>
            </div>
            <div class="col-25">
                <input type="text" id="bestellung_zunftwein_plz" name="bestellung_zunftwein_plz" placeholder="PLZ.." required>
            </div>
            <div class="col-5">
                &nbsp;
            </div>
            <div class="col-45">
                <input type="text" id="bestellung_zunftwein_wohnort" name="bestellung_zunftwein_wohnort" placeholder="Wohnort.." required>
            </div>
        </div>
        <div class="title">Rechnungsadresse</div>
        <div class="row">
            <div class="col-100">
                <label for="bestellung_zunftwein_rechnung_abweichend">Bei von der Lieferadresse abweichender Rechnungsadresse <i>Ja</i>
                    auswählen und geforderte
                    Informationen eintragen.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="bestellung_zunftwein_rechnung_abweichend" name="bestellung_zunftwein_rechnung_abweichend">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <div id="bestellung_zunftwein_rechnung_content" class="hidden">
            <div class="row">
                <div class="col-25">
                    <label for="bestellung_zunftwein_rechnung_name">Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="bestellung_zunftwein_rechnung_name" name="bestellung_zunftwein_rechnung_name" placeholder="Dein Name.." >
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="bestellung_zunftwein_vname">Vorname</label>
                </div>
                <div class="col-75">
                    <input type="text" id="bestellung_zunftwein_rechnung_vorname" name="bestellung_zunftwein_rechnung_vorname" placeholder="Dein Vorname..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="bestellung_zunftwein_email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="bestellung_zunftwein_rechnung_email" name="bestellung_zunftwein_rechnung_email" placeholder="Deine Email.." >
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="bestellung_zunftwein_adresse">Adresse</label>
                </div>
                <div class="col-75">
                    <input type="text" id="bestellung_zunftwein_rechnung_adresse" name="bestellung_zunftwein_rechnung_adresse" placeholder="Adresse.." >
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="bestellung_zunftwein_plz">PLZ / Wohnort</label>
                </div>
                <div class="col-25">
                    <input type="text" id="bestellung_zunftwein_rechnung_plz" name="bestellung_zunftwein_rechnung_plz" placeholder="PLZ.." >
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
                <div class="col-45">
                    <input type="text" id="bestellung_zunftwein_rechnung_wohnort" name="bestellung_zunftwein_rechnung_wohnort" placeholder="Wohnort.." >
                </div>
            </div>
        </div>
        <div class="title">Blauburgunder Auslese 2015</div>
        <div class="subtitle">7,5 dl. Flasche zu CHF 12.50</div>
        <div class="row">
            <div class="col-100">
                <label for="bestellung_zunftwein_bestellung_rot">Bei Interesse bitte <i>Ja</i> auswählen und
                    gewünschte Anzahl Flaschen eintragen.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="bestellung_zunftwein_bestellung_rot" name="bestellung_zunftwein_bestellung_rot">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <div id="bestellung_zunftwein_bestellung_rot_content" class="hidden">
            <div class="row">
                <div class="col-100"><label><i><br>Flaschen werden in Tragkartons zu 12 Flaschen geliefert, auch assortiert.
                            <br><br></i></label>
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <label for="bestellung_zunftwein_bestellung_rot_anzahl">Anzahl Flaschen</label>
                </div>
                <div class="col-50">
                    <input type="number" id="bestellung_zunftwein_bestellung_rot_anzahl" name="bestellung_zunftwein_bestellung_rot_anzahl"
                           placeholder="Anzahl Flaschen.."">
                </div>
            </div>
        </div>
        <div class="title">Riesling x Sylvaner 2015</div>
        <div class="subtitle">7,5 dl. Flasche zu CHF 11.00</div>
        <div class="row">
            <div class="col-100">
                <label for="bestellung_zunftwein_bestellung_weiss">Bei Interesse bitte <i>Ja</i> auswählen und
                    gewünschte Anzahl Flaschen eintragen.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="bestellung_zunftwein_bestellung_weiss" name="bestellung_zunftwein_bestellung_weiss">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
        </div>
        <div id="bestellung_zunftwein_bestellung_weiss_content" class="hidden">
            <div class="row">
                <div class="col-100">
                    <label><i><br>Flaschen werden in Tragkartons zu 12 Flaschen geliefert, auch assortiert.
                            <br><br></i></label>
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <label for="bestellung_zunftwein_bestellung_weiss_anzahl">Anzahl Flaschen</label>
                </div>
                <div class="col-50">
                    <input type="number" id="bestellung_zunftwein_bestellung_weiss_anzahl" name="bestellung_zunftwein_bestellung_weiss_anzahl"
                           placeholder="Anzahl Flaschen.."">
                </div>
            </div>
        </div>
        <div class="title">Konditionen</div>
        <div class="row">
            <div class="col-100">
                <label>
                    Preis inkl. MwSt, zahlbar innert 30 Tagen netto:
                    <ul>
                        <li>Die Lieferung erfolgt in der Nord- / Nordostschweiz gelegentlich per
                            Camion franko Keller. Oder.
                        </li>
                        <li>Per Bahn unter Verrechnung der Kosten für Versand und Verpackung
                            (gilt auch für Zuschläge für Posteiltaxe etc.)
                        </li>
                    </ul>
                </label>
            </div>
        </div>
        <input type="reset" id="bestellung_zunftwein_reset" value="Formular zurücksetzen">
        <input type="submit" id="bestellung_zunftwein_submit" value="Formular abschicken">
    </form>
</div>