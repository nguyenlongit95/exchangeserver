<template>
    <div class="tien-ao-detail-component">
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
                            <a class="margin-right-5" v-for="renderTienAo in arrTienAo" :href="renderTienAo.link">{{ renderTienAo.name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->
        <br>
        <!-- section exchanges -->
        <div class="section layout_padding margin-top-25px padding-bottom-25px">
            <div class="container">
                <div class="section-main">
                    <div class="container main-wrapper">
                        <div class="row">
                            <div class="col-sm-12 border-sm-right">
                                <div class="block">
                                    <div class="block-content">
                                        <article id="main" class="col-md-12" v-for="renderMoney in this.detailMoney">
                                            <h1 class="font-size-22px" style="margin-left: -30px;"><span class="theme_color"></span>Giá {{ renderMoney.name }}({{ renderMoney.slug }}) mới nhất ngày hôm nay <small> - <span class="hidden-xs font-size-16px">Cập nhật lúc </span>{{ renderMoney.created_at }}</small></h1>
                                            <div class="row margin-top-25px">
                                                <div class="col-xs-12 col-sm-4 col-md-3 text-center">
                                                    <div class="coin-logo">
                                                        <img :src="renderMoney.logo" :alt="renderMoney.name" :title="renderMoney.slug" />
                                                    </div>
                                                    <div class="coin-info">
                                                        <h2> {{ renderMoney.name }} <small>({{ renderMoney.slug }})</small> </h2>
                                                        <a class="btn btn-xs btn-success" href="https://tygia.vn/tien-ao/bitcoin" title="Bảng giá tiền ảo, tiền điện tử">Xếp hạng: {{ renderMoney.rank }}</a>
                                                        <br>
                                                        <a class="btn btn-xs btn-danger" href="/tien-ao" title="Bảng giá tiền ảo, tiền điện tử">Xem các đồng khác</a>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-8 col-md-9">
                                                    <div class="coin-price">
                                                        <h2 class="text-large" id="quote_price">${{ renderMoney.price }}
                                                            <span v-if="renderMoney.percent_change_24h < 0" style="color:red; font-size:18px;"  class="text-large down_change">
                                                                ({{ renderMoney.percent_change_24h }}%)
                                                            </span>
                                                            <span v-else style="font-size:18px;"  class="text-large up_change font-color-green">
                                                                ({{ renderMoney.percent_change_24h }}%)
                                                            </span>
                                                        </h2>

                                                        <br>
                                                        <p class="text-gray">1 {{ renderMoney.symbol }} = 1.0 {{ renderMoney.symbol }}</p>
                                                    </div>
                                                    <table id="coin-table" class="table table-striped table-hover">
                                                        <tbody>
                                                        <tr>
                                                            <th>Quy đổi VNĐ</th>
                                                            <td>
                                                                <strong class="text-primary">1 bitcoin = ~{{ renderMoney.vnd }} đồng</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="hidden-xs">Giá trị vốn hóa thị trường</span><span class="visible-xs">Vốn hóa thị trường</span></th>
                                                            <td>$ {{ renderMoney.market_cap }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Thanh khoản (24h)</th>
                                                            <td>$ {{ renderMoney.volume_24h }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tổng BTC hiện có</th>
                                                            <td>$ {{ renderMoney.total_supply }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Dao động 1 giờ</th>
                                                            <td>
                                                                <span v-if="renderMoney.percent_change_1h < 0" class="up_change font-color-red"> {{ renderMoney.percent_change_1h }}%</span>
                                                                <span v-else class="up_change font-color-green"> +{{ renderMoney.percent_change_1h }}%</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Dao động 24 giờ</th>
                                                            <td>
                                                                <span v-if="renderMoney.percent_change_24h < 0" class="up_change font-color-red"> {{ renderMoney.percent_change_24h }}%</span>
                                                                <span v-else class="up_change font-color-green"> +{{ renderMoney.percent_change_24h }}%</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Dao động 7 ngày</th>
                                                            <td>
                                                                <span v-if="renderMoney.percent_change_7d < 0" class="up_change font-color-red"> {{ renderMoney.percent_change_7d }}%</span>
                                                                <span v-else class="up_change font-color-green"> +{{ renderMoney.percent_change_7d }}%</span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
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
                virtualMoney: 'bitcoin',
                arrTienAo: [],
                detailMoney: []
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
                let url = location.href;
                let txtMoney = this.analysisURL(url);

                // Call API is render tabs money
                axios.get('/api/v1/get-virtual-money-web').then(response => {
                    let objExchangeData = response.data;
                    this.arrTienAo = objExchangeData;
                    for (let i = 0; i < this.arrTienAo.length; i++) {
                        this.arrTienAo[i]['link'] = '/tien-ao/' + this.arrTienAo[i]['slug'];
                        this.arrTienAo[i]['logo'] = '/iconVirualMoney/' + this.arrTienAo[i]['image'];
                    }
                }).catch(error => {
                    console.log(error);
                });

                // Call API get data an money detail
                axios.get('/api/v1/get-virtual-money/' + txtMoney).then(response => {
                    let objExchangeData = response.data;
                    objExchangeData[0]['logo'] = '/iconVirualMoney/' + objExchangeData[0]['image'];
                    this.detailMoney.push(objExchangeData[0]);
                }).catch(error => {
                    console.log(error);
                });
                console.log(this.detailMoney);
            },

            analysisURL(url) {
                let strURL = url.toString();
                let arrURL = strURL.split('/');
                let virualMoney = arrURL[arrURL.length - 1];
                if (virualMoney == null || virualMoney == undefined) {
                    this.virtualMoney = "bitcoin";
                } else {
                    this.virtualMoney = virualMoney;
                }
                return virualMoney;
            }
        }
    }
</script>

<style scoped>

</style>
