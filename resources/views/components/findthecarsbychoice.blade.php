  <!-- =-=-=-=-=-=-= Cars Of Your Choice =-=-=-=-=-=-= -->
  <section class="custom-padding featured-cars rounded-3">
      <!-- Main Container -->
      <div class="container ">
          <!-- Row -->
          <div class="row">
              <!-- Heading Area -->
              <div class="heading-panel">
                  <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                      <!-- Main Title -->
                      <h1>Find The Cars Of <span class="heading-color"> Your Choice</span> </h1>
                  </div>
              </div>

              <div class="card">
                  <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="nav-item active">
                          <a class="nav-link" aria-controls="budget" role="tab" data-toggle="tab"
                              href="#budget">Budget </a>
                      </li>
                      <li role="presentation" class="nav-item">
                          <a class="nav-link" aria-controls="bodytype" role="tab" data-toggle="tab"
                              href="#bodytype">Body Type</a>
                      </li>
                      <li role="presentation" class="nav-item">
                          <a class="nav-link" aria-controls="upcoming" role="tab" data-toggle="tab"
                              href="#fueltype">Fuel Type</a>
                      </li>
                      <li role="presentation" class="nav-item">
                          <a class="nav-link" aria-controls="transmission" role="tab" data-toggle="tab"
                              href="#transmission">Transmission</a>
                      </li>
                      <li role="presentation" class="nav-item">
                          <a class="nav-link" aria-controls="seatingcapacity" role="tab" data-toggle="tab"
                              href="#seatingcapacity">Seating Capacity</a>
                      </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content clearfix py-5 ">
                      <div class="tab-pane fade in active" id="budget">
                          <!-- Middle Content Box -->
                          <div class="col-md-12 col-xs-12 col-sm-12">
                              <div class="row">
                                  <div class="d-flex flex-row flex-wrap">
                                      @foreach ($budgets as $data)
                                          <a href="javascript:void(0);" class="me-3 mb-3 {{$cartype}}"
                                              data-value="{{ $data->value }}">
                                              <button type="button"
                                                  class="btn btn-default btn-sm rounded-pill">{{ $data->value }}</button>
                                          </a>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                          <!-- Middle Content Box End -->
                      </div>

                      <div class="tab-pane fade" id="bodytype">
                          <div class="col-md-12 col-xs-12 col-sm-12">
                              <div class="row">
                                  @foreach ($bodytypes as $data)
                                    
                                      <div class="col-md-2 col-sm-3 col-xs-4">
                                          <div class="box">

                                              <a href="javascript:void(0);" class="{{$cartype}}"
                                                  data-value="{{ $data->value }}">
                                                  <img alt="Convertible" width="100"
                                                      src="{{ asset('assets/backend-assets/images/' . $data->iconimage) }}">
                                                  <h4>{{ $data->value }}</h4>
                                              </a>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>

                      <div class="tab-pane fade" id="fueltype">
                          <!-- Middle Content Box -->
                          <div class="col-md-12 col-xs-12 col-sm-12">
                              <div class="row">
                                  <div class="row">
                                      @foreach ($fueltypes as $data)
                                          <div class="col-md-2 col-sm-3 col-xs-4">
                                              <div class="box">
                                                  <a href="javascript:void(0);" class="{{$cartype}}"
                                                      data-value="{{ $data->value }}">

                                                      <img alt="Petrol" width="75"
                                                          src="{{ asset('assets/backend-assets/images/' . $data->iconimage) }}">
                                                      <h4>{{ $data->value }}</h4>
                                                  </a>
                                              </div>
                                          </div>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                          <!-- Middle Content Box End -->
                      </div>
                      <div class="tab-pane fade" id="transmission">
                          <!-- Middle Content Box -->
                          <div class="col-md-12 col-xs-12 col-sm-12">
                              <div class="row">
                                  @foreach ($transmissions as $data)
                                      <div class="col-md-2 col-sm-3 col-xs-4">
                                          <div class="box">
                                              <a href="javascript:void(0);" class="{{$cartype}}"
                                                  data-value="{{ $data->value }}">

                                                  <img alt="Automatic" width="50"
                                                      src="{{ asset('assets/backend-assets/images/' . $data->iconimage) }}">
                                                  <h4>{{ $data->value }}</h4>
                                              </a>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="seatingcapacity">
                          <div class="col-md-12 col-xs-12 col-sm-12">
                              <div class="row">
                                  <div class="d-flex flex-row flex-wrap">
                                      @foreach ($seatings as $data)
                                          <a href="javascript:void(0);" class="{{$cartype}} me-3 mb-3" data-value="{{ $data->value }}">

                                              <button type="button"
                                                  class="btn btn-default btn-sm rounded-pill">{{ $data->value }}</button>
                                          </a>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Row End -->
              </div>
          </div>
          <!-- Main Container End -->
      </div>
  </section>
  <!-- =-=-=-=-=-=-= Cars Of Your Choice End =-=-=-=-=-=-= -->

