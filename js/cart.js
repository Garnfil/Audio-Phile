// Go back acording to your history
const backBtn = document.querySelector('.back');
backBtn.addEventListener('click', () => window.history.back());

//Cart Message
function displayingMessage() {
let cartMessage = document.querySelector('.cart-message');
let cartContent = document.querySelectorAll('.cart-content');
 return cartContent.length > 0 ? cartMessage.style.display = 'none' : cartMessage.style.display = 'block';
}
displayingMessage();

//displaying mess on cod
const message_cod = document.querySelector('.mess');



