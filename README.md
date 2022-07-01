<p align="center"><img src="https://raw.githubusercontent.com/clebsonsh/creators-blog/master/public/img/logo.png" width="100"></p>

# CREATORS BLOG

Blog desenvolvido para o **Processo Seletivo Back-end** da [**Creators LLC**](https://creators.llc/)

## TESTE BACK-END LARAVEL

> **Objetivo**: Desenvolver um CRUD simples de um blog em Laravel.

-   [x] Campos do post: Título e texto.

-   [x] Criar uma página que lista os posts deste blog de teste.

-   [x] Criar uma página que lista os posts do blog com opções para criar um novo post, editar e apagar os posts existentes.

-   [x] Extra: criar um sistema de login que só quem tem login consegue acessar o painel.

## COMO RODAR O APP LOCAL

> **Pré-requisitos**:

> > :heavy_exclamation_mark: **Procedimentos testados na linha de comando do Linux**

-   [Git](https://git-scm.com/downloads)

-   [PHP ^8.1](https://www.php.net/downloads.php)

-   [Composer](https://getcomposer.org/), para fazer a instalação das dependêcias

-   [Docker](https://docs.docker.com/get-docker/), para rodar a aplicação usando o [Laravel Sail](https://laravel.com/docs/9.x/sail)

> **Download e instalação**:

-   Clone o repositório

> > `git clone https://github.com/clebsonsh/creators-blog.git`

-   Vá para pasta do APP

> > `cd creators-blog`

-   Instale as dependências

> > `composer install`

-   Crie o arquivo _.env_ baseado no _.env.example_ (nesse arquivo já estão as configurações do banco de dados do docker)

> > `cp .env.example .env`

-   Gere a APP_KEY

> > `php artisan key:generate`

-   Inicie os containers Docker através do Laravel Sail (a primeira vez que rodar esse comando pode demorar, pois vai baixar e configurar todos containers usados pelo APP)

> > `./vendor/bin/sail up -d`

-   Rode as migrations com as seeds

> > `./vendor/bin/sail artisan migrate --seed`

A partir desse ponto o APP já estará rodando. O servidor Apache/Nginx e banco de dados MySQL/PostgreSQL não precisam ser instalados, pois tudo será provido pelo Docker/Lravel Sail.

## COMO USAR O APP LOCAL

O blog pode ser acessado no localhost http://127.0.0.1/

A home pode ser acessada sem login e lista todos os posts.

O blog tem sistema de paginação, que aparece caso tenha mais de 15 posts.

No canto superior direito tem links para criar uma nova conta ou logar, já exite um User criado quando rodamos as seeds.

> > `Email: admin@creators-blog.test | Password: password`

Assim que logar você será redirecionado a parte administrativa do blog, onde é possível criar, editar e deletar posts.

## STACK USADA

-   PHP
-   HTML
-   CSS
-   Laravel
-   TailwindCSS
-   MySQL
-   Docker

### INFORMÇÕES EXTRAS

Tentei fazer o deploy do blog no [Heroku](https://creators-dev-blog.herokuapp.com/), mas ao tentar fazer login na aplição dá **error 419 PAGE | EXPIRED**.

Aparentemente é problema de **SESSION**.

Tentei resolver mudando o driver de session para database, desabilitando a checagem de **CSRF**, mas não tive sucesso.
