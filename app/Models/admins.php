<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class admins extends Model
{
    use HasFactory;

    public function stored($table, $data)
    {
        DB::table($table)->insert($data);
    }

    public function selectvendordetails($table)
    {
        return DB::table($table)->get();

    }

    public function verifyl($table, $email, $password)
    {
        return DB::table($table)->where('email', '=', $email)->where('password', '=', $password)->first();

    }

    public function viewmore($table, $id)
    {
        return DB::table($table)->where('id', $id)->get();

    }

    public function view($table, $id)
    {
        return DB::table($table)->where('id', $id)->get();

    }

    public function viewvendorcategory($vendorcategory, $categories, $id)
    {
        return DB::table($vendorcategory)->join($categories, 'categories.cat_id', '=', 'vendorcategory.category')->where('vendor_id', $id)->get();

    }

    public function upd($table, $id, $data)
    {
        DB::table($table)->where('id', $id)->update($data);


    }

    public function selectproductdetails($table)
    {
        return DB::table($table)->get();

    }

    public function moreproduct($table, $id)
    {
        return DB::table($table)->where('prod_id', $id)->get();

    }

    public function moreproductvend($table, $id)
    {
        return DB::table($table)->where('prod_id', $id)->get();

    }

    public function updd($table, $id, $data)
    {
        DB::table($table)->where('prod_id', $id)->update($data);


    }

    public function selectdetails($table)
    {
        return DB::table($table)->get();

    }

    public function selectData($table)
    {
        return DB::table($table)->get();

    }

    public function countapprove($table)
    {
        return DB::table($table)->where('status', '=', '1')->get()->count('prod_id');
    }

    public function countdisapprove($table)
    {
        return DB::table($table)->where('status', '=', '2')->get()->count('prod_id');
    }

    public function countpending($table)
    {
        return DB::table($table)->where('status', '=', '0')->get()->count('prod_id');
    }

    public function insertData($table, $data)
    {
        DB::table($table)->insert($data);
    }

    public function subcat($table, $id)
    {
        return DB::table($table)->where('cat_id', $id)->get();
//        return DB::table($table1)->where('name', $name)->get();

    }

    public function insertvalue($table, $data)
    {
        DB::table($table)->insert($data);
    }
//    public function store($table,$data,$id)
//        {
//        return DB::table($table)->insert($data);
//    }
    public function delet($id)
    {
        DB::table('categories')->where('cat_id', '=', $id)->delete();
    }

    public function deletprod($id)
    {
        DB::table('product')->where('prod_id', '=', $id)->delete();

    }

    public function withdrawprod($table, $data, $id)
    {
        DB::table($table)->where('prod_id', '=', $id)->update($data);

    }

    public function adminproductapprove($categories, $product, $sub_cat)
    {
        return DB::table($product)->join($categories, 'categories.cat_id', '=', 'product.brand')->join($sub_cat, 'sub_cat.sub_id', '=', 'product.cat')->where('product.status', '=', 1)->get();

    }

    public function adminproductdisapprove($product, $categories, $sub_cat)
    {
        return DB::table($product)->join($categories, 'categories.cat_id', '=', 'product.brand')->join($sub_cat, 'sub_cat.sub_id', '=', 'product.cat')->where('product.status', '=', 2)->get();

    }

    public function adminpendingproduct($product, $categories, $sub_cat)
    {

        return DB::table($product)->join($categories, 'categories.cat_id', '=', 'product.brand')->join($sub_cat, 'sub_cat.sub_id', '=', 'product.cat')->where('product.status', '=', 0)->get();

    }

    public function deletev($id)
    {
        DB::table('vsignup')->where('id', '=', $id)->delete();
    }

    public function deletesub($id)
    {
        DB::table('sub_cat')->where('sub_id', '=', $id)->delete();
    }

    public function deletebtype($id)
    {
        DB::table('businesstype')->where('b_id', '=', $id)->delete();
    }

    public function productselect($table)
    {
        return DB::table($table)->get();

    }

    public function vend($table, $id, $data)
    {
        DB::table($table)->where('id', $id)->update($data);


    }


    public function vendorproduct($table, $id)
    {
        return DB::table($table)->where('vendor_id', $id)->get();

    }

    public function joining($products, $categories, $sub_cat, $id)
    {
//        $sessid=session('id');
        return DB::table($products)->join($categories, 'categories.cat_id', '=', 'product.brand')->join($sub_cat, 'sub_cat.sub_id', '=', 'product.cat')->where('product.vendor_id', $id)->get();
    }

    public function joiningprod($products, $categories, $sub_cat, $id)
    {
//        $sessid=session('id');
        return DB::table($products)->join($categories, 'categories.cat_id', '=', 'product.brand')->join($sub_cat, 'sub_cat.sub_id', '=', 'product.cat')->where('product.prod_id', $id)->get();
    }

    public function joinings($products, $categories, $sub_cat)
    {
//        $sessid=session('id');
        return DB::table($products)->join($categories, 'categories.cat_id', '=', 'product.brand')->join($sub_cat, 'sub_cat.sub_id', '=', 'product.cat')->get();
    }

    public function product($table)
    {
        return DB::table($table)->get();

    }

    public function getproduct($table, $from, $to)
    {
        return DB::table($table)->whereBetween('date', [$from, $to])->get();
    }

    public function categoryreport($buynow, $product, $categories)
    {
        return DB::table($buynow)->join($product, 'product.prod_id', '=', 'buynow.prod_id')->join($categories, 'categories.cat_id', '=', 'product.brand')->get();

    }

    public function joincustomer($products, $buynow, $vsignup, $userprofile)
    {
        return DB::table($products)->join($buynow, 'buynow.prod_id', '=', 'product.prod_id')->join($vsignup, 'vsignup.id', '=', 'product.vendor_id')->join($userprofile, 'userprofile.uid', '=', 'buynow.userid')->get();

    }

    public function search($products, $buynow, $userprofile, $vsignup, $search)
    {
        return DB::table($products)->join($buynow, 'buynow.prod_id', '=', 'product.prod_id')->join($vsignup, 'vsignup.id', '=', 'product.vendor_id')->join($userprofile, 'userprofile.uid', '=', 'buynow.userid')->where('userprofile.username', 'LIKE', $search . '%')->get();
//        return DB::table($vsignup)->where('name', 'LIKE', $search.'%')->get();
    }

    public function searchvend($buynow, $product, $vsignup, $userprofile, $search)
    {
        return DB::table($product)->join($buynow, 'buynow.prod_id', '=', 'product.prod_id')->join($vsignup, 'vsignup.id', '=', 'product.vendor_id')->join($userprofile, 'userprofile.uid', '=', 'buynow.userid')->where('vsignup.name', 'LIKE', $search . '%')->get();
    }

    public function searchprod($products, $categories, $sub_cat, $search)
    {
        return DB::table($products)->join($categories, 'categories.cat_id', '=', 'product.brand')->join($sub_cat, 'sub_cat.cat_id', '=', 'categories.cat_id')->where('product.prod_name', 'LIKE', $search . '%')->get();
    }

    public function searchcat($buynow, $product, $categories, $search)
    {
        return DB::table($buynow)->join($product, 'product.prod_id', '=', 'buynow.prod_id')->join($categories, 'categories.cat_id', '=', 'product.brand')->where('categories.cat_brand', 'LIKE', $search . '%')->get();
    }

    public function countvendor($table)
    {
        return DB::table($table)->count('id');
    }

    public function countproduct($table)
    {
        return DB::table($table)->count('prod_id');
    }

    public function counttype($table)
    {
        return DB::table($table)->count('b_id');
    }

    public function countcat($table)
    {
        return DB::table($table)->count('cat_id');
    }

    public function countbuy($table)
    {
        return DB::table($table)->count('buyid');
    }

    public function viewdelte($table)
    {
        return DB::table($table)->where('regstatus', '=', 3)->get();
    }

    public function deactivate($table, $id, $d)
    {
        DB::table($table)->where('id', '=', $id)->update($d);

    }
    public function deleteacc($id)
    {
        DB::table('vsignup')->where('id', '=', $id)->delete();
    }
    public function userdelete($table)
    {
        return DB::table($table)->where('status', '=', 2)->get();
    }

    public function userdeactivate($table, $id, $d)
    {
        DB::table($table)->where('uid', '=', $id)->update($d);

    }
    public function deleteuser($id)
    {
        DB::table('userprofile')->where('uid', '=', $id)->delete();
    }
    public function mobtake($table,$id)
    {
        return DB::table($table)->where('id','=',$id)->get('mobile');

    }
}

