@extends('layouts.mainlayout')
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
            
            <div class="table-responsive mt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Title
                    </th>
                    <th>
                      Description
                    </th>
                    <th>
                      Meta
                    </th>
                    <th>
                      Slug
                    </th>
                    <th>
                      Created_at
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pages as $page)
                  <tr>
                    <td class="py-1">
                     {{ $page->title }}
                    </td>
                    <td>
                      {{ $page->description }}
                    </td>
                    <td>
                      {{ $page->meta }}
                    </td>
                    <td>
                      {{ $page->slug }}
                    </td>
                    <td>
                      {{ $page->created_at }}
                    </td>
                    <td>
                    
                      <a href="{{ URL::to('editpage/'.$page->id) }}"class="btn btn-primary">Edit</a>
                      <a href="{{ URL::to('deletepage/'.$page->id) }}"class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  
                  @endforeach
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  @endsection