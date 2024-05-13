<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetHistory;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    private $asset;
    private $assetHistory;
    public function __construct()
    {
        $this->asset = new Asset();
        $this->assetHistory = new AssetHistory();
    }

    public function specific($company, $asset_no){
        $asset = $this->asset->getSpecific($company,$asset_no);
        if ($asset != null) {
        $assetHist = $this->assetHistory->historyFull($asset->id);
            $result = [
                'detail'=>$asset,
                'history'=>$assetHist
            ];
            return view('assets/quick',[
                'asset'=>$asset,
                'histories'=>$assetHist
            ]);
            // return response()->json($result);
        }
        return response()->json(['status'=>'Undefined!']);
    }

    public function detail($asset_no){
        $asset = $this->asset->getSpecific($asset_no);
        if ($asset != null) {
        $assetHist = $this->assetHistory->historyFull($asset->id);
            $result = [
                'detail'=>$asset,
                'history'=>$assetHist
            ];
            return view('assets/quick',[
                'asset'=>$asset,
                'histories'=>$assetHist
            ]);
            // return response()->json($result);
        }
        return response()->json(['status'=>'Undefined!']);
    }
}
