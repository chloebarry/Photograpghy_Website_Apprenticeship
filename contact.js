$(() => {
    $.get('https://restcountries.com/v3.1/all', function (res) {
        const countryNames = [];
        res.forEach(function (country, i) {
            countryNames[i] = country.name.common;
        });
        countryNames.sort();

        countryNames.forEach(function (name) {
            let nameElem = $(`<option value="${name}">${name}</option>`);
            $('#country').append(nameElem);
        });
    });
});


