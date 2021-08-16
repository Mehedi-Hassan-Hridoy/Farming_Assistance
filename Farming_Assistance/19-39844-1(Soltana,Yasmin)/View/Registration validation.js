function validation(){
    var first name= document.getElementById('firstname').value;
    var last name= document.getElementById('lastname').value;
    var email= document.getElementById('email').value;
    var dob= document.getElementById('dob').value;
    var grnder= document.getElementById('gender').value;
    var religion= document.getElementById('religion').value;
    var username= document.getElementById('username').value;
    var password= document.getElementById('password').value;

    if(firstname=='' || lastname== ''|| gender == ''|| dob == '' || religion == ''|| email==''|| username==''|| password == ''||)
    {
        document.getElementById("result").innerHTML = "All field required";

       return false;
      }
      else if(firstname.length<5)
      {
        document.getElementById("result").innerHTML = "Must be 5 characters";

       return false;
      }
      else if(lastname.length<5)

{
        document.getElementById("result").innerHTML = "Must be 5 characters";

       return false;
      }
       else if(email.length<10)

{
        document.getElementById("result").innerHTML = "Must be 10 characters";

       return false;
      }
      else if(gender.length<6)
{
        document.getElementById("result").innerHTML = "gender must 6 characters";

       return false;
      }
      else if(dob.length<10)
{
        document.getElementById("result").innerHTML = "dob must 10 characters";

       return false;
      }
      else if(religion.length<10)
{
        document.getElementById("result").innerHTML = "religion must 10 characters";

       return false;
      }
      else if(username.length<10)
{
        document.getElementById("result").innerHTML = "username must 10 characters";

       return false;
      }

     else if(password.length<6) {
        document.getElementById("result").innerHTML = "username must 6 characters";

       return false;
      }

        