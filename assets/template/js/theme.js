(function ($) {
	
	$('#cost-form input.btn:nth-child(1)').attr('id', 'form1');
	$('#calc-form .bid-cost_button input').attr('id', 'form2');
	
    setTimeout(imgLazy, 5000);
    function imgLazy() {
        $('img[data-lazy]').each(function(){
            $(this).attr('src',$(this).data('lazy'));
        });
    }
    var isCanvasSupport = 'check';
    if (isCanvasSupported()) {
        $('.image_resize img').each(function () {
            var width = $(this).css('width');
            var height = $(this).css('height');
            var canvas = $('<canvas>');
            canvas.attr('width', width);
            canvas.attr('height', height);
            canvas.data('src', $(this).attr('src'));
            canvas.addClass('imgcanvas');
            var cnvid = 'cnv' + (Math.round((Math.random() * 10000)));
            canvas.attr('id', cnvid);
            $(this).closest('.image_resize').html(canvas);
        });
    }
    canvas_resize();
    var _resizeTimeout = false;
    _Resize = function () {
        if (_resizeTimeout) {
            clearTimeout(_resizeTimeout);
        }
        _resizeTimeout = setTimeout(canvas_resize, 500);
    };
    window.addEventListener('resize', _Resize);

    function canvas_resize() {
        if (isCanvasSupported()) {
            $('.imgcanvas').each(function () {
                var img = new Image();
                var canvas = document.getElementById($(this).attr('id'));
                var width = $(this).parent().width();
                var height = $(this).parent().height();
                //			var height = $(this).attr('height');
                var context = canvas.getContext("2d");
                $(this).attr('width', width);
                $(this).attr('height', height);
                img.onload = function () {
                    var sx = 0;
                    var sy = 0;
                    var sw = img.width;
                    var sh = img.height;
                    var cmp_x = img.width / width;
                    var cmp_y = img.height / height;
                    if (cmp_x > cmp_y) {
                        sw = Math.round(img.width / cmp_x * cmp_y);
                        sx = Math.round((img.width - (img.width / cmp_x * cmp_y)) / 2);
                    } else if (cmp_y > cmp_x) {
                        sh = Math.round(img.height / cmp_y * cmp_x);
                        sy = Math.round((img.height - (img.height / cmp_y * cmp_x)) / 2);
                    }

                    context.clearRect(0, 0, canvas.width, canvas.height);
                    context.drawImage(img, sx, sy, sw, sh, 0, 0, width, height);
                };
                img.src = $(this).data('src');
            });
        }
    }
    function isCanvasSupported() {
        if (isCanvasSupport === 'check') {
            var elem = document.createElement('canvas');
            isCanvasSupport = !!(elem.getContext && elem.getContext('2d'));
        }
        return isCanvasSupport;
    }
    $(document).on('click', '.pp_', function (e) {
        var show_delay = 0;
        e.preventDefault();
        console.log('touch click');

        if ($('.pp.gallary_pp').hasClass('show')) {
            console.log('add')
            show_delay = 300;
        }
        $('.pp').removeClass('show');

        var th_pp = $(this).attr('data-pp');

        setTimeout(function () {
            $('.pp[data-pp=' + th_pp + ']').addClass('show');
            // disableBodyScroll();
            disableScroll();
        }, show_delay);

    });

    $(document).on('click', '.pp_req_close, .pp_close', function () {
        $('.pp').removeClass('show');
        enableBodyScroll();
        enableScroll();
    });
    $('[data-branch]').each(function(){
        $(this).hide();
        var id=$(this).data('branch');
        var s = $('[data-menuid='+id+'] span');
        var dop = $('[data-menuid='+id+'] .mob_menu_item_sub_right');
        s.addClass('tr-right');
        dop.html('<div class="price_chevron_circle"><img src="/img/caret_down.png" class="price_chevron"/></div>');
    });
    $('.mob_menu_item_sub.active').each(function(){
        $(this).parents('[data-branch]').each(function() {
            $(this).show();
            var id=$(this).data('branch');
            var s = $('[data-menuid='+id+'] span');
            s.removeClass('tr-right');
            s.addClass('tr-bottom');
        });
    });




    // $('[data-menuid] .mob_menu_item_right').click(function(e){
    //     e.preventDefault();
    //     $('.mob_menu_item').removeClass('mob_menu_item_active');
    //     $(this).parent().addClass('mob_menu_item_active');
    //     var mob_menu_span= $(this).prev().find('span');
    //     var id=$(this).closest('a').data('menuid');
    //     mob_menu_chevron = $(this).find('.price_chevron');
    //     if( $('[data-branch='+id+']').is(':visible')){
    //         mob_menu_span.addClass('tr-right');
    //         mob_menu_span.removeClass('tr-bottom');
    //         console.log('open');
    //         mob_menu_chevron.css({'transform': 'rotate(0deg'});
    //         $('[data-branch='+id+']').hide();
    //     }else{
    //         mob_menu_span.removeClass('tr-right');
    //         mob_menu_span.addClass('tr-bottom');
    //         $('.price_chevron').css({'transform': 'rotate(0deg'});
    //         mob_menu_chevron.css({'transform': 'rotate(180deg'});
    //         $('.mob_menu_item_subs').hide();
    //         $('[data-branch='+id+']').show();
    //     }
    //     // $('[data-branch='+id+']').show();
    //
    //     // $(this).add()
    // });

    $('[data-menuid] .mob_menu_item_right').click(function(e){
        e.preventDefault();
        $('.mob_menu_item').removeClass('mob_menu_item_active');
        $(this).parent().addClass('mob_menu_item_active');
        var mob_menu_span= $(this).prev().find('span');
        var id=$(this).closest('a').data('menuid');
        mob_menu_chevron = $(this).find('.price_chevron');
        if( $('[data-branch='+id+']').is(':visible')){
            mob_menu_span.addClass('tr-right');
            mob_menu_span.removeClass('tr-bottom');
            mob_menu_chevron.css({'transform': 'rotate(0deg'});
            $('[data-branch='+id+']').hide();
        }else{
            console.log('need open');
            mob_menu_span.removeClass('tr-right');
            mob_menu_span.addClass('tr-bottom');
            $('.price_chevron').css({'transform': 'rotate(0deg'});
            mob_menu_chevron.css({'transform': 'rotate(180deg'});
            $('.mob_menu_item_subs').hide();
            $('[data-branch='+id+']').show();
        }
        // $('[data-branch='+id+']').show();

        // $(this).add()
    });



    $('[data-menuid] .mob_menu_item_sub_right').click(function(e){
        e.preventDefault();
        console.log('right');
        e.preventDefault();
        var id=$(this).closest('a').data('menuid');
        console.log(id);
        mob_menu_chevron = $(this).find('.price_chevron');
        if( $('[data-branch='+id+']').is(':visible')){
            // $(this).removeClass('tr-right');
            // $(this).addClass('tr-bottom');
            mob_menu_chevron.css({'transform': 'rotate(0deg'});
            $('[data-branch='+id+']').hide();
        }else{
            // $(this).addClass('tr-right');
            // $(this).removeClass('tr-bottom');
            // $('.price_chevron').css({'transform': 'rotate(0deg'});
            mob_menu_chevron.css({'transform': 'rotate(180deg'});
            $('[data-branch='+id+']').show();
        }

    });
    $('[data-menuid] span').click(function(e){
        e.preventDefault();
        var id=$(this).closest('a').data('menuid');
        if($(this).hasClass('tr-right')) {
            $(this).removeClass('tr-right');
            $(this).addClass('tr-bottom');
            $('[data-branch='+id+']').show();
        } else if($(this).hasClass('tr-bottom')) {
            $(this).addClass('tr-right');
            $(this).removeClass('tr-bottom');
            $('[data-branch='+id+']').hide();
        }
    });
    // $('.obj-gallery-gal_thumbs_wrapper .th_item_title').each(function() {
    //     console.log($(this).text());
    //
    //
    //
    // });





}).apply(this, [jQuery]);

$(document).ready(function(){
    $('.mob_menu_item_sub_left').each(function(){
        // var itemSubLeft = $(this).find('.mob_menu_item_sub_left');
        // var itemSubRight = $(this).find('.mob_menu_item_sub_right');
    });
});







/*
    jQuery Masked Input Plugin
    Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
    Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
    Version: 1.4.1
*/
!function(factory) {
    "function" == typeof define && define.amd ? define([ "jquery" ], factory) : factory("object" == typeof exports ? require("jquery") : jQuery);
}(function($) {
    var caretTimeoutId, ua = navigator.userAgent, iPhone = /iphone/i.test(ua), chrome = /chrome/i.test(ua), android = /android/i.test(ua);
    $.mask = {
        definitions: {
            "9": "[0-9]",
            a: "[A-Za-z]",
            "*": "[A-Za-z0-9]"
        },
        autoclear: !0,
        dataName: "rawMaskFn",
        placeholder: "_"
    }, $.fn.extend({
        caret: function(begin, end) {
            var range;
            if (0 !== this.length && !this.is(":hidden")) return "number" == typeof begin ? (end = "number" == typeof end ? end : begin, 
            this.each(function() {
                this.setSelectionRange ? this.setSelectionRange(begin, end) : this.createTextRange && (range = this.createTextRange(), 
                range.collapse(!0), range.moveEnd("character", end), range.moveStart("character", begin), 
                range.select());
            })) : (this[0].setSelectionRange ? (begin = this[0].selectionStart, end = this[0].selectionEnd) : document.selection && document.selection.createRange && (range = document.selection.createRange(), 
            begin = 0 - range.duplicate().moveStart("character", -1e5), end = begin + range.text.length), 
            {
                begin: begin,
                end: end
            });
        },
        unmask: function() {
            return this.trigger("unmask");
        },
        mask: function(mask, settings) {
            var input, defs, tests, partialPosition, firstNonMaskPos, lastRequiredNonMaskPos, len, oldVal;
            if (!mask && this.length > 0) {
                input = $(this[0]);
                var fn = input.data($.mask.dataName);
                return fn ? fn() : void 0;
            }
            return settings = $.extend({
                autoclear: $.mask.autoclear,
                placeholder: $.mask.placeholder,
                completed: null
            }, settings), defs = $.mask.definitions, tests = [], partialPosition = len = mask.length, 
            firstNonMaskPos = null, $.each(mask.split(""), function(i, c) {
                "?" == c ? (len--, partialPosition = i) : defs[c] ? (tests.push(new RegExp(defs[c])), 
                null === firstNonMaskPos && (firstNonMaskPos = tests.length - 1), partialPosition > i && (lastRequiredNonMaskPos = tests.length - 1)) : tests.push(null);
            }), this.trigger("unmask").each(function() {
                function tryFireCompleted() {
                    if (settings.completed) {
                        for (var i = firstNonMaskPos; lastRequiredNonMaskPos >= i; i++) if (tests[i] && buffer[i] === getPlaceholder(i)) return;
                        settings.completed.call(input);
                    }
                }
                function getPlaceholder(i) {
                    return settings.placeholder.charAt(i < settings.placeholder.length ? i : 0);
                }
                function seekNext(pos) {
                    for (;++pos < len && !tests[pos]; ) ;
                    return pos;
                }
                function seekPrev(pos) {
                    for (;--pos >= 0 && !tests[pos]; ) ;
                    return pos;
                }
                function shiftL(begin, end) {
                    var i, j;
                    if (!(0 > begin)) {
                        for (i = begin, j = seekNext(end); len > i; i++) if (tests[i]) {
                            if (!(len > j && tests[i].test(buffer[j]))) break;
                            buffer[i] = buffer[j], buffer[j] = getPlaceholder(j), j = seekNext(j);
                        }
                        writeBuffer(), input.caret(Math.max(firstNonMaskPos, begin));
                    }
                }
                function shiftR(pos) {
                    var i, c, j, t;
                    for (i = pos, c = getPlaceholder(pos); len > i; i++) if (tests[i]) {
                        if (j = seekNext(i), t = buffer[i], buffer[i] = c, !(len > j && tests[j].test(t))) break;
                        c = t;
                    }
                }
                function androidInputEvent() {
                    var curVal = input.val(), pos = input.caret();
                    if (oldVal && oldVal.length && oldVal.length > curVal.length) {
                        for (checkVal(!0); pos.begin > 0 && !tests[pos.begin - 1]; ) pos.begin--;
                        if (0 === pos.begin) for (;pos.begin < firstNonMaskPos && !tests[pos.begin]; ) pos.begin++;
                        input.caret(pos.begin, pos.begin);
                    } else {
                        for (checkVal(!0); pos.begin < len && !tests[pos.begin]; ) pos.begin++;
                        input.caret(pos.begin, pos.begin);
                    }
                    tryFireCompleted();
                }
                function blurEvent() {
                    checkVal(), input.val() != focusText && input.change();
                }
                function keydownEvent(e) {
                    if (!input.prop("readonly")) {
                        var pos, begin, end, k = e.which || e.keyCode;
                        oldVal = input.val(), 8 === k || 46 === k || iPhone && 127 === k ? (pos = input.caret(), 
                        begin = pos.begin, end = pos.end, end - begin === 0 && (begin = 46 !== k ? seekPrev(begin) : end = seekNext(begin - 1), 
                        end = 46 === k ? seekNext(end) : end), clearBuffer(begin, end), shiftL(begin, end - 1), 
                        e.preventDefault()) : 13 === k ? blurEvent.call(this, e) : 27 === k && (input.val(focusText), 
                        input.caret(0, checkVal()), e.preventDefault());
                    }
                }
                function keypressEvent(e) {
                    if (!input.prop("readonly")) {
                        var p, c, next, k = e.which || e.keyCode, pos = input.caret();
                        if (!(e.ctrlKey || e.altKey || e.metaKey || 32 > k) && k && 13 !== k) {
                            if (pos.end - pos.begin !== 0 && (clearBuffer(pos.begin, pos.end), shiftL(pos.begin, pos.end - 1)), 
                            p = seekNext(pos.begin - 1), len > p && (c = String.fromCharCode(k), tests[p].test(c))) {
                                if (shiftR(p), buffer[p] = c, writeBuffer(), next = seekNext(p), android) {
                                    var proxy = function() {
                                        $.proxy($.fn.caret, input, next)();
                                    };
                                    setTimeout(proxy, 0);
                                } else input.caret(next);
                                pos.begin <= lastRequiredNonMaskPos && tryFireCompleted();
                            }
                            e.preventDefault();
                        }
                    }
                }
                function clearBuffer(start, end) {
                    var i;
                    for (i = start; end > i && len > i; i++) tests[i] && (buffer[i] = getPlaceholder(i));
                }
                function writeBuffer() {
                    input.val(buffer.join(""));
                }
                function checkVal(allow) {
                    var i, c, pos, test = input.val(), lastMatch = -1;
                    for (i = 0, pos = 0; len > i; i++) if (tests[i]) {
                        for (buffer[i] = getPlaceholder(i); pos++ < test.length; ) if (c = test.charAt(pos - 1), 
                        tests[i].test(c)) {
                            buffer[i] = c, lastMatch = i;
                            break;
                        }
                        if (pos > test.length) {
                            clearBuffer(i + 1, len);
                            break;
                        }
                    } else buffer[i] === test.charAt(pos) && pos++, partialPosition > i && (lastMatch = i);
                    return allow ? writeBuffer() : partialPosition > lastMatch + 1 ? settings.autoclear || buffer.join("") === defaultBuffer ? (input.val() && input.val(""), 
                    clearBuffer(0, len)) : writeBuffer() : (writeBuffer(), input.val(input.val().substring(0, lastMatch + 1))), 
                    partialPosition ? i : firstNonMaskPos;
                }
                var input = $(this), buffer = $.map(mask.split(""), function(c, i) {
                    return "?" != c ? defs[c] ? getPlaceholder(i) : c : void 0;
                }), defaultBuffer = buffer.join(""), focusText = input.val();
                input.data($.mask.dataName, function() {
                    return $.map(buffer, function(c, i) {
                        return tests[i] && c != getPlaceholder(i) ? c : null;
                    }).join("");
                }), input.one("unmask", function() {
                    input.off(".mask").removeData($.mask.dataName);
                }).on("focus.mask", function() {
                    if (!input.prop("readonly")) {
                        clearTimeout(caretTimeoutId);
                        var pos;
                        focusText = input.val(), pos = checkVal(), caretTimeoutId = setTimeout(function() {
                            input.get(0) === document.activeElement && (writeBuffer(), pos == mask.replace("?", "").length ? input.caret(0, pos) : input.caret(pos));
                        }, 10);
                    }
                }).on("blur.mask", blurEvent).on("keydown.mask", keydownEvent).on("keypress.mask", keypressEvent).on("input.mask paste.mask", function() {
                    input.prop("readonly") || setTimeout(function() {
                        var pos = checkVal(!0);
                        input.caret(pos), tryFireCompleted();
                    }, 0);
                }), chrome && android && input.off("input.mask").on("input.mask", androidInputEvent), 
                checkVal();
            });
        }
    });
});
 

$(function(){
   $('[name="contact"]').mask("+7 (999) 999-99-99");
   $('[name="contact"]').attr("required", "true");
   $('[name="contact"]').attr("placeholder", "Телефон");
});