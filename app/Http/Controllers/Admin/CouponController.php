<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coupons=Coupons::latest()->get();
        return view('admin.coupon.index',compact('coupons'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.coupon.create');
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
        $validated = $request->validate([
            'coupon_code' => 'required|unique:coupons',
            'days' => 'required',
            'coupon_limit' => 'required',
            'discount' => 'required',
        ]);

        $data=new Coupons();
        $data->coupon_code=$request->coupon_code;
        $data->days=$request->days;
        $data->discount=$request->discount;
        $data->coupon_limit=$request->coupon_limit;
        $data->count=0;
        $data->save();
        return redirect()->back()->withSuccess('Coupon saved successfully');
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
        $data=Coupons::findOrFail($id);
        return view('admin.coupon.edit',compact('data'));
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
          //
          $validated = $request->validate([
            'coupon_code' => 'required|unique:coupons,coupon_code,'.$id,
            'days' => 'required',
            'coupon_limit' => 'required',
            'discount' => 'required',
        ]);
        $data=Coupons::findOrFail($id);
        $data->coupon_code=$request->coupon_code;
        $data->days=$request->days;
        $data->discount=$request->discount;
        $data->coupon_limit=$request->coupon_limit;
        $data->status=$request->status;
        $data->update();
        return redirect()->back()->withSuccess('Coupon updated successfully');
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
        $data=Coupons::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess('Coupon deleted successfully');
    }
}
