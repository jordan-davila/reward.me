
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import fontawesome from '@fortawesome/fontawesome-free/js/all.js';
import TweenMax from 'gsap/TweenMax';

// Listeners
if (document.querySelector('.confirm_task')){
	document.querySelectorAll('.confirm_task').forEach((task)=>{
		task.addEventListener('click', (e)=>{
			e.preventDefault();
			var id = task.getAttribute('data-id');
			displayConfirmation(id);
		});
	});

	document.querySelector('.cancel').addEventListener('click', (e) => {
		e.preventDefault();
		TweenMax.to(".box_container", 0.1, {opacity:0, display:"none"});
	});
}

document.addEventListener('click', (e)=>{
	if(document.querySelector('.user_icon_container').contains(e.target)){
		TweenMax.to(".dropdown", 0.3, { height: '100px' });
	} else {
		TweenMax.to(".dropdown", 0.3, { height: '0px' });
	}
});

function displayConfirmation(id) {
	TweenMax.to(".box_container", 0.1, {opacity:1, display:"flex"});
	document.querySelector('#task_id').value = id;
}