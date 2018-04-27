# Laravel & PHP Style Guide

- [Sobre o Laravel](#sobre-o-laravel)
- [Regras gerais do PHP](#regras-gerais-do-php)
- [Docblocks](#docblocks)
- [Operadores ternários](#operadores-ternarios)
- [Comentários](#comentarios)
- [Whitespace](#whitespace)
- [Configurações](#configurações)
- [Comandos artisan](#comandos-artisan)
- [Rotas](#rotas)
- [Controllers](#controllers)
- [Views](#views)
- [Validações](#validacoes)
- [Templates Blade](#templates-blade)

## Sobre o Laravel

[Laravel](http://www.laravel.com) é um Framework PHP utilizado para o desenvolvimento web, que utiliza a arquitetura MVC e tem como principal característica ajudar a desenvolver aplicações seguras e performáticas de forma rápida, com código limpo e simples, já que ele incentiva o uso de boas práticas de programação e utiliza o padrão PSR-2 como guia para estilo de escrita do código.

## Regras gerais do PHP

O estilo de código deve seguir o padrão [PSR-1](http://www.php-fig.org/psr/psr-1/) e [PSR-2](http://www.php-fig.org/psr/psr-2/).

## CodeSniffer

É muito recomendável o uso do [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) para automatizar a padronização do estilo do seu código.

## Docblocks

Não use docblocks para métodos que podem ser completamente sugeridos por tipo (a menos que você precise de uma descrição).

Somente adicione uma descrição quando ela fornece mais contexto do que a própria nomenclatura do método.

```php
// Bom
class Url
{
    public static function fromString(string $url): Url
    {
        // ...
    }
}

// Bad: A descrição acaba sendo redundante.
class Url
{
    /**
     * Create a url from a string.
     * 
     * @param string $url
     * 
     * @return \Spatie\Url\Url
     */
    public static function fromString(string $url): Url
    {
        // ...
    }
}
```

Use sempre os nomes completos das classes nos docblocks.

```php
// Bom

/**
 * @param string $url
 *
 * @return \Spatie\Url\Url
 */

// Ruim

/**
 * @param string $foo
 *
 * @return Url
 */
```

## Operadores ternários

```php
// Good
$result = $object instanceof Model
    ? $object->name
    : 'A default value';

$name = $isFoo ? 'foo' : 'bar';

// Bad
$result = $object instanceof Model ?
    $object->name : 
   'A default value';
```

## Comentários

Comentários devem ser evitados o máximo possível. Escreva códigos claros. Se você precisar comentar, utilize este formato:

```php
// Deve haver espaço antes de um comentário de linha única.

/*
 * Se você precisar explicar muito, utilize um bloco de comentário.
 * Estes blocos de comentários não precisam conter, necessariamente, 
 * três linhas.
 */
```

## Whitespace

Dê respiro ao seu código. Em geral, sempre adicione linhas em branco entre as declarações, a menos que sejam uma seqüência de operações equivalentes de uma única linha.

```php
// Bom
public function getPage($url)
{
    $page = $this->pages()->where('slug', $url)->first();

    if (!$page)  {
        return null;
    }

    if ($page['private'] && ! Auth::check()) {
        return null;
    }

    return $page;
}

// Ruim
public function getPage($url)
{
    $page = $this->pages()->where('slug', $url)->first();
    if (! $page) {
        return null;
    }
    if ($page['private'] && ! Auth::check()) {
        return null;
    }
    return $page;
}
```

```php
// Bom: Uma seqyência de comandos single-line.
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    });
}
```

Não adicione uma linha extra entre os `{}`.

```php
// Bom
if ($foo) {
    $this->foo = $foo;
}

// Bad
if ($foo) 
{

    $this->foo = $foo;

}
```

## Configurações

Devem seguir o padrão kebab-case.

```
config/
  pdf-generator.php
```

As chaves de uma configuração deve seguir o padrão snake_case.

```php
// config/pdf-generator.php
return [
    'chrome_path' => env('CHROME_PATH'),
];
```

## Comandos artisan

Os nomes dos comandos deve seguir o padrão kebab-cased.

```bash
# Bom
php artisan delete-old-records

# Ruim
php artisan deleteOldRecords
```

Um comando sempre deve devolver algum feedback.

```php
// in a Command
public function handle()
{
    // do some work

    $this->comment('All ok!');
}
```

Se possível use uma mensagem mais descritiva do que realmente o comando realizou. Exemplo: `Old records deleted`

## Rotas

Os nomes das rotas precisa seguir o padrão kebab-case.

```
https://domain.foo/open-source
https://domain.foo/jobs/front-end-developer
```

Os nomes das rotas deve seguir o padrão `some.route.name`.

```php
Route::get('pages/about', 'PagesController@about')->name('pages.about');
```

```html
<a href="{{ route('pages.about') }}">
    About
</a>
```

## Controllers

Controllers devem estar sempre no plural.

```php
class PostsController
{
    // ...
}
```

Tente manter os controllers simples e limpos, com os valores defaults de um CRUD (`index`, `create`, `store`, `show`, `edit`, `update`, `destroy`).

Se você precisar de ações específicas, podemos criar `PostsController@favorite`, e `PostsController@unfavorite`, ou criamos um controller separado `FavoritePostsController`.

```php
class PostsController
{
    public function create()
    {
        // ...
    }
    
    // ...
    
    public function favorite(Post $post)
    {
        request()->user()->favorites()->attach($post);
        
        return response(null, 200);
    }

    public function unfavorite(Post $post)
    {
        request()->user()->favorites()->detach($post);
        
        return response(null, 200);
    }
}
```

## Views

Os nomes dos arquivos devem seguir o padrão kebab-case.

```
resources/
  views/
    open-source.blade.php
```

```php
class OpenSourceController
{
    public function index() {
        return view('open-source');
    }
}
```

## Validações

Todas as validações customizadas devem seguir o padrão snake_case.

```php
Validator::extend('organization_type', function ($attribute, $value) {
    return OrganizationType::isValid($value);
});
```

## Templates Blade

Indentanção de quatro espaços.

```html
<a href="/open-source">
    Open Source
</a>
```