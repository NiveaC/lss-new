{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Order Report')

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

<!-- order excel -->
<div class="section section-data-tables">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="col s12 m12 l12 p-0" style="padding-left:7px; margin-top:-1rem;"> 
            <div id="inventory_btn" class="col s3 m9 right p-0">
              <div class="datatable-search right">
                <a class="search_btn btn waves-effect border-round grey-text white"><i class="material-icons grey-text left show-on-small">search</i>Search</a>
                <!-- <a class="add_btn btn waves-effect indigo darken-4 right"><i class="material-icons left show-on-small" style="margin-right:5px;">add</i>Export</a> -->
              </div>
            </div>
            <div id="" class="col s12 m3 p-0">
              <div class="dataTables_length show_text" id="page-length-option_length">
              <label class="">
                Show
                  <select class="" name="">
                    <option value="10">10</option>
                    <option value="10">20</option>
                    <option value="10">30</option>
                  </select>
                entries
              </label>  
              </div>
            </div> 
          </div>
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
              <thead>
                  <tr>
                    <th>Name</th>
                    <th>Date_Time</th>
                    <th>Order No.</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Payment Method</th>
                    <th>Order Status</th>
                    <th>Sub Total</th>
                    <th>Delivery</th>
                    <th>Address</th>
                    <th>In-store Time</th>
                    <th>Shipping Date</th>
                    <th>Shipping Time</th>
                    <th>Delivery/Collection Date</th>
                    <th>Delivery Time</th>
                    <th>Remarks</th>
                    <th>Payment Info</th>
                    <th>Payment Return</th>
                    <th>Payment Card Type</th>
                    <th>Payment Card No.</th>
                    <th>Internal Remarks</th>
                    <th>Product01</th>
                    <th>Product02</th>
                    <th>Product03</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" style="width: 30px; margin-bottom: -0.7rem; margin-right:1rem;"><span style="line-height: 4px;">Mike Weng</span></td>
                    <td>2021/10/18 15:05</td>
                    <td>12345</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>General Payment</td>
                    <td>Proceed</td>
                    <td>125</td>
                    <td>in-store pickup</td>
                    <td>2021/10/31 SUN</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
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