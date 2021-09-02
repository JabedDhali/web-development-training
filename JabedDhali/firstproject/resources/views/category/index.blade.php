<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
            <ul class="list-group">
              @foreach($categories as $category)
              <li class="list-group-item ml-5">
                <div class="container-fluid align-items-center">
                  <div class="row">
                    <div class="col-md-8">
                      <a href="{{route('categories.show',$category->id)}}"><strong>{{$category->name}}</strong></a>
                    </div>
                    <form method="get"  action="{{route('categories.edit',$category->id)}}">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        <button class="btn btn-primary a-btn-slide-text">Edit</button>
                    </form>
                    <form method="post"  action="{{route('categories.destroy',$category->id)}}">
                        @method('DELETE')
                        @csrf
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        <button class="btn btn-primary a-btn-slide-text">Delete</button>
                    </form>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>