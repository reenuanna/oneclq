<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendor;
use App\Mail\mailsend;
use Illuminate\Support\Facades\Mail;
use Nexmo\Laravel\Facade\Nexmo;

class vendors extends Controller
{
    //
    public $obj;

    public function  __construct()
    {
        $this->obj = new vendor();
    }

    public function index()
    {
        return view('vendorsignin');
    }
    public function verifyy(Request $r)
    {
        request()->validate([
            'email'=>'required',
            'password' => 'required|string|min:6|',

        ]);

        $email = $r->input('email');
        $password = $r->input('password');

        $data = $this->obj->verifyy('vsignup', $email, $password);

        if (isset($data))
        {

            $r->session()->put(array('sessid' => $data->id));
            return redirect('/vendordash');

        }
        else
        {
            return redirect('/vendor')->with('status', 'Invalid login , Please verify Email and Password');
        }

    }

    public function fpass()
    {

        return view('fpass');
    }

    public function send(Request $request)
    {
        request()->validate([
            'email'=>'required',


        ]);
        $email=$request->input('email');

        $data=[
            'title'=>'Onecliq Vendor Account: Password reset request',
            'body'=>'A password reset was requested for your Onecliq account.To confirm this request, and set a new password for your account, please
        go to the following web address:http://127.0.0.1:8000/newvendorpass'
        ];
        mail::to($email)->send(new mailsend($data));

        return redirect('/fpass')->with('msg','password Reset link has send to your email id , please login and check');
//        return redirect('/vendor');
    }
    public function newvendorpass()
    {

        return view('newvendorpass');
    }

    public function updatevendorpass(Request $request)
    {
        request()->validate([
            'email'=>'required',
            'txt_pass' => 'min:6',
            'txt_cpass' => 'required_with:txt_pass|same:txt_pass|min:6'

        ]);
        $email = $request->input('email');
        $data['password']=$request->input('txt_pass');
        $data['cpassword']=$request->input('txt_cpass');

        $this->obj->updatevendorpass('vsignup',$data,$email);
        return redirect('/vendor');
    }

    public function signup()
    {
        return view('vendorreg');
    }
    public function store(Request $request)
    {
        request()->validate([
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:12',

        ]);
        $mob=$request->input('mobile');
        $otp=$request->input('otp_num');
        $data['mobile']=$mob;
        $data['otp']= $otp;
//        $data['mobile'] = $request->input('mobile');
//        $data['otp'] = $request->input('otp_num');

        $this->obj->stored('sigin', $data);

        Nexmo::message()->send([
            'to'=>$mob,
            'from'=>'919656946547',
            'text'=>'Your OTP for registration is '.$otp. ' from OneCliq ',
        ]);
//        echo "send message";
        return redirect('/vendorverify');
    }



    public function verify(Request $r)
    {
        request()->validate([
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:12',
            'otp_num' => 'required|min:6|numeric',

        ]);

        $otp_num = $r->input('otp_num');
        $mobile = $r->input('mobile');
        $data = $this->obj->verify('sigin', $mobile, $otp_num);

        if ($data)
        {
            $r->session()->put(array('otpid'=>$data->mobile));
            return redirect('/verification');


        }
        else
        {

            return redirect('/vendorverify');
        }

    }




    public function verification()
    {
        $mobile= session('otpid');
        $data['result'] = $this->obj->selectId('sigin', $mobile);

        return view('verify',$data);

    }
    public function vendorverify()
    {
        $a['data'] = $this->obj->vendorverify('sigin');

        return view('vendorverify', $a);

    }

    public function storex(Request $request)
    {

        request()->validate([
            'txt_name' =>' required|alpha',
            'txt_mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:12',
            'txt_address' =>' required',
            'txt_pin' => 'required|numeric|digits:6',
            'txt_email'=>'required|email|unique:vsignup,email',
            'txt_pass' => 'min:6',
            'txt_cpass' => 'required_with:txt_pass|same:txt_pass|min:6'

        ]);

        $data['name'] = $request->input('txt_name');
        $mob = $request->input('txt_mobile');
        $data['mobile'] = $mob;

        $data['address'] = $request->input('txt_address');
        $data['pincode'] = $request->input('txt_pin');
        $data['email'] = $request->input('txt_email');

        $data['password'] = $request->input('txt_pass');
        $data['cpassword'] = $request->input('txt_cpass');

        $email=$request->input('txt_email');
        $password=$request->input('txt_pass');
//        $mobile = $request->input('txt_mobile');

        $this->obj->stored('vsignup', $data);
        Nexmo::message()->send([
            'to'=>$mob,
            'from'=>'919656946547',
            'text'=>'Your Vendor Account registration Partially completed , complete all details from OneCliq ',
        ]);
        $result = $this->obj->verifyy('vsignup', $email,$password);
        if(isset($result))
        {
            $request->session()->put(array('sessid'=>$result->id));
            return redirect('/siginigvendor');
        }

//        return view('signverify', $result);
    }
    public function siginigvendor()
    {
        $data['result1'] = $this->obj->cat('categories');
        $data['result2'] = $this->obj->cat('businesstype');
        return view('signverify',$data);

    }



    public function update(Request $request, $id)
    {
        request()->validate([
            'Lname' =>' required',
            'num' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'state' =>' required|alpha',
            'district' => 'required|alpha',
            'location'=>'required|alpha',
            'type' => 'required',
            'storename' => 'required',
//            'categories' => 'required',
            'logo'=>'required',
            'tln' => 'required  ',
            'tld' => 'required ',
            'pann' => 'required ',
            'panc' => 'required ',
            'idp' => 'required ',

            'ship' => 'required ',
            'bankname' => 'required|alpha ',
            'acctype' => 'required ',
            'accnum'=>'required|digits:16',
            'ifsc' => 'required  ',
            'cc' => 'required  ',
            'sign' => 'required  ',



        ]);


        $data['Lname'] = $request->input('Lname');
        $data['num'] = $request->input('num');

        $data['state'] = $request->input('state');
        $data['district'] = $request->input('district');
        $data['location'] = $request->input('location');
        $data['type'] = $request->input('type');
        $data['storename'] = $request->input('storename');

        $data['logo'] = $request->input('logo');
        $file1 = $request->file('logo');
        $filename1 = $file1->getClientOriginalName();
        $file1->move(public_path() . '/uploads', $filename1);
        $data['logo'] = $filename1;

        $data['tln'] = $request->input('tln');
        $file2 = $request->file('tld');
        $filename2 = $file2->getClientOriginalName();
        $file2->move(public_path() . '/uploads', $filename2);
        $data['tld'] = $filename2;
        $data['pann'] = $request->input('pann');
//        $data['panc'] = $request->input('panc');
        $file3 = $request->file('panc');
        $filename3 = $file3->getClientOriginalName();
        $file3->move(public_path() . '/uploads', $filename3);
        $data['panc'] = $filename3;

        $file6 = $request->file('idp');
        $filename6 = $file6->getClientOriginalName();
        $file6->move(public_path() . '/uploads', $filename6);
        $data['idp'] = $filename6;

//        $data['idp'] = $request->input('idp');
        $data['fssai'] = $request->input('fssai');
        $data['ship'] = $request->input('ship');
        $data['bankname'] = $request->input('bankname');
        $data['acctype'] = $request->input('acctype');
        $data['accnum'] = $request->input('accnum');
        $data['ifsc'] = $request->input('ifsc');
//        $data['cc'] = $request->input('cc');
        $file4 = $request->file('cc');
        $filename4 = $file4->getClientOriginalName();
        $file4->move(public_path() . '/uploads', $filename4);
        $data['cc'] = $filename4;

//        $data['sign'] = $request->input('sign');
        $file5 = $request->file('sign');
        $filename5 = $file5->getClientOriginalName();
        $file5->move(public_path() . '/uploads', $filename5);
        $data['sign'] = $filename5;

        $data['regstatus'] = 1;

        $update['update'] = $this->obj->upd('vsignup', $id, $data);
//        $d['vendor_id'] = $id;
//        $this->obj->mobtake('vsignup',$id);
//        $mob = $data['mobile'];
//echo $mob;
//        exit();
////        Nexmo::message()->send([
////            'to'=>$mob,
////            'from'=>'919656946547',
////            'text'=>'Your Vendor Account registration completed , Wait for Approval  from OneCliq ',
////        ]);
        return redirect('/vendor');

    }

    public function viewdata($table)
    {
        return DB::table($table)->get();
    }

    public function vprivacy()
    {
        return view('vprivacy');
    }


    public function vendordash()
    {
        $id = session('sessid');

        $data['pcount'] = $this->obj->countproduct('product',$id);
        $data['catcount'] = $this->obj->countcat('vendorcategory',$id);
        $data['buycount'] = $this->obj->countbuy('buynow','product',$id);
        $data['approvecount'] = $this->obj->countapprove('product',$id);
        $data['countdisapprove'] = $this->obj->countdisapprove('product',$id);
        $data['countpending'] = $this->obj->countpending('product',$id);

        $data['result'] = $this->obj->selectIdd('vsignup', $id);

        return view('vendordash', $data);
    }


    public function productadd()
    {
        $id = session('sessid');
        $cond = "id";
        $cond1 = "vendor_id";
        $data['result'] = $this->obj->selectIds('vsignup', $cond, $id);
        $data['result1'] = $this->obj->selectIdss('product', $cond1, $id);
        $data['result2']=$this->obj->viewvendorcategory('vendorcategory','categories',$id);

        return view('productadd', $data);
    }

    public function editprod($id)
    {

        $sid = session('sessid');



        $data['result'] = $this->obj->view('vsignup', $sid);
        $data['result1'] = $this->obj->joiningprod('product', 'categories', 'sub_cat',$id);

        return view('editprod', $data);


    }
    public function updateprod(Request $request,$id)
    {
//        $id = session('sessid');
//echo $id;
//        exit();
        {
            $file1 = $request->file('image');
//echo $file1;
//            exit();
            $file2 = $request->file('image2');
            $file3 = $request->file('image3');
            $file4 = $request->file('image4');

            if ($file1 == "" &&  $file2 == "" && $file3 == "" && $file4 == "" )
            {
                $data['prod_name'] = $request->input('prod_name');
//                $data['brand'] = $request->input('brand');
//                $data['cat'] = $request->input('cat');
                $data['weight'] = $request->input('weight');
//
                $data['height'] = $request->input('height');
                $data['length'] = $request->input('length');
                $data['width'] = $request->input('width');
                $data['stock'] = $request->input('stock');
//
//
//
                $data['MRP'] = $request->input('MRP');
//
                $data['sell_price'] = $request->input('sell_price');
//                $data['GST'] = $request->input('GST');
                $data['non_refund'] = $request->input('non_refund');
                $data['free_delivery'] = $request->input('free_delivery');
                $data['cod'] = $request->input('cod');
                $data['details'] = $request->input('details');
                $data['warranty'] = $request->input('warranty');

            }

            else
            {


                $data['prod_name'] = $request->input('prod_name');
//                $data['brand'] = $request->input('brand');
//                $data['cat'] = $request->input('cat');
                $data['weight'] = $request->input('weight');
//
                $data['height'] = $request->input('height');
                $data['length'] = $request->input('length');
                $data['width'] = $request->input('width');
                $data['stock'] = $request->input('stock');
//
//                $data['image'] = $request->input('image');
                $file1 = $request->file('image');
                $filename1 = $file1->getClientOriginalName();
                $file1->move(public_path() . '/uploads', $filename1);
                $data['image'] = $filename1;

                $file2 = $request->file('image2');
                $filename2 = $file2->getClientOriginalName();
                $file2->move(public_path() . '/uploads', $filename2);
                $data['image2'] = $filename2;

                $file3 = $request->file('image3');
                $filename3 = $file3->getClientOriginalName();
                $file3->move(public_path() . '/uploads', $filename3);
                $data['image3'] = $filename3;

                $file4 = $request->file('image4');
                $filename4 = $file4->getClientOriginalName();
                $file4->move(public_path() . '/uploads', $filename4);
                $data['image4'] = $filename4;

                $data['MRP'] = $request->input('MRP');
                $data['sell_price'] = $request->input('sell_price');
//                $data['GST'] = $request->input('GST');
                $data['non_refund'] = $request->input('non_refund');
                $data['free_delivery'] = $request->input('free_delivery');
                $data['cod'] = $request->input('cod');
                $data['details'] = $request->input('details');
                $data['warranty'] = $request->input('warranty');

            }

            $update['update'] = $this->obj->updateprod('product', $id, $data);
            return redirect('/productadd');
        }

    }
    public function addproduct($id)
    {
        $sid = session('sessid');
//        $cond="id";
//        $cond1="vendor_id";
        $data['result'] = $this->obj->selectIdd('vsignup', $id);
        $data['brand'] = $this->obj->veData('vendorcategory', $sid);

//print_r($data);
//        exit();

        return view('addproduct', $data);


    }
    public function productreview()
    {

        $id = session('sessid');

        $cond = "id";
        $cond1 = "vendor_id";
        $data['result'] = $this->obj->selectIds('vsignup', $cond, $id);
        $data['result1'] = $this->obj->selectIds('product', $cond1, $id);
//        $cond2 = $data['prod_id'];
//        echo $cond2;
//        exit();


        $data['result2']=$this->obj->viewvendorcategory('vendorcategory','categories',$id);

        $data['result3'] = $this->obj->reivewview('product','review' ,'vsignup','userprofile', $id);

        return view('productreview',$data);

    }
    public function Reviewproduct()
    {
        $id = session('sessid');
        $cond = "id";
        $cond1 = "vendor_id";

        $data['result'] = $this->obj->selectIds('vsignup', $cond, $id);
        $data['result1'] = $this->obj->selectIds('product', $cond1, $id);
        $data['result3'] = $this->obj->selectIds('review', $cond1, $id);

        $data['result2']=$this->obj->viewvendorcategory('vendorcategory','categories',$id);

        return view('productreview',$data);

    }


    public function saveproduct(Request $request,$id)
    {
        request()->validate([
            'prod_name' =>' required',
            'brand' =>' required',
            'cat' =>' required',
            'weight' =>' required',
            'height' =>' required',
            'length' =>' required',
            'width' =>' required',
            'stock' =>' required',
            'image' =>' required',
            'MRP' =>' required|numeric',
            'Sell_price' =>' required|numeric',
            'details' =>' required',


//            'GST' =>' required'
        ]);




//        $data['result']=$this->obj->selectIdd('product',$id);
//        $id = session('sessid');

//        $this->obj->selectIdd($id);
        $data['vendor_id'] = $id;
     $data['prod_name'] = $request->input('prod_name');


          $data['brand'] = $request->input('brand');

            $data['cat'] = $request->input('cat');
//
           $data['weight'] = $request->input('weight');
//
           $data['height'] = $request->input('height');
          $data['length'] = $request->input('length');
          $data['width'] = $request->input('width');
          $data['stock'] = $request->input('stock');
//
//
          $file1 = $request->file('image');
        $filename1 = $file1->getClientOriginalName();
        $file1->move(public_path() . '/uploads', $filename1);
        $data['image'] = $filename1;

        $file2 = $request->file('image2');
        $filename2 = $file2->getClientOriginalName();
        $file2->move(public_path() . '/uploads', $filename2);
        $data['image2'] = $filename2;

        $file3 = $request->file('image3');
        $filename3 = $file3->getClientOriginalName();
        $file3->move(public_path() . '/uploads', $filename3);
        $data['image3'] = $filename3;

        $file4 = $request->file('image4');
        $filename4 = $file4->getClientOriginalName();
        $file4->move(public_path() . '/uploads', $filename4);
        $data['image4'] = $filename4;

          $data['MRP'] = $request->input('MRP');
         $data['Sell_price'] = $request->input('Sell_price');
//        $data['GST'] = $request->input('GST');
         $data['non_refund'] = $request->input('non_refund');
          $data['free_delivery'] = $request->input('free_delivery');
         $data['cod'] = $request->input('cod');

                 $data['details'] = $request->input('details');
        $data['warranty'] = $request->input('warranty');



        $this->obj->saveproduct('product', $data);
//        $update['update']=$this->obj->saveproduct('product',$id,$data);
//        return redirect('/vendor');
        return redirect('/productadd');
    }

    public function logoutv(Request $request)
    {
        $request->session()->forget('id');
        return redirect('/vendor');
    }


    public function profile()
    {
        $id = session('sessid');
        $data['result'] = $this->obj->selectvendordetails('vsignup', $id);
        $data['result3']=$this->obj->viewvendorcategory('vendorcategory','categories',$id);

        return view('profile', $data);
    }

    public function view($id)
    {
        $data['result'] = $this->obj->view('vsignup', $id);
        return view('view', $data);


    }

    public function productapprove()
    {
        $sessid = session('sessid');
//        $id=session('prod_id');

        $data['result'] = $this->obj->view('vsignup', $sessid);
        $data['result1'] = $this->obj->productapprove('categories','product','sub_cat',$sessid);

//        $data['result1'] = $this->obj->productapprove('product');
        return view('productapprove', $data);
    }

    public function productdisapprove()
    {
        $sessid = session('sessid');

        $data['result'] = $this->obj->view('vsignup', $sessid);
//        $data['result1'] = $this->obj->joiningdis('product', 'categories', 'sub_cat');
        $data['result1'] = $this->obj->productdisapprove('product', 'categories', 'sub_cat',$sessid);

//        $data['result1'] = $this->obj->productdisapprove('product');
        return view('productdisapprove', $data);
    }

    public function pendingproduct()
    {
        $sessid = session('sessid');

        $data['result'] = $this->obj->view('vsignup', $sessid);
//        $data['result1'] = $this->obj->joiningprod('product', 'categories', 'sub_cat');

        $data['result1'] = $this->obj->pendingproduct('product', 'categories', 'sub_cat',$sessid);
        return view('pendingproduct', $data);
    }

    public function vemoreproduct($id)
    {
        $sessid = session('sessid');

        $data['result'] = $this->obj->view('vsignup', $sessid);

//        $data['result1'] = $this->obj->vemoreproduct('product', $id);
        $data['result1'] = $this->obj->joiningprod('product', 'categories', 'sub_cat',$id);

        return view('vemoreproduct', $data);


    }

    public function veproductdetails($id)
    {

        $sessid = session('sessid');
        $data['result'] = $this->obj->view('vsignup', $sessid);
        $data['result1'] = $this->obj->joiningprod('product', 'categories', 'sub_cat',$id);


        return view('veproductdetails', $data);

    }

    public function backve()
    {

        return redirect('/productadd');
    }
    public function backfull()
    {

        return back();
    }
    public function vendorcat()
    {
        $sessid = session('sessid');

        $data['result2'] = $this->obj->viewcatIdd('categories');

        $data['result'] = $this->obj->view('vsignup', $sessid);
        $data['result1'] = $this->obj->joining('categories', 'vendorcategory', $sessid);
        $data['result3']=$this->obj->viewvendorcategory('vendorcategory','categories',$sessid);


        return view('vendorcat', $data);

    }
    public function deletevendor($id)
    {
        $d['regstatus'] = '3';
        $d['date'] = date('Y-m-d');

        $this->obj->deletevendor('vsignup',$id,$d);

        return redirect('/vendor');
//        return redirect()->back();

    }

    public function deletevprod($id)
    {
        $this->obj->deletevprod($id);

        return redirect('/productadd');
//        return redirect()->back();

    }
    public function vendorcatdelte($id)
    {
        $sessid = session('sessid');

        $this->obj->vendorcatdelte($sessid,$id);

        return redirect('/vendorcat');
//        return redirect()->back();

    }

    public function vecategory(Request $request)
    {
//        $cond1="vendor_id";
        $sessid = session('sessid');

        $data['category'] = $request->input('category');
        $data['vendor_id'] = $sessid;
//        $data['cat_vid'] =;


        $this->obj->veinsertData('vendorcategory', $data);
        return redirect('/vendorcat');
    }

    public function viewproduct()
    {
        $sid = session('sessid');

        $data['result'] = $this->obj->viewIdd('vsignup', $sid);
        $data['result1'] = $this->obj->viewpData('categories', $sid);
        $data ['result2'] = $this->obj->joining('categories', 'vendorcategory', $sid);
        $data['result3']=$this->obj->viewvendorcategory('vendorcategory','categories',$sid);

        return view('viewproduct', $data);


    }

    public function prdSubCat($id)
    {

        $data = $this->obj->selectById('sub_cat', $id);


        foreach ($data as $val) {
            ?>
            <option value="<?php echo $val->sub_id;?>"><?php echo $val->name;?></option>

        <?php
        }
    }

    public function editvendor()
    {
        request()->validate([

            'password' => 'min:6',
            'cpassword' => 'required_with:password|same:password|min:6'

        ]);
        $id = session('sessid');

        $data['result'] = $this->obj->editvendor('vsignup', $id);
        $data['result3']=$this->obj->viewvendorcategory('vendorcategory','categories',$id);

        return view('editvendor', $data);



    }

    public function updateprof(Request $request,$id)
    {
        {
            $file1 = $request->file('logo');

            $file2 = $request->file('tld');

            $file3 = $request->file('panc');
            $file4 = $request->file('idp');
            $file5 = $request->file('cc');
            $file6 = $request->file('sign');

            if ($file1 == "" &&  $file2 == "" && $file3 == "" && $file4 == "" && $file5 == "" && $file6 == "" )
            {
                $data['address'] = $request->input('address');
                $data['pincode'] = $request->input('pincode');
                $data['Lname'] = $request->input('Lname');
                $data['num'] = $request->input('num');

                $data['state'] = $request->input('state');
                $data['district'] = $request->input('district');
                $data['location'] = $request->input('location');
                $data['type'] = $request->input('type');
                $data['storename'] = $request->input('storename');
//                $data['categories'] = $request->input('categories');
//                $data['logo'] = $request->input('logo');


                $data['tln'] = $request->input('tln');

                $data['pann'] = $request->input('pann');

                $data['fssai'] = $request->input('fssai');
                $data['ship'] = $request->input('ship');
                $data['bankname'] = $request->input('bankname');
                $data['acctype'] = $request->input('acctype');
                $data['accnum'] = $request->input('accnum');
                $data['ifsc'] = $request->input('ifsc');
            }
            else
            {


                $data['address'] = $request->input('address');
                $data['pincode'] = $request->input('pincode');
                $data['Lname'] = $request->input('Lname');
                $data['num'] = $request->input('num');

                $data['state'] = $request->input('state');
                $data['district'] = $request->input('district');
                $data['location'] = $request->input('location');
                $data['type'] = $request->input('type');
                $data['storename'] = $request->input('storename');
//                $data['categories'] = $request->input('categories');
//                $data['logo'] = $request->input('logo');
                $file1 = $request->file('logo');
                $filename1 = $file1->getClientOriginalName();
                $file1->move(public_path() . '/uploads', $filename1);
                $data['logo'] = $filename1;

                $data['tln'] = $request->input('tln');

                $file2 = $request->file('tld');
                $filename2 = $file2->getClientOriginalName();
                $file2->move(public_path() . '/uploads', $filename2);
                $data['tld'] = $filename2;

                $data['pann'] = $request->input('pann');

                $file3 = $request->file('panc');
                $filename3 = $file3->getClientOriginalName();
                $file3->move(public_path() . '/uploads', $filename3);
                $data['panc'] = $filename3;

                $file4 = $request->file('idp');
                $filename4 = $file4->getClientOriginalName();
                $file4->move(public_path() . '/uploads', $filename4);
                $data['idp'] = $filename4;

//        $data['idp'] = $request->input('idp');
                $data['fssai'] = $request->input('fssai');
                $data['ship'] = $request->input('ship');
                $data['bankname'] = $request->input('bankname');
                $data['acctype'] = $request->input('acctype');
                $data['accnum'] = $request->input('accnum');
                $data['ifsc'] = $request->input('ifsc');
//        $data['cc'] = $request->input('cc');
                $file5 = $request->file('cc');
                $filename5 = $file5->getClientOriginalName();
                $file5->move(public_path() . '/uploads', $filename5);
                $data['cc'] = $filename5;

//        $data['sign'] = $request->input('sign');
                $file6 = $request->file('sign');
                $filename6 = $file6->getClientOriginalName();
                $file6->move(public_path() . '/uploads', $filename6);
                $data['sign'] = $filename6;
            }

            $update['update'] = $this->obj->updateprof('vsignup', $id, $data);
            return redirect('/profile');
        }

    }
    public function productvendor()

    {
        $sid = session('sessid');

        $data['result'] = $this->obj->viewIdd('vsignup', $sid);

        $data['result1']=$this->obj->productvendor('buynow',$sid);

        return view('productvendor',$data);
    }

    public function productsignin()

    {
                $sid = session('sessid');

        $data['result'] = $this->obj->viewIdd('vsignup', $sid);

//        $data['result1']=$this->obj->productsignin('vsignup','buynow','product', $sid);
        $data['result1']=$this->obj->productsigninpay('vsignup','buynow','product','payment' ,$sid);

        return view('/productsignin',$data);
    }
    public function approveorder($id)
    {

        $data['buystatus'] = 1;
        $data['reason']='Approved';
        $this->obj->approveorder('buynow',$id,$data);
        Nexmo::message()->send([
            'to'=>'919645830051',
            'from'=>'919656946547',
            'text'=>'Order Approved - onecliq ',
        ]);
          return redirect()->back();

    }
    public function approveship($id)
    {

        $data['buystatus'] = 2;
        $data['reason'] = 'Shipped';
        $this->obj->approveorder('buynow', $id, $data);
        Nexmo::message()->send([
            'to'=>'919645830051',
            'from'=>'919656946547',
            'text'=>'Order Shipped  onecliq',
        ]);
        return redirect()->back();

    }
    public function approvedeliver($id)
    {

        $data['buystatus'] = 3;
        $data['reason']='Delivered';
        $this->obj->approveorder('buynow',$id,$data);
        Nexmo::message()->send([
            'to'=>'919645830051',
            'from'=>'919656946547',
            'text'=>'Order Delivered  onecliq',
        ]);
        return redirect()->back();

    }
    public function approvereturn($id)
    {

        $data['buystatus'] = 5;
        $data['reason']='Return Confirmed';
        $this->obj->approveorder('buynow',$id,$data);
        Nexmo::message()->send([
            'to'=>'919645830051',
            'from'=>'919656946547',
            'text'=>'Return Confirmed onecliq ',
        ]);
        return redirect()->back();

    }
    public function viewproductdetails($id)

    {
        $sid = session('sessid');

        $data['result'] = $this->obj->viewIdd('vsignup', $sid);

//        $data['result1']=$this->obj->productvendor('buynow');
        $data['result6'] = $this->obj->joiningcart('product', 'buynow','userprofile',$id);

        return view('viewproductdetails',$data);
    }
    public function backorder()
    {

        return redirect()->back();
    }

    public function productreport()

    {
        $sid = session('sessid');

        $data['result'] = $this->obj->viewIdd('vsignup', $sid);

//        $data['result1']=$this->obj->productvendor('buynow');
//        $data['result6'] = $this->obj->joiningcart('product', 'buynow','userprofile');
        $data['result1']=$this->obj->productsignin('vsignup','buynow','product', $sid);

        return view('productreport',$data);
    }

    public function addoffer($id)
    {
        $sessid = session('sessid');
        $data['result'] = $this->obj->view('vsignup', $sessid);
        $data['result1'] = $this->obj->joiningprod('product', 'categories', 'sub_cat', $id);
        return view('addoffer', $data);
    }
    public function addoffers(Request $r,$id)
    {
       $offer['offer'] = $r->input('offer');
//        echo $offer;
//        exit();
         $this->obj->addoffers('product', $offer,$id);

        return redirect('/productadd');

    }
    public function deleteoffer($id)
    {

        $data['offer'] = 0;
        $this->obj->deleteoffer('product',$data,$id);

        return redirect('/productadd');

    }
    public function withdrawprodv($id)
    {
        $data['status'] = 0;

        $this->obj->withdrawprodv('product',$data,$id);

        return redirect('/productadd');

    }
}