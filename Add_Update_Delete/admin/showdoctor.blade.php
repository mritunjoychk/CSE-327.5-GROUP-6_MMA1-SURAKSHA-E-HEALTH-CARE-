<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
    <!-- End layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding-top:100px">

        /** This table is used to show the doctor list information from admin side. 
              
              */

                        <table>
                            <tr style="background-color:#4F091D" align="center">
                                <th style="padding:10px; font-size:15px; color:white">ID</th>
                                <th style="padding:10px; font-size:15px; color:white">Doctor Name</th>
                                <th style="padding:10px; font-size:15px; color:white">Contact</th>
                                <th style="padding:10px; font-size:15px; color:white">Speciality</th>
                                <th style="padding:10px; font-size:15px; color:white">Room No</th>   
                                <th style="padding:10px; font-size:15px; color:white">Delete</th>  
                                <th style="padding:10px; font-size:15px; color:white">Update</th>                           
                            </tr>
                @foreach($data as $doctor)
                <tr style="background-color:#7CD1B8" align="center">
                <td>{{$doctor->id}}</td>
                 <td>{{$doctor->name}}</td>
                 <td>{{$doctor->phone}}</td>
                 <td>{{$doctor->speciality}}</td>
                 <td>{{$doctor->room}}</td>
                 <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger"href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                 <td><a class="btn btn-primary"href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                </tr>
                @endforeach




    </div>
    </div>

        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>