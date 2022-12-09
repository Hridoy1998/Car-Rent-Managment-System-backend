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
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\CustomAuthController;

///////
use App\Http\Controllers\renter\RenterController;
use App\Http\Controllers\renter\car_service_renter_controller;

////
use App\Http\Controllers\customer\car_service_customer_controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return view('home');
});

//Route::get('login',[LoginAPIController::class,'login']);
//Route::get('registration',[LoginAPIController::class,'registration']);

Route::post('/register_user',[LoginAPIController::class,'registerUser']);
//Route::post('/LoginUser',[CustomAuthController::class,'loginU']);
Route::post('/login',[LoginAPIController::class,'login']);




//Admin
Route::post('dashboard_admin',[AdminController::class,'dashboard_admin'])->middleware('APIMiddleware');

// Route::get('Users_Add_By_Admin',[AdminController::class,'users_add_by_admin']);

Route::get('custorans_List',[AdminController::class,'custorans_list']);
Route::get('Renter_List',[AdminController::class,'renter_list']);

Route::get('User_Details/{id}',[AdminController::class,'user_details']);
                                        //Block_user
Route::get('BlockUser_Details/{id}',[AdminController::class,'blockuser_details']);
Route::get('Block_Users_List',[AdminController::class,'block_users_list']);
Route::get('Block_Users_List/{id}',[BlockUserController::class,'add_block']);
Route::get('Unblock_Users/{id}',[BlockUserController::class,'delete_block']);
Route::get('Search_Blockuser_result',[BlockUserController::class,'block_users_search']);

                                        //car
Route::get('Add_Car_By_Admin',[AdminController::class,'add_car_by_admin']);
Route::post('AddCarByAdmin',[CarController::class,'add_car']);
Route::get('Delete_Car_By_Admin/{id}',[CarController::class,'delete_car']);
Route::get('Edit_Car_By_Admin_view/{id}',[CarController::class,'edit_car_view']);
Route::post('editCarByAdmin/{edit_id}',[CarController::class,'edit_car']);
Route::get('Search_cars_result',[CarController::class,'search_car']);
Route::get('single_car_details_view/{id}',[CarController::class,'single_car_details_view']);
Route::get('Cars_List',[AdminController::class,'cars_list']);

                                    //approval
Route::get('Admin_Approval',[AdminController::class,'admin_approval']);
Route::post('approv_add',[AdminApprovalController::class,'approv_add']);
Route::post('approv_delete',[AdminApprovalController::class,'approv_delete']);
Route::get('single_approvals_details/{id}',[AdminApprovalController::class,'single_approvals_details']);

                                    ///History
Route::get('Rent_History',[AdminController::class,'rent_history']);
Route::get('single_history_view/{id}',[HistoryController::class,'single_history_view']);
Route::post('history_delete',[HistoryController::class,'history_delete']);
                                    //message
Route::get('Admin_Message_List',[AdminController::class,'admin_message_list']);
Route::get('message_view/{id}',[MessageController::class,'message_view']);
Route::post('send_message',[MessageController::class,'send_message']);

Route::get('Admin_Notice',[AdminController::class,'admin_notice']);
Route::get('notice_edit_view/{id}',[NoticeController::class,'notice_edit_view']);
Route::post('notice_edit/{id}',[NoticeController::class,'notice_edit']);
Route::get('Admin_Notice_delete/{id}',[NoticeController::class,'notice_delete']);
Route::get('Admin_Notice_list',[NoticeController::class,'notice_view']);
Route::post('Notice',[NoticeController::class,'admin_add_notice']);


Route::post('Users_Add_By_Admin',[UserControlByAdminController::class,'users_add']);
Route::get('Users_Edit_By_Admin/{id}',[UserControlByAdminController::class,'users_edit']);
Route::post('Edit_By_Admin/{edit_id}',[UserControlByAdminController::class,'edit']);
Route::get('search_user_result',[UserControlByAdminController::class,'users_search']);


Route::get('Posts_Mannage',[AdminController::class,'posts_mannage']);
Route::get('Reviews_Manage',[AdminController::class,'reviews_manage']);

Route::post('send_notification',[AdminController::class,'notification']);

//
Route::post('logout',[LoginAPIController::class,'logout']);




//////////////////////////////////************Renter************////////////////////////////////////

Route::get('dashboard_renter',[RenterController::class,'dashboard_renter']);
Route::get('addNewCar',[car_service_renter_controller::class,'addNewCar']);
Route::post('addNewCar',[car_service_renter_controller::class,'addNewCarRenter']);
Route::delete('delete',[car_service_renter_controller::class,'deleteCar']);
Route::get('carlist',[car_service_renter_controller::class,'Carlist']);
Route::get('editCarlist/{id}',[car_service_renter_controller::class,'editCarlist']);
Route::post('editCarlistSubmit',[car_service_renter_controller::class,'editCarlistSubmit']);
Route::get('profile',[RenterController::class,'profile']);

Route::get('singleViewApproval/{id}',[car_service_renter_controller::class,'singleViewApproval']);

Route::post('acceptApproval',[car_service_renter_controller::class,'acceptApproval']);
Route::post('deleteApproval',[car_service_renter_controller::class,'deleteApproval']);


Route::post('search_view_user',[car_service_renter_controller::class,'search_view_user_list']);

Route::get('postCarVideo',[car_service_renter_controller::class,'postCarVideo']);
Route::post('postNewCarVideo',[car_service_renter_controller::class,'postNewCarVideo']);
Route::get('video_list',[car_service_renter_controller::class,'videolist']);

Route::get('notices',[RenterController::class,'notices']);


Route::get('messageslist',[RenterController::class,'renter_message_list']);
Route::get('message_view/{id}',[RenterController::class,'message_view']);
Route::post('send_message',[RenterController::class,'send_message']);

Route::get('editProfile',[RenterController::class,'editProfile']);
Route::post('editProfile',[RenterController::class,'editProfileSubmit']);





/////////////////////**********Customer************////////////////////////


Route::get('dashboard_customer',[car_service_customer_controller::class,'dashboard_customer']);
Route::get('edit_profile',[car_service_customer_controller::class,'edit_profile']);
Route::post('edit_profile',[car_service_customer_controller::class,'edit_profile_submit']);


Route::get('messageCustomer',[car_service_customer_controller::class,'messageCustomer']);
Route::get('my_posts',[car_service_customer_controller::class,'my_posts']);
Route::get('my_posts_edit/{id}',[car_service_customer_controller::class,'my_posts_edit']);
Route::post('my_posts_edit',[car_service_customer_controller::class,'my_posts_edit_submit']);
Route::get('my_posts_delete/{id}',[car_service_customer_controller::class,'my_posts_delete']);
Route::get('post_for_a_car',[car_service_customer_controller::class,'post_for_a_car']);
Route::post('post_for_a_car',[car_service_customer_controller::class,'post_for_a_car_submit']);
Route::get('view_car_list',[car_service_customer_controller::class,'view_car_list']);
Route::get('view_car_list_details/{id}',[car_service_customer_controller::class,'view_car_list_details']);
Route::post('search_view_car_list',[car_service_customer_controller::class,'search_view_car_list']);
Route::get('car_rent/{id}',[car_service_customer_controller::class,'car_rent_view']);
Route::get('payment_view/{id}',[car_service_customer_controller::class,'payment']);
Route::post('payment_done',[car_service_customer_controller::class,'done']);
Route::get('check_notices',[car_service_customer_controller::class,'check_notices']);





Route::get('approval_check_page',[car_service_customer_controller::class,'approval_check_page'])->middleware('customer')->name('approval_check_page');
Route::get('single_approval_details/{id}',[car_service_customer_controller::class,'single_approval_details'])->middleware('customer')->name('single_approval_details');
Route::post('cancel_service',[car_service_customer_controller::class,'cancel_service'])->middleware('customer')->name('cancel_service');
