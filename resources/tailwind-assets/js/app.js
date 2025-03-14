import.meta.glob([
    //'../teste/**',
    '../../../node_modules/animate.css/animate.min.css',
    '../../../node_modules/tobii/dist/css/tobii.min.css',
    '../../../node_modules/tobii/dist/js/tobii.min.js',
    '../../../node_modules/tiny-slider/dist/tiny-slider.css',
    '../../../node_modules/tiny-slider/dist/min/tiny-slider.js',
    '../../../node_modules/wow.js/dist/*.js',
    '../../../node_modules/feather-icons/dist/feather.min.js',
    '../../../node_modules/jarallax/dist/jarallax.min.js',
    '../../../node_modules/axios/dist/axios.min.js',
    '../../../node_modules/choices.js/public/assets/styles/choices.min.css',
    '../../../node_modules/choices.js/public/assets/scripts/choices.min.js',
], { as: 'url'});

/* Template Name: Techwind - Multipurpose Tailwind CSS Landing Page Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 1.8.0
   Created: May 2022
   File Description: Main JS file of the template
*/


/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Loader               *
 *     02.  Toggle Menus         *
 *     03.  Menu Active          *
 *     04.  Clickable Menu       *
 *     05.  Menu Sticky          *
 *     06.  Back to top          *
 *     07.  Active Sidebar       *
 *     08.  Feather icon         *
 *     09.  Small Menu           *
 *     10.  Wow Animation JS     *
 *     11.  Contact us           *
 *     12.  Dark & Light Mode    *
 *     13.  LTR & RTL Mode       *
 ================================*/


window.addEventListener('load', fn, false)

//  window.onload = function loader() {
function fn() {
    // Preloader
    if (document.getElementById('preloader')) {
        setTimeout(() => {
            document.getElementById('preloader').style.visibility = 'hidden';
            document.getElementById('preloader').style.opacity = '0';
        }, 350);
    }
    // Menus
    activateMenu(); // TODO ver se isto é preciso
}

//Menu
/*********************/
/* Toggle Menu */
/*********************/
window.toggleMenu = function toggleMenu() {
    document.getElementById('isToggle').classList.toggle('open');
    var isOpen = document.getElementById('navigation')
    if (isOpen.style.display === "block") {
        isOpen.style.display = "none";
    } else {
        isOpen.style.display = "block";
    }
};
/*********************/
/*    Menu Active    */
/*********************/
window.getClosest = function getClosest(elem, selector) {

    // Element.matches() polyfill
    if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.matchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector ||
            Element.prototype.oMatchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            function (s) {
                var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                    i = matches.length;
                while (--i >= 0 && matches.item(i) !== this) {}
                return i > -1;
            };
    }

    // Get the closest matching element
    for (; elem && elem !== document; elem = elem.parentNode) {
        if (elem.matches(selector)) return elem;
    }
    return null;

};

window.activateMenu = function activateMenu() {
    var menuItems = document.getElementsByClassName("sub-menu-item");
    if (menuItems) {

        var matchingMenuItem = null;
        for (var idx = 0; idx < menuItems.length; idx++) {
            if (menuItems[idx].href === window.location.href) {
                matchingMenuItem = menuItems[idx];
            }
        }

        if (matchingMenuItem) {
            matchingMenuItem.classList.add('active');


            var immediateParent = getClosest(matchingMenuItem, 'li');

            if (immediateParent) {
                immediateParent.classList.add('active');
            }

            var parent = getClosest(immediateParent, '.child-menu-item');
            if(parent){
                parent.classList.add('active');
            }

            var parent = getClosest(parent || immediateParent , '.parent-menu-item');

            if (parent) {
                parent.classList.add('active');

                var parentMenuitem = parent.querySelector('.menu-item');
                if (parentMenuitem) {
                    parentMenuitem.classList.add('active');
                }

                var parentOfParent = getClosest(parent, '.parent-parent-menu-item');
                if (parentOfParent) {
                    parentOfParent.classList.add('active');
                }
            } else {
                var parentOfParent = getClosest(matchingMenuItem, '.parent-parent-menu-item');
                if (parentOfParent) {
                    parentOfParent.classList.add('active');
                }
            }
        }
    }
}
/*********************/
/*  Clickable manu   */
/*********************/
if (document.getElementById("navigation")) {
    var elements = document.getElementById("navigation").getElementsByTagName("a");
    for (var i = 0, len = elements.length; i < len; i++) {
        elements[i].onclick = function (elem) {
            if (elem.target.getAttribute("href") === "javascript:void(0)") {
                var submenu = elem.target.nextElementSibling.nextElementSibling;
                submenu.classList.toggle('open');
            }
        }
    }
}
/*********************/
/*   Menu Sticky     */
/*********************/
window.windowScroll = function windowScroll() {
    const navbar = document.getElementById("topnav");
    const languagebar = document.getElementById("languagebar");
    const languagebar_sm = document.getElementById("languagebar_sm");


    if (navbar != null) {
        if (
            document.body.scrollTop >= 74 ||
            document.documentElement.scrollTop >= 74
        //Scrol down
        ) {
            //navbar.classList.add("nav-sticky");
            navbar.classList.add("fixed");
            // languagebar.classList.add("hidden");
            languagebar.classList.remove("lg:block");
            // languagebar_sm.classList.remove("hidden");


        //Scroll up
        } else {
            //navbar.classList.remove("nav-sticky");
            // languagebar.classList.remove("hidden");
            languagebar.classList.add("lg:block");
        }
    }
}

window.addEventListener('scroll', (ev) => {
    ev.preventDefault();
    windowScroll();
})
/*********************/
/*    Back To TOp    */
/*********************/

window.onscroll = function () {
    scrollFunction();
};

window.scrollFunction = function scrollFunction() {
    var mybutton = document.getElementById("back-to-top");
    if(mybutton!=null){
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.classList.add("block");
            mybutton.classList.remove("hidden");
        } else {
            mybutton.classList.add("hidden");
            mybutton.classList.remove("block");
        }
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/*********************/
/*  Active Sidebar   */
/*********************/
(function () {
    var current = location.pathname.substring(location.pathname.lastIndexOf('/') + 1);;
    if (current === "") return;
    var menuItems = document.querySelectorAll('.sidebar-nav a');
    for (var i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].parentElement.className += " active";
        }
    }
})();

/*********************/
/*   Feather Icons   */
/*********************/
feather.replace();

/*********************/
/*     Small Menu    */
/*********************/
try {
    var spy = new Gumshoe('#navmenu-nav a');
} catch (err) {

}

/*********************/
/*      WoW Js       */
/*********************/
try {
    new WOW().init();
} catch (error) {

}

/*************************/
/*      Contact Js       */
/*************************/

try {
    function validateForm() {
        var name = document.forms["myForm"]["name"].value;
        var email = document.forms["myForm"]["email"].value;
        var subject = document.forms["myForm"]["subject"].value;
        var comments = document.forms["myForm"]["comments"].value;
        document.getElementById("error-msg").style.opacity = 0;
        document.getElementById('error-msg').innerHTML = "";
        if (name == "" || name == null) {
            document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Name*</div>";
            fadeIn();
            return false;
        }
        if (email == "" || email == null) {
            document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Email*</div>";
            fadeIn();
            return false;
        }
        if (subject == "" || subject == null) {
            document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Subject*</div>";
            fadeIn();
            return false;
        }
        if (comments == "" || comments == null) {
            document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Comments*</div>";
            fadeIn();
            return false;
        }
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("simple-msg").innerHTML = this.responseText;
                document.forms["myForm"]["name"].value = "";
                document.forms["myForm"]["email"].value = "";
                document.forms["myForm"]["subject"].value = "";
                document.forms["myForm"]["comments"].value = "";
            }
        };
        xhttp.open("POST", "php/contact.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("name=" + name + "&email=" + email + "&subject=" + subject + "&comments=" + comments);
        return false;
    }

    function fadeIn() {
        var fade = document.getElementById("error-msg");
        var opacity = 0;
        var intervalID = setInterval(function () {
            if (opacity < 1) {
                opacity = opacity + 0.5
                fade.style.opacity = opacity;
            } else {
                clearInterval(intervalID);
            }
        }, 200);
    }
} catch (error) {

}


/*********************/
/* Dark & Light Mode */
/*********************/
try {
    function changeTheme(e){
        e.preventDefault()
        const htmlTag = document.getElementsByTagName("html")[0]

        if (htmlTag.className.includes("dark")) {
            htmlTag.className = 'light';
            document.cookie = "darkmode=false; path=/"; // Set a cookie to remember the preference
        } else {
            htmlTag.className = 'dark';
            document.cookie = "darkmode=true; path=/"; // Set a cookie to remember the preference
        }
    }

    const switcher = document.getElementById("theme-mode")
    switcher?.addEventListener("click" ,changeTheme )

    const chk = document.getElementById('chk');

    chk.addEventListener('change',changeTheme);
} catch (err) {

}


/*********************/
/* LTR & RTL Mode */
/*********************/
try{
    const htmlTag = document.getElementsByTagName("html")[0]
    function changeLayout(e){
        e.preventDefault()
        const switcherRtl = document.getElementById("switchRtl")
        if(switcherRtl.innerText === "LTR"){
            htmlTag.dir = "ltr"
        }
        else{
            htmlTag.dir = "rtl"
        }

    }
    const switcherRtl = document.getElementById("switchRtl")
    switcherRtl?.addEventListener("click" ,changeLayout )
}
catch(err){}

// Dashboard VOTES/EDITION chart
window.statistics = function statistics() {
    try{
        var mainchartOptions = {
        series: [{
                name: 'Votes',
                data: JSON.parse(editionVotes),
        }],
        chart: {
            type: 'bar',
            height: 420,
            toolbar: {
                show: false,
                autoSelected: 'zoom'
            },
        },
        grid: {
            strokeDashArray: 5,

        },
        plotOptions: {
            bar: {
                borderRadius: 5,
                horizontal: false,
                columnWidth: '40%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        colors: ['#7393B3', '#169EDA'],
        xaxis: {
                categories: JSON.parse(editionNames),
        },
        yaxis: {
            title: {
                text: 'Votes / Edition',

                style: {
                    colors: ['#8492a6'],
                    fontSize: '16px',
                    fontFamily: 'Nunito, sans-serif',
                    fontWeight: 600,
                },
            },
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val
                }
            }
        }
        };

            var categoriesChartOptions = {
              series: JSON.parse(categoryVotes),
              labels: JSON.parse(categoryNames),
              chart: {
              width: 399,
              type: 'pie',
            },
            plotOptions: {
              pie: {
                startAngle: -90,
                endAngle: 270
              }
            },
            dataLabels: {
              enabled: false
            },
            fill: {
              type: 'gradient',
            },
            legend: {
              formatter: function(val, opts) {
                return val + " - " + opts.w.globals.series[opts.seriesIndex]
              }
            },
            responsive: [{
              breakpoint: 480,
              options: {
                chart: {
                  width: 500
                },
                legend: {
                  position: 'bottom'
                }
              }
            }]
        };

        var genderChartOptions = {
              series: JSON.parse(genderVotes),
              labels: JSON.parse(genderNames),
              chart: {
              width: 399,
              type: 'donut',
            },
            plotOptions: {
              pie: {
                startAngle: -90,
                endAngle: 270
              }
            },
            dataLabels: {
              enabled: false
            },
            fill: {
              type: 'gradient',
            },
            legend: {
              formatter: function(val, opts) {
                return val + " - " + opts.w.globals.series[opts.seriesIndex]
              }
            },
            responsive: [{
              breakpoint: 1090,
              options: {
                chart: {
                  width: 500
                },
                legend: {
                  position: 'bottom'
                }
              }
            }]
        };

            var genderChart = new ApexCharts(document.querySelector("#genderChart"), genderChartOptions);
            var categoriesChart = new ApexCharts(document.querySelector("#categoriesChart"), categoriesChartOptions);
            var mainchart = new ApexCharts(document.querySelector("#mainchart"), mainchartOptions);
            mainchart.render();
            genderChart.render();
            categoriesChart.render();


    }catch(err){
        console.log(err)
    }
}



