<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $table = 'tbm_form_data';
    public $timestamps = false;
    protected $fillable = array('runner_id', 'age', 'sex', 'color');

    public function runner()
    {
        return $this->belongsTo(Runner::class, 'id', 'runner_id');
    }

    public function serialize()
    {
        $obj['runner_id'] = $this->runner_id;
        $obj['name'] = $this->name;
        $obj['age'] = $this->age;
        $obj['sex'] = $this->sex;
        $obj['color'] = $this->color;

        return $obj;
    }
}
