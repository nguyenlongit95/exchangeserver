<?php
/*
 * Tại đây ta sẽ khai báo các phương thức có thêm của 1 đối tượng
 * Các phương thức khai báo ở đây sẽ không có trong EloquentRepository
 * Các phương thức khai báo ở đây chỉ có tác dụng trong module CategoryProducts
 * */
namespace App\Repositories\Exchanges;

interface ExchangeRepositoryInterface
{
    public function mergeExchange($bankInfo, $exchange);

    public function mergeExchangeOfBank($bankInfo, $exchanges);
}

?>
