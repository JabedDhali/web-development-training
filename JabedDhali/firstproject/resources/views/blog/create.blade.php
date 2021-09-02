<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Create</title>
  </head>
  <body>
    
  <div class="container py-5">
    <form action="{{route('blogs.store')}}" method="post">
      @csrf
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Title: </label>
        <div class="col-sm-10">
          <input type="text" name="title" class="form-control" id="inputtitle" placeholder="Enter Title">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Author: </label>
        <div class="col-sm-10">
          <input type="text" name="author" class="form-control" id="inputauthor" placeholder="Enter Author">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Category: </label>
        <div class="col-sm-10">
        <select class="custom-select" aria-label="Default select example" name="category_id">
          <option selected>Select Category</option>
          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
  




  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>