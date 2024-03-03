<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Members;

class Gender extends Model
{
    use HasFactory;
    protected $table = 'gender';
    protected $fillable = ['gender_name'];
    

    public function members()
    {
        return $this->hasMany(Members::class);
    }
}
