<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
    body {
        font-family: Arial, sans-serif;
      }
  
      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
      }
  
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
        color: black;
      }
  
      img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: auto;
      }

      .img_size{
        width: 250px;
        height: 250px;
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
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
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
      
          <!-- partial -->
          <div class="main-panel">
          <div class="content-wrapper">
            @if (session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              {{session()->get('message')}}
            </div>
            @endif
            <div class="div-center">
              <center><h1 class="font_size">All Module</h1></center>
            </div>
            <table class="" >
                <tr>
                    <th class="" >Module Name</th>
                    
                    <th class="">Module Image</th>

                    <th>Delete</th>

                </tr>

                @foreach($data as $data)

                <tr>
                    <td>{{$data->modulename}}</td>
                
                    <td>
                        <img class="img_size" src="module/{{$data->moduleimage}}" alt="">
                    </td>

                    <td class="th_dg"><a class="btn btn-danger" href="{{url('deletecourse',$data->id)}}">Delete</a></td>
                    
                </tr>

                @endforeach

            </table>
          </div>
          </div>
        <!-- main-panel ends -->
      </div>
    </div>
    
  </body>
</html>