<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\Controller@index')->name('home');

Route::get('/ListYourCar', 'App\Http\Controllers\sellController@index')->name('sellcar');
Route::get('/LoginPage', 'App\Http\Controllers\buyerController@index')->name('login');
Route::get('/ListedCars', 'App\Http\Controllers\carController@index')->name('all_cars');
Route::get('/Contact Us', 'App\Http\Controllers\contactController@index')->name('contact');
Route::post('/Listed/Results', 'App\Http\Controllers\carController@search')->name('search');
Route::post('/Contact Us', 'App\Http\Controllers\contactController@store')->name('store');
Route::get('/DealersPage', 'App\Http\Controllers\dealerController@index')->name('dealerHome');
Route::post('/Dashboard/carselluser', 'App\Http\Controllers\buyerController@login')->name('userlogin');
Route::post('/ListYourCar', 'App\Http\Controllers\sellController@store')->name('savecar');
Route::post('/DealersPage', 'App\Http\Controllers\dealerController@store')->name('dealerreg');

//dealers
Route::get('/Dealer/Panel/DealerDash{id}', 'App\Http\Controllers\dealerController@dash')->name('ddash');
Route::get('/Dealer/Panel/DealerDash/Add{id}', 'App\Http\Controllers\dealerController@add')->name('dcar');
Route::post('/Dealer/Panel/DealerDash/Add{id}', 'App\Http\Controllers\dealerController@save')->name('dsavecar');
Route::get('/Dealer/Panel/DealerDash/Listed{id}', 'App\Http\Controllers\dealerController@listed')->name('dlisted');
Route::get('/Dealer/Panel/DealerDash/Details{id}/adm{adm}', 'App\Http\Controllers\dealerController@detail')->name('ddetail');
Route::get('/Dealer/Panel/DealerDash/EditCar{id}/adm{adm}', 'App\Http\Controllers\dealerController@edit_car')->name('dedit_vhi');
Route::post('/Dealer/Panel/DealerDash/UpdateCar{id}/adm{adm}', 'App\Http\Controllers\dealerController@car')->name('dupdate_car');
Route::get('//Dealer/Panel/DealerDash/del/{id}/admin/{adm}','App\Http\Controllers\dealerController@destroy_car')->name('ddel_car');
Route::get('/Dealer/Panel/DealerDash/MarkCar{id}/adm{adm}', 'App\Http\Controllers\dealerController@sold')->name('sold');

//Admin Reset
Route::get('/forget-password/admin', 'App\Http\Controllers\AdminReset@show')->name('forget.admin');

Route::post('/forget-password/admin', 'App\Http\Controllers\AdminReset@submitForgetPasswordForm')->name('forget.password.post.admin'); 

Route::get('/reset-password/admin/{token}', 'App\Http\Controllers\AdminReset@showResetPasswordForm')->name('reset.password.get.admin');

Route::post('/reset-password/admin', 'App\Http\Controllers\AdminReset@submitResetPasswordForm')->name('reset.password.post.admin');

//user password reset
Route::get('/forget-password', 'App\Http\Controllers\ForgotPasswordController@show')->name('forget');

Route::post('/forget-password', 'App\Http\Controllers\ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post'); 

Route::get('/reset-password/{token}', 'App\Http\Controllers\ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');

Route::post('/reset-password', 'App\Http\Controllers\ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');

//admin 
Route::get('/Admin@IT/Panel', 'App\Http\Controllers\adminController@index')->name('admin');
Route::post('/Admin@IT/Panel/Login', 'App\Http\Controllers\adminController@log')->name('alogin');
Route::get('/Admin@IT/Panel/AdminDash{id}', 'App\Http\Controllers\adminController@dash')->name('adash');
Route::get('/Admin@IT/Panel/RegAdmin{id}', 'App\Http\Controllers\adminController@reg')->name('adminReg');
Route::post('/Admin@IT/Panel/RegAdmin{id}', 'App\Http\Controllers\adminController@store')->name('admins');
Route::get('/Admin@IT/Panel/addPayment{id}', 'App\Http\Controllers\adminController@addPay')->name('add_pay');
Route::post('/Admin@IT/Panel/addPayment/post{id}', 'App\Http\Controllers\adminController@save')->name('save_pay');
Route::get('/Admin@IT/Panel/Payment/delete/{id}/admin{adm}','App\Http\Controllers\adminController@destroy')->name('del_pay');
Route::get('/Admin@IT/Panel/Packages{id}', 'App\Http\Controllers\adminController@package')->name('packages');
Route::get('/Admin@IT/Panel/Packages/Edit{id}/Admin{adm}', 'App\Http\Controllers\adminController@edit_view')->name('edit_pay');
Route::get('/Admin@IT/Panel/ListedCars{id}', 'App\Http\Controllers\adminController@listed')->name('listed');
Route::post('/Admin@IT/Panel/Packages/update{id}/Admin{adm}', 'App\Http\Controllers\adminController@update')->name('update_pay');
Route::get('/Admin@IT/Panel/Admins{id}', 'App\Http\Controllers\adminController@admins')->name('admins1');
Route::get('/Admin@IT/Panel/Admins/delete/{id}/admin{adm}','App\Http\Controllers\adminController@rm_admin')->name('del_admin');
Route::get('/Admin@IT/Panel/Available/Details{id}/adm{adm}', 'App\Http\Controllers\adminController@detail')->name('adetail');
Route::get('/Admin@IT/Panel/Available/EditCar{id}/adm{adm}', 'App\Http\Controllers\adminController@edit_car')->name('edit_vhi');
Route::post('/Admin@IT/Panel/Car/Update{id}/Admin{adm}', 'App\Http\Controllers\adminController@car')->name('update_car');
Route::get('/Admin@IT/Panel/Car/del/{id}/admin/{adm}','App\Http\Controllers\adminController@destroy_car')->name('del_car');
Route::get('/Admin@IT/Panel/Messages/admin/{adm}','App\Http\Controllers\adminController@getMessages')->name('messages');
Route::get('/Admin@IT/Panel/Messages/View{id}/Admin{adm}', 'App\Http\Controllers\adminController@viewMessage')->name('view_message');
Route::get('/Admin@IT/Panel/Bids/admin/{adm}','App\Http\Controllers\adminController@getBids')->name('admin_bids');
Route::get('/Admin@IT/Panel/BidsCost/admin/{adm}','App\Http\Controllers\adminController@getBidCost')->name('admin_bid_cost');
Route::get('/Admin@IT/Panel/addBids/admin/{adm}','App\Http\Controllers\adminController@getBidPage')->name('bidPage');
Route::post('/Admin@IT/Panel/Bids/admin/{adm}','App\Http\Controllers\adminController@newBid')->name('addBid');
Route::get('/Admin@IT/Panel/Costs/Edit{id}/Admin{adm}', 'App\Http\Controllers\adminController@editCost')->name('edit_cost');
Route::post('/Admin@IT/Panel/Costs/update{id}/Admin{adm}', 'App\Http\Controllers\adminController@updateCost')->name('update_cost');
Route::get('/Admin@IT/Panel/Costs/delete/{id}/Admin{adm}','App\Http\Controllers\adminController@destroyCost')->name('del_cost');