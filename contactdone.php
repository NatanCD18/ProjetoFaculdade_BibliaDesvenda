<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="image/livro.png">
    <style>
        @font-face{
            font-family: fonte;
            src:url(fontes/SandlerTrial.otf)
        }
        
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }

        body{
            display:flex;
            align-items: center;
            justify-content:center;
            flex-direction:column;
            height:100vh;
            background-color:#2c3e50;
            color:#ecf0f1;
            gap: 30px;
        } 

        .fonttop{
            font-family:fonte;
        }

        .shadow{
            text-shadow: black 0.1em 0.1em 0.2em
        }

        #mensageconteiner{
            display:flex;
            flex-direction: column;     
            background-color: #34495e;
            border-radius:10px;
            padding:14px;
            width: 50%;
        }

        a{
            text-decoration:none;
            color:white;
        
        }

        a:hover{
            color:#6186ab;
            transform: scale(1.1);
            transition:2s;
            
        }

    </style>
    <title>Contato</title>
</head>
<body>
    <?php
        $nomecontato = $_POST["nomecontato"];
        $emailcontato = $_POST["emailcontato"];
        $mensagem = $_POST["duvida"];
    ?>
    <h1 class="fonttop shadow" style="font-size:45px;">Recebemos sua mensagem!</h1>
    <h3 class="fonttop shadow" style="font-size:30px;">Vamos trabalhar rapidamente para responde-lo!</h3>
    <h4 class="fonttop shadow" style="font-size:25px;">Sua mensagem:</h4>
    <div id="mensageconteiner">
        <?php echo "<p> Nome:" . $nomecontato . "<br> Email:" . $emailcontato . "<br>" . $mensagem; ?>
    </div>
    <a href="index.php">Voltar</a>
</body>
</html>