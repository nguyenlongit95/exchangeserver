<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\render_seo;
use App\Models\LoaiTienAo;
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
        $title = "Cập nhật và so sánh các loại tiền ảo trên thế giới";
        return view('tienao', compact('seo_advanced', 'title'));
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
        $tienao = LoaiTienAo::where('slug', $code)->first();
        $tienao['iframe_chart'] = $this->getChartRealtime($tienao['symbol']);
        return view('tienaodetail', compact('tienao'));
    }

    private function getChartRealtime($symbol)
    {
        $tempSymbol = $symbol . 'USD';
        $chart = '<iframe style="height:550px; width: 100%;" id="tradingview_b92c2" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_b92c2&amp;symbol='.$tempSymbol.'&amp;interval=1&amp;symboledit=0&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=3&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en_US&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=ETHUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>';
        return $chart;
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
