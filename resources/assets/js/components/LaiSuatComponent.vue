<template>
    <div class="lai-suat-component">
        <div class="section margin-top-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main text_align_center">
                                        <h2 class="font-size-22px"><span class="theme_color"></span>Chi tiết lãi suất các ngân hàng</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- section exchanges -->
        <div class="section margin-top-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2 class="font-size-22px"><span class="theme_color"></span>Lãi suất tại quầy - <span class="font-size-16px">cập nhật lúc: 17:30:03 20/05/2020</span></h2>
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
                                    <th class="text-left">Ngân hàng</th>
                                    <th class="text-center">1 tháng</th>
                                    <th class="text-center">3 tháng</th>
                                    <th class="text-center">6 tháng</th>
                                    <th class="text-center">9 tháng</th>
                                    <th class="text-center">12 tháng</th>
                                    <th class="text-center">24 tháng</th>
                                    <th class="text-center">36 tháng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="bg-gray text-left">VietcomBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Techcombank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">OceanBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">BIDV</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">VietinBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Bắc Á</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">SCB</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">OCB</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->

        <!-- section exchanges -->
        <div class="section margin-top-25px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2 class="font-size-22px"><span class="theme_color"></span>Lãi suất online - <span class="font-size-16px">cập nhật lúc: 17:30:03 20/05/2020</span></h2>
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
                                    <th class="text-left">Ngân hàng</th>
                                    <th class="text-center">1 tháng</th>
                                    <th class="text-center">3 tháng</th>
                                    <th class="text-center">6 tháng</th>
                                    <th class="text-center">9 tháng</th>
                                    <th class="text-center">12 tháng</th>
                                    <th class="text-center">24 tháng</th>
                                    <th class="text-center">36 tháng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="bg-gray text-left">VietcomBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Techcombank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">OceanBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">BIDV</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">VietinBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Bắc Á</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">SCB</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">OCB</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
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
        data() {
            /**
             * Create local variable
             */
            return {}
        },
        created: function () {
            /**
             * construction function call labs
             */
            this.getExchanges();
        },
        methods: {
            /**
             * Implement function here
             */
            getExchanges() {
                axios.get('api/v1/get-exchange').then(response => {
                    let objExchangeData = response.data;
                    for (let i = 0; i < objExchangeData.length; i++) {
                        console.log(objExchangeData[i]);
                    }
                }).catch(error => {
                    console.log(error);
                });
            }
        }

    }
</script>

<style scoped>

</style>
