{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Summarized Comments')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.min.css')}}">
@endsection

@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection


{{-- page content --}}
@section('content')
<div id="summarized_comments">
  <div id="card-with-analytics" class="section">
    <div id="comments_row" class="row">
      <div class="col s12 mt-0 right-align">
        <a class="btn indigo darken-4 mb-1 waves-effect waves-light mr-1">
          <i class="material-icons left" style="margin-right:5px;">refresh</i>Refresh</a>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">paid</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Shipping Fee</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">local_shipping</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Delivery</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">assignment_return</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Return</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">contact_support</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Undefined</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">paid</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Shipping Fee</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">paid</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Shipping Fee</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">paid</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Shipping Fee</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">paid</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Shipping Fee</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">local_shipping</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Delivery</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">paid</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Shipping Fee</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">contact_support</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Undefined</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width commments_card">
        <div class="card border-radius-6">
          <div class="card-content">
            <a class="waves-effect waves-block waves-light black-text sidenav-trigger" href="#" data-target="comments_popup">
              <div class="row mb-8">
                <div class="col s3 m2 l2">
                  <span class="material-icons amber-text small-ico-bg">assignment_return</span>
                </div>
                <div class="col s9 m10 l10 left-align">
                  <b class="comments_title">Return</b>
                </div>
              </div>
              <div class="row">
                <div class="col s12 left" style="">
                  <h6 class="grey-text comments_no">1,342 comments</h6>
                </div>
              </div>
              <br>
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
            </a>
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