<?php

namespace App\Http\Controllers\Api;

use App\Models\LoaiTienAo;
use App\Models\TienAo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VirtrualMoneyRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrLoaiTienAo = array(1, 2, 3, 8, 9, 4, 5, 13, 10, 11, 14);
        $tienAo = LoaiTienAo::whereIn('id', $arrLoaiTienAo)->select('id','slug')->get();
        foreach ($tienAo as $value) {
            $virtualMoney = TienAo::where('slug', $value->slug)->orderBy('id', 'DESC')->first();
            if (!$virtualMoney) {
                continue;
            }
            $virualMoneyVND = TienAo::where('slug', $value->slug)->where('currency_type', 'VND')
                ->orderBy('id', 'DESC')->select('price')->first();
            $value->price = $virtualMoney->price;
            $value->price_vnd = $virualMoneyVND->price;
            $value->volume_24h = $virtualMoney->volume_24h;
            $value->percent_change_24h = $virtualMoney->percent_change_24h;
            $value->market_cap = $virtualMoney->market_cap;
        }

        return response()->json($tienAo, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $virtualMoneyUSD = TienAo::where('slug', $slug)->where('currency_type','USD')->orderBy('id', 'DESC')->first();
        if (!$virtualMoneyUSD) {
            return response()->json(["message" => "Money not found"], 403);
        }
        $virtualMoneyVND = TienAo::where('slug', $slug)->where('currency_type','VND')->orderBy('id', 'DESC')->first();
        if (!$virtualMoneyVND) {
            return response()->json(["message" => "Money not found"], 403);
        }
        $virtualMoneyUSD->vnd = $virtualMoneyVND->price;
        $virtualMoneyUSD->image = $this->getImageMoney($slug);
        return response()->json(array($virtualMoneyUSD), 200);
    }

    public function getImageMoney($slug)
    {
        switch ($slug) {
            case "bitcoin":
                return asset('iconVirualMoney/bitcoin.png');
                break;
            case "litecoin":
                return asset('iconVirualMoney/litecoin.png');
                break;
            case "ethereum":
                return asset('iconVirualMoney/ethereum.png');
                break;
            case "cardano":
                return asset('iconVirualMoney/cardano.png');
                break;
            case "xrp":
                return asset('iconVirualMoney/xrp.png');
                break;
            case "tron":
                return asset('iconVirualMoney/tron.png');
                break;
            case "tether":
                return asset('iconVirualMoney/tether.png');
                break;
            case "dash":
                return asset('iconVirualMoney/dash.png');
                break;
            case "cash":
                return asset('iconVirualMoney/cash.png');
                break;
            case "iota":
                return asset('iconVirualMoney/iota.png');
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
