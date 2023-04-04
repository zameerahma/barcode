@extends('layouts.mainlayout')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-6 mb-4  mb-xl-0">
            @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
              {{ Session::get('message') }}
            </div>
            @endif

    <form action="{{ URL::to('/postpage') }}" method="POST">
      @csrf
      @include('pages.page.form')
    </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection