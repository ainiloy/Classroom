<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeminerController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AuthenticationController;

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



// Route::get('/', [AuthenticationController::class, 'register'])->name('register');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if (Auth::user()->role_id == 1) {
        return redirect()->route('admin.dashboard');
    }elseif(Auth::user()->role_id == 2) {
        return redirect()->route('student.dashboard');
    }
    elseif(Auth::user()->role_id == 4) {
        return redirect()->route('teacher.dashboard');
    }else {
        return redirect()->route('login');
    }
})->name('dashboard');

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/course',[HomeController::class,'course'])->name('course');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/team',[HomeController::class,'team'])->name('team');
Route::get('/team-become',[HomeController::class,'team_become'])->name('team.become');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog-detail',[HomeController::class,'blog_detail'])->name('blog.detail');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::get('/pricing',[HomeController::class,'pricing'])->name('pricing');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/team_detail',[HomeController::class,'team_detail'])->name('team.detail');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/management-consulting',[HomeController::class,'management_consulting'])->name('management.consulting');
Route::get('/web-development',[HomeController::class,'web_development'])->name('web.development');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/checkouts',[HomeController::class,'checkouts'])->name('checkout');




//old
Route::get('category/{slug}',[HomeController::class,'categoryCourse'])->name('category.course');
Route::get('sort-by',[HomeController::class,'sortBy'])->name('sort.by');
Route::get('add/to/cart/{id}',[HomeController::class,'addToCart'])->name('add.to.cart');
Route::get('mycart',[HomeController::class,'myCart'])->name('my.cart');
Route::get('cart-delete/{id}',[HomeController::class,'cartDelete'])->name('cart.delete');
Route::post('coupon-submit',[HomeController::class,'couponSubmit'])->name('coupon.submit');
Route::get('course/course-details/{slug}',[HomeController::class,'courseDetails'])->name('course.details');
Route::post('logincheckout',[HomeController::class,'loginCheckout'])->name('login.checkout');
Route::get('get-payment-method',[HomeController::class,'getPaymentMethod'])->name('get.payment.method');

Route::get('checkout',[HomeController::class,'checkout'])->name('checkout');
Route::post('confirm-order',[HomeController::class,'confirmOrder'])->name('confirm.order');
Route::get('orders',[HomeController::class,'studentOrder'])->name('student.order');
Route::get('courses', [HomeController::class, 'courses'])->name('courses');


Route::get('contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::post('submit-message', [HomeController::class, 'submit_message'])->name('submit-message');


Route::post('search-course', [HomeController::class, 'search_course'])->name('search-course');

Route::get('blog-details/{slug}', [HomeController::class, 'blog_details'])->name('blog-details');
Route::get('page-details/{slug}', [HomeController::class, 'page_details'])->name('page-details');
Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::post('message/submit',[HomeController::class, 'messageSubmit'])->name('message.submit');
Route::get('service/{slug}',[HomeController::class,'service'])->name('service');
Route::get('all-services',[HomeController::class,'all_services'])->name('all.services');
Route::get('hosting',[HomeController::class,'hosting'])->name('hosting');
Route::get('hosting/order-{slug}-hosting-plan',[HomeController::class,'hostingOrder'])->name('hosting.order');
Route::post('hosting-order-submit',[HomeController::class,'hostingOrderSubmit'])->name('hosting.order.submit');
Route::get('hosting-order-successfull',[HomeController::class,'hostingOrderSuccess'])->name('hosting.order.success');
Route::get('domain',[HomeController::class,'domain'])->name('domain');



Route::get('register', [AuthenticationController::class, 'register'])->name('register');
Route::post('send-otp', [AuthenticationController::class, 'send_otp'])->name('send-otp');
Route::post('verify-otp', [AuthenticationController::class, 'verify_otp'])->name('verify-otp');
Route::get('student', [AuthenticationController::class, 'student'])->name('student');
Route::post('submit-registration', [AuthenticationController::class, 'submit_registration'])->name('submit-registration');


Route::get('student-login', [AuthenticationController::class, 'student_login'])->name('student-login');
Route::post('user-login', [AuthenticationController::class, 'user_login'])->name('user-login');


Route::group(['as'=>'admin.','prefix' => 'superadmin', 'namespace'=>'App\Http\Controllers\Admin','middleware'=>['auth','admin']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('user/verify', 'DashboardController@user_verify')->name('user-verify');

    //profile
    Route::get('profile', 'SettingController@profile')->name('profile');
    Route::post('update-profile', 'SettingController@update_profile')->name('update-profile');
    Route::get('change-password', 'SettingController@change_password')->name('change-password');
    Route::post('update-password', 'SettingController@update_password')->name('update-password');



    Route::resource('user', 'UserController');
    Route::resource('page_categories', 'PageCategoryController');
    Route::resource('page', 'PageController');
    Route::resource('course', 'CourseController');
    Route::resource('category', 'CategoryController');
    Route::resource('batch', 'BatchController');
    Route::resource('teacher', 'TeacherController');
    Route::resource('coupon','CouponController');
    Route::resource('payment-method','PaymentMethodController');
    Route::resource('order-handle','AdminOrderHandleController');
    Route::resource('site-setting','SiteSettingController');
    Route::resource('sponsore','SponsorController');
    Route::resource('post','PostController');
    Route::resource('class','ClassController');
    Route::resource('seminer','SeminerController');
    Route::resource('testimonial','TestimonialController');
    Route::resource('class_lesson','ClassLessonController');
    Route::resource('vanue','VanueController');
    Route::resource('blog-category','BlogCategoryController');
    Route::resource('blog','BlogController');
    Route::resource('message','MessageController');
    Route::resource('services','ServiceController');
    Route::resource('service_package','ServicePackageController');
    Route::resource('web_hosting','WebHostingController');
    Route::resource('web_hosting_orders','WebHostingOrdersController');

});


Route::group(['as'=>'teacher.','prefix' => 'teacher', 'namespace'=>'App\Http\Controllers\Teacher','middleware'=>['auth','teacher']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('information', 'DashboardController@information')->name('information');
    Route::post('update-profile', 'DashboardController@update_profile')->name('update-profile');
    Route::post('update-password', 'DashboardController@update_password')->name('update-password');
    Route::resource('blog','BlogController');
    Route::resource('notice', 'NoticeController');
    Route::resource('study_material', 'StudyMaterialController');
    Route::get('search_for_sm','StudyMaterialController@searchForSm')->name('search.for.sm');
    Route::get('sm_search_result','StudyMaterialController@smSearchResult')->name('sm.search.result');
    Route::resource('online_class', 'OnlineClassController');
    Route::resource('home_work', 'HomeWorkController');
    Route::get('search_for_hw','HomeWorkController@searchForHw')->name('search.for.hw');
    Route::get('hw_search_result','HomeWorkController@hwSearchResult')->name('hw.search.result');
    Route::get('homework_evaluation','HomeWorkController@hwEvaluation')->name('hw.evaluation');
    Route::get('homework_evaluation_search_result','HomeWorkController@hwEvaluationSearchResult')->name('hw.evaluation.search.result');
    Route::post('/update-home-work-answer', 'HomeWorkController@updateHomeWorkAnswer')->name('update.hw.answer');

    Route::resource('lesion','LesionController');
    Route::resource('question','QuestionController');
    Route::get('search_for_qt','QuestionController@searchForQt')->name('search.for.qt');
    Route::get('qt_search_result','QuestionController@qtSearchResult')->name('qt.search.result');
    Route::resource('class_link','ClassLinkController');
    Route::get('search_for_class','ClassLinkController@searchForClass')->name('serach.for.class');
    Route::get('search_result','ClassLinkController@searchResult')->name('search.result');
    Route::get('search_for_attendance','ClassLinkController@searchForAttendance')->name('search.for.attendance');
    Route::get('search_attendance','ClassLinkController@searchAttendance')->name('search.attendance');

    Route::get('support-answer', 'DashboardController@support_answer')->name('support-answer');
    Route::get('edit-support-answer/{id}', 'DashboardController@edit_support_answer')->name('edit-support-answer');
    Route::post('update-support-answer/{id}', 'DashboardController@update_support_answer')->name('update-support-answer');
    Route::get('delete-support-answer/{id}', 'DashboardController@delete_support_answer')->name('delete-support-answer');

    Route::get('comming-soon', 'DashboardController@comming_soon')->name('comming-soon');


});




Route::group(['as'=>'student.','prefix' => 'student', 'namespace'=>'App\Http\Controllers\Student','middleware'=>['auth','student']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('information', 'DashboardController@information')->name('information');
    Route::post('update-profile', 'DashboardController@update_profile')->name('update-profile');
    Route::get('change-password', 'DashboardController@change_password')->name('change-password');
    Route::post('update-password', 'DashboardController@update_password')->name('update-password');

    Route::get('my-courses', 'DashboardController@my_courses')->name('my-courses');
    Route::get('join-class', 'DashboardController@join_class')->name('join-class');
    Route::get('homework-submit', 'DashboardController@homework_submit')->name('homework-submit');
    Route::get('student-exam', 'DashboardController@student_exam')->name('student-exam');
    Route::get('questions', 'DashboardController@questions')->name('questions');


    Route::get('view-homework/{id}', 'DashboardController@view_homework')->name('view-homework');
    Route::get('submit-homework/{id}', 'DashboardController@submit_homework')->name('submit-homework');
    Route::post('student-submit-homework/{id}', 'DashboardController@student_submit_homework')->name('student-submit-homework');


    Route::post('submit_answer', 'DashboardController@submit_answer')->name('submit_answer');
    Route::get('exam-result/{course_id}/{lesion_id}', 'DashboardController@exam_result')->name('exam-result');


    Route::get('result', 'DashboardController@result')->name('result');

    Route::get('orders','DashboardController@studentOrder')->name('student.order');

    Route::get('notice', 'DashboardController@notice')->name('notice');
    Route::get('notice-description/{id}', 'DashboardController@notice_description')->name('notice-description');

    Route::get('askaquestion', 'DashboardController@askaquestion')->name('askaquestion');
    Route::post('save_question', 'DashboardController@save_question')->name('save_question');
    Route::get('viewallquestions', 'DashboardController@viewallquestions')->name('viewallquestions');
    Route::get('delete-question/{id}', 'DashboardController@delete_question')->name('delete-question');
    Route::get('view-answer/{id}', 'DashboardController@view_answer')->name('view-answer');


    Route::get('study-material', 'DashboardController@study_material')->name('study-material');

    Route::get('comming-soon', 'DashboardController@comming_soon')->name('comming-soon');


});

    // Ajax
    Route::post('get-batch', 'App\Http\Controllers\AjaxController@get_batch')->name('get-batch');
    Route::post('get-lesion', 'App\Http\Controllers\AjaxController@get_lesion')->name('get-lesion');
    Route::post('get-class', 'App\Http\Controllers\AjaxController@get_class')->name('get-class');
    Route::post('get-homework', 'App\Http\Controllers\AjaxController@get_homework')->name('get-homework');
    Route::post('get-notice', 'App\Http\Controllers\AjaxController@get_notice')->name('get-notice');
    Route::post('get-studymaterial', 'App\Http\Controllers\AjaxController@get_studymaterial')->name('get-studymaterial');

    //Site Setting


