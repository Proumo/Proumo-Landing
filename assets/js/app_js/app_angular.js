// Vari?veis que guardam os JSON de Locale para que fa?a cache do JSON
var json_pt_br;
var json_en_us;
var json_es_es;

function app_controller($scope, $http){
	
}	

function navController($scope, $http){
    $scope.nav_produto = 'Produto';
    $scope.nav_participante = 'Participante';
    $scope.nav_anunciante = 'Anunciante';
    $scope.nav_api = 'API';
    $scope.mini_lead = 'Proumo - Rede Social de Eventos';
}

function headerController($scope, $http){
	//Lead header
    $scope.lead_p1 = 'Fique por dentro';
    $scope.lead_p2 = 'do que est? rolando e';
    $scope.lead_p3 = 'novas formas de intera??o';
    $scope.lead_p4 = 'em';
    $scope.lead_p5 = 'EVENTOS!';

    // Btns redes sociais
    pre_btn = 'Conecte com '
    $scope.btn_facebook = pre_btn+'Facebook';
    $scope.btn_youtube = pre_btn+'Youtube';
    $scope.btn_github = pre_btn+'GitHub';
    $scope.btn_twitter = pre_btn+'Twitter';
    $scope.btn_foursquare = pre_btn+'Foursquare';
    $scope.btn_instagram = pre_btn+'Instagram';

    $scope.btn_conectar = 'CONECTAR';

}

function marketingController($scope, $http){
    $scope.nome_marca = 'Proumo';

    //Parte do Participante
    $scope.participante_lead_header = 'Participante';

    // Descubra
    $scope.descubra_header = 'Descubra';
    $scope.descubra_p1 = 'Agora ficou f?cil saber o que est? rolando perto de voc? e de seus amigos!';
    $scope.descubra_p2 = 'Shows, festas, baladas, exposi??es... e muito mais!';
    
    // Participe
    $scope.participe_header = 'Participe';
    $scope.participe_p1 = 'Conectado ?s redes sociais:';
    $scope.participe_p2 = 'confirme presen?a';
    $scope.participe_p3 = 'saiba quem vai estar l?';
    $scope.participe_p4 = 'promo??es';
    $scope.participe_p4_append = 'interativas';
    $scope.participe_p5 = 'convide seus amigos';
    $scope.participe_p6 = 'prepare-se para momentos incr?veis';

    // Conecte-se
    $scope.conecte_se_header = 'Conecte-se';
    $scope.conecte_p1 = 'Seja notificado dos eventos que';
    $scope.conecte_p1_append1 = 'realmente';
    $scope.conecte_p1_append2 = 'te interessam e nunca mais os perca!';
    $scope.conecte_p2 = 'Interaja com os eventos via';
    $scope.conecte_p3 = 'celular';
    $scope.conecte_p4 = 'Facebook';
    $scope.conecte_p5 = 'Twitter';



    //Parte da Anunciante
    $scope.anunciante_lead_header = 'Anunciante';

    // promova
    $scope.promova_header = 'Promova';
    $scope.promova_p1 = 'leva seu evento a quem realmente interessa e';
    $scope.promova_p1_append = 'paga';
    $scope.promova_p2 = 'Utilizamos dados das';
    $scope.promova_p3 = 'redes sociais';
    $scope.promova_p4 = 'para';
    $scope.promova_p4_append = 'direcionar';
    $scope.promova_p4_continua = 'seu anuncio ao seu publico alvo';

    // Gerencie
    $scope.gerencie_header = 'Gerencie';
    $scope.gerencie_p1 = 'Tenha relat?rios de';
    //$scope.gerencie_p1 = 'Relat?rios de capita??o';
/*
    Acompanhe e controle
                  aspectos importantes do
                  seu evento tais como
                  quantidade de convites 
                  dispon?ves, pessoas que 
                  confirmaram presen?a, rela??o
                  entre numero de homens e mulheres
                  e at? mesmo seu faturamento!

*/



    //Parte da API
}