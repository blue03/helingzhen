! function(e) {
    e.fn.we7_check = function() {
        function c(c, t, i) {
            c ? e("body").find('[name="' + t + '"]').each(function() {
                e(this).is(":checked") ? e(this).prev(".we7-option").addClass("checked") : e(this).prev(".we7-option").removeClass("checked")
            }) : i.is(":checked") ? i.prev(".we7-option").addClass("checked") : i.prev(".we7-option").removeClass("checked")
        }
        e(this).each(function() {
            var t = e(this),
                i = t.attr("type"),
                s = t.attr("class") ? " " + t.attr("class") : "",
                o = t.attr("style") ? 'style="' + t.attr("style") + '"' : "",
                n = t.prev(".we7-option").length,
                a = t.parent("label").html(),
                h = t.attr("name"),
                d = t.is(":checked") || t.attr("we7-check-checked") ? " checked " : "",
                r = t.is(":disabled") ? " disabled " : "",
                l = t.attr("we7-check-all") || "radio" == i;
            n || (t.before('<div class="we7-option we7-' + i + "-option" + d + r + s + '"' + o + "></div>"), t.on("click", function() {
                c(l, h, t)
            }), t.on("change", function() {
                c(l, h, t)
            })), a || t.prev('.we7-option:not(".disable")').on("click", function() {
                e(this).hasClass("checked") == e(this).next(":radio,:checkbox").is(":checked") ? (t.trigger("click"), "radio" == i && t.trigger("click")) : e(this).toggleClass("checked")
            })
        })
    }
}(jQuery);