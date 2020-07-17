

// Instantiating the global app object
var app = {};

// jQuery('.main-menu .ul > li').mouseenter(function() {
//     console.log('menu > li');

//     var submenuHeight = jQuery(this).find('.sub-menu').height();

//     jQuery(this).height(submenuHeight);

//     console.log('submenuHeight ', submenuHeight);
// })


function resizer(media) {
    jQuery('body').removeClass(function (index, className) {
        return (className.match (/(^|\s)wmedia-\S+/g) || []).join(' ');
    });
    
    jQuery('body').addClass('wmedia-'+jQuery(window).width());

}

function resposiveMenuOpen() { console.log(' resposiveMenuOpen');
    jQuery('body').addClass('menu-active');
    jQuery('.open-menu-hamburger').hide();
    jQuery('.close-menu-hamburger').show();
}
function resposiveMenuClose() { console.log('resposiveMenuClose');
   jQuery('body').removeClass('menu-active');
   jQuery('.open-menu-hamburger').show();
   jQuery('.close-menu-hamburger').hide();
}

jQuery(window).resize(function() {
    resizer()
});

jQuery('.open-menu-hamburger ').on('click', function() {
    resposiveMenuOpen();
});
jQuery('.close-menu-hamburger ').on('click', function() {
    resposiveMenuClose();
});

jQuery('.main-menu .ul > li').on('click', function() {
   //openSubMenu();
   jQuery('.sub-menu').hide();
   jQuery(this).find('.sub-menu').show();
});

// Media Queries
// $mq-620-down: "only screen and (max-width: 620px)";
// $mq-620-up: "only screen and (min-width: 620px)";

// $mq-760-down: "only screen and (max-width: 759px)";
// $mq-760-up: "only screen and (min-width: 760px)";

// $mq-900-down: "only screen and (max-width: 899px)";
// $mq-900-up: "only screen and (min-width: 900px)";

// $mq-1000-down: "only screen and (max-width: 999px)";
// $mq-1000-up: "only screen and (min-width: 1000px)";

// $mq-1180-up: "only screen and (min-width: 1180px)";

// $mq-1400-up: "only screen and (min-width: 1400px)";

// Small devices (landscape phones, 576px and up)
// Extra small devices (portrait phones, less than 576px)
// @media (max-width: 575.98px) { ... }

// // Small devices (landscape phones, 576px and up)
// @media (min-width: 576px) and (max-width: 767.98px) { ... }

// // Medium devices (tablets, 768px and up)
// @media (min-width: 768px) and (max-width: 991.98px) { ... }

// // Large devices (desktops, 992px and up)
// @media (min-width: 992px) and (max-width: 1199.98px) { ... }

// // Extra large devices (large desktops, 1200px and up)
// @media (min-width: 1200px) { ... }