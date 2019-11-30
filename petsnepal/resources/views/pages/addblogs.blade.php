<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
      
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

 </head>
<body>
    <div class="container">
      <br/><br/>Welcome to Dashboard<br/><br/>
    <form method="get" action="/insertblog">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Blog Title</label>
            <input type="text" class="form-control" name="title" placeholder="" required>
          </div>
        
        <div class="form-group col-md-12">
            <label for="inputAddress">Description</label><br/>
           <textarea class="form-control " cols="20" name="description" required></textarea>
      </div>
        </div>  
    
        <button type="submit" class=" btn btn-primary" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">Add Blog</button>
      </form>
      <br/><br/>
    </body>
</html>