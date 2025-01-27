@extends('backend.layouts.app') 
@section('content')

<style>
    /* Default: Columns stack vertically */
    .custom-col-xl-2 {
      flex: 0 0 100%;
      max-width: 100%;
    }

    /* Media Query for XL screens (≥1200px) */
    @media (min-width: 1200px) {
      .custom-col-xl-2 {
        flex: 0 0 20%; /* Equivalent to col-xl-2 (2/12 = 16.67%) */
        max-width: 20%;
      }
    }
  </style>

  <div class="content container-fluid">
    <div class="row" >
      <div class="col-12">
        <h5>Services Report</h5>
      </div>
      <div class="custom-col-xl-2 col-sm-6 col-12">
        <div class="card">
          <div class="card-body p-2">
            <div class="d-flex justify-content-end" style="">
              <a href="" class="bg-1 text-center rounded" style="width:20px; height:20px;"><i class="fe fe-filter"></i></a>
            </div>
            <div class="dash-widget-header">
              <span class="dash-widget-icon bg-1">
                <i class="fas fa-dollar-sign"></i>
              </span>
              <div class="dash-count">
                <div class="dash-title">Today's Service </div>
                <div class="dash-counts">
                  <p></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="custom-col-xl-2 col-sm-6 col-12">
        <div class="card">
          <div class="card-body p-2">
            <div class="d-flex justify-content-end" style="">
              <a href=""><i class="fe fe-filter"></i></a>
            </div>
            <div class="dash-widget-header">
              <span class="dash-widget-icon bg-1">
                <i class="fas fa-dollar-sign"></i>
              </span>
              <div class="dash-count">
                <div class="dash-title">This week Service</div>
                <div class="dash-counts">
                  <p></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="custom-col-xl-2 col-sm-6 col-12">
        <div class="card">
          <div class="card-body p-2">
            <div class="d-flex justify-content-end" style="">
              <a href="" class="bg-1 text-center rounded" style="width:20px; height:20px;"><i class="fe fe-filter"></i></a>
            </div>
            <div class="dash-widget-header">
              <span class="dash-widget-icon bg-1">
                <i class="fas fa-dollar-sign"></i>
              </span>
              <div class="dash-count">
                <div class="dash-title">This Month Service</div>
                <div class="dash-counts">
                  <p></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="custom-col-xl-2 col-sm-6 col-12">
        <div class="card">
          <div class="card-body p-2">
            <div class="d-flex justify-content-end" style="">
              <a href="" class="bg-1 text-center rounded" style="width:20px; height:20px;"><i class="fe fe-filter"></i></a>
            </div>
            <div class="dash-widget-header">
              <span class="dash-widget-icon bg-1">
                <i class="fas fa-dollar-sign"></i>
              </span>
              <div class="dash-count">
                <div class="dash-title">This Year Service</div>
                <div class="dash-counts">
                  <p></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="custom-col-xl-2 col-sm-6 col-12">
        <div class="card">
          <div class="card-body p-2">
            <div class="d-flex justify-content-end" style="">
              <a href="" class="bg-1 text-center rounded" style="width:20px; height:20px;"><i class="fe fe-filter"></i></a>
            </div>
            <div class="dash-widget-header">
              <span class="dash-widget-icon bg-1 bg-danger">
                <i class="fas fa-dollar-sign"></i>
              </span>
              <div class="dash-count">
                <div class="dash-title text-danger">Dues of Services</div>
                <div class="dash-counts">
                  <p class="text-danger"></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-xl-7 d-flex">
        <div class="card flex-fill">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Monthly Service Report</h5>

              
            </div>
          </div>
          <div class="card-body">
            
            
            <div id="sales_chart"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-5 d-flex">
        <div class="card flex-fill">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Yearly Service Report</h5> 
            </div>
          </div>
          <div class="card-body">
            <div id="sales_chart_yearly"></div>
            
          </div>
        </div>
      </div>
    </div>

    
  </div>

@endsection