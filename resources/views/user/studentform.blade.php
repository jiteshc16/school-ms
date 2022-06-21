<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
    <style>
        .required label::after{
            content:"*";
            color: red;
        }
    
    </style>


  </head>
  <body class="bg-dark">
  <form action="{{url('admission-form')}}" method="POST">

@csrf

<div class="container mt-4 card p-3 bg-white">
   <!-- <h3 class="text-center text-primary">
      Admission Form
    </h3>-->

    <div class="row">
        <div class="form-group col-md-6 required" style="padding:15px;">

         <label>Student Name</label>
         <input type="text" style="color:black;" name="name" placeholder="Write the full name" class="form-control"/>
         <span class="text-danger">
             @error('name')
             {{$message}}
             @enderror
         </span>
         </div>

 

    <div class="form-group col-md-6 required" style="padding:15px;">

     <label>DOB</label>
     <input type="date" style="color:black;" name="dob" placeholder="Write the department" class="form-control"/>
     <span class="text-danger">
             @error('dob')
             {{$message}}
             @enderror
      </span>
    </div>

 </div>

 <div class="row">

      <div class="form-group col-md-6 required" style="padding:15px;">

       <label>Gender</label>
       <input type="text" style="color:black;" name="gender" placeholder="m/f" class="form-control"/>
       <span class="text-danger">
             @error('gender')
             {{$message}}
             @enderror
         </span>
       </div>

       <div class="form-group col-md-6 required" style="padding:15px;">

       <label>Class</label>
       <input type="text" style="color:black;" name="class" placeholder="Class in which admission sought" class="form-control"/>
       <span class="text-danger">
             @error('class')
             {{$message}}
             @enderror
         </span>
       </div>

 </div>

 <div class="row">

      <div class="form-group col-md-6" style="padding:15px;">

       <label>Nationality</label>
       <input type="text" style="color:black;" name="nationality" placeholder="Write the nationality" class="form-control"/>
       
       </div>

       <div class="form-group col-md-6" style="padding:15px;">

       <label>State</label>
       <input type="text" style="color:black;" name="state" placeholder="Write the state" class="form-control"/>
       
       </div>

</div>



 <div align="center" style="padding:15px;">

  <input type="SUBMIT" class="btn btn_on-hover btn-warning btn-lg btn-block">


 </div>



</form>


   
  </body>
</html>