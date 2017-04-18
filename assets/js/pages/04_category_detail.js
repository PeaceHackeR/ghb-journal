$(function () {
    // Styles checkboxes, radios
    $('.styled').uniform({
        radioClass: 'choice'
    });

    /* Date Picker */
    $('.pickadate').pickadate({
        formatSubmit: 'dd/mm/yyyy',
        format: 'd mmmm yyyy'
    });
    $('.pickatime').pickatime({
        format: 'HH:i',
        formatSubmit: 'HH:i',
        formatLabel: 'HH:i'
    });
});
