{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Campaign Prize Winner')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="row">
  <div class="col s12 m12 l12">
    <a class="waves-block waves-light sidenav-trigger" href="#" data-target="prize_popup">
      <span class="material-icons grey-text text-darken-3 small-ico-bg mb-1 right">more_horiz</span></a>
    <a class="waves-effect waves-light btn mb-1 mr-1 border-round right sidenav-trigger" href="#" data-target="all_winner_popup">All</a>
  </div>
</div>
<div id="luckydraw_winner_content" class="section">
  <div class="row">
    <div class="col s12">
      <div class="card bg_card">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h5 class="center mb-2">Prize</h5>
              <div class="col s12 m12 l12 center">
                <img src="{{asset('images/prize1.png')}}" alt="" class="responsive-img circle" width="130" style=""/>
                <br>
                <div class="mt-1">Cup Cake</div>
              </div>
            </div>           
          </div>
          <div class="divider mt-2"></div>
          <!-- 得獎者 -->
          <h5 class="center mt-3">Prize Winner</h5>
          <div class="row prize_winner">
            <div class="col s12 m12 l12">
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              <div class="col s12 m4 l3 center-align mt-4">
                <img class="responsive-img circle z-depth-2" width="120" src="{{asset('images/user/12.jpg')}}" alt="">
                <br>
                <div class="winner_name mt-1"> Name</div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('pages.sidebar.prize_popup')
@include('pages.sidebar.all_winner_popup')
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