<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BankInfo;
use App\Models\GiaVang;
use App\Models\LaiSuat;
use App\Models\NgoaiTeCron;
use App\Models\NgoaiTe;
use App\Models\TienAo;
use Carbon\Carbon;
use DB;

class tygiaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Param request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('tygia');
    }

    /**
     * Show the bank exchange
     *
     * @return \Illuminate\Http\Response
     */
    public function exchangeBank(Request $request)
    {
        $bankList = DB::table('bank_info')->where('active', 1)->select('id', 'bankcode', 'bankname')->get();
        $exchanges = null;
        $exchangeTemp = null;
        if (!isset($request->bank) || $request->bank == null) {
            $exchangeTemp = null;
            $exchanges = null;
        }
        if (isset($request->bank) || $request->bank != null) {
            $exchangeTemp = NgoaiTe::where('bank_id', $request->bank)->orderBy('id', 'DESC')->select('id')->paginate(30);
            if (count($exchangeTemp) > 0) {
                $exchanges = null;
            }
            if ($exchangeTemp != null) {
                $exchanges = NgoaiTe::whereIn('id', $exchangeTemp)->orderBy('id', 'DESC')->get();
            }
        }
        return view('admin.exchange.bankExchange', compact('bankList', 'exchanges', 'exchangeTemp'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
