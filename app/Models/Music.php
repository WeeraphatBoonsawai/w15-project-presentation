<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Members;

class Music extends Model
{
    use HasFactory;
    protected $table = 'music';
    protected $fillable = ['music_name',
    'music_img',
    'music_link',
    'ch',];

    public function members()
    {
        return $this->belongsTo(Members::class, 'ch','ch');
    }
}
