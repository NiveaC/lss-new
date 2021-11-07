{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- Page title --}}
@section('title','Campaign Live')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
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

{{-- main page content --}}
@section('content')
<div class="campaign_live">
  <div class="row">
    <div class="col s12">
      <!-- live streaming -->
      <div class="live_streaming">
        <div class="">
          <div class="col s12 m12 l3 pl-0">
            <div id="video-two" class="mr-0">
              <div class="video-container no-controls" style="width: 270pt; height: 500pt; margin-top:16pt;">
                <iframe width="200" height="600" src="https://www.youtube.com/embed/Skpu5HaVkOc" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- comment+products+incoming orders -->
      <div class="live_content">
        <div class="col s12 m12 l8 right p-0">
          <div id="tabs-in-card" class="section">
            <div class="card">
              <div class="card-content pb-0">
                <div class="row">
                  <div class="col s12">
                    <div class="col s9 m9 l6 campaign_content">
                      <div class="campaign_title">Title 211025</div>
                    </div>
                    <div class="col s3 m3 l4 offset-l2 right-align">
                      <div class="col s2 pr-0 mt-1 circle right">
                        <a href="#"><img class="user_img circle" src="{{asset('images/user/12.jpg')}}"></a>
                      </div>
                      <div class="col s10 user_name hide-on-med-and-down">
                        <a href="#"><p class="m-5">快賣</p></a>
                      </div>  
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col s12 m12 l12">
                  <div class="col s8 m8 l8">
                    <div class="card-tabs">
                      <ul class="tabs tabs-fixed-width tab_font">
                        <li class="tab"><a href="#comment">Comment</a></li>
                        <li class="tab"><a class="active" href="#product">Product</a></li>
                        <li class="tab"><a href="#order">Incoming Orders</a></li>
                      </ul>
                    </div>
                  </div>  
                  <div id="luckudraw_btn" class="col s4 m4 l4 right-align">
                    <a class="waves-effect waves-light btn gradient-45deg-red-pink mr-6 border-round rwd_icon">
                    <i class="material-icons show-on-small left" style="margin-right:5px;">redeem</i><span class="hide-on-small-only">Lucky Draw</span></a>
                  </div> 
                </div>
              </div>
              <!-- comment -->
              <div id="comment">
                <div id="avatar-content" class="card card-tabs">
                  <div class="card-content">
                    <div id="view-avatar">
                      <div class="row">
                        <div class="col s12">
                          <ul class="collection comment_content">
                            <li class="collection-item avatar" style="">
                              <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar" style="">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                              </p>
                            </li>
                            <li class="collection-item avatar">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- product -->
              <div id="product">
                <div id="avatar-content product_content" class="card card-tabs">
                  <div class="card-content">
                    <div id="view-avatar">
                      <div class="row">
                        <div class="col s12">
                          <div class="row">
                            <div class="col s12 right-align">
                              <a class="waves-effect indigo darken-4 btn right rwd_icon">
                              <i class="material-icons left" style="margin-right:5px;">add</i><span class="hide-on-small-only">Instantly Add Product</span></a>
                            </div>
                          </div>
                          <ul class="collection">
                            <li class="product_info">
                              <div class="row">
                                <div class="col s12">
                                  <div class="col s12 m7 l8 product_content">
                                    <img src="{{asset('images/cheese cake.jpg')}}" class="circle">
                                      <span class="title">Cheese Cake</span>
                                      <p>First Line
                                        <br> Second Line
                                      </p>
                                  </div>
                                  <div class="col s12 m5 l4">
                                    <!-- <a class="activate_btn waves-effect waves-light btn mb-1 border-round secondary-content">
                                      Activate
                                    </a> -->
                                    <div class="m-0">
                                      <!-- <span>Activate the product</span> -->
                                      <div class="switch right"> 
                                        <label class="activate_label indigo-text text-darken-4">Activate
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="product_info">
                              <div class="row">
                                <div class="col s12">
                                  <div class="col s12 m7 l8 product_content">
                                    <img src="{{asset('images/egg tart.jpg')}}" class="circle">
                                      <span class="title">Egg Tart</span>
                                      <p>First Line
                                        <br> Second Line
                                      </p>
                                  </div>
                                  <div class="col s12 m5 l4">
                                    <!-- <a class="activate_btn waves-effect waves-light btn mb-1 border-round secondary-content">
                                      Activate
                                    </a> -->
                                    <div class="m-0">
                                      <!-- <span>Activate the product</span> -->
                                      <div class="switch right">
                                        <label class="activate_label indigo-text text-darken-4">Activate
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="product_info">
                              <div class="row">
                                <div class="col s12">
                                  <div class="col s12 m7 l8 product_content">
                                    <img src="{{asset('images/carrot cake.jpg')}}" class="circle">
                                      <span class="title">Carrot Cake</span>
                                      <p>First Line
                                        <br> Second Line
                                      </p>
                                  </div>
                                  <div class="col s12 m5 l4">
                                    <!-- <a class="activate_btn waves-effect waves-light btn mb-1 border-round secondary-content">
                                      Activate
                                    </a> -->
                                    <div class="m-0">
                                      <!-- <span>Activate the product</span> -->
                                      <div class="switch right">
                                        <label class="activate_label indigo-text text-darken-4">Activate
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="product_info">
                              <div class="row">
                                <div class="col s12">
                                  <div class="col s12 m7 l8 product_content">
                                    <img src="{{asset('images/tiramisu.jpg')}}" class="circle">
                                      <span class="title">Tiramisu</span>
                                      <p>First Line
                                        <br> Second Line
                                      </p>
                                  </div>
                                  <div class="col s12 m5 l4">
                                    <!-- <a class="activate_btn waves-effect waves-light btn mb-1 border-round secondary-content">
                                      Activate
                                    </a> -->
                                    <div class="m-0">
                                      <!-- <span>Activate the product</span> -->
                                      <div class="switch right">
                                        <label class="activate_label indigo-text text-darken-4">Activate
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Incomming orders -->
              <div id="order">
                <div id="avatar-content order_content" class="card card-tabs">
                  <div id="order_table" class="card-content" >
                    <div id="view-avatar">
                      <div class="row">
                        <div class="col s12">
                          <div class="col s12 mt-1 right-align">
                            <a class="btn mb-1 waves-effect indigo darken-4 rwd_icon">
                              <i class="material-icons left" style="margin-right:5px;">message</i><span class="hide-on-small-only">Summarized Comments</span></a>
                            <a class="btn mb-1 waves-effect indigo darken-4 rwd_icon">
                              <i class="material-icons left" style="margin-right:5px;">list_alt</i><span class="hide-on-small-only">Manage Order</span></a>
                            <a class="btn mb-1 waves-effect indigo darken-4 rwd_icon">
                              <i class="material-icons left" style="margin-right:5px;">download</i> <span class="hide-on-small-only">Export</span></a>
                          </div>
                          <div class="section section-data-tables">
                            <div class="card-content pt-0">
                              <div class="row">
                                <div class="col s12 p-0">
                                  <table id="page-length-option" class="display" style="width:100%; display:block; overflow-x:auto;white-space:nowrap;">
                                    <thead>
                                      <tr>
                                        <th>Order No.</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Amount</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Shopping Cart</th>
                                        <th>View</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons action_icon">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons action_icon">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons action_icon">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons action_icon">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons action_icon">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons action_icon">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons action_icon">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons action_icon">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons action_icon">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons action_icon">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons action_icon">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons action_icon">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons action_icon">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons action_icon">visibility</i>
                                        </td>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/data-tables.js')}}"></script>
@endsection

