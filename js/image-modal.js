
function showModalImage (imgId) {// Get the modal
    var modal = document.getElementById('imgModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById(imgId);
    var modalImg = document.getElementById("imgPlaceInModal");
    var captionText = document.getElementById("caption");

    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-modal")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    };
}

function showBannerImage (imgId) {// Get the modal
    var modal = document.getElementById('imgModalBanner');

// Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById(imgId);
    var modalImg = document.getElementById("imgPlaceInModalBanner");
    var captionText = document.getElementById("captionBanner");

    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-modal-banner")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    };
}

/* Startseite */
showModalImage("zunftSchmiedenLogo");

/* History */
showModalImage("imgWappen");
showModalImage("imgPortal");

/* Silber */
showModalImage("vulkanHeute");
showModalImage("vulkanAlt");

/* Vorstand */
showBannerImage("zunftmeister1");
showBannerImage("zunftmeister2");
showBannerImage("zunftschreiber");
showBannerImage("zunftverwalter");
showBannerImage("silberherr");
showBannerImage("rueger");
showBannerImage("beisitzer");
showBannerImage("webmaster");

/* Familien */
showBannerImage("Abegg");
showBannerImage("Baeschlin");
showBannerImage("Becker");
showBannerImage("Bendel");
showBannerImage("Bodmer");
showBannerImage("Brupbacher");
showBannerImage("Fischer");
showBannerImage("Graber");
showBannerImage("Hurter");
showBannerImage("Jezler");
showBannerImage("Kuebler");
showBannerImage("Moser");
showBannerImage("Schnetzler");
showBannerImage("Sorg");
showBannerImage("Stierlin");
showBannerImage("Sulzer");