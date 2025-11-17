# Dia 7 - Autoloading, Namespaces e Models

## Informações
**MVC(Model-View-Controller)**:
- é um padrão de projeto que separa uma aplicação em três componentes interconectados;
- engloba a persistência de dados e as regras de negócio, como os modelos são criados, atualizados ou excluídos;
- é uma metodologia para estruturar aplicações, separando:
  * dados (Model), 
  * interface do usuário (View) 
  * lógica de controle (Controller).
- Model: representa os dados e a lógica de negócios.
- View: gerencia a apresentação e a interface do usuário.
- Controller: gerencia a entrada e a interação do usuário, geralmente representada por manipuladores de rotas no Laravel.

**Organizando Models no Laravel:**
- os Models pertencem ao diretório `app/Models`; 
- o Laravel usa o carregamento automático PSR-4, que mapeia namespaces para estruturas de diretórios:
  - uma classe Model é definida como namespace App\Models.
- ssa organização evita conflitos de nomes de classes e mantém a base de código organizada e fácil de manter.

**Lidando com dados ausentes:**
- se não existir uma tarefa com o ID solicitado, o método find retorna null;
- a função auxiliar `abort()` do Laravel lança uma exceção que o Laravel captura e converte em uma resposta HTTP 404
  adequada, com uma página de erro amigável;
- Lide com esse caso abortando com uma resposta 404:
```
if (!$job) {
    abort(404);
}
```


## Atividades
- Feito em aula:

**Na classe Job, adicionar método estático `all()`** para retornar dados:**
```php
class Job
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Director', 'salary' => 50000],
            ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
            ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
        ];
    }
}
```

**Na classe Job, adicionar método estático `find()` que utiliza `Arr::first`:**
```php
use Illuminate\Support\Arr;

class Job
{
    // ...

    public static function find(int $id): ?array
    {
        return Arr::first(self::all(), fn ($job) => $job['id'] === $id);
    }
}
```

- Sem atividades (extra).


## Referências
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/7
