@extends('layouts.dashboard')

@section('title')
    Store - Dashboard Account
@endsection
@section('content')
     <!-- Section Content -->
     <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">My Account</h2>
          <p class="dashboard-subtitle">
            Update your current profile
          </p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-12">
              <form action="">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="Adi Hernawan" />
                        </div>
                       </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="email">Your Email</label>
                              <input type="email" id="email" name="email" class="form-control" value="adi@adiher-store.com" />
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="addressOne">Address 1</label>
                            <input type="text" id="addressOne" name="addressOne" class="form-control" value="Setra Dutra Centra" />
                        </div>
                       </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="addressTwo">Address 2</label>
                              <input type="text" id="addressTwo" name="addressTwo" class="form-control" value="Bekasi, Cikarang Selatan." />
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="province">Province</label>
                              <select id="province" name="province" class="form-control">
                                  <option value="West Java">West Java</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="city">City</label>
                              <select id="city" name="city" class="form-control">
                                  <option value="Bekasi">Bekasi</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="postalCode">Postal Code</label>
                              <input type="text" id="postalCode" name="postalCode" class="form-control" value="17533" />
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="country">Country</label>
                              <input type="text" id="country" name="country" class="form-control" value="Indonesia" />
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="mobile">Mobile</label>
                              <input type="text" id="mobile" name="mobile" class="form-control" value="+628 998 2233" />
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-right">
                        <button type="submit" class="btn btn-success px-5">Save Now</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection