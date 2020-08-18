<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    //
    public function employes()
    {
        return $this->belongsToMany("App\Employe")->withTimestamps();
    }
}
