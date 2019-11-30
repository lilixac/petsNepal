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
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Login In</h5>
                <form class="form-signin" method="get" action="/cpanel">
                  <div class="form-label-group">
                        <label for="inputEmail">Username</label>
                    <input type="text" name="email" class="form-control" placeholder="Username" required autofocus>
                    
                  </div>
                  <br/>
                  <div class="form-label-group">
                        <label for="inputPassword">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  
                  </div><br/>
      
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login in</button>
      
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
