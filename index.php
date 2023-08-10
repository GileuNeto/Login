<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_cdn/css/style.css">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="container_image">
            <img src="_cdn/images/image.svg" alt="">
        </div>
        <div class="container_login">
            <div class="form_content">
            <div class="form_title">
                <p>Bem-Vindo de Volta</p>
                <h1>Faça login na sua conta</h1>
            </div>
            <form class="form">
            <div class="form_login">
                <label for="email">E-mail</label><br>
                <input type="email" id="email" placeholder="exemple@gmail.com"><br>
                <label for="senha">Senha</label><br>
                <input type="passward " id="senha" placeholder="********">
            </div>  
            <div class="form_radio">
                <div class="radio_content">
                    <input type="radio" id="lembrar_login">
                    <label for="lembrar_login">Lembre de mim</label>  
                </div>
                <a href="#">Esqueceu sua senha?</a>
            </div>
            <button class="btn btn-entrar">Entrar</button>
            <button class="btn btn-google"><img src="_cdn/images/google.svg" alt="image-google">ou faça login com o Google</button>
            </form>
            </div>
            <div class="cadastro">
                <p>Não tem uma conta?<a href="#">Cadastre-se</a></p>
            </div>
            
        </div> 
    </main>       
</body>
</html>