<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table      = 'assets';
    protected $primaryKey = 'id';
    // public $timestamps  = false;
    protected $hidden = ['id'];


    public function getSpecific($asset_no){
        // return self::where([['company_code',$company],['no',$asset_no]])->first();
        return self::where('no',$asset_no)->first();
    }
}
