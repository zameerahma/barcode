@extends('layout.mainlayout')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-6 mb-4  mb-xl-0">
    <form action="{{ URL::to('/create-user') }}" method="POST">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Ali...">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
      <select class="form-select form-control">
        <option value="">--Select a Role--</option>
        
        <option value="admin">Admin</option>
        <option value="user">User</option>
        <option value="vendor">Vendor</option>
      </select>
    </div>
      <div class="form-group">
        <label for="password">Password</label>
      <input type="password" class="form-control"  name="password" id="" placeholder="***">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection