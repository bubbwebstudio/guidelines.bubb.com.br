# CSS Style Guide

- [Pré Processador](#pre-processador)
- [BEM-B](#bem-b)
- [COMPONENTES](#componente)
- [Code](#code)
- [File structure](#file-structure)
- [Inspiration](#inspiration)

## Pre-Processador
Utilizamos o CodeKit, mas esses princípios são aplicáveis a qualquer pré-processador existente.

## BEM-B (Block Element Modifier - BUBB)
Nós usamos uma sintaxe muito semelhante ao estilo BEM, porém adaptado da melhor forma para o nosso dia-a-dia.

A fórmula para os nossos ingredientes fica mais ou menos assim:

```css
.componente                     /* Componente */   
.componente__elemento           /* Filho */
.componente__elemento__elemento /* Neto */

.itens                          /* Use o plural se possível */
.item

-modificador                    / * Modificador de estilo único, pode ser atrelado a um elemento para modificar o mesmo. * /

.helper-propriedade             / * Ajudante genérico de propriedades css (por exemplo, 'h-pull-left', 'h-text-left') * /

.js-trigger                     / * Gancho que está atrelado à alguma função de Javascript. Não é usado para estilo * /
```

## .Componente e .Componente__elemento

```html
<div class="noticias">
```

* O componente pode ser único ou pode ser reaproveitado, fazendo parte de um padrão
* Os filhos são separadas por __, (por exemplo, .noticias__titulo)
* Tudo em letras minúsculas, pode conter - no nome
* Evite mais de 3 níveis de profundidade