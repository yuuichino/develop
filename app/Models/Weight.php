<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Weight extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'weight',
    'days',
];
    
    public function user()
{
    return $this->belongsTo(User::class);
}

public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('days', 'DESC')->paginate($limit_count);
}
    
}
