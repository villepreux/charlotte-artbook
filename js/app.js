
/**
 * Progressive enhancement: Switch targeted images to HD.
 * TODO: Go MPA and avoid JS for that?
 */
addEventListener("hashchange", (event) => {

    document.querySelectorAll("#gallery a:not([href~='" + location.hash + "']) img[src*='/3200/']").forEach(function(img) {

        img.src = img.src.replace("/3200/", "/800/");
    });

    document.querySelectorAll("#gallery a[href='" + location.hash + "'] img[src*='/800/']").forEach(function(img) {

        img.src = img.src.replace("/800/", "/3200/");
    });    
});
