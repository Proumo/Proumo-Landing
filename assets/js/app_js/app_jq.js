$('#sociais_1 .btn').attr('data-placement', 'top');
$('#sociais_2 .btn').attr('data-placement', 'bottom');

$('#btns_sociais .btn').addClass('tooltiper');
$('.tooltiper').tooltip({ trigger: "hover" });

// Definição dos dizeres nos botões sociais
$('.btn-facebook').attr('data-original-title', 'Curta, compartilhe e convide a galera para os eventos');
$('.btn-youtube').attr('data-original-title', 'Compartilhe os videos com a galera nos eventos em tempo real');
$('.btn-github').attr('data-original-title', 'Desenvolva Apps && Plugins');
$('.btn-twitter').attr('data-original-title', 'Tweet e compartilhe sobre os eventos');
$('.btn-foursquare').attr('data-original-title', 'Compartilhe aonde está sendo o evento');
$('.btn-instagram').attr('data-original-title', 'Compartilhe suas fotos dos eventos');

$('#btns_sociais .btn').click(function(){
	if($(this).hasClass('disabled')) return;
	else if($(this).hasClass('active')) $(this).removeClass('active');
	else $(this).addClass('active');
});

$('#nav > ul li a').click(function(){
	$('#nav ul li').removeClass('active');
	$(this).parent('li').addClass('active');
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

$('a').click(function(event){
	event.preventDefault();
});


$('.dropdown-menu li').click(function(){
	var lingua_selecionada = $(this).children('a').html();
	$('.dropdown-menu li').removeClass('active');
	$(this).addClass('active');

	$('#btn_inter_content').html(lingua_selecionada+' <span class="caret"></span>');
});