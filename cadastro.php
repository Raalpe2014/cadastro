<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="public">
    <meta name="copyrigth" content="Raalpe_dev16">
    <meta name="description" content="Tela de Login de Estudo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robot" content="index">
    <meta name="generator" content="VSCode">
    <title>Cadastro</title>
</head>
<body>



    <header>
        <H1 id=tituloPagina>Cadastre-se!</H1>
    </header>




    <main>

        <div> <p id="tituloForm">complete suas informações:</p> </div> 
        <form>
            <fieldset class="grupo">

                <div class="campo">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <div class="campo">
                    <label>Sobrenome:</label>
                    <input type="text" name="sobrenome" id="sNome" required> 
                </div>

            </fieldset>

            <fieldset class="grupo">

                <div class="campo">
                    <label>e-mail:</label>
                    <input type="email" name="email" id="e-mail" required>
                </div>

                <div class="campo"> 
                    <label>senha:</label>
                    <input type="password" name="senha" id="senha" required> 
                </div>

                <div class="campo">
                    <label>confirmar senha:</label>
                    <input type="password" name="Confirmar senha" id="cSenha" required>
                </div>

                <div class="campo">
                    <label>Como gostaria de ser chamado?</label>

                        <label>
                        <input type="radio" name="Ele" value="Ele" required>"Ele"
                        </label>

                        <label>
                            <input type="radio" name="ELa" value="Ela" required>"Ela"
                        </label>
                </div>
            </fieldset>
        <button type="submit">Cadastrar</button>
            
        </form>


    </main>




    <footer>

    </footer>
    
</body>
</html>