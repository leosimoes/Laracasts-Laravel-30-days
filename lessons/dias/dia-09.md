# Dia 9 - Conheça o Eloquent

## Informações
- O Eloquent:
  * é um ORM (Object Relational Mapper - Mapeador Objeto-Relacional);
  * mapeia linhas do banco de dados para objetos PHP;
  * facilita o trabalho com seus dados de forma orientada a objetos.
- Por exemplo, em vez de manipular manualmente matrizes de anúncios de emprego, 
  você pode ter um objeto Job representando cada registro de emprego com todos os seus atributos e comportamentos.

- O método `find()` é usado para recuperar um registro específico de um Model por ID.
- O método `all()` é usado para recuperar todos os registros de um Model.
- Se o método `all()` retornar uma coleção vazia, verifique se o nome da tabela do banco de dados corresponde às
  convenções do Eloquent.
- Por padrão, o Eloquent espera que o nome da tabela seja o plural em snake_case do nome do modelo (jobs para Job).
- Se a sua tabela tiver um nome diferente, especifique-o na classe Model `protected $table = 'nome_tabela;`.

- A criação de registros:
    * pode ser feita com o método `create()`;
    * é protegida contra vulnerabilidades de atribuição em massa pelo Laravel,
      impedindo que usuários mal-intencionados modifiquem campos não intencionais.;
    * tem seus campos permitidos com atribuição em massa se estiverem no array na propriedade `$fillable` na classe Model.

- A função `dd()` serve para inspecionar um objeto e exibi-lo no lugar de uma view, apenas para testes 
- Para acessar um campo de um objeto de uma collection:
  * use `[0]` para acessar o primeiro elemento
  * e depois `->`seguido do nome do campo.
```php
$jobs[0]->title;
```

- O Tinker do Laravel:
  * é um REPL (shell interativo) para sua aplicação;
  * é usado para testar consultas Eloquent, criar registros, atualizar dados e muito mais;
  * é executado após o comando `php artisan tinker`;
  * tem o comando `php artisan make:model Post -m` para geral o Model e migration.

- Para gerar modelos e suas respectivas migration use o Artisan com o comando `php artisan make:model NomeModel -m`.


## Atividades
- Para converter sua classe `Job` existente em um modelo Eloquent:
    * renomeie o arquivo e o nome da classe para `JobListing`;
    * faça com que a classe `JobListing` estenda a classe `Model`;
    * remova os métodos `all()` e `find()`, já que serão gerados automaticamente;
```php
<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    protected string $id;
    protected string $title;
    protected string $salary;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

}
```

- No arquivo `routes/web.php`, criei a rota `/jobs` e usei a função `dd()` para inspecionar `JobListing::all()`: 
```php
Route::get('/jobs', function () {
    $jobs = JobListing::all();
    return dd($jobs);
});
```

- Adicionei um registro pelo código:
```php
JobListing::create([
    'title' => 'Acme Director',
    'salary' => '1000000',
]);
```

- Testei o resultado da rota`jobs`: `http://laracasts-laravel-30-days.test/jobs`

![Image-10-dd-job](../images/Image-10-dd-job.png)


## Referências
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/9
