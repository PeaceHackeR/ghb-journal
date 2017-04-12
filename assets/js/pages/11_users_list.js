moment.locale('en', {
    months : [
        'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษาภาคม', 'มิถุนายน',
        'กรกฏาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
    ],
    monthsShort : [
        "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.",
        "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
    ]
});

$(function(){

    // Table
    $('.px-tb-show').select2({
        minimumResultsForSearch: "-1",
        width: 65
    });
    $('.table-togglable').footable();
    
    // Daterange picker
    // ------------------------------
    $('.daterange-ranges').each(function(){
        var _loc = $(this);
        _loc.daterangepicker({
                startDate: moment().subtract(29,'days'),
                endDate: moment(),
                dateLimit: { days: 60 },
                ranges: {
                    '1 เดือน ย้อนหลัง': [moment().subtract(29,'days'), moment()],
                    '3 เดือน ย้อนหลัง': [moment().subtract(89,'days'), moment()],
                    'เดือนนี้': [moment().startOf('month'), moment().endOf('month')],
                    'เดือนก่อน': [moment().subtract(1,'month').startOf('month'), moment().subtract(1,'month').endOf('month')]
                },
                opens: 'left',
                applyClass: 'btn-small bg-ci btn-block',
                cancelClass: 'btn-small btn-default btn-block',
                format: 'DD/MM/YYYY',
                locale: {
                    applyLabel: 'ตกลง',
                    cancelLabel: 'ยกเลิก',
                    startLabel: 'เริ่ม',
                    endLabel: 'ถึง',
                    customRangeLabel: 'กำหนดเอง',
                    daysOfWeek: ['อ', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
                    monthNames: [
                        'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษาภาคม', 'มิถุนายน',
                        'กรกฏาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                    ],
                    firstDay: 1
                }
            },function(start, end, label) {
                _dateStart = start;
                _dateEnd = end;
                _loc.find('span').html(start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY'));
            }
        );
    });

    $('.daterange-ranges span').html(moment().subtract(29,'days').format('D MMM YYYY') + ' - ' + moment().format('D MMM YYYY'));

    
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