# Controle de versão

Utilizamos o Git em todos os nossos projetos, onde a maioria está no [Bitbucket](https://bitbucket.org). 

## Nomes de repositórios

O repositório deve conter o nome do projeto. Na maioria dos caso, é o nome do próprio cliente. O nome deve ser no padrão [kebab-cased](http://wiki.c2.com/?KebabCase)

- Ruim: `https://www.bubb.com.br`, `www.bubb.com.br`, `Bubb.com.br`
- Bom: `bubb-web-studio`

Sites que serão subdomínios:

- Ruim: `bubb-guidelines`
- Bom: `guidelines.bubb.com.br`

## Branches

Se você precisar alterar algo em um projeto que já esteja em produção, lembre-se de criar um branch separado para trabalhar em sua feature. **Nunca, em hipótese alguma, faça modificações no branch master.**

### Projetos em desenvolvimento

Projetos que ainda não foram para produção podem conter dois branches principais: `master` ou `dev`. Aconselhamos sempre trabalhar no branch `dev`.

### Pull requests

Sempre quando estiver trabalhando em um projeto em produção, você deverá criar um [**Pull Request**](https://www.atlassian.com/git/tutorials/making-a-pull-request) com a sua feature/fix para o Bitbucket. O Pull Request será analisado pelo time e pode ser aprovado ou não.

## Commits

Seu commit precisa ser o mais claro possível, mostrando o que você realmente fez. Recomendamos que ele seja em **português**.

- Ruim: `fix`, `correção`, `bug`
- Bom: `Corrigido o bug que permite enviar o formulário de contato com um e-mail inválido`