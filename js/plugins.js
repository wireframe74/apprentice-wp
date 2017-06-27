// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */
if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(a){"use strict";var b=a.fn.jquery.split(" ")[0].split(".");if(b[0]<2&&b[1]<9||1==b[0]&&9==b[1]&&b[2]<1||b[0]>3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(jQuery),+function(a){"use strict";function b(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in b)if(void 0!==a.style[c])return{end:b[c]};return!1}a.fn.emulateTransitionEnd=function(b){var c=!1,d=this;a(this).one("bsTransitionEnd",function(){c=!0});var e=function(){c||a(d).trigger(a.support.transition.end)};return setTimeout(e,b),this},a(function(){a.support.transition=b(),a.support.transition&&(a.event.special.bsTransitionEnd={bindType:a.support.transition.end,delegateType:a.support.transition.end,handle:function(b){if(a(b.target).is(this))return b.handleObj.handler.apply(this,arguments)}})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var c=a(this),e=c.data("bs.alert");e||c.data("bs.alert",e=new d(this)),"string"==typeof b&&e[b].call(c)})}var c='[data-dismiss="alert"]',d=function(b){a(b).on("click",c,this.close)};d.VERSION="3.3.7",d.TRANSITION_DURATION=150,d.prototype.close=function(b){function c(){g.detach().trigger("closed.bs.alert").remove()}var e=a(this),f=e.attr("data-target");f||(f=e.attr("href"),f=f&&f.replace(/.*(?=#[^\s]*$)/,""));var g=a("#"===f?[]:f);b&&b.preventDefault(),g.length||(g=e.closest(".alert")),g.trigger(b=a.Event("close.bs.alert")),b.isDefaultPrevented()||(g.removeClass("in"),a.support.transition&&g.hasClass("fade")?g.one("bsTransitionEnd",c).emulateTransitionEnd(d.TRANSITION_DURATION):c())};var e=a.fn.alert;a.fn.alert=b,a.fn.alert.Constructor=d,a.fn.alert.noConflict=function(){return a.fn.alert=e,this},a(document).on("click.bs.alert.data-api",c,d.prototype.close)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.button"),f="object"==typeof b&&b;e||d.data("bs.button",e=new c(this,f)),"toggle"==b?e.toggle():b&&e.setState(b)})}var c=function(b,d){this.$element=a(b),this.options=a.extend({},c.DEFAULTS,d),this.isLoading=!1};c.VERSION="3.3.7",c.DEFAULTS={loadingText:"loading..."},c.prototype.setState=function(b){var c="disabled",d=this.$element,e=d.is("input")?"val":"html",f=d.data();b+="Text",null==f.resetText&&d.data("resetText",d[e]()),setTimeout(a.proxy(function(){d[e](null==f[b]?this.options[b]:f[b]),"loadingText"==b?(this.isLoading=!0,d.addClass(c).attr(c,c).prop(c,!0)):this.isLoading&&(this.isLoading=!1,d.removeClass(c).removeAttr(c).prop(c,!1))},this),0)},c.prototype.toggle=function(){var a=!0,b=this.$element.closest('[data-toggle="buttons"]');if(b.length){var c=this.$element.find("input");"radio"==c.prop("type")?(c.prop("checked")&&(a=!1),b.find(".active").removeClass("active"),this.$element.addClass("active")):"checkbox"==c.prop("type")&&(c.prop("checked")!==this.$element.hasClass("active")&&(a=!1),this.$element.toggleClass("active")),c.prop("checked",this.$element.hasClass("active")),a&&c.trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active")),this.$element.toggleClass("active")};var d=a.fn.button;a.fn.button=b,a.fn.button.Constructor=c,a.fn.button.noConflict=function(){return a.fn.button=d,this},a(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(c){var d=a(c.target).closest(".btn");b.call(d,"toggle"),a(c.target).is('input[type="radio"], input[type="checkbox"]')||(c.preventDefault(),d.is("input,button")?d.trigger("focus"):d.find("input:visible,button:visible").first().trigger("focus"))}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(b){a(b.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(b.type))})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.carousel"),f=a.extend({},c.DEFAULTS,d.data(),"object"==typeof b&&b),g="string"==typeof b?b:f.slide;e||d.data("bs.carousel",e=new c(this,f)),"number"==typeof b?e.to(b):g?e[g]():f.interval&&e.pause().cycle()})}var c=function(b,c){this.$element=a(b),this.$indicators=this.$element.find(".carousel-indicators"),this.options=c,this.paused=null,this.sliding=null,this.interval=null,this.$active=null,this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",a.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",a.proxy(this.pause,this)).on("mouseleave.bs.carousel",a.proxy(this.cycle,this))};c.VERSION="3.3.7",c.TRANSITION_DURATION=600,c.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},c.prototype.keydown=function(a){if(!/input|textarea/i.test(a.target.tagName)){switch(a.which){case 37:this.prev();break;case 39:this.next();break;default:return}a.preventDefault()}},c.prototype.cycle=function(b){return b||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(a.proxy(this.next,this),this.options.interval)),this},c.prototype.getItemIndex=function(a){return this.$items=a.parent().children(".item"),this.$items.index(a||this.$active)},c.prototype.getItemForDirection=function(a,b){var c=this.getItemIndex(b),d="prev"==a&&0===c||"next"==a&&c==this.$items.length-1;if(d&&!this.options.wrap)return b;var e="prev"==a?-1:1,f=(c+e)%this.$items.length;return this.$items.eq(f)},c.prototype.to=function(a){var b=this,c=this.getItemIndex(this.$active=this.$element.find(".item.active"));if(!(a>this.$items.length-1||a<0))return this.sliding?this.$element.one("slid.bs.carousel",function(){b.to(a)}):c==a?this.pause().cycle():this.slide(a>c?"next":"prev",this.$items.eq(a))},c.prototype.pause=function(b){return b||(this.paused=!0),this.$element.find(".next, .prev").length&&a.support.transition&&(this.$element.trigger(a.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},c.prototype.next=function(){if(!this.sliding)return this.slide("next")},c.prototype.prev=function(){if(!this.sliding)return this.slide("prev")},c.prototype.slide=function(b,d){var e=this.$element.find(".item.active"),f=d||this.getItemForDirection(b,e),g=this.interval,h="next"==b?"left":"right",i=this;if(f.hasClass("active"))return this.sliding=!1;var j=f[0],k=a.Event("slide.bs.carousel",{relatedTarget:j,direction:h});if(this.$element.trigger(k),!k.isDefaultPrevented()){if(this.sliding=!0,g&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var l=a(this.$indicators.children()[this.getItemIndex(f)]);l&&l.addClass("active")}var m=a.Event("slid.bs.carousel",{relatedTarget:j,direction:h});return a.support.transition&&this.$element.hasClass("slide")?(f.addClass(b),f[0].offsetWidth,e.addClass(h),f.addClass(h),e.one("bsTransitionEnd",function(){f.removeClass([b,h].join(" ")).addClass("active"),e.removeClass(["active",h].join(" ")),i.sliding=!1,setTimeout(function(){i.$element.trigger(m)},0)}).emulateTransitionEnd(c.TRANSITION_DURATION)):(e.removeClass("active"),f.addClass("active"),this.sliding=!1,this.$element.trigger(m)),g&&this.cycle(),this}};var d=a.fn.carousel;a.fn.carousel=b,a.fn.carousel.Constructor=c,a.fn.carousel.noConflict=function(){return a.fn.carousel=d,this};var e=function(c){var d,e=a(this),f=a(e.attr("data-target")||(d=e.attr("href"))&&d.replace(/.*(?=#[^\s]+$)/,""));if(f.hasClass("carousel")){var g=a.extend({},f.data(),e.data()),h=e.attr("data-slide-to");h&&(g.interval=!1),b.call(f,g),h&&f.data("bs.carousel").to(h),c.preventDefault()}};a(document).on("click.bs.carousel.data-api","[data-slide]",e).on("click.bs.carousel.data-api","[data-slide-to]",e),a(window).on("load",function(){a('[data-ride="carousel"]').each(function(){var c=a(this);b.call(c,c.data())})})}(jQuery),+function(a){"use strict";function b(b){var c,d=b.attr("data-target")||(c=b.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,"");return a(d)}function c(b){return this.each(function(){var c=a(this),e=c.data("bs.collapse"),f=a.extend({},d.DEFAULTS,c.data(),"object"==typeof b&&b);!e&&f.toggle&&/show|hide/.test(b)&&(f.toggle=!1),e||c.data("bs.collapse",e=new d(this,f)),"string"==typeof b&&e[b]()})}var d=function(b,c){this.$element=a(b),this.options=a.extend({},d.DEFAULTS,c),this.$trigger=a('[data-toggle="collapse"][href="#'+b.id+'"],[data-toggle="collapse"][data-target="#'+b.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};d.VERSION="3.3.7",d.TRANSITION_DURATION=350,d.DEFAULTS={toggle:!0},d.prototype.dimension=function(){var a=this.$element.hasClass("width");return a?"width":"height"},d.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var b,e=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(e&&e.length&&(b=e.data("bs.collapse"),b&&b.transitioning))){var f=a.Event("show.bs.collapse");if(this.$element.trigger(f),!f.isDefaultPrevented()){e&&e.length&&(c.call(e,"hide"),b||e.data("bs.collapse",null));var g=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var h=function(){this.$element.removeClass("collapsing").addClass("collapse in")[g](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!a.support.transition)return h.call(this);var i=a.camelCase(["scroll",g].join("-"));this.$element.one("bsTransitionEnd",a.proxy(h,this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])}}}},d.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var b=a.Event("hide.bs.collapse");if(this.$element.trigger(b),!b.isDefaultPrevented()){var c=this.dimension();this.$element[c](this.$element[c]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var e=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return a.support.transition?void this.$element[c](0).one("bsTransitionEnd",a.proxy(e,this)).emulateTransitionEnd(d.TRANSITION_DURATION):e.call(this)}}},d.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},d.prototype.getParent=function(){return a(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(a.proxy(function(c,d){var e=a(d);this.addAriaAndCollapsedClass(b(e),e)},this)).end()},d.prototype.addAriaAndCollapsedClass=function(a,b){var c=a.hasClass("in");a.attr("aria-expanded",c),b.toggleClass("collapsed",!c).attr("aria-expanded",c)};var e=a.fn.collapse;a.fn.collapse=c,a.fn.collapse.Constructor=d,a.fn.collapse.noConflict=function(){return a.fn.collapse=e,this},a(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(d){var e=a(this);e.attr("data-target")||d.preventDefault();var f=b(e),g=f.data("bs.collapse"),h=g?"toggle":e.data();c.call(f,h)})}(jQuery),+function(a){"use strict";function b(b){var c=b.attr("data-target");c||(c=b.attr("href"),c=c&&/#[A-Za-z]/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,""));var d=c&&a(c);return d&&d.length?d:b.parent()}function c(c){c&&3===c.which||(a(e).remove(),a(f).each(function(){var d=a(this),e=b(d),f={relatedTarget:this};e.hasClass("open")&&(c&&"click"==c.type&&/input|textarea/i.test(c.target.tagName)&&a.contains(e[0],c.target)||(e.trigger(c=a.Event("hide.bs.dropdown",f)),c.isDefaultPrevented()||(d.attr("aria-expanded","false"),e.removeClass("open").trigger(a.Event("hidden.bs.dropdown",f)))))}))}function d(b){return this.each(function(){var c=a(this),d=c.data("bs.dropdown");d||c.data("bs.dropdown",d=new g(this)),"string"==typeof b&&d[b].call(c)})}var e=".dropdown-backdrop",f='[data-toggle="dropdown"]',g=function(b){a(b).on("click.bs.dropdown",this.toggle)};g.VERSION="3.3.7",g.prototype.toggle=function(d){var e=a(this);if(!e.is(".disabled, :disabled")){var f=b(e),g=f.hasClass("open");if(c(),!g){"ontouchstart"in document.documentElement&&!f.closest(".navbar-nav").length&&a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click",c);var h={relatedTarget:this};if(f.trigger(d=a.Event("show.bs.dropdown",h)),d.isDefaultPrevented())return;e.trigger("focus").attr("aria-expanded","true"),f.toggleClass("open").trigger(a.Event("shown.bs.dropdown",h))}return!1}},g.prototype.keydown=function(c){if(/(38|40|27|32)/.test(c.which)&&!/input|textarea/i.test(c.target.tagName)){var d=a(this);if(c.preventDefault(),c.stopPropagation(),!d.is(".disabled, :disabled")){var e=b(d),g=e.hasClass("open");if(!g&&27!=c.which||g&&27==c.which)return 27==c.which&&e.find(f).trigger("focus"),d.trigger("click");var h=" li:not(.disabled):visible a",i=e.find(".dropdown-menu"+h);if(i.length){var j=i.index(c.target);38==c.which&&j>0&&j--,40==c.which&&j<i.length-1&&j++,~j||(j=0),i.eq(j).trigger("focus")}}}};var h=a.fn.dropdown;a.fn.dropdown=d,a.fn.dropdown.Constructor=g,a.fn.dropdown.noConflict=function(){return a.fn.dropdown=h,this},a(document).on("click.bs.dropdown.data-api",c).on("click.bs.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.bs.dropdown.data-api",f,g.prototype.toggle).on("keydown.bs.dropdown.data-api",f,g.prototype.keydown).on("keydown.bs.dropdown.data-api",".dropdown-menu",g.prototype.keydown)}(jQuery),+function(a){"use strict";function b(b,d){return this.each(function(){var e=a(this),f=e.data("bs.modal"),g=a.extend({},c.DEFAULTS,e.data(),"object"==typeof b&&b);f||e.data("bs.modal",f=new c(this,g)),"string"==typeof b?f[b](d):g.show&&f.show(d)})}var c=function(b,c){this.options=c,this.$body=a(document.body),this.$element=a(b),this.$dialog=this.$element.find(".modal-dialog"),this.$backdrop=null,this.isShown=null,this.originalBodyPad=null,this.scrollbarWidth=0,this.ignoreBackdropClick=!1,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,a.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};c.VERSION="3.3.7",c.TRANSITION_DURATION=300,c.BACKDROP_TRANSITION_DURATION=150,c.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},c.prototype.toggle=function(a){return this.isShown?this.hide():this.show(a)},c.prototype.show=function(b){var d=this,e=a.Event("show.bs.modal",{relatedTarget:b});this.$element.trigger(e),this.isShown||e.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',a.proxy(this.hide,this)),this.$dialog.on("mousedown.dismiss.bs.modal",function(){d.$element.one("mouseup.dismiss.bs.modal",function(b){a(b.target).is(d.$element)&&(d.ignoreBackdropClick=!0)})}),this.backdrop(function(){var e=a.support.transition&&d.$element.hasClass("fade");d.$element.parent().length||d.$element.appendTo(d.$body),d.$element.show().scrollTop(0),d.adjustDialog(),e&&d.$element[0].offsetWidth,d.$element.addClass("in"),d.enforceFocus();var f=a.Event("shown.bs.modal",{relatedTarget:b});e?d.$dialog.one("bsTransitionEnd",function(){d.$element.trigger("focus").trigger(f)}).emulateTransitionEnd(c.TRANSITION_DURATION):d.$element.trigger("focus").trigger(f)}))},c.prototype.hide=function(b){b&&b.preventDefault(),b=a.Event("hide.bs.modal"),this.$element.trigger(b),this.isShown&&!b.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),a(document).off("focusin.bs.modal"),this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),this.$dialog.off("mousedown.dismiss.bs.modal"),a.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",a.proxy(this.hideModal,this)).emulateTransitionEnd(c.TRANSITION_DURATION):this.hideModal())},c.prototype.enforceFocus=function(){a(document).off("focusin.bs.modal").on("focusin.bs.modal",a.proxy(function(a){document===a.target||this.$element[0]===a.target||this.$element.has(a.target).length||this.$element.trigger("focus")},this))},c.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",a.proxy(function(a){27==a.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},c.prototype.resize=function(){this.isShown?a(window).on("resize.bs.modal",a.proxy(this.handleUpdate,this)):a(window).off("resize.bs.modal")},c.prototype.hideModal=function(){var a=this;this.$element.hide(),this.backdrop(function(){a.$body.removeClass("modal-open"),a.resetAdjustments(),a.resetScrollbar(),a.$element.trigger("hidden.bs.modal")})},c.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},c.prototype.backdrop=function(b){var d=this,e=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var f=a.support.transition&&e;if(this.$backdrop=a(document.createElement("div")).addClass("modal-backdrop "+e).appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",a.proxy(function(a){return this.ignoreBackdropClick?void(this.ignoreBackdropClick=!1):void(a.target===a.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus():this.hide()))},this)),f&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!b)return;f?this.$backdrop.one("bsTransitionEnd",b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):b()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var g=function(){d.removeBackdrop(),b&&b()};a.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):g()}else b&&b()},c.prototype.handleUpdate=function(){this.adjustDialog()},c.prototype.adjustDialog=function(){var a=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&a?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!a?this.scrollbarWidth:""})},c.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},c.prototype.checkScrollbar=function(){var a=window.innerWidth;if(!a){var b=document.documentElement.getBoundingClientRect();a=b.right-Math.abs(b.left)}this.bodyIsOverflowing=document.body.clientWidth<a,this.scrollbarWidth=this.measureScrollbar()},c.prototype.setScrollbar=function(){var a=parseInt(this.$body.css("padding-right")||0,10);this.originalBodyPad=document.body.style.paddingRight||"",this.bodyIsOverflowing&&this.$body.css("padding-right",a+this.scrollbarWidth)},c.prototype.resetScrollbar=function(){this.$body.css("padding-right",this.originalBodyPad)},c.prototype.measureScrollbar=function(){var a=document.createElement("div");a.className="modal-scrollbar-measure",this.$body.append(a);var b=a.offsetWidth-a.clientWidth;return this.$body[0].removeChild(a),b};var d=a.fn.modal;a.fn.modal=b,a.fn.modal.Constructor=c,a.fn.modal.noConflict=function(){return a.fn.modal=d,this},a(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(c){var d=a(this),e=d.attr("href"),f=a(d.attr("data-target")||e&&e.replace(/.*(?=#[^\s]+$)/,"")),g=f.data("bs.modal")?"toggle":a.extend({remote:!/#/.test(e)&&e},f.data(),d.data());d.is("a")&&c.preventDefault(),f.one("show.bs.modal",function(a){a.isDefaultPrevented()||f.one("hidden.bs.modal",function(){d.is(":visible")&&d.trigger("focus")})}),b.call(f,g,this)})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tooltip"),f="object"==typeof b&&b;!e&&/destroy|hide/.test(b)||(e||d.data("bs.tooltip",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",a,b)};c.VERSION="3.3.7",c.TRANSITION_DURATION=150,c.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},c.prototype.init=function(b,c,d){if(this.enabled=!0,this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.$viewport=this.options.viewport&&a(a.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var e=this.options.trigger.split(" "),f=e.length;f--;){var g=e[f];if("click"==g)this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this));else if("manual"!=g){var h="hover"==g?"mouseenter":"focusin",i="hover"==g?"mouseleave":"focusout";this.$element.on(h+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(i+"."+this.type,this.options.selector,a.proxy(this.leave,this))}}this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.getOptions=function(b){return b=a.extend({},this.getDefaults(),this.$element.data(),b),b.delay&&"number"==typeof b.delay&&(b.delay={show:b.delay,hide:b.delay}),b},c.prototype.getDelegateOptions=function(){var b={},c=this.getDefaults();return this._options&&a.each(this._options,function(a,d){c[a]!=d&&(b[a]=d)}),b},c.prototype.enter=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusin"==b.type?"focus":"hover"]=!0),c.tip().hasClass("in")||"in"==c.hoverState?void(c.hoverState="in"):(clearTimeout(c.timeout),c.hoverState="in",c.options.delay&&c.options.delay.show?void(c.timeout=setTimeout(function(){"in"==c.hoverState&&c.show()},c.options.delay.show)):c.show())},c.prototype.isInStateTrue=function(){for(var a in this.inState)if(this.inState[a])return!0;return!1},c.prototype.leave=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);if(c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusout"==b.type?"focus":"hover"]=!1),!c.isInStateTrue())return clearTimeout(c.timeout),c.hoverState="out",c.options.delay&&c.options.delay.hide?void(c.timeout=setTimeout(function(){"out"==c.hoverState&&c.hide()},c.options.delay.hide)):c.hide()},c.prototype.show=function(){var b=a.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(b);var d=a.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(b.isDefaultPrevented()||!d)return;var e=this,f=this.tip(),g=this.getUID(this.type);this.setContent(),f.attr("id",g),this.$element.attr("aria-describedby",g),this.options.animation&&f.addClass("fade");var h="function"==typeof this.options.placement?this.options.placement.call(this,f[0],this.$element[0]):this.options.placement,i=/\s?auto?\s?/i,j=i.test(h);j&&(h=h.replace(i,"")||"top"),f.detach().css({top:0,left:0,display:"block"}).addClass(h).data("bs."+this.type,this),this.options.container?f.appendTo(this.options.container):f.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var k=this.getPosition(),l=f[0].offsetWidth,m=f[0].offsetHeight;if(j){var n=h,o=this.getPosition(this.$viewport);h="bottom"==h&&k.bottom+m>o.bottom?"top":"top"==h&&k.top-m<o.top?"bottom":"right"==h&&k.right+l>o.width?"left":"left"==h&&k.left-l<o.left?"right":h,f.removeClass(n).addClass(h)}var p=this.getCalculatedOffset(h,k,l,m);this.applyPlacement(p,h);var q=function(){var a=e.hoverState;e.$element.trigger("shown.bs."+e.type),e.hoverState=null,"out"==a&&e.leave(e)};a.support.transition&&this.$tip.hasClass("fade")?f.one("bsTransitionEnd",q).emulateTransitionEnd(c.TRANSITION_DURATION):q()}},c.prototype.applyPlacement=function(b,c){var d=this.tip(),e=d[0].offsetWidth,f=d[0].offsetHeight,g=parseInt(d.css("margin-top"),10),h=parseInt(d.css("margin-left"),10);isNaN(g)&&(g=0),isNaN(h)&&(h=0),b.top+=g,b.left+=h,a.offset.setOffset(d[0],a.extend({using:function(a){d.css({top:Math.round(a.top),left:Math.round(a.left)})}},b),0),d.addClass("in");var i=d[0].offsetWidth,j=d[0].offsetHeight;"top"==c&&j!=f&&(b.top=b.top+f-j);var k=this.getViewportAdjustedDelta(c,b,i,j);k.left?b.left+=k.left:b.top+=k.top;var l=/top|bottom/.test(c),m=l?2*k.left-e+i:2*k.top-f+j,n=l?"offsetWidth":"offsetHeight";d.offset(b),this.replaceArrow(m,d[0][n],l)},c.prototype.replaceArrow=function(a,b,c){this.arrow().css(c?"left":"top",50*(1-a/b)+"%").css(c?"top":"left","")},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},c.prototype.hide=function(b){function d(){"in"!=e.hoverState&&f.detach(),e.$element&&e.$element.removeAttr("aria-describedby").trigger("hidden.bs."+e.type),b&&b()}var e=this,f=a(this.$tip),g=a.Event("hide.bs."+this.type);if(this.$element.trigger(g),!g.isDefaultPrevented())return f.removeClass("in"),a.support.transition&&f.hasClass("fade")?f.one("bsTransitionEnd",d).emulateTransitionEnd(c.TRANSITION_DURATION):d(),this.hoverState=null,this},c.prototype.fixTitle=function(){var a=this.$element;(a.attr("title")||"string"!=typeof a.attr("data-original-title"))&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},c.prototype.hasContent=function(){return this.getTitle()},c.prototype.getPosition=function(b){b=b||this.$element;var c=b[0],d="BODY"==c.tagName,e=c.getBoundingClientRect();null==e.width&&(e=a.extend({},e,{width:e.right-e.left,height:e.bottom-e.top}));var f=window.SVGElement&&c instanceof window.SVGElement,g=d?{top:0,left:0}:f?null:b.offset(),h={scroll:d?document.documentElement.scrollTop||document.body.scrollTop:b.scrollTop()},i=d?{width:a(window).width(),height:a(window).height()}:null;return a.extend({},e,h,i,g)},c.prototype.getCalculatedOffset=function(a,b,c,d){return"bottom"==a?{top:b.top+b.height,left:b.left+b.width/2-c/2}:"top"==a?{top:b.top-d,left:b.left+b.width/2-c/2}:"left"==a?{top:b.top+b.height/2-d/2,left:b.left-c}:{top:b.top+b.height/2-d/2,left:b.left+b.width}},c.prototype.getViewportAdjustedDelta=function(a,b,c,d){var e={top:0,left:0};if(!this.$viewport)return e;var f=this.options.viewport&&this.options.viewport.padding||0,g=this.getPosition(this.$viewport);if(/right|left/.test(a)){var h=b.top-f-g.scroll,i=b.top+f-g.scroll+d;h<g.top?e.top=g.top-h:i>g.top+g.height&&(e.top=g.top+g.height-i)}else{var j=b.left-f,k=b.left+f+c;j<g.left?e.left=g.left-j:k>g.right&&(e.left=g.left+g.width-k)}return e},c.prototype.getTitle=function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||("function"==typeof c.title?c.title.call(b[0]):c.title)},c.prototype.getUID=function(a){do a+=~~(1e6*Math.random());while(document.getElementById(a));return a},c.prototype.tip=function(){if(!this.$tip&&(this.$tip=a(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},c.prototype.enable=function(){this.enabled=!0},c.prototype.disable=function(){this.enabled=!1},c.prototype.toggleEnabled=function(){this.enabled=!this.enabled},c.prototype.toggle=function(b){var c=this;b&&(c=a(b.currentTarget).data("bs."+this.type),c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c))),b?(c.inState.click=!c.inState.click,c.isInStateTrue()?c.enter(c):c.leave(c)):c.tip().hasClass("in")?c.leave(c):c.enter(c)},c.prototype.destroy=function(){var a=this;clearTimeout(this.timeout),this.hide(function(){a.$element.off("."+a.type).removeData("bs."+a.type),a.$tip&&a.$tip.detach(),a.$tip=null,a.$arrow=null,a.$viewport=null,a.$element=null})};var d=a.fn.tooltip;a.fn.tooltip=b,a.fn.tooltip.Constructor=c,a.fn.tooltip.noConflict=function(){return a.fn.tooltip=d,this}}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.popover"),f="object"==typeof b&&b;!e&&/destroy|hide/.test(b)||(e||d.data("bs.popover",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.init("popover",a,b)};if(!a.fn.tooltip)throw new Error("Popover requires tooltip.js");c.VERSION="3.3.7",c.DEFAULTS=a.extend({},a.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),c.prototype=a.extend({},a.fn.tooltip.Constructor.prototype),c.prototype.constructor=c,c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle(),c=this.getContent();a.find(".popover-title")[this.options.html?"html":"text"](b),a.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof c?"html":"append":"text"](c),a.removeClass("fade top bottom left right in"),a.find(".popover-title").html()||a.find(".popover-title").hide()},c.prototype.hasContent=function(){return this.getTitle()||this.getContent()},c.prototype.getContent=function(){var a=this.$element,b=this.options;return a.attr("data-content")||("function"==typeof b.content?b.content.call(a[0]):b.content)},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")};var d=a.fn.popover;a.fn.popover=b,a.fn.popover.Constructor=c,a.fn.popover.noConflict=function(){return a.fn.popover=d,this}}(jQuery),+function(a){"use strict";function b(c,d){this.$body=a(document.body),this.$scrollElement=a(a(c).is(document.body)?window:c),this.options=a.extend({},b.DEFAULTS,d),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",a.proxy(this.process,this)),this.refresh(),this.process()}function c(c){return this.each(function(){var d=a(this),e=d.data("bs.scrollspy"),f="object"==typeof c&&c;e||d.data("bs.scrollspy",e=new b(this,f)),"string"==typeof c&&e[c]()})}b.VERSION="3.3.7",b.DEFAULTS={offset:10},b.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},b.prototype.refresh=function(){var b=this,c="offset",d=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),a.isWindow(this.$scrollElement[0])||(c="position",d=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var b=a(this),e=b.data("target")||b.attr("href"),f=/^#./.test(e)&&a(e);return f&&f.length&&f.is(":visible")&&[[f[c]().top+d,e]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){b.offsets.push(this[0]),b.targets.push(this[1])})},b.prototype.process=function(){var a,b=this.$scrollElement.scrollTop()+this.options.offset,c=this.getScrollHeight(),d=this.options.offset+c-this.$scrollElement.height(),e=this.offsets,f=this.targets,g=this.activeTarget;if(this.scrollHeight!=c&&this.refresh(),b>=d)return g!=(a=f[f.length-1])&&this.activate(a);if(g&&b<e[0])return this.activeTarget=null,this.clear();for(a=e.length;a--;)g!=f[a]&&b>=e[a]&&(void 0===e[a+1]||b<e[a+1])&&this.activate(f[a])},b.prototype.activate=function(b){
this.activeTarget=b,this.clear();var c=this.selector+'[data-target="'+b+'"],'+this.selector+'[href="'+b+'"]',d=a(c).parents("li").addClass("active");d.parent(".dropdown-menu").length&&(d=d.closest("li.dropdown").addClass("active")),d.trigger("activate.bs.scrollspy")},b.prototype.clear=function(){a(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var d=a.fn.scrollspy;a.fn.scrollspy=c,a.fn.scrollspy.Constructor=b,a.fn.scrollspy.noConflict=function(){return a.fn.scrollspy=d,this},a(window).on("load.bs.scrollspy.data-api",function(){a('[data-spy="scroll"]').each(function(){var b=a(this);c.call(b,b.data())})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tab");e||d.data("bs.tab",e=new c(this)),"string"==typeof b&&e[b]()})}var c=function(b){this.element=a(b)};c.VERSION="3.3.7",c.TRANSITION_DURATION=150,c.prototype.show=function(){var b=this.element,c=b.closest("ul:not(.dropdown-menu)"),d=b.data("target");if(d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,"")),!b.parent("li").hasClass("active")){var e=c.find(".active:last a"),f=a.Event("hide.bs.tab",{relatedTarget:b[0]}),g=a.Event("show.bs.tab",{relatedTarget:e[0]});if(e.trigger(f),b.trigger(g),!g.isDefaultPrevented()&&!f.isDefaultPrevented()){var h=a(d);this.activate(b.closest("li"),c),this.activate(h,h.parent(),function(){e.trigger({type:"hidden.bs.tab",relatedTarget:b[0]}),b.trigger({type:"shown.bs.tab",relatedTarget:e[0]})})}}},c.prototype.activate=function(b,d,e){function f(){g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),h?(b[0].offsetWidth,b.addClass("in")):b.removeClass("fade"),b.parent(".dropdown-menu").length&&b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),e&&e()}var g=d.find("> .active"),h=e&&a.support.transition&&(g.length&&g.hasClass("fade")||!!d.find("> .fade").length);g.length&&h?g.one("bsTransitionEnd",f).emulateTransitionEnd(c.TRANSITION_DURATION):f(),g.removeClass("in")};var d=a.fn.tab;a.fn.tab=b,a.fn.tab.Constructor=c,a.fn.tab.noConflict=function(){return a.fn.tab=d,this};var e=function(c){c.preventDefault(),b.call(a(this),"show")};a(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',e).on("click.bs.tab.data-api",'[data-toggle="pill"]',e)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.affix"),f="object"==typeof b&&b;e||d.data("bs.affix",e=new c(this,f)),"string"==typeof b&&e[b]()})}var c=function(b,d){this.options=a.extend({},c.DEFAULTS,d),this.$target=a(this.options.target).on("scroll.bs.affix.data-api",a.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",a.proxy(this.checkPositionWithEventLoop,this)),this.$element=a(b),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};c.VERSION="3.3.7",c.RESET="affix affix-top affix-bottom",c.DEFAULTS={offset:0,target:window},c.prototype.getState=function(a,b,c,d){var e=this.$target.scrollTop(),f=this.$element.offset(),g=this.$target.height();if(null!=c&&"top"==this.affixed)return e<c&&"top";if("bottom"==this.affixed)return null!=c?!(e+this.unpin<=f.top)&&"bottom":!(e+g<=a-d)&&"bottom";var h=null==this.affixed,i=h?e:f.top,j=h?g:b;return null!=c&&e<=c?"top":null!=d&&i+j>=a-d&&"bottom"},c.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(c.RESET).addClass("affix");var a=this.$target.scrollTop(),b=this.$element.offset();return this.pinnedOffset=b.top-a},c.prototype.checkPositionWithEventLoop=function(){setTimeout(a.proxy(this.checkPosition,this),1)},c.prototype.checkPosition=function(){if(this.$element.is(":visible")){var b=this.$element.height(),d=this.options.offset,e=d.top,f=d.bottom,g=Math.max(a(document).height(),a(document.body).height());"object"!=typeof d&&(f=e=d),"function"==typeof e&&(e=d.top(this.$element)),"function"==typeof f&&(f=d.bottom(this.$element));var h=this.getState(g,b,e,f);if(this.affixed!=h){null!=this.unpin&&this.$element.css("top","");var i="affix"+(h?"-"+h:""),j=a.Event(i+".bs.affix");if(this.$element.trigger(j),j.isDefaultPrevented())return;this.affixed=h,this.unpin="bottom"==h?this.getPinnedOffset():null,this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix","affixed")+".bs.affix")}"bottom"==h&&this.$element.offset({top:g-b-f})}};var d=a.fn.affix;a.fn.affix=b,a.fn.affix.Constructor=c,a.fn.affix.noConflict=function(){return a.fn.affix=d,this},a(window).on("load",function(){a('[data-spy="affix"]').each(function(){var c=a(this),d=c.data();d.offset=d.offset||{},null!=d.offsetBottom&&(d.offset.bottom=d.offsetBottom),null!=d.offsetTop&&(d.offset.top=d.offsetTop),b.call(c,d)})})}(jQuery);



//

/*!
 * SmartMenus jQuery Plugin - v1.0.1 - November 1, 2016
 * http://www.smartmenus.org/
 *
 * Copyright Vasil Dinkov, Vadikom Web Ltd.
 * http://vadikom.com
 *
 * Licensed MIT
 */

(function(factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof module === 'object' && typeof module.exports === 'object') {
        // CommonJS
        module.exports = factory(require('jquery'));
    } else {
        // Global jQuery
        factory(jQuery);
    }
} (function($) {

    var menuTrees = [],
        IE = !!window.createPopup, // detect it for the iframe shim
        mouse = false, // optimize for touch by default - we will detect for mouse input
        touchEvents = 'ontouchstart' in window, // we use this just to choose between toucn and pointer events, not for touch screen detection
        mouseDetectionEnabled = false,
        requestAnimationFrame = window.requestAnimationFrame || function(callback) { return setTimeout(callback, 1000 / 60); },
        cancelAnimationFrame = window.cancelAnimationFrame || function(id) { clearTimeout(id); };

    // Handle detection for mouse input (i.e. desktop browsers, tablets with a mouse, etc.)
    function initMouseDetection(disable) {
        var eNS = '.smartmenus_mouse';
        if (!mouseDetectionEnabled && !disable) {
            // if we get two consecutive mousemoves within 2 pixels from each other and within 300ms, we assume a real mouse/cursor is present
            // in practice, this seems like impossible to trick unintentianally with a real mouse and a pretty safe detection on touch devices (even with older browsers that do not support touch events)
            var firstTime = true,
                lastMove = null;
            $(document).bind(getEventsNS([
                ['mousemove', function(e) {
                    var thisMove = { x: e.pageX, y: e.pageY, timeStamp: new Date().getTime() };
                    if (lastMove) {
                        var deltaX = Math.abs(lastMove.x - thisMove.x),
                            deltaY = Math.abs(lastMove.y - thisMove.y);
                        if ((deltaX > 0 || deltaY > 0) && deltaX <= 2 && deltaY <= 2 && thisMove.timeStamp - lastMove.timeStamp <= 300) {
                            mouse = true;
                            // if this is the first check after page load, check if we are not over some item by chance and call the mouseenter handler if yes
                            if (firstTime) {
                                var $a = $(e.target).closest('a');
                                if ($a.is('a')) {
                                    $.each(menuTrees, function() {
                                        if ($.contains(this.$root[0], $a[0])) {
                                            this.itemEnter({ currentTarget: $a[0] });
                                            return false;
                                        }
                                    });
                                }
                                firstTime = false;
                            }
                        }
                    }
                    lastMove = thisMove;
                }],
                [touchEvents ? 'touchstart' : 'pointerover pointermove pointerout MSPointerOver MSPointerMove MSPointerOut', function(e) {
                    if (isTouchEvent(e.originalEvent)) {
                        mouse = false;
                    }
                }]
            ], eNS));
            mouseDetectionEnabled = true;
        } else if (mouseDetectionEnabled && disable) {
            $(document).unbind(eNS);
            mouseDetectionEnabled = false;
        }
    }

    function isTouchEvent(e) {
        return !/^(4|mouse)$/.test(e.pointerType);
    }

    // returns a jQuery bind() ready object
    function getEventsNS(defArr, eNS) {
        if (!eNS) {
            eNS = '';
        }
        var obj = {};
        $.each(defArr, function(index, value) {
            obj[value[0].split(' ').join(eNS + ' ') + eNS] = value[1];
        });
        return obj;
    }

    $.SmartMenus = function(elm, options) {
        this.$root = $(elm);
        this.opts = options;
        this.rootId = ''; // internal
        this.accessIdPrefix = '';
        this.$subArrow = null;
        this.activatedItems = []; // stores last activated A's for each level
        this.visibleSubMenus = []; // stores visible sub menus UL's (might be in no particular order)
        this.showTimeout = 0;
        this.hideTimeout = 0;
        this.scrollTimeout = 0;
        this.clickActivated = false;
        this.focusActivated = false;
        this.zIndexInc = 0;
        this.idInc = 0;
        this.$firstLink = null; // we'll use these for some tests
        this.$firstSub = null; // at runtime so we'll cache them
        this.disabled = false;
        this.$disableOverlay = null;
        this.$touchScrollingSub = null;
        this.cssTransforms3d = 'perspective' in elm.style || 'webkitPerspective' in elm.style;
        this.wasCollapsible = false;
        this.init();
    };

    $.extend($.SmartMenus, {
        hideAll: function() {
            $.each(menuTrees, function() {
                this.menuHideAll();
            });
        },
        destroy: function() {
            while (menuTrees.length) {
                menuTrees[0].destroy();
            }
            initMouseDetection(true);
        },
        prototype: {
            init: function(refresh) {
                var self = this;

                if (!refresh) {
                    menuTrees.push(this);

                    this.rootId = (new Date().getTime() + Math.random() + '').replace(/\D/g, '');
                    this.accessIdPrefix = 'sm-' + this.rootId + '-';

                    if (this.$root.hasClass('sm-rtl')) {
                        this.opts.rightToLeftSubMenus = true;
                    }

                    // init root (main menu)
                    var eNS = '.smartmenus';
                    this.$root
                        .data('smartmenus', this)
                        .attr('data-smartmenus-id', this.rootId)
                        .dataSM('level', 1)
                        .bind(getEventsNS([
                            ['mouseover focusin', $.proxy(this.rootOver, this)],
                            ['mouseout focusout', $.proxy(this.rootOut, this)],
                            ['keydown', $.proxy(this.rootKeyDown, this)]
                        ], eNS))
                        .delegate('a', getEventsNS([
                            ['mouseenter', $.proxy(this.itemEnter, this)],
                            ['mouseleave', $.proxy(this.itemLeave, this)],
                            ['mousedown', $.proxy(this.itemDown, this)],
                            ['focus', $.proxy(this.itemFocus, this)],
                            ['blur', $.proxy(this.itemBlur, this)],
                            ['click', $.proxy(this.itemClick, this)]
                        ], eNS));

                    // hide menus on tap or click outside the root UL
                    eNS += this.rootId;
                    if (this.opts.hideOnClick) {
                        $(document).bind(getEventsNS([
                            ['touchstart', $.proxy(this.docTouchStart, this)],
                            ['touchmove', $.proxy(this.docTouchMove, this)],
                            ['touchend', $.proxy(this.docTouchEnd, this)],
                            // for Opera Mobile < 11.5, webOS browser, etc. we'll check click too
                            ['click', $.proxy(this.docClick, this)]
                        ], eNS));
                    }
                    // hide sub menus on resize
                    $(window).bind(getEventsNS([['resize orientationchange', $.proxy(this.winResize, this)]], eNS));

                    if (this.opts.subIndicators) {
                        this.$subArrow = $('<span/>').addClass('sub-arrow');
                        if (this.opts.subIndicatorsText) {
                            this.$subArrow.html(this.opts.subIndicatorsText);
                        }
                    }

                    // make sure mouse detection is enabled
                    initMouseDetection();
                }

                // init sub menus
                this.$firstSub = this.$root.find('ul').each(function() { self.menuInit($(this)); }).eq(0);

                this.$firstLink = this.$root.find('a').eq(0);

                // find current item
                if (this.opts.markCurrentItem) {
                    var reDefaultDoc = /(index|default)\.[^#\?\/]*/i,
                        reHash = /#.*/,
                        locHref = window.location.href.replace(reDefaultDoc, ''),
                        locHrefNoHash = locHref.replace(reHash, '');
                    this.$root.find('a').each(function() {
                        var href = this.href.replace(reDefaultDoc, ''),
                            $this = $(this);
                        if (href == locHref || href == locHrefNoHash) {
                            $this.addClass('current');
                            if (self.opts.markCurrentTree) {
                                $this.parentsUntil('[data-smartmenus-id]', 'ul').each(function() {
                                    $(this).dataSM('parent-a').addClass('current');
                                });
                            }
                        }
                    });
                }

                // save initial state
                this.wasCollapsible = this.isCollapsible();
            },
            destroy: function(refresh) {
                if (!refresh) {
                    var eNS = '.smartmenus';
                    this.$root
                        .removeData('smartmenus')
                        .removeAttr('data-smartmenus-id')
                        .removeDataSM('level')
                        .unbind(eNS)
                        .undelegate(eNS);
                    eNS += this.rootId;
                    $(document).unbind(eNS);
                    $(window).unbind(eNS);
                    if (this.opts.subIndicators) {
                        this.$subArrow = null;
                    }
                }
                this.menuHideAll();
                var self = this;
                this.$root.find('ul').each(function() {
                        var $this = $(this);
                        if ($this.dataSM('scroll-arrows')) {
                            $this.dataSM('scroll-arrows').remove();
                        }
                        if ($this.dataSM('shown-before')) {
                            if (self.opts.subMenusMinWidth || self.opts.subMenusMaxWidth) {
                                $this.css({ width: '', minWidth: '', maxWidth: '' }).removeClass('sm-nowrap');
                            }
                            if ($this.dataSM('scroll-arrows')) {
                                $this.dataSM('scroll-arrows').remove();
                            }
                            $this.css({ zIndex: '', top: '', left: '', marginLeft: '', marginTop: '', display: '' });
                        }
                        if (($this.attr('id') || '').indexOf(self.accessIdPrefix) == 0) {
                            $this.removeAttr('id');
                        }
                    })
                    .removeDataSM('in-mega')
                    .removeDataSM('shown-before')
                    .removeDataSM('ie-shim')
                    .removeDataSM('scroll-arrows')
                    .removeDataSM('parent-a')
                    .removeDataSM('level')
                    .removeDataSM('beforefirstshowfired')
                    .removeAttr('role')
                    .removeAttr('aria-hidden')
                    .removeAttr('aria-labelledby')
                    .removeAttr('aria-expanded');
                this.$root.find('a.has-submenu').each(function() {
                        var $this = $(this);
                        if ($this.attr('id').indexOf(self.accessIdPrefix) == 0) {
                            $this.removeAttr('id');
                        }
                    })
                    .removeClass('has-submenu')
                    .removeDataSM('sub')
                    .removeAttr('aria-haspopup')
                    .removeAttr('aria-controls')
                    .removeAttr('aria-expanded')
                    .closest('li').removeDataSM('sub');
                if (this.opts.subIndicators) {
                    this.$root.find('span.sub-arrow').remove();
                }
                if (this.opts.markCurrentItem) {
                    this.$root.find('a.current').removeClass('current');
                }
                if (!refresh) {
                    this.$root = null;
                    this.$firstLink = null;
                    this.$firstSub = null;
                    if (this.$disableOverlay) {
                        this.$disableOverlay.remove();
                        this.$disableOverlay = null;
                    }
                    menuTrees.splice($.inArray(this, menuTrees), 1);
                }
            },
            disable: function(noOverlay) {
                if (!this.disabled) {
                    this.menuHideAll();
                    // display overlay over the menu to prevent interaction
                    if (!noOverlay && !this.opts.isPopup && this.$root.is(':visible')) {
                        var pos = this.$root.offset();
                        this.$disableOverlay = $('<div class="sm-jquery-disable-overlay"/>').css({
                            position: 'absolute',
                            top: pos.top,
                            left: pos.left,
                            width: this.$root.outerWidth(),
                            height: this.$root.outerHeight(),
                            zIndex: this.getStartZIndex(true),
                            opacity: 0
                        }).appendTo(document.body);
                    }
                    this.disabled = true;
                }
            },
            docClick: function(e) {
                if (this.$touchScrollingSub) {
                    this.$touchScrollingSub = null;
                    return;
                }
                // hide on any click outside the menu or on a menu link
                if (this.visibleSubMenus.length && !$.contains(this.$root[0], e.target) || $(e.target).is('a')) {
                    this.menuHideAll();
                }
            },
            docTouchEnd: function(e) {
                if (!this.lastTouch) {
                    return;
                }
                if (this.visibleSubMenus.length && (this.lastTouch.x2 === undefined || this.lastTouch.x1 == this.lastTouch.x2) && (this.lastTouch.y2 === undefined || this.lastTouch.y1 == this.lastTouch.y2) && (!this.lastTouch.target || !$.contains(this.$root[0], this.lastTouch.target))) {
                    if (this.hideTimeout) {
                        clearTimeout(this.hideTimeout);
                        this.hideTimeout = 0;
                    }
                    // hide with a delay to prevent triggering accidental unwanted click on some page element
                    var self = this;
                    this.hideTimeout = setTimeout(function() { self.menuHideAll(); }, 350);
                }
                this.lastTouch = null;
            },
            docTouchMove: function(e) {
                if (!this.lastTouch) {
                    return;
                }
                var touchPoint = e.originalEvent.touches[0];
                this.lastTouch.x2 = touchPoint.pageX;
                this.lastTouch.y2 = touchPoint.pageY;
            },
            docTouchStart: function(e) {
                var touchPoint = e.originalEvent.touches[0];
                this.lastTouch = { x1: touchPoint.pageX, y1: touchPoint.pageY, target: touchPoint.target };
            },
            enable: function() {
                if (this.disabled) {
                    if (this.$disableOverlay) {
                        this.$disableOverlay.remove();
                        this.$disableOverlay = null;
                    }
                    this.disabled = false;
                }
            },
            getClosestMenu: function(elm) {
                var $closestMenu = $(elm).closest('ul');
                while ($closestMenu.dataSM('in-mega')) {
                    $closestMenu = $closestMenu.parent().closest('ul');
                }
                return $closestMenu[0] || null;
            },
            getHeight: function($elm) {
                return this.getOffset($elm, true);
            },
            // returns precise width/height float values
            getOffset: function($elm, height) {
                var old;
                if ($elm.css('display') == 'none') {
                    old = { position: $elm[0].style.position, visibility: $elm[0].style.visibility };
                    $elm.css({ position: 'absolute', visibility: 'hidden' }).show();
                }
                var box = $elm[0].getBoundingClientRect && $elm[0].getBoundingClientRect(),
                    val = box && (height ? box.height || box.bottom - box.top : box.width || box.right - box.left);
                if (!val && val !== 0) {
                    val = height ? $elm[0].offsetHeight : $elm[0].offsetWidth;
                }
                if (old) {
                    $elm.hide().css(old);
                }
                return val;
            },
            getStartZIndex: function(root) {
                var zIndex = parseInt(this[root ? '$root' : '$firstSub'].css('z-index'));
                if (!root && isNaN(zIndex)) {
                    zIndex = parseInt(this.$root.css('z-index'));
                }
                return !isNaN(zIndex) ? zIndex : 1;
            },
            getTouchPoint: function(e) {
                return e.touches && e.touches[0] || e.changedTouches && e.changedTouches[0] || e;
            },
            getViewport: function(height) {
                var name = height ? 'Height' : 'Width',
                    val = document.documentElement['client' + name],
                    val2 = window['inner' + name];
                if (val2) {
                    val = Math.min(val, val2);
                }
                return val;
            },
            getViewportHeight: function() {
                return this.getViewport(true);
            },
            getViewportWidth: function() {
                return this.getViewport();
            },
            getWidth: function($elm) {
                return this.getOffset($elm);
            },
            handleEvents: function() {
                return !this.disabled && this.isCSSOn();
            },
            handleItemEvents: function($a) {
                return this.handleEvents() && !this.isLinkInMegaMenu($a);
            },
            isCollapsible: function() {
                return this.$firstSub.css('position') == 'static';
            },
            isCSSOn: function() {
                return this.$firstLink.css('display') == 'block';
            },
            isFixed: function() {
                var isFixed = this.$root.css('position') == 'fixed';
                if (!isFixed) {
                    this.$root.parentsUntil('body').each(function() {
                        if ($(this).css('position') == 'fixed') {
                            isFixed = true;
                            return false;
                        }
                    });
                }
                return isFixed;
            },
            isLinkInMegaMenu: function($a) {
                return $(this.getClosestMenu($a[0])).hasClass('mega-menu');
            },
            isTouchMode: function() {
                return !mouse || this.opts.noMouseOver || this.isCollapsible();
            },
            itemActivate: function($a, focus) {
                var $ul = $a.closest('ul'),
                    level = $ul.dataSM('level');
                // if for some reason the parent item is not activated (e.g. this is an API call to activate the item), activate all parent items first
                if (level > 1 && (!this.activatedItems[level - 2] || this.activatedItems[level - 2][0] != $ul.dataSM('parent-a')[0])) {
                    var self = this;
                    $($ul.parentsUntil('[data-smartmenus-id]', 'ul').get().reverse()).add($ul).each(function() {
                        self.itemActivate($(this).dataSM('parent-a'));
                    });
                }
                // hide any visible deeper level sub menus
                if (!this.isCollapsible() || focus) {
                    this.menuHideSubMenus(!this.activatedItems[level - 1] || this.activatedItems[level - 1][0] != $a[0] ? level - 1 : level);
                }
                // save new active item for this level
                this.activatedItems[level - 1] = $a;
                if (this.$root.triggerHandler('activate.smapi', $a[0]) === false) {
                    return;
                }
                // show the sub menu if this item has one
                var $sub = $a.dataSM('sub');
                if ($sub && (this.isTouchMode() || (!this.opts.showOnClick || this.clickActivated))) {
                    this.menuShow($sub);
                }
            },
            itemBlur: function(e) {
                var $a = $(e.currentTarget);
                if (!this.handleItemEvents($a)) {
                    return;
                }
                this.$root.triggerHandler('blur.smapi', $a[0]);
            },
            itemClick: function(e) {
                var $a = $(e.currentTarget);
                if (!this.handleItemEvents($a)) {
                    return;
                }
                if (this.$touchScrollingSub && this.$touchScrollingSub[0] == $a.closest('ul')[0]) {
                    this.$touchScrollingSub = null;
                    e.stopPropagation();
                    return false;
                }
                if (this.$root.triggerHandler('click.smapi', $a[0]) === false) {
                    return false;
                }
                var subArrowClicked = $(e.target).is('span.sub-arrow'),
                    $sub = $a.dataSM('sub'),
                    firstLevelSub = $sub ? $sub.dataSM('level') == 2 : false;
                // if the sub is not visible
                if ($sub && !$sub.is(':visible')) {
                    if (this.opts.showOnClick && firstLevelSub) {
                        this.clickActivated = true;
                    }
                    // try to activate the item and show the sub
                    this.itemActivate($a);
                    // if "itemActivate" showed the sub, prevent the click so that the link is not loaded
                    // if it couldn't show it, then the sub menus are disabled with an !important declaration (e.g. via mobile styles) so let the link get loaded
                    if ($sub.is(':visible')) {
                        this.focusActivated = true;
                        return false;
                    }
                } else if (this.isCollapsible() && subArrowClicked) {
                    this.itemActivate($a);
                    this.menuHide($sub);
                    return false;
                }
                if (this.opts.showOnClick && firstLevelSub || $a.hasClass('disabled') || this.$root.triggerHandler('select.smapi', $a[0]) === false) {
                    return false;
                }
            },
            itemDown: function(e) {
                var $a = $(e.currentTarget);
                if (!this.handleItemEvents($a)) {
                    return;
                }
                $a.dataSM('mousedown', true);
            },
            itemEnter: function(e) {
                var $a = $(e.currentTarget);
                if (!this.handleItemEvents($a)) {
                    return;
                }
                if (!this.isTouchMode()) {
                    if (this.showTimeout) {
                        clearTimeout(this.showTimeout);
                        this.showTimeout = 0;
                    }
                    var self = this;
                    this.showTimeout = setTimeout(function() { self.itemActivate($a); }, this.opts.showOnClick && $a.closest('ul').dataSM('level') == 1 ? 1 : this.opts.showTimeout);
                }
                this.$root.triggerHandler('mouseenter.smapi', $a[0]);
            },
            itemFocus: function(e) {
                var $a = $(e.currentTarget);
                if (!this.handleItemEvents($a)) {
                    return;
                }
                // fix (the mousedown check): in some browsers a tap/click produces consecutive focus + click events so we don't need to activate the item on focus
                if (this.focusActivated && (!this.isTouchMode() || !$a.dataSM('mousedown')) && (!this.activatedItems.length || this.activatedItems[this.activatedItems.length - 1][0] != $a[0])) {
                    this.itemActivate($a, true);
                }
                this.$root.triggerHandler('focus.smapi', $a[0]);
            },
            itemLeave: function(e) {
                var $a = $(e.currentTarget);
                if (!this.handleItemEvents($a)) {
                    return;
                }
                if (!this.isTouchMode()) {
                    $a[0].blur();
                    if (this.showTimeout) {
                        clearTimeout(this.showTimeout);
                        this.showTimeout = 0;
                    }
                }
                $a.removeDataSM('mousedown');
                this.$root.triggerHandler('mouseleave.smapi', $a[0]);
            },
            menuHide: function($sub) {
                if (this.$root.triggerHandler('beforehide.smapi', $sub[0]) === false) {
                    return;
                }
                $sub.stop(true, true);
                if ($sub.css('display') != 'none') {
                    var complete = function() {
                        // unset z-index
                        $sub.css('z-index', '');
                    };
                    // if sub is collapsible (mobile view)
                    if (this.isCollapsible()) {
                        if (this.opts.collapsibleHideFunction) {
                            this.opts.collapsibleHideFunction.call(this, $sub, complete);
                        } else {
                            $sub.hide(this.opts.collapsibleHideDuration, complete);
                        }
                    } else {
                        if (this.opts.hideFunction) {
                            this.opts.hideFunction.call(this, $sub, complete);
                        } else {
                            $sub.hide(this.opts.hideDuration, complete);
                        }
                    }
                    // remove IE iframe shim
                    if ($sub.dataSM('ie-shim')) {
                        $sub.dataSM('ie-shim').remove().css({ '-webkit-transform': '', transform: '' });
                    }
                    // deactivate scrolling if it is activated for this sub
                    if ($sub.dataSM('scroll')) {
                        this.menuScrollStop($sub);
                        $sub.css({ 'touch-action': '', '-ms-touch-action': '', '-webkit-transform': '', transform: '' })
                            .unbind('.smartmenus_scroll').removeDataSM('scroll').dataSM('scroll-arrows').hide();
                    }
                    // unhighlight parent item + accessibility
                    $sub.dataSM('parent-a').removeClass('highlighted').attr('aria-expanded', 'false');
                    $sub.attr({
                        'aria-expanded': 'false',
                        'aria-hidden': 'true'
                    });
                    var level = $sub.dataSM('level');
                    this.activatedItems.splice(level - 1, 1);
                    this.visibleSubMenus.splice($.inArray($sub, this.visibleSubMenus), 1);
                    this.$root.triggerHandler('hide.smapi', $sub[0]);
                }
            },
            menuHideAll: function() {
                if (this.showTimeout) {
                    clearTimeout(this.showTimeout);
                    this.showTimeout = 0;
                }
                // hide all subs
                // if it's a popup, this.visibleSubMenus[0] is the root UL
                var level = this.opts.isPopup ? 1 : 0;
                for (var i = this.visibleSubMenus.length - 1; i >= level; i--) {
                    this.menuHide(this.visibleSubMenus[i]);
                }
                // hide root if it's popup
                if (this.opts.isPopup) {
                    this.$root.stop(true, true);
                    if (this.$root.is(':visible')) {
                        if (this.opts.hideFunction) {
                            this.opts.hideFunction.call(this, this.$root);
                        } else {
                            this.$root.hide(this.opts.hideDuration);
                        }
                        // remove IE iframe shim
                        if (this.$root.dataSM('ie-shim')) {
                            this.$root.dataSM('ie-shim').remove();
                        }
                    }
                }
                this.activatedItems = [];
                this.visibleSubMenus = [];
                this.clickActivated = false;
                this.focusActivated = false;
                // reset z-index increment
                this.zIndexInc = 0;
                this.$root.triggerHandler('hideAll.smapi');
            },
            menuHideSubMenus: function(level) {
                for (var i = this.activatedItems.length - 1; i >= level; i--) {
                    var $sub = this.activatedItems[i].dataSM('sub');
                    if ($sub) {
                        this.menuHide($sub);
                    }
                }
            },
            menuIframeShim: function($ul) {
                // create iframe shim for the menu
                if (IE && this.opts.overlapControlsInIE && !$ul.dataSM('ie-shim')) {
                    $ul.dataSM('ie-shim', $('<iframe/>').attr({ src: 'javascript:0', tabindex: -9 })
                        .css({ position: 'absolute', top: 'auto', left: '0', opacity: 0, border: '0' })
                    );
                }
            },
            menuInit: function($ul) {
                if (!$ul.dataSM('in-mega')) {
                    // mark UL's in mega drop downs (if any) so we can neglect them
                    if ($ul.hasClass('mega-menu')) {
                        $ul.find('ul').dataSM('in-mega', true);
                    }
                    // get level (much faster than, for example, using parentsUntil)
                    var level = 2,
                        par = $ul[0];
                    while ((par = par.parentNode.parentNode) != this.$root[0]) {
                        level++;
                    }
                    // cache stuff for quick access
                    var $a = $ul.prevAll('a').eq(-1);
                    // if the link is nested (e.g. in a heading)
                    if (!$a.length) {
                        $a = $ul.prevAll().find('a').eq(-1);
                    }
                    $a.addClass('has-submenu').dataSM('sub', $ul);
                    $ul.dataSM('parent-a', $a)
                        .dataSM('level', level)
                        .parent().dataSM('sub', $ul);
                    // accessibility
                    var aId = $a.attr('id') || this.accessIdPrefix + (++this.idInc),
                        ulId = $ul.attr('id') || this.accessIdPrefix + (++this.idInc);
                    $a.attr({
                        id: aId,
                        'aria-haspopup': 'true',
                        'aria-controls': ulId,
                        'aria-expanded': 'false'
                    });
                    $ul.attr({
                        id: ulId,
                        'role': 'group',
                        'aria-hidden': 'true',
                        'aria-labelledby': aId,
                        'aria-expanded': 'false'
                    });
                    // add sub indicator to parent item
                    if (this.opts.subIndicators) {
                        $a[this.opts.subIndicatorsPos](this.$subArrow.clone());
                    }
                }
            },
            menuPosition: function($sub) {
                var $a = $sub.dataSM('parent-a'),
                    $li = $a.closest('li'),
                    $ul = $li.parent(),
                    level = $sub.dataSM('level'),
                    subW = this.getWidth($sub),
                    subH = this.getHeight($sub),
                    itemOffset = $a.offset(),
                    itemX = itemOffset.left,
                    itemY = itemOffset.top,
                    itemW = this.getWidth($a),
                    itemH = this.getHeight($a),
                    $win = $(window),
                    winX = $win.scrollLeft(),
                    winY = $win.scrollTop(),
                    winW = this.getViewportWidth(),
                    winH = this.getViewportHeight(),
                    horizontalParent = $ul.parent().is('[data-sm-horizontal-sub]') || level == 2 && !$ul.hasClass('sm-vertical'),
                    rightToLeft = this.opts.rightToLeftSubMenus && !$li.is('[data-sm-reverse]') || !this.opts.rightToLeftSubMenus && $li.is('[data-sm-reverse]'),
                    subOffsetX = level == 2 ? this.opts.mainMenuSubOffsetX : this.opts.subMenusSubOffsetX,
                    subOffsetY = level == 2 ? this.opts.mainMenuSubOffsetY : this.opts.subMenusSubOffsetY,
                    x, y;
                if (horizontalParent) {
                    x = rightToLeft ? itemW - subW - subOffsetX : subOffsetX;
                    y = this.opts.bottomToTopSubMenus ? -subH - subOffsetY : itemH + subOffsetY;
                } else {
                    x = rightToLeft ? subOffsetX - subW : itemW - subOffsetX;
                    y = this.opts.bottomToTopSubMenus ? itemH - subOffsetY - subH : subOffsetY;
                }
                if (this.opts.keepInViewport) {
                    var absX = itemX + x,
                        absY = itemY + y;
                    if (rightToLeft && absX < winX) {
                        x = horizontalParent ? winX - absX + x : itemW - subOffsetX;
                    } else if (!rightToLeft && absX + subW > winX + winW) {
                        x = horizontalParent ? winX + winW - subW - absX + x : subOffsetX - subW;
                    }
                    if (!horizontalParent) {
                        if (subH < winH && absY + subH > winY + winH) {
                            y += winY + winH - subH - absY;
                        } else if (subH >= winH || absY < winY) {
                            y += winY - absY;
                        }
                    }
                    // do we need scrolling?
                    // 0.49 used for better precision when dealing with float values
                    if (horizontalParent && (absY + subH > winY + winH + 0.49 || absY < winY) || !horizontalParent && subH > winH + 0.49) {
                        var self = this;
                        if (!$sub.dataSM('scroll-arrows')) {
                            $sub.dataSM('scroll-arrows', $([$('<span class="scroll-up"><span class="scroll-up-arrow"></span></span>')[0], $('<span class="scroll-down"><span class="scroll-down-arrow"></span></span>')[0]])
                                .bind({
                                    mouseenter: function() {
                                        $sub.dataSM('scroll').up = $(this).hasClass('scroll-up');
                                        self.menuScroll($sub);
                                    },
                                    mouseleave: function(e) {
                                        self.menuScrollStop($sub);
                                        self.menuScrollOut($sub, e);
                                    },
                                    'mousewheel DOMMouseScroll': function(e) { e.preventDefault(); }
                                })
                                .insertAfter($sub)
                            );
                        }
                        // bind scroll events and save scroll data for this sub
                        var eNS = '.smartmenus_scroll';
                        $sub.dataSM('scroll', {
                                y: this.cssTransforms3d ? 0 : y - itemH,
                                step: 1,
                                // cache stuff for faster recalcs later
                                itemH: itemH,
                                subH: subH,
                                arrowDownH: this.getHeight($sub.dataSM('scroll-arrows').eq(1))
                            })
                            .bind(getEventsNS([
                                ['mouseover', function(e) { self.menuScrollOver($sub, e); }],
                                ['mouseout', function(e) { self.menuScrollOut($sub, e); }],
                                ['mousewheel DOMMouseScroll', function(e) { self.menuScrollMousewheel($sub, e); }]
                            ], eNS))
                            .dataSM('scroll-arrows').css({ top: 'auto', left: '0', marginLeft: x + (parseInt($sub.css('border-left-width')) || 0), width: subW - (parseInt($sub.css('border-left-width')) || 0) - (parseInt($sub.css('border-right-width')) || 0), zIndex: $sub.css('z-index') })
                                .eq(horizontalParent && this.opts.bottomToTopSubMenus ? 0 : 1).show();
                        // when a menu tree is fixed positioned we allow scrolling via touch too
                        // since there is no other way to access such long sub menus if no mouse is present
                        if (this.isFixed()) {
                            $sub.css({ 'touch-action': 'none', '-ms-touch-action': 'none' })
                                .bind(getEventsNS([
                                    [touchEvents ? 'touchstart touchmove touchend' : 'pointerdown pointermove pointerup MSPointerDown MSPointerMove MSPointerUp', function(e) {
                                        self.menuScrollTouch($sub, e);
                                    }]
                                ], eNS));
                        }
                    }
                }
                $sub.css({ top: 'auto', left: '0', marginLeft: x, marginTop: y - itemH });
                // IE iframe shim
                this.menuIframeShim($sub);
                if ($sub.dataSM('ie-shim')) {
                    $sub.dataSM('ie-shim').css({ zIndex: $sub.css('z-index'), width: subW, height: subH, marginLeft: x, marginTop: y - itemH });
                }
            },
            menuScroll: function($sub, once, step) {
                var data = $sub.dataSM('scroll'),
                    $arrows = $sub.dataSM('scroll-arrows'),
                    end = data.up ? data.upEnd : data.downEnd,
                    diff;
                if (!once && data.momentum) {
                    data.momentum *= 0.92;
                    diff = data.momentum;
                    if (diff < 0.5) {
                        this.menuScrollStop($sub);
                        return;
                    }
                } else {
                    diff = step || (once || !this.opts.scrollAccelerate ? this.opts.scrollStep : Math.floor(data.step));
                }
                // hide any visible deeper level sub menus
                var level = $sub.dataSM('level');
                if (this.activatedItems[level - 1] && this.activatedItems[level - 1].dataSM('sub') && this.activatedItems[level - 1].dataSM('sub').is(':visible')) {
                    this.menuHideSubMenus(level - 1);
                }
                data.y = data.up && end <= data.y || !data.up && end >= data.y ? data.y : (Math.abs(end - data.y) > diff ? data.y + (data.up ? diff : -diff) : end);
                $sub.add($sub.dataSM('ie-shim')).css(this.cssTransforms3d ? { '-webkit-transform': 'translate3d(0, ' + data.y + 'px, 0)', transform: 'translate3d(0, ' + data.y + 'px, 0)' } : { marginTop: data.y });
                // show opposite arrow if appropriate
                if (mouse && (data.up && data.y > data.downEnd || !data.up && data.y < data.upEnd)) {
                    $arrows.eq(data.up ? 1 : 0).show();
                }
                // if we've reached the end
                if (data.y == end) {
                    if (mouse) {
                        $arrows.eq(data.up ? 0 : 1).hide();
                    }
                    this.menuScrollStop($sub);
                } else if (!once) {
                    if (this.opts.scrollAccelerate && data.step < this.opts.scrollStep) {
                        data.step += 0.2;
                    }
                    var self = this;
                    this.scrollTimeout = requestAnimationFrame(function() { self.menuScroll($sub); });
                }
            },
            menuScrollMousewheel: function($sub, e) {
                if (this.getClosestMenu(e.target) == $sub[0]) {
                    e = e.originalEvent;
                    var up = (e.wheelDelta || -e.detail) > 0;
                    if ($sub.dataSM('scroll-arrows').eq(up ? 0 : 1).is(':visible')) {
                        $sub.dataSM('scroll').up = up;
                        this.menuScroll($sub, true);
                    }
                }
                e.preventDefault();
            },
            menuScrollOut: function($sub, e) {
                if (mouse) {
                    if (!/^scroll-(up|down)/.test((e.relatedTarget || '').className) && ($sub[0] != e.relatedTarget && !$.contains($sub[0], e.relatedTarget) || this.getClosestMenu(e.relatedTarget) != $sub[0])) {
                        $sub.dataSM('scroll-arrows').css('visibility', 'hidden');
                    }
                }
            },
            menuScrollOver: function($sub, e) {
                if (mouse) {
                    if (!/^scroll-(up|down)/.test(e.target.className) && this.getClosestMenu(e.target) == $sub[0]) {
                        this.menuScrollRefreshData($sub);
                        var data = $sub.dataSM('scroll'),
                            upEnd = $(window).scrollTop() - $sub.dataSM('parent-a').offset().top - data.itemH;
                        $sub.dataSM('scroll-arrows').eq(0).css('margin-top', upEnd).end()
                            .eq(1).css('margin-top', upEnd + this.getViewportHeight() - data.arrowDownH).end()
                            .css('visibility', 'visible');
                    }
                }
            },
            menuScrollRefreshData: function($sub) {
                var data = $sub.dataSM('scroll'),
                    upEnd = $(window).scrollTop() - $sub.dataSM('parent-a').offset().top - data.itemH;
                if (this.cssTransforms3d) {
                    upEnd = -(parseFloat($sub.css('margin-top')) - upEnd);
                }
                $.extend(data, {
                    upEnd: upEnd,
                    downEnd: upEnd + this.getViewportHeight() - data.subH
                });
            },
            menuScrollStop: function($sub) {
                if (this.scrollTimeout) {
                    cancelAnimationFrame(this.scrollTimeout);
                    this.scrollTimeout = 0;
                    $sub.dataSM('scroll').step = 1;
                    return true;
                }
            },
            menuScrollTouch: function($sub, e) {
                e = e.originalEvent;
                if (isTouchEvent(e)) {
                    var touchPoint = this.getTouchPoint(e);
                    // neglect event if we touched a visible deeper level sub menu
                    if (this.getClosestMenu(touchPoint.target) == $sub[0]) {
                        var data = $sub.dataSM('scroll');
                        if (/(start|down)$/i.test(e.type)) {
                            if (this.menuScrollStop($sub)) {
                                // if we were scrolling, just stop and don't activate any link on the first touch
                                e.preventDefault();
                                this.$touchScrollingSub = $sub;
                            } else {
                                this.$touchScrollingSub = null;
                            }
                            // update scroll data since the user might have zoomed, etc.
                            this.menuScrollRefreshData($sub);
                            // extend it with the touch properties
                            $.extend(data, {
                                touchStartY: touchPoint.pageY,
                                touchStartTime: e.timeStamp
                            });
                        } else if (/move$/i.test(e.type)) {
                            var prevY = data.touchY !== undefined ? data.touchY : data.touchStartY;
                            if (prevY !== undefined && prevY != touchPoint.pageY) {
                                this.$touchScrollingSub = $sub;
                                var up = prevY < touchPoint.pageY;
                                // changed direction? reset...
                                if (data.up !== undefined && data.up != up) {
                                    $.extend(data, {
                                        touchStartY: touchPoint.pageY,
                                        touchStartTime: e.timeStamp
                                    });
                                }
                                $.extend(data, {
                                    up: up,
                                    touchY: touchPoint.pageY
                                });
                                this.menuScroll($sub, true, Math.abs(touchPoint.pageY - prevY));
                            }
                            e.preventDefault();
                        } else { // touchend/pointerup
                            if (data.touchY !== undefined) {
                                if (data.momentum = Math.pow(Math.abs(touchPoint.pageY - data.touchStartY) / (e.timeStamp - data.touchStartTime), 2) * 15) {
                                    this.menuScrollStop($sub);
                                    this.menuScroll($sub);
                                    e.preventDefault();
                                }
                                delete data.touchY;
                            }
                        }
                    }
                }
            },
            menuShow: function($sub) {
                if (!$sub.dataSM('beforefirstshowfired')) {
                    $sub.dataSM('beforefirstshowfired', true);
                    if (this.$root.triggerHandler('beforefirstshow.smapi', $sub[0]) === false) {
                        return;
                    }
                }
                if (this.$root.triggerHandler('beforeshow.smapi', $sub[0]) === false) {
                    return;
                }
                $sub.dataSM('shown-before', true)
                    .stop(true, true);
                if (!$sub.is(':visible')) {
                    // highlight parent item
                    var $a = $sub.dataSM('parent-a');
                    if (this.opts.keepHighlighted || this.isCollapsible()) {
                        $a.addClass('highlighted');
                    }
                    if (this.isCollapsible()) {
                        $sub.removeClass('sm-nowrap').css({ zIndex: '', width: 'auto', minWidth: '', maxWidth: '', top: '', left: '', marginLeft: '', marginTop: '' });
                    } else {
                        // set z-index
                        $sub.css('z-index', this.zIndexInc = (this.zIndexInc || this.getStartZIndex()) + 1);
                        // min/max-width fix - no way to rely purely on CSS as all UL's are nested
                        if (this.opts.subMenusMinWidth || this.opts.subMenusMaxWidth) {
                            $sub.css({ width: 'auto', minWidth: '', maxWidth: '' }).addClass('sm-nowrap');
                            if (this.opts.subMenusMinWidth) {
                                $sub.css('min-width', this.opts.subMenusMinWidth);
                            }
                            if (this.opts.subMenusMaxWidth) {
                                var noMaxWidth = this.getWidth($sub);
                                $sub.css('max-width', this.opts.subMenusMaxWidth);
                                if (noMaxWidth > this.getWidth($sub)) {
                                    $sub.removeClass('sm-nowrap').css('width', this.opts.subMenusMaxWidth);
                                }
                            }
                        }
                        this.menuPosition($sub);
                        // insert IE iframe shim
                        if ($sub.dataSM('ie-shim')) {
                            $sub.dataSM('ie-shim').insertBefore($sub);
                        }
                    }
                    var complete = function() {
                        // fix: "overflow: hidden;" is not reset on animation complete in jQuery < 1.9.0 in Chrome when global "box-sizing: border-box;" is used
                        $sub.css('overflow', '');
                    };
                    // if sub is collapsible (mobile view)
                    if (this.isCollapsible()) {
                        if (this.opts.collapsibleShowFunction) {
                            this.opts.collapsibleShowFunction.call(this, $sub, complete);
                        } else {
                            $sub.show(this.opts.collapsibleShowDuration, complete);
                        }
                    } else {
                        if (this.opts.showFunction) {
                            this.opts.showFunction.call(this, $sub, complete);
                        } else {
                            $sub.show(this.opts.showDuration, complete);
                        }
                    }
                    // accessibility
                    $a.attr('aria-expanded', 'true');
                    $sub.attr({
                        'aria-expanded': 'true',
                        'aria-hidden': 'false'
                    });
                    // store sub menu in visible array
                    this.visibleSubMenus.push($sub);
                    this.$root.triggerHandler('show.smapi', $sub[0]);
                }
            },
            popupHide: function(noHideTimeout) {
                if (this.hideTimeout) {
                    clearTimeout(this.hideTimeout);
                    this.hideTimeout = 0;
                }
                var self = this;
                this.hideTimeout = setTimeout(function() {
                    self.menuHideAll();
                }, noHideTimeout ? 1 : this.opts.hideTimeout);
            },
            popupShow: function(left, top) {
                if (!this.opts.isPopup) {
                    alert('SmartMenus jQuery Error:\n\nIf you want to show this menu via the "popupShow" method, set the isPopup:true option.');
                    return;
                }
                if (this.hideTimeout) {
                    clearTimeout(this.hideTimeout);
                    this.hideTimeout = 0;
                }
                this.$root.dataSM('shown-before', true)
                    .stop(true, true);
                if (!this.$root.is(':visible')) {
                    this.$root.css({ left: left, top: top });
                    // IE iframe shim
                    this.menuIframeShim(this.$root);
                    if (this.$root.dataSM('ie-shim')) {
                        this.$root.dataSM('ie-shim').css({ zIndex: this.$root.css('z-index'), width: this.getWidth(this.$root), height: this.getHeight(this.$root), left: left, top: top }).insertBefore(this.$root);
                    }
                    // show menu
                    var self = this,
                        complete = function() {
                            self.$root.css('overflow', '');
                        };
                    if (this.opts.showFunction) {
                        this.opts.showFunction.call(this, this.$root, complete);
                    } else {
                        this.$root.show(this.opts.showDuration, complete);
                    }
                    this.visibleSubMenus[0] = this.$root;
                }
            },
            refresh: function() {
                this.destroy(true);
                this.init(true);
            },
            rootKeyDown: function(e) {
                if (!this.handleEvents()) {
                    return;
                }
                switch (e.keyCode) {
                    case 27: // reset on Esc
                        var $activeTopItem = this.activatedItems[0];
                        if ($activeTopItem) {
                            this.menuHideAll();
                            $activeTopItem[0].focus();
                            var $sub = $activeTopItem.dataSM('sub');
                            if ($sub) {
                                this.menuHide($sub);
                            }
                        }
                        break;
                    case 32: // activate item's sub on Space
                        var $target = $(e.target);
                        if ($target.is('a') && this.handleItemEvents($target)) {
                            var $sub = $target.dataSM('sub');
                            if ($sub && !$sub.is(':visible')) {
                                this.itemClick({ currentTarget: e.target });
                                e.preventDefault();
                            }
                        }
                        break;
                }
            },
            rootOut: function(e) {
                if (!this.handleEvents() || this.isTouchMode() || e.target == this.$root[0]) {
                    return;
                }
                if (this.hideTimeout) {
                    clearTimeout(this.hideTimeout);
                    this.hideTimeout = 0;
                }
                if (!this.opts.showOnClick || !this.opts.hideOnClick) {
                    var self = this;
                    this.hideTimeout = setTimeout(function() { self.menuHideAll(); }, this.opts.hideTimeout);
                }
            },
            rootOver: function(e) {
                if (!this.handleEvents() || this.isTouchMode() || e.target == this.$root[0]) {
                    return;
                }
                if (this.hideTimeout) {
                    clearTimeout(this.hideTimeout);
                    this.hideTimeout = 0;
                }
            },
            winResize: function(e) {
                if (!this.handleEvents()) {
                    // we still need to resize the disable overlay if it's visible
                    if (this.$disableOverlay) {
                        var pos = this.$root.offset();
                        this.$disableOverlay.css({
                            top: pos.top,
                            left: pos.left,
                            width: this.$root.outerWidth(),
                            height: this.$root.outerHeight()
                        });
                    }
                    return;
                }
                // hide sub menus on resize - on mobile do it only on orientation change
                if (!('onorientationchange' in window) || e.type == 'orientationchange') {
                    var isCollapsible = this.isCollapsible();
                    // if it was collapsible before resize and still is, don't do it
                    if (!(this.wasCollapsible && isCollapsible)) { 
                        if (this.activatedItems.length) {
                            this.activatedItems[this.activatedItems.length - 1][0].blur();
                        }
                        this.menuHideAll();
                    }
                    this.wasCollapsible = isCollapsible;
                }
            }
        }
    });

    $.fn.dataSM = function(key, val) {
        if (val) {
            return this.data(key + '_smartmenus', val);
        }
        return this.data(key + '_smartmenus');
    };

    $.fn.removeDataSM = function(key) {
        return this.removeData(key + '_smartmenus');
    };

    $.fn.smartmenus = function(options) {
        if (typeof options == 'string') {
            var args = arguments,
                method = options;
            Array.prototype.shift.call(args);
            return this.each(function() {
                var smartmenus = $(this).data('smartmenus');
                if (smartmenus && smartmenus[method]) {
                    smartmenus[method].apply(smartmenus, args);
                }
            });
        }
        // [data-sm-options] attribute on the root UL
        var dataOpts = this.data('sm-options') || null;
        if (dataOpts) {
            try {
                dataOpts = eval('(' + dataOpts + ')');
            } catch(e) {
                dataOpts = null;
                alert('ERROR\n\nSmartMenus jQuery init:\nInvalid "data-sm-options" attribute value syntax.');
            };
        }
        return this.each(function() {
            new $.SmartMenus(this, $.extend({}, $.fn.smartmenus.defaults, options, dataOpts));
        });
    };

    // default settings
    $.fn.smartmenus.defaults = {
        isPopup:        false,      // is this a popup menu (can be shown via the popupShow/popupHide methods) or a permanent menu bar
        mainMenuSubOffsetX: 0,      // pixels offset from default position
        mainMenuSubOffsetY: 0,      // pixels offset from default position
        subMenusSubOffsetX: 0,      // pixels offset from default position
        subMenusSubOffsetY: 0,      // pixels offset from default position
        subMenusMinWidth:   '10em',     // min-width for the sub menus (any CSS unit) - if set, the fixed width set in CSS will be ignored
        subMenusMaxWidth:   '20em',     // max-width for the sub menus (any CSS unit) - if set, the fixed width set in CSS will be ignored
        subIndicators:      true,       // create sub menu indicators - creates a SPAN and inserts it in the A
        subIndicatorsPos:   'prepend',  // position of the SPAN relative to the menu item content ('prepend', 'append')
        subIndicatorsText:  '+',        // [optionally] add text in the SPAN (e.g. '+') (you may want to check the CSS for the sub indicators too)
        scrollStep:         30,     // pixels step when scrolling long sub menus that do not fit in the viewport height
        scrollAccelerate:   true,       // accelerate scrolling or use a fixed step
        showTimeout:        250,        // timeout before showing the sub menus
        hideTimeout:        500,        // timeout before hiding the sub menus
        showDuration:       0,      // duration for show animation - set to 0 for no animation - matters only if showFunction:null
        showFunction:       null,       // custom function to use when showing a sub menu (the default is the jQuery 'show')
                            // don't forget to call complete() at the end of whatever you do
                            // e.g.: function($ul, complete) { $ul.fadeIn(250, complete); }
        hideDuration:       0,      // duration for hide animation - set to 0 for no animation - matters only if hideFunction:null
        hideFunction:       function($ul, complete) { $ul.fadeOut(200, complete); },    // custom function to use when hiding a sub menu (the default is the jQuery 'hide')
                            // don't forget to call complete() at the end of whatever you do
                            // e.g.: function($ul, complete) { $ul.fadeOut(250, complete); }
        collapsibleShowDuration:0,      // duration for show animation for collapsible sub menus - matters only if collapsibleShowFunction:null
        collapsibleShowFunction:function($ul, complete) { $ul.slideDown(200, complete); },  // custom function to use when showing a collapsible sub menu
                            // (i.e. when mobile styles are used to make the sub menus collapsible)
        collapsibleHideDuration:0,      // duration for hide animation for collapsible sub menus - matters only if collapsibleHideFunction:null
        collapsibleHideFunction:function($ul, complete) { $ul.slideUp(200, complete); },    // custom function to use when hiding a collapsible sub menu
                            // (i.e. when mobile styles are used to make the sub menus collapsible)
        showOnClick:        false,      // show the first-level sub menus onclick instead of onmouseover (i.e. mimic desktop app menus) (matters only for mouse input)
        hideOnClick:        true,       // hide the sub menus on click/tap anywhere on the page
        noMouseOver:        false,      // disable sub menus activation onmouseover (i.e. behave like in touch mode - use just mouse clicks) (matters only for mouse input)
        keepInViewport:     true,       // reposition the sub menus if needed to make sure they always appear inside the viewport
        keepHighlighted:    true,       // keep all ancestor items of the current sub menu highlighted (adds the 'highlighted' class to the A's)
        markCurrentItem:    false,      // automatically add the 'current' class to the A element of the item linking to the current URL
        markCurrentTree:    true,       // add the 'current' class also to the A elements of all ancestor items of the current item
        rightToLeftSubMenus:    false,      // right to left display of the sub menus (check the CSS for the sub indicators' position)
        bottomToTopSubMenus:    false,      // bottom to top display of the sub menus
        overlapControlsInIE:    true        // make sure sub menus appear on top of special OS controls in IE (i.e. SELECT, OBJECT, EMBED, etc.)
    };

    return $;
}));
// NANO BAR

(function(root){"use strict";var css=".nanobar{width:100%;height:4px;z-index:9999;top:0}.bar{width:0;height:100%;transition:height .3s;background:#000}";function addCss(){var s=document.getElementById("nanobarcss");if(s===null){s=document.createElement("style");s.type="text/css";s.id="nanobarcss";document.head.insertBefore(s,document.head.firstChild);if(!s.styleSheet)return s.appendChild(document.createTextNode(css));s.styleSheet.cssText=css}}function addClass(el,cls){if(el.classList)el.classList.add(cls);else el.className+=" "+cls}function createBar(rm){var el=document.createElement("div"),width=0,here=0,on=0,bar={el:el,go:go};addClass(el,"bar");function move(){var dist=width-here;if(dist<.1&&dist>-.1){place(here);on=0;if(width>=100){el.style.height=0;setTimeout(function(){rm(el)},300)}}else{place(width-dist/4);setTimeout(go,16)}}function place(num){width=num;el.style.width=width+"%"}function go(num){if(num>=0){here=num;if(!on){on=1;move()}}else if(on){move()}}return bar}function Nanobar(opts){opts=opts||{};var el=document.createElement("div"),applyGo,nanobar={el:el,go:function(p){applyGo(p);if(p>=100){init()}}};function rm(child){el.removeChild(child)}function init(){var bar=createBar(rm);el.appendChild(bar.el);applyGo=bar.go}addCss();addClass(el,"nanobar");if(opts.id)el.id=opts.id;if(opts.classname)addClass(el,opts.classname);if(opts.target){el.style.position="relative";opts.target.insertBefore(el,opts.target.firstChild)}else{el.style.position="fixed";document.getElementsByTagName("body")[0].appendChild(el)}init();return nanobar}if(typeof exports==="object"){module.exports=Nanobar}else if(typeof define==="function"&&define.amd){define([],function(){return Nanobar})}else{root.Nanobar=Nanobar}})(this);



// OWL CAROUSEL

!function(t,e,i,s){function n(e,i){this.settings=null,this.options=t.extend({},n.Defaults,i),this.$element=t(e),this._handlers={},this._plugins={},this._supress={},this._current=null,this._speed=null,this._coordinates=[],this._breakpoint=null,this._width=null,this._items=[],this._clones=[],this._mergers=[],this._widths=[],this._invalidated={},this._pipe=[],this._drag={time:null,target:null,pointer:null,stage:{start:null,current:null},direction:null},this._states={current:{},tags:{initializing:["busy"],animating:["busy"],dragging:["interacting"]}},t.each(["onResize","onThrottledResize"],t.proxy(function(e,i){this._handlers[i]=t.proxy(this[i],this)},this)),t.each(n.Plugins,t.proxy(function(t,e){this._plugins[t.charAt(0).toLowerCase()+t.slice(1)]=new e(this)},this)),t.each(n.Workers,t.proxy(function(e,i){this._pipe.push({filter:i.filter,run:t.proxy(i.run,this)})},this)),this.setup(),this.initialize()}n.Defaults={items:3,loop:!1,center:!1,rewind:!1,mouseDrag:!0,touchDrag:!0,pullDrag:!0,freeDrag:!1,margin:0,stagePadding:0,merge:!1,mergeFit:!0,autoWidth:!1,startPosition:0,rtl:!1,smartSpeed:250,fluidSpeed:!1,dragEndSpeed:!1,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:e,fallbackEasing:"swing",info:!1,nestedItemSelector:!1,itemElement:"div",stageElement:"div",refreshClass:"owl-refresh",loadedClass:"owl-loaded",loadingClass:"owl-loading",rtlClass:"owl-rtl",responsiveClass:"owl-responsive",dragClass:"owl-drag",itemClass:"owl-item",stageClass:"owl-stage",stageOuterClass:"owl-stage-outer",grabClass:"owl-grab"},n.Width={Default:"default",Inner:"inner",Outer:"outer"},n.Type={Event:"event",State:"state"},n.Plugins={},n.Workers=[{filter:["width","settings"],run:function(){this._width=this.$element.width()}},{filter:["width","items","settings"],run:function(t){t.current=this._items&&this._items[this.relative(this._current)]}},{filter:["items","settings"],run:function(){this.$stage.children(".cloned").remove()}},{filter:["width","items","settings"],run:function(t){var e=this.settings.margin||"",i=!this.settings.autoWidth,s=this.settings.rtl,n={width:"auto","margin-left":s?e:"","margin-right":s?"":e};!i&&this.$stage.children().css(n),t.css=n}},{filter:["width","items","settings"],run:function(t){var e=(this.width()/this.settings.items).toFixed(3)-this.settings.margin,i=null,s=this._items.length,n=!this.settings.autoWidth,o=[];for(t.items={merge:!1,width:e};s--;)i=this._mergers[s],i=this.settings.mergeFit&&Math.min(i,this.settings.items)||i,t.items.merge=i>1||t.items.merge,o[s]=n?e*i:this._items[s].width();this._widths=o}},{filter:["items","settings"],run:function(){var e=[],i=this._items,s=this.settings,n=Math.max(2*s.items,4),o=2*Math.ceil(i.length/2),r=s.loop&&i.length?s.rewind?n:Math.max(n,o):0,a="",h="";for(r/=2;r--;)e.push(this.normalize(e.length/2,!0)),a+=i[e[e.length-1]][0].outerHTML,e.push(this.normalize(i.length-1-(e.length-1)/2,!0)),h=i[e[e.length-1]][0].outerHTML+h;this._clones=e,t(a).addClass("cloned").appendTo(this.$stage),t(h).addClass("cloned").prependTo(this.$stage)}},{filter:["width","items","settings"],run:function(){for(var t=this.settings.rtl?1:-1,e=this._clones.length+this._items.length,i=-1,s=0,n=0,o=[];++i<e;)s=o[i-1]||0,n=this._widths[this.relative(i)]+this.settings.margin,o.push(s+n*t);this._coordinates=o}},{filter:["width","items","settings"],run:function(){var t=this.settings.stagePadding,e=this._coordinates,i={width:Math.ceil(Math.abs(e[e.length-1]))+2*t,"padding-left":t||"","padding-right":t||""};this.$stage.css(i)}},{filter:["width","items","settings"],run:function(t){var e=this._coordinates.length,i=!this.settings.autoWidth,s=this.$stage.children();if(i&&t.items.merge)for(;e--;)t.css.width=this._widths[this.relative(e)],s.eq(e).css(t.css);else i&&(t.css.width=t.items.width,s.css(t.css))}},{filter:["items"],run:function(){this._coordinates.length<1&&this.$stage.removeAttr("style")}},{filter:["width","items","settings"],run:function(t){t.current=t.current?this.$stage.children().index(t.current):0,t.current=Math.max(this.minimum(),Math.min(this.maximum(),t.current)),this.reset(t.current)}},{filter:["position"],run:function(){this.animate(this.coordinates(this._current))}},{filter:["width","position","items","settings"],run:function(){var t,e,i,s,n=this.settings.rtl?1:-1,o=2*this.settings.stagePadding,r=this.coordinates(this.current())+o,a=r+this.width()*n,h=[];for(i=0,s=this._coordinates.length;i<s;i++)t=this._coordinates[i-1]||0,e=Math.abs(this._coordinates[i])+o*n,(this.op(t,"<=",r)&&this.op(t,">",a)||this.op(e,"<",r)&&this.op(e,">",a))&&h.push(i);this.$stage.children(".active").removeClass("active"),this.$stage.children(":eq("+h.join("), :eq(")+")").addClass("active"),this.settings.center&&(this.$stage.children(".center").removeClass("center"),this.$stage.children().eq(this.current()).addClass("center"))}}],n.prototype.initialize=function(){if(this.enter("initializing"),this.trigger("initialize"),this.$element.toggleClass(this.settings.rtlClass,this.settings.rtl),this.settings.autoWidth&&!this.is("pre-loading")){var e,i,s;e=this.$element.find("img"),i=this.settings.nestedItemSelector?"."+this.settings.nestedItemSelector:void 0,s=this.$element.children(i).width(),e.length&&s<=0&&this.preloadAutoWidthImages(e)}this.$element.addClass(this.options.loadingClass),this.$stage=t("<"+this.settings.stageElement+' class="'+this.settings.stageClass+'"/>').wrap('<div class="'+this.settings.stageOuterClass+'"/>'),this.$element.append(this.$stage.parent()),this.replace(this.$element.children().not(this.$stage.parent())),this.$element.is(":visible")?this.refresh():this.invalidate("width"),this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass),this.registerEventHandlers(),this.leave("initializing"),this.trigger("initialized")},n.prototype.setup=function(){var e=this.viewport(),i=this.options.responsive,s=-1,n=null;i?(t.each(i,function(t){t<=e&&t>s&&(s=Number(t))}),"function"==typeof(n=t.extend({},this.options,i[s])).stagePadding&&(n.stagePadding=n.stagePadding()),delete n.responsive,n.responsiveClass&&this.$element.attr("class",this.$element.attr("class").replace(new RegExp("("+this.options.responsiveClass+"-)\\S+\\s","g"),"$1"+s))):n=t.extend({},this.options),this.trigger("change",{property:{name:"settings",value:n}}),this._breakpoint=s,this.settings=n,this.invalidate("settings"),this.trigger("changed",{property:{name:"settings",value:this.settings}})},n.prototype.optionsLogic=function(){this.settings.autoWidth&&(this.settings.stagePadding=!1,this.settings.merge=!1)},n.prototype.prepare=function(e){var i=this.trigger("prepare",{content:e});return i.data||(i.data=t("<"+this.settings.itemElement+"/>").addClass(this.options.itemClass).append(e)),this.trigger("prepared",{content:i.data}),i.data},n.prototype.update=function(){for(var e=0,i=this._pipe.length,s=t.proxy(function(t){return this[t]},this._invalidated),n={};e<i;)(this._invalidated.all||t.grep(this._pipe[e].filter,s).length>0)&&this._pipe[e].run(n),e++;this._invalidated={},!this.is("valid")&&this.enter("valid")},n.prototype.width=function(t){switch(t=t||n.Width.Default){case n.Width.Inner:case n.Width.Outer:return this._width;default:return this._width-2*this.settings.stagePadding+this.settings.margin}},n.prototype.refresh=function(){this.enter("refreshing"),this.trigger("refresh"),this.setup(),this.optionsLogic(),this.$element.addClass(this.options.refreshClass),this.update(),this.$element.removeClass(this.options.refreshClass),this.leave("refreshing"),this.trigger("refreshed")},n.prototype.onThrottledResize=function(){e.clearTimeout(this.resizeTimer),this.resizeTimer=e.setTimeout(this._handlers.onResize,this.settings.responsiveRefreshRate)},n.prototype.onResize=function(){return!!this._items.length&&(this._width!==this.$element.width()&&(!!this.$element.is(":visible")&&(this.enter("resizing"),this.trigger("resize").isDefaultPrevented()?(this.leave("resizing"),!1):(this.invalidate("width"),this.refresh(),this.leave("resizing"),void this.trigger("resized")))))},n.prototype.registerEventHandlers=function(){t.support.transition&&this.$stage.on(t.support.transition.end+".owl.core",t.proxy(this.onTransitionEnd,this)),!1!==this.settings.responsive&&this.on(e,"resize",this._handlers.onThrottledResize),this.settings.mouseDrag&&(this.$element.addClass(this.options.dragClass),this.$stage.on("mousedown.owl.core",t.proxy(this.onDragStart,this)),this.$stage.on("dragstart.owl.core selectstart.owl.core",function(){return!1})),this.settings.touchDrag&&(this.$stage.on("touchstart.owl.core",t.proxy(this.onDragStart,this)),this.$stage.on("touchcancel.owl.core",t.proxy(this.onDragEnd,this)))},n.prototype.onDragStart=function(e){var s=null;3!==e.which&&(t.support.transform?s={x:(s=this.$stage.css("transform").replace(/.*\(|\)| /g,"").split(","))[16===s.length?12:4],y:s[16===s.length?13:5]}:(s=this.$stage.position(),s={x:this.settings.rtl?s.left+this.$stage.width()-this.width()+this.settings.margin:s.left,y:s.top}),this.is("animating")&&(t.support.transform?this.animate(s.x):this.$stage.stop(),this.invalidate("position")),this.$element.toggleClass(this.options.grabClass,"mousedown"===e.type),this.speed(0),this._drag.time=(new Date).getTime(),this._drag.target=t(e.target),this._drag.stage.start=s,this._drag.stage.current=s,this._drag.pointer=this.pointer(e),t(i).on("mouseup.owl.core touchend.owl.core",t.proxy(this.onDragEnd,this)),t(i).one("mousemove.owl.core touchmove.owl.core",t.proxy(function(e){var s=this.difference(this._drag.pointer,this.pointer(e));t(i).on("mousemove.owl.core touchmove.owl.core",t.proxy(this.onDragMove,this)),Math.abs(s.x)<Math.abs(s.y)&&this.is("valid")||(e.preventDefault(),this.enter("dragging"),this.trigger("drag"))},this)))},n.prototype.onDragMove=function(t){var e=null,i=null,s=null,n=this.difference(this._drag.pointer,this.pointer(t)),o=this.difference(this._drag.stage.start,n);this.is("dragging")&&(t.preventDefault(),this.settings.loop?(e=this.coordinates(this.minimum()),i=this.coordinates(this.maximum()+1)-e,o.x=((o.x-e)%i+i)%i+e):(e=this.settings.rtl?this.coordinates(this.maximum()):this.coordinates(this.minimum()),i=this.settings.rtl?this.coordinates(this.minimum()):this.coordinates(this.maximum()),s=this.settings.pullDrag?-1*n.x/5:0,o.x=Math.max(Math.min(o.x,e+s),i+s)),this._drag.stage.current=o,this.animate(o.x))},n.prototype.onDragEnd=function(e){var s=this.difference(this._drag.pointer,this.pointer(e)),n=this._drag.stage.current,o=s.x>0^this.settings.rtl?"left":"right";t(i).off(".owl.core"),this.$element.removeClass(this.options.grabClass),(0!==s.x&&this.is("dragging")||!this.is("valid"))&&(this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed),this.current(this.closest(n.x,0!==s.x?o:this._drag.direction)),this.invalidate("position"),this.update(),this._drag.direction=o,(Math.abs(s.x)>3||(new Date).getTime()-this._drag.time>300)&&this._drag.target.one("click.owl.core",function(){return!1})),this.is("dragging")&&(this.leave("dragging"),this.trigger("dragged"))},n.prototype.closest=function(e,i){var s=-1,n=this.width(),o=this.coordinates();return this.settings.freeDrag||t.each(o,t.proxy(function(t,r){return"left"===i&&e>r-30&&e<r+30?s=t:"right"===i&&e>r-n-30&&e<r-n+30?s=t+1:this.op(e,"<",r)&&this.op(e,">",o[t+1]||r-n)&&(s="left"===i?t+1:t),-1===s},this)),this.settings.loop||(this.op(e,">",o[this.minimum()])?s=e=this.minimum():this.op(e,"<",o[this.maximum()])&&(s=e=this.maximum())),s},n.prototype.animate=function(e){var i=this.speed()>0;this.is("animating")&&this.onTransitionEnd(),i&&(this.enter("animating"),this.trigger("translate")),t.support.transform3d&&t.support.transition?this.$stage.css({transform:"translate3d("+e+"px,0px,0px)",transition:this.speed()/1e3+"s"}):i?this.$stage.animate({left:e+"px"},this.speed(),this.settings.fallbackEasing,t.proxy(this.onTransitionEnd,this)):this.$stage.css({left:e+"px"})},n.prototype.is=function(t){return this._states.current[t]&&this._states.current[t]>0},n.prototype.current=function(t){if(void 0===t)return this._current;if(0!==this._items.length){if(t=this.normalize(t),this._current!==t){var e=this.trigger("change",{property:{name:"position",value:t}});void 0!==e.data&&(t=this.normalize(e.data)),this._current=t,this.invalidate("position"),this.trigger("changed",{property:{name:"position",value:this._current}})}return this._current}},n.prototype.invalidate=function(e){return"string"===t.type(e)&&(this._invalidated[e]=!0,this.is("valid")&&this.leave("valid")),t.map(this._invalidated,function(t,e){return e})},n.prototype.reset=function(t){void 0!==(t=this.normalize(t))&&(this._speed=0,this._current=t,this.suppress(["translate","translated"]),this.animate(this.coordinates(t)),this.release(["translate","translated"]))},n.prototype.normalize=function(t,e){var i=this._items.length,s=e?0:this._clones.length;return!this.isNumeric(t)||i<1?t=void 0:(t<0||t>=i+s)&&(t=((t-s/2)%i+i)%i+s/2),t},n.prototype.relative=function(t){return t-=this._clones.length/2,this.normalize(t,!0)},n.prototype.maximum=function(t){var e,i,s,n=this.settings,o=this._coordinates.length;if(n.loop)o=this._clones.length/2+this._items.length-1;else if(n.autoWidth||n.merge){for(e=this._items.length,i=this._items[--e].width(),s=this.$element.width();e--&&!((i+=this._items[e].width()+this.settings.margin)>s););o=e+1}else o=n.center?this._items.length-1:this._items.length-n.items;return t&&(o-=this._clones.length/2),Math.max(o,0)},n.prototype.minimum=function(t){return t?0:this._clones.length/2},n.prototype.items=function(t){return void 0===t?this._items.slice():(t=this.normalize(t,!0),this._items[t])},n.prototype.mergers=function(t){return void 0===t?this._mergers.slice():(t=this.normalize(t,!0),this._mergers[t])},n.prototype.clones=function(e){var i=this._clones.length/2,s=i+this._items.length,n=function(t){return t%2==0?s+t/2:i-(t+1)/2};return void 0===e?t.map(this._clones,function(t,e){return n(e)}):t.map(this._clones,function(t,i){return t===e?n(i):null})},n.prototype.speed=function(t){return void 0!==t&&(this._speed=t),this._speed},n.prototype.coordinates=function(e){var i,s=1,n=e-1;return void 0===e?t.map(this._coordinates,t.proxy(function(t,e){return this.coordinates(e)},this)):(this.settings.center?(this.settings.rtl&&(s=-1,n=e+1),i=this._coordinates[e],i+=(this.width()-i+(this._coordinates[n]||0))/2*s):i=this._coordinates[n]||0,i=Math.ceil(i))},n.prototype.duration=function(t,e,i){return 0===i?0:Math.min(Math.max(Math.abs(e-t),1),6)*Math.abs(i||this.settings.smartSpeed)},n.prototype.to=function(t,e){var i=this.current(),s=null,n=t-this.relative(i),o=(n>0)-(n<0),r=this._items.length,a=this.minimum(),h=this.maximum();this.settings.loop?(!this.settings.rewind&&Math.abs(n)>r/2&&(n+=-1*o*r),(s=(((t=i+n)-a)%r+r)%r+a)!==t&&s-n<=h&&s-n>0&&(i=s-n,t=s,this.reset(i))):t=this.settings.rewind?(t%(h+=1)+h)%h:Math.max(a,Math.min(h,t)),this.speed(this.duration(i,t,e)),this.current(t),this.$element.is(":visible")&&this.update()},n.prototype.next=function(t){t=t||!1,this.to(this.relative(this.current())+1,t)},n.prototype.prev=function(t){t=t||!1,this.to(this.relative(this.current())-1,t)},n.prototype.onTransitionEnd=function(t){if(void 0!==t&&(t.stopPropagation(),(t.target||t.srcElement||t.originalTarget)!==this.$stage.get(0)))return!1;this.leave("animating"),this.trigger("translated")},n.prototype.viewport=function(){var s;return this.options.responsiveBaseElement!==e?s=t(this.options.responsiveBaseElement).width():e.innerWidth?s=e.innerWidth:i.documentElement&&i.documentElement.clientWidth?s=i.documentElement.clientWidth:console.warn("Can not detect viewport width."),s},n.prototype.replace=function(e){this.$stage.empty(),this._items=[],e&&(e=e instanceof jQuery?e:t(e)),this.settings.nestedItemSelector&&(e=e.find("."+this.settings.nestedItemSelector)),e.filter(function(){return 1===this.nodeType}).each(t.proxy(function(t,e){e=this.prepare(e),this.$stage.append(e),this._items.push(e),this._mergers.push(1*e.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)},this)),this.reset(this.isNumeric(this.settings.startPosition)?this.settings.startPosition:0),this.invalidate("items")},n.prototype.add=function(e,i){var s=this.relative(this._current);i=void 0===i?this._items.length:this.normalize(i,!0),e=e instanceof jQuery?e:t(e),this.trigger("add",{content:e,position:i}),e=this.prepare(e),0===this._items.length||i===this._items.length?(0===this._items.length&&this.$stage.append(e),0!==this._items.length&&this._items[i-1].after(e),this._items.push(e),this._mergers.push(1*e.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)):(this._items[i].before(e),this._items.splice(i,0,e),this._mergers.splice(i,0,1*e.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)),this._items[s]&&this.reset(this._items[s].index()),this.invalidate("items"),this.trigger("added",{content:e,position:i})},n.prototype.remove=function(t){void 0!==(t=this.normalize(t,!0))&&(this.trigger("remove",{content:this._items[t],position:t}),this._items[t].remove(),this._items.splice(t,1),this._mergers.splice(t,1),this.invalidate("items"),this.trigger("removed",{content:null,position:t}))},n.prototype.preloadAutoWidthImages=function(e){e.each(t.proxy(function(e,i){this.enter("pre-loading"),i=t(i),t(new Image).one("load",t.proxy(function(t){i.attr("src",t.target.src),i.css("opacity",1),this.leave("pre-loading"),!this.is("pre-loading")&&!this.is("initializing")&&this.refresh()},this)).attr("src",i.attr("src")||i.attr("data-src")||i.attr("data-src-retina"))},this))},n.prototype.destroy=function(){this.$element.off(".owl.core"),this.$stage.off(".owl.core"),t(i).off(".owl.core"),!1!==this.settings.responsive&&(e.clearTimeout(this.resizeTimer),this.off(e,"resize",this._handlers.onThrottledResize));for(var s in this._plugins)this._plugins[s].destroy();this.$stage.children(".cloned").remove(),this.$stage.unwrap(),this.$stage.children().contents().unwrap(),this.$stage.children().unwrap(),this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class",this.$element.attr("class").replace(new RegExp(this.options.responsiveClass+"-\\S+\\s","g"),"")).removeData("owl.carousel")},n.prototype.op=function(t,e,i){var s=this.settings.rtl;switch(e){case"<":return s?t>i:t<i;case">":return s?t<i:t>i;case">=":return s?t<=i:t>=i;case"<=":return s?t>=i:t<=i}},n.prototype.on=function(t,e,i,s){t.addEventListener?t.addEventListener(e,i,s):t.attachEvent&&t.attachEvent("on"+e,i)},n.prototype.off=function(t,e,i,s){t.removeEventListener?t.removeEventListener(e,i,s):t.detachEvent&&t.detachEvent("on"+e,i)},n.prototype.trigger=function(e,i,s,o,r){var a={item:{count:this._items.length,index:this.current()}},h=t.camelCase(t.grep(["on",e,s],function(t){return t}).join("-").toLowerCase()),l=t.Event([e,"owl",s||"carousel"].join(".").toLowerCase(),t.extend({relatedTarget:this},a,i));return this._supress[e]||(t.each(this._plugins,function(t,e){e.onTrigger&&e.onTrigger(l)}),this.register({type:n.Type.Event,name:e}),this.$element.trigger(l),this.settings&&"function"==typeof this.settings[h]&&this.settings[h].call(this,l)),l},n.prototype.enter=function(e){t.each([e].concat(this._states.tags[e]||[]),t.proxy(function(t,e){void 0===this._states.current[e]&&(this._states.current[e]=0),this._states.current[e]++},this))},n.prototype.leave=function(e){t.each([e].concat(this._states.tags[e]||[]),t.proxy(function(t,e){this._states.current[e]--},this))},n.prototype.register=function(e){if(e.type===n.Type.Event){if(t.event.special[e.name]||(t.event.special[e.name]={}),!t.event.special[e.name].owl){var i=t.event.special[e.name]._default;t.event.special[e.name]._default=function(t){return!i||!i.apply||t.namespace&&-1!==t.namespace.indexOf("owl")?t.namespace&&t.namespace.indexOf("owl")>-1:i.apply(this,arguments)},t.event.special[e.name].owl=!0}}else e.type===n.Type.State&&(this._states.tags[e.name]?this._states.tags[e.name]=this._states.tags[e.name].concat(e.tags):this._states.tags[e.name]=e.tags,this._states.tags[e.name]=t.grep(this._states.tags[e.name],t.proxy(function(i,s){return t.inArray(i,this._states.tags[e.name])===s},this)))},n.prototype.suppress=function(e){t.each(e,t.proxy(function(t,e){this._supress[e]=!0},this))},n.prototype.release=function(e){t.each(e,t.proxy(function(t,e){delete this._supress[e]},this))},n.prototype.pointer=function(t){var i={x:null,y:null};return t=t.originalEvent||t||e.event,t=t.touches&&t.touches.length?t.touches[0]:t.changedTouches&&t.changedTouches.length?t.changedTouches[0]:t,t.pageX?(i.x=t.pageX,i.y=t.pageY):(i.x=t.clientX,i.y=t.clientY),i},n.prototype.isNumeric=function(t){return!isNaN(parseFloat(t))},n.prototype.difference=function(t,e){return{x:t.x-e.x,y:t.y-e.y}},t.fn.owlCarousel=function(e){var i=Array.prototype.slice.call(arguments,1);return this.each(function(){var s=t(this),o=s.data("owl.carousel");o||(o=new n(this,"object"==typeof e&&e),s.data("owl.carousel",o),t.each(["next","prev","to","destroy","refresh","replace","add","remove"],function(e,i){o.register({type:n.Type.Event,name:i}),o.$element.on(i+".owl.carousel.core",t.proxy(function(t){t.namespace&&t.relatedTarget!==this&&(this.suppress([i]),o[i].apply(this,[].slice.call(arguments,1)),this.release([i]))},o))})),"string"==typeof e&&"_"!==e.charAt(0)&&o[e].apply(o,i)})},t.fn.owlCarousel.Constructor=n}(window.Zepto||window.jQuery,window,document),function(t,e,i,s){var n=function(e){this._core=e,this._interval=null,this._visible=null,this._handlers={"initialized.owl.carousel":t.proxy(function(t){t.namespace&&this._core.settings.autoRefresh&&this.watch()},this)},this._core.options=t.extend({},n.Defaults,this._core.options),this._core.$element.on(this._handlers)};n.Defaults={autoRefresh:!0,autoRefreshInterval:500},n.prototype.watch=function(){this._interval||(this._visible=this._core.$element.is(":visible"),this._interval=e.setInterval(t.proxy(this.refresh,this),this._core.settings.autoRefreshInterval))},n.prototype.refresh=function(){this._core.$element.is(":visible")!==this._visible&&(this._visible=!this._visible,this._core.$element.toggleClass("owl-hidden",!this._visible),this._visible&&this._core.invalidate("width")&&this._core.refresh())},n.prototype.destroy=function(){var t,i;e.clearInterval(this._interval);for(t in this._handlers)this._core.$element.off(t,this._handlers[t]);for(i in Object.getOwnPropertyNames(this))"function"!=typeof this[i]&&(this[i]=null)},t.fn.owlCarousel.Constructor.Plugins.AutoRefresh=n}(window.Zepto||window.jQuery,window,document),function(t,e,i,s){var n=function(e){this._core=e,this._loaded=[],this._handlers={"initialized.owl.carousel change.owl.carousel resized.owl.carousel":t.proxy(function(e){if(e.namespace&&this._core.settings&&this._core.settings.lazyLoad&&(e.property&&"position"==e.property.name||"initialized"==e.type))for(var i=this._core.settings,s=i.center&&Math.ceil(i.items/2)||i.items,n=i.center&&-1*s||0,o=(e.property&&void 0!==e.property.value?e.property.value:this._core.current())+n,r=this._core.clones().length,a=t.proxy(function(t,e){this.load(e)},this);n++<s;)this.load(r/2+this._core.relative(o)),r&&t.each(this._core.clones(this._core.relative(o)),a),o++},this)},this._core.options=t.extend({},n.Defaults,this._core.options),this._core.$element.on(this._handlers)};n.Defaults={lazyLoad:!1},n.prototype.load=function(i){var s=this._core.$stage.children().eq(i),n=s&&s.find(".owl-lazy");!n||t.inArray(s.get(0),this._loaded)>-1||(n.each(t.proxy(function(i,s){var n,o=t(s),r=e.devicePixelRatio>1&&o.attr("data-src-retina")||o.attr("data-src");this._core.trigger("load",{element:o,url:r},"lazy"),o.is("img")?o.one("load.owl.lazy",t.proxy(function(){o.css("opacity",1),this._core.trigger("loaded",{element:o,url:r},"lazy")},this)).attr("src",r):((n=new Image).onload=t.proxy(function(){o.css({"background-image":'url("'+r+'")',opacity:"1"}),this._core.trigger("loaded",{element:o,url:r},"lazy")},this),n.src=r)},this)),this._loaded.push(s.get(0)))},n.prototype.destroy=function(){var t,e;for(t in this.handlers)this._core.$element.off(t,this.handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},t.fn.owlCarousel.Constructor.Plugins.Lazy=n}(window.Zepto||window.jQuery,window,document),function(t,e,i,s){var n=function(e){this._core=e,this._handlers={"initialized.owl.carousel refreshed.owl.carousel":t.proxy(function(t){t.namespace&&this._core.settings.autoHeight&&this.update()},this),"changed.owl.carousel":t.proxy(function(t){t.namespace&&this._core.settings.autoHeight&&"position"==t.property.name&&this.update()},this),"loaded.owl.lazy":t.proxy(function(t){t.namespace&&this._core.settings.autoHeight&&t.element.closest("."+this._core.settings.itemClass).index()===this._core.current()&&this.update()},this)},this._core.options=t.extend({},n.Defaults,this._core.options),this._core.$element.on(this._handlers)};n.Defaults={autoHeight:!1,autoHeightClass:"owl-height"},n.prototype.update=function(){var e=this._core._current,i=e+this._core.settings.items,s=this._core.$stage.children().toArray().slice(e,i),n=[],o=0;t.each(s,function(e,i){n.push(t(i).height())}),o=Math.max.apply(null,n),this._core.$stage.parent().height(o).addClass(this._core.settings.autoHeightClass)},n.prototype.destroy=function(){var t,e;for(t in this._handlers)this._core.$element.off(t,this._handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},t.fn.owlCarousel.Constructor.Plugins.AutoHeight=n}(window.Zepto||window.jQuery,window,document),function(t,e,i,s){var n=function(e){this._core=e,this._videos={},this._playing=null,this._handlers={"initialized.owl.carousel":t.proxy(function(t){t.namespace&&this._core.register({type:"state",name:"playing",tags:["interacting"]})},this),"resize.owl.carousel":t.proxy(function(t){t.namespace&&this._core.settings.video&&this.isInFullScreen()&&t.preventDefault()},this),"refreshed.owl.carousel":t.proxy(function(t){t.namespace&&this._core.is("resizing")&&this._core.$stage.find(".cloned .owl-video-frame").remove()},this),"changed.owl.carousel":t.proxy(function(t){t.namespace&&"position"===t.property.name&&this._playing&&this.stop()},this),"prepared.owl.carousel":t.proxy(function(e){if(e.namespace){var i=t(e.content).find(".owl-video");i.length&&(i.css("display","none"),this.fetch(i,t(e.content)))}},this)},this._core.options=t.extend({},n.Defaults,this._core.options),this._core.$element.on(this._handlers),this._core.$element.on("click.owl.video",".owl-video-play-icon",t.proxy(function(t){this.play(t)},this))};n.Defaults={video:!1,videoHeight:!1,videoWidth:!1},n.prototype.fetch=function(t,e){var i=function(){return t.attr("data-vimeo-id")?"vimeo":t.attr("data-vzaar-id")?"vzaar":"youtube"}(),s=t.attr("data-vimeo-id")||t.attr("data-youtube-id")||t.attr("data-vzaar-id"),n=t.attr("data-width")||this._core.settings.videoWidth,o=t.attr("data-height")||this._core.settings.videoHeight,r=t.attr("href");if(!r)throw new Error("Missing video URL.");if((s=r.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/))[3].indexOf("youtu")>-1)i="youtube";else if(s[3].indexOf("vimeo")>-1)i="vimeo";else{if(!(s[3].indexOf("vzaar")>-1))throw new Error("Video URL not supported.");i="vzaar"}s=s[6],this._videos[r]={type:i,id:s,width:n,height:o},e.attr("data-video",r),this.thumbnail(t,this._videos[r])},n.prototype.thumbnail=function(e,i){var s,n,o,r=i.width&&i.height?'style="width:'+i.width+"px;height:"+i.height+'px;"':"",a=e.find("img"),h="src",l="",c=this._core.settings,p=function(t){n='<div class="owl-video-play-icon"></div>',s=c.lazyLoad?'<div class="owl-video-tn '+l+'" '+h+'="'+t+'"></div>':'<div class="owl-video-tn" style="opacity:1;background-image:url('+t+')"></div>',e.after(s),e.after(n)};if(e.wrap('<div class="owl-video-wrapper"'+r+"></div>"),this._core.settings.lazyLoad&&(h="data-src",l="owl-lazy"),a.length)return p(a.attr(h)),a.remove(),!1;"youtube"===i.type?(o="//img.youtube.com/vi/"+i.id+"/hqdefault.jpg",p(o)):"vimeo"===i.type?t.ajax({type:"GET",url:"//vimeo.com/api/v2/video/"+i.id+".json",jsonp:"callback",dataType:"jsonp",success:function(t){o=t[0].thumbnail_large,p(o)}}):"vzaar"===i.type&&t.ajax({type:"GET",url:"//vzaar.com/api/videos/"+i.id+".json",jsonp:"callback",dataType:"jsonp",success:function(t){o=t.framegrab_url,p(o)}})},n.prototype.stop=function(){this._core.trigger("stop",null,"video"),this._playing.find(".owl-video-frame").remove(),this._playing.removeClass("owl-video-playing"),this._playing=null,this._core.leave("playing"),this._core.trigger("stopped",null,"video")},n.prototype.play=function(e){var i,s=t(e.target).closest("."+this._core.settings.itemClass),n=this._videos[s.attr("data-video")],o=n.width||"100%",r=n.height||this._core.$stage.height();this._playing||(this._core.enter("playing"),this._core.trigger("play",null,"video"),s=this._core.items(this._core.relative(s.index())),this._core.reset(s.index()),"youtube"===n.type?i='<iframe width="'+o+'" height="'+r+'" src="//www.youtube.com/embed/'+n.id+"?autoplay=1&rel=0&v="+n.id+'" frameborder="0" allowfullscreen></iframe>':"vimeo"===n.type?i='<iframe src="//player.vimeo.com/video/'+n.id+'?autoplay=1" width="'+o+'" height="'+r+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>':"vzaar"===n.type&&(i='<iframe frameborder="0"height="'+r+'"width="'+o+'" allowfullscreen mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/'+n.id+'/player?autoplay=true"></iframe>'),t('<div class="owl-video-frame">'+i+"</div>").insertAfter(s.find(".owl-video")),this._playing=s.addClass("owl-video-playing"))},n.prototype.isInFullScreen=function(){var e=i.fullscreenElement||i.mozFullScreenElement||i.webkitFullscreenElement;return e&&t(e).parent().hasClass("owl-video-frame")},n.prototype.destroy=function(){var t,e;this._core.$element.off("click.owl.video");for(t in this._handlers)this._core.$element.off(t,this._handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},t.fn.owlCarousel.Constructor.Plugins.Video=n}(window.Zepto||window.jQuery,window,document),function(t,e,i,s){var n=function(e){this.core=e,this.core.options=t.extend({},n.Defaults,this.core.options),this.swapping=!0,this.previous=void 0,this.next=void 0,this.handlers={"change.owl.carousel":t.proxy(function(t){t.namespace&&"position"==t.property.name&&(this.previous=this.core.current(),this.next=t.property.value)},this),"drag.owl.carousel dragged.owl.carousel translated.owl.carousel":t.proxy(function(t){t.namespace&&(this.swapping="translated"==t.type)},this),"translate.owl.carousel":t.proxy(function(t){t.namespace&&this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)&&this.swap()},this)},this.core.$element.on(this.handlers)};n.Defaults={animateOut:!1,animateIn:!1},n.prototype.swap=function(){if(1===this.core.settings.items&&t.support.animation&&t.support.transition){this.core.speed(0);var e,i=t.proxy(this.clear,this),s=this.core.$stage.children().eq(this.previous),n=this.core.$stage.children().eq(this.next),o=this.core.settings.animateIn,r=this.core.settings.animateOut;this.core.current()!==this.previous&&(r&&(e=this.core.coordinates(this.previous)-this.core.coordinates(this.next),s.one(t.support.animation.end,i).css({left:e+"px"}).addClass("animated owl-animated-out").addClass(r)),o&&n.one(t.support.animation.end,i).addClass("animated owl-animated-in").addClass(o))}},n.prototype.clear=function(e){t(e.target).css({left:""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),this.core.onTransitionEnd()},n.prototype.destroy=function(){var t,e;for(t in this.handlers)this.core.$element.off(t,this.handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},t.fn.owlCarousel.Constructor.Plugins.Animate=n}(window.Zepto||window.jQuery,window,document),function(t,e,i,s){var n=function(e){this._core=e,this._timeout=null,this._paused=!1,this._handlers={"changed.owl.carousel":t.proxy(function(t){t.namespace&&"settings"===t.property.name?this._core.settings.autoplay?this.play():this.stop():t.namespace&&"position"===t.property.name&&this._core.settings.autoplay&&this._setAutoPlayInterval()},this),"initialized.owl.carousel":t.proxy(function(t){t.namespace&&this._core.settings.autoplay&&this.play()},this),"play.owl.autoplay":t.proxy(function(t,e,i){t.namespace&&this.play(e,i)},this),"stop.owl.autoplay":t.proxy(function(t){t.namespace&&this.stop()},this),"mouseover.owl.autoplay":t.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"mouseleave.owl.autoplay":t.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.play()},this),"touchstart.owl.core":t.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"touchend.owl.core":t.proxy(function(){this._core.settings.autoplayHoverPause&&this.play()},this)},this._core.$element.on(this._handlers),this._core.options=t.extend({},n.Defaults,this._core.options)};n.Defaults={autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,autoplaySpeed:!1},n.prototype.play=function(t,e){this._paused=!1,this._core.is("rotating")||(this._core.enter("rotating"),this._setAutoPlayInterval())},n.prototype._getNextTimeout=function(s,n){return this._timeout&&e.clearTimeout(this._timeout),e.setTimeout(t.proxy(function(){this._paused||this._core.is("busy")||this._core.is("interacting")||i.hidden||this._core.next(n||this._core.settings.autoplaySpeed)},this),s||this._core.settings.autoplayTimeout)},n.prototype._setAutoPlayInterval=function(){this._timeout=this._getNextTimeout()},n.prototype.stop=function(){this._core.is("rotating")&&(e.clearTimeout(this._timeout),this._core.leave("rotating"))},n.prototype.pause=function(){this._core.is("rotating")&&(this._paused=!0)},n.prototype.destroy=function(){var t,e;this.stop();for(t in this._handlers)this._core.$element.off(t,this._handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},t.fn.owlCarousel.Constructor.Plugins.autoplay=n}(window.Zepto||window.jQuery,window,document),function(t,e,i,s){"use strict";var n=function(e){this._core=e,this._initialized=!1,this._pages=[],this._controls={},this._templates=[],this.$element=this._core.$element,this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to},this._handlers={"prepared.owl.carousel":t.proxy(function(e){e.namespace&&this._core.settings.dotsData&&this._templates.push('<div class="'+this._core.settings.dotClass+'">'+t(e.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot")+"</div>")},this),"added.owl.carousel":t.proxy(function(t){t.namespace&&this._core.settings.dotsData&&this._templates.splice(t.position,0,this._templates.pop())},this),"remove.owl.carousel":t.proxy(function(t){t.namespace&&this._core.settings.dotsData&&this._templates.splice(t.position,1)},this),"changed.owl.carousel":t.proxy(function(t){t.namespace&&"position"==t.property.name&&this.draw()},this),"initialized.owl.carousel":t.proxy(function(t){t.namespace&&!this._initialized&&(this._core.trigger("initialize",null,"navigation"),this.initialize(),this.update(),this.draw(),this._initialized=!0,this._core.trigger("initialized",null,"navigation"))},this),"refreshed.owl.carousel":t.proxy(function(t){t.namespace&&this._initialized&&(this._core.trigger("refresh",null,"navigation"),this.update(),this.draw(),this._core.trigger("refreshed",null,"navigation"))},this)},this._core.options=t.extend({},n.Defaults,this._core.options),this.$element.on(this._handlers)};n.Defaults={nav:!1,navText:["prev","next"],navSpeed:!1,navElement:"div",navContainer:!1,navContainerClass:"owl-nav",navClass:["owl-prev","owl-next"],slideBy:1,dotClass:"owl-dot",dotsClass:"owl-dots",dots:!0,dotsEach:!1,dotsData:!1,dotsSpeed:!1,dotsContainer:!1},n.prototype.initialize=function(){var e,i=this._core.settings;this._controls.$relative=(i.navContainer?t(i.navContainer):t("<div>").addClass(i.navContainerClass).appendTo(this.$element)).addClass("disabled"),this._controls.$previous=t("<"+i.navElement+">").addClass(i.navClass[0]).html(i.navText[0]).prependTo(this._controls.$relative).on("click",t.proxy(function(t){this.prev(i.navSpeed)},this)),this._controls.$next=t("<"+i.navElement+">").addClass(i.navClass[1]).html(i.navText[1]).appendTo(this._controls.$relative).on("click",t.proxy(function(t){this.next(i.navSpeed)},this)),i.dotsData||(this._templates=[t("<div>").addClass(i.dotClass).append(t("<span>")).prop("outerHTML")]),this._controls.$absolute=(i.dotsContainer?t(i.dotsContainer):t("<div>").addClass(i.dotsClass).appendTo(this.$element)).addClass("disabled"),this._controls.$absolute.on("click","div",t.proxy(function(e){var s=t(e.target).parent().is(this._controls.$absolute)?t(e.target).index():t(e.target).parent().index();e.preventDefault(),this.to(s,i.dotsSpeed)},this));for(e in this._overrides)this._core[e]=t.proxy(this[e],this)},n.prototype.destroy=function(){var t,e,i,s;for(t in this._handlers)this.$element.off(t,this._handlers[t]);for(e in this._controls)this._controls[e].remove();for(s in this.overides)this._core[s]=this._overrides[s];for(i in Object.getOwnPropertyNames(this))"function"!=typeof this[i]&&(this[i]=null)},n.prototype.update=function(){var t,e,i,s=this._core.clones().length/2,n=s+this._core.items().length,o=this._core.maximum(!0),r=this._core.settings,a=r.center||r.autoWidth||r.dotsData?1:r.dotsEach||r.items;if("page"!==r.slideBy&&(r.slideBy=Math.min(r.slideBy,r.items)),r.dots||"page"==r.slideBy)for(this._pages=[],t=s,e=0,i=0;t<n;t++){if(e>=a||0===e){if(this._pages.push({start:Math.min(o,t-s),end:t-s+a-1}),Math.min(o,t-s)===o)break;e=0,++i}e+=this._core.mergers(this._core.relative(t))}},n.prototype.draw=function(){var e,i=this._core.settings,s=this._core.items().length<=i.items,n=this._core.relative(this._core.current()),o=i.loop||i.rewind;this._controls.$relative.toggleClass("disabled",!i.nav||s),i.nav&&(this._controls.$previous.toggleClass("disabled",!o&&n<=this._core.minimum(!0)),this._controls.$next.toggleClass("disabled",!o&&n>=this._core.maximum(!0))),this._controls.$absolute.toggleClass("disabled",!i.dots||s),i.dots&&(e=this._pages.length-this._controls.$absolute.children().length,i.dotsData&&0!==e?this._controls.$absolute.html(this._templates.join("")):e>0?this._controls.$absolute.append(new Array(e+1).join(this._templates[0])):e<0&&this._controls.$absolute.children().slice(e).remove(),this._controls.$absolute.find(".active").removeClass("active"),this._controls.$absolute.children().eq(t.inArray(this.current(),this._pages)).addClass("active"))},n.prototype.onTrigger=function(e){var i=this._core.settings;e.page={index:t.inArray(this.current(),this._pages),count:this._pages.length,size:i&&(i.center||i.autoWidth||i.dotsData?1:i.dotsEach||i.items)}},n.prototype.current=function(){var e=this._core.relative(this._core.current());return t.grep(this._pages,t.proxy(function(t,i){return t.start<=e&&t.end>=e},this)).pop()},n.prototype.getPosition=function(e){var i,s,n=this._core.settings;return"page"==n.slideBy?(i=t.inArray(this.current(),this._pages),s=this._pages.length,e?++i:--i,i=this._pages[(i%s+s)%s].start):(i=this._core.relative(this._core.current()),s=this._core.items().length,e?i+=n.slideBy:i-=n.slideBy),i},n.prototype.next=function(e){t.proxy(this._overrides.to,this._core)(this.getPosition(!0),e)},n.prototype.prev=function(e){t.proxy(this._overrides.to,this._core)(this.getPosition(!1),e)},n.prototype.to=function(e,i,s){var n;!s&&this._pages.length?(n=this._pages.length,t.proxy(this._overrides.to,this._core)(this._pages[(e%n+n)%n].start,i)):t.proxy(this._overrides.to,this._core)(e,i)},t.fn.owlCarousel.Constructor.Plugins.Navigation=n}(window.Zepto||window.jQuery,window,document),function(t,e,i,s){"use strict";var n=function(i){this._core=i,this._hashes={},this.$element=this._core.$element,this._handlers={"initialized.owl.carousel":t.proxy(function(i){i.namespace&&"URLHash"===this._core.settings.startPosition&&t(e).trigger("hashchange.owl.navigation")},this),"prepared.owl.carousel":t.proxy(function(e){if(e.namespace){var i=t(e.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");if(!i)return;this._hashes[i]=e.content}},this),"changed.owl.carousel":t.proxy(function(i){if(i.namespace&&"position"===i.property.name){var s=this._core.items(this._core.relative(this._core.current())),n=t.map(this._hashes,function(t,e){return t===s?e:null}).join();if(!n||e.location.hash.slice(1)===n)return;e.location.hash=n}},this)},this._core.options=t.extend({},n.Defaults,this._core.options),this.$element.on(this._handlers),t(e).on("hashchange.owl.navigation",t.proxy(function(t){var i=e.location.hash.substring(1),s=this._core.$stage.children(),n=this._hashes[i]&&s.index(this._hashes[i]);void 0!==n&&n!==this._core.current()&&this._core.to(this._core.relative(n),!1,!0)},this))};n.Defaults={URLhashListener:!1},n.prototype.destroy=function(){var i,s;t(e).off("hashchange.owl.navigation");for(i in this._handlers)this._core.$element.off(i,this._handlers[i]);for(s in Object.getOwnPropertyNames(this))"function"!=typeof this[s]&&(this[s]=null)},t.fn.owlCarousel.Constructor.Plugins.Hash=n}(window.Zepto||window.jQuery,window,document),function(t,e,i,s){function n(e,i){var n=!1,o=e.charAt(0).toUpperCase()+e.slice(1);return t.each((e+" "+a.join(o+" ")+o).split(" "),function(t,e){if(r[e]!==s)return n=!i||e,!1}),n}function o(t){return n(t,!0)}var r=t("<support>").get(0).style,a="Webkit Moz O ms".split(" "),h={transition:{end:{WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",transition:"transitionend"}},animation:{end:{WebkitAnimation:"webkitAnimationEnd",MozAnimation:"animationend",OAnimation:"oAnimationEnd",animation:"animationend"}}},l={csstransforms:function(){return!!n("transform")},csstransforms3d:function(){return!!n("perspective")},csstransitions:function(){return!!n("transition")},cssanimations:function(){return!!n("animation")}};l.csstransitions()&&(t.support.transition=new String(o("transition")),t.support.transition.end=h.transition.end[t.support.transition]),l.cssanimations()&&(t.support.animation=new String(o("animation")),t.support.animation.end=h.animation.end[t.support.animation]),l.csstransforms()&&(t.support.transform=new String(o("transform")),t.support.transform3d=l.csstransforms3d())}(window.Zepto||window.jQuery,window,document);


// EASING

jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(n,e,t,u,a){return jQuery.easing[jQuery.easing.def](n,e,t,u,a)},easeInQuad:function(n,e,t,u,a){return u*(e/=a)*e+t},easeOutQuad:function(n,e,t,u,a){return-u*(e/=a)*(e-2)+t},easeInOutQuad:function(n,e,t,u,a){return(e/=a/2)<1?u/2*e*e+t:-u/2*(--e*(e-2)-1)+t},easeInCubic:function(n,e,t,u,a){return u*(e/=a)*e*e+t},easeOutCubic:function(n,e,t,u,a){return u*((e=e/a-1)*e*e+1)+t},easeInOutCubic:function(n,e,t,u,a){return(e/=a/2)<1?u/2*e*e*e+t:u/2*((e-=2)*e*e+2)+t},easeInQuart:function(n,e,t,u,a){return u*(e/=a)*e*e*e+t},easeOutQuart:function(n,e,t,u,a){return-u*((e=e/a-1)*e*e*e-1)+t},easeInOutQuart:function(n,e,t,u,a){return(e/=a/2)<1?u/2*e*e*e*e+t:-u/2*((e-=2)*e*e*e-2)+t},easeInQuint:function(n,e,t,u,a){return u*(e/=a)*e*e*e*e+t},easeOutQuint:function(n,e,t,u,a){return u*((e=e/a-1)*e*e*e*e+1)+t},easeInOutQuint:function(n,e,t,u,a){return(e/=a/2)<1?u/2*e*e*e*e*e+t:u/2*((e-=2)*e*e*e*e+2)+t},easeInSine:function(n,e,t,u,a){return-u*Math.cos(e/a*(Math.PI/2))+u+t},easeOutSine:function(n,e,t,u,a){return u*Math.sin(e/a*(Math.PI/2))+t},easeInOutSine:function(n,e,t,u,a){return-u/2*(Math.cos(Math.PI*e/a)-1)+t},easeInExpo:function(n,e,t,u,a){return 0==e?t:u*Math.pow(2,10*(e/a-1))+t},easeOutExpo:function(n,e,t,u,a){return e==a?t+u:u*(1-Math.pow(2,-10*e/a))+t},easeInOutExpo:function(n,e,t,u,a){return 0==e?t:e==a?t+u:(e/=a/2)<1?u/2*Math.pow(2,10*(e-1))+t:u/2*(2-Math.pow(2,-10*--e))+t},easeInCirc:function(n,e,t,u,a){return-u*(Math.sqrt(1-(e/=a)*e)-1)+t},easeOutCirc:function(n,e,t,u,a){return u*Math.sqrt(1-(e=e/a-1)*e)+t},easeInOutCirc:function(n,e,t,u,a){return(e/=a/2)<1?-u/2*(Math.sqrt(1-e*e)-1)+t:u/2*(Math.sqrt(1-(e-=2)*e)+1)+t},easeInElastic:function(n,e,t,u,a){var r=1.70158,i=0,s=u;if(0==e)return t;if(1==(e/=a))return t+u;if(i||(i=.3*a),s<Math.abs(u)){s=u;r=i/4}else r=i/(2*Math.PI)*Math.asin(u/s);return-s*Math.pow(2,10*(e-=1))*Math.sin((e*a-r)*(2*Math.PI)/i)+t},easeOutElastic:function(n,e,t,u,a){var r=1.70158,i=0,s=u;if(0==e)return t;if(1==(e/=a))return t+u;if(i||(i=.3*a),s<Math.abs(u)){s=u;r=i/4}else r=i/(2*Math.PI)*Math.asin(u/s);return s*Math.pow(2,-10*e)*Math.sin((e*a-r)*(2*Math.PI)/i)+u+t},easeInOutElastic:function(n,e,t,u,a){var r=1.70158,i=0,s=u;if(0==e)return t;if(2==(e/=a/2))return t+u;if(i||(i=a*(.3*1.5)),s<Math.abs(u)){s=u;r=i/4}else r=i/(2*Math.PI)*Math.asin(u/s);return e<1?s*Math.pow(2,10*(e-=1))*Math.sin((e*a-r)*(2*Math.PI)/i)*-.5+t:s*Math.pow(2,-10*(e-=1))*Math.sin((e*a-r)*(2*Math.PI)/i)*.5+u+t},easeInBack:function(n,e,t,u,a,r){return void 0==r&&(r=1.70158),u*(e/=a)*e*((r+1)*e-r)+t},easeOutBack:function(n,e,t,u,a,r){return void 0==r&&(r=1.70158),u*((e=e/a-1)*e*((r+1)*e+r)+1)+t},easeInOutBack:function(n,e,t,u,a,r){return void 0==r&&(r=1.70158),(e/=a/2)<1?u/2*(e*e*((1+(r*=1.525))*e-r))+t:u/2*((e-=2)*e*((1+(r*=1.525))*e+r)+2)+t},easeInBounce:function(n,e,t,u,a){return u-jQuery.easing.easeOutBounce(n,a-e,0,u,a)+t},easeOutBounce:function(n,e,t,u,a){return(e/=a)<1/2.75?u*(7.5625*e*e)+t:e<2/2.75?u*(7.5625*(e-=1.5/2.75)*e+.75)+t:e<2.5/2.75?u*(7.5625*(e-=2.25/2.75)*e+.9375)+t:u*(7.5625*(e-=2.625/2.75)*e+.984375)+t},easeInOutBounce:function(n,e,t,u,a){return e<a/2?.5*jQuery.easing.easeInBounce(n,2*e,0,u,a)+t:.5*jQuery.easing.easeOutBounce(n,2*e-a,0,u,a)+.5*u+t}});


// ACCORDION

!function(t,i,e){var n,s=i.event;s.special.smartresize={setup:function(){i(this).bind("resize",s.special.smartresize.handler)},teardown:function(){i(this).unbind("resize",s.special.smartresize.handler)},handler:function(t,i){var e=this,s=arguments;t.type="smartresize",n&&clearTimeout(n),n=setTimeout(function(){jQuery.event.handle.apply(e,s)},"execAsap"===i?0:100)}},i.fn.smartresize=function(t){return t?this.bind("smartresize",t):this.trigger("smartresize",["execAsap"])},i.Accordion=function(t,e){this.$el=i(e),this.$items=this.$el.children("ul").children("li"),this.itemsCount=this.$items.length,this._init(t)},i.Accordion.defaults={open:-1,oneOpenedItem:!1,speed:600,easing:"easeInOutExpo",scrollSpeed:900,scrollEasing:"easeInOutExpo"},i.Accordion.prototype={_init:function(t){this.options=i.extend(!0,{},i.Accordion.defaults,t),this._validate(),this.current=this.options.open,this.$items.find("div.st-content").hide(),this._saveDimValues(),-1!=this.current&&this._toggleItem(this.$items.eq(this.current)),this._initEvents()},_saveDimValues:function(){this.$items.each(function(){var t=i(this);t.data({originalHeight:t.find("a:first").height(),offsetTop:t.offset().top})})},_validate:function(){(this.options.open<-1||this.options.open>this.itemsCount-1)&&(this.options.open=-1)},_initEvents:function(){var e=this;this.$items.find("a:first").bind("click.accordion",function(t){var n=i(this).parent();return e.options.oneOpenedItem&&e._isOpened()&&e.current!==n.index()&&e._toggleItem(e.$items.eq(e.current)),e._toggleItem(n),!1}),i(t).bind("smartresize.accordion",function(t){e._saveDimValues(),e.$el.find("li.st-open").each(function(){var t=i(this);t.css("height",t.data("originalHeight")+t.find("div.st-content").outerHeight(!0))}),e._isOpened()&&e._scroll()})},_isOpened:function(){return this.$el.find("li.st-open").length>0},_toggleItem:function(t){var i=t.find("div.st-content");t.hasClass("st-open")?(this.current=-1,i.stop(!0,!0).fadeOut(this.options.speed),t.removeClass("st-open").stop().animate({height:t.data("originalHeight")},this.options.speed,this.options.easing)):(this.current=t.index(),i.stop(!0,!0).fadeIn(this.options.speed),t.addClass("st-open").stop().animate({height:t.data("originalHeight")+i.outerHeight(!0)},this.options.speed,this.options.easing),this._scroll(this))},_scroll:function(t){var e;e=-1!==(t=t||this).current?t.current:t.$el.find("li.st-open:last").index(),i("html, body").stop().animate({scrollTop:t.options.oneOpenedItem?t.$items.eq(e).data("offsetTop"):t.$items.eq(e).offset().top},t.options.scrollSpeed,t.options.scrollEasing)}};var o=function(t){this.console&&console.error(t)};i.fn.accordion=function(t){if("string"==typeof t){var e=Array.prototype.slice.call(arguments,1);this.each(function(){var n=i.data(this,"accordion");n?i.isFunction(n[t])&&"_"!==t.charAt(0)?n[t].apply(n,e):o("no such method '"+t+"' for accordion instance"):o("cannot call methods on accordion prior to initialization; attempted to call method '"+t+"'")})}else this.each(function(){i.data(this,"accordion")||i.data(this,"accordion",new i.Accordion(t,this))});return this}}(window,jQuery);