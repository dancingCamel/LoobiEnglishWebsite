// GLOBAL VARS
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li');

// NAV
// Animate links
function animateLinks() {
	navLinks.forEach((link, index) => {
		if (link.style.animation) {
			link.style.animation = '';
		}
		else {
			link.style.animation = `navLinkFade 0.5s ease forwards ${index / 5 + 0.5}s`;
		}
	});
}
window.onload = function() {
	this.startBurger();
	this.loadModal();
	this.validateDemoForm();
	this.validateApplyForm();
	this.changeOffset();
	this.carouselInit();
	this.courseCardHeight();
	this.schoolCardHeight();
};

// BURGER FUNCTIONALITY
function startBurger() {
	burger.addEventListener('click', () => {
		// Toggle Nav
		nav.classList.toggle('nav-active');

		// Animate links
		animateLinks();

		// Burger Animation
		burger.classList.toggle('toggle');
	});
}
// MODALS
function loadModal() {
	$('.modalOpenBtn').click(() => {
		$('.modal').modal({
			fadeDuration : 500
		});

		if ($('.burger').hasClass('toggle')) {
			burger.classList.toggle('toggle');
			nav.classList.toggle('nav-active');
			animateLinks();
		}
	});
}

// Demo-form validation - just in case the html5 validation doesn't work
function validateDemoForm() {
	$('#demo-form-content').submit(function(e) {
		var error = '';

		if ($('#nameInput').val() == '') {
			error += "The students's name is required.<br>";
		}

		if ($('#ageInput').val() == '') {
			error += "The student's age is required.<br>";
		}

		if ($('#telInput').val() == '') {
			error += 'Your telephone number is required.<br>';
		}

		if (error != '') {
			$('#form-message').html(
				'<div class="error" role="alert"><p><strong>There were error(s) in your form:</strong></p>' +
					error +
					'</div>'
			);

			return false;
		}
		else {
			return true;
		}
	});
}

// apply-form validation - just in case the html5 validation doesn't work
function validateApplyForm() {
	$('#apply-form-content').submit(function(e) {
		var error = '';

		if ($('#nameInput').val() == '') {
			error += 'Your name is required.<br>';
		}

		if ($('#nationalityInput').val() == '') {
			error += 'Your nationality is required.<br>';
		}

		var email = $('#emailInput').val();
		var emailPattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;
		var emailResult = email.match(emailPattern);

		if (email == '' || emailResult == null) {
			error += 'A valid email is required.<br>';
		}

		if (error != '') {
			$('#form-message').html(
				'<div class="error" role="alert"><p><strong>There were error(s) in your form:</strong></p>' +
					error +
					'</div>'
			);

			return false;
		}
		else {
			return true;
		}
	});
}

// Carousel functionality
function changeOffset() {
	var offset = window.outerWidth / 3;
	$('.card-carousel').css('left', offset + 'px');
}

function carouselInit() {
	$odd = 1;
	$('.my-card:nth-child(' + $odd + ')').addClass('active');
	$('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
	$('.my-card:nth-child(' + $odd + ')').next().addClass('next');

	$('.my-card').click(function() {
		$slide = $('.active').width();
		// console.log($('.active').position().left);

		if ($(this).hasClass('next')) {
			$('.card-carousel').stop(false, true).animate({ left: '-=' + $slide });
		}
		else if ($(this).hasClass('prev')) {
			$('.card-carousel').stop(false, true).animate({ left: '+=' + $slide });
		}

		$(this).removeClass('prev next');
		$(this).siblings().removeClass('prev active next');

		$(this).addClass('active');
		$(this).prev().addClass('prev');
		$(this).next().addClass('next');
	});
}
// make sure cards are all the same height and the minimum possible height they can be
function courseCardHeight() {
	var minRequiredHeight = 0;
	var cards = [
		'helloWorld',
		'firstFriends',
		'ourDiscoveryIsland'
	];

	for (var i = 0; i < cards.length; i++) {
		let tempHeight = 0;
		tempHeight += $('.' + cards[i] + ' > img').height();
		tempHeight += $('.' + cards[i] + ' > h2').height();
		tempHeight += $('.' + cards[i] + ' > p').height();
		tempHeight += 5 * 16;

		if (tempHeight > minRequiredHeight) {
			minRequiredHeight = tempHeight;
		}
	}

	let root = document.documentElement;
	root.style.setProperty('--card-min-height', minRequiredHeight + 'px');
}

function schoolCardHeight() {
	var minRequiredHeight = 0;
	var cards = [
		'wanke-info',
		'luotuo-info'
	];

	for (var i = 0; i < cards.length; i++) {
		let tempHeight = 0;
		tempHeight += $('.' + cards[i] + ' img').height();
		tempHeight += $('.' + cards[i] + ' h1').height();
		tempHeight += $('.' + cards[i] + ' p').height();
		tempHeight += 5 * 16;

		if (tempHeight > minRequiredHeight) {
			minRequiredHeight = tempHeight;
		}
	}

	let root = document.documentElement;
	root.style.setProperty('--school-info-card-min-height', minRequiredHeight + 'px');
}
