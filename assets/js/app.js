let input = document.querySelector("#phoneField");
let iti   = window.intlTelInput(input, {
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

$('#buyer_from').on('submit', function (event) {
    event.preventDefault();
    $.ajax({
        url: '/',
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function (data) {
            if (data.empty_field) {
                let html = '<li>Input field must not be empty</li>';
                $('#alert-errors').show().html(html);
                setTimeout(function () {
                    $('#alert-errors').hide().html(html);
                }, 6000);//wait 6 seconds
            }
            let html = '';
            if (data.validation_error) {
                for (const [key, value] of Object.entries(data.msg)) {
                    html += `<li>${value}</li>`
                }
                $('#alert-errors').show().html(html);
                setTimeout(function () {
                    $('#alert-errors').hide().html(html);
                }, 6000);//wait 6 seconds
            }
            if (data.success) {
                let html = '<li>Form Successfully Submitted</li>';
                $('#alert-success').show().html(html);
                document.getElementById("buyer_from").reset();
                setTimeout(function () {
                    $('#alert-errors').hide().html(html);
                    window.location.href = "/reports";
                }, 4000);//wait 3 seconds
            }
            if (data.errors === false) {
                let html = '<li>Something Wrong. Please Try again Later</li>';
                $('#alert-errors').show().html(html);
                setTimeout(function () {
                    $('#alert-errors').hide().html(html);
                }, 6000);//wait 6 seconds
            }
        }
    });
});

$('input[name="items"]').amsifySuggestags();
