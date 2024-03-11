<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','price','status','category'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
