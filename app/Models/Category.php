<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
        use SoftDeletes;
    
    protected $fillable = [
    'type',
];
    
    // Postに対するリレーション

//「1対多」の関係なので'posts'と複数形に
public function works()   
{
    return $this->hasMany(Work::class);  
}

public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('type', 'DESC')->paginate($limit_count);
}
}
