// Pull's iPhone's address-bar.
/mobile/i.test(navigator.userAgent) && !window.location.hash && setTimeout(function () {
    window.scrollTo(0, 1);
}, 1000);

