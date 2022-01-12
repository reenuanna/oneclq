<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class usermodel extends Model
{
    use HasFactory;

    public function selectproductdetails($table)
    {
        return DB::table($table)->where('status','=',1 )->get();

    }
    public function selectcat($table)
    {
        return DB::table($table)->get();

    }
    public function cat($table)
    {
        return DB::table($table)->get();

    }
    public function joincat($products,$categories,$sub_cat,$id)
    {
        return DB::table($products)->join($categories,'categories.cat_id','=','product.brand')->join($sub_cat,'sub_cat.sub_id','=','product.cat')->where('categories.cat_id','=',$id)->get();

    }

    public function joiningprod($products,$categories,$sub_cat)
    {
        return DB::table($products)->join($categories,'categories.cat_id','=','product.brand')->join($sub_cat,'sub_cat.sub_id','=','product.cat')->get();
    }

    public function selectprod($table)
    {
//    return DB::table($table)->simplePaginate(7);
    return DB::table($table)->get();

    }
    public function selectprodpay($table,$id)
    {
//    return DB::table($table)->simplePaginate(7);
        return DB::table($table)->where('prod_id','=',$id)->get();

    }
    public function seemore($table)
    {
        return DB::table($table)->get();

    }

    public function selectuserprod($table,$id)
    {
        return DB::table($table)->where('prod_id',$id)->get();

    }

    public function cart($table)
    {

        return DB::table($table)->get();

    }
    public function payment($table,$id)
    {
        return DB::table($table)->where('userid',$id)->latest('buyid')->first();

    }
    public function cartpayment($table,$id)
    {
        return DB::table($table)->where('userid',$id)->where('paymentstatus','=',0)->get();

    }
    public function selectorderSum($table,$id)
    {
        return DB::table($table)->select(DB::raw("SUM(total) as csum "))->where('userid',$id)->where('paymentstatus','=',0)->get();
    }

    public function prodcart($table,$data)
    {
        DB::table($table)->insert($data);
    }

    public function joiningcart($products,$cart,$userprofile,$id)
    {
//        $sessid=session('id');
        return DB::table($products)->join($cart,'cart.prod_id','=','product.prod_id')->join($userprofile,'userprofile.uid','=','cart.userid')->where('userprofile.uid',$id)->get();
    }

    public function selectcart($cart,$products,$sid)
    {
        return DB::table($cart)->join($products,'cart.prod_id','=','product.prod_id')->where('cart.userid',$sid)->get();
    }

    public function insertData($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function deleteData($table,$id)
    {
        DB::table($table)->where('uid',$id)->delete();
    }


    public function deleteCartData($table,$sid,$id)
    {
        DB::table($table)->where('userid',$sid)->where('prod_id',$id)->delete();
    }
    public function userprofile($table)
    {
        return DB::table($table)->get();

    }
    public function updatecart($table,$data,$id)
    {
        DB::table($table)->where('prod_id',$id)->update($data);

    }
    public function updatemycart($table,$data,$id,$sid)
    {
        DB::table($table)->where('prod_id',$id)->where('userid',$sid)->update($data);

    }

public function updateuser($table,$id,$d)
{
    DB::table($table)->where('uid',$id)->update($d);

}
    public function selectCartSum($table,$id)
    {
        return DB::table($table)->select(DB::raw("SUM(tprice) as csum , SUM(coins) as cosum"))->where('userid',$id)->get();
    }

    public function ifdata($table,$prod_id,$uid)
    {
        return DB::table($table)->where('prod_id',$prod_id)->where('userid',$uid)->exists();
    }
    public function view($table,$id)
    {
        return DB::table($table)->where('uid',$id)->get();

    }
    public function viewadd($table,$id)
    {
        return DB::table($table)->where('prod_id',$id)->get();

    }
    public function viewoffer($table,$id)
    {
        return DB::table($table)->where('prod_id',$id)->get();

    }
    public function updateaddress($table,$id)
    {
        return DB::table($table)->where('userid',$id)->insert();
    }
    public function getcoin($table,$id)
    {
        return DB::table($table)->where('uid',$id)->sum('user_coins');
    }
    public function getstock($table,$id)
    {
        return DB::table($table)->where('prod_id',$id)->sum('stock');
    }
    public function updatecoins($table,$data,$id)
    {
        return DB::table($table)->where('uid',$id)->update($data);
    }
    public function updatestock($table,$data,$id)
    {
        return DB::table($table)->where('prod_id',$id)->update($data);
    }
    public function updatestatus($table,$data,$id,$sid)
    {
        return DB::table($table)->where('prod_id',$id)->where('userid',$sid)->update($data);
    }
    public function viewcheckout($product,$checkout,$sid)
    {
        return DB::table($product)->join($checkout,'checkout.prod_id','=','product.prod_id')->where('checkout.uid',$sid)->get();

    }
    public  function deleteuser($table,$id,$d)
    {
        DB::table($table)->where('uid','=',$id)->update($d);

    }
    public function viewcart($product,$cart,$sid,$id)
    {
//        return DB::table($product)->join($cart,'cart.prod_id','=','product.prod_id')->where('cart.userid',$sid)->get();
//
//    }
//    public function selectCartByPro($table1,$table2,$id,$uid)
//    {
        return DB::table($product)->join($cart,'product.prod_id','=','cart.prod_id')->where('cart.userid',$sid)->where('cart.prod_id',$id)->get();
    }
    public function cartcheckout($product,$cart,$sid,$id)
    {
        return DB::table($product)->join($cart,'cart.prod_id','=','product.prod_id')->where('cart.userid',$sid)->where('cart.prod_id',$id)->get();

    }
    public function updateData($table,$sid,$id,$d)
{
     DB::table($table)->where('cart.userid',$sid)->where('cart.prod_id',$id)->update($d);

}

    public function viewadds($review,$userprofile,$id)
    {
        return DB::table($review)->join($userprofile,'userprofile.uid','=','review.user_id')->where('review.prod_id',$id)->get();

    }

    public function viewquesans($quesans,$userprofile,$id)
    {
        return DB::table($quesans)->join($userprofile,'userprofile.uid','=','quesans.user_id')->where('quesans.prod_id',$id)->get();

    }

    public function verifyuser($table,$email,$password)
    {
        $data = DB::table($table)->where('email', '=', $email)->where('password', '=', $password)->get();
        $cnd = $data->count();
        if ($cnd == 0) {
            return false;
        } else {
            return $data;
        }
    }

    public function login($table,$email,$password)
    {
        $data = DB::table($table)->where('email', '=', $email)->where('password', '=', $password)->first();

            return $data;
    }


    public function userreg($table,$data)
    {
        DB::table($table)->insert($data);
//        $user = User::where('email', '=', Input::get('email'));

    }


    public function viewreg($table)
    {
         DB::table($table)->get();

    }
    public function userlogin($table)
    {
        DB::table($table)->get();

    }
    public function buynow($table,$d)
    {
        DB::table($table)->insert($d);

    }
    public  function deletec($table,$sid,$pid)
    {
        DB::table($table)->where('userid','=',$sid)->where('prod_id','=',$pid)->delete();
    }
    public  function deletecart($table,$id,$sid)
    {
        DB::table($table)->where('prod_id','=',$id)->where('userid','=',$sid)->delete();
    }

    public function order($table)
    {
        DB::table($table)->get();

    }
    public function edituser($table,$id)
    {
        DB::table($table)->where('uid','=',$id)->get();

    }
    public function userstatus($table,$d,$id)
    {
        DB::table($table)->where('uid','=',$id)->update($d);

    }
    public function joiningu($buynow,$product,$id)
    {
        return DB::table($buynow)->join($product,'buynow.buyid','=','product.prod_id')->where('buynow.userid',$id)->get();
    }
    public function review($buynow,$product,$sid,$id)
    {
        return DB::table($buynow)->join($product,'buynow.buyid','=','product.prod_id')->where('buynow.prod_id',$id)->where('buynow.userid',$sid)->get();
    }
    public function profileuser($table,$id)
    {
        return DB::table($table)->where('uid',$id)->get();

    }
    public function coins($table,$data)
    {
        DB::table($table)->insert($data);

    }
    public function reviewgive($table,$data)
    {
        DB::table($table)->insert($data);

    }
    public function quesans($table,$data)
    {
        DB::table($table)->insert($data);

    }

    public function checkout($table,$data)
    {
        DB::table($table)->insert($data);

    }
    public function coinselect($table,$id)
    {
//        return DB::table($table)->sum('points')->where('userid',$id)->get();
                return DB::table($table)->select(DB::raw("SUM(points) as points"))->where('userid',$id)->get();

//        select(DB::raw("SUM(points)"));/
    }
    public function joinings($products,$categories,$sub_cat)
    {
//        $sessid=session('id');
        return DB::table($products)->join($categories,'categories.cat_id','=','product.brand')->join($sub_cat,'sub_cat.sub_id','=','product.cat')->get();
    }
    public function updatepass($table,$password,$email)
    {
         DB::table($table)->where('email',$email)->orwhere('mobile',$email)->update($password);

    }
    public function searchuser($products,$categories,$sub_cat,$search)
    {
        return DB::table($products)->join($categories,'categories.cat_id','=','product.brand')->join($sub_cat,'sub_cat.cat_id','=','categories.cat_id')->where('product.prod_name', 'LIKE', $search.'%')->get();
    }
}
