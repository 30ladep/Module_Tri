$(document).ready(function() {

    /*menu fiexd */
    var el = document.getElementById('menu-md');
    var img_md = document.getElementById('img-md');
    var img_scroll = document.getElementById('img-scroll');

    function resizeScrollTop() {
        if (document.documentElement.scrollTop > 20) {
            el.animate([{ height: '85px' }, { height: '74px' }], 200);
            el.classList.add("show-menu-mobile")
            el.classList.remove("menu-scroll");
            img_md.style.display = "none";
            img_scroll.style.display = "block";

        } else {
            el.animate([{ height: '74px' }, { height: '85px' }], 200);
            el.classList.add("menu-scroll")
            el.classList.remove("show-menu-mobile");
            img_md.style.display = "block";
            img_scroll.style.display = "none";
            setTimeout(function() {

            }, 201)
        }

    }
    resizeScrollTop();
    var check = true;
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 20 && check == true) {
            resizeScrollTop();
            check = false;
        }
        if (($(window).scrollTop() < 20 && check == false)) {
            resizeScrollTop();
            check = true;
        }

    })

});

/*show items menu moblie */
function hiddenAll(icon, itemshow) {

    itemshow.animate([{ height: 115 + 'px' }, { height: 0 }], 200);
    itemshow.style.height = "0px";
    icon.animate([{ transform: 'rotate(44deg)' }, { transform: 'rotate(0deg)' }], 200);
    icon.style.transform = 'rotate(0deg)';
}

function showAll(icon, itemshow) {
    itemshow.animate([{ height: 0 }, { height: 115 + 'px' }], 200);
    itemshow.style.height = "115px";
    icon.animate([{ transform: 'rotate(0deg)' }, { transform: 'rotate(44deg)' }], 200);
    icon.style.transform = 'rotate(44deg)';
}
var tempItems;
var tempIcon;
var dem = 0;

function showItem(locatonicon, showitem) {
    var icon = document.getElementById(locatonicon);
    var itemshow = document.getElementById(showitem);
    if (dem == 0) {
        showAll(icon, itemshow);
        tempItems = showitem;
        tempIcon = locatonicon;
        dem++;
    } else {
        if (tempItems == showitem) {
            hiddenAll(icon, itemshow);
            dem = 0;
        } else {
            showAll(icon, itemshow);
            hiddenAll(document.getElementById(tempIcon), document.getElementById(tempItems));
            tempItems = showitem;
            tempIcon = locatonicon;
            dem++;
        }
    }
}


/*show menu mobile*/

function hiddenMenu() {
    var el = document.getElementById('menumobile');
    var spmenu = document.getElementById('suportmenu');
    spmenu.style.display = "none";
    el.animate([{ right: 0 }, { right: -325 + 'px' }], 200);
    el.style.right = "-325px";
    if (tempItems != null) {
        hiddenAll(document.getElementById(tempIcon), document.getElementById(tempItems));
        tempItems = null;
        dem = 0;
    }
}

function showmenu() {
    var spmenu = document.getElementById('suportmenu');
    spmenu.style.display = "block";
    var el = document.getElementById('menumobile');
    el.animate([{ right: -325 + 'px' }, { right: 0 }], 200);
    el.style.right = "0px";
}


/*hidden menu with background */
function hiddenMenuMobile() {
    if (tempItems != null) {
        hiddenAll(document.getElementById(tempIcon), document.getElementById(tempItems));
        tempItems = null;
        dem = 0;
    }
    hiddenMenu();
}

window.onload = function() {
    setTimeout("switch_Image()", 3000);
}
var current = 0;
var num_image = 3;

function switch_Image() {
    current++;
    document.getElementById("slide").style.backgroundImage = 'url(images/bg-' + current + '.png)';
    if (current < num_image) {
        setTimeout("switch_Image()", 5000);
    } else if (current == num_image) {
        current = 0;
        setTimeout("switch_Image()", 5000);
    }
}