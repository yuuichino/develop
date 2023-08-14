<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'title',
    'count',
];
    
    public function menu()
{
    return $this->belongsTo(Menu::class);
}

public function category()
{
    return $this->belongsTo(Category::class);
}

public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('category_id', 'DESC')->paginate($limit_count);
}
    
}
