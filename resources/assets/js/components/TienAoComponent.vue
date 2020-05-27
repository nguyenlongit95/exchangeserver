<template>
    <div class="tien-ao-component">
        <!-- Start Banner -->
        <div class="section margin-top-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main text_align_center">
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

        <!-- section exchanges -->
        <div class="section layout_padding margin-top-25px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2 class="font-size-22px"><span class="theme_color"></span>Các lần cập nhật tiền ảo mới nhất</h2>
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
                                        <th class="bg-gray text-left"><img :src="renderTienAo.logo" height="16px" width="16px" alt="">{{ renderTienAo.name }}</th>
                                        <th>$ {{ renderTienAo.price }}</th>
                                        <th>{{ renderTienAo.price_vnd }} đ</th>
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
                <p>
                    Đồng Euro (€; mã ISO: EUR, còn gọi là Âu kim hay Đồng tiền chung châu Âu) là đơn vị tiền tệ của Liên minh Tiền tệ châu Âu, là tiền tệ chính thức trong 18 quốc gia thành viên của Liên minh châu Âu (Áo, Bỉ, Bồ Đào Nha, Đức, Hà Lan, Hy Lạp, Ireland, Luxembourg, Pháp, Phần Lan, Tây Ban Nha, Ý, Slovenia, Malta, Cộng hòa Síp, Estonia, Latvia, Litva) và trong 6 nước và lãnh thổ không thuộc Liên minh châu Âu.

                    Vào ngày 1 tháng 1 năm 1999 tỷ lệ hối đoái giữa Euro và các đơn vị tiền tệ quốc gia được quy định không thể thay đổi và Euro trở thành tiền tệ chính thức. Việc phát hành đồng Euro rộng rãi đến người tiêu dùng bắt đầu từ ngày 1 tháng 1 năm 2002.

                    Tiền giấy Euro giống nhau hoàn toàn trong tất cả các quốc gia.

                    Tiền giấy Euro có mệnh giá 5 Euro, 10 Euro, 50 Euro, 100 Euro, 200 Euro và 500 Euro. Mặt trước có hình của một cửa sổ hay phần trước của một cánh cửa, mặt sau là một chiếc cầu. Tháng 7 năm 2017, được sự chấp thuận của Ngân hàng Trung ương Châu Âu, Ngân hàng Trung ương Đức chính thức phát hành đồng hiện kim bằng giấy với mệnh giá là 0 euro (giá bán là 2,5 euro) đáp ứng nhu cầu của những người có sở thích sưu tập tiền tệ. Một mặt in chân dung nhà thần học Martin Luther ở bên phải, cùng căn phòng làm việc của ông tại Lâu đài Wartburg; mặt còn lại gồm tổ hợp hình ảnh quy tụ các kiến trúc tiêu biểu thuộc Liên minh châu Âu, bên góc phải là bức tranh nàng Mona Lisa.[1]

                    Tiền kim loại Euro cùng một mệnh giá giống nhau ở mặt trước, nhưng có trang trí khác nhau ở mặt sau, đặc trưng cho từng quốc gia phát hành.

                    Các loại mệnh giá tiền Euro đang lưu hành

                    Euro có 7 mệnh giá tiền giấy ( €5 , €10 , €20 , €50 , €100 , €200 và €500 )
                    Có 8 mệnh giá tiền xu cho Euro ( 1c , 2c , 5c , 10c , 20c , 50c , €1 và €2 )
                    Web tỷ giá cập nhiật liên tục, chính xác tỷ giá mua, bán, chuyển khoản đồng Euro từ các ngân hàng lớn có hỗ trợ giao dịch đồng Euro. cung cấp các công cụ chuyển đổi, quy đổi đồng Euro ra các đồng tiền khác

                    tiền euro
                    đồng euro
                    tỷ giá euro
                    ty gia euro
                    euro to vnd
                    eur to vnd
                    tỷ giá euro hôm nay
                    1 eur to vnd
                    1 eur = vnd
                </p>
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
                arrTienAo: []
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
                        this.arrTienAo[i]['link'] = 'tien-ao/' + this.arrTienAo[i]['slug'];
                        this.arrTienAo[i]['logo'] = 'frontend/iconVirualMoney/' + this.arrTienAo[i]['icon'];

                    }
                    console.log(this.arrTienAo);
                }).catch(error => {
                    console.log(error);
                });
            }
        }
    }
</script>

<style scoped>

</style>
