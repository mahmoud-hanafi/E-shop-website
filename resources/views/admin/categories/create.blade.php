@extends('fronts.master')
@section('style')

@endsection
@section('title')
    Category
@endsection
@section('breadcrumb')
    Category
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
                        <form  action="{{route('admin.category.store')}}" method="post">

                            {{ csrf_field() }}

                            {{ method_field('POST') }}

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name"  class="form-control" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><span class="fa fa-plus"></span> Add Category</button>
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