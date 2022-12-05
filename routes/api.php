<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserControlByAdminController;
use App\Http\Controllers\Admin\BlockUserController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\AdminApprovalController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\MessageController;

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

Route::get('/login',[CustomAuthController::class,'login'])->name('login');
Route::get('registration',[CustomAuthController::class,'registration']);

Route::post('register-user',[CustomAuthController::class,'registerUser']);
Route::post('login-user',[CustomAuthController::class,'loginUser']);
//Admin
Route::get('dashboard_admin',[AdminController::class,'dashboard_admin']);

Route::get('Users_Add_By_Admin',[AdminController::class,'users_add_by_admin']);

Route::get('Admin_custorans_List',[AdminController::class,'custorans_list']);
Route::get('Renter_List',[AdminController::class,'renter_list']);

Route::get('User_Details/{id}',[AdminController::class,'user_details']);
                                        //Block_user
Route::get('BlockUser_Details/{id}',[AdminController::class,'blockuser_details']);
Route::get('Block_Users_List',[AdminController::class,'block_users_list']);
Route::get('Block_Users_List/{id}',[BlockUserController::class,'add_block']);
Route::get('Unblock_Users_List/{id}',[BlockUserController::class,'delete_block']);
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
Route::get('Notice',[NoticeController::class,'admin_add_notice']);


Route::post('Users_Add_By_Admin',[UserControlByAdminController::class,'users_add']);
Route::get('Users_Edit_By_Admin/{id}',[UserControlByAdminController::class,'users_edit']);
Route::post('Edit_By_Admin/{edit_id}',[UserControlByAdminController::class,'edit']);
Route::get('search_user_result',[UserControlByAdminController::class,'users_search']);


Route::get('Posts_Mannage',[AdminController::class,'posts_mannage']);
Route::get('Reviews_Manage',[AdminController::class,'reviews_manage']);

//
Route::get('dashboard_renter',[CustomAuthController::class,'dashboard_renter']);
Route::get('dashboard_customer',[CustomAuthController::class,'dashboard_customer']);
Route::get('logout',[CustomAuthController::class,'logout'])->name('logout');
