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
                        <form  action="{{route('admin.product.update',$product->id)}}" enctype="multipart/form-data" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name"  class="form-control" value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label for="name">price</label>
                                <input type="text" name="price" class="form-control" value="{{ $product->price }}">

                            </div>
                            <div class="form-group">
                                
                                <label for="name">Image</label>
                                <img src="{{asset("images/".$product->image)}}" width="50px" height="50px">
                                <input type="file" name="image" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for="course_id">Category</label><span style="color:red">*</span>
                                <select  name="category_id" class="form-control">
                                    <option value=" ">No Data selected</option>
                                    @foreach($categories as $category)
                                        <option @if($category->id==$product->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><span class="fa fa-plus"></span> Add Product</button>
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