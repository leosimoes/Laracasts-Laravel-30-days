# Dia 6 - Dados da View e Wildcards de Rota

## Informações

**Passando variáveis para as views:**
- No seu arquivo de rotas (web.php), você pode passar um segundo argumento para a função `view()`, 
que é um array de dados ['nome' => 'valor].
- Cada chave se torna uma variável disponível na view.
- Na sua view Blade (home.blade.php), você pode acessar essas variáveis diretamente com `{{ $nome }}`


**Transmitindo dados complexos: matrizes e loops:**
- Pode se passar estruturas de dados mais complexas, como arrays, para suas views.
- No seu arquivo `blade.php` use diretiva Blade `@foreach` para percorrer valores em loop:
```
@foreach ($valores as $valor)
...
@endforeach
```

**A função auxiliar do Laravel `collect()`:**
- cria uma coleção a partir do array, 
- permite usar o método `first()` com um callback para buscar por um campo.
```
$job = collect($jobs)->first(fn ($job) => $job['id'] == $id);
```

**Para criar páginas de objetos individuais de um recurso:** 
- adicione um identificador único `id` a cada objeto e crie uma rota dinâmica
```
Route::get('/jobs/{id}', function ($id) {...});
```


## Atividades
Sem atividade.


## Referências
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/6
