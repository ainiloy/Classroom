<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;

class PaymentMethodController extends Controller
{

    public function index()
    {

        $payment_methods=PaymentMethod::latest()->get();
        return view('admin.payment-method.index',compact('payment_methods'));
    }

    public function create()
    {

        return view('admin.payment-method.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'account_no' => 'required',
            
        ]);
        $data=new PaymentMethod();
        $data->name=$request->name;
        $data->account_no=$request->account_no;
        $data->branch=$request->branch;
        $data->status=$request->status;
        $data->save();
        return redirect()->back()->withSuccess('Payment Method saved successfully');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=PaymentMethod::findOrFail($id);
        return view('admin.payment-method.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data=PaymentMethod::findOrFail($id);
        $data->name=$request->name;
        $data->account_no=$request->account_no;
        $data->branch=$request->branch;
        $data->status=$request->status;
        $data->update();
        return redirect()->back()->withSuccess('Payment Method Updated successfully');

    }

    public function destroy($id)
    {
        $data=PaymentMethod::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess('Payment deleted successfully');
    }
}
