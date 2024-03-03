<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Members;
use App\Models\Generation;
use App\Models\Affiliation;
use App\Models\Gender;
use App\Models\Music;

class Members extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = ['members_name',
    'members_nickname',
    'members_greet',
    'members_title',
    'members_debutdate',
    'members_profile',
    'members_personality',
    'members_img_icon',
    'members_img_costume',
    'members_img_costume2',
    'members_img_artwork',
    'members_img_concept',
    'members_introduction_video',
    'members_name_Illustrator',
    'members_youtube',
    'members_youtube_name',
    'generation_id',
    'affiliation_id',
    'gender_id',
    'ch',];

    public function generation()
    {
        return $this->belongsTo(Generation::class);
    }

    public function affiliation()
    {
        return $this->belongsTo(Affiliation::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function music()
    {
        return $this->belongsTo(Music::class, 'ch');
    }
    

}
