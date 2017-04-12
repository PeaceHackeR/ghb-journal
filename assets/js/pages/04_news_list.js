

$(function(){

    // Table
    $('.px-tb-show').select2({
        minimumResultsForSearch: "-1",
        width: 65
    });
    $('.table-togglable').footable();
    
    // jQuery UI date picker
    // ------------------------------
    $('.datepicker').datepicker();
    

    // Form
    $('.select').select2({
        minimumResultsForSearch: "-1"
    });
    $('.styled').uniform({
        radioClass: 'choice'
    });
    
    //
    var _filters = $(".px-datatable-filters");
    $("#px-openFilters").click(function(){
        _filters.toggleClass("open");
    })
    
    // Form Bulk Action //
    if($("#px-bulk-Action").length){
        var _select = $("#px-bulk-Action").find("select.px-input"),
            _btn = $("#px-bulk-Action").find("button.px-input");
        function enableBulk(){
            _select[0].disabled = false;
            _btn[0].disabled = false;
            return !0;
        }
        function disableBulk(){
            _select[0].disabled = true;
            _btn[0].disabled = true;
            $(".fxcond-bulk-all").prop("checked", false).parent().removeClass("checked");
            return !0;
        }

        $(".fxcond-bulk-all").change(function(){
            if($(this).is(":checked")){
                $(".fxcond-bulk-check:not(:checked)").trigger('click');
            }else{
                $(".fxcond-bulk-check:checked").trigger('click');
            }
        });
        $(".fxcond-bulk-check").change(function(){
            if(this.checked){
                enableBulk();
            }else{
                ($(".fxcond-bulk-check").length == $(".fxcond-bulk-check:not(:checked)").length) && disableBulk();
            }
        })
    }
});