$.fn.extend({
    insertAtCaret: function (myValue) {
        return this.each(function (i) {
            if (document.selection) {
                this.focus();
                var sel = document.selection.createRange();
                sel.text = myValue;
                this.focus();
            } else if (this.selectionStart || this.selectionStart == '0') {
                var startPos = this.selectionStart;
                var endPos = this.selectionEnd;
                var scrollTop = this.scrollTop;
                this.value = this.value.substring(0, startPos) + myValue + this.value.substring(endPos, this.value.length);
                this.focus();
                this.selectionStart = startPos + myValue.length;
                this.selectionEnd = startPos + myValue.length;
                this.scrollTop = scrollTop;
            } else {
                this.value += myValue;
                this.focus();
            }
        });
    }
});

String.prototype.shuffle = function () {
    var a = this.split(""),
        n = a.length;

    for (var i = n - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var tmp = a[i];
        a[i] = a[j];
        a[j] = tmp;
    }
    return a.join("");
}
//
moment.locale('en', {
    months: [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ]
});

//
$(function () {
    // Lightbox
    $('[data-popup="lightbox"]').fancybox({
        padding: 3
    });

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
        format: 'd mmmm yyyy'
    });
    $('.pickatime').pickatime({
        format: 'HH:i',
        formatSubmit: 'HH:i',
        formatLabel: 'HH:i'
    });

    /* UPLOAD */
    $('.file-input-custom').fileinput({
        previewFileType: 'image',
        browseLabel: '',
        browseClass: 'btn bg-grey-300',
        browseIcon: '<i class="icon-file-upload2"></i> ',
        removeLabel: '',
        removeClass: '',
        removeIcon: '<i class="icon-cancel-square"></i> ',
        showRemove: !1,
        uploadLabel: '',
        uploadClass: 'btn btn-default btn-icon',
        uploadIcon: '<i class="icon-file-upload"></i> ',
        layoutTemplates: {
            caption: '<div tabindex="-1" class="form-control file-caption {class}">\n' + '<span class="icon-file-plus kv-caption-icon"></span><div class="file-caption-name"></div>\n' + '</div>'
        },
        initialCaption: "Please select image",
        allowedFileExtensions: ["jpg", "png"],
        overwriteInitial: true
    });

    // Multiple Tags
    $(".select-multiple-tags").each(function () {
        var _tag = ($(this).data('defaultTags')).split(",");
        $(this).select2({
            width: '100%',
            tags: _tag
        });
    });

    // SEO URL //
    if ($("#fx-urlinput").length) {
        var _url = $("#fx-urlsample"),
            _keyIntervalID = null;

        $("#fx-urlinput").keyup(function () {
            var _str = (this.value).toLowerCase().replace(/[^\w\d\-\s]/ig, "").replace(/\s+/ig, "-")
            _url.text(_str);
        })
    }
    
    // Password Generator //
    $("#px-passGen").click(function(e){
        e.preventDefault();
        $("#fx-passuser")[0].value = generatePassword(8, false);
    })
    
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
