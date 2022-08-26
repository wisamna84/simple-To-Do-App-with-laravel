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
    <section class="vh-100" style="background-color: #eee;">
      <div class="container py-5 vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-9 col-xl-7">
            <div class="card rounded-3">
              <div class="card-body p-4">
    
                <h4 class="text-center my-3 pb-3">To Do App</h4>
                  <div class="col float-left">
                   <a href="{{url('add-task')}}"><button class="btn btn-info mb-3 float-right px-5">NEW TASK</button></a>
                  </div>
                
    
                <table class="table mb-4 text-center">
                  <thead>
                    <tr >
                      <th scope="col">No.</th>
                      <th scope="col">Task Name</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  @php
                   $k=0;   
                  @endphp
                  <tbody>@foreach ($todo11 as $td)
                    <tr>
                      <th scope="row">{{$k+=1}}</th>
                      <td>{{$td->taskname}}</td>
                      <td class="row" >
                        <a href="{{url('edit-task/'.$td->id)}}"><button class="btn btn-success px-4 ml-5 ">EDIT</button></a>
                        <form action="{{url('del-task/'.$td->id)}}" method="POST">
                        <button type="submit" class="btn btn-danger ml-1">DELETE</button>
                        @csrf
                        @method('DELETE')                                 
                    
                    </form>
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