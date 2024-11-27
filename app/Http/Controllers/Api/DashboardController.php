<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FeeAnLicence;
use App\Models\Payments;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function dashboard($id){

       
            $yesterday = Carbon::yesterday();

            $today_tax = Payments::where('user_id',$id)->whereDate('created_at',date('Y-m-d'))->sum('total');
            $yesterday_tax = Payments::where('user_id',$id)->whereDate('created_at',$yesterday)->sum('total');
            $month_tax = Payments::where('user_id',$id)->whereMonth('created_at',date('m'))->whereYear('created_at',date('Y'))->sum('total');
            $year_tax = Payments::where('user_id',$id)->whereYear('created_at',date('Y'))->sum('total');

            $licence = FeeAnLicence::where('is_active',1)->orderBy('name','asc')->get();

            // $licence = User::with('permissions.fee')->find(Auth::user()->id);


            
            // return response([
                
            //     'home'=>[
            //         'today'=>$today_tax,
            //         'yesterday'=>$yesterday_tax,
            //         'month'=>$month_tax,
            //         'year'=>$year_tax,
            //     ]
                
            // ],200);
            $array[] = array(
                'today' => intval($today_tax),
                'yesterday' => intval($yesterday_tax),
                'month' => intval($month_tax),
                'year'=>intval($year_tax),
            );
    
            return response([
                'home' => $array,
                'licence' => $licence,
            ],200);

    }


    public function index(){


        return 'hello';
    }
}
