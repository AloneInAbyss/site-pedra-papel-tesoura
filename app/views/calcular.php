<?php

// Recebe a Escolha do Jogador
if (isset($_POST['escolha'])) {
    $escolha = $_POST['escolha'];
    //echo $escolha ."<hr>";
} else {
    $escolha = "aleatorio";
    //echo $escolha ."<hr>";
}
    
// Recebe o Nome do Jogador
if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    //echo $nome ."<hr>";
} else {
    $nome = "Jogador";
    //echo $nome ."<hr>";
}

// Recebe as Configurações de Vitória
if (isset($_POST['configvitoria'])) {
    $configvitoria = $_POST['configvitoria'];

    if (empty($configvitoria)) {
        $configvitoria[] = "vazio";
    }/* else {
        echo "Você selecionou: <hr>";
        $numero = count($configvitoria);
        for ($i=0; $i < $numero; $i++) {
            echo $configvitoria[$i] ."<hr>";
        }
    }*/
} else {
    $configvitoria[] = "vazio";
    //echo "Você selecionou: <hr>";
    //echo $configvitoria[0] ."<hr>";
}

// Recebe as Configurações de Empate
if (isset($_POST['configempate'])) {
    $configempate = $_POST['configempate'];

    if (empty($configempate)) {
        $configempate[] = "vazio";
    }/* else {
        echo("Você selecionou: <hr>");
        $numeroempate = count($configempate);
        for ($i=0; $i < $numeroempate; $i++) {
            echo $configempate[$i] ."<hr>";
        }
    }*/
} else {
    $configempate[] = "vazio";
    //echo "Você selecionou: <hr>";
    //echo $configempate[0] ."<hr>";
}

// Faz a Escolha do Computador
$jogadaPC = rand(1,3);
if ($jogadaPC == 1) {
    $escolhaPC = "pedra";
} else if ($jogadaPC == 2) {
    $escolhaPC = "papel";
} else {
    $escolhaPC = "tesoura";
}

// Verifica a Escolha do jogador
if ($escolha == "aleatorio") {
    $jogadaJogador = rand(1,3);
    if ($jogadaJogador == 1) {
        $escolha = "pedra";
    } else if ($jogadaJogador == 2) {
        $escolha = "papel";
    } else {
        $escolha = "tesoura";
    }
}

// Verifica o nome do jogador
// Percorrer o string procurando por 'loli'

// Verifica as Configurações de Vitória
$numero = count($configvitoria);
$vitpedra = false;
$vitpapel = false;
$vittesoura = false;
if ($numero > 0) {
    for ($i=0; $i < $numero; $i++) {
        switch ($configvitoria[$i]) {
            case "vitoriapedra":
                $vitpedra = true;
                break;
            case "vitoriapapel":
                $vitpapel = true;
                break;
            case "vitoriatesoura":
                $vittesoura = true;
                break;
        }
    }
}

// Verifica as Configurações de Empate
$numeroempate = count($configempate);
$emppedra = false;
$emppapel = false;
$emptesoura = false;
if ($numeroempate > 0) {
    for ($i=0; $i < $numeroempate; $i++) {
        switch ($configempate[$i]) {
            case "empatepedra":
                $emppedra = true;
                break;
            case "empatepapel":
                $emppapel = true;
                break;
            case "empatetesoura":
                $emptesoura = true;
                break;
        }
    }
}

// Parâmetros Padrão
//if ($configempate[0] == "vazio" && count($configvitoria) == 3) {
    switch ($escolhaPC) {
        case "pedra":
        // Pedra vs Pedra
        if ($escolha == "pedra") {
            $vencedor = "empate";
        }

        // Pedra vs Papel
        if ($escolha == "papel") {
            if ($vitpapel == false) {
                $vencedor = "empate";
            }
            if ($emppedra) {
                $vencedor = "empate";
            }
            if ($vitpapel && $emppedra == false) {
                $vencedor = "Jogador";
            }
        }

        // Pedra vs Tesoura
        if ($escolha == "tesoura") {
            if ($emppedra) {
                $vencedor = "empate";
            }
            if ($emppedra == false) {
                $vencedor = "Computador";
            }
        }
        break;

        case "papel":
            // Papel vs Pedra
            if ($escolha == "pedra") {
                if ($emppapel) {
                    $vencedor = "empate";
                }
                if ($emppapel == false) {
                    $vencedor = "Computador";
                }
            }

            // Papel vs Papel
            if ($escolha == "papel") {
                $vencedor = "empate";
            }

            // Papel vs Tesoura
            if ($escolha == "tesoura") {
                if ($vittesoura == false) {
                    $vencedor = "empate";
                }
                if ($emppapel) {
                    $vencedor = "empate";
                }
                if ($vittesoura && $emppapel == false) {
                    $vencedor = "Jogador";
                }
            }
            break;

        case "tesoura":
            // Tesoura vs Pedra
            if ($escolha == "pedra") {
                if ($vitpedra == false) {
                    $vencedor = "empate";
                }
                if ($emptesoura) {
                    $vencedor = "empate";
                }
                if ($vitpedra && $emptesoura == false) {
                    $vencedor = "Jogador";
                }
            }

            // Tesoura vs Papel
            if ($escolha == "papel") {
                if ($emptesoura) {
                    $vencedor = "empate";
                }
                if ($emptesoura == false) {
                    $vencedor = "Computador";
                }
            }

            // Tesoura vs Tesoura
            if ($escolha == "tesoura") {
                $vencedor = "empate";
            }
            break;
    }

    //echo "vencedor: ".$vencedor."<br>";
    //echo "pc: ".$escolhaPC."<br>";
    //echo "jogador: ".$escolha."<br>";
//}

$_SESSION['historico'][] = array("numero"=>count($_SESSION["historico"])+1, "nome"=>$nome, "escolha"=>$escolha, "escolhaPC"=>$escolhaPC, "vencedor"=>$vencedor, "configvitoria"=>$configvitoria, "configempate"=>$configempate);

//print_r($_SESSION);

require_once 'app/views/resultado.php';