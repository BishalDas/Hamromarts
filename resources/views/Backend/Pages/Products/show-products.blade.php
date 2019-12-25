@extends('backend.master.master')

@section('content')

        <!DOCTYPE html>
<html lang="en">



<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>



<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div>
            <a style="margin: 19px;" href="{{route('add-product')}}" class="btn btn-primary">Add new Product</a>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Show Products Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix">
                        </div>
                        <div class="x_content">
                            <class class="row">
                                <div class="col-md-12">
                                    @include('backend.layouts.messages')
                                    <div class="row">
                                        <form action="">
                                            <div class="col-md-10" style="padding-right: 0">
                                                <div class="form-group form-group-sm">
                                                    <input type="text" class="form-control"  id="user_search" name="search" placeholder="Search anything ">

                                                </div>
                                            </div>
                                            <div class="col-md-2" style="padding-left: 1px;">
                                                <button type="btn" class="btn btn-primary btn-sm" id="user_search">Search</button>
                                            </div>
                                        </form>
                                        <div class="col col-md-6"></div></col->
                                        <div id="search-box">nnn</div>
                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Subcategory</th>
                                            <th>SubsubCategory</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Phone</th>
                                            <th>Uid</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $key=>$product)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->category}}</td>
                                                <td>{{$product->subcategory}}</td>
                                                <td>{{$product->subsubcategory}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->image}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>{{$product->phone}}</td>
                                                <td>{{$product->uid}}</td>
                                               <td>{{$product->created_at}}</td>
                                                <td>
                                                    <a href="" class="btn btn-success btn-sm btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                <td>
                                                    <form action="{{ route('delete', $product->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        <button class="btn btn-danger btn-sm btn-xs" onclick="return confirm('Do you really want to delete  sure')"  type="submit">
                                                            <i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        {{-- {{$key->links()}}--}}
                                    </div>
                                </div>
                            </class>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</html>

<script>
    $(document).ready(function(){

        fetch_customer_data();

        function fetch_customer_data(query = '')
        {
            $.ajax({
                url:"{{ route('product-search') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('tbody').html(data.table_data);
                    $('#total_records').text(data.total_data);
                }
            })
        }

        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_customer_data(query);
        });
    });
</script>


@endsection