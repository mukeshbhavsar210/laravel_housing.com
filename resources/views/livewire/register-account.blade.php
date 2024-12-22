<div>
    <div class="login-form">
        <form action="/account" method="post" name="registrationForm" id="registrationForm">
            <h4 class="modal-title">Register Now</h4>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                <p></p>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                <p></p>
            </div>                   
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                <p></p>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
                <p></p>
            </div>                    
            <button type="submit" class="btn btn-dark btn-block btn-lg" value="Register">Register</button>
        </form>        
    </div>      


<script type="text/javascript">
    $("#registrationForm").submit(function(event){
        event.preventDefault();

        $("button[type='submit']").prop('disabled', true);
        $("input[type='submit']").prop('disabled', true);

        $.ajax({
            url: '{{ route("processRegister") }}',
            type: 'post',
            data: $(this).serializeArray(),
            dataType: 'json',
            success: function(response){
                $("button[type='submit']").prop('disabled', false);

                var errors = response.errors;

                if(response.status == false){
                    if(errors.name){
                        $("#name").siblings("p").addClass('invalid-feedback').html(errors.name);
                        $("#name").addClass('is-invalid');
                    } else {
                        $("#name").siblings("p").removeClass('invalid-feedback').html();
                        $("#name").removeClass('is-invalid');
                    }

                    if(errors.email){
                        $("#email").siblings("p").addClass('invalid-feedback').html(errors.email);
                        $("#email").addClass('is-invalid');
                    } else {
                        $("#email").siblings("p").removeClass('invalid-feedback').html();
                        $("#email").removeClass('is-invalid');
                    }

                    if(errors.password){
                        $("#password").siblings("p").addClass('invalid-feedback').html(errors.password);
                        $("#password").addClass('is-invalid');
                    } else {
                        $("#password").siblings("p").removeClass('invalid-feedback').html();
                        $("#password").removeClass('is-invalid');
                    }
                } else {
                    $("#name").siblings("p").removeClass('invalid-feedback').html();
                    $("#name").removeClass('is-invalid');
                    $("#email").siblings("p").removeClass('invalid-feedback').html();
                    $("#email").removeClass('is-invalid');
                    $("#password").siblings("p").removeClass('invalid-feedback').html();
                    $("#password").removeClass('is-invalid');
                }

            },
            error: function(JQXHR, exception){
                console.log("Something went wrong");
            }
        })
    });
</script> 
</div>