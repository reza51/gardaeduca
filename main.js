var swiper = new Swiper(".home ", {
    spaceBetween : 30,
    centeredSlides: true,
    autoplay : {
        delay: 6500,
        disableOnInteraction: false,
    },
    pagination:{
        el:".swiper-pagination",
        clickable:true,
    },
});


// Swiper
var swiper = new Swiper(".coming-container ", {
    spaceBetween : 20,
    loop: true,
    autoplay:{
        delay: 55000,
        disableOnInteraction: false,
    },
    centeredSlides:true,
    breakpoint: {
        0:{
            slidesPerView: 2,
        },
        568:{
            slidesPerView: 3,
        },
        768:{
            slidesPerView: 4,
        },
        968:{
            slidesPerView: 5,
        },
    },
}); 