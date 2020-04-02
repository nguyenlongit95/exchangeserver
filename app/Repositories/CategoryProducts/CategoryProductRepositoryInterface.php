<?php
/*
 * Tại đây ta sẽ khai báo các phương thức có thêm của 1 đối tượng
 * Các phương thức khai báo ở đây sẽ không có trong EloquentRepository
 * Các phương thức khai báo ở đây chỉ có tác dụng trong module CategoryProducts
 * */
namespace App\Repositories\CategoryProducts;

interface CategoryProductRepositoryInterface
{
    /*
     * Khai báo các phương thức đặc biệt, riêng biệt của mỗi đối tượng
     * Ở đây với Categories thì không có gì khác biệt nên ta không khai báo gì thêm
     * Phương thức riêng là: getParent_id để làm menu đa cấp
     * Phương thức getInfo
     * */
    public function getParent_id();

    public function getInfo();
}

?>
