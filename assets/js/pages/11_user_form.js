
$(function () {
    // Lightbox
    $('[data-popup="lightbox"]').fancybox({
        padding: 3
    });

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
    
    // Function
    $("#px-passGen").click(function(e){
        e.preventDefault();
        $("#fx-passuser")[0].value = generatePassword(8, false);
    })
    $("#fx-statusCheck").change(function(){
        if(this.value=="nissan"){
            if(!confirm("คุณกำลังตั้งผู้ดูแลระบบที่มีสิทธิ์ในการเข้าถึงและแก้ไขข้อมูลระบบ")){
                
            }
        }
    })
});