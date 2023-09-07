<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.6.0.min.js"></script>
        <script src="parsleyjs.org_dist_parsley.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js" integrity="sha512-Fq/wHuMI7AraoOK+juE5oYILKvSPe6GC5ZWZnvpOO/ZPdtyA29n+a5kVLP4XaLyDy9D1IBPYzdFycO33Ijd0Pg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <style>
    .box
    {
     width:100%;
     max-width:600px;
     background-color:#f9f9f9;
     border:1px solid #ccc;
     border-radius:5px;
     padding:16px;
     margin:0 auto;
    }
    input.parsley-success,
    select.parsley-success,
    textarea.parsley-success {
      color: #468847;
      background-color: #DFF0D8;
      border: 1px solid #D6E9C6;
    }
   
    input.parsley-error,
    select.parsley-error,
    textarea.parsley-error {
      color: #B94A48;
      background-color: #F2DEDE;
      border: 1px solid #EED3D7;
    }
   
    .parsley-errors-list {
      margin: 2px 0 3px;
      padding: 0;
      list-style-type: none;
      font-size: 0.9em;
      line-height: 0.9em;
      opacity: 0;
   
      transition: all .3s ease-in;
      -o-transition: all .3s ease-in;
      -moz-transition: all .3s ease-in;
      -webkit-transition: all .3s ease-in;
    }
   
    .parsley-errors-list.filled {
      opacity: 1;
    }
    
    .parsley-type, .parsley-required, .parsley-equalto{
     color:#ff0000;
    }
    span{
        color:red
    }
    
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">  
        <br />  
        <br />
<br />
<div class="table-responsive">  
<h3 align="center">PHP Form Validation using Parsleys.js Library</h3><br />
<div class="box">
 <form id="validate_form" data-parsley-validate="">
  <div class="row">
   <div class="col-xs-3 pl-3">
    <div class="form-group">
     <label>First Name<span>*</span></label>
     <input type="text" name="first_name" id="first_name" placeholder="Enter First Name" data-parsley-error-message="please enter name" required data-parsley-pattern="^[A-Za-z]+$"  class="form-control" />
    </div>
   </div>
   <div class="col-xs-6 ml-3">
    <div class="form-group">
     <label>Last Name<span>*</span></label>
     <input type="text" name="last_name" id="last_name" placeholder="Last Name" required data-parsley-pattern="^[A-Za-z]+$/"   class="form-control" />
    </div>
   </div>
  </div>
  <div class="form-group">
   <label for="email">Email <span>*</span></label>
   <input type="text" name="email" id="email" placeholder="Email" required data-parsley-type="email"	
   class="form-control" />
  </div>
  <div class="form-group">
   <label for="password">Password <span>*</span></label>
   <input type="password" name="password" id="password" placeholder="Password" required data-parsley-length="[6, 10]" class="form-control" />
  </div>
  <div class="form-group">
   <label for="cpassword">Confirm Password <span>*</span></label>
   <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required data-parsley-equalto="#password"  class="form-control" />
  </div>
  <div class="form-group">
   <label for="cpassword">Website <span>*</span></label>
   <input type="text" id="website" name="website" placeholder="Website URL" required data-parsley-type="url" class="form-control" />
  </div>
  <div class="form-group">
   <div class="checkbox">
    <span>*</span><label><input type="checkbox" id="check_rules" name="check_rules" required  /> I Accept the Terms & Conditions</label>
   </div>
  </div>
  <div class="form-group">
   <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success" />
  </div>
 </form>
</div>
</div>  
</div>
<script>
    $(Document).ready(function(){
        $('#validate_form').parsely()
    })
</script>
    
</body>
</html>