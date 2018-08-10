!(function() {
    function o() {
        var e = document.querySelectorAll("img.lazyload"),
            t = e.length;
        for (!t && window.removeEventListener("scroll", o); t--; ) {
            var n = window.innerHeight;
            e[t].getBoundingClientRect().top - n <= 100 &&
                ((e[t].src = e[t].getAttribute("data-src")),
                e[t].addEventListener("load", function() {
                    this.classList.remove("lazyload");
                }));
        }
    }
    o(), window.addEventListener("scroll", o);
})();
