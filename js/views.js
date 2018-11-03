function  showShareBox(element) {
	var box = element.getElementsByClassName('action');

	if (box[0].style.display != "block") {
		animateSlide(box[0]);
	}else{
		box[0].style.display = "none";
	}
}

function animateSlide(element){
	var counter = 0;
	element.style.opacity = 0;
	element.style.display = "block";
	var tmp = setInterval(function () {
			if (counter > 100) {
				clearInterval(tmp);
			}
			element.style.opacity = 0.01*counter;	
		counter++;
	}, 1);
}