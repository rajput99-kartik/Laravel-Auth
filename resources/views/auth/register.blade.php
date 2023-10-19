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
            <h2>Register Page</h2>
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
                <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                    Thank you for getting in touch! 
                  </div>
                  
                    <form id="SubmitForm">
                        @csrf
                        <div class="mb-3">
                          <label for="InputName" class="form-label">Name</label>
                          <input type="text" class="form-control" id="InputName">
                          <span class="text-danger" id="nameErrorMsg"></span>
                        </div>
                  
                        <div class="mb-3">
                          <label for="InputEmail" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="InputEmail">
                          <span class="text-danger" id="emailErrorMsg"></span>
                        </div>
                  
                       
                  
                        <div class="mb-3">
                          <label for="InputPass" class="form-label">Pass</label>
                          <input type="password" class="form-control" id="InputPass">
                          <span class="text-danger" id="messageErrorMsg"></span>
                        </div>

                     
                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
            </div>
        </div>
        
    </div>
    
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">

$('#SubmitForm').on('submit',function(e){
        e.preventDefault();

        let name = $('#InputName').val();
        let email = $('#InputEmail').val();
        console.log(email);
   
        let message = $('#InputPass').val();
        console.log("abbc");
        console.log(message);
    
        $.ajax({
      url: "submitRegister",
      type:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
        name:name,
        email:email,
        
        message:message,
      },
      success:function(response){
        $('#successMsg').show();
        console.log(response);
      },
      error: function(response) {
        $('#nameErrorMsg').text(response.responseJSON.errors.name);
        $('#emailErrorMsg').text(response.responseJSON.errors.email);
       
        $('#messageErrorMsg').text(response.responseJSON.errors.message);
      },
      });
});
  </script>

</html>