<?php
// Rotas da Aplicação
// A variável '$uri' já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':
        $Controller->index();
        break;

    case '/calcular':
        $Controller->calcular();
        break;

    case '/resetar':
        $Controller->resetar();
        break;
        
    default:
        $Controller->erro404();
        break;
}
