<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vendors;
use App\Http\Controllers\adminn;
use App\Http\Controllers\userr;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//      ************************************
//            VENDORS
//      ************************************

//login

Route::get('/vendor',[vendors::class,'index']);
Route::post('/verifyy',[vendors::class,'verifyy']);

// Forget Password
Route::get('/fpass',[vendors::class,'fpass']);
Route::post('/send',[vendors::class,'send']);
Route::get('/newvendorpass',[vendors::class,'newvendorpass']);
Route::post('/updatevendorpass',[vendors::class,'updatevendorpass']);

//REGISTRATION
Route::get('/signup',[vendors::class,'signup']);
Route::post('/store',[vendors::class,'store']);
Route::get('/vendorverify',[vendors::class,'vendorverify']);
Route::get('/verification',[vendors::class,'verification']);


Route::post('/verify',[vendors::class,'verify']);
Route::post('/storex',[vendors::class,'storex']);

Route::get('/siginigvendor',[vendors::class,'siginigvendor']);

Route::post('/update/{id}',[vendors::class,'update']);
Route::get('/viewdata',[vendors::class,'viewdata']);

Route::post('/vendorsignin',[vendors::class,'store']);

Route::post('/view',[vendors::class,'store']);

Route::get('/signverify',[vendors::class,'signverify']);

Route::get('/vendordash',[vendors::class,'vendordash']);

Route::get('/profile',[vendors::class,'profile']);
Route::get('/editvendor',[vendors::class,'editvendor']);
Route::post('/updateprof/{id}',[vendors::class,'updateprof']);


//PRODUCT ADD
Route::get('/productadd',[vendors::class,'productadd']);
Route::get('/addproduct/{id}',[vendors::class,'addproduct']);
Route::get('/viewproduct',[vendors::class,'viewproduct']);

Route::post('/saveproduct/{id}',[vendors::class,'saveproduct']);
Route::get('/deletevprod/{id}',[vendors::class,'deletevprod']);
Route::get('/editprod/{id}',[vendors::class,'editprod']);
Route::post('/updateprod/{id}',[vendors::class,'updateprod']);


Route::get('/productapprove',[vendors::class,'productapprove']);
Route::get('/productdisapprove',[vendors::class,'productdisapprove']);
Route::get('/pendingproduct',[vendors::class,'pendingproduct']);

Route::get('/vemoreproduct/{id}',[vendors::class,'vemoreproduct']);
Route::get('/veproductdetails/{id}',[vendors::class,'veproductdetails']);

Route::get('/withdrawprodv/{id}',[vendors::class,'withdrawprodv']);

Route::get('/productreview',[vendors::class,'productreview']);
Route::get('/Reviewproduct',[vendors::class,'Reviewproduct']);




//CATEGORY
Route::get('/vendorcat',[vendors::class,'vendorcat']);
Route::post('/vecategory',[vendors::class,'vecategory']);

Route::get('/prdSubCat/{id}',[vendors::class,'prdSubCat']);
Route::get('/vendorcatdelte/{id}',[vendors::class,'vendorcatdelte']);
Route::get('/backfull',[vendors::class,'backfull']);


//LOGOUT
Route::get('/logoutv',[vendors::class,'logoutv']);

//BACK
Route::get('/backve',[vendors::class,'backve']);

//Reports

Route::get('/productvendor',[vendors::class,'productvendor']);
Route::get('/approveorder/{id}',[vendors::class,'approveorder']);
Route::get('/approveship/{id}',[vendors::class,'approveship']);
Route::get('/approvedeliver/{id}',[vendors::class,'approvedeliver']);
Route::get('/approvereturn/{id}',[vendors::class,'approvereturn']);



Route::get('/viewproductdetails/{id}',[vendors::class,'viewproductdetails']);
Route::get('/backorder',[vendors::class,'backorder']);
Route::get('/productreport',[vendors::class,'productreport']);
Route::get('/productsignin/{id}',[vendors::class,'productsignin']);
Route::get('/viewproductsignin/{id}',[vendors::class,'viewproductsignin']);

//offers

Route::get('/addoffer/{id}',[vendors::class,'addoffer']);
Route::post('/addoffers/{id}',[vendors::class,'addoffers']);

Route::get('/deleteoffer/{id}',[vendors::class,'deleteoffer']);

Route::get('/vprivacy',[vendors::class,'vprivacy']);
Route::get('/deletevendor/{id}',[vendors::class,'deletevendor']);





//      ************************************
//            ADMIN
//      ************************************

Route::get('/adminlogin',[adminn::class,'adminlogin']);

Route::post('/adminlogin',[adminn::class,'admin']);
Route::get('/admin',[adminn::class,'admin']);
Route::get('/logout',[adminn::class,'logout']);

//Route::get('/adminlogin',[adminn::class,'adminlogin']);

//VENDOR IN ADMIN
Route::get('/adminvendor',[adminn::class,'adminvendor']);
//Route::get('/viewmore/{id}',[adminn::class,'viewmore']);
Route::get('/view/{id}',[adminn::class,'view']);
Route::get('/approve/{id}',[adminn::class,'approve']);
Route::post('/disapprove/{id}',[adminn::class,'disapprove']);
Route::post('/verifyl',[adminn::class,'verifyl']);

Route::get('/backv',[adminn::class,'backv']);
Route::get('/deletev/{id}',[adminn::class,'deletev']);

//VENDOR PRODUCT
Route::get('/productselect',[adminn::class,'productselect']);
Route::get('/vendorproduct/{id}',[adminn::class,'vendorproduct']);
Route::get('/approveprod/{id}',[adminn::class,'approveprod']);
Route::post('/disapproveprod/{id}',[adminn::class,'disapproveprod']);
Route::get('/backp',[adminn::class,'backp']);
Route::get('/backvprod',[adminn::class,'backvprod']);

Route::get('/moreproduct/{id}',[adminn::class,'moreproduct']);
Route::get('/moreproductvend/{id}',[adminn::class,'moreproductvend']);
Route::get('/approveprodvend/{id}',[adminn::class,'approveprodvend']);
Route::post('/disapproveprodvend/{id}',[adminn::class,'disapproveprodvend']);
//PRODUCT
Route::get('/productdetails',[adminn::class,'productdetails']);

Route::get('/deleteprod/{id}',[adminn::class,'deleteprod']);
Route::get('/joining',[adminn::class,'joining']);
Route::get('/joinings',[adminn::class,'joinings']);

Route::post('/getproduct',[adminn::class,'getproduct']);
Route::get('/withdrawprod/{id}',[adminn::class,'withdrawprod']);

Route::get('/adminproductapprove',[adminn::class,'adminproductapprove']);
Route::get('/adminproductdisapprove',[adminn::class,'adminproductdisapprove']);
Route::get('/adminpendingproduct',[adminn::class,'adminpendingproduct']);
//CATEGORY

Route::get('/showcategory',[adminn::class,'showcategory']);
Route::get('/details',[adminn::class,'details']);
Route::post('/category',[adminn::class,'category']);
Route::get('/subcat/{id}',[adminn::class,'subcat']);
Route::post('/subcategory/{id}',[adminn::class,'subcategory']);
Route::get('/back',[adminn::class,'back']);
Route::get('/deletesub/{id}',[adminn::class,'deletesub']);


//BUSINESS TYPE
Route::get('/businesstype',[adminn::class,'businesstype']);
Route::post('/addbusiness',[adminn::class,'addbusiness']);

Route::get('/deletebtype/{id}',[adminn::class,'deletebtype']);

Route::get('/delete/{id}',[adminn::class,'delete']);

//Reports
Route::get('/product',[adminn::class,'product']);
Route::get('/categoryreport',[adminn::class,'categoryreport']);
Route::get('/search', [adminn::class,'search']);
Route::get('/customer', [adminn::class,'customer']);
Route::get('/productbased',[adminn::class,'productbased']);
Route::get('/Vendorbased',[adminn::class,'Vendorbased']);
Route::post('/search', [adminn::class,'search']);
Route::post('/searchvend', [adminn::class,'searchvend']);
Route::post('/searchprod', [adminn::class,'searchprod']);
Route::post('/searchcat', [adminn::class,'searchcat']);
Route::get('/vaccdelete/',[adminn::class,'vaccdelete']);

Route::get('/deactivate/{id}',[adminn::class,'deactivate']);
Route::get('/deleteacc/{id}',[adminn::class,'deleteacc']);

Route::get('/userdelete/',[adminn::class,'userdelete']);

Route::get('/userdeactivate/{id}',[adminn::class,'userdeactivate']);
Route::get('/deleteuser/{id}',[adminn::class,'deleteuser']);
//});

//      ************************************
//            USER
//      ************************************
//Route::get('/userheader ',[userr::class,'userheader ']);

Route::get('/',[userr::class,'user']);
Route::get('/home',[userr::class,'home']);
Route::get('/userlogin',[userr::class,'userlogin']);

//sign in
Route::get('/login',[userr::class,'login']);

Route::get('/userprofile',[userr::class,'userprofile']);
Route::post('/view',[userr::class,'view']);
Route::get('/profileuser',[userr::class,'profileuser']);
Route::get('/edituser',[userr::class,'edituser']);
Route::post('/updateuser',[userr::class,'updateuser']);

Route::get('/userfpass',[userr::class,'userfpass']);
Route::post('/sendemail',[userr::class,'sendemail']);
Route::get('/newpass',[userr::class,'newpass']);
Route::post('/updatepass',[userr::class,'updatepass']);


//register
Route::get('/viewreg',[userr::class,'viewreg']);
Route::post('/userreg',[userr::class,'userreg']);

//Products
Route::get('/selectprod',[userr::class,'selectprod']);
Route::get('/seemore/{id}',[userr::class,'seemore']);
Route::get('/deleted/{id}',[userr::class,'delete']);

//Category
Route::get('/cat/{id}',[userr::class,'cat']);

//cart
Route::post('/cart/{id}',[userr::class,'cart']);
Route::get('/mycart',[userr::class,'mycart']);
Route::get('/updatecart/{id}',[userr::class,'updatecart']);

Route::get('/deletecart/{id}',[userr::class,'deletecart']);

Route::post('/prodcart/{id}',[userr::class,'prodcart']);
Route::get('/verifyuser',[userr::class,'verifyuser']);
Route::post('/views',[userr::class,'views']);
Route::get('/cartbuynow/{id}',[userr::class,'cartbuynow']);
Route::get('/buynowcart/{id}',[userr::class,'buynowcart']);

//buy
Route::post('/buynow/{id}',[userr::class,'buynow']);
Route::get('/buynow1',[userr::class,'buynow1']);


Route::post('/buynowprice',[userr::class,'buynowprice']);
Route::get('/order',[userr::class,'order']);
Route::post('/buynowprice1',[userr::class,'buynowprice1']);

Route::post('/joiningu',[userr::class,'joiningu']);
Route::get('/updatecart/{id}',[userr::class,'updatecart']);

//Route::get('/review/{id}',[userr::class,'review']);
Route::post('/reviewgive',[userr::class,'reviewgive']);
Route::post('/quesans',[userr::class,'quesans']);

Route::get('/deletec/{id}',[userr::class,'deletec']);

Route::get('/payment',[userr::class,'payment']);
Route::post('payment', [userr::class, 'store'])->name('razorpay.payment.store');
Route::get('/cartpayment',[userr::class,'cartpayment']);
Route::post('cartpayment', [userr::class, 'cartstore'])->name('razorpay.payment.cartstore');
Route::post('/cod', [userr::class,'cod']);
Route::get('/paysuccess', [userr::class,'paysuccess']);

//coins
Route::post('/coins',[userr::class,'coins']);
Route::get('/returns/{id}',[userr::class,'returns']);
Route::get('/cancel/{id}',[userr::class,'cancel']);

Route::post('/searchuser', [userr::class,'searchuser']);

Route::get('/deleteuser/{id}',[userr::class,'deleteuser']);

Route::get('/privacy',[userr::class,'privacy']);

Route::get('/logout',[userr::class,'logout']);








