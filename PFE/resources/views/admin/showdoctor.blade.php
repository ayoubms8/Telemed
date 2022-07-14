

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
 @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->

@include('admin.sidebar')
      <!-- partial -->
     
@include('admin.navbar')


        <!-- partial -->
				  <div class="container-fluid page-body-wrapper">

				<div >

				<table class="table table-striped table-dark">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Doctor name</th>
				      <th scope="col">Phone Number</th>
				      <th scope="col">Social Account</th>
				       <th scope="col">Speciality</th>
				      <th scope="col">Email Address</th>
				      <th scope="col">Photo</th>
				        <th scope="col">Delete or Update </th>
				     
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
				      <td>{{$doctor -> Email_Address}}</td>
				       <td><img class="img-fluid img-thumbnail"  src="images/doctors/{{$doctor -> Photo}}"></td>
				        <td> <a  class="btn btn-danger" onclick="return confirm('Do you want to update this appointment ?')" href="{{url('updatedoctor',$doctor -> id)}}">Update</a> 
								<a  class="btn btn-success" onclick="return confirm('Do you want to update this appointment ?')" href="{{url('deletedoctor',$doctor -> id)}}">Delete</a> <td> 
				    </tr>
				   @endforeach 

				  </tbody>
				</table>
                 	</div>

				 	
				 </div>



                 	    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
