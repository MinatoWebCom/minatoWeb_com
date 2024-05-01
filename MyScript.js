function vali(){
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var pattern = /^[a-z]+[a-z0-9]+@[a-z]+\.[a-z]{2,}$/
    var pass_pattern = /^[A-Za-z0-9]{6,}$/
    
    if(email == ""){
        alert("Enter Email Address !")
        return false;
    }else if (!pattern.test(email)){
        alert("Enter Vallid email Address !")
        return false
    }
    if (pass == "") {
        alert("Enter Password !");
        return false;
    }else if (!pass_pattern.test(pass)){
        alert("password pattern Not Matched ! \n User Upper Lower and Number only.\n Minimum  6 letters")
        return false;
    }
    

}