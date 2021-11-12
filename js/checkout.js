// displaying payment form when you click a cod button
let cashOnDelivery = document.querySelector('.cod');
let checkoutFormFirst = document.querySelector('.first');
let checkoutFormSecond = document.querySelector('.second');
let creditDelivery = document.querySelector('.credit');


// when you click a cash on delivery button will be display a form for cod
cashOnDelivery.addEventListener('click', () => {
	checkoutFormFirst.style.display = 'block'
	checkoutFormSecond.style.display = 'none'
})

// when you click credit Payment button that will display a form fo//credit payments
creditDelivery.addEventListener('click', () => {
//	checkoutFormSecond.classList.add('a')
  checkoutFormSecond.style.display = 'block'
  checkoutFormFirst.style.display = 'none'
})

// Go back acording to your history
const backBtn = document.querySelector('.back');
backBtn.addEventListener('click', () => window.history.back());