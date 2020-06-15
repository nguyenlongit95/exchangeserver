<template>
    <div class="tien-ao-component">
        <!-- Start Banner -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main text_align_center padding-bottom-25px">
                                        <h2 class="font-size-22px"><span class="theme_color"></span>Chi tiết các đồng tiền ảo</h2>
                                    </div>
                                </div>
                            </div>
                            <a class="margin-right-5" v-for="renderTienAo in arrTabsMoney" :href="renderTienAo.link">{{ renderTienAo.name }}</a>
                        </div>
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
                            <div class="heading_main pull-left text_align_center col-md-6 row">
                                <h1 class="font-size-22px border-bottom-2px-solid"><span class="theme_color"></span>Các lần cập nhật tiền ảo mới nhất</h1>
                            </div>
                            <div class="heading_main pull-right text-right col-md-6">
                                <div class="col-md-7 pull-left"></div>
                                <div class="col-md-6 pull-right">
                                    <input class="form-control row pull-right" type="text" id="slug_money" v-on:change="searchMoney(this.slugMoney)" v-model="this.slugMoney">
                                </div>
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
                                    <th class="text-left">Tiền ảo</th>
                                    <th class="text-center">Giá(USD)</th>
                                    <th class="text-center">Giá(VNĐ)</th>
                                    <th class="text-center">Vốn hoá thị trường</th>
                                    <th class="text-center">Đơn vị hiện có</th>
                                    <th class="text-center">Thanh khoản 24h</th>
                                    <th class="text-center">% 24h</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr v-for="renderTienAo in arrTienAo">
                                        <th class="bg-gray text-left">
                                            <a :href="renderTienAo.link">
                                                <img :src="renderTienAo.logo" height="16px" width="16px" alt="" class="margin-right-5">
                                                {{ renderTienAo.name }}
                                                <span class="font-size-13px"><i>({{ renderTienAo.slug }})</i></span>
                                            </a>
                                        </th>
                                        <th>{{ renderTienAo.price }}</th>
                                        <th>{{ renderTienAo.price_vnd }}</th>
                                        <th>{{ renderTienAo.market_cap }}</th>
                                        <th>{{ renderTienAo.total_supply }}</th>
                                        <th>{{ renderTienAo.volume_24h }}</th>
                                        <th v-if="renderTienAo.percent_change_24h > 0" class="font-color-green">
                                            + {{ renderTienAo.percent_change_24h }}
                                        </th>
                                        <th v-else="renderTienAo.percent_change_24h < 0" class="font-color-red">
                                            {{ renderTienAo.percent_change_24h }}
                                        </th>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end table exchange home -->
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
            return {
                arrTienAo: [],
                slugMoney: 'Mã tiền ảo',
                arrTabsMoney: []
            }
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
                axios.get('api/v1/get-virtual-money-web').then(response => {
                    let objExchangeData = response.data;
                    this.arrTienAo = objExchangeData;
                    for (let i = 0; i < this.arrTienAo.length; i++) {
                        this.arrTienAo[i]['link'] = '/tien-ao/' + this.arrTienAo[i]['slug'];
                        this.arrTienAo[i]['logo'] = '/iconVirualMoney/' + this.arrTienAo[i]['icon'];
                        this.arrTabsMoney.push(this.arrTienAo[i]);
                    }
                }).catch(error => {
                    console.log(error);
                });
            },

            /**
             * Function search money
             * using slugMoney condition search
             * replace data to table
             */
            searchMoney(slugMoney) {
                this.kyhanSlug = slugMoney;
                if (slugMoney != null) {
                    var tempArray = [];
                    for (let j = 0; j < this.arrTienAo.length; j++) {
                        if (this.arrTienAo[j]['slug'] === slugMoney) {
                            tempArray.push(this.arrTienAo[j]);
                        }
                    }
                    this.arrTienAo.splice(0, this.arrTienAo.length);
                    for (let k = 0; k < tempArray.length; k++) {
                        this.arrTienAo.push(tempArray[k]);
                    }
                }
            }
        }
    }
</script>

<style scoped>

</style>
