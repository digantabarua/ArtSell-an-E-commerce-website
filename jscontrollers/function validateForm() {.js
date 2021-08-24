function validateForm() {
  var fullname= document.getElementById("fullname").value;
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;
  var password = document.getElementById("password").value;
  var gn = document.getElementsByName("gender");
  var checked = false;
  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);
  if (fullnameame == "" ) {
   document.getElementById("errorname").innerHTML="Please fill out name";
    //return false;
  }
  else{
    document.getElementById("errorname").innerHTML="";
  }
  if (username == "") {
    document.getElementById("mytext").innerHTML="Please enter username";
    return false;
  }
  if ( password.length < 5) {
    document.getElementById("mytext").innerHTML="Please enter password";
    return false;
  }

  if (document.getElementById("Male").checked == false &&  document.getElementById("Female").checked == false &&  document.getElementById("Other").checked == false)
  {
    document.getElementById("mytext").innerHTML="Please Gender";
    return false;
  }
  if(!res)
  {
    document.getElementById("errormail").innerHTML="Email format is not correct";
    //return false; 
  }
  else
  {
    document.getElementById("errormail").innerHTML="";
  }
  if (password.length<6) 
 {
   document.getElementById("errorpass").innerHTML="Password contains 6 char";
   // return false;
  }
  else 
  {
    document.getElementById("errorpass").innerHTML="";
  }

  if (comment.length<15) {
    document.getElementById("errorcomment").innerHTML="Comment contains 15 char";
    // return false;
   }
   else 
   {
    document.getElementById("errorcomment").innerHTML="";
   }

   if(validateGen()==false)
   {
     document.getElementById("errorgen").innerHTML="Gender must requried";
    // return false;
   }
   else{
    document.getElementById("errorgen").innerHTML="";
   }
}
