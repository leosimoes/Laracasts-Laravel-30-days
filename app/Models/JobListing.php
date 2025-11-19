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
