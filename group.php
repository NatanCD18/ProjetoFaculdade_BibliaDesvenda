<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="image/livro.png">
    <title>Grupo</title>
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
        
        body{
            display:flex;
            align-items: center;
            justify-content:center;
            flex-direction:column;
            height:100vh;
            background-color:#2c3e50;
            color:#ecf0f1;
        } 

        #conteinergroup{
            display:flex;
            align-items:center;
            justify-content:center;
            width:70%;
            background-color: #34495e;
            border-radius:10px;
            border: solid 10px #ffffff;
            height:600px;
            gap:30px;
        }

        #imageconteiner{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            gap:10px;
            
        }

        #imageconteiner img{
            width:300px;
            height:300px;
            border-radius:50%;
            object-fit: cover;
            border: 3px solid #000;
        }

        #ajustnames{
            display:flex;
            flex-direction:column;
            align-items:center;
            width:100%;
            height:50%;
            gap:10px;
        }

        #ajust{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 50%;
            height:50%;
        }

        .namesconteiner{
            display:flex;
            width:100%;
            justify-content:space-between;
            gap:10px;
            
        }

        .align{
            text-align:center;
            border:solid 2px white;
            width:100%;
            padding:10px;
            font-size:20px;
            cursor:pointer;
        }

        #notice{
            font-size:25px;
            position:absolute;
            transition: opacity 0.5s;
        }

        .description{
            position:absolute;
            font-size:20px;
            width:30%;
            opacity:0;
        }

        #conteinermensage{
            display:flex;
            align-items:center;
            justify-content:center;
            height:50%;
        }

        #p1 {
            opacity: 0;
            transition: opacity 0.5s;
        }
        
        #p2 {
            opacity: 0;
            transition: opacity 0.5s;
        }

        #p3 {
            opacity: 0;
            transition: opacity 0.5s;
        }

        #p4 {
            opacity: 0;
            transition: opacity 0.5s;
        }

        #p5 {
            opacity: 0;
            transition: opacity 0.5s;
        }

        #p6 {
            opacity: 0;
            transition: opacity 0.5s;
        }

        a{
            text-decoration:none;
            color:white;
            margin-top:20px;
            font-size:25px;
            background-color:#6186ab;
            border-radius:10px;
            padding:5px;
        }

        a:hover{
            transform: scale(1.1);
            transition:2s;
            
        }
    </style>
</head>
<body>
    <h1 style="font-size:50px;" class="fonttop shadow">Grupo</h1>
    <div id="conteinergroup">
        <div id="imageconteiner">
            <img src="image/fotoperfil.jpg" alt="">
            <h3>Natan Cordeiro</h3>
            <p>RGM: 34062416</p>
            <a href="index.php" id="link">Voltar</a>
        </div>
        <div id="ajust">
            <div id="ajustnames">
                <div class="namesconteiner">
                    <span class="align" id="n1">index.php</span>
                    <span class="align" id="n2">login.php</span>
                    <span class="align" id="n3">principalpage.php</span>
                </div>
                <div class="namesconteiner">
                    <span class="align" id="n4">logout.php</span>
                    <span class="align" id="n5">contact.php</span>
                    <span class="align" id="n6">contactdone.php</span>
                </div>
            </div>    
            <div id="conteinermensage">
                <p class="fonttop" id="notice">Coloque o mouse sobre um dos nomes da página</p>
                <p class="description fonttop" id="p1">Nesta primeira página usamos o session para reconhecer a variável "erro" criada após tentar fazer login no site, ela verifica se os dados inseridos foram os corretos.</p>
                <p class="description fonttop" id="p2">Nesta página ele armazena os valores de senha e usuário em variáveis, após isso valida analisando se usuario e senha são iguais ao necessário, se sim, cria uma variável que mostra que o usuário está logado, armazena o nome em um session para ser utilizado em outras páginas e manda para a principalpage.php se não for igual ele redireciona o usuário para o index.php e informa que usuário e senhas estão incorretos.</p>
                <p class="description fonttop" id="p3">Nesta página temos instruções em php onde a máquina interpreta o que o usuário escreveu no campo de digite sua pergunta e ele é "publicado", temos também instruções onde faz com que o usuário possa responder perguntas de outras pessoas. Neste site foi utilizado a variável name com sessions, para dar boas vindas ao usuário e também para as respostas e publicações serem postadas com o seu nome.</p>
                <p class="description fonttop" id="p4">Destroí as variáveis sessions deslogando o usuário da página redirecionando ele para o index.php.</p>
                <p class="description fonttop" id="p5">Nesta página não usamos php, mas ela é usada para receber a dúvida que o usuário tem e manda para o site</p>
                <p class="description fonttop" id="p6">Nesta página recebemos o nome de quem enviou a dúvida, seu email, e a própria dúvida. Ela é mostrada ao usuário e mostra quem recebemos ela.</p>
            </div>
        </div>
    </div>
    <!-- Obs: Eu sei que esse código Javascript está muito ruim, mas não achei uma forma de criar uma função para isso. -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const n1 = document.getElementById("n1");
            const p1 = document.getElementById("p1");
            const n2 = document.getElementById("n2");
            const p2 = document.getElementById("p2");
            const n3 = document.getElementById("n3");
            const p3 = document.getElementById("p3");
            const n4 = document.getElementById("n4");
            const p4 = document.getElementById("p4");
            const n5 = document.getElementById("n5");
            const p5 = document.getElementById("p5");
            const n6 = document.getElementById("n6");
            const p6 = document.getElementById("p6");
            const notice = document.getElementById("notice");
            n1.addEventListener("mouseover", function() {
                p1.style.opacity = 1;
                notice.style.opacity = 0;
            });

            n1.addEventListener("mouseout", function() {
                p1.style.opacity = 0;
                notice.style.opacity = 1;
            });
            n2.addEventListener("mouseover", function() {
                p2.style.opacity = 1;
                notice.style.opacity = 0;
            });

            n2.addEventListener("mouseout", function() {
                p2.style.opacity = 0;
                notice.style.opacity = 1;
            });
            n3.addEventListener("mouseover", function() {
                p3.style.opacity = 1;
                notice.style.opacity = 0;
            });

            n3.addEventListener("mouseout", function() {
                p3.style.opacity = 0;
                notice.style.opacity = 1;
            });
            n4.addEventListener("mouseover", function() {
                p4.style.opacity = 1;
                notice.style.opacity = 0;
            });

            n4.addEventListener("mouseout", function() {
                p4.style.opacity = 0;
                notice.style.opacity = 1;
            });
            n5.addEventListener("mouseover", function() {
                p5.style.opacity = 1;
                notice.style.opacity = 0;
            });

            n5.addEventListener("mouseout", function() {
                p5.style.opacity = 0;
                notice.style.opacity = 1;
            });
            n6.addEventListener("mouseover", function() {
                p6.style.opacity = 1;
                notice.style.opacity = 0;
            });

            n6.addEventListener("mouseout", function() {
                p6.style.opacity = 0;
                notice.style.opacity = 1;
            });
        });
    </script>
</body>
</html>