<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetHistory extends Model
{
    use HasFactory;

    protected $table      = 'assets_used';
    protected $primaryKey = 'id';
    protected $hidden = ['id','asset_id'];
    

    public function historyFull($asset_id){
        return self::where('asset_id',$asset_id)->orderByDesc('given_date')->get();
    }

    
}
