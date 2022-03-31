<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    use HasFactory;


     /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'projets';

    /**
 * create the relationship between a prof and his PFEs
 * 
 * @return Illuminate\Database\Eloquent\Relations\belongsTo;
 */

 

public function prof(){
    return $this->belongsTo(Prof::class);
}
}
