<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view extends Model
{
    use HasFactory;
    protected $table = 'views';

    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
