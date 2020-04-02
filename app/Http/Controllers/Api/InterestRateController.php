<?php

namespace App\Http\Controllers\Api;

use App\Models\BankInfo;
use App\Models\LaiSuat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterestRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrListBank = array(8, 1, 11, 7, 13, 9, 3, 5);
        $bankInfo = BankInfo::where('active', 1)->orderBy('sort', 'ASC')->pluck('id');
        if (!$bankInfo) {
            return response()->json(["message" => "Cannot find the bank"], 403);
        }
        $arrKyHanSlug = array(0,1,3,6,9,12,24,36);
        $vietcombank = $this->getDataLaiSuat(8, $arrKyHanSlug);
        $techcombank = $this->getDataLaiSuat(18, $arrKyHanSlug);
        $viettinbank = $this->getDataLaiSuat(6, $arrKyHanSlug);
        $sacombank = $this->getDataLaiSuat(16, $arrKyHanSlug);
        $agribank = $this->getDataLaiSuat(13, $arrKyHanSlug);
        $donga = $this->getDataLaiSuat(9, $arrKyHanSlug);
        $shb = $this->getDataLaiSuat(3, $arrKyHanSlug);
        $vib = $this->getDataLaiSuat(23, $arrKyHanSlug);
        if (
            $vietcombank == null || $techcombank == null || $viettinbank == null || $sacombank == null || $agribank == null ||
            $donga == null || $shb == null || $vib == null
        ) {
            return response()->json('data not found', 204);
        }
        $resultData = array_merge($vietcombank, $techcombank, $viettinbank, $sacombank, $agribank, $donga, $shb, $vib);
        return response()->json($resultData, 200);
    }

    private function getDataLaiSuat($bankId, $arrKyHanSlug)
    {
        $laiSuat = LaiSuat::where('bank_id', $bankId)->whereIn('kyhanslug', $arrKyHanSlug)
            ->where('hinhthuctietkiem', 1)
            ->orderBy('id', 'DESC')->take(8)->select('id', 'bank_id', 'bank_code',
                'kyhan', 'kyhanslug', 'laisuat_vnd', 'created_at'
            )->get()->toArray();
        if (!$laiSuat) {
            return null;
        }
        return $laiSuat;
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
