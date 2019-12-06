@extends('fronts.master')
@section('style')

@endsection
@section('title')
    Product
@endsection
@section('breadcrumb')
    Product
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
                        <p><img src="{{asset("images/".$product->image)}}" width="150px" height="150px"></p>
                        <h4>Laptop Name</h4>
                        <p>{{$product->name}}</p>
                        <h4>Price</h4>
                        <p>{{$product->price}}</p>
                        <h4>Categorry</h4>
                        <p>{{$product->category->name}}</p>
                        <h4>Suppliers</h4>
                        <ul>
                        @foreach($product->suppliers as $s)
                                <li> {{ $s->name  }}</li>
                            @endforeach
                        </ul>



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