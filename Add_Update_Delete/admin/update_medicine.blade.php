<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <style type="text/css">
        label
        {
        display:inline block;
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

<div class="container align="center" style="padding:100px">
@if(session()->has('message'))

              <div class="alert alert-success"> 

               <button type="button" class="close" data-dismiss="alert">
                     
                </button>
            {{session()->get('message')}}
            </div>
             @endif
<form action="{{url('editmedicine',$data->id)}}"method="POST" enctype="multipart/form-data">
            @csrf
<div style="padding:15px;">
  <label>Product Name</label>
  <input type="text" style="color:black;" name="product_name" value="{{$data->product_name}}">
</div>
<div style="padding:15px;">
  <label>Power</label>
  <input type="text"style="color:black;" name="power" value="{{$data->power}}">
</div>
<div style="padding:15px;">
  <label>Price</label>
  <input type="number"style="color:black;" name="price" value="{{$data->price}}">
</div>
<div align="center" style="padding:15px;">
        <input type="submit" class="btn btn-primary">

    </div>

    </form>

</div>
</div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>