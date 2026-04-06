<?php 
require_once __DIR__ . '/../private/app/register.php';
require_once __DIR__ . '/../private/app/auth.php';

$mensagem = "";

// formulário de cadastro
if (isset($_POST['register'])) {
    $nome = $_POST['name-register'];
    $email = $_POST['email-register'];
    $senha = $_POST['password-register'];
    $confirm = $_POST['confirm-register'];

    $res = registerUser($nome, $email, $senha, $confirm);
    if ($res === 0) $mensagem = "Usuário cadastrado com sucesso! faça login.";
    elseif ($res === 1) $mensagem = "Email ja cadastrado!";
    elseif ($res === 2) $mensagem = "Senhas não conferem!";
}

// formulário de login
if (isset($_POST['login'])) {
    $email = $_POST['name-log'];
    $senha = $_POST['password-log'];

    if(loginUser($email, $senha)) {
        header("Location: ../public/dashboard.php");
        exit;
    }
    else {
        $mensagem = "Email ou senha incorretos!";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caio Monte</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
</head>

<!-- imports CSS -->
<div>   
    <link rel="stylesheet" href="./assets/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</div>

<!-- HTML -->
<body>

    <!-- barra de navegação -->

    <nav class="navbar">
        <div class="navbar-container">

            <div class="navbar-home" href="index.php">
                <a href="./index.php">
                    <img src="images/navbar_logo.png" alt="" class="navbar-logo">
                </a>
                
                <div class="navbar-search">
                    <input type="text" placeholder="Buscar...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

            
            <div class="navbar-links">
                <a class="link" href="#">Início</a>
                <a class="link" href="#">Blog</a>
                <a class="link" href="#">Nossos cursos</a>
                <a class="link" href="#">Capitão da nave</a>
            </div>
        </div>
    </nav>


    <!-- contatos -->

    <article class="contacts">

        <div class="contacts-container">
            <a id="contact-1" class="contacts-group" href="https://github.com/osmozeInc" target="_blank">
                <div class="text-container">
                    <p id="contact-text-1" class="contact-text">osmozeInc</p>
                </div>
                <i class="fa-brands fa-github fa-xl contact-icon"></i>
                <div class="text-container-reverse">
                    <p id="contact-text-reverse-1" class="contact-text-reverse">osmozeInc</p>
                </div>
            </a>
            <a id="contact-2" class="contacts-group" href="https://www.instagram.com/caiomonte.py/" target="_blank">
                <div class="text-container">
                    <p id="contact-text-2" class="contact-text">caiomonte.py</p>
                </div>    
                <i class="fa-brands fa-instagram fa-xl contact-icon"></i>
                <div class="text-container-reverse">
                    <p id="contact-text-reverse-2" class="contact-text-reverse">caiomonte.py</p>
                </div>
            </a>
            <a id="contact-3" class="contacts-group" href="https://www.linkedin.com/in/dev-caiomonte/" target="_blank">
                <div class="text-container">
                    <p id="contact-text-3" class="contact-text">dev-caiomonte</p>
                </div>  
                <i class="fa-brands fa-linkedin fa-xl contact-icon"></i>
                <div class="text-container-reverse">
                    <p id="contact-text-reverse-3" class="contact-text-reverse">dev-caiomonte</p>
                </div>
            </a>
            <a id="contact-4" class="contacts-group" href="mailto:caiomm076@gmail.com" target="_blank">
                <div class="text-container">
                    <p id="contact-text-4" class="contact-text">Email</p>
                </div>  
                <i class="fa-solid fa-envelope fa-xl contact-icon"></i>
                <div class="text-container-reverse">
                    <p id="contact-text-reverse-4" class="contact-text-reverse">Email</p>
                </div>
            </a>
        </div>
      
        <!-- icone de contatos -->
        <div class="contact-circle">
            <i id="blink-icon-0" class="icon fa-solid fa-user"></i>
            <i id="blink-icon-1" class="icon fa-solid fa-code"></i>
            <i id="blink-icon-2" class="icon fa-brands fa-instagram"></i>
            <i id="blink-icon-3" class="icon fa-brands fa-linkedin-in"></i>
            <i id="blink-icon-4" class="icon fa-regular fa-envelope"></i>
        </div>
        
    </article>
    

    <!-- seção principal -->

    <section class="main-section">
        
        <!-- seção lateral principal -->
        <div id="main-section-left" class="animation-section">
            <div class="animation-container">
                <div class="animation-shadow"></div>
                <div class="animation-monitor">
                    <div class="animation-screen">
                        <div class="animation-window">
                            <div class="animation-0">
                                <div class="lt">
                                    <div class="slash-1"></div>
                                    <div class="slash-2"></div>
                                </div>

                                <div class="circle-1"></div>

                                <div class="circle-2"></div>

                                <div class="slash"></div>

                                <div class="mt">
                                    <div class="slash-1"></div>
                                    <div class="slash-2"></div>
                                </div>

                            </div>

                            <div class="animation-1">

                            </div>
                        </div>
                    </div>
                    <div class="animation-suport"></div>
                    <div class="animation-feet"></div>
                </div>
            </div>
        </div>
        
        <!-- seção de login -->
        <div class="login-section">
            <h1 class="login-title">Conecte-se</h1>
            <p class="login-subtitle">Crie uma conta ou entre para acessar nossos cursos e serviços</p>
                
            <div class="login-container">
                <div class="conect-type">
                    <p class="p" id="log-in">Entrar</p>
                    <p class="p" id="sign-in">Criar Conta</p>
                </div>
                
                <div class="selection-bar">
                    <div class="selection-type-bar">
                    </div>
                </div>
                    
                <form class="log-in" method="post">
                    <input class="input" id="email-log" name="name-log" id="name-log" type="text" placeholder="E-mail" required>
                    <input class="input" id="password-log" name="password-log" id="password-log" type="password" placeholder="Senha" required>
                    
                    <a href="" class="a">Esqueci a Senha</a>
                    
                    <input class="button" name="login" type="submit" value="Entrar">
                </form>

                <form class="sign-up" method="post">
                    <input class="input" id="name-register" name="name-register" type="text" placeholder="Nome" required>
                    <input class="input" id="email-register" name="email-register" type="email" placeholder="E-mail" required>
                    <input class="input" id="password-register" name="password-register" type="password" placeholder="Senha" required>
                    <input class="input" id="confirm-register" name="confirm-register" type="password" placeholder="Confirme a Senha" required>
                    
                    <input class="button" type="submit" name="register" value="Criar Conta">
                </form>

                <div class="register-message">
                    <?php echo $mensagem; ?>
                </div>
            </div>
        </div>
        
        <canvas id="canvas-particulas" class="canvas-particulas"></canvas>    

    </section>



    <!-- imports JavaScript -->
    <div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="./assets/my.js?v=<?php echo time(); ?>" type="module"></script>
        <script src="./assets/script_contatos.js?v=<?php echo time(); ?>" type="module"></script>
    </div>
</body>
</html>