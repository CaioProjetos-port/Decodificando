<?php 
require_once __DIR__ . '/app/register.php';

$mensagem = "";

// formulário de cadastro
if (isset($_POST['register'])) {
    $nome = $_POST['name-register'];
    $email = $_POST['email-register'];
    $senha = $_POST['password-register'];
    $confirm = $_POST['confirm-register'];

    $res = registerUser($nome, $email, $senha, $confirm);
    if 
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
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</div>

<!-- HTML -->
<body>

    <!-- barra de navegação -->
    <div class="navbar"> 
        <div class="navbar-left">
            <img src="images/navbar_logo.png" alt="" class="navbar-logo">
        </div>
    
        <div class="navbar-right">
            <a class="link" href="#">Início</a>
            <a class="link" href="#">Portifólio</a>
            <a class="link" href="#">Nossos serviços</a>
            <a class="link" href="#">Capitão da nave</a>
        </div>
    </div>
        
    <!-- contatos -->
    <div class="contacts-container">
        <a id="contact-1" class="contacts" href="https://github.com/osmozeInc" target="_blank">
            <div class="text-content">
                <p id="contact-text-1" class="contact-text">osmozeInc</p>
            </div>
            <i class="fa-brands fa-github fa-xl contact-content"></i>
        </a>
        <a id="contact-2" class="contacts" href="https://www.instagram.com/caiomonte.py/" target="_blank">
            <div class="text-content">
                <p id="contact-text-2" class="contact-text">caiomonte.py</p>
            </div>    
            <i class="fa-brands fa-instagram fa-xl contact-content"></i>
        </a>
        <a id="contact-3" class="contacts" href="https://www.linkedin.com/in/dev-caiomonte/" target="_blank">
            <div class="text-content">
                <p id="contact-text-3" class="contact-text">dev-caiomonte</p>
            </div>  
            <i class="fa-brands fa-linkedin fa-xl contact-content"></i>
        </a>
        <a id="contact-4" class="contacts" href="mailto:caiomm076@gmail.com" target="_blank">
            <div class="text-content">
                <p id="contact-text-4" class="contact-text">Email</p>
            </div>  
            <i class="fa-solid fa-envelope fa-xl contact-content"></i>
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
    
    


    <div class="main-section">

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
        <div id="talk-page" class="login-section">
            <h1 class="login-title">Faça parte</h1>
            <p class="login-subtitle">Crie uma conta ou entre para usar os serviços</p>
                
            <div class="login-container">
                <div class="conect-type">
                    <p class="p" id="log-in">Entrar</p>
                    <p class="p" id="sign-in">Criar Conta</p>
                </div>
                
                <div class="selection-bar">
                    <div class="selection-type-bar">
                    </div>
                </div>
                    
                <form class="log-in" action="" method="post">
                    <input class="input" id="email-log" name="name-log" id="name-log" type="text" placeholder="E-mail" required>
                    <input class="input" id="password-log" name="password-log" id="password-log" type="password" placeholder="Senha" required>
                    
                    <a href="" class="a">Esqueci a Senha</a>
                    <br><br><br><br>
                    
                    <input class="button" id="login-button" type="submit" value="Entrar">
                </form>

                <form class="sign-up" >
                    <input class="input" id="name-register" name="name-register" type="text" placeholder="Nome" required>
                    <input class="input" id="email-register" name="email-register" type="email" placeholder="E-mail" required>
                    <input class="input" id="password-register" name="password-register" type="password" placeholder="Senha" required>
                    <input class="input" id="confirm-register" name="confirm-register" type="password" placeholder="Confirme a Senha" required>
                    
                    <input class="button" type="submit" name="register" value="Criar Conta">
                </form>
            </div>
        </div>
    </div>


    <!-- portifolio -->
    <!--
    <div id="port-page" class="port-page">

        <!-- sobre mim --
        <div class="about">
            <div class="name-section">
                <p class="name">Sobre o Site</p>
            </div>

            <div class="port-about-container">                 
                <div class="port-about-card">

                    <div style="margin-top: -15px;">
                        <p class="port-about-title">Se conecte</p>
                    </div>
    
                    <p class="port-about-text">
                        entre para usar os serviços e projetos do desenvolvedor, como:
                        <ul class="port-about-text">
                            <li>Agenda de faculdade e Rotina</li>
                        </ul>
                    </p>
                    
                </div>

                <br><br>
                
                <div class="port-about-card">

                    <div style="margin-top: -15px;">
                        <p class="port-about-title">Objetivo</p>
                    </div>
    
                    <p class="port-about-text">
                        Este site foi criado com o propósito de servir como portifolio para o desenvolvedor, apresentando um resumo de seus projetos, e disponibilizando alguns serviços ao fazer log-in.
                    </p>
                    
                </div>
            </div>
        </div>

        <!-- habilidades --
        <div class="habilits">

            <div class="name-section">
                <p class="name">Habilidades</p>
            </div>

            <div class="port-habilits-container">
                
                <div class="port-habilits-card">
                    <div class="port-habilits-card-icon front-end fa-brands fa-html5 fa-2xl"></div>
                    <div class="port-habilits-card-title">Front-End</div>
                    <div class="port-habilits-card-line"></div>
                    <div class="port-habilits-card-text">HTML<br>CSS<br>Javascript<br>Bootstrap</div>
                </div>
                
                <div class="port-habilits-card">
                    <div class="port-habilits-card-icon back-end fa-solid fa-database fa-2xl"></div>
                    <div class="port-habilits-card-title" style="color: orangered;">Back-End</div>
                    <div class="port-habilits-card-line"></div>
                    <div class="port-habilits-card-text">Python<br>C#<br>JavaScript<br></div>
                </div>

                <div class="port-habilits-card">
                    <div class="port-habilits-card-icon data-science fa-solid fa-database fa-2xl"></div>
                    <div class="port-habilits-card-title" style="color: #290;">Ciência de Dados</div>
                    <div class="port-habilits-card-line"></div>
                    <div class="port-habilits-card-text">SQL</div>
                </div>

            </div>
        </div>

        <!-- projetos --
        <div class="projects">
            <div class="name-section">
                <p class="name">Projetos</p>
            </div>

            <div class="port-projects-container">
     
                 <div class="port-filter-container">
                     <button class="filter-button">Python</button>
                     <button class="filter-button">JavaScript</button>
                     <button class="filter-button">Web</button>
                     <button class="filter-button">Desktop</button>
                     <button class="filter-button">Jogos</button>
                     <button class="filter-button">Proj. Integrador</button>
                 </div>
     
                 <div class="port-project-cards-container">
                     <div data-tag1="Python" class="port-project-card-container">
                         <a href="https://github.com/osmozeInc/Programador_de_Sistemas/tree/main/Projeto_Integrador/Documentação" target="_blank" class="port-project-card">PyBank</a>
                         <div class="port-project-description">Projeto Integrador feito em curso de programador de sistemas</div>
                     </div>
                     <div data-tag1="Web" data-tag2="Proj. Integrador" class="port-project-card-container">    
                         <button class="port-project-card">Maná das Ruas</button>
                         <div class="port-project-description">Site desenvolvido no curso de web design, com html e css.</div>
                     </div>
                     <div class="port-project-card-container">    
                         <a href="" class="port-project-card"></a>
                         <div class="port-project-description"></div>
                     </div>
                     <div class="port-project-card-container">    
                         <a href="" class="port-project-card"></a>
                         <div class="port-project-description"></div>
                     </div>
                 </div>
            </div>  
        </div>
        
    </div>
    -->

</body>

<!-- imports JavaScript -->
<div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="my.js?v=<?php echo time(); ?>" type="module"></script>
</div>

</html>