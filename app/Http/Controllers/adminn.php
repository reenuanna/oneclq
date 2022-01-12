<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\admins;
use Nexmo\Laravel\Facade\Nexmo;

class adminn extends Controller
{
    public $obj;

    //
    public function  __construct()
    {
        $this->obj = new admins();
    }

    public function adminlogin()
    {
//        $data['email'] = $request->input('email');
//        $data['password'] = $request->input('password');
//
//        $this->obj->stored('adminlog', $data);

        return view('admin.adminlogin');
    }

    public function verifyl(Request $r)
    {
        request()->validate([
            'email'=>'required',
            'password'=>'required|string|min:6|'
        ]);
//        $aid = session('aid');
//echo $aid;
//            exit();
        $email = $r->input('email');
//        ech/o $email;
        $password = $r->input('password');
        echo $password;
        $data= $this->obj->verifyl('adminlog', $email, $password);
//        print_r($data);

        if(isset($data))
        {

            $r->session()->put(array('sessid'=>$data->aid));
            return redirect('/admin');

        }
        else {
//                echo " invalid login";
//            return redirect('/adminlogin');
            return redirect('/adminlogin')->with('status', 'Invalid login , Please verify  Password');

        }

    }

    public function vaccdelete()
    {
        $data['result'] = $this->obj->viewdelte('vsignup');


        return view('admin.vaccdelete',$data);
//        return redirect()->back();

    }
    public function deactivate($id)
    {
        $d['adminstatus'] = '0';
        $this->obj->deactivate('vsignup',$id,$d);


//        return view('admin.vaccdelete',$data);
        return redirect()->back();

    }
    public function deleteacc($id)

    {
        $this->obj->deleteacc($id);

        return redirect()->back();

    }
//        return redirect()->back();

    public function userdelete()
    {
        $data['result'] = $this->obj->userdelete('userprofile');


        return view('admin.userdelete',$data);
//        return redirect()->back();

    }
    public function userdeactivate($id)
    {
        $d['status'] = '0';
        $this->obj->userdeactivate('userprofile',$id,$d);


//        return view('admin.vaccdelete',$data);
        return redirect()->back();

    }
    public function deleteuser($id)

    {
        $this->obj->deleteuser($id);

        return redirect()->back();

    }
    public function admin()
    {

            $data['vcount'] = $this->obj->countvendor('vsignup');
            $data['pcount'] = $this->obj->countproduct('product');
            $data['bcount'] = $this->obj->counttype('businesstype');
            $data['catcount'] = $this->obj->countcat('categories');
            $data['buycount'] = $this->obj->countbuy('buynow');
        $data['approvecount'] = $this->obj->countapprove('product');
        $data['countdisapprove'] = $this->obj->countdisapprove('product');
        $data['countpending'] = $this->obj->countpending('product');

            return view('admin.adminpanel', $data);

//    }
//    else
//{
//    return redirect('/adminlogin');

//}
}
    public function adminvendor()
    {
        $data['result']=$this->obj->selectvendordetails('vsignup');
        return view('admin.adminvendor',$data);
    }
    public function viewmore($id)
    {
        $data['result']=$this->obj->viewmore('vsignup',$id);
        return view('admin.viewmore',$data);

    }
    public function view(Request $request,$id)
    {
        $data['reason'] = $request->input('reason');
        $data['result1']=$this->obj->viewvendorcategory('vendorcategory','categories',$id);
        $data['result']=$this->obj->view('vsignup',$id);
        return view('admin.view',$data);


    }
    public function approve($id)
    {
//        echo $id;
//        exit();
        $data['adminstatus'] = 1;
        $data['reason']='Approved';

        $this->obj->upd('vsignup',$id,$data);
        $d['vendor_id'] = $id;
       $mob= $this->obj->mobtake('vsignup',$id);

        foreach($mob as $val)
        {
            $mobv =  $val->mobile;
        }



        Nexmo::message()->send([
            'to'=>$mobv,
            'from'=>'919656946547',
            'text'=>'Your Vendor Account has approved from OneCliq ',
        ]);
        return redirect('/adminvendor');
    }
    public function disapprove(Request $r,$id)
    {
//        echo $id;
//        exit();
                $data['reason'] = $r->input('reason');

        $data['adminstatus'] = 2;
        $this->obj->upd('vsignup',$id,$data);


        $d['vendor_id'] = $id;
        $mob= $this->obj->mobtake('vsignup',$id);

        foreach($mob as $val)
        {
            $mobv =  $val->mobile;
        }



        Nexmo::message()->send([
            'to'=>$mobv,
            'from'=>'919656946547',
            'text'=>'Your Vendor Account has Rejected . check in profile  from OneCliq ',
        ]);
        return redirect('/adminvendor');

//        $data['reason'] = $r->input('reason');

//        $this->obj->vend('vsignup',$id,$data);
//        return redirect()->back();
//        $data1['result']=$this->obj->vendorproduct('product',$id);
//        return view('admin.productselect',$data1);
//        return redirect('/admin/vendor');

    }
    public function productdetails()
    {
//        $sessid=session('id');
//        $data['result']=$this->obj->selectvendordetails('vsignup');
        $data['result1'] = $this->obj->joinings('product','categories','sub_cat');
//        print_r($data);
//        exit();
        return view('admin.productdetails',$data);

    }
//    public function moreproduct()
//    {
//        $data['result']=$this->obj->moreproduct('product');
//        return view('admin.moreproduct',$data);
//    }
    public function moreproduct($id)
    {

//        $data['result']=$this->obj->moreproduct('product',$id);
        $data['result'] = $this->obj->joiningprod('product','categories','sub_cat',$id);

        return view('admin.moreproduct',$data);


    }
    public function approveprod($id)
    {
//        echo $id;
//        exit();
        $data['status'] = 1;
        $data['reason']='Approved';
        $this->obj->updd('product',$id,$data);
//        return redirect()->back();
//        return back();
//        $data1['result']=$this->obj->vendorproduct('product',$id);
//        return view('admin.productselect',$data1);
        return redirect('/productdetails');

    }
    public function disapproveprod(Request $r,$id)
    {
//        echo $id;
//        exit();
        $data['status'] = 2;
        $data['reason'] = $r->input('reason');

        $this->obj->updd('product',$id,$data);
//        return redirect()->back();
//        $data1['result']=$this->obj->vendorproduct('product',$id);
//        return view('admin.productselect',$data1);
        return redirect('/productdetails');

    }
    public function moreproductvend($id)
    {

//        $data['result']=$this->obj->moreproduct('product',$id);
        $data['result'] = $this->obj->joiningprod('product','categories','sub_cat',$id);

        return view('admin.moreproductvend',$data);


    }

    public function approveprodvend($id)
    {
//        echo $id;
//        exit();
        $data['status'] = 1;
        $data['reason']='Approved';
        $this->obj->updd('product',$id,$data);
//        return redirect()->back();
//        return back();
//        $data1['result']=$this->obj->vendorproduct('product',$id);
//        return view('admin.productselect',$data1);
        return redirect('/productdetails');

    }
    public function disapproveprodvend(Request $r,$id)
    {
//        echo $id;
//        exit();
        $data['status'] = 2;
        $data['reason'] = $r->input('reason');

        $this->obj->updd('product',$id,$data);
//        return redirect()->back();
//        $data1['result']=$this->obj->vendorproduct('product',$id);
//        return view('admin.productselect',$data1);
        return redirect('/productdetails');

    }
    public function details()
    {
        $data['result']=$this->obj->selectdetails('product');
        return view('admin.productdetails',$data);
    }

    public function showcategory()
    {
        $data['result']=$this->obj->selectData('categories');
        return view('admin.showcategory',$data);
    }
    public function category(Request $request)
    {
        $data['cat_brand']=$request->input('category');
        $this->obj->insertData('categories',$data);
        return redirect('/showcategory');
    }

    public function subcat($id)
    {
        $data['result']= $this->obj->subcat('categories',$id);
        $data['result1']= $this->obj->subcat('sub_cat',$id);
//        print_r($data);
//        $id= $this->obj->store('categories',$data);
//        $data1['cat_id']=$id;

        return view('admin.subcat',$data);

    }
    public function adminproductapprove()
    {

        $data['result1'] = $this->obj->adminproductapprove('categories','product','sub_cat');

        return view('admin.adminproductapprove', $data);
    }

    public function adminproductdisapprove()
    {

        $data['result1'] = $this->obj->adminproductdisapprove('product', 'categories', 'sub_cat');

        return view('admin.adminproductdisapprove', $data);
    }

    public function adminpendingproduct()
    {


        $data['result1'] = $this->obj->adminpendingproduct('product', 'categories', 'sub_cat');
        return view('admin.adminpendingproduct', $data);
    }

    public function subcategory(Request $request,$id)
    {
        $data['cat_id']=$id;
        $data['name']=$request->input('sub');
        $this->obj->insertvalue('sub_cat',$data);
        return redirect()->back();
    }


    public function businesstype()
    {
        $data['result']=$this->obj->selectData('businesstype');
        return view('admin.businesstype',$data);
    }
    public function addbusiness(Request $request)
    {
        $data['type']=$request->input('type');
        $this->obj->insertData('businesstype',$data);
        return redirect('/businesstype');
    }
    public function logout(Request $request)
    {
        $request->session()->forget('id');
        return redirect('/adminlogin');
    }
    public function back()
    {

        return redirect('/showcategory');
    }
    public function backv()
    {

        return redirect('/adminvendor');
    }
    public function backp()
    {
//        return redirect('/vendorproduct');

        return redirect('/productdetails');
    }
    public function delete($id)
    {
        $this->obj->delet($id);

        return redirect('/showcategory');

    }
    public function deleteprod($id)
    {

        $this->obj->deletprod($id);

        return redirect('/productdetails');

    }
    public function withdrawprod($id)
    {
        $data['status'] = 0;

        $this->obj->withdrawprod('product',$data,$id);

        return redirect('/productdetails');

    }

    public function deletev($id)
    {
        $this->obj->deletev($id);

        return redirect('/adminvendor');

    }
    public function deletesub($id)
    {
        $this->obj->deletesub($id);

        return redirect()->back();

    }
    public function deletebtype($id)
    {
        $this->obj->deletebtype($id);

        return redirect()->back();

    }
    public function productselect()
    {
        $data['result']=$this->obj->productselect('vsignup');
        return view('admin.productselect',$data);
    }

    public function vendorproduct($id)
    {
//        $data['result']=$this->obj->vendorproduct('product',$id);
        $data['result'] = $this->obj->joining('product','categories','sub_cat',$id);

        return view('admin.vendorproduct',$data);


    }
    public function backvprod()
    {

        return redirect('/productselect');
    }
    public function addbuss(Request $r)
    {
        request()->validate(['business'=>'required',
            'business1'=>'required|confirmed']);
        $data['type']=$r->input('business');

        $this->obj->insertData('business_types',$data);
        return redirect('/businesstype');
    }
    public function product()
    {
        $data['result']=$this->obj->product('buynow');
        return view('admin.product',$data);
    }
    public  function getproduct(Request $request)
    {
        $from=$request->input('from');
        $to = $request->input('to');
        $data['result']=$this->obj->getproduct('buynow',$from,$to);

//        return redirect('/admin.product',$data);
        return view('admin.product',$data);
    }

    public function categoryreport()
    {
        $data['result']=$this->obj->categoryreport('buynow','product','categories');
        return view('admin.categoryreport',$data);
    }


    public function productbased()
    {
//        $sessid=session('id');
//        $data['result']=$this->obj->selectvendordetails('vsignup');
         $data['result1'] = $this->obj->joinings('product','categories','sub_cat');
//        print_r($data);
//        exit();
        return view('admin.productbased',$data);

    }
    public function Vendorbased()
    {
        $data['result']=$this->obj->joincustomer('buynow','product','vsignup','userprofile');
        return view('admin.Vendorbased',$data);
    }
    public function customer()
    {
    $data['result']=$this->obj->joincustomer('buynow','product','vsignup','userprofile');
    return view('admin.customer',$data);
    }

    public function search(Request $request)
    {

        $search = $request->input('search');
        $data['result']=$this->obj->search('product','buynow','userprofile','vsignup',$search);

        return view('admin.customer', $data);
    }
    public function searchvend(Request $request){

        $search = $request->input('search');
        $data['result']=$this->obj->searchvend('buynow','product','vsignup','userprofile',$search);

        return view('admin.Vendorbased', $data);
    }
    public function searchprod(Request $request){

        $search = $request->input('search');
        $data['result1']=$this->obj->searchprod('product','categories','sub_cat',$search);

        return view('admin.productbased', $data);
    }
    public function searchcat(Request $request){

        $search = $request->input('search');

//        $data['result']=$this->obj->searchcat('product','buynow','userprofile','vsignup','categories',$search);
        $data['result']=$this->obj->searchcat('buynow','product','categories',$search);

        return view('admin.categoryreport', $data);
    }


}
