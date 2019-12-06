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
                        <h4>Name</h4>
                        <p>{{$supplier->name}}</p>
                        <h4>E-mail</h4>
                        <p>{{$supplier->email}}</p>
                        <h4>Phone</h4>
                        <p>{{$supplier->phone}}</p>

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