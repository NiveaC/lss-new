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
    <div class="col s12 m12 l12">
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
      <div class="comment">
        <div class="col s12 m12 l8 right p-0">
          <div id="tabs-in-card" class="section">
            <div class="card">
              <div class="card-content pb-0">
                <div class="row">
                  <div class="col s12 m12 l12">
                    <div class="col s9 m9 l6 campaign_content">
                      <div class="campaign_title">Title 211025</div>
                    </div>
                    <div class="col s3 m3 l4 offset-l2 right-align">
                      <div class="col s2 pr-0 mt-1 circle right">
                        <a href="#"><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                      </div>
                      <div class="col s10 user_name hide-on-med-and-down">
                        <a href="#">
                          <p class="m-5" style="">快賣</p>
                        </a>
                      </div>  
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col s12 m12 l12">
                  <div class="col s12 m8 l8">
                    <div class="card-tabs">
                      <ul class="tabs tabs-fixed-width tab_font">
                        <li class="tab"><a href="#comment">Comment</a></li>
                        <li class="tab"><a class="active" href="#product">Product</a></li>
                        <li class="tab"><a href="#order">Incoming Orders</a></li>
                      </ul>
                    </div>
                  </div>  
                  <div id="luckudraw_btn" class="col s4 offset-s7 m4 l4 right-align">
                    <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan mr-1 border-round">
                    <i class="material-icons show-on-small left">redeem</i><span class=" hide-on-small-only">Lucky Draw</span></a>
                  </div> 
                </div>
              </div>
              <!-- comment -->
              <div id="comment">
                <div id="avatar-content" class="card card-tabs">
                  <div class="card-content" style="padding-left: 0px; padding-right: 0px;">
                    <div id="view-avatar">
                      <div class="row">
                        <div class="col s12">
                          <ul class="collection comment_content" style="border:none; margin-top:-2%;">
                            <li class="collection-item avatar" style="min-height:0;">
                              <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar" style="min-height:0;">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                              </p>
                            </li>
                            <li class="collection-item avatar" style="min-height:0;">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar" style="min-height:0;">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar" style="min-height:0;">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar" style="min-height:0;">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar" style="min-height:0;">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar" style="min-height:0;">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar" style="min-height:0;">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                              <span class="title">Name</span>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </li>
                            <li class="collection-item avatar" style="min-height:0;">
                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
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
                            <div class="col s12 right">
                                <a class="waves-effect indigo darken-4 btn right">
                                <i class="material-icons left" style="margin-right:5px;">add</i>Instantly Add Product</a>
                            </div>
                          </div>
                          <ul class="collection">
                            <li class="product_info product_avatar">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <div class="col s12 m7 l8" style="padding-left: 65px;">
                                    <img src="{{asset('images/cheese cake.jpg')}}" alt="" class="circle" style="height: 42pt; width: 42pt; position: absolute; left: 15px;">
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
                                        <label>Activate
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="product_info product_avatar">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <div class="col s12 m7 l8" style="padding-left: 65px;">
                                    <img src="{{asset('images/egg tart.jpg')}}" alt="" class="circle" style="height: 42pt; width: 42pt; position: absolute; left: 15px;">
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
                                        <label>Activate
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="product_info product_avatar">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <div class="col s12 m7 l8" style="padding-left: 65px;">
                                    <img src="{{asset('images/carrot cake.jpg')}}" alt="" class="circle" style="height: 42pt; width: 42pt; position: absolute; left: 15px;">
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
                                        <label>Activate
                                          <input type="checkbox" />
                                          <span class="lever"></span>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="product_info product_avatar">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <div class="col s12 m7 l8" style="padding-left: 65px;">
                                    <img src="{{asset('images/tiramisu.jpg')}}" alt="" class="circle" style="height: 42pt; width: 42pt; position: absolute; left: 15px;">
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
                                        <label>Activate
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
                <div id="avatar-content product_content" class="card card-tabs">
                  <div class="card-content" >
                    <div id="view-avatar">
                      <div class="row order_content">
                        <div class="col s12">
                          <div class="col s12 mt-1 right-align p-0 order_content">
                            <a class="btn mb-1 waves-effect indigo darken-4">
                              <i class="material-icons left" style="border:1px solid #1a237e;">message</i>Summarized Comments</a>
                            <a class="btn mb-1 waves-effect indigo darken-4">
                              <i class="material-icons left" >list_alt</i>Manage Order</a>
                            <a class="btn mb-1 waves-effect indigo darken-4">
                              <i class="material-icons left">download</i> Export</a>
                          </div>
                          <div class="section section-data-tables">
                            <div class="card-content pt-0">
                              <div class="row">
                                <div class="col s12 p-0">
                                  <table id="page-length-option" class="display" style="width:100%;display:block;overflow-x:auto;white-space:nowrap;">
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
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">visibility</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12345</td>
                                        <td>
                                          <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle mt-1" style="width: 30px;">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>091234567</td>
                                        <td>127.5</td>
                                        <td>General Payment</td>
                                        <td>Proceed</td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">shopping_cart</i>
                                        </td>
                                        <td>
                                          <i class="material-icons left show-on-small" style="margin-right:5px; color:#b6b6b6;">visibility</i>
                                        </td>
                                      </tr>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
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

