<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Members;

class Affiliation extends Model
{
    use HasFactory;
    protected $table = 'affiliation';
    protected $fillable = ['affiliation_name'];
    

    public function members()
    {
        return $this->hasMany(Members::class);
    }
}
