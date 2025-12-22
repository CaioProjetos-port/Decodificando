function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}


/* ICONE DE CONTATOS */

let icon = 0;
let show_contact = false;
let botaobloqueado = false;

// animação da aparição dos icones dos contatos no botão
function blink_contact() 
{
    const contact = document.getElementById(`blink-icon-${icon}`);
    contact.style.opacity = `1`;
    setTimeout(function() { contact.style.opacity = `0`; }, 2000);

    icon = (icon + 1) % 5;
}

// animação da entrada dos contatos
document.querySelector('.contact-circle').addEventListener('click',
async function() {

    if (botaobloqueado) return;

    else botaobloqueado = true;

    show_contact = !show_contact;
    if (show_contact)
    {
        for (let i = 4; i >= 1; i--) 
        {
            setTimeout(function() {
                const contact = document.getElementById(`contact-${i}`);
                contact.style.transform = `translateY(-${9 * i}vh)`;
            }, 400 / i);
        }

        await sleep(800);

        for (let i = 1; i <= 4; i++)
        {
            setTimeout(function() {
                const contact = document.getElementById(`contact-${i}`);
                contact.style.width = `200px`;
                contact.style.borderRadius = `50px`;

                const contact_text = document.getElementById(`contact-text-${i}`);
                contact_text.style.transform = `translateX(0px)`;
            }, 400 / i);
        }
    }
    else
    {
        for (let i = 4; i >= 1; i--) 
        {
            setTimeout(function() {
                const contact = document.getElementById(`contact-${i}`);
                contact.style.width = `4rem`;
                contact.style.borderRadius = `50%`;
            }, i * 100);
        }

        await sleep(800);

        for (let i = 4; i >= 1; i--) 
        {
            setTimeout(function() {
                const contact_text = document.getElementById(`contact-text-${i}`);
                contact_text.style.transform = `translateX(140px)`;

                const contact = document.getElementById(`contact-${i}`);
                contact.style.transform = `translateY(0vh)`;

            }, i * 100);
        }
    }

    setTimeout(function() {
        botaobloqueado = false;
    }, 2000);

});



/* BARRA DE LOG-IN E SIGN-IN */

const log_in = document.getElementById(`log-in`);
const sing_in = document.getElementById(`sign-in`);

const selection_type = document.querySelector(`.selection-bar`);
const button_type = document.querySelector(`.selection-type-bar`);

const log_in_container = document.querySelector(`.log-in`);
const sing_in_container = document.querySelector(`.sign-up`);


log_in.addEventListener('click', function() {
    button_type.style.transform = `translateX(0px)`;

    log_in_container.style.display = `flex`;
    sing_in_container.style.display = `none`;
});

sing_in.addEventListener('click', function() {
    button_type.style.transform = `translateX(${selection_type.offsetWidth - 120}px)`;

    log_in_container.style.display = `none`;
    sing_in_container.style.display = `flex`;
});




/* ANIMAÇÕES DA TELA */

let animation = 0;

async function Animation() {
    const animation_element = document.querySelector(`.animation-${animation}`);

    animation_element.style.display = `flex`;
    await sleep(8000);
    animation_element.style.display = `none`;

    animation = (animation + 1) % 2;
}


/* PARTICULAS */

const canvas = document.getElementById('canvas-particulas');
const ctx = canvas.getContext('2d');
const parent = canvas.parentElement; 

const numeroParticulas = canvas.width; 
let particlesArray = [];

// 1. Função para definir o tamanho exato da DIV pai
function resizeCanvas() {
    canvas.width = parent.clientWidth;
    canvas.height = parent.clientHeight;
}

// Chama agora para garantir o tamanho correto antes de começar
resizeCanvas();

// 2. Classe da Partícula
class Particle {
    constructor() {
        this.x = Math.random() * canvas.width;
        this.y = canvas.height + Math.random() * 200;
        this.speedX = Math.random() * 1.5 - 0.75; 
        this.speedY = Math.random() * -1.1 - .2;
        this.size = Math.random() * 3 + 1;
    }

    update() { 
        this.x += this.speedX;
        this.y += this.speedY;

        // Verifica colisão com as paredes
        if (this.size + this.x > canvas.width || this.x - this.size < 0) {
            this.speedX = -this.speedX;
        }
        if (this.y < 0) {
            this.y = canvas.height - 5;
            this.x = Math.random() * canvas.width;
        }
    }

    draw() {
        let opacity = (this.y / canvas.height);
        if (opacity < 0) opacity = 0;

        ctx.fillStyle = `rgba(150, 200, 150, ${opacity})`;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
    }
}

// 3. Inicializa as partículas
function init() {
    particlesArray = [];
    for (let i = 0; i < numeroParticulas; i++) {
        particlesArray.push(new Particle());
    }
}

// 4. O Loop de Animação (Que estava faltando)
function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    for (let i = 0; i < particlesArray.length; i++) {
        particlesArray[i].update();
        particlesArray[i].draw();
    }
    requestAnimationFrame(animate);
}

// 5. Evento de Resize
window.addEventListener('resize', () => {
    resizeCanvas();
});

// Inicia tudo
init();
animate();


blink_contact();
setInterval(blink_contact, 3000);

Animation();
setInterval(Animation, 8000);