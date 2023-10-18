@include('layout.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
            <div class="col-md-6">
                <form id="register_form" action="#" method="">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control col-sm-6" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control col-sm-6" id="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control col-sm-6" id="password" placeholder="Password">
                    </div>
                 
                    <div class="form-group">
                        <label for="cpassword">Confirm Password:</label>
                        <input type="password" name="cpassword" class="form-control col-sm-6" id="cpassword" placeholder="Password">
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(function(){
        $("#register_form").submit(function(e){
            e.preventdefault();
            alert("Hello");
        })
    })
</script>
</html>