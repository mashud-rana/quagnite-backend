/*!
* jquery.counterup.js 1.0
*
* Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
* Released under the GPL v2 License
*
* Date: Nov 26, 2013
// */
// (function (e) { "use strict"; e.fn.counterUp = function (t) { var n = e.extend({ time: 400, delay: 10 }, t); return this.each(function () { var t = e(this), r = n, i = function () { var e = [], n = r.time / r.delay, i = t.text(), s = /[0-9]+,[0-9]+/.test(i); i = i.replace(/,/g, ""); var o = /^[0-9]+$/.test(i), u = /^[0-9]+\.[0-9]+$/.test(i), a = u ? (i.split(".")[1] || []).length : 0; for (var f = n; f >= 1; f--) { var l = parseInt(i / n * f); u && (l = parseFloat(i / n * f).toFixed(a)); if (s) while (/(\d+)(\d{3})/.test(l.toString())) l = l.toString().replace(/(\d+)(\d{3})/, "$1,$2"); e.unshift(l) } t.data("counterup-nums", e); t.text("0"); var c = function () { t.text(t.data("counterup-nums").shift()); if (t.data("counterup-nums").length) setTimeout(t.data("counterup-func"), r.delay); else { delete t.data("counterup-nums"); t.data("counterup-nums", null); t.data("counterup-func", null) } }; t.data("counterup-func", c); setTimeout(t.data("counterup-func"), r.delay) }; t.waypoint(i, { offset: "100%", triggerOnce: !0 }) }) } })(jQuery);

function VanillaCounter() {
    let elements = document.querySelectorAll('[data-vanilla-counter]')
    elements.forEach(i => {
        let data = {
            startAt: parseInt(i.getAttribute('data-start-at')),
            endAt: parseInt(i.getAttribute('data-end-at')),
            delay: parseInt(i.getAttribute('data-delay')) || 0,
            format: '{}',
            time: parseInt(i.getAttribute('data-time')) || 1000
        }
        if (i.getAttribute('data-format')) {
            data.format = i.getAttribute('data-format')
        } else if (i.innerHTML != "") {
            data.format = i.innerHTML
        }
        console.log(data.format)
        if (data.startAt == null) {
            throw new Error('data-start-at attribute is required')
        }
        if (data.endAt == null) {
            throw new Error('data-end-at attribute is required')
        }
        var counter = data.startAt
        i.innerHTML = data.format.replace('{}', counter)
        var intervalTime = Math.ceil(data.time / (data.endAt - data.startAt))
        setTimeout(() => {
            var interval = setInterval(intervalHandler, intervalTime)
            function intervalHandler() {
                counter += (data.endAt - data.startAt) / Math.abs(data.endAt - data.startAt) * 1
                i.innerHTML = data.format.replace('{}', counter)
                if (counter == data.endAt) {
                    clearInterval(interval)
                }
            }
        }, data.delay)
    })
}

window.VanillaCounter = VanillaCounter