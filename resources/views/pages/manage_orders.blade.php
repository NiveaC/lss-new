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
<section class="users-list-wrapper section">
  <!-- data card-->
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
  <!-- proceed+in cart card-->
  <div id="orders_status gradient-Analytics" class="row proceed_card">
    <div class="col s12 m6 l6 card-width proceed_card">
      <div class="card row gradient-45deg-deep-orange-orange gradient-shadow white-text padding-3 my-0 proceed_content">
        <div class="col s7">
          <i class="material-icons background-round mt-5 mb-5">published_with_changes</i>
        </div>
        <div class="col s5 right-align">
          <h5 class="mt-5 white-text">690</h5>
          <h6 class="mb-0 white-text">Proceed</h6>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l6 card-width cart_card">
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
            <div class="row">
              <div class="col s12 mt-0 p-0">
                <div class="col s3 m6 right">
                  <a class="btn indigo darken-4 mb-1 waves-effect waves-light mr-1 right rwd_icon">
                  <i class="material-icons left" style="margin-right:5px;">refresh</i><span class="hide-on-small-only">Refresh</span></a>
                </div>
                <div class="col s9 m6 left">
                  <div class="m-0">
                    <div class="switch">
                      <label class="stop_label indigo-text text-darken-4">Stop Checkout
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
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
                    </tr>
                    <tr>
                      <td>300</td>
                      <td>
                        <img src="{{asset('images/user/12.jpg')}}"  class="circle lss_avatar"><span>Dean Stanley</span></td>
                      </td>
                      <td>12</td>
                      <td>127.5</td>
                      <td>General Payment</td>
                      <td><span class="chip green lighten-5">
                          <span class="green-text">Cart</span>
                        </span>
                      </td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">chat_bubble_outline</i></a></td>
                      <td><a href="{{asset('page-users-edit')}}"><i class="material-icons action_icon">shopping_cart</i></a></td>
                      <td><a href="{{asset('page-users-view')}}"><i class="material-icons action_icon">remove_red_eye</i></a></td>
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