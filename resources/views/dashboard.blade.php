@extends('layouts.base')
@section('title','CategoryCreate')
@section('content')
@push('css')

@endpush
              <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Potential growth</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$17.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Revenue current</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Daily Income</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$31.53</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Expense current</h6>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Order Status</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  <i class="input-helper"></i></label>
                                </div>
                              </th>
                              <th> Client Name </th>
                              <th> Order No </th>
                              <th> Product Cost </th>
                              <th> Project </th>
                              <th> Payment Mode </th>
                              <th> Start Date </th>
                              <th> Payment Status </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  <i class="input-helper"></i></label>
                                </div>
                              </td>
                              <td>
                              
                                <span class="pl-2">Henry Klein</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Dashboard </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  <i class="input-helper"></i></label>
                                </div>
                              </td>
                              <td>
                                 
                                <span class="pl-2">Estella Bryan</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Website </td>
                              <td> Cash on delivered </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-warning">Pending</div>
                              </td>
                            </tr>
                            
                            
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  <i class="input-helper"></i></label>
                                </div>
                              </td>
                              <td>
                              
                                <span class="pl-2">Sallie Reyes</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Website </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              @push('scripts')
 
 @endpush
 @endsection
 