<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormLastRunrs extends Model
{
    use HasFactory;

    protected $table = 'tbm_form_last_runrs';
    public $timestamps = false;
    protected $fillable = array('runner_id');

    public function runner()
    {
        return $this->belongsTo(Race::class, 'id', 'race_id');
    }

    public function serialize()
    {
        $obj['runner_id'] = $this->runner_id;

        return $obj;
    }
}
