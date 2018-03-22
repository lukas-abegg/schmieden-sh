<h1>Familien</h1>

<div class="familien-main">
    <div>
        <div class="familien-menu active"><a id="zunftfamilien_link" href="#familien" data-scroll>Zunftfamilien</a>
        </div>

        <?php
        if (!isset($_SESSION)) {
            session_start();
        }

        if (isset($_SESSION['vorstand']) || isset($_SESSION['zuenfter'])) {

            if (isset($_SESSION['vorstand'])) {
                ?>
                <div class="familien-menu"><a id="upload_link" href="#familien" data-scroll>Zunftdokumente ersetzen</a>
                </div>
                <?
            }
            ?>
            <div class="familien-menu"><a id="download_link" href="#familien" data-scroll>Zunftdokumente
                    herunterladen</a></div>
            <div class="familien-menu"><a id="galerie_link"
                                          href="../intern/Zunft_Zun_Schmieden_Galerie/album/Galerie_Fotos/index.html"
                                          target="_blank" data-scroll>Fotogalerie</a></div>
            <div class="familien-menu"><a id="logout_link" href="pages/familien/logout.php" data-scroll>Logout</a></div>
            <?
        } else {
            ?>
            <div class="familien-menu"><a id="login_link" href="#familien" data-scroll>Login interner Bereich</a></div>
            <?
        }
        ?>
    </div>

    <div class="familien-content">
        <div id="login-failed-msg" class="hint hidden">Username oder Passwort ist ungültig.</div>
        <div id="zunftfamilien" class=""><?php include("familien/zunftfamilien.php"); ?></div>
        <div id="download" class="hidden"><?php include("familien/download.php"); ?></div>
        <div id="upload" class="hidden"><?php include("familien/upload.php"); ?></div>
        <div id="login" class="hidden"><?php include("familien/login.php"); ?></div>
    </div>
</div>
