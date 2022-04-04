<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <!-- dinamico -->
        <div class = "container">
            <h1>Formulário Cadastro</h1>
            <div class="row">
                <form class="col s12" action="medico.controller.php?acao=inserir" method="post">
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <input id="nome" type="text" name="nome" class="validate">
                            <label for="nome">Nome</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <input id="email" type="email" name="email" class="validate">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <input id="senha" type="password" name="senha" class="validate">
                            <label for="senha">Senha</label>
                        </div>
                    </div>


                    <input type="hidden" name="id" >
                    <input type="hidden" name="id_esp">
                    <input type="submit" a class="waves-effect waves-light btn" name="submit" value="Enviar">
                </form>
            </div>
        </div>
        <!--Import jQuery before materialize.js-->


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        </body>
</html>