<?php

namespace App\Http\Controllers\Web;
use App\Models\BankInfo;
use Illuminate\Support\Facades\DB;
use App\Models\LaiSuat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TienAo;
use App\Models\LoaiTienAo;
use App\Models\GiaVang;
use App\Models\NgoaiTe;
use App\Models\NgoaiTeCron;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ngoaiTePaginate = NgoaiTe::orderBy('id', 'DESC')->select('id')->paginate(30);

        $ngoaiTe = NgoaiTe::whereIn('id', $ngoaiTePaginate)->get();

        return view('admin.exchange.index', compact('ngoaiTePaginate', 'ngoaiTe'));
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
            $exchangeTemp = NgoaiTe::where('bank_id', $request->bank)->orderBy('id',
                'DESC')->select('id')->paginate(30);
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function oilPetro()
    {
        return view('admin.exchange.oilPetro');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function bankInfo(Request $request)
    {
        $bankInfo = null;
        if (!isset($request->bank) || $request->bank == null) {
            $bankInfo = BankInfo::where('id', 1)->first();
        } else {
            $bankInfo = BankInfo::where('id', $request->bank)->first();
        }
        $bankList = DB::table('bank_info')->where('active', 1)->select('id', 'bankcode', 'bankname')->get();
        return view('admin.exchange.bankinfo', compact('bankList', 'bankInfo'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function bankInfoUpdate(Request $request, $id)
    {
        $bankInfo = BankInfo::findOrFail($id);
        $data = $request->all();
        $bankInfo->bankname = $data['bank_name'];
        $bankInfo->description = $data['description'];
        $bankInfo->laisuatdes = $data['laisuatdes'];
        try {
            $bankInfo->save();
            return redirect()->back()->with('success', 'Cập nhật ngân hàng ' . $bankInfo->bankname . ' thành công!');
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function goldInfo(Request $request)
    {
        $goldInfo = null;
        if (!isset($request->gold) || $request->gold == null) {
            $goldInfo = DB::table('tygiavang_distributor')->where('slug', 'sjc')->first();
        } else {
            $goldInfo = DB::table('tygiavang_distributor')->where('slug', $request->gold)->first();
        }

        return view('admin.exchange.goldInfo', compact('goldInfo'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function goldInfoUpdate(Request $request, $id)
    {
        $goldInfo = DB::table('tygiavang_distributor')->where('id', $id)->first();
        if (!$goldInfo || $goldInfo == null) {
            return redirect()->back()->with('thong_bao', 'Không tìm thấy hãng vàng');
        }
        try {
            $update = DB::table('tygiavang_distributor')->where('id', $id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'donvi' => $request->donvi
            ]);
            if ($update == 1) {
                return redirect()->back()->with('success', 'Cập nhật thành công');
            } else {
                return redirect()->back()->with('thong_bao', 'Cập nhật thất bại, hãy kiểm tra lại');
            }
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function virualMoneyType()
    {
        $loaiTienAo = LoaiTienAo::paginate(20);
        if (!$loaiTienAo || $loaiTienAo == null) {
            return redirect('admin/virual-money')->with('thong_bao', 'Không tìm thấy loại tiền ảo!');
        }
        return view('admin.exchange.typeVirualMoney', compact('loaiTienAo'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function virualMoneyTypeDetail(Request $request, $id)
    {
        $loaiTienAo = LoaiTienAo::find($id);
        if (!$loaiTienAo || $loaiTienAo == null) {
            return redirect('admin/virual-money')->with('thong_bao', 'Không tìm thấy loại tiền ảo!');
        }
        return view('admin.exchange.typeVirualMoneyDetail', compact('loaiTienAo'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function virualMoneyTypeUpdate(Request $request, $id)
    {
        $loaiTienAo = LoaiTienAo::find($id);
        if (!$loaiTienAo || $loaiTienAo == null) {
            return redirect('admin/virual-money-type')->with('thong_bao', 'Không tìm thấy loại tiền ảo!');
        }
        $loaiTienAo->description = $request->description;
        try {
            $loaiTienAo->save();
            return redirect('admin/virual-money-type')->with('thong_bao', 'Cập nhật thành công');
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function adsense(Request $request)
    {
        $adsense = DB::table('google_adsense')->orderBy('id', 'DESC')->get();
        if (!$adsense) {
            return redirect('/admin/google-adsense');
        }
        return view('admin.exchange.googleAdSense', compact('adsense'));
    }

    public function adsenseCreate()
    {
        return view('admin.exchange.googleAdSensCreate');
    }

    public function adsenseStore(Request $request)
    {
        $insertAdSense = DB::table('google_adsense')->insert([
            'type' => $request->type,
            'link' => $request->link
        ]);
        if (!$insertAdSense) {
            return redirect('/admin/google-adsense')->with('thong_bao', 'Có lỗi sảy ra khi thêm dữ liệu');
        }
        return redirect('/admin/google-adsense')->with('success', 'Thêm AdSense thành công');
    }

    public function adsenseDelete($id)
    {
        $findAdSense = DB::table('google_adsense')->where('id', $id)->first();
        if (!$findAdSense) {
            return redirect('/admin/google-adsense')->with('thong_bao', 'Không tìm thấy AdSense tương ứng');
        }
        $deleteAdSense = DB::table('google_adsense')->where('id', $id)->delete();
        if ($deleteAdSense) {
            return redirect()->with('/admin/google-adsense')->with('success', 'Xoá AdSense thành công');
        }
        return redirect()->with('/admin/google-adsense')->with('success', 'Có lỗi sảy ra khi xoá AdSense');
    }

}
