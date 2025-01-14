@extends('layouts.private') @section('title', 'Admin Portal') @section('content')
<div class="page-container">
  <header>
      <div class="container-fluid">
          <div class="row">
              <div class="col-xs-12 col-sm-6">
                  <div class="title-box">
                      <h1>{{$title}}</h1>               
                      <a id="New" class="btn btn-gray">New Empty Leg</a>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                  <div class="info-user">
                      <p class="name-user">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</p>
                      @if(auth()->user()->img !=" ")
                      <span class="avatar"><img src="{{auth()->user()->img}}" class="img-responsive center-block" alt=""></span>
                      @else
                      <span class="avatar"><img src="/assets/img/admin/avatar.svg" class="img-responsive center-block" alt=""></span>
                      @endif
                  </div>
              </div>
          </div>
      </div>
  </header>
  <div class="page-content accessoslo-empty-leg">
      <div class="container-fluid">
          <div class="row">
              <div class="col-xs-12 col-sm-12">
                  <div class="content-box">
                      <div class="form-box">
                          <div class="row">
                              <div class="col-xs-12">
                                  <form >                                     
                                    <input type="text" name="search" id="search" class="form-control search-form" placeholder="Search by partner, end time, end date, from airport, to airport, aircraft type, seats available">                                                                                                                  
                                  </form>
                              </div>
                          </div>
                      </div>
                      <div class="header-list">
                          <div class="row">
                              <div class="label-table partner">Partner</div>
                              <div class="label-table flight">Flight no.</div>
                              <div class="label-table from-airport">From Airport</div>
                              <div class="label-table to-airport">To airport</div>
                              <div class="label-table end-date">End date</div>
                              <div class="label-table end-time">End time</div>
                              <div class="label-table aircraft">Aircraft</div>
                              <div class="label-table seats">Seats</div>
                          </div>
                      </div>
                      <div class="items-list">
                        @if($counts == 0)
                        <h4>There is nothing!</h4>
                        @endif  
                        @foreach($datas as $data)
                          <div class="item">
                              <div class="row">
                                  <div class="label-table partner">{{$data->partner_name}}<a class="edit" data-source="{{$data}}">Edit</a> <a data-id="{{$data->id}}" class="delete">Delete</a></div>
                                  <div class="label-table flight">{{$data->flight_no}}</div>
                                  <div class="label-table from-airport">{{$data->departure}}</div>
                                  <div class="label-table to-airport">{{$data->destination}}</div>                                            
                                  <div class="label-table end-date">{{$data->end_date}}</div>
                                  <div class="label-table end-time">{{$data->end_time}}</div>
                                  <div class="label-table aircraft">{{$data->aircraft}}</div>
                                  <div class="label-table seats">{{$data->seats}}</div>
                              </div>
                          </div>
                        @endforeach
                        {{$datas->links()}}
                      </div><!-- items-list -->
                  </div><!-- content-box -->
              </div>
          </div>
      </div>
      <div class="modal fade modal-empty-leg" id="modal-empty-leg" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <form id="emptyleg-form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p id="is_new">NEW EMPTY LEG</p>
                        <p id="is_edit">EDIT EMPTY LEG</p>                   
                    </div>
                    <div class="modal-body">
                        <div class="row-modal">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">PARTNER NAME</label>
                                        @if (Auth::User()->role_id == "1")
                                        <input type="text" name="partner_name" id="partner_name" class="form-control" value="{{$partners->partner_name}}" required>
                                        @else
                                        <select name="partner_name" id="partner_name" class="form-control" data-partner="{{$partners}}" required>
                                            <option disabled selected value>Partner</option>
                                            @foreach($partners as $partner)
                                            <option value="{{$partner->partner_name}}">{{$partner->partner_name}}</option>
                                            @endforeach
                                        </select>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Flight NO.</label>
                                        <input type="text" name="flight_no" id="flight_no" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-modal">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">                                
                                    <div class="airport dropdown form-group">
                                        <label for="">FROM AIRPORT</label>
                                        <input class="form-control" name="departure" id="departure" type="text" data-provide="typeahead" placeholder="From Airport" required>
                                    </div>                                            
                                </div>
                                <div class="col-xs-12 col-sm-6">                                            
                                    <div class="airport dropdown form-group">
                                        <label for="">TO AIRPORT</label>
                                        <input class="form-control" name="destination" id="destination" type="text" data-provide="typeahead" placeholder="To Airport" required>
                                    </div>                                            
                                </div>                              
                            </div>
                        </div>
                        <div class="row-modal">                    
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">End Date</label>
                                        <input type="text" name="empty_datepicker" id="empty_datepicker" class="form-control date" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">End time</label>
                                        <input type="text" name="empty_timepicker" id="empty_timepicker" class="form-control time" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-modal">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Aircraft Type</label>
                                        <select name="aircraft" id="aircraft" class="form-control" data-aircraft="{{$aircrafts}}" required>
                                            <option disabled selected value>Aircraft</option>
                                            @foreach($aircrafts as $aircraft)
                                            <option value="{{$aircraft->type}}">{{$aircraft->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Seats available</label>
                                        <input type="text" name="seats" id="seats" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-modal">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" name="price" id="price" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Select the Currency</label>
                                        <input id="currency" type="text" name="currency" class="form-control" required> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a id="add" class="btn btn-block btn-green">ADD EMPTY LEG</a>
                        <a id="save" class="btn btn-block btn-green">SAVE EMPTY LEG</a>
                    </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
@endsection

@section('scripts')
<script src="/js/vendor/wickedpicker.js"></script>
<script src="/js/vendor/utils.js"></script>
<script src="/js/vendor/data.js"></script>
<script src="/js/vendor/intlTelInput.js"></script>
<script src="/js/vendor/currencySelect.js"></script>
<script src="/js/vendor/currencyFormatter.js"></script>
<script src="/js/accessoslo.js"></script>
<script>jQuery(function(){new Accessoslo.Controllers.AdminEmptyLeg();});</script>
@endsection