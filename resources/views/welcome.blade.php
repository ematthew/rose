@extends('layouts.app')


@section('content')
    
<div class="container">
    
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



        <div class="container">
                 <div class="jumbotron text-center" style="margin-bottom:0">
                    <h1>You Can use the Create Button to Add, Create,Delete,Update</h1>
                    <p>the whole Reason for the site is to help Save your Data</p>   
                </div>  
        </div>


<br> <br>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                     <img src="/img/bernard.jpg" alt="Lights" style="width:100%" height="236">
                        <div class="caption">
                          <p><strong>Eng. Liberty Idor CTO</strong></p>
                        </div>
                </div>
             </div>

                    <div class="col-md-4">
                        <div class="thumbnail">
                           <img src="/img/bernard.jpg" alt="Nature" style="width:100%" height="236">
                            <div class="caption">
                               <p><strong>Eng. Samuel Bernard Adviser</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail">
          
                           <img src="/img/bernard.jpg" alt="Fjords" style="width:100%" height="236">
                            <div class="caption">
                              <p><strong>Sir. Ekpoto Matthew Co Founder</strong></p>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>




@endsection