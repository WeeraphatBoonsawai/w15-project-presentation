<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Members;

class Generation extends Model
{
    use HasFactory;
    protected $table = 'generation';
    protected $fillable = ['generation_name',
    'generation_img'];
    

    public function members()
    {
        return $this->hasMany(Members::class);
    }
}
