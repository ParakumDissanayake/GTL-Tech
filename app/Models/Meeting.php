<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $table = 'tbm_meetings';
    public $timestamps = false;
    protected $fillable = array('external_id', 'name');

    public function races()
    {
        return $this->hasMany(Race::class, 'id', 'meeting_id');
    }

    public function serialize()
    {
        $obj['external_id'] = $this->external_id;
        $obj['name'] = $this->name;

        return $obj;
    }
}
