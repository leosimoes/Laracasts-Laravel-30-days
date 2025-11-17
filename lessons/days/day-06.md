# Day 6 - View Data and Route Wildcards

## Information

**Passing variables to views:**
- In your routes file (web.php), you can pass a second argument to the `view()` function, 
which is a data array ['name' => 'value'].
- Each key becomes a variable available in the view.
- In your Blade view (home.blade.php), you can access these variables directly with `{{ $name }}`

**Passing complex data: arrays and loops:**
- You can pass more complex data structures, such as arrays, to your views.
- In your `blade.php` file, use the Blade directive `@foreach` to loop through values:
```
@foreach ($values as $value)
...
@endforeach
```

**The Laravel helper function `collect()`:**
- creates a collection from the array,
- allows you to use the `first()` method with a callback to search for a field.
```
$job = collect($jobs)->first(fn ($job) => $job['id'] == $id);

```

**To create pages for individual objects of a resource:**
- add a unique identifier `id` to each object and create a dynamic route
```
Route::get('/jobs/{id}', function ($id) {...});

```

## Activities
No activity.


## References
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/6
