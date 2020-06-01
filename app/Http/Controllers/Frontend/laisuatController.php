<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\render_seo;
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

class laisuatController extends Controller
{
    private $seoHelper;
    public function __construct()
    {
        $this->seoHelper = new render_seo();
    }
    /**
     * Display a listing of the resource.
     * @Param request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $seo_advanced = $this->seoHelper->render_seo('seo_advanced');
        $title = "Cập nhật và so sánh lãi suất của các ngân hàng";
        return view('laisuat', compact('seo_advanced', 'title'));
    }

    /**
     * Show the interest of bank
     *
     * @return \Illuminate\Http\Response
     */
    public function interest(Request $request)
    {
        $bankList = DB::table('bank_info')->where('active', 1)->select('id', 'bankcode', 'bankname')->get();
        $interest = null;
        DB::statement("SET sql_mode = '' ");
        $interestTemp = LaiSuat::where(function ($query) use ($request) {
            if (isset($request->bank) && $request->bank != null) {
                $query->where('bank_id', $request->bank);
            }
            if (isset($request->kyhan) && $request->kyhan != null) {
                $kyhanCondition = "" . $request->kyhan;
                $query->where('kyhanslug', $request->kyhan);
            }
        });
        $interestPaginate = $interestTemp->orderBy('id', 'DESC')->select('id')->paginate(30);
        if (count($interestPaginate) > 0) {
            $interest = LaiSuat::whereIn('id', $interestPaginate)->orderBy('id', 'DESC')->get();
        }
        return view('admin.exchange.interest', compact('bankList', 'interest', 'interestPaginate'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('laisuatdetail');
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
