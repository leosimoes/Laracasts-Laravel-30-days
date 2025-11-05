# Day 2 - Your First Route and View

## Information
- In **routes/web.php**, application routes and their respective return values are defined.
- A route's return value can be:
  - a callback function that returns a view file, a string (message), or an array (JSON);
  - a reference to a Controller method.
- Blade is Laravel's template engine.
- Blade files have the extension `.blade.php`.
- The project folder structure is:

![Image-03-Folders](../images/Image-03-Folders.png)

- To create a route:
  - In **routes/web.php**, add:
  ```php
       Route::get('/route_name', function (){
          return view('view_name');
      });
  ```
- In **resources/views**, create the file `view_name.blade.php`.


## Activities
- Create a page in `/about`:
  - In **routes/web.php**, I added:
  ```php
  Route::get('/about', function (){
    return view('about');
  });
  ``` 
  - In **resources/views** I created the file `about.blade.php`
  - In my browser, I tested the URL http://laracasts-laravel-30-days.test/about

![Image-04-About-Page](../images/Image-04-About-Page-V1.png)


- Create a page in `/contact`:
  - In **routes/web.php**, I added:
  ```php
  Route::get('/contact', function (){
  return view('contact');
  });
  ```
  - In **resources/views** I created the file `contact.blade.php`
  - In my browser, I tested the URL http://laracasts-laravel-30-days.test/contact

![Image-05-Contact-Page-V1](../images/Image-05-Contact-Page-V1.png)


## References
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/2
