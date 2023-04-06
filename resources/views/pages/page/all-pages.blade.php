@extends('layout.mainlayout')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
              {{ Session::get('message') }}
            </div>
            @endif
            @if(Session::has('message1'))
            <div class="alert alert-danger" role="alert">
              {{ Session::get('message1') }}
            </div>
            @endif
            <a href="{{ URL::to('/add-page') }}" class="btn btn-primary">+ New Page</a>
            
            <table class="table table-bordered yajra-datatable">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Meta</th>
                      <th>Slug</th>
                      <th>created_at</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  @endsection