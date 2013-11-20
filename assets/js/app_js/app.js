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

$('#conectar').click(function(){
	
});