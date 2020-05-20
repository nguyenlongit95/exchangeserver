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

class tienaoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Param request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('tienao');
    }

    /**
     * Show the virual money of view admin
     *
     * @return \Illuminate\Http\Response
     */
    public function virualMoney(Request $request)
    {
        $loaiTienAo = DB::table('loaitienao')->select('slug', 'name')->get();
        $tienAo = null;
        DB::statement("SET sql_mode = '' ");
        $virualMoneyTemp = TienAo::where(function ($query) use ($request) {
            if (isset($request->money) && $request->money != null) {
                $query->where('slug', $request->money);
            }
        });
        $virualMoneyPaginate = $virualMoneyTemp->orderBy('id', 'DESC')->select('id')->paginate(30);
        if (count($virualMoneyPaginate) > 0) {
            $tienAo = TienAo::whereIn('id', $virualMoneyPaginate)->orderBy('id', 'DESC')->get();
        } else {
            $tienAo = null;
        }
        return view('admin.exchange.virualMoney', compact('loaiTienAo', 'tienAo', 'virualMoneyPaginate'));
    }

    public function oilPetro()
    {
        return view('admin.exchange.oilPetro');
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
     * @param  int  $code
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('tienaodetail');
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
