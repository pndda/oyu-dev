
function openMenu () {
    console.log('clicked');
    mobileNav.classList.toggle('mobile-nav__active');
    hamburger.classList.toggle('is-active');
}

var hamburger = document.querySelector('.hamburger');
var mobileNav = document.querySelector('.mobile-nav');
hamburger.addEventListener('click', openMenu);


// function openSearch () {
//     if(!document.body.classList.contains('home')) {
//         console.log('clicked on search');
//         searchContainer.classList.toggle('search-container-is-active');
//     }
// }

// var searchContainer = document.querySelector('.search-container');
// var search = document.querySelector('.nav__list__item-searchbar');
// search.addEventListener('click', openSearch);


// function openSearchmobile () {
//     if(!document.body.classList.contains('home')) {
//         console.log('clicked on search');
//         searchContainer.classList.toggle('search-container-is-active');
//     }
// }

// var searchMobile = document.querySelector('.mobile-navbar__list__item-search');
// searchMobile.addEventListener('click', openSearch);


// var searchClose = document.querySelector('.search__close');
// searchClose.addEventListener('click', openSearch);