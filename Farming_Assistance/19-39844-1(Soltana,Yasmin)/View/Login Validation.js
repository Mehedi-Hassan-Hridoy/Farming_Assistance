function validation(){
  
    var Username= document.getElementById('username').value;
    var Password= document.getElementById('password').value;
    if( username==''|| password == ''||)
    {
        document.getElementById("result").innerHTML = "All field required";

       return false;
      }

      else if(username.length<8)
{
        document.getElementById("result").innerHTML = "username must 6 characters";

       return false;
      }

     else if(password.length<10) {
        document.getElementById("result").innerHTML = "username must 6 characters";

       return false;
      }