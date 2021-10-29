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
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
              <thead>
                  <tr>
                    <th>Online Order NO.</th>
                    <th>Order Time</th>
                    <th>FB Name</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Delivery Way</th>
                    <th>In-store Time</th>
                    <th>Shipping Date</th>
                    <th>Shipping Time</th>
                    <th>Delivery/Collection Date</th>
                    <th>Delivery Time</th>
                    <th>Sub Total</th>
                    <th>Order Status</th>
                    <th>Remarks</th>
                    <th>Payment Method</th>
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
                    <td>12345</td>
                    <td>2021/10/18 15:05</td>
                    <td>Mike</td>
                    <td>AA</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>TW</td>
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
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>12345</td>
                    <td>2021/10/18 15:05</td>
                    <td>Mike</td>
                    <td>AA</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>TW</td>
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
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>12345</td>
                    <td>2021/10/18 15:05</td>
                    <td>Mike</td>
                    <td>AA</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>TW</td>
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
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>12345</td>
                    <td>2021/10/18 15:05</td>
                    <td>Mike</td>
                    <td>AA</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>TW</td>
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
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>12345</td>
                    <td>2021/10/18 15:05</td>
                    <td>Mike</td>
                    <td>AA</td>
                    <td>0912345678</td>
                    <td>AA@gmail.com</td>
                    <td>TW</td>
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
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
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