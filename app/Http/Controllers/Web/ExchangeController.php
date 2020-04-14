<?php

namespace App\Http\Controllers\Web;

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

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Param request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        DB::statement("SET sql_mode = '' ");
        $ngoaiTePaginateTemp = NgoaiTe::where(function ($query) use ($request) {
            // check condition here
            if ($request->code != null) {
                $query->where('code', 'like', '%' . $request->code . '%');
            }
            if ($request->time_start != null && $request->time_end == null) {
                $query->where('created_at', '>=', $request->time_start);
            } elseif ($request->time_start == null && $request->time_end != null) {
                $query->where('created_at', '<=', $request->time_end);
            } elseif ($request->time_start != null && $request->time_end != null) {
                $query->where('created_at', '>=', $request->time_start)
                ->where('created_at', '<', $request->time_end);
            } else {
            }
        });
        $ngoaiTePaginate = $ngoaiTePaginateTemp->select('id')->orderBy('id', 'DESC')->paginate(30);
        if (count($ngoaiTePaginate) > 0) {
            $ngoaiTe = NgoaiTe::whereIn('id', $ngoaiTePaginate)->get();
        } else {
            $ngoaiTe = null;
        }

        if ($ngoaiTe != null) {
            foreach($ngoaiTe as $value) {
                $time = new Carbon($value->created_at);
                $value->time = $time->format('d/m/Y H:i');
            }
        }
        return view('admin.exchange.index', compact('ngoaiTe', 'ngoaiTePaginate'));
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
