<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibliaDesvenda</title>
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
            height:100vh;
            gap:75px;
            background-color:#2c3e50;
            color:#ecf0f1;
        }   

        #indexconteiner{
            display:flex;
            flex-direction: row;
            justify-content:center;
        }

        #conteinerimagem{
            width:100%;
            display:flex;
            align-items: center;
            justify-content:center;
        }

       
        #divlogin{
            display:flex;
            flex-direction: column;
            align-items: flex-start;
            color:white;
            width:100%;
            gap:30px
        
        }
        form{
            display:flex;
            flex-direction: column;     
            background-color: #34495e;
            height:80%;
            width:70%;
            border-radius:10px;
            padding:14px;
        }

        form label{
            font-size:20px;
            margin-top:10px;
        }

        form input{
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid;
            margin-bottom:20px;
        }

        #formsubmit{
            background-color:#6186ab;
            width:60%;
            border-radius:10px;
            cursor:pointer;
            transition: background 1s;
        }

        #formsubmit:hover{
            background:#0f5dab
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

        .onlycenter{
            display:flex;
            align-items: center;
            justify-content:center;
            height:100%;
        }

        .fonttop{
            font-family:fonte;
        }

        .shadow{
            text-shadow: black 0.1em 0.1em 0.2em
        }
    </style>
</head>
<body> 
    <div id="indexconteiner">
        <div id="conteinerimagem">
            <img src="image/livro.png" alt="Logo da página: imagem de um livro no fundo, com o nome do site 'bibliadesvendada' sobrepondo.">
        </div>
        <div id="divlogin">
            <h1 class="fonttop shadow" style="font-size:45px;">Descubra os Mistérios da Teologia!</h1>
            <h2 class="fonttop shadow" style="font-size:35px;">Entre Agora!</h2> 
            <form action="login.php" method="post">
                <label for="nome">Nome de Usuário</label>
                <input type="text" name="nome">
                <label for="senha">Senha</label>
                <input type="password" name="senha" >
                <?php
                    if($_SESSION["erro"] !=""){
                        echo $_SESSION["erro"];
                    }
                ?>  
                <div class="onlycenter">
                    <input type="submit" value="Entrar" id="formsubmit">
                </div>
               <div style="justify-content:space-around;" class="onlycenter">
                    <a href="contact.php">Fale Conosco</a>
                    <a href="group.php">Grupo</a>
                </div>               
            </form> 
        </div>
    </div>
</body>
</html> 