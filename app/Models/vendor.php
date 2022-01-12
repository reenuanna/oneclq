<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class vendor extends Model
{
    use HasFactory;

    public function verify($table,$mobile,$otp_num)
    {
        $data = DB::table($table)->where('mobile', '=', $mobile)->where('otp', '=', $otp_num)->first();
        return $data;
        }

    public function stored($table,$data)
    {
         DB::table($table)->insert($data);
    }
    public  function viewdata($table)
    {
        return DB::table($table)->get();
    }
    public function vendorverify($table)
    {
        return DB::table($table)->latest('id')->first();
    }

    public function updatevendorpass($table,$data,$email)
    {
        DB::table($table)->where('email',$email)->orwhere('mobile',$email)->update($data);

    }
    public function storex($table,$data)
    {
        DB::table($table)->insert($data);
    }

    public function signverify()
    {
    }
    public function selectId($table,$mobile)
    {
        $data = DB::table($table)->where('mobile', '=', $mobile)->get();
        return $data;

    }
    public function cat($table)
    {
        return DB::table($table)->get();

    }
    public function upd($table,$id,$data)
    {
        DB::table($table)->where('id',$id)->update($data);

    }
    public function verifyy($table,$email,$password)
    {
        return DB::table($table)->where('email','=',$email)->where('password','=',$password)->first();

    }
    public function selectIds($table,$cond,$id)
    {
        $data = DB::table($table)->where($cond,$id)->get();
//        $data1 = DB::table($table)->where('prod_id', '=', $id)->get();
        return $data;

    }
    public function selectIdss($table,$cond,$id)
    {
        $data = DB::table($table)->where($cond,$id)->simplePaginate(3);
//        $data1 = DB::table($table)->where('prod_id', '=', $id)->get();
        return $data;

    }
    public function selectIdd($table,$id)
    {
        $data = DB::table($table)->where('id', '=', $id)->get();
//        $data1 = DB::table($table)->where('prod_id', '=', $id)->get();
        return $data;

    }



    public  function addproduct($table)
    {
        return DB::table($table)->get();
    }
    public function veData($table,$sid)
    {
      return  DB::table($table)->where('vendor_id',$sid)->get();
    }


    public  function saveproduct($table,$data)
    {
        DB::table($table)->insert($data);
    }

    public function selectvendordetails($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();

    }

    public function view($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();

    }
    public function productapprove($categories,$product,$sub_cat,$sessid)
    {
//        return DB::table($table)->where('status','=',1)->get();
//        return DB::table($categories)->join($product,'categories.cat_id','=','product.cat')->join($sub_cat,'sub_cat.cat_id','=','product.cat')->where('product.vendor_id','=',$sessid)->where('product.status','=',1)->get();
//        return DB::table($categories)->join($product,'product.brand','=','categories.cat_id')->where('product.vendor_id','=',$sessid)->where('product.status','=',1)->get();
        return DB::table($product)->join($categories,'categories.cat_id','=','product.brand')->join($sub_cat,'sub_cat.sub_id','=','product.cat')->where('product.vendor_id',$sessid)->where('product.status','=',1)->get();

    }
    public function productdisapprove($product,$categories,$sub_cat,$sessid)
    {
//        return DB::table($table)->get();
//        return DB::table($categories)->join($product,'categories.cat_id','=','product.cat')->join($sub_cat,'sub_cat.cat_id','=','product.cat')->where('product.status','=',2)->get();
        return DB::table($product)->join($categories,'categories.cat_id','=','product.brand')->join($sub_cat,'sub_cat.sub_id','=','product.cat')->where('product.vendor_id',$sessid)->where('product.status','=',2)->get();

    }
    public function pendingproduct($product,$categories,$sub_cat,$sessid)
    {
//        return DB::table($table)->get();
        return DB::table($product)->join($categories,'categories.cat_id','=','product.brand')->join($sub_cat,'sub_cat.sub_id','=','product.cat')->where('product.vendor_id',$sessid)->where('product.status','=',0)->get();

    }
    public function vemoreproduct($table,$id)
    {
        return DB::table($table)->where('prod_id',$id)->get();

    }
    public function veproductdetails($table,$id)
    {
        return DB::table($table)->where('prod_id',$id)->get();

    }
    public  function vendorcat($table,$sessid)
    {

        return DB::table($table)->where('vendor_id',$sessid)->get();
    }

    public function veinsertData($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function viewvendorcategory($vendorcategory,$categories,$id)
    {
        return DB::table($vendorcategory)->join($categories,'categories.cat_id','=','vendorcategory.category')->where('vendor_id',$id)->get();

    }
    public function viewIdd($table,$id)
    {
        $data = DB::table($table)->where('id', '=', $id)->get();
//        $data1 = DB::table($table)->where('prod_id', '=', $id)->get();
        return $data;

    }

    public function reivewview($product,$review,$vsignup,$userprofile,$id)
    {
        return DB::table($product)->join($review,'review.prod_id','=','product.prod_id')->join($vsignup,'vsignup.id','=','product.vendor_id')->join($userprofile,'userprofile.uid','=','review.user_id')->where('vsignup.id',$id)->get();

    }


    public  function viewproduct($table)
    {
        return DB::table($table)->get();
    }
    public function viewpData($table,$sid)
    {
        return  DB::table($table)->where('cat_id',$sid)->get();
    }
    public function selectDataById($table)
    {
        return  DB::table($table)->get();
    }
    public function viewcatIdd($table)
    {
        $data = DB::table($table)->get();
        return $data;

    }
    public function selectById($table,$id)
    {
        return  DB::table($table)->where('cat_id',$id)->get();
    }

    public  function pupd($table,$id,$data)
    {
        DB::table($table)->where('id',$id)->update($data);
    }
    public function joining($categories,$vendorcategory,$sessid)
    {
        return DB::table($categories)->join($vendorcategory,'categories.cat_id','=','vendorcategory.category')->where('vendorcategory.vendor_id',$sessid)->get();
    }
    public function joiningprod($products,$categories,$sub_cat,$id)
    {
//        $sessid=session('id');
        return DB::table($products)->join($categories,'categories.cat_id','=','product.brand')->join($sub_cat,'sub_cat.sub_id','=','product.cat')->where('product.prod_id',$id)->get();
    }
    public function joiningdis($categories,$vendorcategory,$sessid)
    {
        return DB::table($categories)->join($vendorcategory,'categories.cat_id','=','vendorcategory.category')->where('vendorcategory.vendor_id',$sessid)->get();
    }
    public  function editvendor($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
    public  function updateprof($table,$id,$data)
    {
        DB::table($table)->where('id',$id)->update($data);
    }

    public function productvendor($table)
    {
        return DB::table($table)->get();

    }
    public function mobtake($table,$id)
    {
        return DB::table($table)->where('id','=',$id)->get();

    }
    public  function deletevprod($id)
    {
        DB::table('product')->where('prod_id','=',$id)->delete();

    }
    public  function deletevendor($table,$id,$d)
    {
        DB::table($table)->where('id','=',$id)->update($d);

    }

    public  function vendorcatdelte($sessid,$id)
    {
        DB::table('vendorcategory')->where('vendor_id','=',$sessid)->where('cat_id','=',$id)->delete();
    }


    public  function editprod($table,$id)
    {
        return DB::table($table)->where('prod_id',$id)->get();
    }
    public  function updateprod($table,$id,$data)
    {
        DB::table($table)->where('prod_id',$id)->update($data);
    }
    public function productsignin($vsignup,$buynow,$product,$id)
    {
        return DB::table($product)->join($buynow, 'buynow.prod_id', '=','product.prod_id' )->join($vsignup, 'vsignup.id', '=','product.vendor_id' )->where('id',$id)->get();

    }
    public function productsigninpay($vsignup,$buynow,$product,$payment,$id)
    {
        return DB::table($buynow)->join($product, 'buynow.prod_id', '=','product.prod_id' )->join($payment, 'payment.buy_id', '=','buynow.buyid' )->where('buynow.paymentstatus','=',1)->where('product.vendor_id',$id)->get();

    }

    public function approveorder($table,$id,$data)
    {
        DB::table($table)->where('buyid',$id)->update($data);


    }

    public function viewproductdetails($table)
    {
        return DB::table($table)->get();

    }
    public function joiningcart($products,$buynow,$userprofile,$id)
    {
//        $sessid=session('id');
//        echo $id;
//        exit;
        return DB::table($products)->join($buynow,'buynow.prod_id','=','product.prod_id')->join($userprofile,'userprofile.uid','=','buynow.userid')->where('buynow.buyid',$id)->get();
    }

    public function productreport($table)
    {
        return DB::table($table)->get();

    }
    public function addoffer($table)
    {
        return DB::table($table)->get();

    }
    public function addoffers($table,$offer,$id)
    {
        return DB::table($table)->where('prod_id','=',$id)->update($offer);

    }
    public  function deleteoffer($table,$data,$id)
    {
        DB::table($table)->where('prod_id','=',$id)->update($data);
    }
    public  function withdrawprodv($table,$data,$id)
    {
        DB::table($table)->where('prod_id','=',$id)->update($data);

    }
    public function countproduct($table,$id)
    {
        return DB::table($table)->where('vendor_id','=',$id)->count('prod_id');
    }

    public function countcat($table,$id)
    {
        return DB::table($table)->where('vendor_id','=',$id)->count('cat_id');
    }
    public function countbuy($buynow,$product,$id)
    {
        return DB::table($buynow)->join($product, 'product.prod_id', '=','buynow.prod_id' )->where('vendor_id','=',$id)->count('buyid');
    }
     public function countapprove($table,$id)
    {
    return DB::table($table)->where('vendor_id','=',$id)->where('status','=','1')->get()->count('prod_id');
    }
    public function countdisapprove($table,$id)
    {
        return DB::table($table)->where('vendor_id','=',$id)->where('status','=','2')->get()->count('prod_id');
    }
    public function countpending($table,$id)
    {
        return DB::table($table)->where('vendor_id','=',$id)->where('status','=','0')->get()->count('prod_id');
    }
}



