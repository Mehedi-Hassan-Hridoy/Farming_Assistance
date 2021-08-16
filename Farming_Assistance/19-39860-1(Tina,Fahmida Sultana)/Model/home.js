function validation(){
  
    var search= document.getElementById('search').search;
    var viewall= document.getElementById('viewall').viewall;
    var details= document.getElementById('details').details;
    if( search==''|| viewall == ''|| details==''|| )
    {
        document.getElementById("eresult").innerHTML = "All field required";

       return false;
      }
      