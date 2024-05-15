document.addEventListener("DOMContentLoaded", function() {
    var options = {
        strings: [
            "Welcome to the terminal...",
            "Initializing...",
            "Loading data...",
            "Done!"
        ],
        typeSpeed: 50,
        backSpeed: 25,
        loop: true
    };

    var typed = new Typed("#typed", options);
});
