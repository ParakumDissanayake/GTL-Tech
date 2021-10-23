<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    use HasFactory;

    protected $table = 'tbm_runners';
    public $timestamps = false;
    protected $fillable = array('external_id', 'name', 'race_id');

    public function race()
    {
        return $this->hasMany(Race::class, 'id', 'race_id');
    }

    public function last_runrs()
    {
        return $this->hasMany(FormLastRunrs::class, 'runner_id', 'id');
    }

    public function form_data()
    {
        return $this->hasOne(FormData::class, 'runner_id', 'id');
    }

    public function serialize()
    {
        $obj['name'] = $this->name;
        $obj['age'] = $this->form_data->age;
        $obj['sex'] = $this->form_data->sex;
        $obj['color'] = $this->form_data->color;
        $obj['last_runs'] = $this->last_runrs->toArray();

        return $obj;
    }
}
