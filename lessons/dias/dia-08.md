# Dia 8 - Introdução a Migrations

## Informações

### Configuração e instalação do banco de dados
- Por padrão, o Laravel seleciona o SQLite, um banco de dados baseado em arquivos que é adequado para muitas aplicações, 
 a menos que você espere uma escalabilidade massiva como a do Google ou da Amazon.

- O arquivo `.env`, que contém configurações específicas do ambiente:
  * credenciais do banco de dados;
  * modo de depuração; 
  * drivers de cache; 
  * chaves de API. 
- Esse arquivo mantém informações confidenciais fora do seu código-fonte e do controle de versão.


### Comandos do Artisan e Migrations de Banco de Dados
- **Artisan** é uma ferramenta de linha de comando incluida no Laravel:
  * `php artisan`para listar os comandos disponíveis;
  * os comandos relacionados a bancos de dados pertencem aos namespaces `db` e ` migratedb` 
  * `php artisan migrate` para executar todas as migrações pendentes, e criar ou atualizar tabelas do banco de dados.
  * `php artisan migrate:refresh` para reverter todas as migrations e executá-las (é útil no desenvolvimento).
  * `php artisan migrate:rollback` para reverter o último lote de migrações.

- **Migrations**:
  * são classes PHP que definem a estrutura das tabelas do seu banco de dados;
  * permitem que você controle as versões do seu esquema de banco de dados e o compartilhe com sua equipe;
  * definem a estrutura do banco de dados em PHP e oferecem suporte ao controle de versão;
  * contêm dois métodos:
    * up() - define as alterações a serem aplicadas (criação de tabelas, adição de colunas);
    * down() - define como reverter essas alterações (excluir tabelas, remover colunas).


### TablePlus para o gerenciamento de banco de dados
- TablePlus:
  * é uma ferramenta GUI recomendada para gerenciar bancos de dados no macOS, Windows e Linux; 
  * oferece suporte a vários tipos de bancos de dados, incluindo SQLite, MySQL e PostgreSQL;
  * pode ser conectado ao seu banco de dados SQLite do Laravel apontando-o para o arquivo `database/database.sqlite`;
  * permite inspecionar tabelas, visualizar dados e modificar o esquema visualmente.


## Atividades
- Verificar se o arquivo `.env` tem `DB_CONNECTION=sqlite`.
- Criar um novo migration com `php artisan make:migration create_job_listings_table`.

![Image-08-Artisan-make-migration](../images/Image-08-Artisan-make-migration.png)

- Editar o arquivo de migration para definir o esquema da tabela com colunas *id*, *title* e *salary*.
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('salary');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
```
- Aplique o migration: `php artisan migrate.`

![Image-09-Artisan-migrate](../images/Image-09-Artisan-migrate.png)


## Referências
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/8
