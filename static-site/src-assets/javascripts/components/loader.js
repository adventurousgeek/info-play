var loader = document.getElementById('site-loader');

window.onload = function (ev) {
    TweenMax.to(loader, 0.5, {opacity: "0", zIndex:"-10", ease: Linear.easeOut});
}

