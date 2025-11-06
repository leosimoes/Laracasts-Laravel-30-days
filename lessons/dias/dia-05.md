# Dia 5 - Estilizando o Link de Navegação Ativo

## Informações
- Para garantir que o contêiner preencha a altura da janela de visualização use a classe `h-full`:

```html
<html class="h-full bg-gray-100">
<body class="h-full">
```

- Use a função auxiliar `request()` com o método `is('...')` para verificar se a URL atual corresponde a um padrão.
- Nos Blade components, diferencie entre:
  * Attributes: Atributos HTML como href, id,class;
  * Props: Propriedades personalizadas passadas para o componente, por exemplo, `@props(['active' => false])`.
- O atributo `aria-current` pode ser usado para acessibilidade, para indicar a página atual.
- As diretivas Blade (que começam com `@_`) fornecem uma forma abreviada de representar a lógica PHP dentro dos templates.
- Algumas diretivas Blade `if`, `dump`, `unless`, `foreach`.
- Preceder as propriedades com dois pontos `:` indica ao Blade que o valor deve ser interpretado como uma expressão PHP.


## Atividades
- Estender o component NavLink adicionando uma nova propriedade chamada `type`.
- Esta propriedade determina se o componente será renderizado como uma tag `<a>` ou uma tag `<button>`.

- Em **resources/views/components/nav-link.blade.php**: eu substitui o conteúdo por:

```php
@props(['type' => 'a'])
@if($type === 'button')
    <button {{$attributes}}> {{$slot}} </button>
@else
    <a {{$attributes}}> {{$slot}} </a>
@endif
```

- Em **resources/views/components/layout.blade.php**: eu substitui parte do código que se refere a nav-link:

```html
<x-nav-link href="/" class="text-sm/6 font-semibold text-gray-900" :type="request()->is('/')?'button':'a'">Home</x-nav-link>
<x-nav-link href="/about" class="text-sm/6 font-semibold text-gray-900" :type="request()->is('about')?'button':'a'">About</x-nav-link>
<x-nav-link href="/contact" class="text-sm/6 font-semibold text-gray-900" :type="request()->is('contact')?'button':'a'">Contact</x-nav-link>
```


## Referências
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/5
