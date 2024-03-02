<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    
  </head>
  <style>
    label{
        color: black;
    }

    .text{
        color: black;
        padding-left: 10px;
    }

    .div_deg {
        color: black;
        padding-bottom: 15px;
    }
    .content-wrapper{
      background: white;
    }
    .div_center{
      padding-top: 40px;
    }
    .font_size{
      font-size: 40px;
      padding-bottom: 40px;
      color: black;
    }
    h1{
      padding-left: 30px;
    }
    
  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      
          <!-- partial -->
          <div class="main-panel">
          <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
            </div>
            @endif
            <div class="div-center">
              <center><h1 class="font_size">Add Module</h1></center>
            </div>
            <form action="{{url('createcourse')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_deg">
                    <center><label>Module Name: </label>
                    <input class="text" type="text" name="name"></center>
                </div>
                

                <div class="div_deg">
                    <center><label>Module Image: </label>
                    <input type="file" name="image" required=""></center>
                </div>

                <div class="div_deg">
                    <center><input class="btn btn-primary" type="submit" value="Add Module"></center>
                </div>

            </form>
          </div>
          </div>
        <!-- main-panel ends -->
      </div>
    </div>

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
        
        <!-- Sidebar Navigation end-->
        
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/lg.jpg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              
              <ul class="navbar-nav w-100">
                <h1>Dashboard</h1>
              </ul>
              
                <li>
                  <x-app-layout>
      
                  </x-app-layout>
                  
                </li>
            </div>
          </nav>
  
          
    
  </body>
</html>