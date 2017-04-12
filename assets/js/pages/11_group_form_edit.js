
$(function () {

    // Styles checkboxes, radios
    $('.styled').uniform({
        radioClass: 'choice'
    });

    //
    function iconFormat(state) {
        var originalOption = state.element;
        return "<i class='icon-" + $(originalOption).data('icon') + "'></i>" + state.text;
    }
    
    $('.select').select2({
        minimumResultsForSearch: "-1"
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
    
});