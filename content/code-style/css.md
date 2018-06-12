# CSS Style Guide

- [Pré Processador](#pre-processador)
- [BEVM](#bevm)
- [DOM structure](#dom-structure)
- [Code style](#code-style)
- [File structure](#file-structure)
- [Inspiration](#inspiration)

## Pre-Processador
Utilizamos o CodeKit, mas esses princípios são aplicáveis a qualquer pré-processador existente.

## BEM-B (Block Element Modifier - BUBB)
Nós usamos uma sintaxe muito semelhante ao estilo BEM, porém adaptado da melhor forma para o nosso dia-a-dia.

A fórmula para os nossos ingredientes fica mais ou menos assim:

```css
.componente                      /* Componento */   
.componente__elemento             /* Filho */
.componente__elemento__elemento    /* Neto */
```