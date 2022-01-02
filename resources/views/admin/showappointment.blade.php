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
      
      <div class="container-fluid page-body-wrapper">
      /* This div class is created to show the appointment list from the registered user 
  */

      <div align="center" style="padding-top:100px">
                    <table>
                            <tr style="background-color:#4F091D" align="center">
                                <th style="padding:10px; font-size:15px; color:white">Patient Name</th>
                                <th style="padding:10px; font-size:15px; color:white">Email</th>
                                <th style="padding:10px; font-size:15px; color:white">Phone</th>
                                <th style="padding:10px; font-size:15px; color:white">Doctor Name</th>
                                <th style="padding:10px; font-size:15px; color:white">Date</th>
                                <th style="padding:10px; font-size:15px; color:white">Message</th>
                                <th style="padding:10px; font-size:15px; color:white">Status</th>
                                <th style="padding:10px; font-size:15px; color:white">Approved</th>
                                <th style="padding:10px; font-size:15px; color:white">Canceled</th>
                            </tr>
                            @foreach($data as $appoint)
                            <tr style="background-color:#7CD1B8" align="center">
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoint->name}}</td>
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoint->email}}</td>
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoint->phone}}</td>
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoint->doctor}}</td>
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoint->date}}</td>
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoint->message}}</td>
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoint->status}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{url('approved',$appoint->id)}}"> Approved</a>
                                </td>
                                <td>
                                <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}"> Canceled</a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </table>

             </div>
        </div>


        <!-- partial -->


        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>