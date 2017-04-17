$(function () {

    // Table
    $('.px-tb-show').select2({
        minimumResultsForSearch: "-1",
        width: 65
    });
    $('.table-togglable').footable();

    // Daterange picker
    // ------------------------------
    $('.daterange-single').each(function () {
        var _box = $(this).find('span');
        $(this).daterangepicker({
                singleDatePicker: true
            },
            function (start, end, label) {
                _box.html(start.format('D MMM YYYY'));
            }
        );
        _box.html(moment().format('D MMM YYYY'));
    });


    $('.daterange-ranges').each(function () {
        var _loc = $(this);
        _loc.daterangepicker({
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                ranges: {
                    'Today': [moment(), moment()],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                applyClass: 'btn-small bg-ci btn-block',
                cancelClass: 'btn-small btn-default btn-block',
                format: 'DD/MM/YYYY'
            },
            function (start, end, label) {
                if (label == "today") {
                    _loc.find('span').html("วันนี้,  " + start.format('D MMM YYYY'));
                } else {
                    _loc.find('span').html(start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY'));
                }
            }
        );
    });

    $('.daterange-ranges span').html(moment().subtract(29, 'days').format('D MMM YYYY') + ' - ' + moment().format('D MMM YYYY'));


    // Form
    $('.select').select2({
        minimumResultsForSearch: "-1"
    });
    $('.styled').uniform({
        radioClass: 'choice'
    });

    //
    var _filters = $(".px-datatable-filters");
    $("#px-openFilters").click(function () {
        _filters.toggleClass("open");
    })

    // Form Check All //
    $(".fxcond-checked-all").change(function () {
        if ($(this).is(":checked")) {
            $(this).closest(".fxcond-checked").find("input:not(.fxcond-checked-all)").prop("checked", true).parent().addClass("checked");
        }
    });
    
    // Sortable //
    var _order = $("#fx-ordering")[0];
    
    (function(){
        var _str = ""
         $(".px-tb-order").each(function(i){
            _str += ","+$(this).data("id");
         });
         _order.value = _str.substr(1);
    })();
    
    $(".px-tb-sortable").sortable({
        containerSelector: 'table',
        itemPath: '> tbody',
        itemSelector: 'tr',
        placeholder: '<tr class="placeholder"/>',
        onDrop: function($item,container,_super){
            _super($item, container);
            var _str = ""
            $(".px-tb-order").each(function(i){
                $(this).text(i+1);
                _str += ","+$(this).data("id");
            });
            _order.value = _str.substr(1);
        }
    });
});