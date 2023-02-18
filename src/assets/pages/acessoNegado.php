<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/4.7.0/css/font-awesome.min.css">

    <title>Acesso Negado</title>
</head>

<body>

    <div class="w3-padding w3-content w3-text-grey w3-display-middle">

        <?php
        echo '
                <a href="../../../index.php">
                    <h1 class="w3-button w3-teal">Acesso NEGADO!</h1>
                    <br>
                </a> 
                <h2>
                    É necessária a Realização do 
                    <a href="../../../src/assets/pages/login.php">Login</a> ou 
                    <a href="../../../src/assets/pages/cadastro.php">Cadastro!</a>
                </h2>
            ';
        ?>
    </div>

</body>
</html>

<style>
    div {
        text-align: center;
        width: 100%;
    }

    h2 {
        background-color: #ccc;
        color: #000000c4;
        padding: 10px;
    }

    h2 a {
        color: blue;
    }

/* Para telas menores: celulares até 767px */
@media screen and (min-width: 0) and (max-width: 767px) {
    .w3-button {
        white-space: normal;

    }

    div {
        text-align: center;
        width: 100%;
    }

    h1 {
        font-size: 2rem;
    }

    h2 {
        font-size: 1.5rem;
    }
}
</style>