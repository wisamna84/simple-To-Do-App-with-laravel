<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body> 
    {{-- <div class="container mt-5">
    <form method="POST" action="">
      @csrf
      
      <div class="form-group">
        


        <label for="exampleInputEmail1">Task Name</label>
        <input type="text" class="form-control" id="taskname" name="taskname" aria-describedby="emailHelp" >
        <small id="taskHelp" class="form-text text-muted">task name</small>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      @endforeach
    </form>
  </div> --}}
  <section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">
                @foreach ($task11 as $ts)
              <h4 class="text-center my-3 pb-3">EDIT TASK</h4>
  
              <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" action="{{url('update-task/'.$ts->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12">
                  <div class="form-outline mb-3">
                    <input type="text" id="taskname" name="taskname" class="form-control" placeholder="Enter a task here" value="{{$ts->taskname}}"/>
                    
                  </div>
                </div>
                <div class="col-5">
                  <button type="submit" class="btn btn-primary px-5">UPDATE</button>
                </div>
              </form>
  
              @endforeach
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>