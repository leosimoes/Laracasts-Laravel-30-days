# Dia 4 - Criando um Layout Bonito Usando TailwindCSS

## Informações
- Os Blade components no Laravel têm acesso a um objeto `$attributes`. 
- `$attributes` contém todos os atributos passados para o component, como `href`, `id`, ou `class`.
- `$attributes` dentro de um component para ser usado para suas tags.

```php
<x-navlink href="/" style="color: white;">Home</x-navlink>
```

```php
<a {{ $attributes }}>
    {{ $slot }}
</a>
```

- Os links de navegação do mundo real frequentemente exigem estilos ou comportamentos condicionais com base na página 
atual, tamanho da tela ou outros fatores. 
- Extrair essa lógica para um único component navlink ajuda a isolar a complexidade e facilita a manutenção do seu código.
- Tailwind CSS, um framework CSS focado em utilitários que permite criar layouts rapidamente sem precisar escrever 
arquivos CSS personalizados.
- Caso não tenha o Tailwind configurado com suas ferramentas de compilação, você pode incluí-lo via CDN 
adicionando esta tag de script no seu layout `<head>`:

```html
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
```

- Remova quaisquer partes desnecessárias da marcação da interface do usuário do Tailwind que você não precise, 
como barras de menu extras ou seções de perfil.
- Se você tentar usar uma variável sem defini-la, o Laravel lançará um erro; portanto, você deve passá-la explicitamente.
- Pode-se definir slots nomeados usando `<x-slot>`: 

```html
<x-slot name="nomed">Value<x-slot>
```

```php
{{ $nomed }}
```
 
- Para obter o código de components (gratuitos e pagos) do Tailwind: https://tailwindcss.com/plus/ui-blocks


## Atividades
- Criar e usar component nav-link:
  * Em **resources/views/components**: eu criei o arquivo `nav-link.blade.php`
```html
<a {{$attributes}}> {{$slot}} </a>
```
-
  * Em **resources/views/components/layout.blade.php**: eu substitui as tags `<a>` por `<x-nav-link>`:

```html
<nav>
    <x-nav-link href="/" class="bg-[#FDFDFC] text-[#1b1b18]">Home</x-nav-link>
    <x-nav-link href="/about" class="bg-[#FDFDFC] text-[#1b1b18]">About</x-nav-link>
    <x-nav-link href="/contact" class="bg-[#FDFDFC] text-[#1b1b18]">Contact</x-nav-link>
</nav>
```

- Usar um template do Tailwind para melhorar a interface:
  * Em **resources/views/layout.blade.php**: eu colei o código obtido do 
[exemplo de headers](https://tailwindcss.com/plus/ui-blocks/marketing/elements/headers), 
removir parte desnecssária e adaptei.
  * Em **resources/views/layout.blade.php**: eu também substituir o logo do Tailwind pelo logo do Laracast:
```html
<img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto" />
```
por
```html
<img src="https://assets.laracasts.com/images/secondary-logo-symbol.svg" alt="" class="h-8 w-auto" />
```

![Image-07-Home-Page-V3](../images/Image-07-Home-Page-V3.png)


## Referências
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/4

https://tailwindcss.com/

https://tailwindcss.com/plus
