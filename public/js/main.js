/**
 * Updated: Feb 27 2025 with Bootstrap v5.3.3
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */

(function () {
	'use strict';

	/**
	 * Aplicar la clase .scrolled al cuerpo a medida que la página se desplaza hacia abajo
	 */
	function toggleScrolled() {
		const selectBody = document.querySelector('body');
		const selectHeader = document.querySelector('#header');
		if (
			!selectHeader.classList.contains('scroll-up-sticky') &&
			!selectHeader.classList.contains('sticky-top') &&
			!selectHeader.classList.contains('fixed-top')
		)
			return;
		window.scrollY > 100
			? selectBody.classList.add('scrolled')
			: selectBody.classList.remove('scrolled');
	}

	document.addEventListener('scroll', toggleScrolled);
	window.addEventListener('load', toggleScrolled);
	/**
	 * Aplicar la clase
	 */
	window.addEventListener('scroll', function() {
		const header = document.getElementById('header');
		if (window.scrollY > 150) {
		  header.style.backgroundColor = 'black';
		} else {
		  header.style.backgroundColor = 'transparent';
		}
	  });
	/**
	 * Mobile nav toggle
	 */
	const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

	function mobileNavToogle() {
		document.querySelector('body').classList.toggle('mobile-nav-active');
		mobileNavToggleBtn.classList.toggle('bi-list');
		mobileNavToggleBtn.classList.toggle('bi-x');
	}
	if (mobileNavToggleBtn) {
		mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
	}

	/**
	 * Hide mobile nav on same-page/hash links
	 */
	document.querySelectorAll('#navmenu a').forEach((navmenu) => {
		navmenu.addEventListener('click', () => {
			if (document.querySelector('.mobile-nav-active')) {
				mobileNavToogle();
			}
		});
	});

	/**
	 * Toggle mobile nav dropdowns
	 */
	document.querySelectorAll('.navmenu .toggle-dropdown').forEach((navmenu) => {
		navmenu.addEventListener('click', function (e) {
			e.preventDefault();
			this.parentNode.classList.toggle('active');
			this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
			e.stopImmediatePropagation();
		});
	});

	/**
	 * Preloader
	 */
	const preloader = document.querySelector('#preloader');
	if (preloader) {
		window.addEventListener('load', () => {
			preloader.remove();
		});
	}

	/**
	 * Scroll top button
	 */
	let scrollTop = document.querySelector('.scroll-top');

	function toggleScrollTop() {
		if (scrollTop) {
			window.scrollY > 100
				? scrollTop.classList.add('active')
				: scrollTop.classList.remove('active');
		}
	}
	scrollTop.addEventListener('click', (e) => {
		e.preventDefault();
		window.scrollTo({
			top: 0,
			behavior: 'smooth',
		});
	});

	window.addEventListener('load', toggleScrollTop);
	document.addEventListener('scroll', toggleScrollTop);

	/**
	 * Animation on scroll function and init
	 */
	function aosInit() {
		AOS.init({
			duration: 600,
			easing: 'ease-in-out',
			once: true,
			mirror: false,
		});
	}
	window.addEventListener('load', aosInit);

	/**
	* Init swiper sliders
	*/
	var swiper = new Swiper("#features-carousel", {
		"loop": true,
		"autoplay": {
		  "delay": 5000
		},
		"slidesPerView": 3,
		"pagination": {
		  "el": ".swiper-pagination",
		  "type": "bullets",
		  "clickable": true
		},
		"breakpoints": {
		  "320": {
			"slidesPerView": 1,
			"spaceBetween": 40
		  },
		  "780": {
			"slidesPerView": 2,
			"spaceBetween": 40
		  },
		  "1200": {
			"slidesPerView": 3,
			"spaceBetween": 1
		  }
		}
	  });

	/**
	 * Initiate Pure Counter
	 */
	new PureCounter();

	new bootstrap.Modal(document.getElementById('modalAuth'), {backdrop: true, keyboard: true, focus: true}).show();
})();

function changeAuthTab(element) {
	let container = document.getElementById('modalAuth');
	if (!container) return;

	let buttons = container.querySelectorAll('button');
	buttons.forEach(function(button) {
	  button.classList.remove('btn-warning');
	  button.classList.add('btn-white');
	});

	element.classList.remove('btn-white');
	element.classList.add('btn-warning');
	let form = element.getAttribute('data-form');

	login = document.getElementById('login');
	register = document.getElementById('register');

	if (form=='login') {
		register.classList.add('d-none');
		login.classList.remove('d-none');
	} else {
		login.classList.add('d-none');
		register.classList.remove('d-none');
	}
}

function changeTab(containerId, element) {
	let container = document.getElementById(containerId);
	if (!container) return;

	let buttons = container.querySelectorAll('button');
	buttons.forEach(function(button) {
	  button.classList.remove('active');
	});

	element.classList.add('active');
	let type = element.getAttribute('data-type');

	let input = document.getElementById('search-type');
	if (input) {
	  input.value = type;
	}
}