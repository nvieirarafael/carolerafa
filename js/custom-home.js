//////////////////////////////////////////
// INDEX ////////////////////////////////
// TABLE OF CONTENT ////////////////////
// 1. Google Map code /////////////////
// 2. BACKGROUND SLIDER //////////////
// 3. CountDown /////////////////////
// 4. Contact Form Validation //////
///////////////////////////////////
/////////// END OF INDEX /////////
/////////////////////////////////




(function ($) {

"use strict";


////////////////////////////////////////////////
/////////// 1. code for Google Map /////////////
///////////////////////////////////////////////


var map;

map = new GMaps({
	el: '#gmap',
	lat: -22.8865989,
	lng: -46.9663727,
	scrollwheel: false,
	zoom: 16,
	zoomControl: true,
	panControl: true,
	streetViewControl: true,
	mapTypeControl: false,
	overviewMapControl: false,
	clickable: true
});

var image = '';
map.addMarker({
	lat: -22.8865989,
	lng: -46.9663727,
	infoWindow: {
	  content: '<p class="map-info"><strong>Quinta das Bromélias</strong> <br/> Avenida Dona Maria Franco Salgado, 838 - Jardim Atibaia (Sousas), Campinas - SP </p>'
	}
});

var styles = [
{
	"featureType": "road",
	"stylers": [
	{ "color": "#ffffff" }
	]
},{
	"featureType": "water",
	"stylers": [
	{ "color": "#99b3cc" }
	]
},{
	"featureType": "landscape",
	"stylers": [
	{ "color": "#f2efe9" }
	]
},{
	"elementType": "labels.text.fill",
	"stylers": [
	{ "color": "#d3cfcf" }
	]
},{
	"featureType": "poi",
	"stylers": [
	{ "color": "#ded2ac" }
	]
},{
	"elementType": "labels.text",
	"stylers": [
	{ "saturation": 1 },
	{ "weight": 0.1 },
	{ "color": "#000000" }
	]
}

];

map.addStyle({
	styledMapName:"Styled Map",
	styles: styles,
	mapTypeId: "map_style"
});

map.setStyle("map_style");

///////////////////////////////////////
// 2. BACKGROUND SLIDER //////////////
/////////////////////////////////////

$(document).on('ready', function() {
  var i = 0;
  var images = [
  	// add your image url here
		'images/slider/image-1.jpg',
		'images/slider/image-2.jpg',
		'images/slider/image-3.jpg',
		'images/slider/image-4.jpg',
  ];
  // grabing the container of slider
  var image = $('#header');
  // Change image at regular intervals
  setInterval(function(){
   image.fadeOut(1000, function () {
   		image.css('background-image', 'url(' + images [i++] +')');
   		image.fadeIn(1000);
   });

   if(i == images.length) i = 0;
  }, 5000);

});



///////////////////////////////////////////////////////
/////////////// 3. code for CountDown ////////////////
/////////////////////////////////////////////////////

// add your wedding time
var futuredate=new cdtime("countdown-wrap", "March 18, 2016 19:30:00");
futuredate.displaycountdown("days", formatresults);



///////////////////////////////////////////////////
////////////// 4. contact form validation ////////
/////////////////////////////////////////////////

var SPMaskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
spOptions = {
  onKeyPress: function(val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
};

$('.celular, .telefone').mask(SPMaskBehavior, spOptions);

// Function that validates email address through a regular expression.
function validateEmail(email_val) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if (filter.test(email_val)) {
		return true;
	}
	else {
		return false;
	}
}

// getting input fields.
var nome = $('.contact-form input.nome');
var sobrenome = $('.contact-form input.sobrenome');
var telefone = $('.contact-form input.telefone');
var celular = $('.contact-form input.celular');
var email = $('.contact-form input.email');

// removing response
nome.on('focus', function () {
	nome.removeClass('error');
	$('.contact-form p.output').remove();
});
sobrenome.on('focus', function () {
	sobrenome.removeClass('error');
	$('.contact-form p.output').remove();
});
telefone.on('focus', function () {
	telefone.removeClass('error');
	$('.contact-form p.output').remove();
});
celular.on('focus', function () {
	celular.removeClass('error');
	$('.contact-form p.output').remove();
});
email.on('focus', function () {
	email.removeClass('error');
	$('.contact-form p.output').remove();
});

$(document).ajaxError(function(event, jqxhr, settings, thrownError) {
	window.formularioEnviado();
	$(this).find('input').val('');
});

window.formularioEnviado = function () {
	var mensagem = 'Pronto! Muito Obrigado por confirmar sua presença. <br/> Te esperamos lá! <i class="glyphicon glyphicon-heart"></i>';
	var icone = 'glyphicon glyphicon-check glyphicon-lg';
	var tipo = 'success';

	var podereiComparecer = $('input#podereiComparecer');

	if(podereiComparecer.val() == 'Não'){
		mensagem = 'Mas porque não? <br/> É uma pena! <br/> Muito obrigado por nos avisar.';
		icone = 'fa fa-frown-o fa-lg';
		tipo = 'warning';
	}

	$.notify({
		icon: icone,
		message: mensagem
	},{
		type: tipo,
		placement: {
			from: "top",
			align: "center"
		},
		allow_dismiss: true,
		animate: {
			enter: 'animated bounceIn',
			exit: 'animated bounceOutUp'
		},
		icon_type: 'class',
		delay: 15000,
		template: '<div data-notify="container" class="col-xs-11 col-sm-2 text-center alert alert-{0}" role="alert">' +
			'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
			'<span data-notify="icon"></span> ' +
			'<span data-notify="title">{1}</span> ' +
			'<span data-notify="message">{2}</span>' +
			'<div class="progress" data-notify="progressbar">' +
				'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
			'</div>' +
			'<a href="{3}" target="{4}" data-notify="url"></a>' +
		'</div>'
	});
};

window.enviarFormulario = function (event) {
	if (nome.val() === ''){
		nome.addClass('error');
	}
	else if (sobrenome.val() === ''){
		sobrenome.addClass('error');
	}
	else if (telefone.val() === ''){
		telefone.addClass('error');
	}
	else if (celular.val() === ''){
		telefone.addClass('error');
	}
	else if (validateEmail(email.val()) === false){
		email.addClass('error');
	}
	else if (nome.val()!=='' &&
					 sobrenome.val()!=='' &&
					 telefone.val()!=='' &&
					 celular.val()!=='' &&
					 validateEmail(email.val())==true) {

		var podereiComparecer = $('input#podereiComparecer');

		podereiComparecer.val($(event.currentTarget).hasClass('confirmar') ? 'Sim' : 'Não');

		var data = {
			'entry.1828418056': nome.val(),
			'entry.2089019722': sobrenome.val(),
			'entry.1991244907': email.val(),
			'entry.387721716': telefone.val(),
			'entry.1726465900': celular.val(),
			'entry.308097752': podereiComparecer.val()
		};

		var form_action = "https://docs.google.com/forms/d/1_EYXWSMSSiqZ6y4LwbaxI3P3Jq6TIgjR3BGz7TSTmcY/formResponse";

		// // sending value with ajax request
		$.post(form_action, data);
	}

};

// making validation while form submission
$('button.confirmar').click(enviarFormulario);
$('button.naoConfirmar').click(enviarFormulario);

})(jQuery);
