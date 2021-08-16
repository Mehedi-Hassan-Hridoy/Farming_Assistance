function getresult(pForm){
	var xhttp = new XMLHttpRequest();
	xhttp.onload= function(){
		document.getElementById("result").innerHTML = JSON.parse(this.responseText);
		xhttp.send();
	}
	function buildTable(data)
	{var tableData = document.getElementById("data");
    tableData.innerHTML="";
    for($i=0,$i<data.length;$i++){
    	var row= <tr>
    	<td>${data[i].id}</td>
    	<td>${data[i].username}</td></tr>";
    	tableData.innerHTML +=row;
    }
}