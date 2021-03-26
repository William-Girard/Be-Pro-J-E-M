function replaceTxt(e){
	const splitted = e.target.value.split('\\');
	 e.target.nextElementSibling.innerText = splitted[splitted.length - 1];
}

function openSide() {
sideNav.style.transform = "translateX(0px)";
}
function closeSide() {
sideNav.style.transform = "translateX(-250px)";
}
function changeSide() {
	let widthScreen = window.innerWidth;
	if(widthScreen < '1200' ) {
		sideNav.style.transform = "translateX(-250px)";
	}
	else {
		sideNav.style.transform = "translateX(0px)";
	}
}


let filesInput = document.querySelectorAll('input[type="file"]');
let burger = document.querySelector('.sidenav-toggler-inner');
let sideNav = document.querySelector('.sidenav'); 
let sideNavCross = document.querySelector('.close-navbar');


for (let i = 0; i <= filesInput.length - 1; i++) {
	filesInput[i].addEventListener('change', replaceTxt);
}

burger.addEventListener('click', openSide);
sideNavCross.addEventListener('click', closeSide);
window.addEventListener("resize", changeSide);
