

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
 @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->

@include('doctor.sidebar')
      <!-- partial -->
     
@include('doctor.navbar')


        <!-- partial -->
				  <div class="container-fluid page-body-wrapper">

				<div class="col">

				<table class="table table-striped table-dark">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Doctor name</th>
				      <th scope="col">Phone Number</th>
				      <th scope="col">Social Account</th>
				       <th scope="col">Speciality</th>
				    
				      
				     
				    </tr>
				  </thead>
				  <tbody>
				 @foreach ($data as $doctor)

				    <tr>
				      <th scope="row">1</th>
				      <td>{{$doctor -> Full_Name}} </td>
				      <td>{{$doctor -> Phone_Number}}</td>
				      <td>{{$doctor -> Social_Account}}</td>
				      <td>{{$doctor -> Speciality}}</td>
				    
				        
				    </tr>
				   @endforeach 

				  </tbody>
				</table>
                 	</div>

				 	
				 </div>



                 	    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('doctor.script')
    <!-- End custom js for this page -->
  </body>
</html>
