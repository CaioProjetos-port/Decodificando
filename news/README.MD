IDEIA DO SERVIÇO:
    Enviar emails diariamente para os usuários com com noticias da area de tecnologia.

FUNCIONAMENTO DO SOFTWARE:

0. Definir variáveis e Testar conexões
    - Variavéis:
        - chave do site/metadado retornado
        - lista para conter as noticias de cada genero
    - Coneões: 
        - Banco de dados de usuários
        - Sites das notícias
        - Envio de email

1. Ler as noticias com o feedparser
    - Armazenar em um dicionário o par:
        chave: nome do site; 
        valor: metadados do feedparser;

2. Separar as noticias por tipo
    - Armazenar palavras chaves em uma lista e comparar com o titulo da noticia
    - Armazenar a noticia numa lista de cada genero

3. Enviar para os usuários a noticia certa (LOOP)
    1. Pegar um usuário do BD
        - Iterar cada usuário
    2. Ver suas preferências e esolher uma
        - Gênero de notícia preferida
    3. Escolher uma noticia para mandar pra ele
        - Todas as escolhas são aleatórias
    4. Estruturar o conteúdo da noticia
        - Feito pela API do ChatGpt
    5. Estruturar o email de envio para o usuário
    6. Enviar o email







------------------SITES USADOS NA BUSCA DE NOTICIAS --------------------------------------------------------|
🌐 Internacionais                                                                                           |
.                                                                                                           |
TechCrunch – Foca em startups, inovação e lançamentos tecnológicos.                                         |
.                                                                                                           |
The Verge – Traz notícias, análises e reviews de produtos.                                                  |
.                                                                                                           |
Wired – Aborda tecnologia com foco em impacto social e tendências.                                          |
.                                                                                                           |
Ars Technica – Aprofundado, ideal para quem gosta de detalhes técnicos.                                     |
.                                                                                                           |
CNET – Notícias, reviews e guias de compra.                                                                 |
.                                                                                                           |
🇧🇷 Nacionais (em português)                                                                                 |
TecMundo – Um dos mais populares do Brasil; cobre tecnologia, ciência e games.                              |
RSS: https://rss.tecmundo.com.br/feed                                                                       |
.                                                                                                           |
Olhar Digital – Notícias diárias sobre tecnologia, internet, gadgets e segurança digital.                   |
RSS: https://olhardigital.com.br/feed/                                                                      |
.                                                                                                           |
Canaltech – Bastante atualizado, com foco em smartphones, ciência e inteligência artificial.                |
RSS: https://feeds2.feedburner.com/canaltechbr                                                              |
.                                                                                                           |
Tilt UOL – Cobre tecnologia, inovação e cultura digital.                                                    |
RSS: https://rss.uol.com.br/feed/tecnologia.xml                                                                       |
.                                                                                                           |
Gizmodo Brasil – Versão brasileira do famoso site americano, com foco em ciência e tecnologia.              |
RSS: https://gizmodo.uol.com.br/feed/                                                                       |
.                                                                                                           |
------------------------------------------------------------------------------------------------------------|