{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- Page title --}}
@section('title','Campaign_live')

{{-- page styles --}}
@section('page-style')
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/pages/css-media.css')}}"> -->
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
          <div class="col s12 m12 l4">
            <div id="video-two" class="mr-0">
              <!-- <div class="mt-5"> -->
                <div class="video-container no-controls" style="width: 250pt; height: 500pt; margin-top:14pt;">
                  <iframe width="200" height="600" src="https://www.youtube.com/embed/Skpu5HaVkOc" allowfullscreen></iframe>
                </div>
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
      <!-- comment+products -->
      <div class="comment">
        <div class="col s12 m12 l8">
          <div id="tabs-in-card" class="section">
            <div class="card">
              <div class="card-content pb-0">
                <div class="campaign_title">Title 2111025</div>
                  <div class="buyer_info grey lighten-4">
                    <ul class="collection">
                      <li class="collection-item avatar info_size">
                        <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                        <span class="title">快賣</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12 l12">
                    <div class="col s10 m8 l9">
                      <div class="card-tabs tab_font">
                        <ul class="tabs tabs-fixed-width">
                          <li class="tab"><a href="#test4">Comments</a></li>
                          <li class="tab"><a class="active" href="#test5">Products</a></li>
                          <li class="tab"><a href="#test6">Incoming Orders</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- <div class="col s2 m4 l3">
                        <a class="luckdraw_btn waves-effect waves-light btn-large border-round">
                        <i class="material-icons right"></i> Lucky Draw</a>
                    </div>  -->
                  <div class="card-content grey lighten-4">
                    <!-- comment -->
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
                                    <p>First Line
                                      <br> Second Line
                                    </p>
                                  </li>
                                  <li class="collection-item avatar">
                                  <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                    <span class="title">Name</span>
                                    <p>First Line
                                      <br> Second Line
                                    </p>
                                  </li>
                                  <li class="collection-item avatar">
                                  <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                    <span class="title">Name</span>
                                    <p>First Line
                                      <br> Second Line
                                    </p>
                                  </li>
                                  <li class="collection-item avatar">
                                  <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                    <span class="title">Name</span>
                                    <p>First Line
                                      <br> Second Line
                                    </p>
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
                      <!-- <h6 class="center"> Instantly Add Product</h6> -->
                      <div id="avatar-content" class="card card-tabs">
                        <div class="card-content">
                          <div id="view-avatar">
                            <div class="row">
                              <div class="col s12">
                                <ul class="collection">
                                  <li class="collection-item avatar">
                                    <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                    <span class="title">Cheese Cake</span>
                                    <p>First Line
                                      <br> Second Line
                                    </p>
                                  </li>
                                  <li class="collection-item avatar">
                                  <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                    <span class="title">Apple Pie</span>
                                    <p>First Line
                                      <br> Second Line
                                    </p>
                                  </li>
                                  <li class="collection-item avatar">
                                  <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                    <span class="title">Carrot Cake</span>
                                    <p>First Line
                                      <br> Second Line
                                    </p>
                                  </li>
                                  <li class="collection-item avatar">
                                  <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                    <span class="title">Name</span>
                                    <p>First Line
                                      <br> Second Line
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div>
                    <!-- Imcoming orders -->
                    <div id="test6">Revolutionary, expose the truth shine benefit corporation, activate
                      incubator revolutionary co-create.</div>
                  </div>



                      <!-- origin -->
                    <div class="col s10 m8 l9">
                      <div class="card-tabs tab_font">
                        <ul class="tabs tabs-fixed-width">
                          <li class="tab"><a href="#test4">Comments</a></li>
                          <li class="tab"><a class="active" href="#test5">Products</a></li>
                          <li class="tab"><a class="active" href="#test6">Incoming Orders</a></li>
                        </ul>
                      </div>
                    </div>  
                    <div class="col s2 m4 l3 mb-0">
                        <a class="luckdraw_btn waves-effect waves-light btn-large border-round">
                        <i class="material-icons right"></i> Lucky Draw</a>
                    </div>  
                  </div>
                </div>
              <div class="card-content grey lighten-4">
                <div class="test4">
                  <div id="avatar-content" class="card card-tabs">
                    <div class="card-content">
                      <div id="view-avatar">
                        <div class="row">
                          <div class="col s12">
                            <ul class="collection">
                              <li class="collection-item avatar">
                                <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                <span class="title">Name</span>
                                <p>First Line
                                  <br> Second Line
                                </p>
                              </li>
                              <li class="collection-item avatar">
                              <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                <span class="title">Name</span>
                                <p>First Line
                                  <br> Second Line
                                </p>
                              </li>
                              <li class="collection-item avatar">
                              <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                <span class="title">Name</span>
                                <p>First Line
                                  <br> Second Line
                                </p>
                              </li>
                              <li class="collection-item avatar">
                              <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                <span class="title">Name</span>
                                <p>First Line
                                  <br> Second Line
                                </p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="test5">

                        <div class="row">
                          <div class="col s12">
                            <ul class="collection">
                              <li class="collection-item avatar">
                                <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                <span class="title">Cheese Cake</span>
                                <p>First Line
                                  <br> Second Line
                                </p>
                              </li>
                              <li class="collection-item avatar">
                              <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                <span class="title">Apple Pie</span>
                                <p>First Line
                                  <br> Second Line
                                </p>
                              </li>
                              <li class="collection-item avatar">
                              <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                <span class="title">Carrot</span>
                                <p>First Line
                                  <br> Second Line
                                </p>
                              </li>
                              <li class="collection-item avatar">
                              <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle">
                                <span class="title">Name</span>
                                <p>First Line
                                  <br> Second Line
                                </p>
                              </li>
                            </ul>
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

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/app-chat.js')}}"></script>
@endsection