<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\User;
use App\Models\Course;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;
use Auth;

class AdminOrderHandleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=Order::latest()->get();
        return view('admin.manage-order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Order::findOrFail($id);
        return view('admin.manage-order.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Order::find($id);

        if($data->status == 1){
            Toastr::error('Already Approved!');
            return redirect()->back();
        }else{

            $data->status = $request->status;
            $data->update();


            $user = User::where('id', $data->user_id)->first();
            $course = Course::where('id', $data->course_id)->first();

            $admin = Auth::user();

            if($request->status == 1){

                $last = Purchase::orderBy('id', 'desc')->first();
                $latest_id = $last->id + 1;

                $purchase = new Purchase();
                $purchase->order_id = rand(1111,9999).''.$latest_id;
                $purchase->student_id = $user->user_id;
                $purchase->admin_id = $admin->user_id;
                $purchase->net_office_id = 1;
                $purchase->institute = 'SCHOLAR IT';
                $purchase->item_id = $data->course_id;
                $purchase->item_price = $course->price;
                $purchase->status = 1;
                $purchase->save();

            }

        }





        Toastr::success('Order UPdated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Order::find($id);
        $data->delete();
        Toastr::success('Order Deleted successfully');
        return redirect()->back();
    }
}
