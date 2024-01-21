<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="image/livro.png">
    <title>BibliaDesvenda</title>
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

        ::-webkit-scrollbar{
            width:10px;
        }

        ::-webkit-scrollbar-thumb{
            background-color:#b49292;
        }

        body{
            background-color:#2c3e50;
        }   

        #navbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            width:100%;
            background-color:#1e2630;
            height:150px;
        }

        nav img{
            width:250px;
        }

        nav ul{
            display:flex;
            flex-direction:row;
            justify-content:space-between;
            gap:70px;
            margin-right:20px;
            font-size:40px;
            font-family:fonte;
            color:white;
        }

        nav ul li a{
            text-decoration:none;
            color:white;
        }
        
        #basepage{
            margin-top:100px;
            margin-bottom:100px;
            display: flex;
            align-items: center;
            justify-content:center;
            width:100%;
        }

        #sectionbase{
            display:flex;
            justify-content:center;
            gap:20px;
            width:80%;
            
        }

        #questionssection{
            display:flex;
            flex-direction:column;
            align-items: start;
            justify-content:center;
            gap:40px;
            width:70%;

        }

        #formuserquestions{
            display:flex;
            flex-direction:column;
            justify-content:start;
        }
        
        #userquestion{ 
            background-color:#ececec;
            height:200px;
            box-shadow: 0px 8px 6px -6px #000;
            border-radius:15px;
            padding:20px;
            width:100%;
        }

        #userquestioninput{
            box-shadow: 0 0 0 0;
            border: 0 none;
            outline: 0;
            background-color:#ececec;
            font-size:25px;
        }

        #userdescription{
            box-shadow: 0 0 0 0;
            border: 0 none;
            outline: 0;
            background-color:#ececec;
            resize: none;
            width:100%;
        }

        #directioninput{
            display:flex;
            width:100%;
            justify-content:end;
        }

        #inputpublish{
           background-color:#6186ab;
            border-radius:10px;
            cursor:pointer;
            width:30%; 
            height:100%;
        }

        .questions{
            background-color:#ececec;
            height:300px;
            box-shadow: 0px 8px 6px -6px #000;
            border-radius:15px;
            padding:20px;
            display:flex;
            flex-direction:column;
            width:100%;

        }

        .userdate{
            font-size:15px;
            color:#574c4c;
        }

        .titlequestion{
            font-size:35px;
            color:#2c3e50;
            font-family:fonte;
            margin-bottom:7px;
        }

        .descriptionquestion{
            font-size:20px;
            color:black;
        }

        .conteineranswer{
            margin-top:auto;
            background-color:#797676;
            height:auto;
            border-radius:30px;
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
        }

        .answerquestion{
            width:100%;
            display:flex;
            align-items:center;
            justify-content:space-around;
        }

        .inputanswer{
            width:95%;
            padding:10px;
            border-radius:30px;
            height:80%;
            background-color:#b49292;
            border: 0 none;
        }

        input:focus {
            box-shadow: 0 0 0 0;
            outline: 0;
        }

        .answer{
            color:white;
            padding:10px;
            align-self:start;
            margin-left:15px
        }

        #analyticssction{
            display:flex;
            flex-direction:column;
            align-items: center;
            justify-content:start;
            gap:10px;
            width:30%;


        }

        #bestusers{
            margin-bottom:0 auto;
            background-color:#ffffff;
            padding:15px;
            border-radius:10px;
            border:2px solid #000;
            display:flex;
            align-items:center;
            flex-direction:column;
            height:250px;
            width:200px;

        }

        #bestquestions{
            margin-bottom:0 auto;
            background-color:#ffffff;
            padding:15px;
            border-radius:10px;
            border:2px solid #000;
            display:flex;
            align-items:center;
            flex-direction:column;
            height:250px;
            width:200px;
        }

        li {
            list-style-type: none;
        }

        .titleanalytics{
            font-size:25px;
            color:#abab0c;
            font-family:fonte;
        }
    </style>
</head>
<body>
    <nav id="navbar">
        <img src="image/livro.png" alt="">
        <ul>
            <?php echo "<li><span>Olá " . $_SESSION["nome"] . "!</span></li>"; ?>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
    <div id="basepage">
        <div id="sectionbase">
            <section id="questionssection">
                <div id="userquestion">
                    <form action="principalpage.php" id="formuserquestions" method="post">
                        <input type="text" name="userquestion" id="userquestioninput" placeholder="Sua pergunta aqui" required minlength="5">
                        <textarea rows="8"  required maxlength="500" name="userdescription" id="userdescription" placeholder="Sua descrição aqui..."></textarea>
                        <div id="directioninput">
                            <input type="submit" id="inputpublish" value="Publicar">
                        </div>
                    </form>
                </div>
                <?php
                    $pergunta = $_POST["userquestion"];
                    $descricao = $_POST["userdescription"];
                    $hoje = date('d/m/Y');
                        if(isset($pergunta)){
                            echo "<div class='questions'>
                            <p class='userdate'>@" . $_SESSION["nome"] . " - " . $hoje . "</p>
                            <h3 class='titlequestion'>" . $pergunta . "</h3>
                            <p class='descriptionquestion'>" . $descricao . "</p>
                            <div class='conteineranswer'>
                                <form action='principalpage.php' method='post' class='answerquestion' minlength='1'>
                                    <input type='text' name='resposta1' class='inputanswer' placeholder='Responda aqui...'>
                                </form>
                            </div>
                                
                        </div>";
                    }
                ?>
                <div class="questions">
                    <p class="userdate">@loica - 12/05/23</p>
                    <h3 class="titlequestion">Como equilibrar a graça divina com a responsabilidade humana na teologia cristã?</h3>
                    <p class="descriptionquestion">Minha dúvida surge ao tentar conciliar a graça divina e a responsabilidade humana na teologia cristã, especialmente em relação aos ensinamentos bíblicos sobre salvação e livre-arbítrio. Busco entender essa complexa relação para viver uma fé autêntica e alinhada com os princípios cristãos.</p>
                    <div class="conteineranswer">
                        <form action="principalpage.php" method="post" class="answerquestion" minlength="1">
                            <input type="text" name="resposta1" class="inputanswer" placeholder="Responda aqui...">
                        </form>
                        <?php
                            $resposta1 = $_POST["resposta1"];
                                if(isset($resposta1)){
                                echo "<p class='answer'><b>@" . $_SESSION["nome"] . "</b> - " . $resposta1 . "</p>";
                            }
                        ?>
                    </div>
                        
                </div>
                <div class="questions">
                    <p class="userdate">@clovis - 01/02/23</p>
                    <h3 class="titlequestion">Após perder um ente querido, como reconciliar o sofrimento humano com a bondade de Deus?</h3>
                    <p class="descriptionquestion">Após perder alguém querido, questionei como um Deus amoroso permitiria tanta dor. Isso me levou a refletir sobre o problema do mal à luz da minha fé cristã, especialmente como conciliar o sofrimento humano com a onipotência, onisciência e amor de Deus. Minha dúvida surgiu durante um período de luto, quando buscava entender essa aparente contradição.</p>
                    <div class="conteineranswer">
                            <form action="principalpage.php" method="post" class="answerquestion" minlength="1">
                                <input type="text" name="resposta2" class="inputanswer" placeholder="Responda aqui...">
                            </form>
                            <?php
                                $resposta2 = $_POST["resposta2"];
                                if(isset($resposta2)){
                                    echo "<p class='answer'><b>@" . $_SESSION["nome"] . "</b> - " . $resposta2 . "</p>";
                                }
                            ?>
                    </div>
                </div>
                <div class="questions">
                    <p class="userdate">@ebradim - 23/08/23</p>
                    <h3 class="titlequestion">Diante das diversas interpretações bíblicas, como saber qual é a correta?</h3>
                    <p class="descriptionquestion">Após envolver-me em debates teológicos e grupos de estudo bíblico com interpretações diversas, surgiu a dúvida sobre como identificar a interpretação mais precisa da Bíblia. Essa inquietação decorreu da busca por clareza e aprofundamento da minha fé cristã em meio a diferentes pontos de vista.</p>
                    <div class="conteineranswer">
                            <form action="principalpage.php" method="post" class="answerquestion" minlength="1">
                                <input type="text" name="resposta3" class="inputanswer" placeholder="Responda aqui...">
                            </form>
                            <?php
                                $resposta3 = $_POST["resposta3"];
                                if(isset($resposta3)){
                                    echo "<p class='answer'><b>@" . $_SESSION["nome"] . "</b> - " . $resposta3 . "</p>";
                                }
                            ?>
                    </div>
                </div>
            </section>
            <section id="analyticssction">
                <div id="bestusers">
                    <h3 class="titleanalytics">Top Users</h3>
                    <ul>
                        <li><b>1.</b>@ronaldopregador</li>
                        <li><b>2.</b>@fernandoevangelista</li>
                        <li><b>3.</b>@andrereformado</li>
                        <li><b>4.</b>@felipe2240prega</li>
                        <li><b>5.</b>@ricoduarte777</li>
                    </ul>
                </div>
                <div id="bestquestions">
                    <h3 class="titleanalytics"> Top Questions</h3>
                    <ul>
                        <li><b>1.</b>O que é a Trindade na fé cristã?</li>
                        <li><b>2.</b>Qual é o significado da redenção?</li>
                        <li><b>3.</b>O que é a Ressurreição de Jesus?</li>
                        <li><b>4.</b>O que é a predestinação na teologia cristã?</li>
                        <li><b>5.</b>Qual é a importância da fé na salvação cristã?</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</body>
</html>