@extends('fronts.master')
@section('style')

@endsection
@section('title')
    Supplier
@endsection
@section('breadcrumb')
    Supplier
@endsection
@section('container')
    <div class="container">
        <!-- row -->
        <div class="row">


            <!-- MAIN -->
            <div id="main" class="">


                <!-- STORE -->
                <div id="">
                    <!-- row -->
                    <div class="row">
                        <form  action="{{route('admin.supplier.update',$supplier->id)}}" enctype="multipart/form-data" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name"  class="form-control" value="{{ $supplier->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $supplier->email }}">

                            </div>
                            <div class="form-group">

                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control" value="{{ $supplier->phone }}">

                            </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><span class="fa fa-plus"></span> Edit supplier</button>
                            </div>

                        </form>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /STORE -->

                <!-- store bottom filter -->

                <!-- /store bottom filter -->
            </div>
            <!-- /MAIN -->
        </div>
        <!-- /row -->
    </div>
@stop
@section('js')

@endsection