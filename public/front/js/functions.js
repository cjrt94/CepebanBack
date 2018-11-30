$(window).load(function() {
    $("#mainIndex");
    var e = function() {
        function e(e) {
            e = window.event || e;
            var a = Math.max(-1, Math.min(1, e.wheelDelta || -e.detail));
		//document.documentElement.scrollLeft -= 60 * a, document.body.scrollLeft -= 60 * a, document.documentElement.scrollLeft >= 200 || document.body.scrollLeft >= 200 ? $(".side-nav").addClass("sombreado") : $(".side-nav").removeClass("sombreado"), e.preventDefault()
        }

        function a(e) {
            e = window.event || e;
            var a = Math.max(-1, Math.min(1, e.wheelDelta || -e.detail));
            //document.documentElement.scrollTop -= 20 * a, document.body.scrollTop -= 20 * a, e.preventDefault()
        }
        $(window).width() > 800 ? (window.addEventListener ? (window.addEventListener("mousewheel", e, !1), window.addEventListener("DOMMouseScroll", e, !1)) : window.attachEvent("onmousewheel", e), e()) : (window.addEventListener ? (window.addEventListener("mousewheel", a, !1), window.addEventListener("DOMMouseScroll", a, !1)) : window.attachEvent("onmousewheel", a), a())
    };
    e();
    var a = function() {
            var e = $(window).height();
            $(".section").css({
                height: e
            })
        },
        o = function() {
            var o, t, n, r, s, i, l, c, d, w, u, m, p, T, g, x;
            Modernizr.touch ? $("#logoMain").css({
                transform: "translate3d(0px,0px,0px)"
            }) : (o = new ScrollMagic.Controller({
                vertical: !1
            }), TweenMax.fromTo("#logoMain", 2, {
                css: {
                    "-webkit-transform": "translate3d(-1000px, 0px, 0px)"
                },
                autoAlpha: 0,
                ease: Linear.easeNone
            }, {
                css: {
                    "-webkit-transform": "translate3d(0px, 0px, 0px)"
                },
                autoAlpha: 1,
                ease: Linear.easeNone
            }), TweenMax.fromTo("#decorativeWelcome", .6, {
                autoAlpha: 0,
                bottom: "-20%",
                ease: Linear.easeNone
            }, {
                autoAlpha: 1,
                bottom: "-5%",
                ease: Linear.easeNone
            }).delay(3.2), t = TweenMax.fromTo("#lat2", 1, {
                opacity: 0,
                ease: Power2.easeInOut
            }, {
                opacity: 1,
                ease: Power2.easeInOut
            }), n = TweenMax.fromTo(".lat01", 1, {
                opacity: 0,
                marginTop: "50px",
                ease: Power2.easeInOut
            }, {
                opacity: 1,
                marginTop: "0px",
                ease: Power2.easeInOut
            }).delay(7), r = TweenMax.fromTo(".lat02", 1, {
                opacity: 0,
                marginTop: "50px",
                ease: Power2.easeInOut
            }, {
                opacity: 1,
                marginTop: "0px",
                ease: Power2.easeInOut
            }).delay(4), s = TweenMax.fromTo(".lat03", 1, {
                opacity: 0,
                marginTop: "50px",
                ease: Power2.easeInOut
            }, {
                opacity: 1,
                marginTop: "0px",
                ease: Power2.easeInOut
            }).delay(1), i = TweenMax.fromTo(".lat04", 1, {
                opacity: 0,
                marginTop: "50px",
                ease: Power2.easeInOut
            }, {
                opacity: 1,
                marginTop: "0px",
                ease: Power2.easeInOut
            }).delay(7), l = TweenMax.fromTo(".lat05", 1, {
                opacity: 0,
                marginTop: "50px",
                ease: Power2.easeInOut
            }, {
                opacity: 1,
                marginTop: "0px",
                ease: Power2.easeInOut
            }).delay(4), c = TweenMax.fromTo(".lat06", 1, {
                opacity: 0,
                marginTop: "50px",
                ease: Power2.easeInOut
            }, {
                opacity: 1,
                marginTop: "0px",
                ease: Power2.easeInOut
            }).delay(1), d = TweenMax.fromTo("#textVariedad .mask", 1, {
                left: "0%",
                ease: Power2.easeInOut
            }, {
                left: "100%",
                ease: Power2.easeInOut
            }), w = TweenMax.fromTo("#decorativeRecetas", 1, {
                autoAlpha: 0,
                bottom: "-15%",
                ease: Back.easeOut
            }, {
                autoAlpha: 1,
                bottom: "-5%",
                ease: Back.easeOut
            }), u = TweenMax.fromTo(".textDir", 1, {
                autoAlpha: 0,
                ease: Power2.easeInOut
            }, {
                autoAlpha: 1,
                ease: Power2.easeInOut
            }), m = TweenMax.fromTo(".textTel", 1, {
                autoAlpha: 0,
                ease: Power2.easeInOut
            }, {
                autoAlpha: 1,
                ease: Power2.easeInOut
            }), p = TweenMax.fromTo(".textCor", 1, {
                autoAlpha: 0,
                ease: Power2.easeInOut
            }, {
                autoAlpha: 1,
                ease: Power2.easeInOut
            }), TweenMax.fromTo("#sectionWelcome .text-welcome", .5, {
                autoAlpha: 0,
                ease: Linear.easeNone
            }, {
                autoAlpha: 1,
                ease: Linear.easeNone
            }).delay(3.7), T = TweenMax.fromTo("#sectionRecetas .text-welcome", .6, {
                css: {
                    "-webkit-transform": "translate3d(300px, 0px, 0px)"
                },
                ease: Linear.easeNone
            }, {
                css: {
                    "-webkit-transform": "translate3d(0px, 0px, 0px)"
                },
                ease: Linear.easeNone
            }), g = TweenMax.fromTo("#TextSabias ", .6, {
                scale: 2,
                autoAlpha: 0,
                ease: Circ.easeInOut
            }, {
                scale: 1,
                autoAlpha: 1,
                ease: Circ.easeInOut
            }), TweenMax.fromTo("#sectionWelcome", 1.5, {
                css: {
                    "-webkit-transform": "translate3d(0px, -100%, 0px)"
                },
                autoAlpha: 0,
                ease: Circ.easeIn
            }, {
                css: {
                    "-webkit-transform": "translate3d(0px, 0px, 0px)"
                },
                autoAlpha: 1,
                ease: Circ.easeInOut
            }).delay(2), x = TweenMax.fromTo(".contentCarousel", 1, {
                autoAlpha: 0,
                marginTop: "50px",
                ease: Power2.easeInOut
            }, {
                autoAlpha: 1,
                marginTop: "0px",
                ease: Power2.easeInOut
            }), new ScrollMagic.Scene({
                triggerElement: "#sabiasdetails",
                duration: 500
            }).setTween(t).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#carImg",
                duration: 800
            }).setTween(n).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#carImg",
                duration: 800
            }).setTween(r).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#carImg",
                duration: 800
            }).setTween(s).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#TextSabias",
                duration: 800
            }).setTween(i).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#TextSabias",
                duration: 800
            }).setTween(l).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#TextSabias",
                duration: 800
            }).setTween(c).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#lat3",
                duration: 250
            }).setTween(d).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#lat3",
                duration: 250
            }).setTween(x).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#sectionRecetas",
                duration: 500
            }).setTween(w).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#decorativeRecetas",
                duration: 100
            }).setTween(u).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#decorativeRecetas",
                duration: 300
            }).setTween(m).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#decorativeRecetas",
                duration: 500
            }).setTween(p).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#sectionRecetas",
                duration: 400
            }).setTween(T).addTo(o), new ScrollMagic.Scene({
                triggerElement: "#decorativeWelcome",
                duration: 400
            }).setTween(g).addTo(o), $(window).resize(function() {
                a(), e()
            }))
        };
    $.when(setTimeout(function() {
        $("body").addClass("loaded")
    }, 1e3)).done([o()]), a(), $(".owl-carousel").owlCarousel({
        autoplay: !0,
        autoplayTimeout: 4e3,
        loop: !1,
        responsiveClass: !0,
        dots: !0,
        items: 1,
        nav: !1,
        responsive: {
            0: {
                items: 1,
                nav: !1
            }
        }
    }), $("a.menu-btn").on("click", function(e) {
        e.preventDefault(), $(".navigation").addClass("nav-on"), $(".navigation").animate({
            left: "0px"
        }, 600, "swing")
    }), $(".closeBtn a").on("click", function(e) {
        e.preventDefault(), $(".navigation").animate({
            left: "-100%"
        }, 600, "swing", function() {
            $(this).removeClass("nav-on")
        })
    })
});