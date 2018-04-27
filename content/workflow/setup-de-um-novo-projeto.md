# Setup de um novo projeto

## Repositório Git

Crie ou clone o repositório do [Bitbucket](https://bitbucket.org) ou [GitHub](https://github.com) do projeto que você irá trabalhar.

`git clone git@bitbucket.org/bubb/nome-do-projeto`
`git clone git@github.com/bubb/nome-do-projeto`

## Configurações

Verifique com a equipe qual projeto base será utilizado para o projeto.

Checklist de revisões necessárias para cada projeto.

## Para projetos que utilizam [Laravel 4.2](https://laravel.com/docs/4.2)

1. Atualizar o `composer.json` com as dependências necessárias de acordo com o escopo do projeto
1. Gerar uma nova chave de aplicação através do comando `php artisan key:generate`
1. Criar uma chave DSN do [Sentry](https://sentry.io) e alterar o arquivo `app/config/sentry.php`
1. Revisar o arquivo `app/config/app.php`
1. Revisar o arquivo `app/config/cms.php`
1. Revisar o arquivo `app/config/uris.php`
1. Revisar o arquivo `app/config/mail.php` (pergunte a equipe de hosting quais as credenciais do cliente)
1. Alterar o arquivo `app/routes.php` de acordo com as páginas que o projeto terá
1. Criar uma nova conta no **Google Analytics** e alterar o código de acompanhamento em `app/views/site/elements/analytics.blade.php`