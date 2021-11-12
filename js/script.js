// animation on navbar when scroll


const nav = document.querySelector('nav');

//Set Listener for Scrolling Event in navbar
window.addEventListener('scroll', setScrollNav)

function setScrollNav() {
	let scrollSize = window.scrollY;
	if (scrollSize > 200) return nav.classList.add('scroll-nav');
	return nav.classList.remove('scroll-nav');
}

// click menu to open navbar
const menu = document.querySelector('.menu');

menu.addEventListener('click', () => {
	nav.classList.toggle('toggle-nav')
})


// animation on scroll
const scrollElements = document.querySelectorAll('.aos');
window.addEventListener('scroll', AnimationScroll);

function AnimationScroll() {
  scrollElements.forEach( element => {
    if (isVisable(element)) element.classList.add('show-elements');
  })
}

// Function for conditioning scroll event
function isVisable(element) {
  const elementPosition = element.getBoundingClientRect();
  let distanceFromTop = -300;
  
  return elementPosition.top - window.innerHeight < distanceFromTop ? true:false;
}
