@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Create Campaign')

{{-- vendor style --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/materialize-stepper/materialize-stepper.min.css')}}">
@endsection
{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/form-wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section section-form-wizard">
  <div class="row">
      <div class="col s12">
          <div class="card">
              <div class="card-content pb-0">
                  <ul class="stepper horizontal" id="linearStepper">
                      <li class="step active">
                        <div class="step-title waves-effect">Step 1</div>
                        <div class="step-content">
                          <!-- campaign details -->
                          <div class="row">
                            <div class="col s12">
                              <div id="html-validations" class="card card-tabs">
                                <div class="card-content">
                                  <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" method="get">
                                      <div class="row">
                                        <div class="input-field col s12">
                                          <label for="uname0">Campaign Title *</label>
                                          <input class="validate" required id="uname0" name="uname0" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <textarea id="description" class="materialize-textarea" data-length="120"></textarea>
                                          <label for="description">Description</label>
                                        </div>
                                        <div class="input-field col s12 m6 l6">
                                          <input placeholder="2019/01/01" id="date-demo2" type="date" class="">
                                          <label for="date-demo2">Start Date *</label>
                                        </div>
                                        <div class="input-field col s12 m6 l6">
                                          <input placeholder="2019/01/01" id="date-demo2" type="date" class="">
                                          <label for="date-demo2">End Date *</label>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="row">
                                    <div class="col s12">
                                      <a class="add_btn btn waves-effect waves-light right"><i class="material-icons left show-on-small" style="margin-right:5px;">arrow_forward_ios</i><span class="hide-on-med-and-down">Next</span></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="step">
                        <div class="step-title waves-effect">Step 2</div>
                        <div class="step-content">
                          <!-- delivery details -->
                          <div class="row">
                            <div class="col s12">
                              <div id="extended" class="card card-tabs">
                                <div class="card-content">
                                  <div id="view-extended">
                                    <div class="row">
                                      <form class="col s12">
                                        <div class="row">
                                          <div class="input-field col s12">
                                            <input id="delivery charge" type="text" class="">
                                            <label for="delivery charge">Delivery Charge ($)</label>
                                          </div>
                                          <div class="input-field col s12 m6 mt-0">
                                            <p>
                                              <label>
                                                <input type="checkbox" id="tnc_select" />
                                                <span>Free delivery for order above ($)</span>
                                                <input id="" type="text" class="">
                                              </label>
                                            </p>
                                          </div>
                                          <div class="input-field col s12 m6 mt-0">
                                            <p>
                                              <label>
                                                <input type="checkbox" id="tnc_select" />
                                                <span>Free delivery for Minimum (Items)</span>
                                                <input id="" type="text" class="">
                                              </label>
                                            </p>
                                          </div>
                                          
                                          <div class="add_btn">
                                            <a class="waves-effect indigo darken-4 btn-floating mr-1 border-round right"><i class="material-icons right">add</i></a>
                                            <a class="waves-effect waves-light btn-floating mr-1 border-round right"><i class="material-icons right">remove</i></a>
                                          </div>
                                          <div class="col s12">
                                            <p>
                                              <label>
                                                <input type="checkbox" id="tnc_select" />
                                                <span>Delivery Charge Option</span>
                                                  <div class="input-field col s12 m4">
                                                    <input placeholder="Display Name" class="validate" required id="uname0" name="uname0" type="text">
                                                  </div>
                                            
                                                  <div class="input-field col s12 m4">
                                                    <select class="error" id="crole" name="crole" data-error=".errorTxt6" required>
                                                      <option value="">On top of delivery charge</option>
                                                      <option value="">Replace delivery charge</option>
                                                    </select>
                                                  </div>
                                                  <div class="input-field col s12 m4">
                                                    <span class="material-icons prefix">attach_money</span><input class="validate" required id="uname0" name="uname0" type="text">
                                                  </div>
                                              </label>
                                            </p>
                                          </div>
                                          <!-- del date -->
                                          <div class="input-field col s12 m6 l6">
                                            <input placeholder="2019/01/01" id="date-demo2" type="date" class="">
                                            <label for="date-demo2">Delivery Start Date</label>
                                          </div>
                                          <div class="input-field col s12 m6 l6">
                                            <input placeholder="2019/01/01" id="date-demo2" type="date" class="">
                                            <label for="date-demo2">Delivey End Date</label>
                                          </div>
                                          <!-- pickup date -->
                                          <div class="input-field col s12 m6 l6">
                                            <input placeholder="2019/01/01" id="date-demo2" type="date" class="">
                                            <label for="date-demo2">Pickup Start Date</label>
                                          </div>
                                          <div class="input-field col s12 m6 l6">
                                            <input placeholder="2019/01/01" id="date-demo2" type="date" class="">
                                            <label for="date-demo2">Pickup End Date</label>
                                          </div>
                                          <div class="col s12">
                                            <div class="add_btn">
                                              <a class="waves-effect indigo darken-4 btn-floating mr-1 border-round right"><i class="material-icons right">add</i></a>
                                              <a class="waves-effect waves-light btn-floating mr-1 border-round right"><i class="material-icons right">remove</i></a>
                                            </div>
                                          </div>
                                          <div class="input-field col s12 m4">
                                            <input id="delivery charge" type="text" class="">
                                            <label for="delivery charge">Pickup Store</label>
                                          </div>
                                          <div class="input-field col s12 m8">
                                            <input id="delivery charge" type="text" class="">
                                            <label for="delivery charge">Address</label>
                                          </div>
                                        
                                          <!-- test -->
                                          <!-- <div class="col s12">
                                            <p>
                                              <label>
                                                <input type="checkbox" id="tnc_select" />
                                                <span>Delivery Charge Option</span>
                                                  <div class="input-field col s12 m4">
                                                    <input class="validate" required id="uname0" name="uname0" type="text">
                                                  </div>
                                            
                                                  <div class="input-field col s6 m4">
                                                    <select class="error" id="crole" name="crole" data-error=".errorTxt6" required>
                                                      <option placeholder="Display Name" value="">On top of delivery charge</option>
                                                      <option value="">Replace delivery charge</option>
                                                    </select>
                                                  </div>
                                                  <div class="input-field col s6 m4">
                                                    <input class="validate" required id="uname0" name="uname0" type="text">
                                                  </div>
                                              </label>
                                            </p>
                                          </div> -->

                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col s12">
                                      <a class="add_btn btn waves-effect waves-light right"><i class="material-icons left show-on-small" style="margin-right:5px;">arrow_forward_ios</i><span class="hide-on-med-and-down">Next</span></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="step">
                        <div class="step-title waves-effect">Step 3</div>
                        <div class="step-content">
                          <!-- payment details -->
                          <!-- General Payment -->
                          <div class="row payment_details">
                            <div class="col s12">
                              <div id="html-validations" class="card card-tabs">
                                <div class="card-content">
                                  <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" method="get">
                                      <div class="row">
                                        <div class="input-field col s12 mt-0">
                                          <p>
                                            <label>
                                              <input class="filled-in" type="checkbox" id="tnc_select" />
                                              <span class="payment_title">General Payment</span>
                                            </label>
                                          </p>
                                        </div>
                                        <div class="input-field col s12 mt-0">
                                          <p>
                                            <label>
                                              <input type="checkbox" id="tnc_select" />
                                              <span>Required Customer's Payment Record</span>
                                            </label>
                                          </p>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Payment Button Title</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <textarea id="payment details" class="materialize-textarea" data-length="120"></textarea>
                                          <label for="payment details">Payment Details</label>
                                        </div>
                                        <div class="row section">
                                          <div class="col s12 m4 l3">
                                            <p>Upload Image(QR Code)</p>
                                          </div>
                                          <div class="col s12 m8 l9">
                                            <input type="file" id="input-file-now-disabled-2" class="dropify" disabled="disabled"
                                              data-default-file="../../../images/gallery/1.png" />
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <div class="divider mt-2"></div>
                                <!-- HitPay -->
                                <div class="card-content">
                                  <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" method="get">
                                      <div class="row">
                                        <div class="input-field col s12 mt-0">
                                          <p>
                                            <label>
                                              <input class="filled-in" type="checkbox" id="tnc_select" />
                                              <span class="payment_title">HitPay</span>
                                            </label>
                                          </p>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Payment Button Title</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">API Key</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Salt</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <select class="error" id="crole" name="crole" data-error=".errorTxt6" required>
                                            <option value="">Currency Code</option>
                                            <option value="">SGD</option>
                                            <option value="">NTD</option>
                                          </select>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <div class="divider mt-2"></div>
                                <!-- PayPal -->
                                <div class="card-content">
                                  <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" method="get">
                                      <div class="row">
                                        <div class="input-field col s12 mt-0">
                                          <p>
                                            <label>
                                              <input class="filled-in" type="checkbox" id="tnc_select" />
                                              <span class="payment_title">PayPal</span>
                                            </label>
                                          </p>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Client ID</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Secret</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <select class="error" id="crole" name="crole" data-error=".errorTxt6" required>
                                            <option value="">Currency Code</option>
                                            <option value="">SGD</option>
                                            <option value="">NTD</option>
                                          </select>
                                        </div>
                                        <div class="input-field col s12 mt-0">
                                          <p>
                                            <label>
                                              <input type="checkbox" id="tnc_select" />
                                              <span>First Data IPG</span>
                                            </label>
                                          </p>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Store ID</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Share Secret</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <select class="error" id="crole" name="crole" data-error=".errorTxt6" required>
                                            <option value="">Currency Code</option>
                                            <option value="">702</option>
                                            <option value="">703</option>
                                          </select>
                                        </div>
                                        <div class="input-field col s12">
                                          <select class="error" id="crole" name="crole" data-error=".errorTxt6" required>
                                            <option value="">Time Zone</option>
                                            <option value="">Asia/Singapore</option>
                                            <option value="">703</option>
                                          </select>
                                        </div>   
                                        <div class="input-field col s12 mt-0">
                                          <p>
                                            <label>
                                              <input type="checkbox" id="tnc_select" />
                                              <span>Direct Payment</span>
                                            </label>
                                          </p>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Payment Button Title</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Special Note</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="uname0">Confirmation Note</label>
                                          <input class="validate" required id="uname0" name="" type="text">
                                        </div>

                                      </div>
                                    </form>
                                  </div>
                                  <div class="row">
                                    <div class="col s12">
                                      <a class="add_btn btn waves-effect waves-light right"><i class="material-icons left show-on-small" style="margin-right:5px;">arrow_forward_ios</i><span class="hide-on-med-and-down">Next</span></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

{{-- vendor script --}}
@section('vendor-script')
<script src="{{asset('vendors/materialize-stepper/materialize-stepper.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/form-wizard.js')}}"></script>
@endsection