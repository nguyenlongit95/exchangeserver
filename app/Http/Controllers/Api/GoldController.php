<?php

namespace App\Http\Controllers\Api;

use App\Models\GiaVang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goldCron = DB::table('tygiavang_cron')->where('slug', 'sjc')->orderBy('id', 'DESC')->first();
        if (!$goldCron) {
            return response()->json(["message" => "Cron job not found"], 403);
        }
        $goldExchange = GiaVang::where('cron_id', $goldCron->id)->where('slug', 'sjc')
            ->orderBy('id', 'DESC')
            ->select(
                'id','cron_id','donvi','slug','loai','tinhthanh','mua','tyle_mua','ban','tyle_ban'
            )->take(13)->get();
        if (!$goldExchange) {
            return response()->json(["message" => "Data gold not found"], 403);
        }
        $goldExchange = $this->sttOfGold($goldExchange);
        return response()->json($goldExchange, 200);
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
        $goldCron = DB::table('tygiavang_cron')->where('slug', $slug)->orderBy('id', 'DESC')->first();
        if (!$goldCron) {
            return response()->json(["message" => "Gold cron not found"], 403);
        }

        $goldExchange = GiaVang::where('slug', $slug)->where('cron_id', $goldCron->id)
            ->orderBy('id', 'DESC')->select(
                'id','cron_id','donvi','slug','loai','tinhthanh','mua','tyle_mua','ban','tyle_ban'
            )->take(13)->get();
        if (!$goldExchange) {
            return response()->json(["message" => "Gold data not found"], 403);
        }
        $goldExchange = $this->sttOfGold($goldExchange);
        return response()->json($goldExchange, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  none
     * @return \Illuminate\Http\Response
     */
    public function world()
    {
        $goldCron = DB::table('tygiavang_cron')->where('slug', 'GiaVangTheGioi')->orderBy('id', 'DESC')->first();
        if (!$goldCron) {
            return response()->json(["message" => "Cron job not found"], 403);
        }

        $goldExchange = GiaVang::where('slug', 'thegioi')->where('cron_id', $goldCron->id)
            ->orderBy('id', 'DESC')->select(
                'id','cron_id','slug','loai', 'mua', 'tyle_mua', 'ban', 'tyle_ban'
            )->first();
        if (!$goldExchange) {
            return response()->json(["message" => "Gold data not found"], 403);
        }
        $goldExchange = $this->sttOfGold($goldExchange);
        return response()->json($goldExchange, 200);
    }

    public function drawChart(Request $request, $type)
    {
        $goldCron = DB::table('tygiavang_cron')->where('slug', $type)->orderBy('id', 'DESC')->take(12)->pluck('id');
        if (!$goldCron) {
            return response()->json(["message" => "Cron job not found"], 403);
        }
        $goldExchange = GiaVang::whereIn('cron_id', $goldCron)->where('slug', $type)->where('tinhthanh', 'LIKE', '%Hà Nội%')
            ->orderBy('id', 'DESC')->select('mua', 'created_at')->get();
        if (!$goldExchange) {
            return response()->json(["message" => "Gold data not found"], 422);
        }
        foreach ($goldExchange as $value) {
            $timeTemp = new Carbon($value->created_at);
            $value->time = $timeTemp->format("Y/m/d H:i");
        }
        return $goldExchange;
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

    public function sttOfGold($goldExchange)
    {
        $stt = 1;
        foreach ($goldExchange as $value) {
            $value->stt = $stt;
            $stt++;
        }
        return $goldExchange;
    }
}
