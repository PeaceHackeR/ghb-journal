
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
    
    
    // Permission//
    $(".px-checkAll").each(function(){
        var _list = $(this).closest('tr').find("input:not(.px-checkAll)");
        $(this).change(function(){
            if(this.checked){
                _list.prop('checked',true).attr('disabled',true).parent().addClass("checked").parent().addClass("disabled");
            }else{
                _list.prop('checked',false).attr('disabled',false).parent().removeClass("checked").parent().removeClass("disabled");
            }
        })
    })
});