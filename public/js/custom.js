const menu_btn = document.querySelector("button.mobile-menu-button");

const menu = document.querySelector(".mobile-menu");

menu_btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

//User icon dropdown
const user_btn = document.querySelector("button.user-button");

const user_menu = document.querySelector(".user-menu");

if (user_btn) {
    user_btn.addEventListener("click", () => {
        user_menu.classList.toggle("hidden");
    });
}

//Filter toggle
const filter_btn = document.querySelector("button.filter-btn");

const filter_menu = document.querySelector(".filter-menu");

if (filter_btn) {
    filter_btn.addEventListener("click", () => {
        filter_menu.classList.toggle("hidden");
    });
}

//click outside to hide menu
document.addEventListener("mouseup", function (e) {
    if (user_menu) {
        if (!user_menu.contains(e.target)) {
            user_menu.classList.add("hidden");
        }
    }

    if (!menu.contains(e.target)) {
        menu.classList.add("hidden");
    }

    if (filter_menu) {
        if (!filter_menu.contains(e.target)) {
            filter_menu.classList.add("hidden");
        }
    }
});
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 2,

    breakpoints: {
        640: {
            slidesPerView: 5,
        },
        768: {
            slidesPerView: 6,
        },
        1024: {
            slidesPerView: 7,
        },
    },
});

var swiper = new Swiper(".product_card_swiper", {
    // slidesPerView: 1,
    // spaceBetween: 15,
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },

    // breakpoints: {
    //   640: {
    //     slidesPerView: 2,
    //   },
    // },

    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

// product-details-tab
function changeAtiveTab(event, tabID) {
    let element = event.target;
    while (element.nodeName !== "A") {
        element = element.parentNode;
    }
    ulElement = element.parentNode.parentNode;
    aElements = ulElement.querySelectorAll("li > a");
    tabContents = document
        .getElementById("tabs-id")
        .querySelectorAll(".tab-content > div");
    for (let i = 0; i < aElements.length; i++) {
        aElements[i].classList.remove("border-b-2");
        tabContents[i].classList.add("hidden");
        tabContents[i].classList.remove("block");
    }

    element.classList.add("border-b-2");
    document.getElementById(tabID).classList.remove("hidden");
    document.getElementById(tabID).classList.add("block");
}

$(document).ready(function () {
    $(".slider_for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".slider_nav",
    });
    $(".slider_nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".slider_for",
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                },
            },

            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 3,
                },
            },

            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 2,
                },
            },

            {
                breakpoint: 250,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});
