    // =================================
    //      CLIENT SIDE VALIDATION
    // =================================
    console.log("conected");

        // on form submission - run validation
        $("form").submit(function(e) {
            // create empty erro array for messages to be added
            var error = "";
            // if no name
            if ($("#name").val() == ""){
                // append to error array
                error += "A name is required!<br>";
            }
            // if no email
            if ($("#email").val() == ""){
                // append to error array
                error += "An email is required!<br>";
            }
            // if no subject
            if ($("#subject").val() == "") {
                // append to error array
                error += "<p>A subject is required!<br>";
            }
            // if no body
            if ($("#message").val() == ""){
                // apend to error array
                error += "A message is required!";
            }
            // if error array has content...
            if (error != "") {
                // display error to user in bootstrap alert-danger
                $("#errorAlert").html("<div class='alert alert-dismissible alert-danger' role='alert'><strong>There were error(s) in your form:</strong><br>" + error + "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></div>");
                alert(error);
                // prevent form submission
                return false;
            } else {
                // allow form submission
                return true;
            }
        });