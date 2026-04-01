function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}


let icon = 0;
let mostrarContatos = false;
let botaoBloqueado = false;

const btnContatos = document.querySelector('.contact-circle')
// const pagina = document.querySelector('main');

// animação da aparição dos icones dos contatos no botão
function piscarContatos() 
{
    const contact = document.getElementById(`blink-icon-${icon}`);
    contact.style.opacity = `1`;
    setTimeout(function() { contact.style.opacity = `0`; }, 2000);

    icon = (icon + 1) % 5;
}

function borrarPagina() {
    pagina.style.transitionDuration = `1s`;
    pagina.style.filter = `blur(5px)`;
}

function desborrarPagina() {
    pagina.style.transitionDuration = `0s`;
    pagina.style.filter = `blur(0px)`;
}

// animação da entrada dos contatos
btnContatos.addEventListener('click', async function() {

    if (botaoBloqueado) return;
    else botaoBloqueado = true;

    let inverterTransicao = 1;
    if (window.innerWidth <= 1400) inverterTransicao = -1;

    mostrarContatos = !mostrarContatos;

    if (mostrarContatos)
    {
        for (let i = 4; i >= 1; i--)
        {
            setTimeout(function() {
                const contact = document.getElementById(`contact-${i}`);
                contact.style.transform = `translateY(-${i * 5}rem)`;
            }, 400 / i);
        }

        await sleep(800);

        for (let i = 1; i <= 4; i++)
        {
            setTimeout(function() {
                const contact = document.getElementById(`contact-${i}`);
                contact.style.width = `220px`;
                contact.style.borderRadius = `50px`;
                contact.style.transform = `translate(calc(220px - 4rem), -${i * 5}rem)`;

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
        botaoBloqueado = false;
    }, 2000);

});


piscarContatos();
setInterval(piscarContatos, 3000);