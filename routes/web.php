<?php
/**
 * Route test demo
 * */
$namespace = 'Web';
$namespaceFrontend = 'Frontend';

Route::get('/admin-login', function () {
    return view('welcome');
});

/**
 * khởi tạo ban đầu cho tài khoản
 * Khi hoàn thành sẽ xóa phần Route này đi
 * */
Auth::routes();

Route::get('role', 'HomeController@createNewRole');
Route::get('permission','HomeController@createNewPermission');
Route::get('InitFirstRole','HomeController@InitFirstRole');
Route::get('InitFirstUser','HomeController@InitFirstUser');
Route::get('AssignPermissionFirstUser','HomeController@AssignPermissionFirstUser');

/**
 * Route Login
 * */
Route::get('AdminLogin','HomeController@index');
Route::post('Login','LoginAndRegisterController@postLogin');
Route::get('logout','LoginAndRegisterController@logout');

/**
 * Route cho phia admin
 * */
Route::group(['prefix'=>'admin','middleware' => ['auth','role:BACKEND']],function(){
    // Trang DashBoard sẽ là nơi thống kê sản phẩm và các thông tin liên quan
    Route::get('DashBoard','adminController@DashBoard');

    // Seo module
    Route::get('seo','SeoController@index');

    Route::post('seo/update/{id}','SeoController@update');
    Route::get('seo/update/{id}','SeoController@show');

    Route::get('seo/add','SeoController@getStore');
    Route::post('seo/add','SeoController@store');

    Route::get('seo/delete/{id}','SeoController@destroy');

    /**
     * Quản trị hệ thống tỷ giá
     * Chỉ bao gồm show và search dữ liệu
     *   Tỷ giá
     *   Ngoại Tệ
     *   Giá vàng
     *   Lãi suất
     *   Tiền Ảo
     */
    Route::group(['namespace' =>'web'], function () {
        Route::get('/exchange', 'ExchangeController@index');
        Route::get('/exchange-bank', 'ExchangeController@exchangeBank');

        Route::get('/bank-info', 'ExchangeController@bankInfo');
        Route::post('/bank-info/update/{id}', 'ExchangeController@bankInfoUpdate');

        Route::get('/gold', 'ExchangeController@gold');
        Route::get('/gold-info', 'ExchangeController@goldInfo');
        Route::post('/gold-info/update/{id}', 'ExchangeController@goldInfoUpdate');

        Route::get('/interest', 'ExchangeController@interest');

        Route::get('/virual-money', 'ExchangeController@virualMoney');
        Route::get('/virual-money-type', 'ExchangeController@virualMoneyType');
        Route::get('/virual-money-type/{id}', 'ExchangeController@virualMoneyTypeDetail');
        Route::post('/virual-money-type/update/{id}', 'ExchangeController@virualMoneyTypeUpdate');

        Route::get('/oil-petro', 'ExchangeController@oilPetro');
    });

    /**
     * Route cho documentation
     * */
    Route::get('Documentation',function(){
        return view("Documentation");
    });
});

/**
 * Route cho phia client
 * */
Route::get('createCart','adminController@createCart');

Route::post('uploadVerificationFile','adminController@uploadVerificationFile');
Route::get('verification/{filename}','adminController@verification');

Route::group(['namespace'=>$namespace], function() {
    Route::get('index', 'IndexController@index');
});

/**
 * Route cho phía frontend
 */
Route::group(['namespace' => $namespaceFrontend], function () {
    Route::get('/', 'indexController@index');
    Route::get('home', 'indexController@index');

    Route::get('ty-gia', 'tygiaController@index');
    Route::get('ty-gia/{code}', 'tygiaController@index');

    Route::get('ngoai-te', 'ngoaiteController@index');
    Route::get('ngoai-te/{code}', 'ngoaiteController@index');

    Route::get('gia-vang', 'giavangController@index');
    Route::get('gia-vang/{code}', 'giavangController@index');

    Route::get('lai-suat', 'laisuatController@index');
    Route::get('lai-suat/{code}', 'laisuatController@show');

    Route::get('tien-ao', 'tienaoController@index');
    Route::get('tien-ao/{code}', 'tienaoController@show');

    Route::get('xang-dau', 'xangdauController@index');

    Route::get('vn-index', 'IndexController@vnIndex');
});
