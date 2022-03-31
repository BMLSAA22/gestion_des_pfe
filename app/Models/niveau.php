<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveau extends Model
{
    use HasFactory;
  /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'year'
       

    ];
     /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'niveaux';
/**
 * create the relationship between a prof and his PFEs
 * 
 * @return Illuminate\Database\Eloquent\Relations\BelongsToMany;
 */

public function specialite(){
    return $this->belongsToMany(specialite::class);
}



}
