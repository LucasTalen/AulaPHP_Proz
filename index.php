<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
    <form method="POST" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <div id="nome">
                <label for="">Nome</label>
                <input type="text" id="nome_input" required name="nome_input"><br>
            </div>
            <div id="CPF">
                <label for="">CPF</label>
                <input type="text" id="cpf_input" required name="cpf_input"><br>
            </div>
            <div id="telefone">
                <label for="">Telefone</label>
                <input type="text" id="telefone_input" required name="telefone_input"><br>
            </div>
            <div id="nascimento">
                <label for="">Data que veio ao mundo</label>
                <input type="date" id="nascimento_input" required name="nascimento_input"><br>
            </div>
            <div id="email">
                <label for="">Email</label>
                <input type="text" id="email_input" required name="email_input">
            </div>
            <div id="estudante">
                <input type="checkbox" id="eh_estudante" name="eh_estudante">
                <label for="" >Você é estudante</label><br>
            </div>
            <div id="button_form">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST"){


            $nome = $_POST["nome_input"];
            $cpf = $_POST["cpf_input"];
            $telefone = $_POST["telefone_input"];
            $nascimento = $_POST["nascimento_input"];
            $email = $_POST["email_input"];
            $eh_estudante = isset($_POST["eh_estudante"])? "Sim":"Não";
            $idade = date_diff(date_create($nascimento), date_create('today'))->y;
            echo "Eu $nome,$eh_estudante sou estudante. Meu numero de CPF é $cpf, nasci em $nascimento e tenho $idade anos de idade. Meu telefone para contato é $telefone e o meu email é $email";

    
        // 
    }elseif ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_POST)) {
        echo "Erro!! Formulario não enviado.";
    }
    else{
        //nada a fazer 
    }
    ?>


</body>
</html>
