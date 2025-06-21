


// SEÇÃO DO BODY

{
    // botões das seções
    const btn_service = document.getElementById('body-section-service');
    const btn_blog = document.getElementById('body-section-blog');

    const line_service = document.getElementById('service-line');
    const line_blog = document.getElementById('blog-line');

    // elementos das seções
    const body_services = document.querySelectorAll('.element-container');
    const body_blog = document.querySelectorAll('.notice-container');

    // leitor de eventos nos botões
    btn_service.addEventListener('click', () => {
        if (!btn_service.classList.contains('active')) {
            ActiveService();
            RmvElementesBlog();
            AddElementesServices();
        }
    })

    btn_blog.addEventListener('click', () => {
        if (!btn_blog.classList.contains('active')) {
            ActiveBlog();
            RmvElementesServices();
            AddElementesBlog();
        }
    })

    // funções para ativar e desativar botões
    function ActiveService(){
            btn_service.classList.add('active');
            line_service.classList.add('active');
            btn_blog.classList.remove('active');
            line_blog.classList.remove('active');
    }

    function ActiveBlog(){
        btn_blog.classList.add('active');
        line_blog.classList.add('active');
        btn_service.classList.remove('active');
        line_service.classList.remove('active');
    }

    // funções para remover e adicionar elementos
    function RmvElementesServices(){
        for (let i = 0; i < body_services.length; i++) {
            body_services[i].style.display = 'none';
        }
    }

    function AddElementesServices(){
        for (let i = 0; i < body_services.length; i++) {
            body_services[i].style.display = 'flex';
        }
    }

    function RmvElementesBlog(){
        for (let i = 0; i < body_blog.length; i++) {
            body_blog[i].style.display = 'none';
        }
    }

    function AddElementesBlog(){
        for (let i = 0; i < body_blog.length; i++) {
            body_blog[i].style.display = 'flex';
        }
    }
}