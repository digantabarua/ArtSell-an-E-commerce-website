function validateForm() {
    var user = document.getElementById("uname").value;
    var password = document.getElementById("pass").value;

    if(user=="")
    {
      document.getElementById("erroruser").innerHTML="User name must enter";
      //return false; 
    }
    else
    {
      document.getElementById("erroruser").innerHTML="";
     
    }
  
   if (password.length<6 ) 
   {
     document.getElementById("errorpass").innerHTML="Password contains 6 char";
      return false;
    }
    else 
    {
      document.getElementById("errorpass").innerHTML="";
    }
  
  
  }
  