<?php
namespace App\Models;

class Listing {
    public static function all(){
        return[
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => ' lorem ispim asd asd askdhasjkdhajkh.
                 kjasd gakjhdg ad gahdj ga hdjgahjdag
                 dhjag ahj gdahjdgadjhagd hjagd ahj.
                 asd ;j flsdlkjhsldghgh kjasdhf .'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => ' lorem ispim asd asd askdhasjkdhajkh.
                 kjasd gakjhdg ad gahdj ga hdjgahjdag
                 dhjag ahj gdahjdgadjhagd hjagd ahj.
                 asd ;j flsdlkjhsldghgh kjasdhf .'
            ]
        ];
    }

public static function find($id){
    $listings = self::all();

    foreach($listings as $listing){
        if($listing['id'] == $id){
            return $listing;
        }
    }
}

}
?>