{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Campaign')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/select.dataTables.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-tables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="col s12 right-align top_content" >
  <a><img src="{{asset('images/lss-icon/questions.png')}}" class="responsive-img" alt="Guideline"><span class="black-text mb-3">Getting Started</span></a>
</div>
<div id="tabs-in-card inventory_content" class="section">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="row mt-2">
          <div class="col s12 mt-2">
            <div class="col s12">
              <div class="card-tabs">
                <ul class="tabs inventory_tab">
                  <li class="tab"><a href="#scheduled">Scheduled</a></li>
                  <li class="tab"><a class="active" href="#history">History</a></li>
                </ul>
              </div>
            </div>  
          </div>
        </div>
        <div class="col s12 pl-1"> 
          <div id="inventory_btn" class="col s12 m8 right">
            <div class="datatable-search right">
              <div class="input-field inline">
                <a class="btn-floating white right"><i class="material-icons grey-text left show-on-small">search</i></a>
                <!-- <label for="email" data-error="wrong" data-success="">search</label> -->
              </div>
              <a class="add_btn btn waves-effect indigo darken-4 right"><i class="material-icons left show-on-small" style="margin-right:5px;">add</i><span class="hide-on-med-and-down">Add Item</span></a>
            </div>
          </div>
          <div id="dataTables_section" class="col s12 m4">
            <div class="dataTables_length show_text" id="page-length-option_length">
            <label class="">
              Show
                <select class="" name="" style="margin-left:9%;">
                  <option value="10">10</option>
                  <option value="10">20</option>
                  <option value="10">30</option>
                </select>
              entries
            </label>  
            </div>
          </div> 
        </div>

        <div class="divider" style="margin-top:-1%;"></div>

        <div id="campaign_content" class="card-content">
          <div id="history">
            <div class="section section-data-tables">
              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <div class="col s12">
                      <table id="page-length-option" class="display">
                      <thead>
                          <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Link</th>
                            <th>Manage Order</th>
                            <th>Manage Product</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons action_icon">link</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">list_alt</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons action_icon">border_color</span>
                            </td>
                          </tr>
                          
                        </tbody>
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