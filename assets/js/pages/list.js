jQuery.fn.forceNumber = function () {
    return this.each(function () {
        $(this).keydown(function (e) {
            var reg = /[\d\.\-]/,
                key = e.charCode || e.keyCode || 0,
                fn = (e.key == "Enter") || (e.key == "Backspace") || (e.key == "Tab") || (e.key == "Decimal") || (e.key == "ArrowRight") || (e.key == "ArrowLeft"),
                flg = fn || (reg.test(e.key)) || (e.key == null);
            // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
            // home, end, period, and numpad decimal
            return flg && (
                key == 8 ||
                key == 9 ||
                key == 13 ||
                key == 46 ||
                key == 110 ||
                key == 190 ||
                (key >= 35 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};
$(function () {
    // Table
    $('.px-tb-show').select2({
        minimumResultsForSearch: "-1",
        width: 65
    });
    $('.table-togglable').footable();

    // Lightbox
    $('[data-popup="lightbox"]').fancybox({
        padding: 3
    });

    // jQuery UI date picker
    // ------------------------------
    $('.datepicker').datepicker();

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

    // Form Bulk Action //
    if ($("#px-bulk-Action").length) {
        var _select = $("#px-bulk-Action").find("select.px-input"),
            _btn = $("#px-bulk-Action").find("button.px-input");

        function enableBulk() {
            _select[0].disabled = false;
            _btn[0].disabled = false;
            return !0;
        }

        function disableBulk() {
            _select[0].disabled = true;
            _btn[0].disabled = true;
            $(".fxcond-bulk-all").prop("checked", false).parent().removeClass("checked");
            return !0;
        }

        $(".fxcond-bulk-all").change(function () {
            if ($(this).is(":checked")) {
                $(".fxcond-bulk-check:not(:checked)").trigger('click');
            } else {
                $(".fxcond-bulk-check:checked").trigger('click');
            }
        });
        $(".fxcond-bulk-check").change(function () {
            if (this.checked) {
                enableBulk();
            } else {
                ($(".fxcond-bulk-check").length == $(".fxcond-bulk-check:not(:checked)").length) && disableBulk();
            }
        })
    }

    // Re-Order //
    if ($(".px-tb-sortable").length) {
        var _order = $("#fx-ordering")[0];

        (function () {
            var _str = ""
            $(".px-tb-order").each(function (i) {
                _str += "," + $(this).data("id");
            });
            _order.value = _str.substr(1);
        })();

        $(".px-tb-sortable").sortable({
            containerSelector: 'table',
            itemPath: '> tbody',
            itemSelector: 'tr',
            placeholder: '<tr class="placeholder"/>',
            onDrop: function ($item, container, _super) {
                _super($item, container);
                var _str = ""
                $(".px-tb-order").each(function (i) {
                    $(this).text(i + 1);
                    _str += "," + $(this).data("id");
                });
                _order.value = _str.substr(1);
            }
        });
    }

    // Recommend //
    if ($("#action-Recommend").length) {
        (function ($) {
            var _id = $('[name="id"]'),
                _hl = $('[name="highlight"]'),
                _start = $('[name="fromdate"]'),
                s_hh = $('[name="fromtime_hh"]'),
                s_mm = $('[name="fromtime_mm"]'),
                s_ss = $('[name="fromtime_ss"]'),
                _end = $('[name="todate"]'),
                e_hh = $('[name="totime_hh"]'),
                e_mm = $('[name="totime_mm"]'),
                e_ss = $('[name="totime_ss"]'),
                _helper = $("#action-Recommend").find(".px-input-warning"),
                fnum = $(".fnum");

            $(".fnum").forceNumber();
            $('a[data-target="#action-Recommend"]').click(function () {
                var _loc = $(this);
                _id[0].value = _loc.data('id');
                if (_loc.data('highlight') == 1) {
                    _hl[0].checked = true;
                } else {
                    _hl[1].checked = true;
                }
                if (_loc.data('highlight_startdate') == "") {
                    _start.pickadate('picker').clear();
                } else {
                    _start.pickadate('picker').set('select', _loc.data('highlight_startdate'));
                }
                if (_loc.data('highlight_enddate') == "") {
                    _end.pickadate('picker').set('select', moment().format("DD MMM YYYY")).clear();
                } else {
                    _end.pickadate('picker').set('select', _loc.data('highlight_enddate'));
                }
                if (_loc.data('highlight_starttime') == "") {
                    s_hh.val("00");
                    s_mm.val("00");
                    s_ss.val("00");
                } else {
                    var tt = (_loc.data('highlight_starttime')).split(":");
                    s_hh.val(tt[0]);
                    s_mm.val(tt[1]);
                    s_ss.val(tt[2]);
                }
                if (_loc.data('highlight_endtime') == "") {
                    e_hh.val("");
                    e_mm.val("");
                    e_ss.val("");
                } else {
                    var tt = (_loc.data('highlight_endtime')).split(":");
                    e_hh.val(tt[0]);
                    e_mm.val(tt[1]);
                    e_ss.val(tt[2]);
                }
                $.uniform.update();
            });
            $("#action-Recommend").on('hidden.bs.modal', function (e) {
                $(".fnum").removeClass("parsley-error");
            });
            $("#action-Recommend-form").on('submit', function (e) {
                e.preventDefault();
                _helper.text("");
                var _allow = true;
                if (_hl[0].checked) {
                    // Check length
                    fnum.each(function () {
                        if (this.value != "") {
                            if (+this.value >= $(this).data('max')) {
                                $(this).addClass("parsley-error");
                                _allow = false;
                            }
                        }
                    });
                    // Set interval
                    if (_start.val() == "") {
                        _helper.text("Please fill start date.").removeClass("hide");
                    }
                    if (_end.val() != "") {
                        var start_format = _start.val() + " ",
                            end_format = _end.val() + " ";
                        start_format += (s_hh.val() == "") ? "00" : s_hh.val();
                        start_format += (s_mm.val() == "") ? ":00" : ":" + s_mm.val();
                        start_format += (s_ss.val() == "") ? ":00" : ":" + s_ss.val();
                        end_format += (e_hh.val() == "") ? "00" : e_hh.val();
                        end_format += (e_mm.val() == "") ? ":00" : ":" + e_mm.val();
                        end_format += (e_ss.val() == "") ? ":00" : ":" + e_ss.val();
                        var tt = moment(end_format).diff(start_format, 'seconds');
                        if (tt <= 0) {
                            _helper.text("Invalid date.").removeClass("hide");
                        }
                    }
                }


                if (_allow) {
                    $(".fnum").removeClass("parsley-error");
                }
            });

        })(jQuery);
    }
    // --- TAG --- //

    // ADD
    if ($("#action-Tag-add").length) {

        (function ($) {
            var _text = $("#action-TagAdd-form").find(".floc-text"),
                _helper = $("#action-TagAdd-form").find(".px-input-warning");
            $("#action-Tag-add").on('show.bs.modal', function (e) {
                _text[0].value = ""
                _helper.text("");
            });
            _text.keyup(function () {
                var _str = (this.value).replace(/^\s+|\s+$/g, "").replace(/\s+/g, " ");
                _helper.text(_str).removeClass("text-danger");
            })
            $("#action-TagAdd-form").on('submit', function (e) {
                e.preventDefault();

                var _str = (_text[0].value).replace(/^\s+|\s+$/g, "").replace(/\s+/g, " ");
                if (_str.length < 3) {
                    _helper.text("Invalid keyword.").addClass("text-danger");
                }
            });
        })(jQuery);
    }

    // Edit
    if ($("#action-Tag-edit").length) {
        (function ($) {
            var _id = $('[name="id"]'),
                _text = $("#action-TagEdit-form").find(".floc-text"),
                cc_at = $("#action-TagEdit-form").find(".floc-articles"),
                cc_ns = $("#action-TagEdit-form").find(".floc-news"),
                _helper = $("#action-TagEdit-form").find(".px-input-warning");

            $('a[data-target="#action-Tag-edit"]').click(function () {
                var _loc = $(this);
                _id[0].value = _loc.data('id');
                _text[0].value = _loc.data('text');
                _helper.text(_loc.data('text'));
                cc_at[0].checked = (_loc.data("articles") == "0") ? false : true;
                cc_ns[0].checked = (_loc.data("news") == "0") ? false : true;
                $.uniform.update(".floc-articles, .floc-news");
            })
            _text.keyup(function () {
                var _str = (this.value).replace(/^\s+|\s+$/g, "").replace(/\s+/g, " ");
                _helper.text(_str).removeClass("text-danger");
            })
            $("#action-TagEdit-form").on('submit', function (e) {
                e.preventDefault();

                var _str = (_text[0].value).replace(/^\s+|\s+$/g, "").replace(/\s+/g, " ");
                if (_str.length < 3) {
                    _helper.text("Invalid keyword.").addClass("text-danger");
                }
            });
        })(jQuery);
    }
});
