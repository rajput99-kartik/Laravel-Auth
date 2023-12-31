@include('layout.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    <style>
        a {
            color: ;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <h2>Login Page</h2>
        </div>

        {{-- <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="inputText">Email:</label>
                        <input type="email" class="form-control col-sm-6" id="inputText" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <label for="inputText">Password:</label>
                        <input type="password" class="form-control" id="inputText" placeholder="Enter your Password">
                    </div>
                    
                    <br>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div> --}}

        <div class="row justify-content-center">
            <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                Thank you for getting in touch! 
              </div>
            <div class="col-md-6">
                <form id="login_form">
                    <div class="form-group">
                        <label for="inputEmail">Email:</label>
                        <input type="email" class="form-control col-sm-6" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password:</label>
                        <input type="password" class="form-control col-sm-6" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="mt-1">
                        <button class="btn btn-sm" style="color: blue; background: none; border: none;"><a href="{{route('auth.forgot')}}">Forgot password?</a></button>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                       
                        
                    </div>
                    <br>
                    <div class="">
                        <label class="custom-control-label" for="customControlInline">Don't Have an Account?</label>
                            <button class="btn btn-primary btn-sm" >  <a style="color: white" href="{{url('/registerUser')}}">Create Account!</a></button>
                    </div>
                </form>

                
            </div>
        </div>
        
    </div>
    
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">

$('#login_form').on('submit',function(e){
        
        e.preventDefault();

       
        let email = $('#inputEmail').val();
        console.log(email);
   
        let message = $('#inputPassword').val();
        console.log("abbc");
        console.log(message);
    
        $.ajax({
      url: "loginUser",
      type:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
       
        email:email,
        
        message:message,
      },
      success:function(response){
        $('#successMsg').show();
        console.log(response);
      }
      });
});
  </script>

</html>