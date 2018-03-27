<h3>An- / Abmeldung für den Zunftbot</h3>

<div class="forms">
    <form action="pages/familien/forms/send_anmeldung_zunftbot.php" method="post">
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
                <input type="text" id="vname" name="vname" placeholder="Dein Vorname.." required>
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
                <input type="number" id="plz" name="plz" placeholder="PLZ.." required>
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
            <div class="col-25">
                <label for="erwachsene_nachmittag">Erwachsene</label>
            </div>
            <div class="col-20">
                <input type="number" class="half" id="erwachsene_nachmittag" name="erwachsene_nachmittag"
                       placeholder="Anzahl Erwachsene..">
            </div>
            <div class="col-10">
                &nbsp;
            </div>
            <div class="col-25">
                <label for="kinder_nachmittag">Kinder</label>
            </div>
            <div class="col-20">
                <input type="number" class="half" id="kinder_nachmittag" name="kinder_nachmittag"
                       placeholder="Anzahl Kinder..">
            </div>
        </div>

        <div class="title">Ich / Wir nehmen am Apero teil</div>
        <div class="row">
            <div class="col-25">
                <label for="erwachsene_apero">Erwachsene</label>
            </div>
            <div class="col-20">
                <input type="number" id="erwachsene_apero" name="erwachsene_apero"
                       placeholder="Anzahl Erwachsene..">
            </div>
            <div class="col-10">
                &nbsp;
            </div>
            <div class="col-25">
                <label for="kinder_apero">Kinder</label>
            </div>
            <div class="col-20">
                <input type="number" id="kinder_apero" name="kinder_apero"
                       placeholder="Anzahl Kinder..">
            </div>
        </div>
        <div class="title">Teilnahme am Nachtessen der Frauen</div>
        <div class="row">
            <div class="col-100">
                <label for="nachtessen_frauen_teilnahme">Bei interesse bitte	Telefon	Nr.	angeben	und <i>Ja</i> auswählen</label>
            </div>
        </div>
        <div class="row">
            <div class="col-40">
                <select id="nachtessen_frauen_teilnahme" name="nachtessen_frauen_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
            <div class="col-10">
                &nbsp;
            </div>
            <div class="col-50">
                <input type="number" id="nachtessen_telefon" name="nachtessen_telefon"
                       placeholder="Tel. Nr.."">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="nachtessen_email">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="nachtessen_email" name="nachtessen_email" placeholder="Email..">
            </div>
        </div>

        <div class="title">Teilnahme am Zunftbot</div>
        <div class="row">
            <div class="col-100">
                <label for="zunftbot_teilnahme">Nur	Zünfter	bitte	<i>Ja</i>	oder	<i>Nein</i>	ankreuzen</label>
            </div>
        </div>
        <div class="row">
            <div class="col-100">
                <select id="zunftbot_teilnahme" name="zunftbot_teilnahme">
                    <option value="nein">Nein</option>
                    <option value="ja">Ja</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>