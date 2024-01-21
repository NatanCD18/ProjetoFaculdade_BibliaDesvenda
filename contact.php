
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="image/livro.png">
    <title>Contato</title>
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
        
        .fonttop{
            font-family:fonte;
        }

        .shadow{
            text-shadow: black 0.1em 0.1em 0.2em
        }

        .onlycenter{
            display:flex;
            align-items: center;
            justify-content:center;
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

        form{
            display:flex;
            flex-direction: column;     
            background-color: #34495e;
            border-radius:10px;
            padding:14px;
            width: 50%;
        }

        #conteinercontato{
            display:flex;
            flex-direction: row;
            justify-content: space-between;
        }

        form label{
            font-size:20px;
            margin-right:10px;
            
        }

        form input{
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid;
            width:100%;
            border-radius:10px;
        }
        
        form textarea{
            resize: none;
            border-radius:10px;
            padding: 10px;
            border: 1px solid;
            margin-bottom: 15px;
        }

        #formsubmit{
            width:50%;
            background-color:#6186ab;
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

    </style>
</head>
<body>
    <h1 class="fonttop shadow" style="font-size:45px;">Quer falar conosco?</h1>
    <p class="fonttop shadow" style="font-size:30px; text-align: center;">Envie sua dúvida ou recomendação aqui. <br> Vamos fazer o possível para responde-lo o mais rápido possível.</p>
    <form action="contactdone.php" method="post">
        <div id="conteinercontato">
            <div>
                <label for="nomecontato">Nome</label>
                <input type="text" name="nomecontato" required maxlength="100">
            </div>
            <div>
                <label for="emailcontato">Email de Usuário</label>
                <input type="email" name="emailcontato" required maxlength="256">
            </div>
        </div>
        <label for="duvida">Escreva sua Dúvida</label>
        <textarea rows="10" cols="50" required maxlength="500" name="duvida"></textarea>
        <div class="onlycenter">
            <input type="submit" value="Enviar" id="formsubmit">
        </div>
    </form>
    <a href="index.php" id="link">Voltar</a>
</body>
</html>