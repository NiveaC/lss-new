{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Inventories')

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
<div id="tabs-in-card inventory_content" class="section">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="row mt-2">
          <div class="col s12 m12 l12 mt-2">
            <div class="col s12">
              <div class="card-tabs">
                <ul class="tabs inventory_tab">
                  <li class="tab"><a href="#for_sale">For Sale</a></li>
                  <li class="tab"><a class="active" href="#disable">Disable</a></li>
                  <li class="tab"><a href="#archie">Archie</a></li>
                </ul>
              </div>
            </div>  
          </div>
        </div>
        <div class="col s12 m12 l12 pl-1"> 
          <div id="inventory_btn" class="col s12 m8 right">
            <div class="datatable-search right">
              <div class="input-field inline">
                <a class="btn-floating white right"><i class="material-icons grey-text left show-on-small">search</i></a>
                <!-- <label for="email" data-error="wrong" data-success="">search</label> -->
              </div>
              <a class="add_btn btn waves-effect indigo darken-4 right"><i class="material-icons left show-on-small" style="margin-right:5px;">add</i><span class="hide-on-med-and-down">Add Item</span></a>
            </div>
          </div>
          <div class="col s12 m4">
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

        <div id="inventory_table" class="card-content">
          <div id="disable">
            <div class="section section-data-tables">
              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <div class="col s12">
                      <table id="page-length-option" class="display">
                      <thead>
                          <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Order Code</th>
                            <th>Type</th>
                            <th>Tag</th>
                            <th>Description</th>
                            <th>Q'ty</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
                            </td>
                            <td> 
                              <span class="material-icons action_icon">delete</span></span>
                            </td>
                          </tr>
                          <tr>
                            <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px" alt=""></td>
                            <td>Fruit Tart</td>
                            <td>FT</td>
                            <td>Tart</td>
                            <td>300</td>
                            <td>25.5</td>
                            <td>3</td>
                            <td>25.5</td>
                            <td>
                              <span class="material-icons action_icon mr-10">border_color</span>
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
          <div id="archie">Revolutionary, expose the truth shine benefit corporation, activate
            incubator revolutionary co-create.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="section section-data-tables">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
              <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Order Code</th>
                    <th>Type</th>
                    <th>Tag</th>
                    <th>Description</th>
                    <th>Q'ty</th>
                    <th>Price</th>
                    <th>View</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#b6b6b6;">delete</span></span>
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