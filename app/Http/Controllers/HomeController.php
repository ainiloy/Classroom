<?php

namespace App\Http\Controllers;

use App\Models\WebHostingOrder;
use DB;
use Toastr;
use Session;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Post;
use App\Models\Order;
use App\Models\Course;
use App\Models\Coupons;
use App\Models\Seminer;
use App\Models\Service;
use App\Models\Category;
use App\Models\Messsage;
use App\Models\Sponsore;
use App\Models\ClassList;
use App\Models\Contactus;
use App\Models\WebHosting;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Models\ServicePackage;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    //
    public function home()
    {
        //    $categories=Category::where('status',1)->get();
        //    $seminers=Seminer::where('status',1)->with('teacher')->get();
        //    $courses=Course::where('status',1)->latest()->get();
        //    $testimonials=Testimonial::where('status',1)->with('user')->get();
        //    $offline_courses=Course::where('offline_or_online',0)->where('status',1)->get();
        //    $online_courses=Course::where('offline_or_online',1)->where('status',1)->get();
        //    $teachers=DB::table('users')->where('role_id', 4)->where('status',1)->get();


     //   $site_setting=SiteSetting::first();
        //    $sponsores=Sponsore::where('status',1)->get();
        //    $posts=Post::where('status',1)->get();
       // return view('welcome');

        //    return view('index',compact('categories','courses','offline_courses','online_courses', 'teachers', 'testimonials', 'site_setting', 'sponsores', 'posts', 'seminers'))


 $data=SiteSetting::all();
   return view('welcome',compact('data'));


        // return view('layouts.footer',compact('data'));

    }

    public function course()
    {
        return view('course');
    }
    public function about()
    {
        return view('about');
    }
    public function team()
    {
        return view('team');
    }
    public function team_become()
    {
        return view('team_become');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blog_detail()
    {
        return view('blog_detail');
    }
    public function faq()
    {
        return view('faq');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function contact()
    {
        return view('contact');
    }
    public function team_detail()
    {
        return view('team_detail');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function management_consulting()
    {
        return view('management_consulting');
    }
    public function web_development()
    {
        return view('web_development');
    }
    public function cart(){
       return view('cart');
    }
    public function checkouts(){
        return view('checkout');
    }
    public function blog_details($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        return view('blog_details', compact('blog'));
    }

    public function page_details($slug)
    {
        $item = Page::where('slug', $slug)->first();
        return view('page_details', compact('item'));
    }

    public function categoryCourse($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $courses = Course::where('category_id', $category->id)->where('status', 1)->paginate(6);
        $categories = Category::where('status', 1)->get();
        return view('frontend_pages.category_courses', compact('category', 'courses', 'categories'));
    }
    public function sortBy(Request $request)
    {

        if ($request->sort_by == 1) {
            $courses = Course::where('category_id', $request->category_id)->where('status', 1)->latest()->get();
        }
        if ($request->sort_by == 2) {
            $courses = Course::where('category_id', $request->category_id)->where('status', 1)->get();
        }
        if ($request->sort_by == 3) {
            $courses = Course::where('category_id', $request->category_id)->orderBy('price', 'asc')->get();
        }
        if ($request->sort_by == 4) {
            $courses = Course::where('category_id', $request->category_id)->orderBy('price', 'desc')->get();
        }

        return view('frontend_pages.search_result', compact('courses'));
    }

    public function addToCart($id)
    {
        if (Cart::content()->count() < 1) {
            $course = Course::findOrFail($id);
            Cart::add(
                $course->id,
                $course->title,
                1,
                $course->price,
            );

            return response()->json(['success' => 'Course added to cart']);
        } else {
            return response()->json(['warning' => 'You can checkout only one course at a time.
      ']);
        }
    }
    public function myCart()
    {
        $cart = Cart::content()->first();
        if ($cart) {
            session(['course_id' => $cart->id]);
        }
        return view('frontend_pages.mycart', compact('cart'));
    }
    public function cartDelete($id)
    {
        Cart::remove($id);
        $cart = Cart::content();
        // return view('frontend_pages.mycart',compact('cart'));
        return response()->json(['error' => 'Course removed from cart']);
    }

    public function couponSubmit(Request $request)
    {
        $check_coupon = Coupons::where('coupon_code', $request->coupon)->first();
        if ($check_coupon) {
            $count = $check_coupon->count;
            $days = $check_coupon->days;
            $limit = $check_coupon->coupon_limit;
            $discount = $check_coupon->discount;
            $expire_date = (new Carbon($check_coupon->created_at))->addDays($days);
            $today_date = now();
            if ($today_date < $expire_date && $count < $limit) {
                Session::put('coupon_id', $check_coupon->id);

                return response()->json(['discount' => $discount, 'success' => 'Coupon added']);
            } else {
                return response()->json(['error' => 'Coupon is not useable']);
            }


            $discount = $check_coupon->discount;
        } else {
            return response()->json(['errorr' => 'Coupone is not valid']);
        }
    }
    public function courseDetails($slug)
    {
        $data = Course::where('slug', $slug)->with('teacher')->with('classlist')->first();
        $datas = ClassList::get();

        return view('frontend_pages.single-course-details', compact('data', 'datas'));
    }

    public function loginCheckout(Request $request)
    {
        $final_price = $request->final_price;
        $total_count = $request->total_count;
        $coupon_id = Session::get('coupon_id');
        $coupon = Coupons::where('id', $coupon_id)->first();
        Session::put('coupon', $coupon);
        $course = Course::where('id', Session::get('course_id'))->first();
        $payment_methods = PaymentMethod::where('status', 1)->get();

        if ($coupon) {
            $coupon_discount = $coupon->discount;
        } else {
            $coupon_discount = 0;
        }

        Session::put('total_count', $total_count);
        Session::put('final_price', $final_price);
        Session::put('course', $course);
        Session::put('coupon_discount', $coupon_discount);

        if (!Auth::user()) {
            Session::put('checkout', 'checkout');

            return redirect()->route('student-login');
        } else {
            return redirect()->route('checkout');
        }
    }
    public function getPaymentMethod(Request $request)
    {
        $data = PaymentMethod::where('id', $request->id)->first();
        return response()->json($data);
    }
    public function confirmOrder(Request $request)
    {
        $course_id = Session::get('course_id');
        $coupon_id = Session::get('coupon_id');
        $coupon_data = Coupons::where('id', $coupon_id)->first();
        if ($coupon_data) {
            $coupon_data->count = $coupon_data->count + 1;
            $coupon_data->update();
        }

        //  dd($request->all());
        $data = new Order();
        $data->course_id = $course_id;
        $data->coupon_id = $coupon_id;
        $data->payment_method_id = $request->payment_method_id;
        $data->transaction_id = $request->transaction_id;
        $data->payment_transition_number = $request->payment_transition_number;
        $data->quantity = $request->quantity;
        $data->amount = $request->amount;
        $data->user_id = Auth::user()->id;
        $data->status = 0;
        $data->save();

        $order_details = new OrderDetails();
        $order_details->order_id = $data->id;
        $order_details->course_id = $course_id;
        $order_details->status = 0;
        Cart::destroy();
        // $order_details->save();
        // Toastr::success('Confirm Order Successfull');
        return redirect()->route('student.order')->with('success', 'Confirm Order Succesfull');
    }
    public function checkout()
    {
        $coupon_id = Session::get('coupon_id');
        $coupon = Coupons::where('id', $coupon_id)->first();
        $payment_methods = PaymentMethod::where('status', 1)->get();
        $total_count = Session::get('total_count');
        $final_price = Session::get('final_price');
        $course = Session::get('course');
        $coupon_discount = Session::get('coupon_discount');
        return view('frontend_pages.checkout', compact('final_price', 'course', 'coupon', 'coupon_discount', 'total_count', 'payment_methods'));
    }
    public function studentOrder()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();

        return view('frontend_pages.orders', compact('orders'));
    }

    public function courses()
    {
        $courses = Course::where('status', 1)->latest()->get();
        $categories = Category::where('status', 1)->get();
        return view('pages.courses', compact('courses', 'categories'));
    }



    public function contactus()
    {
        return view('pages.contactus');
    }



    public function submit_message(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|',
            'email' => 'required',
            'message' => 'required',
        ]);

        $data = new Contactus();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->status = 0;
        $data->save();

        return redirect()->back()->withSuccess('Message send successfully');
    }


    public function search_course(Request $request)
    {
        $name = $request->name;
        $category_id = $request->category_id;

        $courses = Course::where(function ($filter) use ($name, $category_id) {
            if (!empty($name) || $name != '') {
                $filter->where('name', '>=', $name);
            }
            if (!empty($category_id) || $category_id != '') {
                $filter->where('category_id', $category_id);
            }
        })
            ->get();

        return view('pages.search_course', compact('courses'));
    }
    public function blogs()
    {
        $blogs = Blog::where('status', 1)->latest()->get();
        return view('blogs', compact('blogs'));
    }
    public function aboutUs()
    {
        return view('about-us');
    }
    public function messageSubmit(Request $request)
    {
        $data = new Messsage();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->save();
        return redirect()->back()->withSuccess('Message send successfully');
    }
    public function service($slug)
    {
        $data = Service::where('slug', $slug)->first();

        $services = Service::where('status', 1)->latest()->get();
        $service_packages = ServicePackage::where('service_id', $data->id)->get();
        return view('service', compact('data', 'services', 'service_packages'));
    }
    public function all_services()
    {
        $services = Service::where('status', 1)->latest()->get();
        return view('all_services', compact('services'));
    }
    public function hosting()
    {
        $hostings = WebHosting::where('status', 1)->get();
        return view('hosting', compact('hostings'));
    }
    public function hostingOrder($slug)
    {
        $data = WebHosting::where('slug', $slug)->first();
        return view('hosting_order', compact('data'));
    }
    public function hostingOrderSubmit(Request $request)
    {
        $data = new WebHostingOrder();
        $data->webhosting_id = $request->webhosting_id;
        $data->domain_name = $request->domain_name;
        $data->customer_name = $request->customer_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->customer_bkash_number = $request->customer_bkash_number;
        $data->transaction_id = $request->transaction_id;
        $data->order_note = $request->order_note;
        $data->is_check = 0;
        $data->status = 'pending';
        $data->save();
        return redirect()->route('hosting.order.success');
    }
    public function hostingOrderSuccess()
    {
        return view('hosting_order_complete');
    }
    public function domain()
    {
        return view('domain');
    }
}
