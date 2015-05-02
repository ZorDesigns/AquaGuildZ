$(document).ready(function(){
    $("#registerSubmit").click(function(){
        if($("#registerUsername").val() && $("#registerPassword").val() && $("#registerPasswordConfirm").val() && $("#registerEmail").val())
        {
            if($("#registerPassword").val() == $("#registerPasswordConfirm").val())
            {
                var request = $.ajax({
                url: window.baseUrl + "index.php/ajax/takeregister",
                type: "POST",
                data: {username: $("#registerUsername").val(), password: $("#registerPassword").val(), email: $("#registerEmail").val()}
                });
            
                request.done(function(msg){
                    if (msg == 0x01)
                    {
                        alert("Registration is successful, please click OK to proceed.");
                        window.location.reload();
                    }
                    else if (msg == 0x03)
                    {
                        alert("Username is already registered, please change it.");
                    }
                    else if (msg == 0x02)
                    {
                    alert("Email is already registered, please change it.");
                    }
                });
            }
            else
            {
                alert("Passwords don't match!");
            }
            
        }
        else
        {
            alert("Please fill all the fields!");
        }
    });
});