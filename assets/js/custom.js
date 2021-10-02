let input = document.querySelector("#phoneField");
var iti   = window.intlTelInput(input, {
    // any initialisation options go here
    initialCountry: "auto",
    geoIpLookup: function (callback) {
        $.get("https://ipinfo.io", function () {
        }, "jsonp").always(function (resp) {
            var countryCode = (resp && resp.country) ? resp.country : "us";
            callback(countryCode)
        });
    },

});
iti.promise.then(function () {
    let countryData = iti.getSelectedCountryData();
    let dialCode    = countryData['dialCode']
    $('#phoneField').val("");
    $('#phoneField').val(dialCode + $('#phoneField').val());
});

