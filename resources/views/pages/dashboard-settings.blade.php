@extends('layouts.dashboard')

@section('title')
    Store - Dashboard Settings
@endsection
@section('content')
     <!-- Section Content -->
     <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">Store Settings</h2>
          <p class="dashboard-subtitle">
            Make store that profitable
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
                          <label>Nama Toko</label>
                          <input type="text" name="nama_toko" value="Brokat-store" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Kategori</label>
                          <select name="kategori" id="" class="form-control">
                            <option value="" disable>Select Category</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Store</label>
                          <p class="text-muted">Apakah anda ingin membuka toko ?</p>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="is_store_open" id="OpenStoreTrue" value="true">
                            <label for="OpenStoreTrue" class="custom-control-label">Buka</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="is_store_open" id="OpenStoreFalse" value="false">
                            <label for="OpenStoreFalse" class="custom-control-label">Tutup Sementara</label>
                          </div>
                          
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