<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App;
use App\Meal;
use App\token_sell;
class MealController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();
        return view('buy_meal', $data1);
    }

    public function request_for_token(Request $request)
    {
        $studentId = Auth::user()->student_id;
        //ot check if token sell option is enabled or not
        $token_sell_option = App\token_sell::find(1);
        if ($token_sell_option->status == 0) {
            return redirect('buy_meal')->with('error_message', 'Token Buying Option Is Not Currently Enabled');
        } else {
            $already_requested_num = App\Meal::where([['student_id', '=', $studentId], ['date', '>=', date("Y-m-d",strtotime('tomorrow'))]])->count();
            dd($already_requested_num);
            if ($already_requested_num > 0) {
                return redirect('buy_meal')->with('error_message', 'You have already requested for Meal Token');
            } else {


                //Information for new token object
                $morning_meal_quantity = $request->morning_meal_quantity;
                $launch_meal_quantity = $request->launch_meal_quantity;
                $dinner_meal_quantity = $request->dinner_meal_quantity;

                $meal_cost = ($morning_meal_quantity * $token_sell_option->morning_meal_cost) + ($launch_meal_quantity * $token_sell_option->launch_meal_cost) + ($dinner_meal_quantity * $token_sell_option->dinner_meal_cost);
                //check for enough balance
                $student=App\User::where('student_id','=',$studentId)->first();
                if ($meal_cost>$student->amount)
                {
                    return redirect('/buy_meal')->with('error_message','You do not have enough balance. Plz contact with authority!');
                }
                else
                {
                    //new user token object
                    $user_meal = new Meal();
                    $user_meal->student_id = $studentId;
                    $user_meal->morning_meal_quantity = $morning_meal_quantity;
                    $user_meal->launch_meal_quantity = $launch_meal_quantity;
                    $user_meal->dinner_meal_quantity = $dinner_meal_quantity;
                    $user_meal->cost = $meal_cost;
                    //hour for collecting token
                    $date_time = date('h-i-s');
                    //Ante meridiem and Post meridiem
                    $date_am_pm = date('a');
                    $date=null;
                    //to place date of token according to time
                    if ($date_time > 8 - 00 - 00 && $date_time<12-00-00 && $date_am_pm == 'pm') {
                        $date=date('d-m-Y',strtotime('+2 day'));
                    } else {
                        $date=date('d-m-Y',strtotime('tomorrow'));

                    }
                    $user_meal->date = $date;
                    $user_meal->save();
                    //to reduce balance from user account
                    $student->amount=$student->amount-$meal_cost;
                    $student->save();
                    return redirect('buy_meal')->with('success_message', 'Your Token Buying Request Has Placed success_messagefully for date:'.$date);
                }

            }
        }

    }

    public function turn_on_token_sell()
    {
        $token_option = App\token_sell::find(1);
        $token_option->status = 1;
        $token_option->save();
        return redirect('/adminUser')->with('success_message', 'Token Selling Option is Enabled');
    }

    public function turn_off_token_sell()
    {
        $token_option = App\token_sell::find(1);
        $token_option->status = 0;
        $token_option->save();
        return redirect('/adminUser')->with('success_message', 'Token Selling Option is Disabled');
    }

    public function set_token_date()
    {
        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();
        return view('set_token_date',$data1);
    }

    public function token_list(Request $request)
    {
        if (!isset($_POST['request_for_token_list']))
        {
            return redirect('/adminUser');
        }
        else
        {
            $date=$request->token_date;
            $meal_time_quantity=$request->meal_time_quantity;
            $tokens = App\Meal::where([['date', '=', $date],[$meal_time_quantity,'>',0]])->get();
            //$total_required_page=ceil(App\Meal::where([['date','=',$date],[$meal_time_quantity,'>',0]])->sum($meal_time_quantity)/20);
            //echo $total_required_page;
            $data['meal_time_quantity']=$meal_time_quantity;
            //$data['total_required_page']=$total_required_page;
            return view('token_list', ['tokens' => $tokens],$data);
        }

    }
    public function set_meal_cost(Request $request)
    {

        //dd($request->all());
        $token_sell_option=App\token_sell::find(1);
        if (!empty($request->morning_meal_cost))
        {

            $token_sell_option->morning_meal_cost=$request->morning_meal_cost;
           // dd($token_sell_option);
        }
        if (!empty($request->launch_meal_cost))
        {
            $token_sell_option->launch_meal_cost=$request->launch_meal_cost;
        }
        if (!empty($request->dinner_meal_cost))
        {
            $token_sell_option->dinner_meal_cost=$request->dinner_meal_cost;
        }
        $token_sell_option->status=1;

        if ($token_sell_option->save()==true)
        return redirect('/update_meal_cost')->with('success_message','successfully Updated Meal Cost');
        else
        return redirect('/update_meal_cost')->with('error_message','Unsuccessful, please try again');
    }
}
