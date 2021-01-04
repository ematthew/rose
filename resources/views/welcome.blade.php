@extends('layouts.app')


@section('content')
    
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Welcome to Ekpoto Page </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>

                    <span>Create</span>
                    </a>
            </div>
        </div>
    </div>



<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>You Can use the Create Button to Add, Create,Delete,Update</h1>
  <p>the whole Reason for the site is to help Save your Data</p> 
</div>






@endsection