# Controle de versão

Utilizamos o Git em todos os nossos projetos, onde a maioria está no [GitLab](https://about.gitlab.com). 

## Nomes de repositórios

O repositório deve conter o nome do projeto. Na maioria dos caso, é o nome do próprio cliente. O nome deve ser no padrão [kebab-cased](http://wiki.c2.com/?KebabCase)

- Ruim: `https://www.bubb.com.br`, `www.bubb.com.br`, `Bubb.com.br`
- Bom: `bubb-web-studio`

Sites que serão subdomínios:

- Ruim: `bubb-guidelines`
- Bom: `guidelines.bubb.com.br`

## Branches

Se você precisar alterar algo em um projeto que já esteja em produção, lembre-se de criar um branch separado, para trabalhar em sua feature. **Nunca, em hipótese alguma, faça modificações no branch master.**

Nós usamos uma padronização para darmos nomes aos branches.

### Bugs

Para bugs, utilizamos o padrão do prefixo "`bug/`" e em seguida o id da issue no GitLab refente a esse bug.

- Ruim: `bugs` , `bug`.
- Bom: `bug/123`.

### Features

Para features, utilizaremos como. padrão o prefixo "`feature/`" e em seguida o nome da nova feature.

- Ruim: `foo`.
- Bom: `feature/foo`.

### Projetos em desenvolvimento

Projetos que ainda não foram para produção podem conter dois branches principais: `master` ou `dev`. Aconselhamos sempre trabalhar no branch `dev`.

### Merge requests

Sempre quando estiver trabalhando em um projeto em produção, você deverá criar um [**Merge Request**](https://docs.gitlab.com/ee/gitlab-basics/add-merge-request.html) com a sua feature/fix para o GitLab. O Merge Request será analisado pelo time e pode ser aprovado ou não.

## Commits

Seu commit precisa ser o mais claro possível, mostrando o que você realmente fez. Recomendamos que ele seja em **português**.

- Ruim: `fix`, `correção`, `bug`
- Bom: `Corrigido o bug que permite enviar o formulário de contato com um e-mail inválido`