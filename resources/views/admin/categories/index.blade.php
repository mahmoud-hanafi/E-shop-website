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
                        <a href="{{route('admin.category.create')}}" class="btn btn-primary">Create</a>
                       <table class="table table-bordered table-responsive">
                           <tr>
                               <th>name</th>
                               <th>action</th>
                           </tr>
                           @foreach($categories as $category)
                            <tr>
                                <th>{{$category->name}}</th>
                                <th>
                                    <a href="{{ route('admin.category.show', $category->id) }}" class="btn btn-primary" ><span class="fa fa-eye"></span></a>
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning" ><span class="fa fa-edit"></span></a>
                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="post" style="display: inline;">
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