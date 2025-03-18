// scripts.js
$(document).ready(function () {
    // Toggle between login and registration forms
    $('.message a').click(function () {
        $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
    });
});