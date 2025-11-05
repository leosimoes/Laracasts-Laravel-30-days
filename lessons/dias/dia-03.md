# Dia 3 - Criando um Arquivo de Layout Usando Componentes do Laravel

## Informações
- Não é uma abordagem escalável adicionar a navegação entre páginas manualmente e ela será perdida ao trocar de página.
- Para evitar digitar URLs manualmente na barra de endereços, use uma barra de navegação simples na parte superior de 
cada página.
- Para não duplicar código, o Laravel fornece arquivos de layout e componentes para reutilizar a marcação.
- Os components devem ser criados em **resources/views/components/**.
- Para usar o Blade, renomeie seus arquivos de visualização para incluir o sufixo `.blade.php`.
- Para usar um componente 'nome' use `<x-nome></x-nome>`.
- O prefixo `x-` garante que a tag do componente seja única e não entre em conflito com as tags HTML padrão.
- Em vez de escrever comandos `echo` em PHP, o Blade permite usar chaves duplas `{{ $slot }}`.
- Escrever `{{ $slot }}` equivale a `<?php echo $slot; ?>`, porém é mais limpo.


## Atividades
- Mudar a view de `welcome` para `home`:
  * Em **resources/views**: eu alterei o nome do arquivo de `welcome.blade.php` para `home.blade.php`;
  * Em **routes/web.php**: eu mudei o nome da view de `welcome` para `home` na rota `/`:
  ```php
  Route::get('/', function () {
    return view('home');
  });
  ```
- Adicionar menu de navegação entre páginas:
  * Eu adicionei o código a seguir no `header` dos arquivos `.blade.php`:
  ```html
  <nav>
    <a href="/" class="bg-[#FDFDFC] text-[#1b1b18]">Home</a>
    <a href="/about" class="bg-[#FDFDFC] text-[#1b1b18]">About</a>
    <a href="/contact" class="bg-[#FDFDFC] text-[#1b1b18]">Contact</a>
  </nav>
  ``` 
- Usar o layout comum como um component:
  * Em **resources/views/components**: eu criei o arquivo `layout.blade.php`;
  * Em **resources/views/components/layout.blade.php**: 
    * eu adicionei o conteúdo comum dos arquivos `.blade.php`;
    * eu adicionei `<h1>{{ $slot }}</h1>` no `body` do arquivo. 
  * Em **resources/views** para `home.blade.php`, `about.blade.php` e `contact.blade.php`:
    * eu removi todo o conteúdo dos arquivo
    * eu adicionei o código substituindo "Nome" pelo nome da página (home, about, contact):
  ```html
    <x-layout>Nome</x-layout>
  ```

![Image-06-Home-Page-V2](../images/Image-06-Home-Page-V2.png)


## Referências
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/3
