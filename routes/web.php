<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CtController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PageAboutController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestBookingController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ViewprescriptionController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\ContactController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\HomeSampleCollectionController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\ForgetPasswordController;
use App\Http\Controllers\user\PatientsController;
use App\Http\Controllers\user\PopularController;
use App\Http\Controllers\user\RegistrationController;
use App\Http\Controllers\user\PrescriptionController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\user\DepartmentsController;
use App\Http\Controllers\user\TestControllers;
use App\Http\Controllers\user\PackagesController;
use App\Http\Controllers\user\UserRegistrationController;
use App\Http\Controllers\Admin\CenterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RazorpayController;

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


Route::get('/', [HomeController::class, 'index'])->name('dashboard');//admin
Route::get('admin/dashboard', [HomepageController::class,'index'])->name('admin.dashboard');
Route::post('/logout',[HomepageController::class,'logout'])->name('logout');
Route::get('admin', function () {return redirect('admin/login');});
Route::get('admin/login', [LoginController::class,'index'])->name('admin.login');
Route::post('/admin/login/store', [LoginController::class,'login'])->name('admin.login.store');
Route::get('admin/logout', [LogoutController::class,'index'])->name('admin.logout');
Route::get('admin/forget-password', [ForgetPasswordController::class,'index'])->name('admin.forget_password');
//package
Route::get('admin/product/view', [ProductController::class,'index'])->name('admin.product.index');
Route::get('admin/product/create', [ProductController::class,'create'])->name('admin.auth.product.create');
Route::post('admin/product/store', [ProductController::class,'store'])->name('admin.product.store');
Route::get('admin/product/delete/{id}', [ProductController::class,'destroy']);
Route::get('admin/product/edit/{id}', [ProductController::class,'edit'])->name('admin.product.edit');
Route::post('admin/product/update/{id}', [ProductController::class,'update']);

//prescription

Route::get('admin/report/view', [ReportController::class,'index'])->name('admin.auth.report.index');
Route::get('admin/report/create', [ReportController::class,'create'])->name('admin.auth.report.create');
Route::post('admin/report/store', [ReportController::class,'store'])->name('admin.report.store');
Route::get('admin/report/edit/{id}', [ReportController::class,'edit'])->name('admin.report.edit');
Route::post('admin/report/update/{id}', [ReportController::class,'update']);
Route::get('admin/report/delete/{id}', [ReportController::class,'destroy']);
Route::post('admin/report/search', [ReportController::class, 'search'])->name('admin.auth.report.search');



//about
Route::get('admin/about/view', [PageAboutController::class,'index'])->name('admin.auth.about.index');
Route::post('admin/about/update', [PageAboutController::class,'update']);

//Location

Route::get('admin/location/view', [LocationController::class,'index'])->name('admin.auth.location.index');
Route::get('admin/location/create', [LocationController::class,'create'])->name('admin.auth.location.create');
Route::post('admin/location/store', [LocationController::class,'store'])->name('admin.location.store');
Route::get('admin/location/edit/{id}', [LocationController::class,'edit'])->name('admin.location.edit');
Route::post('admin/location/update/{id}', [LocationController::class,'update']);
Route::get('admin/location/delete/{id}', [LocationController::class,'destroy']);

//testimonials

Route::get('admin/testimonial/view', [TestimonialController::class,'index'])->name('admin.auth.testimonial.index');
Route::get('admin/testimonial/create', [TestimonialController::class,'create'])->name('admin.auth.testimonial.create');
Route::post('admin/testimonial/store', [TestimonialController::class,'store'])->name('admin.testimonial.store');
Route::get('admin/testimonial/edit/{id}', [TestimonialController::class,'edit'])->name('admin.testimonial.edit');
Route::post('admin/testimonial/update/{id}', [TestimonialController::class,'update']);
Route::get('admin/testimonial/delete/{id}', [TestimonialController::class,'destroy']);

//feedback
Route::get('admin/feedback/view', [ProductController::class,'feedbackindex'])->name('admin.feedback.index');


//team members
Route::get('admin/team/view', [TeamController::class,'index'])->name('admin.auth.team.index');
Route::get('admin/team/create', [TeamController::class,'create'])->name('admin.auth.team.create');
Route::post('admin/team/store', [TeamController::class,'store'])->name('admin.team.store');
Route::get('admin/team/edit/{id}', [TeamController::class,'edit'])->name('admin.team.edit');
Route::post('admin/team/update/{id}', [TeamController::class,'update']);
Route::get('admin/team/delete/{id}', [TeamController::class,'destroy']);

//awards and accreditions

Route::get('admin/awards/view', [AwardController::class,'index'])->name('admin.auth.award.index');
Route::get('admin/awards/create', [AwardController::class,'create'])->name('admin.auth.award.create');
Route::post('admin/awards/store', [AwardController::class,'store'])->name('admin.award.store');
Route::get('admin/awards/edit/{id}', [AwardController::class,'edit'])->name('admin.award.edit');
Route::post('admin/awards/update/{id}', [AwardController::class,'update']);
Route::get('admin/awards/delete/{id}', [AwardController::class,'destroy']);

//know more
Route::get('packages-knowmore/{id}', [PackagesController::class,'knowmore'])->name('user.knowmore');
Route::get('test-knowmore/{id}', [PackagesController::class,'testknowmore'])->name('user.testknowmore');
//service
Route::get('admin/service/view', [ServiceController::class,'index'])->name('admin.auth.service.index');
Route::get('admin/service/create', [ServiceController::class,'create'])->name('admin.auth.service.create');
Route::post('admin/service/store', [ServiceController::class,'store'])->name('admin.service.store');
Route::get('admin/service/edit/{id}', [ServiceController::class,'edit'])->name('admin.service.edit');
Route::post('admin/service/update/{id}', [ServiceController::class,'update']);
Route::get('admin/service/delete/{id}', [ServiceController::class,'destroy']);


//hospital

Route::get('admin/hospital/view', [LocationController::class,'indexhospital'])->name('admin.auth.hospital.index');
Route::get('admin/hospital/create', [LocationController::class,'createhospital'])->name('admin.auth.hospital.create');
Route::post('admin/hospital/store', [LocationController::class,'storehospital'])->name('admin.hospital.store');
Route::get('admin/hospital/edit/{id}', [LocationController::class,'edithospital'])->name('admin.hospital.edit');
Route::post('admin/hospital/update/{id}', [LocationController::class,'updatehospital']);
Route::get('admin/hospital/delete/{id}', [LocationController::class,'destroyhospital']);
//booksample
Route::post('user/booksample/create', [HomeSampleCollectionController::class,'store'])->name('user.booksample.store');
//About
Route::get('about', [ContactController::class,'about'])->name('user.about');
//view prescription
Route::get('admin/viewprescription/view', [ViewprescriptionController::class,'index'])->name('admin.auth.viewprescription.index');
Route::post('admin/viewprescription/search', [ViewprescriptionController::class,'search'])->name('admin.auth.viewprescription.search');

//appointent page
Route::get('admin/appointement/view', [AppointmentController::class,'index'])->name('admin.auth.appointement.index');
Route::get('admin/sample/approve/{id}',[AppointmentController::class,'approve'] )->name('sample.approve');
Route::get('admin/sample/reject/{id}', [AppointmentController::class, 'reject'])->name('sample.reject');
//prescription
Route::post('user/prescription/create', [PrescriptionController::class,'store'])->name('user.prescription.store');

//BANNER

Route::get('admin/banner/view', [BannerController::class,'index'])->name('admin.auth.banner.index');
// Route::get('admin/banner/view', [BannerController::class,'index'])->name('admin.auth.service.index');

//booking

Route::get('admin/booking/view', [BookingController::class,'index'])->name('admin.auth.booking.index');
Route::post('admin/booking/store', [BookingController::class,'store'])->name('admin.auth.booking.store');
Route::get('admin/booking/approve/{id}',[BookingController::class,'approve'] )->name('package.approve');
Route::get('admin/booking/reject/{id}', [BookingController::class, 'reject'])->name('package.reject');


//DOCTOR
Route::get('admin/doctor/view', [DoctorController::class,'index'])->name('admin.auth.doctor.index');
Route::get('admin/doctor/create', [DoctorController::class,'create'])->name('admin.auth.doctor.create');
Route::post('admin/doctor/store', [DoctorController::class,'store'])->name('admin.doctor.store');
Route::get('admin/doctor/edit/{id}', [DoctorController::class,'edit'])->name('admin.doctor.edit');
Route::post('admin/doctor/update/{id}', [DoctorController::class,'update']);
Route::get('admin/doctor/delete/{id}', [DoctorController::class,'destroy']);


//TEST
Route::get('admin/test/view', [TestController::class,'index'])->name('admin.auth.test.index');
Route::get('admin/test/create', [TestController::class,'create'])->name('admin.auth.test.create');
Route::post('admin/test/store', [TestController::class,'store'])->name('admin.test.store');
Route::get('admin/test/edit/{id}', [TestController::class,'edit'])->name('admin.test.edit');
Route::post('admin/test/update/{id}', [TestController::class,'update']);
Route::get('admin/test/delete/{id}', [TestController::class,'destroy']);

//testbooking
Route::post('admin/testbooking/store', [TestBookingController::class,'store'])->name('admin.testbooking.store');
Route::get('admin/testbooking/view', [TestBookingController::class,'index'])->name('admin.auth.testbooking.index');
Route::get('admin/testbooking/approve/{id}',[TestBookingController::class,'approve'] )->name('testbooking.approve');
Route::get('admin/testbooking/reject/{id}', [TestBookingController::class, 'reject'])->name('testbooking.reject');
Route::get('/testsearch', [ProductController::class, 'testsearch'])->name('testsearch');
//ctscan booking
Route::post('admin/ctscan/store', [CtController::class,'store'])->name('admin.ctscan.store');
Route::get('admin/ctscan/view', [CtController::class,'index'])->name('admin.auth.ctscan.index');
Route::get('admin/ctscan/approve/{id}',[CtController::class,'approve'] )->name('ctscan.approve');
Route::get('admin/ctscan/reject/{id}', [CtController::class, 'reject'])->name('ctscan.reject');


//user
Route::get('user/register', [RegistrationController::class,'index'])->name('user.register');
Route::post('user/register/store', [RegistrationController::class,'store'])->name('user.registration.store');
Route::post('user/userreg/store', [UserRegistrationController::class,'store'])->name('user.userreg.store');

Route::post('login/check', [UserRegistrationController::class, 'loginCheck'])->name('user.login.check');
Route::post('/logout', [UserRegistrationController::class, 'logout'])->name('logout');


//doctors menu popular test package
Route::get('packagesandtest', [PopularController::class, 'index'])->name('packagesandtest');
//patient menu
Route::get('patients-package', [PatientsController::class,'patientspage'])->name('user.patientspage');
Route::get('patients-testpage', [PatientsController::class,'testpage'])->name('user.testpage');
Route::get('patients-feedback', [PatientsController::class,'feedback'])->name('user.feedback');
Route::post('patients-store', [PatientsController::class,'store'])->name('feedback.store');
Route::get('/search', [ProductController::class, 'search'])->name('search');
// routes/web.php




Route::post('user/auth/callback/store', [PatientsController::class,'callback'])->name('callback.store');
Route::get('find-nearest-lab', [ContactController::class,'index'])->name('user.contact');

//cart
Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('cart', [CartController::class, 'cart'])->name('cart.view');
Route::get('cart-status', [CartController::class, 'cartorderindex'])->name('cartorderindex.view');
Route::post('carttest/add', [CartController::class, 'addToCartTest'])->name('carttest.add');
Route::post('cart/orderdelete/{id}', [CartController::class, 'destroyordershow'])->name('cartorderdelete.delete');


// homesamplecollection
Route::get('homesamplecollection', [HomeSampleCollectionController::class, 'homesamplecollection'])->name('cart.homesamplecollection');
Route::get('homesamplecollectionremove/{id}', [HomeSampleCollectionController::class,'destroysample']);



Route::get('download-result', [CartController::class,'downloadpage'])->name('user.downloadpage');
Route::get('/download-pdf/{id}', [CartController::class, 'generatePdf'])->name('download.pdf');
Route::get('admin/booking/cartindex', [BookingController::class,'cartindex'])->name('admin.auth.booking.cartindex');
Route::post('admin/cartindex/search', [BookingController::class,'search'])->name('admin.auth.cartindex.search');
//admin approve/reject
Route::get('package/approve/{id}', [CartController::class, 'approve'])->name('package.approve');
Route::get('package/reject/{id}', [CartController::class, 'reject'])->name('package.reject');

//admin departments
Route::get('admin/department/view', [DepartmentController::class,'index'])->name('admin.auth.department.index');
Route::get('admin/department/create', [DepartmentController::class,'create'])->name('admin.auth.department.create');
Route::post('admin/department/store', [DepartmentController::class,'store'])->name('admin.department.store');
Route::get('admin/department/edit/{id}', [DepartmentController::class,'edit'])->name('admin.department.edit');
Route::post('admin/department/update/{id}', [DepartmentController::class,'update']);
Route::get('admin/department/delete/{id}', [DepartmentController::class,'destroy']);

//doctor department  test packages
Route::get('doctor-department', [DepartmentsController::class,'index'])->name('user.department');
Route::get('doctors-test', [TestControllers::class,'index'])->name('user.test');
Route::get('doctors-packages', [PackagesController::class,'index'])->name('user.packages');
Route::get('doctors-contact', [ContactController::class,'contact'])->name('user.contactss');
Route::post('contact-search', [ContactController::class, 'search'])->name('user.contactsearch');
Route::get('covid-test', [PopularController::class, 'covid'])->name('covdi19');


// Route::get('product-list', [PackagesController::class,'ProductListAjax'])->name('user.packagelist');


//center
Route::get('admin/center/view', [CenterController::class,'index'])->name('admin.auth.center.index');
Route::get('admin/center/create', [CenterController::class,'create'])->name('admin.auth.center.create');
Route::post('admin/center/store', [CenterController::class,'store'])->name('admin.center.store');
Route::get('admin/center/edit/{id}', [CenterController::class,'edit'])->name('admin.center.edit');
Route::post('admin/center/update/{id}', [CenterController::class,'update']);
Route::get('admin/center/delete/{id}', [CenterController::class,'destroy']);
Route::post('razorpay-payment',[RazorpayController::class,'store'])->name('razorpay.payment.store');


// Route::get('product-list', [PatientsController::class, 'productlistAjax']);
// Route::get('product-list', [PatientsController::class, 'productlistAjax'])->name('testsearch');

// Route::get('product-list', [PackagesController::class, 'ProductListAjax'])->name('packagelist');


// Route::get('/search-products', [PackagesController::class, 'search'])->name('search.products');