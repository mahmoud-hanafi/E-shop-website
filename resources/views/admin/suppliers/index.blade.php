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
                        <a href="{{route('admin.supplier.create')}}" class="btn btn-primary">Create</a>
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th>name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>action</th>
                            </tr>
                            @foreach($suppliers as $supplier)
                                <tr>
                                    <th>{{$supplier->name}}</th>
                                    <th>{{$supplier->email}}</th>
                                    <th>{{$supplier->phone}}</th>
                                    <th>
                                        <a href="{{ route('admin.supplier.show', $supplier->id) }}" class="btn btn-primary" ><span class="fa fa-eye"></span></a>
                                        <a href="{{ route('admin.supplier.edit', $supplier->id) }}" class="btn btn-warning" ><span class="fa fa-edit"></span></a>
                                        <form action="{{ route('admin.supplier.destroy', $supplier->id) }}" method="post" style="display: inline;">
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