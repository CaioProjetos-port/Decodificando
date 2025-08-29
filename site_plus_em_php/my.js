function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}




/* ICONE DE CONTATOS */

let icon = 0;
let show_contact = false;

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
});




/* BARRA DE LOG-IN E SIGN-IN */

const log_in = document.getElementById(`log-in`);
const sing_in = document.getElementById(`sign-in`);

const selection_type = document.querySelector(`.selection-bar`);
const button_type = document.querySelector(`.selection-type-bar`);

const log_in_container = document.querySelector(`.log-in`);
const sing_in_container = document.querySelector(`.sign-in`);


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




/* ENVIO DE FORMULARIO 

const submit_log = document.getElementById("log-in-button");

submit_log.addEventListener("click", function(event) {
    const email = document.getElementById("email-log");
    const password = document.getElementById("password-log");
    
    if (email.value === "" || password.value === "") {
        email.placeholder = "Digite um e-mail";
        password.placeholder = "Digite uma senha";
        event.preventDefault();
    }
    if (password.value.length < 4 || password.value.length > 8) {
        alert("A senha deve ter entre 4 e 8 caracteres.");
        event.preventDefault();
    }

});
*/


blink_contact();
setInterval(blink_contact, 3000);