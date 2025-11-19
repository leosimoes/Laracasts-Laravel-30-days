# Day 9 - Meet Eloquent

## Information
- Eloquent:
  * is an ORM (Object-Relational Mapper);
  * maps database rows to PHP objects;
  * facilitates working with your data in an object-oriented way.

- For example, instead of manually manipulating arrays of job postings,
  you can have a Job object representing each job record with all its attributes and behaviors.

## Activities
- To convert your existing `Job` class into an Eloquent model:
  * rename the file and the class name to `JobListing`;
  * make the `JobListing` class extend the `Model` class;
  * remove the `all()` and `find()` methods, as they will be generated automatically;

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


## References
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/9
