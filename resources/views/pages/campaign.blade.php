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
<!-- 原本功能列 -->
<!-- <div class="row campaign_btn mt-2">
  <div class="col s12 m12 l12 pr-0">
    <div class="col s12 m7 l9 xl7">
      <a class="waves-effect waves-light btn mt-2 mr-1" style="border-radius:30pt;">Scheduled</a>
      <a class="waves-effect waves-light btn mt-2 mr-1" style="border-radius:30pt; background-color:#ffffff; color:#ff4081;">History</a>
    </div>
    <div class="col s12 m4 offset-m1 l3 xl3 offset-xl2 mt-1 right-align">
      <a class="btn waves-effect indigo darken-4 mb-3 mr-1"><i class="material-icons left" style="margin-right:0;">add</i>Create</a>
      <span><img src="{{asset('images/lss-icon/questions01.png')}}" class="responsive-img right" style="width:30px; height:30px;" alt="Guideline"></span>
    </div>
  </div>
</div> -->

<div class="col s12 mt-1 right-align">
  <a><img src="{{asset('images/lss-icon/questions01.png')}}" class="responsive-img" style="width:25px; height:25px; margin-bottom: -0.5rem;" alt="Guideline"><span class="right-align white-text mb-3">Getting Started</span></a>
</div>
<div id="tabs-in-card inventory_content" class="section">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="row mt-2">
          <div class="col s12 m12 l12 mt-2">
            <div class="col s12">
              <div id="inventory_tab" class="card-tabs" style="border-bottom:1px solid #cfd8dc;">
                <ul class="tabs">
                  <li class="tab"><a href="#test4" style="text-transform:none;">Scheduled</a></li>
                  <li class="tab"><a class="active" href="#test5" style="text-transform:none;">History</a></li>
                </ul>
              </div>
            </div>  
          </div>
        </div>
        <div class="col s12 m12 l12" style="padding-left:7px;"> 
          <div id="inventory_btn" class="col s12 m9 right">
            <div class="datatable-search right">
              <a class="search_btn btn waves-effect border-round grey-text white"><i class="material-icons grey-text left">search</i><span class="hide-on-med-and-down">Search</span></a>
              <a class="add_btn btn waves-effect indigo darken-4 right"><i class="material-icons left show-on-small" style="margin-right:5px;">add</i><span class="hide-on-med-and-down">Add Item</span></a>
            </div>
          </div>
          <div id="dataTables_section" class="col s12 m3">
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

        <div id="campaign_content " class="card-content">
          <div id="test5" style="background-color:#ffffff;">
            <div class="section section-data-tables">
              <div class="row" style="background-color:#ffffff;">
                <div class="col s12">
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
                            <th>Manage</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a class="btn waves-effect border-round enter_btn"><i class="material-icons left" style="margin-right:5px;">logout</i>Enter</a>
                            </td>
                            <td>211008</td>
                            <td><a href="#">https://ppfocus.com/0/die9e8189.html</a></td>
                            <td>2021/10/10</td>
                            <td>2021/10/15</td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">list_alt</span>
                              <span class="material-icons" style="color:#b6b6b6;">local_offer</span>
                            </td>
                            <td>
                              <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
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

<!-- <div id="campaign_content" class="section section-data-tables">
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
                    <th>Manage</th>
                    <th>Action</th>
                    <th>Edit</th>
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
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
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
</div> -->
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