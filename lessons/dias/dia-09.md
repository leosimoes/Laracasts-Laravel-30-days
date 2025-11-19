# Dia 9 - Conheça o Eloquent

## Informações
- O Eloquent:
  * é um ORM (Object Relational Mapper - Mapeador Objeto-Relacional);
  * mapeia linhas do banco de dados para objetos PHP;
  * facilita o trabalho com seus dados de forma orientada a objetos.
- Por exemplo, em vez de manipular manualmente matrizes de anúncios de emprego, 
  você pode ter um Jobobjeto representando cada registro de emprego com todos os seus atributos e comportamentos.
  

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


## Referências
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/9
