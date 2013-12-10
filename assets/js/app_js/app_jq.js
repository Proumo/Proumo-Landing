$('#sociais_1 .btn').attr('data-placement', 'top');
$('#sociais_2 .btn').attr('data-placement', 'bottom');

// Para que todos botões com 'agora' levem ao FaceApp
$('a.btn').attr('href', 'https://apps.facebook.com/proumos/');

$('#btns_sociais .btn').addClass('tooltiper');
$('.tooltiper').tooltip({ trigger: "hover" });

// Defini??o dos dizeres nos bot?es sociais
$('.btn-facebook').attr('data-original-title', 'Curta, compartilhe e convide a galera para os eventos');
$('.btn-youtube').attr('data-original-title', 'Compartilhe os videos com a galera nos eventos em tempo real');
$('.btn-github').attr('data-original-title', 'Desenvolva Apps && Plugins');
$('.btn-twitter').attr('data-original-title', 'Tweet e compartilhe sobre os eventos');
$('.btn-foursquare').attr('data-original-title', 'Compartilhe aonde está sendo o evento');
$('.btn-instagram').attr('data-original-title', 'Compartilhe suas fotos dos eventos');

// Definição da cor dos botões
$('.lead_azul_escuro .btn').addClass('btn-primary');
$('.lead_verde .btn').addClass('btn-success');
$('.lead_roxo .btn').addClass('btn-roxo');

$('#marketing-publico .btn, #marketing-anunciante .btn, #marketing-api .btn').addClass('span12');
$('.btn').addClass('btn-large');

/* Coloca os botoes sociais como ativo, porém não fica lgl e nem será útil
$('#btns_sociais .btn').click(function(){
	if($(this).hasClass('disabled')) return;
	else if($(this).hasClass('active')) $(this).removeClass('active');
	else $(this).addClass('active');
});
*/

$('#nav .nav li').click(function(){
	$('#nav .nav li').removeClass('active');
	$(this).addClass('active');
});

$('#conectar').click(function(){
	
});

$('a').bind('click',function(event){
	var $anchor = $(this);

	$('html, body').stop().animate({
		scrollTop: $($anchor.attr('href')).offset().top
	}, 1000,'easeInOutExpo');

	event.preventDefault();
});

$( "a" ).click(function( event ) {
	event.preventDefault();
});

$( "li" ).click(function( event ) {
	event.preventDefault();
});


/* coloca btn como ATIVO, no btn de internacionalizacao */
$('.dropdown-menu li').click(function(){
	var lingua_selecionada = $(this).children('a').html();
	$('.dropdown-menu li').removeClass('active');
	$(this).addClass('active');

	$('#btn_inter_content').html(lingua_selecionada+' <span class="caret"></span>');
});

// Click que leva ao login no facebook
$('.btn').click(function(event){
	if($(this).hasClass('disabled')) return;

	event.preventDefault();
	window.location.href = 'https://apps.facebook.com/proumos/';
});