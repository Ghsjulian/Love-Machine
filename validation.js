function ghs () {
    var gender = document.myfrm.gender.value;
    var fname = document.myfrm.fname.value;
    var lname = document.myfrm.lname.value;
    var ghs = "Male";
   var hs = "Female";
    if (gender=="Gender") {
        document.getElementById("err").innerHTML="Please Enter Your Gender !"
        return false;
    }
    if (fname=="") {
        document.getElementById("fname").innerHTML="Please Enter Your Name !"
        return false;
    }
    if (lname=="") {
        document.getElementById("lname").innerHTML="Please Enter Your Lovers Name !"
        return false;
    }
    if (fname.length<2) {
        document.getElementById("fname").innerHTML="Please Enter Your Correct Name !"
        return false;
    }
    if (lname<3) {
    document.getElementById("lname").innerHTML="Please Enter Crash Name !"
        return false;
    }    
    
}