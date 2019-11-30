@extends('layouts.app')

    @section('content')

    <form method="get" action="/insertblog">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Blog Title</label>
            <input type="text" class="form-control" name="title" placeholder="" required>
          </div>
        
        <div class="form-group">
            <label for="inputAddress">Description</label><br/>
           <textarea class="form-control" rows="10" cols="10" name="description" required></textarea>
      </div>
    
        <button type="submit" class=" btn btn-primary" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">Add Blog</button>
      </form>
      <br/><br/>
    
  
    @endsection