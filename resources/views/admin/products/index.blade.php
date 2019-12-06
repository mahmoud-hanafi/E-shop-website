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
                        <a href="{{route('admin.product.create')}}" class="btn btn-primary">Create</a>
                       <table class="table table-bordered table-responsive">
                           <tr>
                               <th>name</th>
                               <th>price</th>
                               <th>image</th>
                               <th>category</th>
                               <th>Supplier</th>
                               <th>action</th>
                           </tr>
                           @foreach($products as $product)
                            <tr>
                                <th>{{$product->name}}</th>
                                <th>{{$product->price}}</th>
                                <th><img src="{{asset("images/".$product->image)}}" width="50px" height="50px"></th>
                                <th>{{$product->category->name}}</th>
                                <th>@foreach($product->suppliers as $s)
                                         {{$s->name}} <br>
                                    @endforeach</th>
                                <th>
                                    <a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-primary" ><span class="fa fa-eye"></span></a>
                                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning" ><span class="fa fa-edit"></span></a>
                                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="post" style="display: inline;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <button type="submit" class="btn btn-danger">Detete</button>
                                    </form>
                                </th>
                            </tr>
                           @endforeach
                       </table>
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