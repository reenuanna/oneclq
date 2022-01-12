<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usermodel;
use App\Mail\mailsend;
use Illuminate\Support\Facades\Mail;
use Razorpay\Api\Api;
use Session;
use Exception;
use Nexmo\Laravel\Facade\Nexmo;

class userr extends Controller
{
    //
    public $obj;

    public function  __construct()
    {
        $this->obj = new usermodel();
    }

    public function user()

    {


        $id = session('uid');
        $data['result'] = $this->obj->joiningprod('product', 'categories', 'sub_cat');
        $data['result1'] = $this->obj->cat('categories');
        $data['result3'] = $this->obj->selectprod('product');
        $data['result4'] = $this->obj->seemore('product');
        $data['result5'] = $this->obj->view('userprofile', $id);
        $data['result7'] = $this->obj->order('buynow', $id);

        return view('user.userlog', $data);

    }

    public function userfpass()
    {

        return view('user.userfpass');
    }

    public function sendemail(Request $request)
    {

            request()->validate([
                'email' => 'required',

            ]);
        $email = $request->input('email');

        $data = [
            'title' => 'Onecliq Account: Password reset request',
            'body' => 'A password reset was requested for your Onecliq account.To confirm this request, and set a new password for your account, please
        go to the following web address:http://127.0.0.1:8000/newpass'];

        mail::to($email)->send(new mailsend($data));

        return redirect('/userfpass')->with('msg', 'password Reset link has send to your email id , please login and check');

    }

    public function newpass()
    {
        return view('user.newpass');
    }

    public function updatepass(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required|string|min:6|',
            'cpassword' => 'required_with:password|same:password|min:6'

        ]);
        $email = $request->input('email');
        $password['password'] = $request->input('password');
        $this->obj->updatepass('userprofile', $password, $email);
        return redirect('/userprofile');
    }

    public function home()

    {
        $id = session('uid');
        $data['result'] = $this->obj->joiningprod('product', 'categories', 'sub_cat');
        $data['result1'] = $this->obj->cat('categories');
        $data['result3'] = $this->obj->selectprod('product');
        $data['result4'] = $this->obj->seemore('product');
        $data['result5'] = $this->obj->view('userprofile', $id);
        $data['result2'] = $this->obj->joiningu('product', 'buynow', $id);

        return view('user.home', $data);
    }

    public function seemore($id)
    {

        $data['result1'] = $this->obj->cat('categories');
        $data['result3'] = $this->obj->selectuserprod('product', $id);
        $data['result6'] = $this->obj->joinings('product', 'categories', 'sub_cat');
        $data['result5'] = $this->obj->view('userprofile', $id);
        $data['result4'] = $this->obj->seemore('product');
        $data['result7'] = $this->obj->viewoffer('buynow', $id);
        $data['result2'] = $this->obj->joiningu('product', 'buynow', $id);
        $data['result9'] = $this->obj->viewadd('review', $id);
        $data['result10'] = $this->obj->viewadds('review','userprofile', $id);
        $data['result11'] = $this->obj->viewquesans('quesans','userprofile', $id);

        return view('user.seemore', $data);
    }

    public function cat($id)
    {
        $data['result6'] = $this->obj->joincat('product', 'categories', 'sub_cat',$id);
        $data['result1'] = $this->obj->cat('categories');

        return view('user.cat',$data);
    }

    public function cart(Request $r, $id)
    {

            if (session()->has('uid')) {


                $sid = session('uid');

                $prod_id = $r->input('m-prod_id');
                $uid = $r->input('m-userid');

                $tdata = $this->obj->ifdata('cart', $prod_id, $uid);
                if ($tdata != "") {
                    return redirect()->back()->with('msg', "This item is already in your cart");
                } else

                    $data['result1'] = $this->obj->cat('categories');
                $data['result5'] = $this->obj->view('userprofile', $sid);
                $data['result6'] = $this->obj->joiningcart('product', 'cart', 'userprofile', $sid);
                $d['prod_id'] = $id;
                $d['userid'] = $sid;
                $d['quantity'] = $r->input('m-quantity');

                $d['tprice'] = $r->input('m-total');
                $d['offerprice'] = $r->input('m-offerprice');
                $d['coins'] = $r->input('m-coin');
                $this->obj->prodcart('cart', $d);

                return redirect('/mycart');


            }

        else
        {
            return redirect('/userprofile');
        }
    }


    public function mycart()
    {
        if (session()->has('uid')) {

            $sid = session('uid');
            $data['result1'] = $this->obj->cat('categories');
            $data['result5'] = $this->obj->view('userprofile', $sid);
//        $data['result6'] = $this->obj->joiningcart('product', 'cart', 'userprofile', $sid);
            $data['result6'] = $this->obj->selectcart('cart', 'product', $sid);
            $data['csum'] = $this->obj->selectCartSum('cart', $sid);

            return view('user.cart', $data);
        } else {
            return redirect('/userprofile');
        }
    }

    public function deletecart($id)
    {
        $sid = session('uid');

        $this->obj->deleteCartData('cart', $sid, $id);

        return redirect('/mycart');

    }

    public function prodcart(Request $request, $id)
    {

            if (session()->has('uid')) {

            $sid = session('uid');
            $tdata = $this->obj->ifdata('cart', $id, $sid);
            if ($tdata == "") {

                $d['userid'] = $sid;
                $d['prod_id'] = $id;
                $d['quantity'] = $request->input('quantity');
                $d['tprice'] = $request->input('tot');
                $d['offerprice'] = $request->input('offerprice');
                $d['coins'] = $request->input('b');
                $this->obj->insertData('cart', $d);
                $data['result6'] = $this->obj->viewcart('product', 'cart', $sid, $id);
                $data['result1'] = $this->obj->cat('categories');
                $data['result7'] = $this->obj->viewadd('buynow', $sid);
                $data['result5'] = $this->obj->view('userprofile', $sid);
                $data['csum'] = $this->obj->getcoin('userprofile', $sid);

                return view('user.buynow', $data);

            } else {


                $data['result6'] = $this->obj->viewcart('product', 'cart', $sid, $id);
//            print_r($data);
//            exit();
                $data['result1'] = $this->obj->cat('categories');

                $data['result5'] = $this->obj->view('userprofile', $sid);
                $data['csum'] = $this->obj->getcoin('userprofile', $sid);
                $data['csum1'] = $this->obj->selectCartSum('cart', $sid);

                $d['quantity'] = $request->input('quantity');
                $d['tprice'] = $request->input('tot');
                $d['offerprice'] = $request->input('offerprice');
                $d['coins'] = $request->input('b');
                $this->obj->updateData('cart', $sid, $id, $d);

                return view('user.buynow', $data);
            }

    }
        else
        {
            return redirect('/userprofile');
        }
    }
    public function login()
    {
        $data['result1'] = $this->obj->cat('categories');
        $data['result'] = $this->obj->joiningprod('product', 'categories', 'sub_cat');

        return view('user.login', $data);
    }

    public function userprofile()
    {
        $data['result1'] = $this->obj->cat('categories');
        $data['result'] = $this->obj->joiningprod('product', 'categories', 'sub_cat');

        return view('user.userprofile', $data);
    }

    public function view(Request $r)

    {
        request()->validate([
            'email' => 'required',
            'password' => 'required|string|min:6|',

        ]);
        $email = $r->input('email');
        $password = $r->input('password');
        $login = $this->obj->login('userprofile', $email, $password);

        if (isset($login)) {

            $r->session()->put(array('uid' => $login->uid));
            $sid = session('uid');

            $d['status']='1';
            $this->obj->userstatus('userprofile',$d,$sid);
            return redirect('/');

        } else {
            return redirect('/userprofile')->with('status', 'Invalid login , Please verify Email and Password');
        }


    }

    public function userreg(Request $r)
    {
        request()->validate([
            'name' => ' required|alpha',
            'mobile' => ' required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:12',
            'email' => 'required|email|unique:userprofile,email',
            'password' => 'required|string|min:6|',
            'cpassword' => 'required_with:password|same:password|min:6'

        ]);
        $data['username'] = $r->input('name');
        $mob = $r->input('mobile');
        $data['mobile'] = $mob;
        $email = $r->input('email');
        $password = $r->input('password');
        $data['cpassword'] = $r->input('cpassword');
        $data['email'] = $email;
        $data['password'] = $password;

        $this->obj->userreg('userprofile', $data);
        Nexmo::message()->send([
            'to'=>$mob,
            'from'=>'919656946547',
            'text'=>'Your  OneCliq Account has been created , Explore and purchase!!',
        ]);
        $login = $this->obj->login('userprofile', $email, $password);
        if (isset($login)) {
            $r->session()->put(array('uid' => $login->uid));
            $sid = session('uid');

            $d['status']='1';
            $this->obj->userstatus('userprofile',$d,$sid);
            return redirect('/userprofile');
        }

    }


    public function viewreg(Request $r)
    {
        return view('user.userreg');

    }

    public function userlogin()
    {



        $data['result'] = $this->obj->userlogin('userprofile');


        return view('user.userlogin', $data);


    }

    public function logout(Request $request)
    {
        $sid = session('uid');

        $d['status']='0';
        $this->obj->userstatus('userprofile',$d,$sid);
        $request->session()->forget('uid');
        return redirect('/');
    }
    public function returns($id)
    {

        $sid = session('uid');

        $d['buystatus']=4;
            $this->obj->updatestatus('buynow', $d,$id,$sid);
        return redirect('/order');

    }
    public function cancel($id)
    {

        $sid = session('uid');

        $d['buystatus']=6;
        $this->obj->updatestatus('buynow', $d,$id,$sid);
        return redirect('/order');

    }

//    public function buynow(Request $r, $id)
//    {
//
//        $sid = session('uid');
//        $tdata = $this->obj->ifdata('cart', $id, $sid);
//        if ($tdata != "") {
//
//
//            $data['result6'] = $this->obj->viewcart('product', 'cart', $sid,$id);
//
//            $data['result1'] = $this->obj->cat('categories');
//
//            $data['result5'] = $this->obj->view('userprofile', $sid);
//
//
//            return view('user.buynow', $data);
//        } else {
//            $data['result6'] = $this->obj->viewcart('product', 'cart', $sid,$id);
//            $data['result1'] = $this->obj->cat('categories');
//
//            $data['result5'] = $this->obj->view('userprofile', $sid);
//
//            $data['prod_id'] = $id;
//            $data['offerprice'] =  $r->input('offerprice');
//            $data['quantity'] =  $r->input('quantity');
//            $data['tprice'] = $r->input('tprice');
//            $data['user_id'] = $sid;
//            $data['coins'] = $r->input('coins');
//            $this->obj->insertData('cart',$data);
//
//            return view('user.buynow', $data);
//        }
//    }
public function buynow1()
{
    if (session()->has('uid')) {
        $sid = session('uid');
//            $data['result6'] = $this->obj->viewcheckout('product', 'checkout', $sid);
        $data['result1'] = $this->obj->cat('categories');

        $data['result6'] = $this->obj->selectcart('cart', 'product', $sid);
        $data['result5'] = $this->obj->view('userprofile', $sid);
        $data['csum'] = $this->obj->selectCartSum('cart', $sid);

        $data['csum1'] = $this->obj->getcoin('userprofile', $sid);

        return view('user.buynow1', $data);
    }
    else
    {
        return redirect('/userprofile');
    }
}

public
function cartbuynow($id)
{
    if (session()->has('uid')) {
        $sid = session('uid');

        $cart = $this->obj->cartcheckout('product', 'cart', $sid, $id);

        foreach ($cart as $val) {
            $quantity = $val->quantity;

            $tprice = $val->tprice;
        }

        $data['result6'] = $this->obj->viewcheckout('product', 'checkout', $sid);

//            $data['result1'] = $this->obj->cat('categories');
//
//            $data['result5'] = $this->obj->view('userprofile', $sid);
        $d['uid'] = $sid;
        $d['prod_id'] = $id;
        $d['quantity'] = $quantity;

        $d['total'] = $tprice;

        $this->obj->prodcart('checkout', $d);

        return redirect('/buynowcart');
    } else {
        return redirect('/userprofile');
    }
}

public
function buynowcart($id)
{

    if (session()->has('uid')) {
        $sid = session('uid');


            $data['result6'] = $this->obj->viewcart('product', 'cart', $sid,$id);
        $data['result1'] = $this->obj->cat('categories');

//        $data['result6'] = $this->obj->selectcart('cart', 'product', $sid);
        $data['result5'] = $this->obj->view('userprofile', $sid);


        return view('user.buynow', $data);
    }
    else
    {
        return redirect('/userprofile');
    }
}


    public function reviewgive(Request $r)
    {

        if (session()->has('uid'))
        {
            $sid = session('uid');
//            echo $sid;
//            exit();
            $d['user_id'] = $sid;
            $d['prod_id'] = $r->input('prod_id');
            $d['comment'] = $r->input('comment');
           $a = $d['rating'] = $r->input('rating');
//            echo $a;
//            exit();
        $this->obj->reviewgive('review', $d);

        return redirect()->back();

    }
        else
        {
            return redirect()->back();
        }
    }

    public function quesans(Request $r)
    {

        if (session()->has('uid'))
        {
            $sid = session('uid');

            $d['user_id'] = $sid;
            $d['prod_id'] = $r->input('prod_id');

            $d['ques'] = $r->input('ques');
            $d['ans'] = $r->input('ans');
            $d['ansr'] = $r->input('ansr');

            $this->obj->quesans('quesans', $d);

            return redirect()->back();

        }
        else
        {
            return redirect()->back();
        }
    }

    public function payment()
    {
        $sid=session('uid');
        $data['result5'] = $this->obj->view('userprofile', $sid);
        $data['result1'] = $this->obj->cat('categories');


        $amount['price'] = $this->obj->payment('buynow',$sid);

        foreach($amount as $value)
        {
         $amt =   $value->total;
            $pid = $value->prod_id;
        }
        $data['amt']=$amt;
        $data['result3'] = $this->obj->selectprodpay('product',$pid);
        Nexmo::message()->send([
            'to'=>'919645830051',
            'from'=>'919656946547',
            'text'=>'Payment successful | Thank you for your purchase | from Onecliq',
        ]);

        return view('user.payment',$data,$amount);
    }


    public function store(Request $request)
    {
        $input = $request->all();
//print_r($input);
//        exit();
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        $data['buy_id']=$request->input('buyid');
        $data['user_id']=$request->input('user_id');
            $pid       =$request->input('prod_id');
        $data['prod_id']=$pid;
        $data['card_id']=$payment['card_id'];
        $data['amt']=$request->input('amount');
        $data['mobile']=$payment['contact'];
        $data['method']=$payment['method'];


        $this->obj->prodcart('payment',$data);

        $status['paymentstatus'] = 1;
        $this->obj->updatecart('buynow',$status,$pid);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));

            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful');
//        $this->obj->prodcart('payment',$response);
        Nexmo::message()->send([
            'to'=>'919645830051',
            'from'=>'919656946547',
            'text'=>'Payment successful | Thank You for your purchase | from Onecliq ',
        ]);
        return redirect('/paysuccess');
    }
    public function cartpayment()
    {
        $sid=session('uid');
        $data['result5'] = $this->obj->view('userprofile', $sid);
        $data['result1'] = $this->obj->cat('categories');
        $data['result3'] = $this->obj->selectprod('product');



        $amount['price'] = $this->obj->cartpayment('buynow',$sid);
//        print_r($amount);
//        exit();
        $data['cart' ]=$this->obj->selectorderSum('buynow',$sid);

        Nexmo::message()->send([
            'to'=>'919645830051',
            'from'=>'919656946547',
            'text'=>'Onecliq Payment successful ',
        ]);

        return view('user.cartpayment',$data,$amount);
    }

    public function deleteuser(Request $request,$id)
    {
//        $date = strtotime("+14 day", strtotime( date("Y-m-d") ));
//        $new_date= date("Y-m-d", $date);
//        echo $new_date;exit();
        $d['status'] = '2';
        $d['date'] = date('Y-m-d');
        $this->obj->userstatus('userprofile',$d,$id);

        $request->session()->forget('uid');
        return redirect('/');

    }
    public function cartstore(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        $sid = session('uid');
       $result = $this->obj->cartpayment('buynow',$sid);

        foreach($result as $cart)
        {
            $data['buy_id']=$cart->buyid;
            $data['user_id']=$sid;
            $pid = $cart->prod_id;
            $data['prod_id']=$pid;
            $data['card_id']=$payment['card_id'];
            $data['amt']=$cart->total;
            $data['mobile']=$payment['contact'];
            $data['method']=$payment['method'];
            $this->obj->prodcart('payment',$data);

            $status['paymentstatus'] = 1;
            $this->obj->updatecart('buynow',$status,$pid);

        }




        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));

            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful');
//        $this->obj->prodcart('payment',$response);

        return redirect('/paysuccess');
    }
    public function paysuccess(){
        $sid=session('uid');
        $data['result5'] = $this->obj->view('userprofile', $sid);
        $data['result1'] = $this->obj->cat('categories');

        return view('user.success',$data);
    }

    public function cod(Request $request)
    {
        $data['buy_id']=$request->input('buyid');
        $data['user_id']=$request->input('user_id');
        $pid       =$request->input('prod_id');
        $data['prod_id']=$pid;
        $data['amt']=$request->input('amount');
        $data['method']='cash';

        $this->obj->prodcart('payment',$data);
        $d['paymentstatus'] = 1;
        $this->obj->updatecart('buynow',$d,$pid);

        $data['result3'] = $this->obj->selectprod('product');
        Nexmo::message()->send([
            'to'=>'919645830051',
            'from'=>'919656946547',
            'text'=>'Order placed , Cash on delivery from Onecliq ',
        ]);
        return redirect('/');

    }

    public function buynowprice(Request $r)
    {
        request()->validate([

            'name' => ' required',
            'quantity' => ' required',
            'total' => ' required',
        ]);

        $sid = session('uid');
        $pid=$r->input('id');

        $d['userid'] = $sid;
        $d['prod_id'] = $pid;
        $d['name'] = $r->input('name');
        $d['offerprice'] = $r->input('offer_price');

        $quantity = $r->input('quantity');
        $d['quantity'] = $quantity;

        $d['total'] = $r->input('tpricecoin');

        $address = $r->input('address');
        $d['address'] = $address;
        $d['address'] = $r->input('address');

        $d['date'] = date('y-m-d');

        $this->obj->buynow('buynow', $d);

        $totstock = $this->obj->getstock('product',$pid);

        $tot = $totstock - $quantity;
//                echo $tot;
//        exit();
        $total['stock']=$tot;
        $this->obj->updatestock('product',$total,$pid);


        $points = $r->input('b');
        $data['points']=$points;
        $data['userid'] = $sid;
        $data['prod_id'] = $r->input('id');
        $this->obj->coins('coins', $data);

        $totcoin = $this->obj->getcoin('userprofile',$sid);


        $a = $r->input('coin');
        $tota = $totcoin - $a ;

        $totcoins1['user_coins']=$tota;

        $this->obj->updatecoins('userprofile',$totcoins1,$sid);

        $totcoin1 = $this->obj->getcoin('userprofile',$sid);

        $tot = $totcoin1 + $points;
        $totcoins['user_coins']=$tot;
        $this->obj->updatecoins('userprofile',$totcoins,$sid);


        $cart['status'] = 1;
        $this->obj->updatemycart('cart', $cart,$pid,$sid);
        $this->obj->deletec('cart', $sid,$pid);

        return redirect('/payment');

    }

    public function privacy()
    {
        return view('user.privacy');
    }

    public function buynowprice1(Request $r)
    {
        request()->validate([
            'address' => ' required',
            'name' => ' required',
            'quantity' => ' required',
            'total' => ' required',
        ]);

        $sid = session('uid');
        $pid=$r->input('id');
        $d['prod_id'] = $pid;
        $data=$this->obj->selectcart('cart','product',$sid);
        foreach($data as $order)
        {
            $chkData['userid']=$sid;
            $chkData['name']=$r->input('name');;

            $quantity = $order->quantity;
            $chkData['quantity'] = $quantity;
//            $chkData['total']=$order->quantity;
//            $tamt = $r->input('tpricecoin');

            $chkData['total']=$order->tprice;
            $pid = $order->prod_id;
            $chkData['prod_id']=$pid;
            $chkData['address']=$r->input('address');
            $chkData['date']=date('y-m-d');
            $this->obj->insertData('buynow',$chkData);

            $totstock = $this->obj->getstock('product',$pid);

            $tot = $totstock - $quantity;
//                echo $tot;
//        exit();
            $total['stock']=$tot;
            $this->obj->updatestock('product',$total,$pid);

            $conis['points']=$order->coins;
            $conis['prod_id']=$order->prod_id;
            $conis['userid']=$sid;

            $this->obj->insertData('coins',$conis); //insert into coin table
        }
        $points= $r->input('coins');//get coins from form input

        $totcoin=$this->obj->getcoin('userprofile',$sid); //get value of coin from user table
        $tot=$totcoin + $points; //calculate total coins
        $userCoin['user_coins']=$tot;
        $this->obj->updateCoins('userprofile',$userCoin,$sid);//update user table
//        $this->obj->deleteData('checkout',$sid); //delete checkout table
        $data['csum'] = $this->obj->selectCartSum('cart', $sid);
        $this->obj->deleteCartData('cart',$sid,$pid);
        return redirect('/cartpayment');
    }



//    public function coins(Request $r)
//    {
//
//        $id=session('uid');
//        $d['userid']=$id;
//
//        $d['prod_id']=$r->input('id');
//        $d['points'] = $r->input('points');
//
//
//        $this->obj->coins('coins',$id);
//        return redirect('/');
//
//    }

    public function order()
    {
        $id = session('uid');
        $data['result5'] = $this->obj->view('userprofile', $id);
//        $data['result3'] = $this->obj->selectuserprod('product',$id);
//
//        $data['result7'] = $this->obj->order('buynow',$id);
        $data['result6'] = $this->obj->joiningu('product', 'buynow', $id);

        $data['result1'] = $this->obj->cat('categories');

        return view('user.order', $data);
    }

    public function profileuser()
    {
        $id = session('uid');
        $data['result1'] = $this->obj->cat('categories');
        $data['result5'] = $this->obj->view('userprofile', $id);
        $data['result'] = $this->obj->profileuser('userprofile', $id);
        $data['result2'] = $this->obj->joiningu('product', 'buynow', $id);

        return view('user.profileuser', $data);
    }

    public function edituser()
    {
        $id = session('uid');

        $data['result1'] = $this->obj->cat('categories');
        $data['result5'] = $this->obj->view('userprofile', $id);
//        $data['result'] = $this->obj->profileuser('userprofile', $id);
//         $this->obj->edituser('userprofile', $id);

        return view('user.edituser', $data);

    }
    public function updateuser(Request $r)
    {
        $id = session('uid');
        $d['username'] = $r->input('name');
        $d['mobile'] = $r->input('mobile');
        $email = $r->input('email');
        $password = $r->input('password');
        $d['email'] = $email;
        $d['password'] = $password;
        $d['address'] = $r->input('address');

        $this->obj->updateuser('userprofile', $id,$d);

        return redirect('/profileuser');

    }

    public function updatecart(Request $req, $id)
    {
        $uid = $req->input('userid');
//        $price = $req->input('sell_price');
        $quantity = $req->input('quantity');
        $total = $req->input('tprice');
        $data = ['userid' => $uid,
//            'sell_price' => $price,
            'quantity' => $quantity,
            'tprice' => $total];

         $this->obj->updatecart('cart', $data, $id);

    }
    public function searchuser(Request $request){

        $search = $request->input('search');

        $d['result2']=$this->obj->searchuser('product','categories','sub_cat',$search);

        return redirect()->back();
    }
}

