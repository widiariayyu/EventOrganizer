@extends('layouts.coba')

@section('content')

     <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">{{$member}}</div>
                  <h3>Member</h3>
                  <p>Active Member</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">{{$ban}}</div>
                  <h3>Member</h3>
                  <p>Banned Member</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-industry"></i></div>
                  <div class="count">{{$paket}}</div>
                  <h3>Package</h3>
                  <p>Package of the Event </p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-list-ul"></i></div>
                  <div class="count">{{$trans}}</div>
                  <h3>Transaction</h3>
                  <p>Here are transactions of Event Organizer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="right_col" role="main">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                   
                  </div>
                  <div class="col-md-6">
                    
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">


                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
     </div>

@endsection
