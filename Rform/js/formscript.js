function valid() {
    
    var name = document.getElementById('name')
    var pass = document.getElementById('password')
    var pass_repeat = document.getElementById('re_password')
    var email = document.getElementById('email')
    
    if(name.value=="") {
        alert("Please Enter Your Name");
        name.focus();
        return false;
    }

    else if(!isNaN(name.value)) {
        alert("Please Enter Only Characters");
        name.select();
        return false;
    }
    
    else if (email.value == "") {
        alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    else if (email.value.indexOf("@", 0) < 0) {
        alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    else if (email.value.indexOf(".", 0) < 0) {
        alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    
    else if(pass.value=="") {
        alert("Please Enter Your Password");
        pass.focus();
        return false;
    }
   
    else if(pass_repeat.value=="") {
        alert("Please renter Your Password");
        pass_repeat.focus();
        return false;
    }
    
    else if(pass_repeat.value!=pass.value) {
        alert("Enter correct password ");
        pass_repeat.focus();
        return false;
    }

    else {
        alert("You're registered successfully");
      //window.location="http://localhost/C14-69_wdl/process.php"; }
        return true;
    }
}