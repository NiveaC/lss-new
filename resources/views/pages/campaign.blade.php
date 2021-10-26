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
<div class="row">
  <div class="col s12 m12 l12 pr-0 mb-2 center-align">
    <div class="col s10 m11 l11 xl10 offset-xl1">
      <span class="title" style="font-size:24pt; color:#ffffff;">Campaign</span>
    </div>
    <div class="col s2 m1 l1 xl1 right-align">
      <span><img src="{{asset('images/lss-icon/questions01.png')}}" class="responsive-img" style="width:30px; height:30px;" alt="Guideline"></span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s12 m12 l12 pr-0">
    <div class="col s12 m7 l9 xl7">
      <a class="waves-effect waves-light btn mb-1 mr-1" style="border-radius:30pt;">Scheduled</a>
      <a class="waves-effect waves-light btn mb-1 mr-1" style="border-radius:30pt; background-color:#ffffff; color:#ff4081;">History</a>
    </div>
    <div class="col s12 m4 offset-m1 l3 xl3 offset-xl2 right-align">
      <a class="waves-effect indigo darken-4 btn mb-1 mr-1"><i class="material-icons left" style="margin-right:0;">add</i>Create</a>
    </div>
  </div>
</div>
<div class="section section-data-tables campaign">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
              <thead>
                  <tr>
                    <th></th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><button class="enter_btn btn waves-effect white black-text darken-text-2 waves-effect"><img src="{{asset('images/lss-icon/enter.png')}}" class="enter_img" alt="Enter">Enter</button></td>
                    <td>211008</td>
                    <td class="truncate"><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                    <td>2021/10/10</td>
                    <td>2021/10/15</td>
                    <td>
                    <button class="action_btn btn waves-effect indigo darken-1 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/order.png')}}" class="action_img" alt="Manage Order"><a href="#" class="action_img white-text">Manage Order</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-1 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/price-tag.png')}}" class="action_img" alt="Manage Products"><a href="#" class="action_img white-text">Manage Products</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-1 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/edit.png')}}" class="action_img" alt="Edit"><a href="#" class="action_img white-text">Edit</a>
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td><button class="enter_btn btn waves-effect white black-text darken-text-2 waves-effect"><img src="{{asset('images/lss-icon/enter.png')}}" class="enter_img" alt="Enter">Enter</button></td>
                    <td>211009</td>
                    <td class="truncate">https://ppfocus.com/0/die9e8189.html</td>
                    <td>2021/10/10</td>
                    <td>2021/10/15</td>
                    <td>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/order.png')}}" class="action_img" alt="Manage Order"><a href="#" class="action_img white-text">Manage Order</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/price-tag.png')}}" class="action_img" alt="Manage Products"><a href="#" class="action_img white-text">Manage Products</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/edit.png')}}" class="action_img" alt="Edit"><a href="#" class="action_img white-text">Edit</a>
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td><button class="enter_btn btn waves-effect white black-text darken-text-2 waves-effect"><img src="{{asset('images/lss-icon/enter.png')}}" class="enter_img" alt="Enter">Enter</button></td>
                    <td>211010</td>
                    <td class="truncate">https://ppfocus.com/0/die9e8189.html</td>
                    <td>2021/10/10</td>
                    <td>2021/10/15</td>
                    <td>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/order.png')}}" class="action_img" alt="Manage Order"><a href="#" class="action_img white-text">Manage Order</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/price-tag.png')}}" class="action_img" alt="Manage Products"><a href="#" class="action_img white-text">Manage Products</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/edit.png')}}" class="action_img" alt="Edit"><a href="#" class="action_img white-text">Edit</a>
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td><button class="enter_btn btn waves-effect white black-text darken-text-2 waves-effect"><img src="{{asset('images/lss-icon/enter.png')}}" class="enter_img" alt="Enter">Enter</button></td>
                    <td>211011</td>
                    <td></td>
                    <td>2021/10/10</td>
                    <td>2021/10/15</td>
                    <td>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/order.png')}}" class="action_img" alt="Manage Order"><a href="#" class="action_img white-text">Manage Order</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/price-tag.png')}}" class="action_img" alt="Manage Products"><a href="#" class="action_img white-text">Manage Products</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/edit.png')}}" class="action_img" alt="Edit"><a href="#" class="action_img white-text">Edit</a>
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td><button class="enter_btn btn waves-effect white black-text darken-text-2 waves-effect"><img src="{{asset('images/lss-icon/enter.png')}}" class="enter_img" alt="Enter">Enter</button></td>
                    <td>211012</td>
                    <td>https://ppfocus.com/0/die9e8189.html</a></td>
                    <td>2021/10/10</td>
                    <td>2021/10/15</td>
                    <td>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/order.png')}}" class="action_img" alt="Manage Order"><a href="#" class="action_img white-text">Manage Order</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/price-tag.png')}}" class="action_img" alt="Manage Products"><a href="#" class="action_img white-text">Manage Products</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/edit.png')}}" class="action_img" alt="Edit"><a href="#" class="action_img white-text">Edit</a>
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td><button class="enter_btn btn waves-effect white black-text darken-text-2 waves-effect"><img src="{{asset('images/lss-icon/enter.png')}}" class="enter_img" alt="Enter">Enter</button></td>
                    <td>211013</td>
                    <td></td>
                    <td>2021/10/10</td>
                    <td>2021/10/15</td>
                    <td>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/order.png')}}" class="action_img" alt="Manage Order"><a href="#" class="action_img white-text">Manage Order</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/price-tag.png')}}" class="action_img" alt="Manage Products"><a href="#" class="action_img white-text">Manage Products</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/edit.png')}}" class="action_img" alt="Edit"><a href="#" class="action_img white-text">Edit</a>
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td><button class="enter_btn btn waves-effect white black-text darken-text-2 waves-effect"><img src="{{asset('images/lss-icon/enter.png')}}" class="enter_img" alt="Enter">Enter</button></td>
                    <td>211014</td>
                    <td>https://ppfocus.com/0/die9e8189.html</a></td>
                    <td>2021/10/10</td>
                    <td>2021/10/15</td>
                    <td>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/order.png')}}" class="action_img" alt="Manage Order"><a href="#" class="action_img white-text">Manage Order</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/price-tag.png')}}" class="action_img" alt="Manage Products"><a href="#" class="action_img white-text">Manage Products</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/edit.png')}}" class="action_img" alt="Edit"><a href="#" class="action_img white-text">Edit</a>
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td><button class="enter_btn btn waves-effect white black-text darken-text-2 waves-effect"><img src="{{asset('images/lss-icon/enter.png')}}" class="enter_img" alt="Enter">Enter</button></td>
                    <td>211015</td>
                    <td></td>
                    <td>2021/10/10</td>
                    <td>2021/10/15</td>
                    <td>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/order.png')}}" class="action_img" alt="Manage Order"><a href="#" class="action_img white-text">Manage Order</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/price-tag.png')}}" class="action_img" alt="Manage Products"><a href="#" class="action_img white-text">Manage Products</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/edit.png')}}" class="action_img" alt="Edit"><a href="#" class="action_img white-text">Edit</a>
                    </button>
                    </td>
                  </tr>
                  <tr>
                    <td><button class="enter_btn btn waves-effect white black-text darken-text-2 waves-effect"><img src="{{asset('images/lss-icon/enter.png')}}" class="enter_img" alt="Enter">Enter</button></td>
                    <td>211016</td>
                    <td></td>
                    <td>2021/10/10</td>
                    <td>2021/10/15</td>
                    <td>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/order.png')}}" class="action_img" alt="Manage Order"><a href="#" class="action_img white-text">Manage Order</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/price-tag.png')}}" class="action_img" alt="Manage Products"><a href="#" class="action_img white-text">Manage Products</a>
                    </button>
                    <button class="action_btn btn waves-effect indigo darken-4 border-round mb-1 mr-1" type="submit" name="action">
                      <img src="{{asset('images/lss-icon/edit.png')}}" class="action_img" alt="Edit"><a href="#" class="action_img white-text">Edit</a>
                    </button>
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