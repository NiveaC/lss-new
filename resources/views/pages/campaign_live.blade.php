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
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/pages/css-media.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-tables.css')}}">
@endsection

{{-- main page content --}}
@section('content')
<div class="campaign_live">
  <div class="row">
    <div class="col s12 m12 l12">
      <!-- live streaming -->
      <div class="live_streaming">
        <div class="">
          <div class="col s12 m12 l4 pl-0">
            <div id="video-two" class="mr-0">
              <div class="video-container no-controls" style="width: 300pt; height: 500pt; margin-top:14pt;">
                <iframe width="200" height="600" src="https://www.youtube.com/embed/Skpu5HaVkOc" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- comment+products+incoming orders -->
      <div class="comment">
        <div class="col s12 m12 l8">
          <div id="tabs-in-card" class="section">
            <div class="card">
              <!-- Title+User -->
              <div class="card-content pb-0">
                <div class="row">
                  <div class="col s12 m12 l12">
                    <div class="col s9 m9 l6">
                      <div class="campaign_title">Title 211025</div>
                    </div>
                    <div class="col s3 m3 l5 offset-l1">
                      <div class="col s2 pr-0 mt-1 circle">
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
              <div class="card">
                <div class="row">
                  <div class="col s12 m12 l12">
                    <div class="col s9 m8 l8">
                      <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width tab_font">
                          <li class="tab"><a href="#test4">Comment</a></li>
                          <li class="tab"><a class="active" href="#test5">Product</a></li>
                          <li class="tab"><a href="#test6">Incoming Orders</a></li>
                        </ul>
                      </div>
                    </div>  
                    <div class="col s3 m4 l4 mt-1">
                    <a class="waves-effect waves-light btn mr-1 border-round">
                      <i class="material-icons show-on-small left">redeem</i><span class=" hide-on-small-only">Lucky Draw</span>                    </a>

                      <!-- <a class="btn-floating mb-1 btn-large waves-effect waves-light mr-1 hide-on-med-and-down">
                        <i class="material-icons">redeem</i>
                      </a>
                      <a class="luckdraw_btn waves-effect waves-light btn-large border-round hide-on-small-only">
                      Lucky Draw</a> -->
                    </div> 
                  </div>
                </div>
                <!-- comment -->
                <!-- <div class="card-content grey lighten-4"> -->
                  <div id="test4">
                    <div id="avatar-content" class="card card-tabs">
                      <div class="card-content">
                        <div id="view-avatar">
                          <div class="row">
                            <div class="col s12">
                              <ul class="collection">
                                <li class="collection-item avatar">
                                  <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                  <span class="title">Name</span>
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </li>
                                <li class="collection-item avatar">
                                <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                  <span class="title">Name</span>
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                  </p>
                                </li>
                                <li class="collection-item avatar">
                                <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                  <span class="title">Name</span>
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </li>
                                <li class="collection-item avatar">
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
                  <div id="test5">
                    <div id="avatar-content product_content" class="card card-tabs">
                      <div class="card-content" style="padding: 20px;">
                        <div id="view-avatar">
                          <div class="row">
                            <div class="col s12">
                              <a class="waves-effect waves-light btn mb-1">
                              <i class="material-icons left" style="margin-right:0;">add</i>Instantly Add Product</a>
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
                                        <a class="activate_btn waves-effect waves-light btn mb-1 border-round secondary-content">
                                          Activate
                                        </a>
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
                                        <a class="activate_btn waves-effect waves-light btn mb-1 border-round secondary-content">
                                          Activate
                                        </a>
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
                                        <a class="activate_btn waves-effect waves-light btn mb-1 border-round secondary-content">
                                          Activate
                                        </a>
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
                                        <a class="deactivate_btn waves-effect waves-light btn mb-1 border-round secondary-content">
                                          Deactivate
                                        </a>
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
                  <div id="test6">
                    <div class="row">
                      <div class="col s12">
                        <div class="card">
                          <div class="card-content pt-0">
                            <div class="col s12 mt-3">
                              <a class="btn mb-1 waves-effect waves-light">
                                <i class="material-icons left">message</i> Summarize Comments</a>
                              <a class="btn mb-1 waves-effect waves-light">
                                <i class="material-icons left">list_alt</i> Manage Order</a>
                              <a class="btn mb-1 waves-effect waves-light">
                                <i class="material-icons left">file_upload</i> Export</a>
                            </div>
                            <div class="row">
                              <div class="col s12 p-0">
                                <table id="page-length-option" class="display">
                                  <thead>
                                    <tr>
                                      <th>Order NO.</th>
                                      <th>Photo</th>
                                      <th>Name</th>
                                      <th>Phone</th>
                                      <th>Amount</th>
                                      <th>Payment</th>
                                      <th>Status</th>
                                      <th>View</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                    </tr>
                                    <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
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
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/app-chat.js')}}"></script>
@endsection