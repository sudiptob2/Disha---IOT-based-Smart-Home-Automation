function light1on(){
		
             
document.getElementById("l1").src='images/light-on-r.png';
			 var xmlhttp = new XMLHttpRequest();
             xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                document.getElementById("testing").innerHTML = xmlhttp.responseText;
             }
        };
        xmlhttp.open("GET", "lighton.php?l_id=1", true);
        xmlhttp.send();

}
function light1off(){
	
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                document.getElementById("testing").innerHTML = xmlhttp.responseText;
             }
        };
        xmlhttp.open("GET", "lightoff.php?l_id=1", true);
        xmlhttp.send();
        document.getElementById("l1").src='images/light-off-r.png';	
}
