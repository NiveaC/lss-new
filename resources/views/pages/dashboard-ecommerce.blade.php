{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Dashboard')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section">
   <div id="card-stats" class="pt-0">
      <div class="row">
         <div class="col s12 m6 l6 width_new">
            <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeLeft">
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
            <div class="card gradient-45deg-purple-deep-orange gradient-shadow min-height-100 white-text animate fadeLeft">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">attach_money</i>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">1,112,900</h5>
                        <p>Total Revenue</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l6 width_new">
            <div class="card gradient-45deg-indigo-light-blue gradient-shadow min-height-100 white-text animate fadeRight">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">pending_actions</i>
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
      </div>
   </div>
   <!--yearly & weekly weekly Sales Analytics-->
   <div id="sales-chart">
      <div class="row">
         <div class="col s12 m8 l8">
         <h4 class="header" style="text-transform: none">Sales Analytics</h4>
            <div id="revenue-chart" class="card animate fadeUp" style="padding-bottom:10px;">
               <div class="card-content">
                     <span class="purple-text small text-darken-1 ml-1">
                        <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span>
                        <a class='dropdown-trigger btn waves-effect waves-light btn gradient-shadow right' href='#' data-target='dropdown1'>Year</a>
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
         <div id="top_campaign_content" class="col s12 m4 l4">
            <h4 class="header" style="text-transform: none">Top Campaign</h4>
            <ul id="issues-collection" class="collection z-depth-1">
               <li class="collection-item">
                  <div class="row">
                     <!-- <div class="col s4 task_size orange accent-4">1st</div> -->
                     <div class="col s2 mt-5"><span class="task-cat orange accent-4">1st</span></div>
                     <div class="col s10">
                        <p class="collections-title font-weight-600"><strong>20211008</strong></p>
                        <p class="collections-content">Title01</p>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s2 mt-5"><span class="task-cat cyan">2nd</span></div>
                     <div class="col s7">
                        <p class="collections-title font-weight-600"><strong>20211015</strong></p>
                        <p class="collections-content">Title02</p>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s2 mt-5"><span class="task-cat red accent-2">3rd</span></div>
                     <div class="col s7">
                        <p class="collections-title font-weight-600"><strong>20210927</strong></p>
                        <p class="collections-content">Title03</p>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s2 mt-5"><span class="task-cat green darken-4">4th</span></div>
                     <div class="col s7">
                        <p class="collections-title font-weight-600"><strong>20210927</strong></p>
                        <p class="collections-content">Title03</p>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
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