<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $table = 'tbm_races';
    public $timestamps = false;
    protected $fillable = array('external_id', 'name', 'meeting_id');

    public function meeting()
    {
        return $this->hasOne(Meeting::class, 'meeting_id', 'id');
    }

    public function serialize()
    {
        $obj['external_id'] = $this->external_id;
        $obj['name'] = $this->name;
        $obj['meeting_id'] = $this->meeting_id;

        return $obj;
    }
}
