$(function () {
    
    // Lightbox
    $('[data-popup="lightbox"]').fancybox({
        padding: 3
    });

    // Styles checkboxes, radios
    $('.select').select2({
        minimumResultsForSearch: "-1"
    });
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
