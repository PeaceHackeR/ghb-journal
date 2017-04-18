moment.locale('en', {
    months : [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ]
});

//
$(function () {
    // Form
    $('.select').select2({
        minimumResultsForSearch: "-1"
    });
    $('.styled').uniform({
        radioClass: 'choice'
    });
    function iconFormat(state) {
        var originalOption = state.element;
        return "<i class='icon-" + $(originalOption).data('icon') + "'></i>" + state.text;
    }

    $('.select-dd').select2({
        minimumResultsForSearch: "-1",
        width: '30%'
    });
    $('.select-mm').select2({
        minimumResultsForSearch: "-1",
        width: '35%'
    });
    $('.select-yy').select2({
        minimumResultsForSearch: "-1",
        width: '30%'
    });
    $('.select-icons').select2({
        minimumResultsForSearch: "-1",
        formatResult: iconFormat,
        formatSelection: iconFormat,
        escapeMarkup: function (m) {
            return m;
        }
    });
    $('.select-limit').select2({
        minimumResultsForSearch: "-1",
        width: 64
    });

    // Styles checkboxes, radios
    $('.styled').uniform({
        radioClass: 'choice'
    });

    /* Date Picker */
    $('.pickadate').pickadate({
        formatSubmit: 'dd/mm/yyyy',
        format : 'd mmmm yyyy'
    });
    $('.pickatime').pickatime({
        format: 'HH:i',
        formatSubmit: 'HH:i',
        formatLabel: 'HH:i'
    });
    

});