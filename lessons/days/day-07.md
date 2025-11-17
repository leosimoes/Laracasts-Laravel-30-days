# Day 7 - Autoloading, Namespaces and Models

## Information
**MVC (Model-View-Controller)**:
- is a design pattern that separates an application into three interconnected components;
- encompasses data persistence and business rules, such as how models are created, updated, or deleted;
- is a methodology for structuring applications, separating:
  * data (Model),
  * user interface (View)
  * control logic (Controller).
- Model: represents the data and business logic.
- View: manages the presentation and user interface.
- Controller: manages user input and interaction, usually represented by route handlers in Laravel.

**Organizing Models in Laravel:**
- Models belong to the `app/Models` directory;
- Laravel uses PSR-4 autoloading, which maps namespaces to directory structures:
- a Model class is defined as the namespace App\Models. 
- this organization avoids class name conflicts and keeps the codebase organized and easy to maintain.

**Handling missing data:**
- If a task with the requested ID does not exist, the find method returns null;
- Laravel's helper function `abort()` throws an exception that Laravel catches and converts into a proper HTTP 404 
response, with a user-friendly error page;
- Handle this case by aborting with a 404 response:
```
if (!$job) {
    abort(404);
}
```


## Activities
- Done in class:

**In the Job class, add the static method `all()`** to return data:**
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

**In the Job class, add the static method `find()` that uses `Arr::first`:**
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

- No extra activities.


## References
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/7
