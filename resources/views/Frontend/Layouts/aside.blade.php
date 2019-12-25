@section('aside')
<!-- /sidebar menu -->
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('user')}}" class="site_title"><span>Hamro Mart!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{url('frontend/images/users/'.Auth::guard('web')->user()->image)}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>
                {{--<img src="" alt="">--}}
                {{Auth::guard('web')->user()->username}}
                </h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('user')}}"><i class="fa fa-home"></i>User Dashboard </a>
                  </li>
                  <li><a href="{{route('my-detail')}}"><i class="fa fa-user"></i>My Details</a></li>
                  <li><a href="{{route('my-product')}}"><i class="fa fa-line-chart"></i>My Products</a></li>
                  <li><a href="{{route('product-add')}}"><i class="fa fa-edit"></i>Add Product</a></li>
                </ul>
              </div>
            </div>
            

@endsection