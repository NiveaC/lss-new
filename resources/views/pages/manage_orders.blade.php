{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Manage Orders')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/select.dataTables.min.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-tables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- data card-->
<section class="users-list-wrapper section" style="">
  <div id="card-with-analytics" class="section">
    <div class="row">
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <h4 class="m-0"><b>2234</b></h4>
            <p>Closed Rate</p>
            <p class="green-text mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
              112.43%</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <h4 class="m-0"><b>12345</b></h4>
            <p>Sales</p>
            <p class="green-text mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
              112.90%</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <h4 class="m-0"><b>890</b></h4>
            <p>Views</p>
            <p class="red-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_down</i>
              24.4%</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <h4 class="m-0"><b>22.5%</b></h4>
            <p>Comments</p>
            <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
              112.43%</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- proceed+in cart -->
  <div class="row proceed_card" id="orders_status gradient-Analytics">
    <div class="col s12 m6 l6 card-width proceed_card" style="">
      <div class="card row gradient-45deg-deep-orange-orange gradient-shadow white-text padding-3 my-0 proceed_content">
        <div class="col s7 m7">
          <i class="material-icons background-round mt-5 mb-5">published_with_changes</i>
        </div>
        <div class="col s5 m5 right-align">
          <h5 class="mt-5 white-text">690</h5>
          <h6 class="mb-0 white-text">Proceed</h6>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l6 card-width cart_card" style="">
      <div class="card row gradient-45deg-green-teal gradient-shadow white-text padding-3 my-0 cart_content">
        <div class="col s7 m7">
          <i class="material-icons background-round mt-5 mb-5">add_shopping_cart</i>
        </div>
        <div class="col s5 m5 right-align">
          <h5 class="mt-5 white-text">1885</h5>
          <h6 class="mb-0 white-text">In Cart</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="section section-data-tables">
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">

            <!-- <div class="col s12 m12 l12" style="padding-left:7px;"> 
              <div id="inventory_btn" class="col s12 m10 right">
                <div class="datatable-search right">
                  <a class="search_btn btn waves-effect border-round grey-text white"><i class="material-icons grey-text left">search</i><span class="hide-on-med-and-down">Search</span></a>
                  <a class="btn indigo darken-4 mb-1 waves-effect waves-light mr-1 right">
                  <i class="material-icons left" style="margin-right:5px;">refresh</i>Refresh</a>
                  <a class="btn indigo darken-4 mb-1 waves-effect waves-light right">
                  <i class="material-icons left" style="margin-right:5px;">not_interested</i>Stop Checkout</a>
                </div>
              </div>
              <div id="dataTables_section" class="col s12 m2">
                <div class="dataTables_length show_text" id="page-length-option_length">
                <label class="">
                  Show
                    <select class="" name="" style="margin-left:9%;">
                      <option value="10">10</option>
                      <option value="10">20</option>
                      <option value="10">30</option>
                    </select>
                  entries
                </label>  
                </div>
              </div> 
            </div> -->

            <div class="row">
              <div class="col s12 mt-0 p-0">
                <div class="col s6 right">
                  <a class="btn indigo darken-4 mb-1 waves-effect waves-light mr-1 right">
                  <i class="material-icons left mr-0">refresh</i><span class="hide-on-small-only">Refresh</span></a>
                </div>
                <div class="col s6 left">
                  <div class="m-0">
                    <div class="switch">
                      <label style="font-size:16px; color:#1a237e;">Stop Checkout
                        <input type="checkbox" />
                        <span class="lever"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="row">
              <div class="col s12">
                <table id="page-length-option" class="display">
                <thead>
                    <tr>
                      <th>Order No.</th>
                      <th>Name</th>
                      <th>Total Items</th>
                      <th>Amount</th>
                      <th>Payment</th>
                      <th>Status</th>
                      <th>Message</th>
                      <th>Shopping Cart</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <div class="responsive-table customer_orders">
          <div class="col s12 mt-0 p-0">
            <a class="btn indigo darken-4 mb-1 waves-effect waves-light mr-1">
              <i class="material-icons left mr-0">refresh</i>Refresh Orders</a>
            <a class="btn indigo darken-4 mb-1 waves-effect waves-light">
              <i class="material-icons left mr-0">not_interested</i>Stop Checkout</a>
          </div>
          <table id="users-list-datatable" class="table striped" style="width:100%;">
            <thead>
              <tr>
                <th></th>
                <th>Order NO.</th>
                <th>FB Image</th>
                <th>FB Name</th>
                <th>Total Items</th>
                <th>Amount</th>
                <th>Payment</th>
                <th>Status</th>
                <th>Action</th>
                <th></th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>300</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" style="width: 30px;" alt=""></a></td>
                <td>Dean Stanley</td>
                <td>12</td>
                <td>127.5</td>
                <td>General Payment</td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td>301</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" style="width: 30px;" alt=""></a>
                </td>
                <td>Zena Buckley</td>
                <td>12</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>302</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" style="width: 30px;" alt=""></a>
                </td>
                <td>Delilah Moon</td>
                <td>03/01/2020</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
               <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
               <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>303</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" style="width: 30px;" alt=""></a>
                </td>
                <td>Hillary Rasmussen</td>
                <td>18/07/2019</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>304</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" style="width: 30px;" alt=""></a>
                </td>
                <td>Herman Tate</td>
                <td>20/03/2020</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>305</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" style="width: 30px;" alt=""></a>
                </td>
                <td>Kuame Ford</td>
                <td>30/08/2019</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>306</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" style="width: 30px;" alt=""></a>
                </td>
                <td>Fulton Stafford</td>
                <td>20/09/2019</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>307</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" style="width: 30px;" alt=""></a>
                </td>
                <td>Piper Jordan</td>
                <td>05/08/2020</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>308</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" style="width: 30px;" alt=""></a>
                </td>
                <td>Neil Sosa</td>
                <td>10/02/2019</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">chat_bubble_outline</i></a></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons" style="color:#b6b6b6;">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color:#b6b6b6;">remove_red_eye</i></a></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> -->
</section>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
<script src="{{asset('js/scripts/data-tables.js')}}"></script>
@endsection