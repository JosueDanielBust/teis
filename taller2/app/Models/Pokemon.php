<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'weakness',
        'ablity',
        'height',
        'weight',
        'description',
        'cost',
        'evolution',
        'stat_hp',
        'stat_attack',
        'stat_defense',
        'stat_special_attack',
        'stat_special_defense',
        'stat_speed',
        'ofTheMonth',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getId() {
        return $this->attributes['id'];
    }

    public function getById($id) {
        return $this->attributes['id'];
    }

    public function pokemon(){
        return $this->belongsTo(Pokemon::class);
    }

    public function getPokemon() {
        return $this->pokemon;
    }
}
