<?php

namespace App\Http\Controllers\admin;

use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index(){
        $suppliers=Supplier::get();
//	    dd($suppliers);
//	    $i=0;
//	    $carts=0;
        return view('admin.suppliers.index',compact('suppliers'));
    }
    public function create()
    {

        return view('admin.suppliers.create');

    }//end of create

    public function store(Request $request)
    {


        $supplier=new Supplier();
        $supplier->name=$request->name;
        $supplier->email=$request->email;
        $supplier->phone=$request->phone;
        $supplier->save();

        return redirect()->route('admin.supplier.index');
    }//end of store

    public function edit(Supplier $supplier)
    {

        return view('admin.suppliers.edit', compact('supplier'));

    }//end of edit

    public function update(Request $request, Supplier $supplier)
    {
        $supplier->name=$request->name;
        $supplier->email=$request->email;
        $supplier->phone=$request->phone;
        $supplier->save();

        return redirect()->route('admin.supplier.index');

    }//end of update

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('admin.supplier.index');

    }//end of destroy
    public function show(Supplier $supplier)
    {
        return view('admin.suppliers.show', compact('supplier'));

    }
}
