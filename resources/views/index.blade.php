<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLECTION</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href= "{{asset('css/main.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="jumbotron">
    <div class="detail">
            <h1>Collection</h1>
            <section>
            <p>The following or website is designed for Training and learning purposes
                the projects represented below are a collection of projects designed 
                to help with further understanding of Laravel.Click any link to view the project.
            </p>
            </section>
            
            
            </div>

    </div><!--end of jumbotron--->

    <div class="container">
        <div class="row">
            <div class="col-sm-3"> 
                <a href="{{asset('crud_App')}}" class="btn btn-success btn-lg">CRUD APP </a>
            </div>
            <div class="col-sm-3"> 
               <a href="{{asset('/')}}" class="btn btn-success btn-lg">Project 2 </a>
            </div>
            <div class="col-sm-3">
                <a href="{{asset('/')}}" class="btn btn-success btn-lg">Project 3 </a>
            </div>
            <div class="col-sm-3">
                <a href="{{asset('/')}}" class="btn btn-success btn-lg">Project 1 </a>
            </div>
        
        </div>
    </div>
   
</body>
</html>