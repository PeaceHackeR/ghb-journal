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
    months : [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ]
});

(function ($, win, doc) {
    'use strict'

    var _template = "",
        _templateInfo = "",
        _tmp = null,
        _firstrun = !0,
        _dropzone = null;

    
    var cDK = function (el) {
        var _loc = this,
            _el = $(el),
            _content = _el.find(".insert-container"),
            _info = _el.find(".insert-info-box"),
            _submit = _el.find(".insert-submit"),
            _tabUpload = _el.find(".fx-insertUpload"),
            _tabGallery = _el.find(".fx-insertGallery");
        
        var _0x797d=["\x35\x3D\x39\x2E\x31\x28\x29\x2E\x32\x28\x2F\x7B\x7B\x30\x7D\x7D\x2F\x2C\x27\x33\x3D\x22\x7B\x7B\x30\x7D\x7D\x22\x27\x29\x3B\x36\x3D\x37\x2E\x31\x28\x29\x2E\x32\x28\x2F\x7B\x7B\x30\x7D\x7D\x2F\x2C\x27\x33\x3D\x22\x7B\x7B\x30\x7D\x7D\x22\x27\x29\x3B\x24\x28\x22\x2E\x38\x2D\x34\x2D\x61\x22\x29\x2E\x62\x28\x22\x2E\x63\x2D\x64\x22\x29\x2E\x65\x28\x27\x66\x20\x67\x20\x68\x20\x69\x27\x29\x3B","\x7C","\x73\x70\x6C\x69\x74","\x69\x6D\x67\x7C\x68\x74\x6D\x6C\x7C\x72\x65\x70\x6C\x61\x63\x65\x7C\x73\x72\x63\x7C\x65\x64\x69\x74\x6F\x72\x7C\x5F\x74\x65\x6D\x70\x6C\x61\x74\x65\x7C\x5F\x74\x65\x6D\x70\x6C\x61\x74\x65\x49\x6E\x66\x6F\x7C\x5F\x69\x6E\x66\x6F\x7C\x70\x78\x7C\x5F\x63\x6F\x6E\x74\x65\x6E\x74\x7C\x73\x6F\x75\x72\x63\x65\x7C\x66\x69\x6E\x64\x7C\x62\x6F\x78\x7C\x62\x6F\x74\x74\x6F\x6D\x7C\x74\x65\x78\x74\x7C\x63\x6F\x64\x65\x7C\x62\x79\x7C\x41\x4B\x41\x52\x41\x54\x45\x7C\x50\x4F\x4E\x47\x53\x41\x57\x41\x4E\x47","\x72\x65\x70\x6C\x61\x63\x65","","\x5C\x77\x2B","\x5C\x62","\x67"];
        eval(function(_0xbff6x1,_0xbff6x2,_0xbff6x3,_0xbff6x4,_0xbff6x5,_0xbff6x6){_0xbff6x5=function(_0xbff6x3){return _0xbff6x3.toString(_0xbff6x2)};if(!_0x797d[5][_0x797d[4]](/^/,String)){while(_0xbff6x3--){_0xbff6x6[_0xbff6x5(_0xbff6x3)]=_0xbff6x4[_0xbff6x3]||_0xbff6x5(_0xbff6x3)};_0xbff6x4=[function(_0xbff6x5){return _0xbff6x6[_0xbff6x5]}];_0xbff6x5=function(){return _0x797d[6]};_0xbff6x3=1};while(_0xbff6x3--){if(_0xbff6x4[_0xbff6x3]){_0xbff6x1=_0xbff6x1[_0x797d[4]]( new RegExp(_0x797d[7]+_0xbff6x5(_0xbff6x3)+_0x797d[7],_0x797d[8]),_0xbff6x4[_0xbff6x3])}};return _0xbff6x1}(_0x797d[0],19,19,_0x797d[3][_0x797d[2]](_0x797d[1]),0,{}));
        
        if(_firstrun){
            $('<div id="dropzone" class="fade well"><div class="insert-dropzone"><span>File Upload</span></div></div>').appendTo("body");
            _dropzone = $("#dropzone");
            
            $(doc).bind('dragover', function (e) {
                var dropZone = _dropzone,
                    timeout = win.dropZoneTimeout;
                if (!timeout) {
                    dropZone.addClass('in');
                } else {
                    clearTimeout(timeout);
                }
                var found = false,
                    node = e.target;
                do {
                    if (node === dropZone[0]) {
                        found = true;
                        break;
                    }
                    node = node.parentNode;
                } while (node != null);
                if (found) {
                    dropZone.addClass('hover');
                } else {
                    dropZone.removeClass('hover');
                }
                win.dropZoneTimeout = setTimeout(function () {
                    win.dropZoneTimeout = null;
                    dropZone.removeClass('in hover');
                }, 100);
            });
            _firstrun = !1;
        }
        
        this.dom = {
            _el: _el,
            _content: _content,
            _info : _info,
            _cmax: null
        };
        this._tabUpload = _tabUpload;
        this._tabGallery = _tabGallery;
        this.json = null;
        this.fsize = function(n){
            if(n<1024) return n+" B";
            if(n<1024*1024) return (n/1024).toFixed(1)+" KB";
            return (n/1024/1024).toFixed(1)+" MB";
        }
        this._uploader = $('#fileupload').fileupload({
            dropZone: _dropzone,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            maxFileSize: 15*1024*1024,
            dataType: 'json',
            drop: function (e, data) {
                $.each(data.files, function (index, file) {
                    //console.log('Dropped file: ' + file.name);
                });
            },
            change: function (e, data) {
                $.each(data.files, function (index, file) {
                    //console.log('Selected file: ' + file.name);
                });
            },
            done: function (e, data) {
                var jsonp = data.result.files[0];
                //
                var _dummyResonponse = {
                    "id": (Date.now()).toString(16).shuffle(),
                    "title": jsonp.name,
                    "filename": (jsonp.name).replace(/\s/g,"-"),
                    "url": jsonp.url,
                    "date": Date.now(),
                    "imme": jsonp.type,
                    "width": jsonp.dw,
                    "height": jsonp.dh,
                    "thumbnail": {
                        "width": 300,
                        "height": 240,
                        "url": jsonp.thumbnailUrl
                    },
                    "filesize": jsonp.size,
                    "alttext": ""
                }
                //
                _loc.addContent(_dummyResonponse);
            },
            fail: function (e, data) {
                $.ajax({
                    url: "server/php/",
                    dataType: 'json',
                    data: {file: data.files[0].name},
                    type: 'DELETE'
                });
            }
        });
        
    }

    cDK.prototype.loadJson = function (s) {
        var _loc = this;
        $.post(s, {
            cate: 1
        }, "json").done(function (res) {
            _loc.json = res;
            _loc.createContent();
        });
    }
    cDK.prototype.deleteImage = function(key){
        // delete images //
    }
    cDK.prototype.createContent = function(){
        var _max = this.json.data.length,
            _html = "";
        if(_max>0){
            this.json.data.forEach(function(_obj,i){
                _obj.alttext = "";
                var _str = _template;
                _str = _str.replace(/{{mux}}/g, i);
                _str = _str.replace(/{{img}}/g, _obj.thumbnail.url);
                _str = _str.replace(/{{val}}/g, _obj.id);
                _str = _str.replace(/{{ck}}/g, "");
                _html += _str;
            });

            this.dom._content.html(_html);
            this.dom._content.find(".px-check-styled").uniform({radioClass: 'choice'});
            this.showInfo(0);
            _tmp = this.dom._content.find(".thumbnail").eq(0);
            _tmp.addClass("active");
        }else{
            this.dom._info.html('<span class="px-editor-nofiles">ยังไม่มีข้อมูล กรุณาอัพโหลดภาพ</span>')
            this.dom._content.html('<span class="px-editor-nofiles"><span>- ไม่พบรูปภาพ -</span></span>');
        }
        this._mouseClick();
    }
    cDK.prototype.addContent = function(_obj){
        var _nxNum = this.json.data.length;
        this.json.data.push(_obj);
        
        var _str = _template;
        _str = _str.replace(/{{mux}}/g, _nxNum);
        _str = _str.replace(/{{img}}/g, _obj.thumbnail.url);
        _str = _str.replace(/{{val}}/g, _obj.id);
        _str = _str.replace(/{{ck}}/g, "checked");
        
        if(_nxNum==0){
            this.dom._content.html("");
        }
        this.dom._content.prepend(_str);
        this.dom._content.find(".px-check-styled").uniform({radioClass: 'choice'});
        this.showInfo(_nxNum);
        if(!!_tmp) _tmp.removeClass("active");
        _tmp = this.dom._content.find(".thumbnail").eq(0);
        _tmp.addClass("active");
        //
        this._tabGallery.tab('show');
    }
    cDK.prototype._mouseClick = function(){
        var _loc = this,
            _obj = this.dom._content;
        
        _obj.on('click','.thumb',function(e){
            _tmp.removeClass("active");
            $(this).parent().addClass("active");
            _loc.showInfo($(this).parent().data("imx"));
            if(e.metaKey) $(this).next().find("input").trigger('click');
            _tmp = $(this).parent();
        }).on('dblclick','.thumb',function(){
            $(this).next().find("input").trigger('click');
        });
    }
    cDK.prototype.showInfo = function(n){
        if(n==(-1)){
            this.dom._info.html('<div class="panel-body insert-info-box"><span class="text-danger">ขออภัย!!<span> ระบบรองรับไฟล์ .jpg, .png, .gif เท่านั้น</div>');
            return false;
        }
        
        var _obj = this.json.data[n],
            _str = _templateInfo;
        
        _str = _str.replace(/{{id}}/g, _obj.id);
        _str = _str.replace(/{{img}}/g, _obj.thumbnail.url);
        _str = _str.replace(/{{filename}}/g, _obj.filename);
        _str = _str.replace(/{{date}}/g, moment(_obj.date).format('DD MMMM YYYY'));
        _str = _str.replace(/{{filesize}}/g, this.fsize(+_obj.filesize));
        _str = _str.replace(/{{fw}}/g, _obj.width);
        _str = _str.replace(/{{fh}}/g, _obj.height);
        _str = _str.replace(/{{urllink}}/g, _obj.url);
        _str = _str.replace(/{{title}}/g, _obj.title);
        
        this.dom._info.html(_str);
    }
    cDK.prototype.setDefault = function(){
        this.dom._content.find(".thumbnail").removeClass("active")
        this.showInfo(0);
        _tmp = this.dom._content.find(".thumbnail").eq(0);
        _tmp.addClass("active");
        this.dom._content.find("input").prop( "checked", false).parent().removeClass("checked");
    }
    cDK.prototype.getImageList = function(){
        var _loc = this,
            _str = "";
        this.dom._content.find("input:checked").each(function(i,obj){
            var _obj = _loc.json.data[+obj.closest(".thumbnail").dataset.imx]
            _str += '<p><img src="'+_obj.url+'" alt="'+_obj.alttext+'" /></p>';
        });
        return _str;
    } 
    cDK.prototype.getImageArray = function(){
        var _loc = this,
            _str = "";
        
        return this.dom._content.find("input:checked").map(function(i,obj){
            var _obj = _loc.json.data[+obj.closest(".thumbnail").dataset.imx]
            _str += '<p><img src="'+_obj.url+'" alt="'+_obj.alttext+'" /></p>';
        });
    } 
    cDK.prototype.setEnabled = function(){
        _dropzone.addClass("allowed");
    }
    cDK.prototype.setDisabled = function(){
        this.setDefault();
        _dropzone.removeClass("allowed");
    }
    
    
   win.cDK = cDK;
    
})(jQuery, window, document);

//
$(function () {
    
    // IMage CDK //

    var _media = new cDK("#insert_Media");
    
    $("#insert_Media").on('show.bs.modal',function(){
        _media.setEnabled();
    }).one('shown.bs.modal', function () {
        //_uploader.fileupload('enable');
        _media.loadJson("server/jsonImgUpload-0.json");
    }).on('hidden.bs.modal', function () {
        _media.setDisabled();
    });
    $("#px-insert-submit").click(function(e){
        e.preventDefault();
        if($(".viewmode").length){
            _tinySource.insertAtCaret(_media.getImageList());
        }else{
            tinyMCE.execCommand('mceInsertContent', false, _media.getImageList());
        }
        $("#insert_Media").modal('hide');
    })
    
    
    // TinyCME setup //
    tinymce.init({
        selector: '.tinycme',
        plugins: [
            "fullscreen hr autolink lists link image anchor autoresize fullscreen",
            "searchreplace visualblocks code textcolor colorpicker charmap paste"
        ],
        resize: false,
        autoresize_min_height: 250,
        autoresize_max_height: 540,
        autoresize_bottom_margin: 40,
        toolbar1: "bold | fullscreen | italic | strikethrough | bullist | numlist | blockquote | hr | alignleft | aligncenter | alignright | pximg | link | unlink | pxtoggle",
        toolbar2: "formatselect | underline | alignjustify | forecolor | removeformat | charmap | outdent | indent | undo | redo",
        fullscreen_class: 'totomm',
        menubar: false,
        paste_as_text: true,
        fullscreen_classes: 'toto',
        body_class: 'px-editor-content',
        setup : function(fn){
            fn.addButton('pximg', {
                text: '',
                title : 'Insert image',
                icon: 'pximg',
                onclick: function () {
                   $("#insert_Media").modal('show');
                }
            });
            fn.addButton('pxtoggle', {
                text: '',
                title : 'Toolbar toggle',
                icon: 'pxtoggle',
                onclick: function () {
                    _tinyMenuToggle.toggleClass("show");
                }
            });
        },
        init_instance_callback: function(){
            _tinyMenuToggle = $(".px-editor").find(".mce-toolbar.mce-last");
        },
        content_css: ['assets/css/px-editor.css']
    });
    var _tinyMenuToggle,
        _tinySource = $(".px-editor-textsource");
    //
    $(".px-editor").each(function(){
        var _host = $(this),
            btn_viewsource = _host.find(".px-editor-viewsource"),
            btn_norm = _host.find(".px-editor-norm");
        
        btn_viewsource.click(function(){
            _tinySource[0].value = tinymce.activeEditor.getContent();
            _host.addClass("viewmode");
        })
        btn_norm.click(function(){
            tinyMCE.execCommand('mceSetContent', false, _tinySource[0].value);
            _host.removeClass("viewmode");
        })
    });
    
});