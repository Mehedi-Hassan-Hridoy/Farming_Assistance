function isvalid() {
  var firstName = document.getElementById("firstName").value;
  var lastName = document.getElementById("lastName").value;
  var Gender = document.getElementById("Gender").value;
  var Email = document.getElementById("Email").value;
  var Religion = document.getElementById("Religion").value;
  var Phone = document.getElementById("Phone").value;
  var PresentAddress = document.getElementById("PresentAddress").value;
  var ParmanentAddress = document.getElementById("ParmanentAddress").value;
  if (firstName == "" || lastName == "" || Gender =="" || Email =="" || Religion=="" || Phone=="" || PresentAddress=="" || ParmanentAddress== "") {
    alert("Must be filled out");
    return false;}
     else if(firstName==""){
        document.getElementById("firstName").innerHTML = "Please fill the firstName";
        return false;
      }
     else if(lastName) {
        document.getElementById("lastName").innerHTML = "Please fill the lastName";
        return false;
      }
      else if(gender) {
        document.getElementById("gender").innerHTML = "Please choose the gender";
        return false;
      }
      else if(email) {
        document.getElementById("email").innerHTML = "Please fill the email";
        return false;
      }
      else if(religion) {
        document.getElementById("religion").innerHTML = "Please fill the religion";
        return false;
      }
      else if(phone) {
        document.getElementById("lastName").innerHTML = "Please fill the phone";
        return false;
      }
      else if(presentAddress) {
        document.getElementById("PresentAddress").innerHTML = "Please fill the PresentAddress";
        return false;
      }
      else if(parmanentAddress) {
        document.getElementById("parmanentAddress").innerHTML = "Please fill the parmanentAddress";
        return false;
      }
    }