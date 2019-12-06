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
                        <form  action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            {{ method_field('POST') }}

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name"  class="form-control" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="name">price</label>
                                <input type="text" name="price" class="form-control" value="{{ old('price') }}">

                            </div>
                            <div class="form-group">
                                <label for="name">Image</label>
                                <input type="file" name="image" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for="course_id">Category</label><span style="color:red">*</span>
                                <select  name="category_id" class="form-control">
                                    <option value=" ">No Data selected</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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