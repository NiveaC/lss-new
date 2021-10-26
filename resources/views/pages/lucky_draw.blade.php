{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Campaign Lucky Draw')

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
  <div class="col s12 m12 l12 xl12">
    <a class="waves-block waves-light sidenav-trigger" href="#" data-target="prize_popup">
      <span class="material-icons grey-text text-darken-3 small-ico-bg mb-1 right">more_horiz</span>
    </a>
  </div>
</div>
<div id="luckydraw_content" class="section">
  <div class="row">
    <div class="col s12">
      <div class="card bg_card">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <div class="col s12 m6 l5">
                <img src="{{asset('images/prize.png')}}" alt="" class="responsive-img"style=""/>
              </div>
              <div class="col s12 m6 l7 mt-9 pr-10 pl-3 prize_content">
                <table class="">
                  <tbody>
                    <tr>
                      <td class="prize_title">Prize :</td>
                      <td>Cup Cake</td> 
                    </tr>
                    <tr>
                      <td class="prize_title">Comments Including :</td>
                      <td>Good</td>
                    </tr>
                    <tr>
                      <td class="prize_title">Number of Winner :</td>
                      <td>4</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <!-- <div id="horizontal-card" class="section cneter">
                <div class="row">
                  <div class="col s12 m12 l12">
                    <div class="col">
                      <div class="s6">
                        <div class="card horizontal">
                          <div class="card-image"><img src="{{asset('images/prize.png')}}" alt="" style="width:200px;height:200px"/></div>
                          <div class="card-stacked">
                            <div class="card-content">
                              <ul>
                                <li>Prize</li>
                                <li>Comments Including</li>
                                <li>Number of Winner</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="row mt-5 center">
                <div class="col s12 m12 l12">
                  <div class="row">
                    <div class="col s12">
                      <a class="waves-effect waves-light btn btn-large gradient-45deg-light-blue-cyan border-round z-depth-4 mr-1 mb-2">Draw Now</a>
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