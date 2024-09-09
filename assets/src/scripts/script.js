// SHOWING CHILDREN OF PARENT LIST ITEMS
// Destinations
const dropdownContent = document.querySelector(".dropdown__content-responsive");
const sidebarLi = document.querySelector(".dropdown-responsive");

sidebarLi.addEventListener("click", openDropdown);

function openDropdown() {
  dropdownContent.style.display = "block";
}

// Izbrani pateshestviya
const dropdownContent2 = document.querySelector(
  ".dropdown__content-responsive-2"
);
const sidebarLi2 = document.querySelector(".dropdown-responsive-2");

sidebarLi2.addEventListener("click", openDropdown2);

function openDropdown2() {
  dropdownContent2.style.display = "block";
}

// CLOSE AND OPEN MENU
function closeMenu() {
  sidebar.style.display = "none";
}

function showSidebar() {
  sidebar.style.display = "block";
}

const sidebar = document.querySelector(".sidebar");
const hamburgerMenu = document.querySelector(".hamburger-menu");
hamburgerMenu.addEventListener("click", showSidebar);
const xMenu = document.querySelector(".icon-x");
xMenu.addEventListener("click", closeMenu);

// import Splide from "@splidejs/splide";

// new Splide(".splide").mount();

// document.addEventListener("DOMContentLoaded", function () {
//   var splide = new Splide(".splide");
//   splide.mount();
// });

// var elms = document.getElementsByClassName("splide");

// for (var i = 0; i < elms.length; i++) {
//   new Splide(elms[i]).mount();
// }

// CAROUSEL
// const wrapper = document.querySelector("#carousel-row");
// const carouselBox = document.querySelector("#carousel-box");
// const children = wrapper.querySelectorAll(".testimonial");
// const leftArr = document.querySelector(".testimonials__arrow--left");
// const rightArr = document.querySelector(".testimonials__arrow--right");

// let counter = 0; //keeps track of how much we've moved the cards
// let infiniteCounter = 0; //helps us know if we're moving left or right

// const tabPort = window.matchMedia("(max-width: 900px)");
// const phone = window.matchMedia("(max-width: 600px)");
// const tabLand = window.matchMedia("(max-width: 1200px)");

// carouselBox.addEventListener("click", function (e) {
//   wrapper.style.transition = ".3s ease all";
//   if (e.target.classList.contains("testimonials__arrow--left")) {
//     infiniteCounter = -1;
//     if (phone.matches) {
//       counter += 107.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else if (tabPort.matches) {
//       counter += 55.3;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else if (tabLand.matches) {
//       counter += 35.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else {
//       counter += 34.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     }
//   }

//   if (e.target.classList.contains("testimonials__arrow--right")) {
//     infiniteCounter = 1;
//     if (phone.matches) {
//       counter -= 107.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else if (tabPort.matches) {
//       counter -= 55.3;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else if (tabLand.matches) {
//       counter -= 35.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else {
//       counter -= 34.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     }
//   }
// });

// const infiniteCarousel = function () {
//   wrapper.style.transition = "none";
//   counter = 0;

//   if (infiniteCounter === 1) {
//     wrapper.appendChild(wrapper.firstElementChild); //removes the first review element from the wrapper and appends it to the end
//     wrapper.style.transform = `translateX(0%)`; //positioning the carousel as if the first review is the current one
//   }

//   if (infiniteCounter === -1) {
//     wrapper.style.transform = `translateX(0%)`; //positioning the carousel as if the last review is the current one
//     wrapper.prepend(wrapper.lastElementChild); //removes the last review element from the wrapper and prepends it to the beginning
//   }
// };

// wrapper.addEventListener("transitionend", infiniteCarousel);

// STICKY NAV
$(document).ready(function () {
  // var y = window.matchMedia("(max-width: 768px)");

  $(".js--nav").waypoint(function (direction) {
    if (direction == "down") {
      $("nav").addClass("sticky");
    } else {
      $("nav").removeClass("sticky");
    }
  });

  // const nav = document.querySelector(".nav");

  // if (tabPort.matches) {
  //   nav.classList.add("sticky");
  // }

  // $(".js--services").waypoint(function (direction) {
  //   if (direction == "down") {
  //     $(".sticky ul li:first-child").addClass("nav-link");
  //   } else {
  //     $(".sticky ul li:first-child").removeClass("nav-link");
  //   }
  // });

  // $(".js--portfolio").waypoint(function (direction) {
  //   if (direction == "down") {
  //     $(".sticky ul li:first-child").removeClass("nav-link");
  //     $(".sticky ul li:nth-child(2)").addClass("nav-link");
  //   } else {
  //     $(".sticky ul li:nth-child(2)").removeClass("nav-link");
  //     $(".sticky ul li:first-child").addClass("nav-link");
  //   }
  // });

  // $(".js--about").waypoint(function (direction) {
  //   if (direction == "down") {
  //     $(".sticky ul li:nth-child(2)").removeClass("nav-link");
  //     $(".sticky ul li:nth-child(3)").addClass("nav-link");
  //   } else {
  //     $(".sticky ul li:nth-child(3)").removeClass("nav-link");
  //     $(".sticky ul li:nth-child(2)").addClass("nav-link");
  //   }
  // });

  // $(".js--team").waypoint(function (direction) {
  //   if (direction == "down") {
  //     $(".sticky ul li:nth-child(3)").removeClass("nav-link");
  //     $(".sticky ul li:nth-child(4)").addClass("nav-link");
  //   } else {
  //     $(".sticky ul li:nth-child(4)").removeClass("nav-link");
  //     $(".sticky ul li:nth-child(3)").addClass("nav-link");
  //   }
  // });

  // $(".js--contact").waypoint(function (direction) {
  //   if (direction == "down") {
  //     $(".sticky ul li:nth-child(4)").removeClass("nav-link");
  //     $(".sticky ul li:nth-child(5)").addClass("nav-link");
  //   } else {
  //     $(".sticky ul li:nth-child(5)").removeClass("nav-link");
  //     $(".sticky ul li:nth-child(4)").addClass("nav-link");
  //   }
  // });
});

// MODAL WINDOW
const modal = document.querySelector("#modal");
const modalContent = document.querySelector(".modal__content");
const btnsOpenModal = document.querySelectorAll(".btn-open-modal");
const btnCloseModal = document.querySelector(".modal__close");

const openModal = function () {
  modal.classList.add("visible");
  modalContent.classList.add("visible--content");
};

for (let i = 0; i < btnsOpenModal.length; i++) {
  btnsOpenModal[i].addEventListener("click", openModal);
}

const closeModal = function () {
  modal.classList.remove("visible");
  modalContent.classList.remove("visible--content");
};

// modal.addEventListener("click", closeModal);
btnCloseModal.addEventListener("click", closeModal);

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    if (!modal.classList.contains(".visible")) {
      closeModal();
    }
  }
});

// NAVIGATION;
// const navList = document.querySelector(".nav");

// if (phone.matches) {
//   navList.classList.add("hidden");
// }

// window.addEventListener("resize", function () {
//   if (phone.matches) {
//     navList.classList.add("hidden");
//   } else {
//     navList.classList.remove("hidden");
//   }
// });

// SCROLLING BEHAVIOR

// const linkz = document.querySelectorAll('a[href*="#"]');
// linkz.forEach((el) => {
//   el.addEventListener("click", (e) => {
//     e.preventDefault();
//     let remover = document.querySelector(".active");
//     if (remover != null) {
//       remover.classList.remove("active");
//     }
//     el.classList.add("active");
//     let stopX = document.querySelector(el.hash).offsetTop;
//     let startX = document.documentElement.scrollTop;
//     myMove(startX, stopX);
//   });
// });

// // CAROUSEL
// const wrapper = document.querySelector("#carousel-row");
// const carouselBox = document.querySelector("#carousel-box");
// const children = wrapper.querySelectorAll(".testimonial");
// const leftArr = document.querySelector(".testimonials__arrow--left");
// const rightArr = document.querySelector(".testimonials__arrow--right");

// let counter = 0; //keeps track of how much we've moved the cards
// let infiniteCounter = 0; //helps us know if we're moving left or right

// const tabPort = window.matchMedia("(max-width: 900px)");
// const phone = window.matchMedia("(max-width: 600px)");
// const tabLand = window.matchMedia("(max-width: 1200px)");

// carouselBox.addEventListener("click", function (e) {
//   wrapper.style.transition = ".3s ease all";
//   if (e.target.classList.contains("testimonials__arrow--left")) {
//     infiniteCounter = -1;
//     if (phone.matches) {
//       counter += 107.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else if (tabPort.matches) {
//       counter += 55.3;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else if (tabLand.matches) {
//       counter += 35.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else {
//       counter += 34.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     }
//   }

//   if (e.target.classList.contains("testimonials__arrow--right")) {
//     infiniteCounter = 1;
//     if (phone.matches) {
//       counter -= 107.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else if (tabPort.matches) {
//       counter -= 55.3;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else if (tabLand.matches) {
//       counter -= 35.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     } else {
//       counter -= 34.5;
//       wrapper.style.transform = `translateX(${counter}%)`;
//     }
//   }
// });

// const infiniteCarousel = function () {
//   wrapper.style.transition = "none";
//   counter = 0;

//   if (infiniteCounter === 1) {
//     wrapper.appendChild(wrapper.firstElementChild); //removes the first review element from the wrapper and appends it to the end
//     wrapper.style.transform = `translateX(0%)`; //positioning the carousel as if the first review is the current one
//   }

//   if (infiniteCounter === -1) {
//     wrapper.style.transform = `translateX(0%)`; //positioning the carousel as if the last review is the current one
//     wrapper.prepend(wrapper.lastElementChild); //removes the last review element from the wrapper and prepends it to the beginning
//   }
// };

// wrapper.addEventListener("transitionend", infiniteCarousel);
