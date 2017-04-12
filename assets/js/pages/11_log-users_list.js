
moment.locale('en', {
    months : [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ]
});

$(function(){

    // Table
    $('.px-tb-show').select2({
        minimumResultsForSearch: "-1",
        width: 65
    });
    $('.table-togglable').footable();

    
    // Form
    $('.select').select2({
        minimumResultsForSearch: "-1"
    });
    $('.styled').uniform({
        radioClass: 'choice'
    });
    
    // Daterange picker
    // ------------------------------
    $(".datepicker-filter").daterangepicker({
        singleDatePicker: true
    });
    
    //
    var _filters = $(".px-datatable-filters");
    $("#px-openFilters").click(function(){
        _filters.toggleClass("open");
    })
    
    
    // Form Check All //
    $(".fxcond-checked-all").change(function(){
        if($(this).is(":checked")){
            $(this).closest(".fxcond-checked").find("input:not(.fxcond-checked-all)").prop("checked", true).parent().addClass("checked");
        }
    });
    
    // Form Bulk All //
    $(".fxcond-bulk-all").change(function(){
        if($(this).is(":checked")){
            $(".fxcond-bulk-check").prop("checked", true).parent().addClass("checked");
        }else{
            $(".fxcond-bulk-check").prop("checked", false).parent().removeClass("checked");
        }
    });
    
});