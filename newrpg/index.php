<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/mystyle.css">
        <title>Cadastro Rpg</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    </head>
    <body background="images/back.jpg">
            <form action="Personagem.php" method="post">
                <div class="centro2">
                <img src="images/logo.png">
                <BR>
                <div class="folha">
                    
                    <div>
                        <label for=" nivel">Nivel<br></label>
                        <input type="nivel" name="nmbNivel" id="nivel"><br> 
                    </div>
                    <div>
                        <label for=" nome">Nome<br></label>
                        <input type="text" name="nome" id="nome"><br>
                    </div>
                    <div>
                        <label for="raca">Raça<br></label>
                        <input type="text" name="raca" id="raca"><br>
                    </div>
                    <div>
                        <label for="profissao">Profissão<br></label>
                        <input type="text" name="profissao" id="profissao"><br>
                    </div>
                    <div>
                        <label for="constituicao">Constituição<br></label>
                        <input type="number" name="constituicao" id="constituicao"><br>
                    </div>
                    <div>
                        <label for="destreza">Destreza<br></label>
                        <input type="number" name="destreza" id="destreza"><br>
                    </div>
                    <div>
                        <label for="forca">Força<br></label>
                        <input type="number" name="forca" id="forca"><br>
                    </div>
                    <div>
                        <label for="inteligencia">Inteligência<br></label>
                        <input type="number" name="inteligencia" id="inteligencia"><br>
                    </div>
                    <div>
                        <label for="sabedoria">Sabedoria<br></label>
                        <input type="number" name="sabedoria" id="sabedoria"><br>
                    </div>
                    <div>
                        <label for="carisma">Carisma<br></label>
                        <input type="number" name="carisma" id="carisma"><br>
                    </div>
                    <div>
                        <label for="arma">Arma<br></label>
                        <input type="text" name="arma" id="arma"><br>
                    </div>
                    <div>
                        <label for="categoria">Categoria de Armadura<br></label>
                        <input type="number" name="categoria" id="categoria"><br>
                    </div>
                    <div>
                        <label for="vida">Pontos de Vida<br></label>
                        <input type="number" name="vida" id="vida"><br>
                    </div>
                    <div>
                        <label for="magiaDia">Qt de Magias por Dia<br></label>
                        <input type="number" name="magiaDia" id="magiaDia"><br>
                    </div>
                    
                </div>
                    <div class="cadastro">
                        <label for="cadastrar">Cadastrar<br></label>
                        <input type="submit" name="cadastrar" id="cadastrar"><br>
                    </div>
                </div>
            </form>
        </body>
</html>