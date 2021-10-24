{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Dashboard Ecommerce')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section">
   <!--card stats start-->
   <div id="card-stats" class="pt-0">
      <div class="row">
         <div class="col s12 m6 l6 width_new">
            <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">add_shopping_cart</i>
                        <p> </p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">6,00,00</h5>
                        <p class="no-margin"> </p>
                        <p>Total Sales</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l6 width_new">
            <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">perm_identity</i>
                        <!-- <p>Clients</p> -->
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">1,12,900</h5>
                        <!-- <p class="no-margin">Total Revenue</p> -->
                        <p>Total Revenue</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l6 width_new">
            <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">timeline</i>
                        <p></p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">20%</h5>
                        <p class="no-margin"></p>
                        <p>Total Pending</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
          <!-- <div class="col s12 m6 l6 xl3">  -->
            <!-- <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">attach_money</i>
                        <p>Profit</p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">$890</h5>
                        <p class="no-margin">Today</p>
                        <p>$25,000</p>
                     </div>
                  </div>
               </div>
            </div> -->
         <!-- </div>  -->
      </div>
   </div>
   <!--card stats end-->
   <!--yearly & weekly weekly Sales Analytics-->
   <div id="sales-chart">
      <div class="row">
         <div class="col s12 m8 l8">
         <h4 class="header">Sales Analytics</h4>
            <div id="revenue-chart" class="card animate fadeUp">
               <div class="card-content">
                     <span class="purple-text small text-darken-1 ml-1">
                        <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span>
                        <a class='dropdown-trigger btn waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right' href='#' data-target='dropdown1'>Year</a>
                        <!-- Dropdown Structure -->
                        <ul id='dropdown1' class='dropdown-content'>
                           <li><a href="#!">Year</a></li>
                           <li><a href="#!">Month</a></li>
                           <li><a href="#!">Week</a></li>
                        </ul>
                  <div class="row">
                     <div class="col s12">
                        <div class="yearly-revenue-chart">
                           <canvas id="thisYearRevenue" class="firstShadow" height="350"></canvas>
                           <canvas id="lastYearRevenue" height="350"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Top Campaign -->
         <div class="col s12 m4 l4">
            <h4 class="header">Top Campaign</h4>
            <ul id="issues-collection" class="collection z-depth-1">
               <li class="collection-item">
                  <div class="row">
                     <div class="col s7">
                        <p class="collections-title font-weight-600"><strong>20211008</strong></p>
                        <p class="collections-content">Title01</p>
                     </div>
                     <div class="col s2"><span class="task-cat deep-orange accent-2">P1</span></div>
                     <div class="col s3">
                        <div class="progress">
                           <div class="determinate" style="width: 70%"></div>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s7">
                        <p class="collections-title font-weight-600"><strong>20211015</strong></p>
                        <p class="collections-content">Title02</p>
                     </div>
                     <div class="col s2"><span class="task-cat cyan">P2</span></div>
                     <div class="col s3">
                        <div class="progress">
                           <div class="determinate" style="width: 40%"></div>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s7">
                        <p class="collections-title font-weight-600"><strong>20210927</strong></p>
                        <p class="collections-content">Title03</p>
                     </div>
                     <div class="col s2"><span class="task-cat red accent-2">P3</span></div>
                     <div class="col s3">
                        <div class="progress">
                           <div class="determinate" style="width: 95%"></div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!--yearly & weekly revenue chart end-->
   <!-- Member online, Currunt Server load & Today's Revenue Chart start -->
   <!-- <div id="daily-data-chart">
      <div class="row">
         <div class="col s12 m4 l4">
            <div class="card pt-0 pb-0 animate fadeLeft">
               <div class="dashboard-revenue-wrapper padding-2 ml-2">
                  <span class="new badge gradient-45deg-light-blue-cyan gradient-shadow mt-2 mr-2">+ 42.6%</span>
                  <p class="mt-2 mb-0">Members online</p>
                  <p class="no-margin grey-text lighten-3">360 avg</p>
                  <h5>3,450</h5>
               </div>
               <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                  <canvas id="custom-line-chart-sample-one" class="center"></canvas>
               </div>
            </div>
         </div>
         <div class="col s12 m4 l4 animate fadeUp">
            <div class="card pt-0 pb-0">
               <div class="dashboard-revenue-wrapper padding-2 ml-2">
                  <span class="new badge gradient-45deg-purple-deep-orange gradient-shadow mt-2 mr-2">+ 12%</span>
                  <p class="mt-2 mb-0">Current server load</p>
                  <p class="no-margin grey-text lighten-3">23.1% avg</p>
                  <h5>+2500</h5>
               </div>
               <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                  <canvas id="custom-line-chart-sample-two" class="center"></canvas>
               </div>
            </div>
         </div>
         <div class="col s12 m4 l4">
            <div class="card pt-0 pb-0 animate fadeRight">
               <div class="dashboard-revenue-wrapper padding-2 ml-2">
                  <span class="new badge gradient-45deg-amber-amber gradient-shadow mt-2 mr-2">+ $900</span>
                  <p class="mt-2 mb-0">Today's revenue</p>
                  <p class="no-margin grey-text lighten-3">$40,512 avg</p>
                  <h5>$ 22,300</h5>
               </div>
               <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                  <canvas id="custom-line-chart-sample-three" class="center"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- Member online, Currunt Server load & Today's Revenue Chart start -->
   <!-- ecommerce product start-->
   <!-- <div id="ecommerce-product">
      <div class="row">
         <div class="col s12 m4">
            <div class="card animate fadeLeft">
               <div class="card-content  center">
                  <h6 class="card-title font-weight-400 mb-0">Apple Watch</h6>
                  <img src="{{asset('images/cards/watch.png')}}" alt="" class="responsive-img" />
                  <p><b>The Apple Watch</b></p>
                  <p>One day only exclusive sale on our marketplace</p>
               </div>
               <div class="card-action border-non center">
                  <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">$ 999/-</a>
               </div>
            </div>
         </div>
         <div class="col s12 m4">
            <div class="card animate fadeUp">
               <div class="card-content center">
                  <span class="card-title center-align">Music</span>
                  <img src="{{asset('images/cards/headphones-2.png')}}" alt="" class="responsive-img" />
               </div>
               <div class="card-action pt-0">
                  <p class="">Default Quality</p>
                  <div class="chip">192kb <i class="close material-icons">close</i></div>
                  <div class="chip">320kb <i class="close material-icons">close</i></div>
               </div>
               <div class="card-action pt-0">
                  <p class="">Save Video Quality</p>
                  <div class="switch">
                     <label> Off <input type="checkbox" /> <span class="lever"></span> On </label>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m4">
            <div class="card animate fadeRight">
               <div class="card-content center">
                  <h6 class="card-title font-weight-400 mb-0">iPhone</h6>
                  <img src="{{asset('images/cards/iphonec.png')}}" alt="" class="responsive-img" />
                  <p><b>The Apple iPhone X</b></p>
                  <p>One day only exclusive sale on our marketplace</p>
               </div>
               <div class="card-action border-non center">
                  <a class="waves-effect waves-light btn gradient-45deg-red-pink box-shadow">$ 299/-</a>
               </div>
            </div>
         </div>
      </div> -->
      <!-- ecommerce product end-->
      <!-- ecommerce offers start-->
      <!-- <div id="ecommerce-offer">
         <div class="row">
            <div class="col s12 m3">
               <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
                  <div class="card-content center">
                     <img src="{{asset('images/icon/apple-watch.png')}}"
                        class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                     <h5 class="white-text lighten-4">50% Off</h5>
                     <p class="white-text lighten-4">On apple watch</p>
                  </div>
               </div>
            </div>
            <div class="col s12 m3">
               <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
                  <div class="card-content center">
                     <img src="{{asset('images/icon/printer.png')}}"
                        class="width-40 border-round z-depth-5 responsive-img" alt="images" />
                     <h5 class="white-text lighten-4">20% Off</h5>
                     <p class="white-text lighten-4">On Canon Printer</p>
                  </div>
               </div>
            </div>
            <div class="col s12 m3">
               <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
                  <div class="card-content center">
                     <img src="{{asset('images/icon/laptop.png')}}"
                        class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                     <h5 class="white-text lighten-4">40% Off</h5>
                     <p class="white-text lighten-4">On apple macbook</p>
                  </div>
               </div>
            </div>
            <div class="col s12 m3">
               <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
                  <div class="card-content center">
                     <img src="{{asset('images/icon/bowling.png')}}"
                        class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                     <h5 class="white-text lighten-4">60% Off</h5>
                     <p class="white-text lighten-4">On any game</p>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- ecommerce offers end-->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
   <!-- </div> -->
   <!--end container-->
</div>
@endsection

<!-- {{-- vendor script --}}
@section('vendor-script')
<script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/dashboard-ecommerce.js')}}"></script>
@endsection -->