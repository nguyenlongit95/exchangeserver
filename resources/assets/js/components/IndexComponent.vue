<template>
    <!-- Content layout -->
    <div class="index-component">
        <!-- section exchanges -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main pull-left">
                                <h1 class="font-size-22px padding-bottom-zero border-bottom-2px-solid"><span class="theme_color"></span>TỔNG HỢP TỶ GIÁ NGÂN HÀNG TRÊN TOÀN QUỐC <span class="font-size-16px font-weight-initial">Cập nhật lúc: {{ this.timeUpdate }}</span></h1>
                            </div>
                            <div class="pull-right">
                                <div class="fb-like" data-href="https://tygia.site/" data-width="32" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group-tabs" id="table-home">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active" style="padding-left:0px;"><a href="#muatienmat" class="active" aria-controls="muatienmat" role="tab" data-toggle="tab">Mua tiền mặt</a></li>
                        <li role="presentation"><a href="#muachuyenkhoan" aria-controls="muachuyenkhoan" role="tab" data-toggle="tab">Mua chuyển khoản</a></li>
                        <li role="presentation"><a href="#bantienmat" aria-controls="bantienmat" role="tab" data-toggle="tab">Bán tiền mặt</a></li>
                        <li role="presentation"><a href="#banchuyenkhoan" aria-controls="banchuyenkhoan" role="tab" data-toggle="tab">Bán chuyển khoản</a></li>
                    </ul>
                </div>
                <!-- table exchanges pages home -->
                <div class="table-exchange-home">
                    <div class="col-3 col-xs-4 col-sm-3 col-md-3 pull-left">
                        <div class="row">
                            <table class="table table-hover table-bordered" id="table-currency-code-home">
                                <thead>
                                <tr>
                                    <th id="currency-code">Mã <span class="ma-ngoai-te">ngoại tệ</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>AUD <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Đô la Úc)</i></span></th>
                                </tr>
                                <tr>
                                    <th>CAD <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Dollar Canada)</i></span></th>
                                </tr>
                                <tr>
                                    <th>CHF <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(France Thuỵ Sỹ)</i></span></th>
                                </tr>
                                <tr>
                                    <th>CNY <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Đồng nhân dân tệ)</i></span></th>
                                </tr>
                                <tr>
                                    <th>DKK <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Krone Đan Mạch)</i></span></th>
                                </tr>
                                <tr>
                                    <th>EUR <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Dollar EUro)</i></span></th>
                                </tr>
                                <tr>
                                    <th>GBP <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Đồng Bảng Anh)</i></span></th>
                                </tr>
                                <tr>
                                    <th>HKD <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Dollar Hong Kong)</i></span></th>
                                </tr>
                                <tr>
                                    <th>JPY <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Đồng Yên Nhật)</i></span></th>
                                </tr>
                                <tr>
                                    <th>KRW <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Won Hàn Quốc)</i></span></th>
                                </tr>
                                <tr>
                                    <th>MYR <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Dollar Myanmar)</i></span></th>
                                </tr>
                                <tr>
                                    <th>RUB <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Đồng RUB Nga)</i></span></th>
                                </tr>
                                <tr>
                                    <th>SGD <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Dollar Singapore)</i></span></th>
                                </tr>
                                <tr>
                                    <th>THB <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Đồng Bạt Thái)</i></span></th>
                                </tr>
                                <tr>
                                    <th>USD <span class="font-size-13px font-style-inherit ten-ngoai-te"><i>(Dollar Mỹ)</i></span></th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-9 col-xs-8 col-sm-9 col-md-9 pull-right" role="tabpanel">
                        <div class="wrap-home tab-content">
                            <div class="row tab-pane active" id="muatienmat">
                                <table class="table table-hover table-bordered" id="table-exchange-home">
                                    <thead>
                                    <tr>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TPB.png" alt=""><span class="bank-name padding-top-5px">TPB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/mbank.png" alt=""><span class="bank-name padding-top-5px">MBank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/exim.jpg" alt=""><span class="bank-name padding-top-5px">Eximbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/DAB.png" alt=""><span class="bank-name padding-top-5px">DongA</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VCB.png" alt=""><span class="bank-name padding-top-5px">Vietcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SAC.png" alt=""><span class="bank-name padding-top-5px">Sacombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VTB.png" alt=""><span class="bank-name padding-top-5px">Vietinbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SHB.png" alt=""><span class="bank-name padding-top-5px">SHB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/HSBC.png" alt=""><span class="bank-name padding-top-5px">HSBC</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TCB.png"> <span class="bank-name padding-top-5px">Techcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/BIDV.png" alt=""><span class="bank-name padding-top-5px">BIDV</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/acb.png" alt=""><span class="bank-name padding-top-5px">ACB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/agribank.png" alt=""><span class="bank-name padding-top-5px">ArgiBank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/oceanbank.png" alt=""><span class="bank-name padding-top-5px">OceanBank</span></span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td v-for="renderAUD in arrAUD" class="text-center">
                                                {{ renderAUD.muatienmat }}
                                                <span v-if="renderAUD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderAUD.muatienmat_diff }}</i>
                                                </span>
                                                <span v-if="renderAUD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderAUD.muatienmat_diff }}</i>
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderCAD in arrCAD" class="text-center">
                                                {{ renderCAD.muatienmat }}
                                                <span v-if="renderCAD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderCAD.muatienmat_diff }}</i>
                                                </span>
                                                <span v-if="renderCAD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderCAD.muatienmat_diff }}</i>
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderCHF in arrCHF" class="text-center">
                                                {{ renderCHF.muatienmat }}
                                                <span v-if="renderCHF.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderCHF.muatienmat_diff }}</i>
                                                </span>
                                                <span v-if="renderCHF.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderCHF.muatienmat_diff }}</i>
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderCNY in arrCNY" class="text-center">
                                                {{ renderCNY.muatienmat }}
                                                <span v-if="renderCNY.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderCNY.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderCNY.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderCNY.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderDKK in arrDKK" class="text-center">
                                                {{ renderDKK.muatienmat }}
                                                <span v-if="renderDKK.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderDKK.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderDKK.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderDKK.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderEUR in arrEUR" class="text-center">
                                                {{ renderEUR.muatienmat }}
                                                <span v-if="renderEUR.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderEUR.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderEUR.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderEUR.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderGBP in arrGBP" class="text-center">
                                                {{ renderGBP.muatienmat }}
                                                <span v-if="renderGBP.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderGBP.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderGBP.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderGBP.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderHKD in arrHKD" class="text-center">
                                                {{ renderHKD.muatienmat }}
                                                <span v-if="renderHKD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderHKD.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderHKD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderHKD.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderJPY in arrJPY" class="text-center">
                                                {{ renderJPY.muatienmat }}
                                                <span v-if="renderJPY.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderJPY.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderJPY.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderJPY.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderKRW in arrKRW" class="text-center">
                                                {{ renderKRW.muatienmat }}
                                                <span v-if="renderKRW.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderKRW.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderKRW.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderKRW.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderMYR in arrMYR" class="text-center">
                                                {{ renderMYR.muatienmat }}
                                                <span v-if="renderMYR.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderMYR.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderMYR.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderMYR.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderRUB in arrRUB" class="text-center">
                                                {{ renderRUB.muatienmat }}
                                                <span v-if="renderRUB.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderRUB.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderRUB.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderRUB.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderSGD in arrSGD" class="text-center">
                                                {{ renderSGD.muatienmat }}
                                                <span v-if="renderSGD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderSGD.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderSGD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderSGD.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderTHB in arrTHB" class="text-center">
                                                {{ renderTHB.muatienmat }}
                                                <span v-if="renderTHB.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderTHB.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderTHB.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderTHB.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td v-for="renderUSD in arrUSD" class="text-center">
                                                {{ renderUSD.muatienmat }}
                                                <span v-if="renderUSD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderUSD.muatienmat_diff }}</i>
                                            </span>
                                                <span v-if="renderUSD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderUSD.muatienmat_diff }}</i>
                                            </span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="row tab-pane" id="muachuyenkhoan">
                                <table class="table table-hover table-bordered" id="table-exchange-home">
                                    <thead>
                                    <tr>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TPB.png" alt=""><span class="bank-name padding-top-5px">TPB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/mbank.png" alt=""><span class="bank-name padding-top-5px">MBank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/exim.jpg" alt=""><span class="bank-name padding-top-5px">Eximbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/DAB.png" alt=""><span class="bank-name padding-top-5px">DongA</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VCB.png" alt=""><span class="bank-name padding-top-5px">Vietcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SAC.png" alt=""><span class="bank-name padding-top-5px">Sacombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VTB.png" alt=""><span class="bank-name padding-top-5px">Vietinbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SHB.png" alt=""><span class="bank-name padding-top-5px">SHB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/HSBC.png" alt=""><span class="bank-name padding-top-5px">HSBC</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TCB.png"> <span class="bank-name padding-top-5px">Techcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/BIDV.png" alt=""><span class="bank-name padding-top-5px">BIDV</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/acb.png" alt=""><span class="bank-name padding-top-5px">ACB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/agribank.png" alt=""><span class="bank-name padding-top-5px">ArgiBank</span></span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td v-for="renderAUD in arrAUD" class="text-center">
                                            {{ renderAUD.muachuyenkhoan }}
                                            <span v-if="renderAUD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderAUD.muachuyenkhoan_diff }}</i>
                                                </span>
                                            <span v-if="renderAUD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderAUD.muachuyenkhoan_diff }}</i>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderCAD in arrCAD" class="text-center">
                                            {{ renderCAD.muachuyenkhoan }}
                                            <span v-if="renderCAD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderCAD.muachuyenkhoan_diff }}</i>
                                                </span>
                                            <span v-if="renderCAD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderCAD.muachuyenkhoan_diff }}</i>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderCHF in arrCHF" class="text-center">
                                            {{ renderCHF.muachuyenkhoan }}
                                            <span v-if="renderCHF.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderCHF.muachuyenkhoan_diff }}</i>
                                                </span>
                                            <span v-if="renderCHF.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderCHF.muachuyenkhoan_diff }}</i>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderCNY in arrCNY" class="text-center">
                                            {{ renderCNY.muachuyenkhoan }}
                                            <span v-if="renderCNY.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderCNY.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderCNY.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderCNY.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderDKK in arrDKK" class="text-center">
                                            {{ renderDKK.muachuyenkhoan }}
                                            <span v-if="renderDKK.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderDKK.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderDKK.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderDKK.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderEUR in arrEUR" class="text-center">
                                            {{ renderEUR.muachuyenkhoan }}
                                            <span v-if="renderEUR.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderEUR.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderEUR.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderEUR.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderGBP in arrGBP" class="text-center">
                                            {{ renderGBP.muachuyenkhoan }}
                                            <span v-if="renderGBP.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderGBP.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderGBP.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderGBP.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderHKD in arrHKD" class="text-center">
                                            {{ renderHKD.muachuyenkhoan }}
                                            <span v-if="renderHKD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderHKD.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderHKD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderHKD.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderJPY in arrJPY" class="text-center">
                                            {{ renderJPY.muachuyenkhoan }}
                                            <span v-if="renderJPY.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderJPY.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderJPY.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderJPY.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderKRW in arrKRW" class="text-center">
                                            {{ renderKRW.muachuyenkhoan }}
                                            <span v-if="renderKRW.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderKRW.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderKRW.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderKRW.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderMYR in arrMYR" class="text-center">
                                            {{ renderMYR.muachuyenkhoan }}
                                            <span v-if="renderMYR.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderMYR.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderMYR.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderMYR.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderRUB in arrRUB" class="text-center">
                                            {{ renderRUB.muachuyenkhoan }}
                                            <span v-if="renderRUB.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderRUB.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderRUB.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderRUB.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderSGD in arrSGD" class="text-center">
                                            {{ renderSGD.muachuyenkhoan }}
                                            <span v-if="renderSGD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderSGD.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderSGD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderSGD.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderTHB in arrTHB" class="text-center">
                                            {{ renderTHB.muachuyenkhoan }}
                                            <span v-if="renderTHB.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderTHB.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderTHB.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderTHB.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderUSD in arrUSD" class="text-center">
                                            {{ renderUSD.muachuyenkhoan }}
                                            <span v-if="renderUSD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderUSD.muachuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderUSD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderUSD.muachuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="row tab-pane" id="bantienmat">
                                <table class="table table-hover table-bordered" id="table-exchange-home">
                                    <thead>
                                    <tr>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TPB.png" alt=""><span class="bank-name padding-top-5px">TPB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/mbank.png" alt=""><span class="bank-name padding-top-5px">MBank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/exim.jpg" alt=""><span class="bank-name padding-top-5px">Eximbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/DAB.png" alt=""><span class="bank-name padding-top-5px">DongA</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VCB.png" alt=""><span class="bank-name padding-top-5px">Vietcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SAC.png" alt=""><span class="bank-name padding-top-5px">Sacombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VTB.png" alt=""><span class="bank-name padding-top-5px">Vietinbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SHB.png" alt=""><span class="bank-name padding-top-5px">SHB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/HSBC.png" alt=""><span class="bank-name padding-top-5px">HSBC</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TCB.png"> <span class="bank-name padding-top-5px">Techcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/BIDV.png" alt=""><span class="bank-name padding-top-5px">BIDV</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/acb.png" alt=""><span class="bank-name padding-top-5px">ACB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/agribank.png" alt=""><span class="bank-name padding-top-5px">ArgiBank</span></span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td v-for="renderAUD in arrAUD" class="text-center">
                                            {{ renderAUD.bantienmat }}
                                            <span v-if="renderAUD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderAUD.bantienmat_diff }}</i>
                                                </span>
                                            <span v-if="renderAUD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderAUD.bantienmat_diff }}</i>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderCAD in arrCAD" class="text-center">
                                            {{ renderCAD.bantienmat }}
                                            <span v-if="renderCAD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderCAD.bantienmat_diff }}</i>
                                                </span>
                                            <span v-if="renderCAD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderCAD.bantienmat_diff }}</i>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderCHF in arrCHF" class="text-center">
                                            {{ renderCHF.bantienmat }}
                                            <span v-if="renderCHF.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderCHF.bantienmat_diff }}</i>
                                                </span>
                                            <span v-if="renderCHF.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderCHF.bantienmat_diff }}</i>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderCNY in arrCNY" class="text-center">
                                            {{ renderCNY.bantienmat }}
                                            <span v-if="renderCNY.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderCNY.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderCNY.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderCNY.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderDKK in arrDKK" class="text-center">
                                            {{ renderDKK.bantienmat }}
                                            <span v-if="renderDKK.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderDKK.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderDKK.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderDKK.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderEUR in arrEUR" class="text-center">
                                            {{ renderEUR.bantienmat }}
                                            <span v-if="renderEUR.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderEUR.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderEUR.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderEUR.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderGBP in arrGBP" class="text-center">
                                            {{ renderGBP.bantienmat }}
                                            <span v-if="renderGBP.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderGBP.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderGBP.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderGBP.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderHKD in arrHKD" class="text-center">
                                            {{ renderHKD.bantienmat }}
                                            <span v-if="renderHKD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderHKD.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderHKD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderHKD.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderJPY in arrJPY" class="text-center">
                                            {{ renderJPY.bantienmat }}
                                            <span v-if="renderJPY.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderJPY.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderJPY.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderJPY.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderKRW in arrKRW" class="text-center">
                                            {{ renderKRW.bantienmat }}
                                            <span v-if="renderKRW.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderKRW.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderKRW.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderKRW.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderMYR in arrMYR" class="text-center">
                                            {{ renderMYR.bantienmat }}
                                            <span v-if="renderMYR.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderMYR.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderMYR.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderMYR.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderRUB in arrRUB" class="text-center">
                                            {{ renderRUB.bantienmat }}
                                            <span v-if="renderRUB.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderRUB.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderRUB.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderRUB.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderSGD in arrSGD" class="text-center">
                                            {{ renderSGD.bantienmat }}
                                            <span v-if="renderSGD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderSGD.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderSGD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderSGD.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderTHB in arrTHB" class="text-center">
                                            {{ renderTHB.bantienmat }}
                                            <span v-if="renderTHB.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderTHB.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderTHB.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderTHB.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderUSD in arrUSD" class="text-center">
                                            {{ renderUSD.bantienmat }}
                                            <span v-if="renderUSD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderUSD.bantienmat_diff }}</i>
                                            </span>
                                            <span v-if="renderUSD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderUSD.bantienmat_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="row tab-pane" id="banchuyenkhoan">
                                <table class="table table-hover table-bordered" id="table-exchange-home">
                                    <thead>
                                    <tr>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TPB.png" alt=""><span class="bank-name padding-top-5px">TPB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/mbank.png" alt=""><span class="bank-name padding-top-5px">MBank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/exim.jpg" alt=""><span class="bank-name padding-top-5px">Eximbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/DAB.png" alt=""><span class="bank-name padding-top-5px">DongA</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VCB.png" alt=""><span class="bank-name padding-top-5px">Vietcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SAC.png" alt=""><span class="bank-name padding-top-5px">Sacombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VTB.png" alt=""><span class="bank-name padding-top-5px">Vietinbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SHB.png" alt=""><span class="bank-name padding-top-5px">SHB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/HSBC.png" alt=""><span class="bank-name padding-top-5px">HSBC</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TCB.png"> <span class="bank-name padding-top-5px">Techcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/BIDV.png" alt=""><span class="bank-name padding-top-5px">BIDV</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/acb.png" alt=""><span class="bank-name padding-top-5px">ACB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/agribank.png" alt=""><span class="bank-name padding-top-5px">ArgiBank</span></span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td v-for="renderAUD in arrAUD" class="text-center">
                                            {{ renderAUD.banchuyenkhoan }}
                                            <span v-if="renderAUD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderAUD.banchuyenkhoan_diff }}</i>
                                                </span>
                                            <span v-if="renderAUD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderAUD.banchuyenkhoan_diff }}</i>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderCAD in arrCAD" class="text-center">
                                            {{ renderCAD.banchuyenkhoan }}
                                            <span v-if="renderCAD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderCAD.banchuyenkhoan_diff }}</i>
                                                </span>
                                            <span v-if="renderCAD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderCAD.banchuyenkhoan_diff }}</i>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderCHF in arrCHF" class="text-center">
                                            {{ renderCHF.banchuyenkhoan }}
                                            <span v-if="renderCHF.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderCHF.banchuyenkhoan_diff }}</i>
                                                </span>
                                            <span v-if="renderCHF.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderCHF.banchuyenkhoan_diff }}</i>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderCNY in arrCNY" class="text-center">
                                            {{ renderCNY.banchuyenkhoan }}
                                            <span v-if="renderCNY.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderCNY.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderCNY.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderCNY.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderDKK in arrDKK" class="text-center">
                                            {{ renderDKK.banchuyenkhoan }}
                                            <span v-if="renderDKK.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderDKK.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderDKK.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderDKK.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderEUR in arrEUR" class="text-center">
                                            {{ renderEUR.banchuyenkhoan }}
                                            <span v-if="renderEUR.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderEUR.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderEUR.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderEUR.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderGBP in arrGBP" class="text-center">
                                            {{ renderGBP.banchuyenkhoan }}
                                            <span v-if="renderGBP.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderGBP.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderGBP.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderGBP.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderHKD in arrHKD" class="text-center">
                                            {{ renderHKD.banchuyenkhoan }}
                                            <span v-if="renderHKD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderHKD.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderHKD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderHKD.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderJPY in arrJPY" class="text-center">
                                            {{ renderJPY.banchuyenkhoan }}
                                            <span v-if="renderJPY.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderJPY.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderJPY.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderJPY.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderKRW in arrKRW" class="text-center">
                                            {{ renderKRW.banchuyenkhoan }}
                                            <span v-if="renderKRW.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderKRW.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderKRW.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderKRW.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderMYR in arrMYR" class="text-center">
                                            {{ renderMYR.banchuyenkhoan }}
                                            <span v-if="renderMYR.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderMYR.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderMYR.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderMYR.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderRUB in arrRUB" class="text-center">
                                            {{ renderRUB.banchuyenkhoan }}
                                            <span v-if="renderRUB.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderRUB.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderRUB.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderRUB.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderSGD in arrSGD" class="text-center">
                                            {{ renderSGD.banchuyenkhoan }}
                                            <span v-if="renderSGD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderSGD.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderSGD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderSGD.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderTHB in arrTHB" class="text-center">
                                            {{ renderTHB.banchuyenkhoan }}
                                            <span v-if="renderTHB.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderTHB.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderTHB.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderTHB.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td v-for="renderUSD in arrUSD" class="text-center">
                                            {{ renderUSD.banchuyenkhoan }}
                                            <span v-if="renderUSD.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderUSD.banchuyenkhoan_diff }}</i>
                                            </span>
                                            <span v-if="renderUSD.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                                <i class="fa fa-arrow-up"> {{ renderUSD.banchuyenkhoan_diff }}</i>
                                            </span>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end table exchange home -->
            </div>
        </div>
        <!-- end section -->

        <div class="section margin-top-25px">
            <div class="container">
                <section>
                    <div class="heading_main pull-left">
                        <h3 class="font-size-22px margin-bottom-zero border-bottom-2px-solid"><span class="theme_color"></span>Biểu đồ đồng Bitcoin - BTC trực tiếp theo thời gian thực</h3>
                    </div>
                    <br>
                    <iframe style="height:450px; width: 100%;" id="tradingview_b92c2" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_b92c2&amp;symbol=BTCUSD&amp;interval=1&amp;symboledit=0&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=3&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en_US&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=ETHUSD" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                </section>
                <br>
            </div>
        </div>

        <!-- section exchanges -->
        <div class="section margin-top-25px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h3 class="font-size-22px margin-bottom-zero border-bottom-2px-solid"><span class="theme_color"></span>Tổng hợp giá vàng SJC mới nhất <span class="font-size-16px font-weight-initial">Cập nhật lúc: {{ this.timeUpdate }}</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table exchanges pages home -->
                <div class="table-exchange-home">
                    <div class="col-3 col-xs-4 col-sm-3 col-md-3 pull-left">
                        <div class="row">
                            <table class="table table-hover table-bordered" id="table-currency-code-home">
                                <thead>
                                <tr>
                                    <th id="currency-code">Tỉnh thành</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="arrGoldExchange in arrGoldExchanges">
                                    <th>{{ arrGoldExchange.tinhthanh }}</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-9 col-xs-8 col-sm-9 col-md-9 pull-right">
                        <div class="wrap-home">
                            <div class="row">
                                <table class="table table-hover table-bordered" id="table-gold-home">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Loại</th>
                                        <th class="text-center">Mua vào</th>
                                        <th class="text-center">Bán ra</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="renderGoldExchanges in arrGoldExchanges">
                                            <th>{{ renderGoldExchanges.loai }}</th>
                                            <th>{{ renderGoldExchanges.mua }}
                                                <span v-if="renderGoldExchanges.tyle_mua > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderGoldExchanges.tyle_mua }}</i>
                                                </span>
                                                <span v-if="renderGoldExchanges.tyle_mua < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderGoldExchanges.tyle_mua }}</i>
                                                </span>
                                            </th>
                                            <th>{{ renderGoldExchanges.ban }}
                                                <span v-if="renderGoldExchanges.tyle_ban > 0" class="font-size-13px font-color-green">
                                                    <i class="fa fa-arrow-up"> {{ renderGoldExchanges.tyle_ban }}</i>
                                                </span>
                                                <span v-if="renderGoldExchanges.tyle_ban < 0" class="font-size-13px font-color-red">
                                                    <i class="fa fa-arrow-down"> {{ renderGoldExchanges.tyle_ban }}</i>
                                                </span>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end table exchange home -->
            </div>
        </div>

        <div class="section margin-top-25px">
            <div class="container">
                <section>
<!--                    <div class="heading_main pull-left">-->
<!--                        <h3 class="font-size-22px margin-bottom-zero border-bottom-2px-solid"><span class="theme_color"></span>Biểu đồ giá Dầu Crude Oil (Brent)- UKOIL trực tiếp theo thời gian thực</h3>-->
<!--                    </div>-->
<!--                    <br>-->
<!--                    <iframe style="height: 450px; width: 100%;" id="tradingview_cbf8a" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_cbf8a&amp;symbol=TVC%3AUKOIL&amp;interval=1&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=1&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=vi_VN&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=TVC%3AUKOIL" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="heading_main pull-left text-left col-md-6 row margin-top-25px">
                                    <h1 class="font-size-22px border-bottom-2px-solid"><span class="theme_color"></span>Biểu đồ <span class="text-uppercase">VN-Index</span> - <span class="font-weight-initial font-size-16px">VN-Index cập nhật theo thời gian thực</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <iframe src="https://ta.vietstock.vn/Customer" width="100%" style="margin-left: -5px;" height="800" scrolling="no" frameborder="0"></iframe>
                        </div>
                    </div>

                </section>
                <br>
            </div>
        </div>
    </div>
</template>

<script>
    /**
     * Vue.JS code function example
     * Test function vue js core
     */
    export default {
        data() {
            /**
             * Create local variable and array
             */
            return {
                arrAUD: [], arrCAD: [], arrCHF: [], arrCNY: [], arrDKK: [], arrEUR: [], arrGBP: [], arrHKD: [],
                arrJPY: [], arrKRW: [], arrMYR: [], arrRUB: [], arrSGD: [], arrTHB: [], arrUSD: [],

                arrGoldExchanges: [],
                timeUpdate: [],
            }
        },
        created: function () {
            /**
             * construction function call labs
             */
            this.getExchanges();
            this.getGold();
            this.getTimeUpdate();
        },
        methods: {
            /**
             * Implement function here
             */
            getExchanges() {
                axios.get('api/v1/get-exchange').then(response => {
                    let objExchangeData = response.data;
                    for (let i = 0; i < objExchangeData.length; i++) {
                        if (objExchangeData[i]['code'] === "AUD") {
                            this.arrAUD.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "CAD") {
                            this.arrCAD.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "CHF") {
                            this.arrCHF.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "CNY") {
                            this.arrCNY.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "DKK") {
                            this.arrDKK.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "EUR") {
                            this.arrEUR.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "GBP") {
                            this.arrGBP.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "HKD") {
                            this.arrHKD.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "JPY") {
                            this.arrJPY.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "KRW") {
                            this.arrKRW.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "MYR") {
                            this.arrMYR.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "RUB") {
                            this.arrRUB.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "SGD") {
                            this.arrSGD.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "THB") {
                            this.arrTHB.push(objExchangeData[i]);
                        }
                        if (objExchangeData[i]['code'] === "USD") {
                            this.arrUSD.push(objExchangeData[i]);
                        }
                    }
                }).catch(error => {
                    console.log(error);
                });
            },

            /**
             * Function get Gold index
             * Fill data to table
             */
            getGold() {
                axios.get('api/v1/get-gold-exchange').then(response => {
                    let objGoldExchange = response.data;
                    for (let i = 0; i < objGoldExchange.length; i++) {
                        this.arrGoldExchanges.push(objGoldExchange[i]);
                    }
                    this.arrGoldExchanges.reverse();
                }).catch(error => {
                    console.log(error);
                });
            },

            /**
             * Get time now
             * Show has demo title
             */
            getTimeUpdate() {
                var today = new Date();
                this.timeUpdate = today.getHours() +":"+ today.getMinutes() + " " + today.getDate() + "-" + (today.getMonth()+1) + "-" + today.getFullYear();
            }
        }
    }
</script>

<!-- CSS more -->
<style scoped>

</style>
