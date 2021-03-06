<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP PDO CRUDE</title>

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

</head>

<body>

    <div class="container">
        <div class="card-panel">
            <form action="inserir.php" method="post">
                <h5>Novo contato</h5>
                <div class="row">
                    <div class="input-field col s8">
                        <label for="nome">Preencha os campos</label>
                        <input type="text" name="nome" id="nome" value="" placeholder="Nome" />
                    </div>

                    <div class="input-field col s4">
                        <input type="text" name="telefone" value="" placeholder="Telefone" />
                    </div>
                </div>

                <button class="btn waves-effect waves-light right" type="submit" name="submit" value="Submit">Salvar
                    <i class="material-icons right">save</i>
                </button>
            </form>
        </div>

        <div class="card-panel">
            <h5>Contatos cadastrados</h5>
            <table class='striped'>
                <thead>
                    <tr>
                        <th><i class='material-icons left'>face</i>Contato</th>
                        <th><i class='material-icons left'>contact_phone</i>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'leitura.php';
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</body>

</html>