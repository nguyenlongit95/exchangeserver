<?php
/*
 * Tại đây ta khai báo các phương thức cụ thể cho đối tượng
 * Class này sẽ extends EloquentRepository và Implements CateogryRepositoryInterface
 * */
namespace App\Repositories\Exchanges;

use Illuminate\Support\Collection;
use App\Repositories\Eloquent;
use App\Repositories\Eloquent\EloquentRepository;
use App\Email;
use Mail;
use DB;
use App\Models\NgoaiTe;
use function Sodium\add;

class ExchangeEloquentRepository extends EloquentRepository implements ExchangeRepositoryInterface
{
    private $templateMoney = [
        'AUD', 'CAD', 'CHF', 'CNY', 'DKK', 'EUR', 'GBP', 'HKD',
        'JPY', 'KRW', 'MYR', 'RUB', 'SGD', 'THB', 'USD'
    ];
    private $templateBank = [
        'tpb', 'mbbank', 'eximbank', 'dab', 'vietcombank', 'sacombank', 'vietin',
        'shb', 'hsbc', 'techcom', 'bidv', 'acb'
    ];

    /**
     * merge this exchanges
     *  param bank information and list data exchange
     *
     *  return collection
     */
    public function mergeExchange($bankInfo, $ngoaiTe)
    {
        foreach ($ngoaiTe as $ngoaite) {
            if (!$ngoaite->bank_id) {
                continue;
            }
            foreach ($bankInfo as $bank) {
                if ($bank->id == $ngoaite->bank_id) {
                    $ngoaite->bank_name = $bank->bankname;
                    $ngoaite->bank_code = $bank->bankcode;
                    $ngoaite->muatienmat = floatval($ngoaite->muatienmat);
                    $ngoaite->muatienmat_diff = floatval($ngoaite->muatienmat_diff);
                    $ngoaite->bantienmat = floatval($ngoaite->bantienmat);
                    $ngoaite->bantienmat_diff = floatval($ngoaite->bantienmat_diff);
                    $ngoaite->muachuyenkhoan = floatval($ngoaite->muachuyenkhoan);
                    $ngoaite->muachuyenkhoan_diff = floatval($ngoaite->muachuyenkhoan_diff);
                    $ngoaite->banchuyenkhoan = floatval($ngoaite->banchuyenkhoan);
                    $ngoaite->banchuyenkhoan_diff = floatval($ngoaite->banchuyenkhoan_diff);
                } else {
                    continue;
                }
            }
        }
        return $ngoaiTe;
    }

    /**
     * Merege exchange detail of bank
     */
    public function mergeExchangeOfBank($bankInfo, $exchanges)
    {
        foreach ($exchanges as $exchange) {
            if ($exchange->bank_id == $bankInfo->id) {
                $exchange->bank_name = $bankInfo->bankname;
                $exchange->bank_code = $bankInfo->bankcode;
                $exchange->muatienmat = floatval($exchange->muatienmat);
                $exchange->muatienmat_diff = floatval($exchange->muatienmat_diff);
                $exchange->bantienmat = floatval($exchange->bantienmat);
                $exchange->bantienmat_diff = floatval($exchange->bantienmat_diff);
                $exchange->muachuyenkhoan = floatval($exchange->muachuyenkhoan);
                $exchange->muachuyenkhoan_diff = floatval($exchange->muachuyenkhoan_diff);
                $exchange->banchuyenkhoan = floatval($exchange->banchuyenkhoan);
                $exchange->banchuyenkhoan_diff = floatval($exchange->banchuyenkhoan_diff);
            } else {
                continue;
            }
        }
        return $exchanges;
    }

    /**
     * @param $exchange
     * @return mixed
     */
    public function addNullBank($exchange)
    {
        $arrBank = [
            'tpb', 'mbbank', 'eximbank', 'dab', 'vietcombank', 'sacombank', 'vietin', 'shb',
            'hsbc', 'techcom', 'bidv', 'acb', 'argibank'
        ];
        $arrBankOfMoneyAUD = []; $arrBankOfMoneyCAD = []; $arrBankOfMoneyCHF = []; $arrBankOfMoneyCNY = [];
        $arrBankOfMoneyDKK = []; $arrBankOfMoneyEUR = []; $arrBankOfMoneyGBP = []; $arrBankOfMoneyHKD = [];
        $arrBankOfMoneyJPY = []; $arrBankOfMoneyKRW = []; $arrBankOfMoneyMYR = []; $arrBankOfMoneyRUB = [];
        $arrBankOfMoneySGD = []; $arrBankOfMoneyTHB = []; $arrBankOfMoneyUSD = [];
        foreach ($exchange as $value) {
            if ($value->code == "AUD") {
                array_push($arrBankOfMoneyAUD, $value->bank_code);
            } if ($value->code == "CAD") {
                array_push($arrBankOfMoneyCAD, $value->bank_code);
            } if ($value->code == "CHF") {
                array_push($arrBankOfMoneyCHF, $value->bank_code);
            } if ($value->code == "CNY") {
                array_push($arrBankOfMoneyCNY, $value->bank_code);
            } if ($value->code == "DKK") {
                array_push($arrBankOfMoneyDKK, $value->bank_code);
            } if ($value->code == "EUR") {
                array_push($arrBankOfMoneyEUR, $value->bank_code);
            } if ($value->code == "GBP") {
                array_push($arrBankOfMoneyGBP, $value->bank_code);
            } if ($value->code == "HKD") {
                array_push($arrBankOfMoneyHKD, $value->bank_code);
            } if ($value->code == "JPY") {
                array_push($arrBankOfMoneyJPY, $value->bank_code);
            } if ($value->code == "KRW") {
                array_push($arrBankOfMoneyKRW, $value->bank_code);
            } if ($value->code == "MYR") {
                array_push($arrBankOfMoneyMYR, $value->bank_code);
            } if ($value->code == "RUB") {
                array_push($arrBankOfMoneyRUB, $value->bank_code);
            } if ($value->code == "SGD") {
                array_push($arrBankOfMoneySGD, $value->bank_code);
            } if ($value->code == "THB") {
                array_push($arrBankOfMoneyTHB, $value->bank_code);
            } if ($value->code == "USD") {
                array_push($arrBankOfMoneyUSD, $value->bank_code);
            }
        }
        $diffAUD = array_diff($arrBank,$arrBankOfMoneyAUD);
        $this->addNullMoney($diffAUD, "AUD", $exchange);
        $diffCAD = array_diff($arrBank,$arrBankOfMoneyCAD);
        $this->addNullMoney($diffCAD, "CAD", $exchange);
        $diffCHF = array_diff($arrBank,$arrBankOfMoneyCHF);
        $this->addNullMoney($diffCHF, "CHF", $exchange);
        $diffCNY = array_diff($arrBank,$arrBankOfMoneyCNY);
        $this->addNullMoney($diffCNY, "CNY", $exchange);
        $diffDKK = array_diff($arrBank,$arrBankOfMoneyDKK);
        $this->addNullMoney($diffDKK, "DKK", $exchange);
        $diffEUR = array_diff($arrBank,$arrBankOfMoneyEUR);
        $this->addNullMoney($diffEUR, "EUR", $exchange);
        $diffGBP = array_diff($arrBank,$arrBankOfMoneyGBP);
        $this->addNullMoney($diffGBP, "GBP", $exchange);
        $diffHKD = array_diff($arrBank,$arrBankOfMoneyHKD);
        $this->addNullMoney($diffHKD, "HKD", $exchange);
        $diffJPY = array_diff($arrBank,$arrBankOfMoneyJPY);
        $this->addNullMoney($diffJPY, "JPY", $exchange);
        $diffKRW = array_diff($arrBank,$arrBankOfMoneyKRW);
        $this->addNullMoney($diffKRW, "KRW", $exchange);
        $diffMYR = array_diff($arrBank,$arrBankOfMoneyMYR);
        $this->addNullMoney($diffMYR, "MYR", $exchange);
        $diffRUB = array_diff($arrBank,$arrBankOfMoneyRUB);
        $this->addNullMoney($diffRUB, "RUB", $exchange);
        $diffSGD = array_diff($arrBank,$arrBankOfMoneySGD);
        $this->addNullMoney($diffSGD, "SGD", $exchange);
        $diffTHB = array_diff($arrBank,$arrBankOfMoneyTHB);
        $this->addNullMoney($diffTHB, "THB", $exchange);
        $diffUSD = array_diff($arrBank,$arrBankOfMoneyUSD);
        $this->addNullMoney($diffUSD, "USD", $exchange);

        return $exchange;
    }

    /**
     * @param $arrBank
     * @param $money
     * @param $exchange
     * @return mixed
     */
    private function addNullMoney($arrBank, $money, $exchange)
    {
        if (!is_array($arrBank) || $arrBank == null || count($arrBank) <= 0) {
           return $exchange;
        }
        foreach ($arrBank as $value) {
            $tempCollection = collect([
                "code" => $money,
                "bank_id" => null,
                "bank_code" => $value,
                "muatienmat" => "-",
                "muatienmat_diff" => "-",
                "bantienmat" => "-",
                "bantienmat_diff" => "-",
                "muachuyenkhoan" => "-",
                "muachuyenkhoan_diff" => "-",
                "banchuyenkhoan" => "-",
                "banchuyenkhoan_diff" => "-",
                "bank_name" => $value
            ]);
            $exchange->push($tempCollection);
        }
        return $exchange;
    }

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return NgoaiTe::class;
    }
}

?>
