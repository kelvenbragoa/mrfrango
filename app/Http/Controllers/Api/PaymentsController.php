<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FeeAnLicence;
use App\Models\Payments;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PaymentsController extends Controller
{
    //

    public function getpayments($id){
        return response([
            'payments' => Payments::where('user_id',$id)->with('fee')->with('user')->whereDate('created_at',date('Y-m-d'))->orderBy('id','desc')->get(),
        ],200);
    }


    public function paymentdetail($id){
        return response([
            'payment' => Payments::where('id',$id)->with('fee')->with('user')->orderBy('id','desc')->get(),
        ],200);
    }


    public function createpayment(Request $request){

        $data = $request->all();
        $fee = FeeAnLicence::find($data['licence_id']);


        $payment = Payments::create([
            'user_id'=>$data['user_id'],
            'licence_id'=>$data['licence_id'],
            'amount'=>$fee->amount,
            'title'=>$data['title'] ?? 'Municipe',
            'obs'=>$data['obs'] ?? '-',
            'latitude'=>$data['latitude'],
            'longitude'=>$data['longitude'],
            'method'=>$data['method'] ?? 'cash',
            'quantity'=>$data['quantity'] ?? 1,
            'total'=>$fee->amount * $data['quantity'] ?? 1,
            'uuid'=>(string)Str::uuid()
        ]);



        return response([
            'message' => 'Pagamento adicionado com sucesso. Va aos pagamentos para impressão',
            
        ], 200);
    }

    public function getstatus($id){
            $payment = Payments::find($id);
    
            return response([
    
                'status' => $payment->status
            ], 200);
    
        
    }

    public function verify($id){
        $payment = Payments::find($id);

        $payment->update([
           'status'=>0
        ]);

        return response([
           'message' => 'Pagamento verificado com sucesso'
        ], 200);
    }

    public function operation($id){

        $user = User::find($id);
        // $sells_verified  = SellBar::where('verified_by',$id)->get();
        $payments_made  = Payments::where('user_id',$id)->whereDate('created_at',Carbon::today())->get();
        $date_exported = date('d-m-Y H:i:s');
        $date = date('d-m-Y');


        //'cash', 'emola', 'mpesa', 'pos', 'mkesh'
        $payments_made_dinheiro  = Payments::where('user_id',$id)->where('method','cash')->whereDate('created_at',Carbon::today())->get();
        $payments_made_cartao  = Payments::where('user_id',$id)->where('method','pos')->whereDate('created_at',Carbon::today())->get();
        $payments_made_mpesa  = Payments::where('user_id',$id)->where('method','mpesa')->whereDate('created_at',Carbon::today())->get();
        $payments_made_emola  = Payments::where('user_id',$id)->where('method','emola')->whereDate('created_at',Carbon::today())->get();
        $payments_made_mkesh  = Payments::where('user_id',$id)->where('method','mkesh')->whereDate('created_at',Carbon::today())->get();

        $categorypayment = Payments::where('user_id',$id)->whereDate('created_at',Carbon::today())->with('fee')->selectRaw('licence_id, sum(total) as total')->groupBy('licence_id')->get();
        // ->with('fee')
        // 
        // ->groupBy('licence_id');




        $array[] = array(
            'date_exported'=>$date_exported,
            'total'=>$payments_made->sum('total'),
            'date_report'=>$date,
            'sell_made' => $payments_made->count(),
            'amount_sell_dinheiro'=>$payments_made_dinheiro->sum('total'),
            'amount_sell_cartao'=>$payments_made_cartao->sum('total'),
            'amount_sell_mpesa'=>$payments_made_mpesa->sum('total'),
            'amount_sell_emola'=>$payments_made_emola->sum('total'),
            'amount_sell_mkesh'=>$payments_made_mkesh->sum('total'),
            'category_payment'=>$categorypayment

        );

        return response([
            'operation' => $array,
        ],200); 
    }
}
