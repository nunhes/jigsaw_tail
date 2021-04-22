---
extends: _layouts.post
section: content
title: Personalización do sitio
date: 2018-12-24
description: Personalización do sitio con CSS e JS
categories: [configuración]
featured: true
excerpt: Este modelo inicial vén pre-cargado con Tailwind CSS, un framework CSS de utilidade que permite personalizar e construír deseños complexos sen tocar unha liña de CSS.
---

Este modelo inicial vén pre-cargado con [Tailwind CSS](https://tailwindcss.com), un framework CSS de utilidade que permite personalizar e construír deseños complexos sen tocar unha liña de CSS. Tamén hai algúns arquivos base en Sass no cartafol `/source/_assets/sass`, preparados para que se poida engadir calquera CSS personalizado en `_blog.scss`.

> Tamén se pode traballar a arquitectura dos arquivos Sass ao noso xeito; só hai que asegurarse de mantélas referenzas de `@tailwind` no arquivo `main.scss` final.

```scss
// source/_assets/sass/main.scss

@tailwind preflight;
@tailwind components;

// Code syntax highlighting,
// https://highlightjs.org
@import '~highlightjs/styles/default';

@import 'base';
@import 'navigation';
@import 'mailchimp';
@import 'blog';

@tailwind utilities;
```

---

## Estilos de tipografía

Aquí tes unha vista previa rápida do aspecto que terán algúns dos estilos básicos deste modelo inicial:

# h1 Heading
## h2 Heading
### h3 Heading
#### h4 Heading
##### h5 Heading
###### h6 Heading

The quick brown fox jumps over the lazy dog

- The quick brown fox
    - jumps over
        - the lazy dog

1. The quick brown fox
    1. jumps over
        1. the lazy dog

<s>The quick brown fox jumps over the lazy dog</s>

<u>The quick brown fox jumps over the lazy dog</u>

_The quick brown fox jumps over the lazy dog_

**The quick brown fox jumps over the lazy dog**

`The quick brown fox jumps over the lazy dog`

<small>The quick brown fox jumps over the lazy dog</small>

> The quick brown fox jumps over the lazy dog

[The quick brown fox jumps over the lazy dog](#)

```php
class Foo extends bar
{
    public function fooBar()
    {
        //
    }
}
```
