<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserControlByAdminController;
use App\Http\Controllers\Admin\BlockUserController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\AdminApprovalController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\LoginAPIController;

///////
use App\Http\Controllers\renter\RenterController;
use App\Http\Controllers\renter\car_service_renter_controller;

////
use App\Http\Controllers\customer\car_service_customer_controller;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login',[CustomAuthController::class,'login'])->name('login');
Route::get('registration',[CustomAuthController::class,'registration']);

Route::post('register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
//Admin
Route::get('dashboard_admin',[AdminController::class,'dashboard_admin'])->middleware('admin')->name('admin dashboard');

Route::get('Users_Add_By_Admin',[AdminController::class,'users_add_by_admin'])->middleware('admin')->name('users add by admin');

Route::get('Admin_custorans_List',[AdminController::class,'custorans_list'])->middleware('admin')->name('admin custorans list');
Route::get('Renter_List',[AdminController::class,'renter_list'])->middleware('admin')->name('admin renter list');

Route::get('User_Details/{id}',[AdminController::class,'user_details'])->middleware('admin')->name('admin single user details');
                                        //Block_user
Route::get('BlockUser_Details/{id}',[AdminController::class,'blockuser_details'])->middleware('admin')->name('admin single blockuser details');
Route::get('Block_Users_List',[AdminController::class,'block_users_list'])->middleware('admin')->name('admin block users list');
Route::get('Block_Users_List/{id}',[BlockUserController::class,'add_block'])->middleware('admin')->name('admin block');
Route::get('Unblock_Users_List/{id}',[BlockUserController::class,'delete_block'])->middleware('admin')->name('admin unblock');
Route::get('Search_Blockuser_result',[BlockUserController::class,'block_users_search'])->middleware('admin')->name('block_users_search');

                                        //car
Route::get('Add_Car_By_Admin',[AdminController::class,'add_car_by_admin'])->middleware('admin')->name('add car by admin');
Route::post('AddCarByAdmin',[CarController::class,'add_car'])->middleware('admin')->name('add car admin');
Route::get('Delete_Car_By_Admin/{id}',[CarController::class,'delete_car'])->middleware('admin')->name('delete car admin');
Route::get('Edit_Car_By_Admin_view/{id}',[CarController::class,'edit_car_view'])->middleware('admin')->name('edit car view admin');
Route::post('editCarByAdmin/{edit_id}',[CarController::class,'edit_car'])->middleware('admin')->name('edit car admin');
Route::get('Search_cars_result',[CarController::class,'search_car'])->middleware('admin')->name('search_car');
Route::get('single_car_details_view/{id}',[CarController::class,'single_car_details_view'])->middleware('admin')->name('single_car_details_view');
Route::get('Cars_List',[AdminController::class,'cars_list'])->middleware('admin')->name('cars list');

                                    //approval
Route::get('Admin_Approval',[AdminController::class,'admin_approval'])->middleware('admin')->name('admin approval');
Route::post('approv_add',[AdminApprovalController::class,'approv_add'])->middleware('admin')->name('approv_add');
Route::post('approv_delete',[AdminApprovalController::class,'approv_delete'])->middleware('admin')->name('approv_delete');
Route::get('single_approvals_details/{id}',[AdminApprovalController::class,'single_approvals_details'])->middleware('admin')->name('single_approvals_details');

                                    ///History
Route::get('Rent_History',[AdminController::class,'rent_history'])->middleware('admin')->name('rent history');
Route::get('single_history_view/{id}',[HistoryController::class,'single_history_view'])->middleware('admin')->name('single_history_view');
Route::post('history_delete',[HistoryController::class,'history_delete'])->middleware('admin')->name('history_delete');
                                    //message
Route::get('Admin_Message_List',[AdminController::class,'admin_message_list'])->middleware('admin')->name('admin message list');
Route::get('message_view/{id}',[MessageController::class,'message_view'])->middleware('admin')->name('message_view');
Route::post('send_message',[MessageController::class,'send_message'])->middleware('admin')->name('send_message');

Route::get('Admin_Notice',[AdminController::class,'admin_notice'])->middleware('admin')->name('admin notice');
Route::get('notice_edit_view/{id}',[NoticeController::class,'notice_edit_view'])->middleware('admin')->name('notice_edit_view');
Route::post('notice_edit/{id}',[NoticeController::class,'notice_edit'])->middleware('admin')->name('notice_edit');
Route::get('Admin_Notice_delete/{id}',[NoticeController::class,'notice_delete'])->middleware('admin')->name('notice_delete');
Route::get('Admin_Notice_list',[NoticeController::class,'notice_view'])->middleware('admin')->name('notice view');
Route::get('Notice',[NoticeController::class,'admin_add_notice'])->middleware('admin')->name('notice add');


Route::post('Users_Add_By_Admin',[UserControlByAdminController::class,'users_add'])->middleware('admin')->name('users add');
Route::get('Users_Edit_By_Admin/{id}',[UserControlByAdminController::class,'users_edit'])->middleware('admin')->name('admin edit');
Route::post('Edit_By_Admin/{edit_id}',[UserControlByAdminController::class,'edit'])->middleware('admin')->name('edit');
Route::get('search_user_result',[UserControlByAdminController::class,'users_search'])->middleware('admin')->name('users_search');


Route::get('Posts_Mannage',[AdminController::class,'posts_mannage'])->middleware('admin')->name('posts mannage');
Route::get('Reviews_Manage',[AdminController::class,'reviews_manage'])->middleware('admin')->name('reviews manage');
//////////

Route::get('dashboard_renter',[RenterController::class,'dashboard_renter'])->middleware('renter')->name('renter dashboard');
Route::get('addNewCar',[car_service_renter_controller::class,'addNewCar'])->middleware('renter')->name('addNewCar');
Route::post('addNewCar',[car_service_renter_controller::class,'addNewCarRenter'])->middleware('renter')->name('addNewCarRenter');
Route::delete('delete',[car_service_renter_controller::class,'deleteCar'])->middleware('renter')->name('delete');
Route::get('carlist',[car_service_renter_controller::class,'Carlist'])->middleware('renter')->name('carlist');
Route::get('editCarlist/{id}',[car_service_renter_controller::class,'editCarlist'])->middleware('renter')->name('editCarlist');
Route::post('editCarlistSubmit',[car_service_renter_controller::class,'editCarlistSubmit'])->middleware('renter')->name('editCarlistSubmit');
Route::get('profile',[RenterController::class,'profile'])->middleware('renter')->name('profile');

Route::get('singleViewApproval/{id}',[car_service_renter_controller::class,'singleViewApproval'])->middleware('renter')->name('singleViewApproval');

Route::post('acceptApproval',[car_service_renter_controller::class,'acceptApproval'])->middleware('renter')->name('acceptApproval');
Route::post('deleteApproval',[car_service_renter_controller::class,'deleteApproval'])->middleware('renter')->name('deleteApproval');


Route::post('search_view_user',[car_service_renter_controller::class,'search_view_user_list'])->middleware('renter')->name('search_view_user_list');

Route::get('postCarVideo',[car_service_renter_controller::class,'postCarVideo'])->middleware('renter')->name('postCarVideo');
Route::post('postNewCarVideo',[car_service_renter_controller::class,'postNewCarVideo'])->middleware('renter')->name('postNewCarVideo');
Route::get('video_list',[car_service_renter_controller::class,'videolist'])->middleware('renter')->name('videolist');

Route::get('notices',[RenterController::class,'notices'])->middleware('renter')->name('notices');


Route::get('messageslist',[RenterController::class,'renter_message_list'])->middleware('renter')->name('messageslist');
Route::get('message_view/{id}',[RenterController::class,'message_view'])->middleware('renter')->name('message_view');
Route::post('send_message',[RenterController::class,'send_message'])->middleware('renter')->name('send_message');

Route::get('editProfile',[RenterController::class,'editProfile'])->middleware('renter')->name('editProfile');
Route::post('editProfile',[RenterController::class,'editProfileSubmit'])->middleware('renter')->name('editProfileSubmit');
///////

Route::get('dashboard_customer',[car_service_customer_controller::class,'dashboard_customer'])->middleware('customer')->name('customer dashboard');
Route::get('edit_profile',[car_service_customer_controller::class,'edit_profile'])->middleware('customer')->name('edit_profile');
Route::post('edit_profile',[car_service_customer_controller::class,'edit_profile_submit'])->name('edit_profile_submit');


Route::get('messageCustomer',[car_service_customer_controller::class,'messageCustomer'])->middleware('customer')->name('messageCustomer');
Route::get('my_posts',[car_service_customer_controller::class,'my_posts'])->middleware('customer')->name('my_posts');
Route::get('my_posts_edit/{id}',[car_service_customer_controller::class,'my_posts_edit'])->middleware('customer')->name('my_posts_edit');
Route::post('my_posts_edit',[car_service_customer_controller::class,'my_posts_edit_submit'])->name('my_posts_edit_submit');
Route::get('my_posts_delete/{id}',[car_service_customer_controller::class,'my_posts_delete'])->middleware('customer')->name('my_posts_delete');
Route::get('post_for_a_car',[car_service_customer_controller::class,'post_for_a_car'])->middleware('customer')->name('post_for_a_car');
Route::post('post_for_a_car',[car_service_customer_controller::class,'post_for_a_car_submit'])->name('post_for_a_car_submit');
Route::get('view_car_list',[car_service_customer_controller::class,'view_car_list'])->middleware('customer')->name('view_car_list');
Route::get('view_car_list_details/{id}',[car_service_customer_controller::class,'view_car_list_details'])->middleware('customer')->name('view_car_list_details');
Route::post('search_view_car_list',[car_service_customer_controller::class,'search_view_car_list'])->middleware('customer')->name('search_view_car_list');
Route::get('car_rent/{id}',[car_service_customer_controller::class,'car_rent_view'])->middleware('customer')->name('rent_view');
Route::get('payment_view/{id}',[car_service_customer_controller::class,'payment'])->middleware('customer')->name('payment');
Route::post('payment_done',[car_service_customer_controller::class,'done'])->middleware('customer')->name('done');
Route::get('check_notices',[car_service_customer_controller::class,'check_notices'])->middleware('customer')->name('check_notices');



//
// Route::get('dashboard_renter',[CustomAuthController::class,'dashboard_renter'])->middleware('renter');
// Route::get('dashboard_customer',[CustomAuthController::class,'dashboard_customer'])->middleware('customer');
Route::get('logout',[CustomAuthController::class,'logout'])->name('logout');
