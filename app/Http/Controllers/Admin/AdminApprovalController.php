<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminApproval;
use App\Models\Approval;
use App\Models\CarService;
use App\Models\RentHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AdminApprovalController extends Controller
{
    public function single_approvals_details(Request $request)
    {
        $approve=AdminApproval::where('id','=',$request->id)->first();
        $myinfo=User::where('id','=',$approve->customer_id)->first();
        $Clist=CarService::where('id','=',$approve->service_id)->first();
        $client_info=User::where('id','=',$approve->renter_id)->first();
        return $Clist + $client_info + $myinfo +$approve;
    }

    public function approv_add(Request $request)
    {
        $approve=AdminApproval::where('id','=',$request->id)->first();
        $history= new RentHistory();
        $history->renter_name=$approve->renter_name;
        $history->renter_id=$approve->renter_id;
        $history->customer_name=$approve->customer_name;
        $history->customer_id=$approve->customer_id;
        $history->rent_date=$approve->created_at;
        $history->service_id=$approve->service_id;
        $history->payment_no=$approve->payment_no;
        $history->rent_price=$approve->rent_price;
        $history->save();
        $renter_approval=Approval::where('id','=',$approve->renter_app_id)->first();
        $renter_approval->delete();
        $approve->delete();
        $historis= RentHistory::all();
        return $historis;


    }
    public function approv_delete(Request $request)
    {
        $approve=AdminApproval::where('id','=',$request->id)->first();
        $history= RentHistory::all();
        $renter_approval=Approval::where('id','=',$approve->renter_app_id)->first();
        $renter_approval->delete();
        $approve->delete();
        return $history;


    }
}
