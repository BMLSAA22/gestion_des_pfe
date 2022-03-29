<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prof extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'degree',
       

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


}
