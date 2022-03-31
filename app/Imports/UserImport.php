<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $firstName = $row['firstname'];
        $lastName = $row['lastname'];
      //  dd($firstName,$lastName);

        $email = str_replace(" ","",$lastName).".".str_replace(" ","",$firstName)."@ESI-SBA.DZ";
       /*
        $length = 8;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            */
        if($row['type']=='student'){
            $r=false;
        }else{
            $r=true;
        }
         
        if($lastName){
            return new User([
                'name' => $row['firstname']."".$row['firstname'],    
                'email' => $email,
                'type' => $row['type'],
                'password' => bcrypt($row['password']),
            ]);
        }
    }
}
