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

    /* Fancybox */
    $('[data-popup="lightbox"]').fancybox({
        padding: 3
    });
    
    /* UPLOAD */
    $('.file-input-custom').each(function(){
        var _option = {
            previewFileType: 'image',
            browseLabel: '',
            browseClass: 'btn bg-grey-300',
            browseIcon: '<i class="icon-file-upload2"></i> ',
            removeLabel: '',
            removeClass: '',
            removeIcon: '<i class="icon-cancel-square"></i> ',
            showRemove : !1,
            uploadLabel: '',
            uploadClass: 'btn btn-default btn-icon',
            uploadIcon: '<i class="icon-file-upload"></i> ',
            layoutTemplates: {
                caption: '<div tabindex="-1" class="form-control file-caption {class}">\n' + '<span class="icon-file-plus kv-caption-icon"></span><div class="file-caption-name"></div>\n' + '</div>'
            },
            initialCaption: "Please select image",
            allowedFileExtensions: ["jpg", "png"],
            overwriteInitial: true
        } 
        if($(this).data('value')){
            var _str = $(this).data('value');
            _option.initialCaption = "Click to selecte new file";
            _option.initialPreview = ["<img src='"+_str+"' class='file-preview-image' alt=''>"];
        }
        $(this).fileinput(_option);
    })
    

});