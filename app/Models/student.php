<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name','last_name','sexe',
       

    ];
     /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'students';
    public function addStudent($first_name,$last_name,$sexe ,$users_id){
        $this->sexe=$sexe;
       $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->users_id=$users_id;
        $this->save();
}

}
