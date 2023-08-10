<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container-image">
        <img src="_cdn/images/image.svg" alt="">
    </div>
    <div class="container-login">
        <form class="form">
            <div class="form-title">
                <p>Bem-Vindo de Volta</p>
                <h1>Faça login na sua conta</h1>
            </div>
            <div class="form-login">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="exemple@gmail.com">
                <label for="senha">Senha</label>
                <input type="passward " id="senha" placeholder="********">
            </div>
            <div class="form-radio">
                <input type="radio" id="lembrar-login">
                <label for="lembrar-login">Lembrar de mim</label>
                <a href="#">Esqueceu sua senha?</a>
            </div>
            <div class="form-button">
                <button class="btn btn-login">Entrar</button>
                <button class="btn btn-login-google"><img src="_cdn/images/google.svg" alt="image-google">ou faça login com o Google</button>
            </div>
            <div class="cadastro">
                <p>Não tem uma conta?<a href="#">Cadastre-se</a></p>
            </div>
        </form>
    </div>    
</body>
</html>