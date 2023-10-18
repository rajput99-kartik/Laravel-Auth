@include('layout.app');
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
                <form>

                    <div class="form-group">
                        <label for="inputPassword">Name:</label>
                        <input type="text" class="form-control col-sm-6" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email:</label>
                        <input type="email" class="form-control col-sm-6" id="inputEmail" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputPassword">Password:</label>
                        <input type="password" class="form-control col-sm-6" id="inputPassword" placeholder="Password">
                    </div>
                 
                    <div class="form-group">
                        <label for="inputPassword">Confirm Password:</label>
                        <input type="password" class="form-control col-sm-6" id="inputPassword" placeholder="Password">
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
</html>