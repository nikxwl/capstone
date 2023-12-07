<!doctype html>
<html>
<head>
<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Sign Up.css">
  
<title>Sign Up</title>
</head>


	
<body style="background-color: #0F2C59">
	
<div class="">
   <div class="container mx-auto my-5 mt-5  d-flex justify-content-center align-items h-auto">
       <div class="col bg-light p-5">
           <div class="row py-2">
                <h2>Create your account</h2>
                <h6><em> create an account to start answering the survey</em></h6>
           </div>
           <div class="row">
<div class="alert alert-danger" role="alert">
    Please fill out all of the field!
</div>
               <form name="register" id="signupform">
                   <input type="text" class="form-control" id="fname" placeholder="First Name"  required>
                   <input type="text" class="form-control mt-2" id="mname" placeholder="Middle Name" required>
                   <input type="text" class="form-control mt-2" id="lname" placeholder="Last Name" required>
                   <input type="number" class="form-control mt-2" id="year" placeholder="Year Graduated" required>
                   <input type="email" class="form-control mt-2" id="email" placeholder="Enter Email" required>
                   
                  <select class="form-select mt-2">
                        <option selected>Choose a role</option>
                        <option value="1">Admin</option>
                        <option value="2">Evaluator</option>
                        <option value="3">User/Graduate Students</option>
                  </select>
                   
                   <input type="password" class="form-control mt-2" id="password" placeholder="Enter Password" required>
                   <input type="password" class="form-control mt-2" id="password2" placeholder="Confirm Password" required>
                   
                   <div class="form-check py-2">
                       <input class="form-check-input" type="checkbox">
                       <label>Show Password</label>
                   </div>
                   
                   <a href="Main.php">
                   <button type="button" class="btn btn-primary mt-3">Register</button>
                       </a>
               </form>
           </div>
       </div>   
    </div>
       
       
    
 </div>   
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
