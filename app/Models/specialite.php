<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
    use HasFactory;
/**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'specialites';


    /**
    * create the relationship between a prof and his PFEs
    * 
    * @return Illuminate\Database\Eloquent\Relations\BelongsToMany;
    */

    public function specialite(){
        return $this->belongsToMany(specialite::class);
    }

    
}
