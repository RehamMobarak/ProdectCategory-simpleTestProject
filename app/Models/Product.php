<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = "products";
    protected $fillable = ['Name', 'Code', 'Color','category_id',
    'Description','Image'];

    public function scopeFilter($query)
    {
        if (request('search')) {
            $query->where('Name', 'like', '%' . request('search') . '%')->orWhere('Description', 'like', '%' . request('search') . '%')->paginate(5);
        }
    }

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
}
