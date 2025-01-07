
/**
 * Progressive enhancement: click to un-zoom
 */
document.head.appendChild(document.createElement("style")).innerHTML = ".album a:has(img:target) { cursor: zoom-out }";

document.querySelectorAll(".album a").forEach((a) => {
  a.addEventListener("click", (event) => {
    var current_target = document.querySelector(".album a:has(img:target)");
    if (event.target == current_target) {
      event.preventDefault();
      window.location = a.href.replace("#illustration-", "#thumb-");
    }
  });
});


/**
 * Progressive enhancement: Switch targeted images to HD.
 */
addEventListener("hashchange", (event) => {

    document.querySelectorAll(".album a:not([href~='" + location.hash + "']) img[src*='/3200/']").forEach(function(img) {

        img.src = img.src.replace("/3200/", "/800/");
        document.querySelectorAll("[data-hd-overlay").forEach((e) => { e.remove(); });
    });

    document.querySelectorAll(".album a[href='" + location.hash + "'] img[src*='/800/']").forEach(function(img) {

        var tmp = img.cloneNode(true);
        tmp.src = tmp.src.replace("/800/", "/3200/");
        tmp.setAttribute("data-hd-overlay", true);
        img.parentNode.appendChild(tmp);
        
    });    
});
