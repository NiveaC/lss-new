{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Summarized Comments')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div id="summarized_comments">
  <div id="card-with-analytics" class="section">
    <div id="comments_row" class="row" style="padding: 0 30pt;">
      <div class="col s12 mt-0">
        <a class="btn indigo darken-4 mb-1 waves-effect waves-light mr-1">
          <i class="material-icons left mr-0">refresh</i>Refresh Orders</a>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="comments_popup"><span class="material-icons amber-text small-ico-bg mb-5">chat_bubble_outline</span></a>
            <h4 class="m-0"><b>1.6k</b></h4>
            <p>Delivery</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="comments_popup"></a>
            <p class="m-0"><b>Shipping Fee</b></p>
            <div class="row">
              <div class="col s12">
                <div class="col s3 m3 l5 left">
                 <a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="comments_popup"><span class="material-icons amber-text small-ico-bg mb-5">chat_bubble_outline</span></a>
                </div>
              
                <div class="col s9 m9 l7">
                  <h5 class="m-0 grey-text">1.6k</h5>
                </div>
              </div>
            </div>
            
              <div class="section">
                <div class="chip cyan white-text">
                  # Tag
                </div>
                <div class="chip cyan white-text">
                  # Keyword
                </div>
                <div class="chip cyan white-text">
                  # Tag
                </div>
                <div class="chip cyan  white-text">
                  # Keyword
                </div>
                <div class="chip cyan  white-text">
                  # Keyword
                </div>
                <div class="chip cyan  white-text">
                  # Tag
                </div>
                <div class="chip cyan  white-text">
                  # Tag
                </div>
                <div class="chip cyan  white-text">
                  # Tag
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <span class="material-icons amber-text small-ico-bg mb-5">assignment_return</span>
            <h4 class="m-0"><b>890</b></h4>
            <p>Return</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
          <span class="material-icons amber-text small-ico-bg mb-5">contact_support</span>
            <h4 class="m-0"><b>890</b></h4>
            <p>Undefined</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="padding: 0 30pt;">
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
          <span class="material-icons amber-text small-ico-bg mb-5">local_shipping</span>
            <h4 class="m-0"><b>21.5k</b></h4>
            <p>Delivery</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <span class="material-icons amber-text small-ico-bg mb-5">paid</span>
            <h4 class="m-0"><b>1.6k</b></h4>
            <p>Shipping Fee</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <span class="material-icons amber-text small-ico-bg mb-5">assignment_return</span>
            <h4 class="m-0"><b>890</b></h4>
            <p>Return</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
          <span class="material-icons amber-text small-ico-bg mb-5">contact_support</span>
            <h4 class="m-0"><b>890</b></h4>
            <p>Undefined</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="padding: 0 30pt;">
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
          <span class="material-icons amber-text small-ico-bg mb-5">local_shipping</span>
            <h4 class="m-0"><b>21.5k</b></h4>
            <p>Delivery</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <span class="material-icons amber-text small-ico-bg mb-5">paid</span>
            <h4 class="m-0"><b>1.6k</b></h4>
            <p>Shipping Fee</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <span class="material-icons amber-text small-ico-bg mb-5">assignment_return</span>
            <h4 class="m-0"><b>890</b></h4>
            <p>Return</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
          <span class="material-icons amber-text small-ico-bg mb-5">contact_support</span>
            <h4 class="m-0"><b>890</b></h4>
            <p>Undefined</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('pages.sidebar.comments_popup')
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/chartist-js/chartist.min.js')}}"></script>
<script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
<script src="{{asset('fonts/fontawesome/js/all.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/cards-extended.js')}}"></script>
<script src="{{asset('js/custom/custom-script.js')}}"></script>
@endsection