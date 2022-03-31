<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prof extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     * @return Illuminate\Database\Eloquent\Relations\hasMany;
     * @var array<int, string>
     */
    protected $fillable = [
        'degree','first_name','last_name','sexe',
    ];
     /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'profs';
/**
 * create the relationship between a prof and his PFEs
 * 
 * @return Illuminate\Database\Eloquent\Relations\hasMany;
 */

public function Projets(){
    return $this->hasMany(projet::class);
}

public function addProf($first_name,$last_name,$degree ,$users_id){
        $this->degree=$degree;
       $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->users_id=$users_id;
        $this->save();
}
}
