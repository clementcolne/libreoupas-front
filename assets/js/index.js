var themes = {
    "dark"  : "assets/css/dark/bootstrap.css",
    "light" : "assets/css/light/bootstrap.css"
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function addOnlyLinux() {
    if ($("#onlyLinux").prop('checked')) {
        $("#onlyWindows").prop('checked', false);
        document.cookie = "ONLY_WIN=0; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
        document.cookie = "ONLY_LINUX=1; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
    } else {
        document.cookie = "ONLY_LINUX=0; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
    }
    window.location.reload();
}

function addOnlyWindows() {
    if ($("#onlyWindows").prop('checked')) {
        $("#onlyLinux").prop('checked', false);
        document.cookie = "ONLY_WIN=1; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
        document.cookie = "ONLY_LINUX=0; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
    } else {
        document.cookie = "ONLY_WIN=0; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
    }
    window.location.reload();
}

function addOnlyFree() {
    if ($("#onlyFree").prop('checked')) {
        document.cookie = "ONLY_FREE=1; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
    } else {
        document.cookie = "ONLY_FREE=0; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
    }
    window.location.reload();
}

function addGrid() {
    if ($("#grid").prop('checked')) {
        document.cookie = "GRID=1; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
    } else {
        document.cookie = "GRID=0; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
    }
    window.location.reload();
}

function initializeCookie() {
    if (getCookie("ONLY_LINUX") == "1") {
        $("#onlyLinux").prop("checked", true);
    } else {
        $("#onlyLinux").prop("checked", false);
    }
    if (getCookie("ONLY_WIN") == "1") {
        $("#onlyWindows").prop("checked", true);
    } else {
        $("#onlyWindows").prop("checked", false);
    }
    if (getCookie("ONLY_FREE") == "1") {
        $("#onlyFree").prop("checked", true);
    } else {
        $("#onlyFree").prop("checked", false);
    }
    if (getCookie("GRID") == "1" || getCookie("GRID") == "") {
        $("#grid").prop("checked", true);
    } else {
        $("#grid").prop("checked", false);
    }
}

function reloadBar() {
    var dt = $("#navDate").text();
    var h = dt.substring(0, 2);
    var m = dt.substring(3, 5);
    if ( document.getElementsByClassName("edtCol").length <= 0) {
        $("#floatingbar").css("visibility", "hidden");
    } else {
        $("#floatingbar").css("visibility", "visible");
        var hourSize = document.getElementsByClassName("edtCol")[0].clientWidth + 1.5;
        var minSize = hourSize / 60.0;
        var start = $(".edtRow").position().left + 15;
        var min = 8;
        var max = 20;
        var nbCol = h - min;
        var current = start + nbCol * hourSize;
        current += minSize * m;
        if (h >= max) {
            current = start + (max - min) * hourSize;
        }
        if (h < min) {
            current = start;
        }
        $("#floatingbar").css("left", current + "px");
        $("#floatingbar").css("height", ($("#content-body").height() + 2 * parseInt($("#content-body").css("padding-top"))) + "px");
    }
}

$(function(){
    var cookie = getCookie("theme");
    if (cookie == "") {
        document.cookie = "theme=dark; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
    }
    var currentCSS = $('<link href="'+ themes['default'] + '" rel="stylesheet" />');
    currentCSS.appendTo('head');
    $('.theme-link').click(function() {
       var newCSS = themes[$(this).attr('data-theme')];
       currentCSS.attr('href', newCSS);
       document.cookie = "theme=" + $(this).attr('data-theme') + "; expires=Fri, 31 Dec 2100 23:59:59 GMT; path=/";
       window.location.reload();
    });
    initializeCookie();
    reloadBar();
    $(window).on('resize', function(e) {
        reloadBar();
    });
});
