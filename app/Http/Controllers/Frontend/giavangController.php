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

class giavangController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Param request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('giavang');
    }

    /**
     * Show the gold exchange
     *
     * @return \Illuminate\Http\Response
     */
    public function gold(Request $request)
    {
        $gold = null;
        $goldPaginate = null;
        if (isset($request->gold) || $request->gold != null) {
            $goldPaginate = GiaVang::where('slug', $request->gold)->orderBy('id', 'DESC')->select('id')->paginate(30);
            if (count($goldPaginate) > 0) {
                $gold = GiaVang::whereIn('id', $goldPaginate)->orderBy('id', 'DESC')->get();
            } else {
                $gold = null;
            }
        }
        return view('admin.exchange.gold', compact('gold', 'goldPaginate'));
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
