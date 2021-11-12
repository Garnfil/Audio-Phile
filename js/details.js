// add or subtract quantity

const minusBtn = document.querySelector('.minus');
const addBtn = document.querySelector('.add');
let quantity = document.querySelector('#quantity');

let value = 1;

quantity.value = value;
minusBtn.addEventListener('click', onMinusCounter);
addBtn.addEventListener('click', onAddCounter);
	
function onMinusCounter() {
	value--;
  quantity.value = value - 0;
	
	if (quantity.value < 1 ){ 
		quantity.value = 1 ;
		value = 1;
	}
}

function  onAddCounter(){
	value++;
	quantity.value = value + 0;
}

// Go back acording to your history
const backBtn = document.querySelector('.back');

backBtn.addEventListener('click', () => window.history.back());



