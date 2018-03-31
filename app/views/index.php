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

    <script src="public/js/limpar.js"></script>
  </head>
  <body>
    <main role="main" class="container">
        <div class="row">

          <!-- COLUNA VAZIA -->
          <div class="col-md-3"></div>

          <!-- COLUNA CENTRAL -->
          <div class="col-md-6">

            <h1 class="text-center titulo">Pedra, Papel, Tesoura</h1>
            <br>

            <!-- FORMULÁRIO -->
            <form action="/calcular" method="post">
              <!-- LISTA COM O CONTEÚDO -->
              <ul class="list-group">
                <li class="list-group-item"><strong>Faça Sua Escolha!</strong></li>
                  <div class="form-group">
                    <!-- INPUT 1 (ESCOLHA) -->
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Opções</label>
                      </div>
                      <select class="form-control custom-select" id="inputGroupSelect01" name="escolha">
                        <option selected value="aleatorio">Aleatório</option>
                        <option value="pedra">Pedra</option>
                        <option value="papel">Papel</option>
                        <option value="tesoura">Tesoura</option>
                      </select>
                    </div>
                  </div>

                  <li class="list-group-item"><strong>Informações!</strong></li>
                  <!-- INPUT 2 (INFORMAÇÕES) -->
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome:</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nome" required maxlength="15">
                    </div>
                  </div>

                  <li class="list-group-item"><strong>Configurações Avançadas!</strong></li>
                  <!-- INPUT 2 (AVANÇADO) -->
                  <div class="input-avancado">

                    <p>Vitória possível usando:</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="vitoriapedra" checked name="configvitoria[]">
                      <label class="form-check-label" for="inlineCheckbox1">Pedra</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="vitoriapapel" checked name="configvitoria[]">
                      <label class="form-check-label" for="inlineCheckbox2">Papel</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="vitoriatesoura" checked name="configvitoria[]">
                      <label class="form-check-label" for="inlineCheckbox3">Tesoura</label>
                    </div>

                    <hr>

                    <p>Empate contra:</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="empatepedra" name="configempate[]">
                      <label class="form-check-label" for="inlineCheckbox4">Pedra</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="empatepapel" name="configempate[]">
                      <label class="form-check-label" for="inlineCheckbox5">Papel</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="empatetesoura" name="configempate[]">
                      <label class="form-check-label" for="inlineCheckbox6">Tesoura</label>
                    </div>
                  </div>
              </ul>
              <!-- FIM DA LISTA -->

              <br>
              <input class="btn btn-primary float-right" type="submit" value="JOGAR">

            </form>
            <!-- FIM DO FORMULÁRIO -->
              
              <button class="btn btn-primary disabled" onclick="limpar()">LIMPAR</button>
              <a href="/resetar" class="btn btn-primary">RESETAR DADOS</a>

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