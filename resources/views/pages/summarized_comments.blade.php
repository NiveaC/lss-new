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
    <div class="row">
      <div class="col s12 m12 l12 pr-0 mb-2 center">
        <span class="title" style="font-size:24pt; color:#ffffff;">Summarized Comments</span>
      </div>
    </div>
    <div id="comments_row" class="row" style="padding: 0 30pt;">
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <a class="waves-effect waves-block waves-light" href="#" data-target="comments_popup">
              <i class="material-icons">format_indent_increase</i>
            </a>
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