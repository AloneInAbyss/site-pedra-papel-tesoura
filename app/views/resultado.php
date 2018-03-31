<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">

    <link rel="shortcut icon" type="image/png" href="public/img/favicon.ico"/>
    <title>Pedra, Papel, Tesoura</title>
</head>
<body>
    <main role="main" class="container">
        <div class="row">

            <!-- COLUNA VAZIA -->
            <div class="col-md-3"></div>

            <!-- COLUNA CENTRAL -->
            <div class="col-md-6">
                <!-- TÍTULO -->
                <h1 class="text-center titulo">Pedra, Papel, Tesoura</h1>
                <br>

                <!-- LISTA COM O CONTEÚDO -->
                <ul class="list-group">
                    <div class="row d-block">
                        <li class="list-group-item"><strong>Resultado!</strong></li>
                    </div>
                    <div class="row resultado align-items-start">
                        <div class="col">
                            <br>
                            <figure class="figure">
                                <img src=
                                    <?php
                                        switch ($escolha) {
                                            case "pedra":
                                                echo '"public/img/pedra.png"';
                                                break;
                                            case "papel":
                                                echo '"public/img/papel.png"';
                                                break;
                                            case "tesoura":
                                                echo '"public/img/tesoura.png"';
                                                break;
                                        }
                                    ?>
                                    class="figure-img img-fluid rounded" alt="Escolha" style="width:250px;">
                                <figcaption class="figure-caption"><strong><?php echo $nome; ?></strong> - 
                                    <?php
                                        switch ($escolha) {
                                            case "pedra":
                                                echo 'Pedra';
                                                break;
                                            case "papel":
                                                echo 'Papel';
                                                break;
                                            case "tesoura":
                                                echo 'Tesoura';
                                                break;
                                        }
                                    ?>
                                    </figcaption>
                            </figure>
                        </div>

                        <div class="col align-self-center">
                            <br>
                            <span  style="height: 100px;" class="d-block text-center">versus</span>
                        </div>

                        <div class="col">
                            <br>
                            <figure class="figure">
                                <img src=
                                    <?php
                                        switch ($escolhaPC) {
                                            case "pedra":
                                                echo '"public/img/pedra.png"';
                                                break;
                                            case "papel":
                                                echo '"public/img/papel.png"';
                                                break;
                                            case "tesoura":
                                                echo '"public/img/tesoura.png"';
                                                break;
                                        }
                                    ?>
                                    class="figure-img img-fluid rounded" alt="Escolha" style="width:250px;">
                                <figcaption class="figure-caption"><strong>Computador</strong> - 
                                    <?php
                                        switch ($escolhaPC) {
                                            case "pedra":
                                                echo 'Pedra';
                                                break;
                                            case "papel":
                                                echo 'Papel';
                                                break;
                                            case "tesoura":
                                                echo 'Tesoura';
                                                break;
                                        }
                                    ?>
                                    </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="row resultado align-items-start">
                        <hr>

                        <?php
                            if ($vencedor == "Jogador") {
                                switch ($escolha) {
                                    case "pedra":
                                        echo '
                                        <div class="col text-center">
                                        <br>
                                        <h2>Vencedor: '.$nome.'</h2>
                                        <br>
                                        <figure class="figure">
                                        <img src="public/img/pedra.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                        <figcaption class="figure-caption">'.$nome.' - Pedra</figcaption>
                                        </figure>
                                        </div>
                                        ';
                                        break;
                                    case "papel":
                                        echo '
                                        <div class="col text-center">
                                        <br>
                                        <h2>Vencedor: '.$nome.'</h2>
                                        <br>
                                        <figure class="figure">
                                        <img src="public/img/papel.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                        <figcaption class="figure-caption">'.$nome.' - Papel</figcaption>
                                        </figure>
                                        </div>
                                        ';
                                        break;
                                    case "tesoura":
                                        echo '
                                        <div class="col text-center">
                                        <br>
                                        <h2>Vencedor: '.$nome.'</h2>
                                        <br>
                                        <figure class="figure">
                                        <img src="public/img/tesoura.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                        <figcaption class="figure-caption">'.$nome.' - Tesoura</figcaption>
                                        </figure>
                                        </div>
                                        ';
                                        break;
                                }
                            } else if ($vencedor == "Computador") {
                                switch ($escolhaPC) {
                                    case "pedra":
                                        echo '
                                        <div class="col text-center">
                                        <br>
                                        <h2>Vencedor: Computador</h2>
                                        <br>
                                        <figure class="figure">
                                        <img src="public/img/pedra.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                        <figcaption class="figure-caption">Computador - Pedra</figcaption>
                                        </figure>
                                        </div>
                                        ';
                                        break;
                                    case "papel":
                                        echo '
                                        <div class="col text-center">
                                        <br>
                                        <h2>Vencedor: Computador</h2>
                                        <br>
                                        <figure class="figure">
                                        <img src="public/img/papel.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                        <figcaption class="figure-caption">Computador - Papel</figcaption>
                                        </figure>
                                        </div>
                                        ';
                                        break;
                                    case "tesoura":
                                        echo '
                                        <div class="col text-center">
                                        <br>
                                        <h2>Vencedor: Computador</h2>
                                        <br>
                                        <figure class="figure">
                                        <img src="public/img/tesoura.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                        <figcaption class="figure-caption">Computador - Tesoura</figcaption>
                                        </figure>
                                        </div>
                                        ';
                                        break;
                                }
                            } else if ($vencedor == "empate") {
                                echo '
                                <div class="col-12 text-center">
                                <br>
                                <h2>Empate</h2>
                                </div>

                                <div class="col text-center">
                                <br>
                                <figure class="figure">
                                <img src="public/img/'.$escolha.'.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                <figcaption class="figure-caption">'.$nome.' - '.ucfirst($escolha).'</figcaption>
                                </figure>
                                </div>

                                <div class="col text-center">
                                <br>
                                <figure class="figure">
                                <img src="public/img/'.$escolhaPC.'.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                <figcaption class="figure-caption">Computador - '.ucfirst($escolhaPC).'</figcaption>
                                </figure>
                                </div>
                                ';
                            }
                        ?>

                    </div>
                    <div class="row d-block">
                        <li class="list-group-item"><strong>Configurações Adicionais!</strong></li>
                    </div>
                    <div class="row text-center resultado">
                        <div class="col-12 text-left">
                            <p>Vitória com:</p>
                        </div>
                        <?php
                            $numero = count($configvitoria);
                            
                            if ($configvitoria[0] == "vazio") {
                                echo '
                                <div class="col-12">
                                <p>Nenhuma opção para vitória foi selecionada!</p>
                                </div>';
                            }

                            if ($numero > 0) {
                                for ($i=0; $i < $numero; $i++) {
                                    switch ($configvitoria[$i]) {
                                        case "vitoriapedra":
                                            echo '
                                            <div class="col">
                                            <figure class="figure">
                                            <img src="public/img/pedra.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                            <figcaption class="figure-caption">Pedra</figcaption>
                                            </figure>
                                            </div>
                                            ';
                                            break;
                                        case "vitoriapapel":
                                            echo '
                                            <div class="col">
                                            <figure class="figure">
                                            <img src="public/img/papel.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                            <figcaption class="figure-caption">Papel</figcaption>
                                            </figure>
                                            </div>
                                            ';
                                            break;
                                        case "vitoriatesoura":
                                            echo '
                                            <div class="col">
                                            <figure class="figure">
                                            <img src="public/img/tesoura.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                            <figcaption class="figure-caption">Tesoura</figcaption>
                                            </figure>
                                            </div>
                                            ';
                                            break;
                                    }
                                }
                                
                            }
                        ?>

                        <div class="col-12 text-left">
                            <p>Empate contra:</p>
                        </div>
                        <?php
                            $numeroempate = count($configempate);
                            
                            if ($configempate[0] == "vazio") {
                                echo '
                                <div class="col-12">
                                <p>Nenhuma opção personalizada para empate foi selecionada!</p>
                                </div>';
                            }

                            if ($numeroempate > 0) {
                                for ($i=0; $i < $numeroempate; $i++) {
                                    switch ($configempate[$i]) {
                                        case "empatepedra":
                                            echo '
                                            <div class="col">
                                            <figure class="figure">
                                            <img src="public/img/pedra.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                            <figcaption class="figure-caption">Pedra</figcaption>
                                            </figure>
                                            </div>
                                            ';
                                            break;
                                        case "empatepapel":
                                            echo '
                                            <div class="col">
                                            <figure class="figure">
                                            <img src="public/img/papel.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                            <figcaption class="figure-caption">Papel</figcaption>
                                            </figure>
                                            </div>
                                            ';
                                            break;
                                        case "empatetesoura":
                                            echo '
                                            <div class="col">
                                            <figure class="figure">
                                            <img src="public/img/tesoura.png" class="figure-img img-fluid rounded" alt="Escolha" style="width:200px;">
                                            <figcaption class="figure-caption">Tesoura</figcaption>
                                            </figure>
                                            </div>
                                            ';
                                            break;
                                    }
                                }
                                
                            }
                        ?>
                    </div>

                </ul>

                <div class="row text-center center-block">
                    <div class="col">
                        <br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#estatisticas">ESTATÍSTICAS</button>
                    </div>

                    <!-- Modal ESTATÍSTICAS -->
                    <div class="modal fade" id="estatisticas" tabindex="-1" role="dialog" aria-labelledby="estatisticas" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="estatisticas">Estatísticas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Estatísticas de Jogada</h5>
                                    <br>
                                    <p class="card-text text-left">Escolha: <strong><?= ucfirst($escolha) ?></strong></p>
                                    <p class="card-text text-left">Escolha do PC: <strong><?= ucfirst($escolhaPC) ?></strong></p>
                                    <p class="card-text text-left">Configurações de Vitória: <strong>
                                    <?php
                                        foreach ($configvitoria as $key => $value) {
                                            switch ($configvitoria[$key]) {
                                                case "vazio":
                                                echo '<br>Nenhuma opção selecionada.';
                                                break;
    
                                                case "vitoriapedra":
                                                echo '<br>Pedra';
                                                break;
    
                                                case "vitoriapapel":
                                                echo '<br>Papel';
                                                break;
    
                                                case "vitoriatesoura":
                                                echo '<br>Tesoura';
                                                break;
                                            }
                                        }
                                    ?>
                                    </strong></p>
                                    <p class="card-text text-left">Configurações de Empate: <strong>
                                    <?php
                                        foreach ($configempate as $key => $value) {
                                            switch ($configempate[$key]) {
                                                case "vazio":
                                                echo '<br>Nenhuma opção selecionada.';
                                                break;
    
                                                case "empatepedra":
                                                echo '<br>Pedra';
                                                break;
    
                                                case "empatepapel":
                                                echo '<br>Papel';
                                                break;
    
                                                case "empatetesoura":
                                                echo '<br>Tesoura';
                                                break;
                                            }
                                        }
                                    ?>
                                    </strong></p>
                                    <p class="card-text text-left">Vencedor: <strong><?= $vencedor ?></strong></p>
                                    <hr>
                                    <div class="row">
                                    <div class="col">
                                        <h5>Jogador</h5><br>
                                        <h6 class="text-muted">Chance de...</h6>
                                        <p class="card-text text-left">Vitória:</p>
                                        <p class="card-text text-left">Empate:</p>
                                        <p class="card-text text-left">Derrota:</p>
                                        <hr>
                                        <h6 class="text-muted">Vitória com...</h6>
                                        <p class="card-text text-left">Pedra:</p>
                                        <p class="card-text text-left">Papel:</p>
                                        <p class="card-text text-left">Tesoura:</p>
                                        <hr>
                                        <h6 class="text-muted">Empate com...</h6>
                                        <p class="card-text text-left">Pedra:</p>
                                        <p class="card-text text-left">Papel:</p>
                                        <p class="card-text text-left">Tesoura:</p>
                                        <hr>
                                        <h6 class="text-muted">Derrota com...</h6>
                                        <p class="card-text text-left">Pedra:</p>
                                        <p class="card-text text-left">Papel:</p>
                                        <p class="card-text text-left">Tesoura:</p>
                                    </div>
                                    <div class="col">
                                        <h5>PC</h5><br>
                                        <h6 class="text-muted">Chance de...</h6>
                                        <p class="card-text text-left">Vitória:</p>
                                        <p class="card-text text-left">Empate:</p>
                                        <p class="card-text text-left">Derrota:</p>
                                        <hr>
                                        <h6 class="text-muted">Vitória com...</h6>
                                        <p class="card-text text-left">Pedra:</p>
                                        <p class="card-text text-left">Papel:</p>
                                        <p class="card-text text-left">Tesoura:</p>
                                        <hr>
                                        <h6 class="text-muted">Empate com...</h6>
                                        <p class="card-text text-left">Pedra:</p>
                                        <p class="card-text text-left">Papel:</p>
                                        <p class="card-text text-left">Tesoura:</p>
                                        <hr>
                                        <h6 class="text-muted">Derrota com...</h6>
                                        <p class="card-text text-left">Pedra:</p>
                                        <p class="card-text text-left">Papel:</p>
                                        <p class="card-text text-left">Tesoura:</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col">
                        <br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#historico">HISTÓRICO</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="historico" tabindex="-1" role="dialog" aria-labelledby="historico" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="historico">Histórico</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <?php 
                                foreach ($_SESSION['historico'] as $key => $value) {
                                    echo '
                                        <div class="card" style="width: 100%;">
                                        <div class="card-body">
                                            <h5 class="card-title">Jogo <strong>'.$_SESSION['historico'][$key]["numero"].'</strong></h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Jogador: <strong>'.$_SESSION['historico'][$key]["nome"].'</strong></h6>
                                            <br>
                                            <p class="card-text text-left">Escolha: <strong>'.ucfirst($_SESSION['historico'][$key]["escolha"]).'</strong></p>
                                            <p class="card-text text-left">Escolha do PC: <strong>'.ucfirst($_SESSION['historico'][$key]["escolhaPC"]).'</strong></p>
                                            <p class="card-text text-left">Configurações de Vitória:<strong>
                                    ';
                                    
                                    foreach ($_SESSION['historico'][$key]["configvitoria"] as $key2 => $value) {
                                        switch ($_SESSION['historico'][$key]["configvitoria"][$key2]) {
                                            case "vazio":
                                            echo '<br>Nenhuma opção selecionada.';
                                            break;

                                            case "vitoriapedra":
                                            echo '<br>Pedra';
                                            break;

                                            case "vitoriapapel":
                                            echo '<br>Papel';
                                            break;

                                            case "vitoriatesoura":
                                            echo '<br>Tesoura';
                                            break;
                                        }
                                    }

                                    echo '
                                            </strong></p><p class="card-text text-left">Configurações de Empate:<strong>
                                    ';

                                    foreach ($_SESSION['historico'][$key]["configempate"] as $key2 => $value) {
                                        switch ($_SESSION['historico'][$key]["configempate"][$key2]) {
                                            case "vazio":
                                            echo '<br>Nenhuma opção selecionada.';
                                            break;

                                            case "empatepedra":
                                            echo '<br>Pedra';
                                            break;

                                            case "empatepapel":
                                            echo '<br>Papel';
                                            break;

                                            case "empatetesoura":
                                            echo '<br>Tesoura';
                                            break;
                                        }
                                    }

                                    echo '
                                            </strong></p>
                                            <p class="card-text text-left">Vencedor: <strong>'.ucfirst($_SESSION['historico'][$key]["vencedor"]).'</strong></p>
                                        </div>
                                        </div>
                                    ';
                                }
                            ?>
                        

                            <pre class="text-left">
                            <?php
                            //print_r($_SESSION);
                            ?>
                            </pre>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                        </div>
                    </div>
                    </div>


                    <div class="col">
                        <br>
                        <a href="/" class="btn btn-primary">JOGAR DE NOVO</a>
                    </div>
                </div>
                <br>
                
            </div>
            <!-- FIM DA COLUNA CENTRAL -->

            <!-- COLUNA VAZIA -->
            <div class="col-md-3"></div>
        </div>
    </main>

    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>