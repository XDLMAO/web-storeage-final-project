// var MIN_SSKEYWORD_LENGTH = 2, searching = !1, timmer, json = {}, globalEvent = {};

function suggestSearch(n) {
    console.log('AJAHJAHJH');

    var i, t, r, u;
    if (
        (n.preventDefault(),
            (i = "#search-result"),
            (t = $("#skw").val()),
            $(".header__search .dropdownsearch").length > 0
                ? ((r = $(".header__search .dropdownsearch a").data("id")),
                    r == 1 &&
                    (t = t
                        .toString()
                        .replace(
                            /:|;|!|@@|#|\$|%|\^|&|\*|'|"|>|<|,|\?|`|~|\+|=|\(|\)|{|}|\[|\]|\\|\|/gi,
                            ""
                        )))
                : (t = t
                    .toString()
                    .replace(
                        /:|;|!|@@|#|\$|%|\^|&|\*|'|"|>|<|,|\?|`|~|\+|=|_|-|\(|\)|{|}|\[|\]|\\|\|/gi,
                        ""
                    )),
            (u = t.trim().toLowerCase()),
            u.length < MIN_SSKEYWORD_LENGTH)
    ) {
        $(i).html("");
        return;
    }
    if (n.which == 40 || n.which == 38) {
        UpDownSuggest(n.which);
        return;
    }
    if (n.which == 13) {
        if ($("#search-result ul.suggest li.selected").length > 0) {
            location.href = $("#search-result ul.suggest li.selected a").attr("href");
            return;
        }
    } else
        n.type == "submit"
            ? goToSearchPage(t)
            : isHasSub ||
            searching ||
            (clearTimeout(timmer),
                (timmer = setTimeout(function () {
                    callSuggestSearch(n);
                }, 600)));
}

function UpDownSuggest(n) {
    var t = "#search-result ul.suggest li:not(.ttitle)",
        i;
    n == 40
        ? $(t + ".selected").length == 0
            ? $(t + ":first").addClass("selected")
            : $(t).last().hasClass("selected")
                ? ($(t + ".selected").removeClass("selected"),
                    $(t + ":first").addClass("selected"))
                : ((i = $(t + ".selected").next()),
                    i.hasClass("ttitle") && (i = i.next()),
                    $(t + ".selected").removeClass("selected"),
                    i.addClass("selected"))
        : n == 38 &&
        ($(t + ".selected").length == 0
            ? $(t + ":last").addClass("selected")
            : $(t).first().hasClass("selected")
                ? ($(t + ".selected").removeClass("selected"),
                    $(t + ":last").addClass("selected"))
                : ((i = $(t + ".selected").prev()),
                    i.hasClass("ttitle") && (i = i.prev()),
                    $(t + ".selected").removeClass("selected"),
                    i.addClass("selected")));
    return;
}
function callSuggestSearch(n) {
    if (!searching) {
        searching = !0;
        n.preventDefault();
        var r = $("#skw")
            .val()
            .replace(
                /:|;|!|@@|#|\$|%|\^|&|\*|'|"|>|<|,|\?|`|~|\+|=|_|-|\(|\)|{|}|\[|\]|\\|\|/gi,
                ""
            ),
            i = r.trim().toString().toLowerCase(),
            t = $("#search-result");
        if (i.length < MIN_SSKEYWORD_LENGTH) {
            t.html("");
            searching = !1;
            return;
        }
        i.length >= MIN_SSKEYWORD_LENGTH &&
            ($.ajax({
                url: urlRoot + "/api/SuggestSearch.php",
                type: "GET",
                data: { keywords: i },
                cache: !1,
                beforeSend: function () { },
                success: function (n) {
                    n != "" ? t.html(n) : t.html("");
                    $("#search-result li").length > 0 ? t.show() : t.hide();
                },
                error: function () { },
            }),
                (searching = !1));
    }
}