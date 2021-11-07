{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Auto Reply')

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
<div class="row reply_btn top_content">
  <div class="col s12 right-align">
    <a class="waves-effect indigo darken-4 btn"><i class="material-icons left" style="margin-right:5px;">add</i>Create</a>
  </div>
</div>
<div class="section section-data-tables">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display" style="background-color:none; width:100%;display:block; overflow-x:auto;white-space:nowrap;">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Keywords to Detect</th>
                    <th>Set Automated Response</th>
                    <th>Remark</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>23</td>
                    <td>remove</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>
                      <span class="material-icons action_icon">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons action_icon">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>remove</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>
                      <span class="material-icons action_icon">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons action_icon">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>remove</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>
                      <span class="material-icons action_icon">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons action_icon">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>remove</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>
                      <span class="material-icons action_icon">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons action_icon">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>remove</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>
                      <span class="material-icons action_icon">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons action_icon">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>remove</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>
                      <span class="material-icons action_icon">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons action_icon">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>remove</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td>
                      <span class="material-icons action_icon">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons action_icon">delete</span></span>
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