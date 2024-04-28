<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
      /* CSS for centering the form */
      .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* 100% viewport height */
      }

      /* CSS for form layout */
      form {
        max-width: 400px; /* Set maximum width for the form */
        margin: 0 auto; /* Center the form horizontally */
        padding: 20px; /* Add some padding for aesthetics */
        border: 1px solid #ccc; /* Add a border for clarity */
        border-radius: 5px; /* Add rounded corners */
        background-color: #f9f9f9; /* Add a light background color */
      }

      form div {
        margin-bottom: 15px; /* Add margin between form elements */
      }

      form label {
        display: block; /* Display labels as blocks for better alignment */
        margin-bottom: 5px; /* Add some space between labels and inputs */
      }

      form input,
      form select {
        width: 100%; /* Make inputs and select fill the entire width */
        padding: 8px; /* Add padding for better appearance */
        border: 1px solid #ccc; /* Add border for clarity */
        border-radius: 3px; /* Add rounded corners */
        box-sizing: border-box; /* Ensure padding and border are included in the width */
      }

      form input[type="submit"] {
        width: auto; /* Allow the submit button to adjust its width */
        padding: 10px 20px; /* Add padding to the submit button */
        background-color: #4caf50; /* Add a background color */
        color: #fff; /* Set text color to white */
        border: none; /* Remove border */
        border-radius: 3px; /* Add rounded corners */
        cursor: pointer; /* Change cursor to pointer on hover */
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

          <div class="center-container"> <!-- Wrapper div for centering -->
            <div class="container">
            @if(session()->has('message'))

            <div class="alert alert-success">
              <button type="button"class="close" data-dismiss="alert">
               Doctor Added Successfully 
              </button>
              {{session()->get('message')}}
            </div>
            @endif
              <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                  <label style="color:black;" >Doctor Name</label>
                  <input type="text" style="color:black;" name="name" placeholder="Enter doctor's name" required="">
                </div>

                <div>
                  <label style="color:black;">Phone</label>
                  <input type="number" style="color:black;" name="number" placeholder="Enter doctor's number" required="">
                </div>

                <div>
                  <label style="color:black;" required="">Speciality</label>
                  <select name="Speciality" style="color:black;">
                    <option value="SELECT">SELECT</option>
                    <option value="Heart">Heart</option>
                    <option value="skin">skin</option>
                    <option value="eye">eye</option>
                    <option value="bone">bone</option>
                    <option value="OB">OB</option>
                  </select>
                </div>

                <div>
                  <label style="color:black;">Room NO</label>
                  <input type="text" style="color:black;" name="room" placeholder="Write room number" required="">
                </div>

                <div>
                  <label style="color:black;">Image</label>
                  <input type="file" style="color:black;" name="file" required="">
                </div>

                <div>
                  <input type="submit" class="btn btn-success" value="Submit">
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
