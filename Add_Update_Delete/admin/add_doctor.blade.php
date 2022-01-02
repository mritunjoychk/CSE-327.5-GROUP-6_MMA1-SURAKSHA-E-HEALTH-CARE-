<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
        <style type="text/css">

            label
            {
                display:inline-block;

                width:200px;
            }

         </style>

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

        
            <div class="container" align="center" style="padding-top: 100px;">


/** If session is true then it will give a messeage */

            @if(session()->has('message'))

              <div class="alert alert-success"> 

               <button type="button" class="close" data-dismiss="alert">
                     
                </button>
            {{session()->get('message')}}
            </div>
             @endif

             /** The form connected with AdminController and
                through this form information can be added 
              */

                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                @csrf
                        <div style="padding:15px;">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black" name="name" placeholder="Enter Name" required="">
                        </div>

                        <div style="padding:15px;">
                        <label>Contact </label>
                        <input type="number" style="color:black" name="number" placeholder="Enter Number"required="">
                        </div>

                        <div style="padding:15px;">
                        <label>Speciality</label>
                            <select name="speciality" style="color:black" width="200px;" required="">
                            <option>--Select Option--</option>
                                <option value="Cardiology">Cardiology</option>
                                <option value="Neurology">Neurology</option>
                                <option value="Urology">Urology</option>
                                <option value="Dermatology">Dermatology</option>
                                <option value="Orthopedics">Orthopedics</option>
                                <option value="General Surgeon">General Surgeon</option>
                                <option value="Respiratory Medicine">Respiratory Medicine</option>
                                <option value="Pediatrician">Pediatrician</option>
                                <option value="Dentist">Dentist</option>


                            </select>
                        </div>

                        <div style="padding:15px;">
                        <label>Room Number</label>
                        <input type="text" style="color:black" name="room" placeholder="Enter Room Number">
                        </div>

                        <div style="padding:15px;">
                        
                        <input type="submit"class="btn btn-success" >
                        </div>

            </div>
            </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>