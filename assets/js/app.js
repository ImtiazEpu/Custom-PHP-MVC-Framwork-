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


const nameField    = document.getElementById('nameField');
const emailField   = document.getElementById('emailField');
const phoneField   = document.getElementById('phoneField');
const cityField    = document.getElementById('cityField');
const itemsField   = document.getElementById('itemsField');
const receiptField = document.getElementById('receiptField');
const amountField  = document.getElementById('amountField');
const entrybyField = document.getElementById('entrybyField');
const noteField    = document.getElementById('noteField');

function WordCount(str) {
    return str.split(" ").length;
}

function setErrorFor(input, message) {
    const inputControl     = input.parentElement;
    const small            = inputControl.querySelector('small');
    inputControl.className = 'column input-control error';
    small.innerText        = message;
    setTimeout(function () {
        $("div").removeClass('error')
    }, 10000);//wait 3 seconds

}

function setErrorForPhone(input, message) {
    const inputControl           = input.parentElement;
    const parentInputControl     = inputControl.parentElement
    const small                  = parentInputControl.querySelector('small');
    parentInputControl.className = 'column input-control error';
    small.innerText              = message;
    setTimeout(function () {
        $("div").removeClass('error')
    }, 10000);//wait 3 seconds
}

function setSuccessFor(input) {
    const inputControl     = input.parentElement;
    inputControl.className = 'column input-control success';
}

function isaulmum(text) {
    return /^[a-zA-Z0-9 ]+$/.test(text);
}

function isText(text) {
    return /^[A-Za-z]+$/.test(text);
}

function isTextWithcoma(text) {
    return /^[A-Za-z,]+$/.test(text);
}

function isTextWithSpace(text) {
    return /^[A-Za-z ]+$/.test(text);
}

function isNumber(number) {
    return /^[0-9]+$/.test(number);
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

$('#buyer_from').on('submit', function (event) {
    event.preventDefault();
    const nameFieldValue    = nameField.value.trim();
    const emailFieldValue   = emailField.value.trim();
    const phoneFieldValue   = phoneField.value.trim();
    const cityFieldValue    = cityField.value.trim();
    const itemsFieldValue   = itemsField.value.trim();
    const receiptFieldValue = receiptField.value.trim();
    const amountFieldValue  = amountField.value.trim();
    const entrybyFieldValue = entrybyField.value.trim();
    const noteFieldValue    = noteField.value.trim();
    let error               = false;
    if (nameFieldValue === '') {
        error = true;
        setErrorFor(nameField, 'Field cannot be empty');
    } else if (!isaulmum(nameFieldValue)) {
        error = true;
        setErrorFor(nameField, 'Only only text, spaces and numbers are allow');
    } else if (nameFieldValue.length > 20) {
        error = true;
        setErrorFor(nameField, 'Only 20 characters are allow');
    }
    if (phoneFieldValue === '') {
        error = true;
        setErrorForPhone(phoneField, 'Field cannot be empty');
    } else if (!isNumber(phoneFieldValue)) {
        error = true;
        setErrorForPhone(phoneField, 'Only number are allow');
    }
    if (receiptFieldValue === '') {
        error = true;
        setErrorFor(receiptField, 'Field cannot be empty');
    } else if (!isText(receiptFieldValue)) {
        error = true;
        setErrorFor(receiptField, 'Only text are allow');
    }
    if (emailFieldValue === '') {
        error = true;
        setErrorFor(emailField, 'Field cannot be empty');
    } else if (!isEmail(emailFieldValue)) {
        error = true;
        setErrorFor(emailField, 'Please enter a valid Email');
    }
    if (noteFieldValue === '') {
        error = true;
        setErrorFor(noteField, 'Field cannot be empty');
    } else if ((WordCount(noteFieldValue)) > 30) {
        error = true;
        setErrorFor(noteField, 'Maximum 30 words are allow');
    }
    if (cityFieldValue === '') {
        error = true;
        setErrorFor(cityField, 'Field cannot be empty');
    } else if ((!isTextWithSpace(cityFieldValue))) {
        error = true;
        setErrorFor(cityField, 'Only text & space are allow');
    }
    if (itemsFieldValue === '') {
        error = true;
        setErrorFor(itemsField, 'Field cannot be empty');
    } else if ((!isTextWithcoma(itemsFieldValue))) {
        error = true;
        setErrorFor(itemsField, 'Only text are allow');
    }
    if (amountFieldValue === '') {
        error = true;
        setErrorFor(amountField, 'Field cannot be empty');
    } else if (!isNumber(amountFieldValue)) {
        error = true;
        setErrorFor(amountField, 'Only number are allow');
    }
    if (entrybyFieldValue === '') {
        error = true;
        setErrorFor(entrybyField, 'Field cannot be empty');
    } else if (!isNumber(entrybyFieldValue)) {
        error = true;
        setErrorFor(entrybyField, 'Only number are allow');
    }
    if (!error) {
        $.ajax({
            url: './',
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
                        window.location.href = "./reports";
                    }, 4000);//wait 3 seconds
                }
                if (data.errors === false) {
                    let html = '<li>Something Wrong. Please Try again Later</li>';
                    $('#alert-errors').show().html(html);
                    setTimeout(function () {
                        $('#alert-errors').hide().html(html);
                    }, 6000);//wait 6 seconds
                }
                if (data.XpdFromSubmission_cookie) {
                    let html = '<li>Multiple submissions are restricted within 24 hours.</li>';
                    $('#alert-errors').show().html(html);
                }
            }
        });
    }

});

$('input[name="items"]').amsifySuggestags({
    printValues: false

});
