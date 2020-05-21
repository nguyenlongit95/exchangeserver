<template>
    <div class="gia-vang-component">
        <!-- Gia vang content -->
        <div class="section margin-top-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main text_align_center">
                                        <h2 class="font-size-22px"><span class="theme_color"></span>Chi tiết các hãng vàng</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 pull-left">
                            <div class="row">
                                <div class="col-md-3 row pull-left">
                                    <label style="margin-top:10px;">Chọn hãng vàng</label>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <select class="form-control" name="bankID" id="">
                                        <option value="1">SJC</option>
                                        <option value="2">PNG</option>
                                        <option value="3">Phú Quý</option>
                                        <option value="4">Bảo Tín Minh Châu</option>
                                        <option value="5">DOJI</option>
                                        <option value="6">Giá vàng thế giới</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End content -->

        <!-- table begins -->
        <div class="section layout_padding margin-top-25px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2 class="font-size-22px"><span class="theme_color"></span>Giá vàng <span>SJC</span> - <span class="font-size-16px">cập nhật lúc: 17:30:03 20/05/2020</span></h2>
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
                                    <th class="text-left">Tỉnh thành</th>
                                    <th class="text-center">Loại</th>
                                    <th class="text-center">Mua vào</th>
                                    <th class="text-center">Bán ra</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="bg-gray text-left">Hà Nội</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">TP Hồ Chí Minh</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Đà Nẵng</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Huế</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Bình Dương</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Tuyên Quang</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Hải Phòng</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Cần Thơ</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end table -->
    </div>
</template>

<script>
    export default {
        name: "giavangComponent"
    }
</script>

<style scoped>

</style>
