<template>
    <div class="ty-gia-component">
        <!-- Start Banner -->
        <div class="section margin-top-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main pull-left">
                                        <h2 class="font-size-22px"><span class="theme_color"></span>Chi tiết tỷ giá các ngân hàng</h2>
                                    </div>
                                </div>
                            </div>
                            <a href="#">Techcombank</a>
                            <a href="#">HSBC</a>
                            <a href="#">SHB</a>
                            <a href="#">TPB</a>
                            <a href="#">BIDV</a>
                            <a href="#">VietinBank</a>
                            <a href="#">SacomBank</a>
                            <a href="#">VietcomBank</a>
                            <a href="#">DongABank</a>
                            <a href="#">ACB</a>
                            <a href="#">ArgiBank</a>
                            <a href="#">EximBank</a>
                            <a href="#">MBank</a>
                        </div>
                        <hr>
                        <form action="" method="POST">
                            <br>
                            <div class="col-md-7 pull-left">
                                <div class="row">
                                    <div class="col-md-3 row pull-left">
                                        <label style="margin-top:10px;">Chọn ngân hàng</label>
                                    </div>
                                    <div class="col-md-6 pull-right">
                                        <select class="form-control" name="bankID" id="">
                                            <option value="1">Techcombank</option>
                                            <option value="2">HSBC</option>
                                            <option value="3">SHB</option>
                                            <option value="4">TPB</option>
                                            <option value="5">BIDV</option>
                                            <option value="6">VietinBank</option>
                                            <option value="7">SacomBank</option>
                                            <option value="8">VietcomBank</option>
                                            <option value="9">DongABank</option>
                                            <option value="10">ACB</option>
                                            <option value="11">ArgiBank</option>
                                            <option value="12">EximBank</option>
                                            <option value="13">MBank</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" name="check" value="Tra cứu" class="btn btn-primary" style="height:45px;">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- section exchanges -->
        <div class="section layout_padding margin-top-25px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2 class="font-size-22px"><span class="theme_color"></span>Tỷ giá ngân hàng <span>VietcomBank</span> - <span class="font-weight-initial">cập nhật lúc: 17:15:02 20/05/2020</span></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- table exchanges pages home -->
                <div class="table-exchange-home">
                    <div class="col-md-12 pull-right">
                        <div class="row">
                            <table class="table table-hover table-bordered" id="table-exchange-page">
                                <thead>
                                <tr>
                                    <th class="text-center">Ngoại tệ</th>
                                    <th class="text-center">Mua tiền mặt</th>
                                    <th class="text-center">Mua chuyển khoản</th>
                                    <th class="text-center">Bán tiền mặt</th>
                                    <th class="text-center">Bán chuyển khoản</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="bg-gray">USD</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray">AUD</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray">SGD</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray">RUB</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray">CNY</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray">JPY</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray">KRW</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray">EUR</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->
    </div>
</template>

<script>
    export default {
        name: "tygiaComponent"
    }
</script>

<style scoped>

</style>
