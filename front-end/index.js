let navbar = document.querySelector('.header .navbar');
let menuBtn = document.querySelector('#menu-btn');
// menu list 
menuBtn.onclick = () =>{
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
//home slides
var swiper = new Swiper(".home-slider", {
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
  },
});
//popular food items slides
var swiper = new Swiper(".food-slider", {
  grabCursor:true,
  loop:true,
  centeredSlides:true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  
  breakpoints: {
    0: {
      slidesPerView: 1,
   },
   700: {
     slidesPerView: 2,
   },
    1000: {
      slidesPerView: 3,
    },
  },
});
// view popular dishes  in more detail
let previewContainer = document.querySelector('.food-preview-container');
let previewBox = previewContainer.querySelectorAll('.food-preview');

document.querySelectorAll('.food .slide').forEach(food =>{
  food.onclick = () =>{
    previewContainer.style.display = 'flex';
    let name = food.getAttribute('data-name');
    previewBox.forEach(preveiw =>{
      let target = preveiw.getAttribute('data-target');
      if(name == target){
        preveiw.classList.add('active');
      }
    });
  };
});
// to close preview items
previewContainer.querySelector('#close-preview').onclick = () =>{
   previewContainer.style.display = 'none';
   previewBox.forEach(close =>{
     close.classList.remove('active');
   });
};
// add slides in menu section
var swiper = new Swiper(".menu-slider", {
  grabCursor:true,
  loop:true,
  autoHeight:true,
  centeredSlides:true,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
// add items in order section automatically
let order = {};
let totalPrice = 0;

document.querySelectorAll(".btn.add-to-order").forEach(button => {
    button.addEventListener("click", function () {
        let foodName = this.getAttribute("data-food");
        let foodPrice = parseFloat(this.getAttribute("data-price")); // ✅ fetch price

        if (!foodName || isNaN(foodPrice)) {
            console.error("Food name or price is missing!");
            return;
        }

        if (order[foodName]) {
            order[foodName].quantity += 1;
          } else {
            order[foodName] = { quantity: 1, price: foodPrice };
          }
          
        totalPrice += foodPrice;

        // Update selected items
        let selectedFoodInput = document.getElementById("selected-food");
        selectedFoodInput.value = Object.entries(order)
        .map(([name, data]) => `${name} x ${data.quantity},`)
        .join("\n");
        // Update total price
        document.getElementById("total-price").value = totalPrice.toFixed(2); // hidden input
    });
});


document.addEventListener("DOMContentLoaded", function() {
  const paymentOptions = document.getElementsByName("payment_method");
  const upiQR = document.getElementById("upi-qr");
  paymentOptions.forEach(option => {
    option.addEventListener("change", function() {
        if (this.value === "UPI") {
            upiQR.style.display = "block";  // hide QR code
        } else {
          upiQR.style.display = "none";   // show QR code
        }
    });
});
});

