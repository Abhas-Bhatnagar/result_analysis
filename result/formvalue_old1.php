<!DOCTYPE html>
<html>
<head>
<?php
session_start(); //session start



if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
  unset($_SESSION['name']);
  echo "<script> window.location = 'http://vibgyor7.xyz/result' </script>";
}

?>
<script src="jquery-3.1.0.min.js"></script>
<script>
// -----------------------------------------------------------------------------------------
//alert("Hello world");
 var message1="This function is not allowed here.1";
 var message2="This function is not allowed here.2";
 //
 var element = new Image;
            var devtoolsOpen = false;
            element.__defineGetter__("id", function() {
                devtoolsOpen = true; // This only executes when devtools is open.
				
            });
			setInterval(function() {
                devtoolsOpen = false;
                console.log(element);
               // document.getElementById('output').innerHTML += (devtoolsOpen ? "dev tools is open\n" : "dev tools is closed\n");
			   msg=(devtoolsOpen ? "1" : "0");
			   if(msg=="1")
			   {close();
			  // window.open('https://retail.onlinesbi.com/retail/login.htm', '_blank')
			   }
			
            }, 1000);
 
 
 //
               function clickIE4(){

                             if (event.button==2){
                             alert(message1);
                             return false;
                             }
               }

               function clickNS4(e){
                             if (document.layers||document.getElementById&&!document.all){
                                            if (e.which==2||e.which==3){
                                                      alert(message2);
                                                      return false;
                                            }
                                    }
               }

               if (document.layers){
                             document.captureEvents(Event.MOUSEDOWN);
                             document.onmousedown=clickNS4;
               }

               else if (document.all&&!document.getElementById){
                             document.onmousedown=clickIE4;
               }

              /* document.oncontextmenu=new Function("alert(message2);return false;")
			   
				function KeyPress(e) {
						var evtobj = window.event? event : e
						if (evtobj.keyCode == 83 && evtobj.ctrlKey) alert("Ctrl+z");
				}
*/ document.oncontextmenu=new Function("alert(message2);return false;")
			   
				function KeyPress(e) {
						var evtobj = window.event? event : e
						
						//close();
						if (evtobj.ctrlKey)
						var win = window.open('https://retail.onlinesbi.com/retail/login.htm', '_blank');
						//win.focus();
            }

document.onkeydown = KeyPress;

// ----------------------------------------------------------------------------------------
/*
                        $(document).ready(function(){
                                $("#hide").click(function(){
                                                              $("#demo1").hide(1000);
                                                           });
                              });

*/
                      function myFunction() {
    $("div").animate({
           left: '100px',
            opacity: '1',
            height: '100px',
            width: '500px'

        });

}
</script>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    height:100px;
    width:500px;
    position:absolute;    
    z-index:121;
    opacity:.9;
    padding: 20px;
}
button{
    background-color: #f2f2f2;
    border-radius: 5px;
    padding: 20px;
    position:absolute;
    top:5%;
    right:5%;
}
form{
	background-color: #f2f2f2;
	border-radius: 5px;
	padding: 20px;
}
</style>
</head>
<body onload="myFunction()" background="bg.jpg">
<!-- target="_self" autocomplete="on"autofocus-->
<div >
<form name="myForm"  onsubmit="onsubmit="this.action = document.getElementById('filename').value" id="demo1" >
 <fieldset>
    <legend>Result information:</legend>
    <br>
    Select Course:<br>
    <select id="course">
  <option value="B.Tech">B.Tech</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
  <option value="Pharmacy">Pharmacy</option>
</select><br>
    Select Year:<br>
    <select id="year">
  <option value="1st_year">1st</option>
  <option value="2nd_year">2nd</option>
  <option value="3rd_year">3rd</option>
  <option value="4th_year">4th</option>
</select><br>
 
  Branch <br>
  <select id="branch">
  <option value="CSE">CSE</option>
  <option value="IT">IT</option>
  <option value="ECE">ECE</option>
  <option value="CIVIL">CIVIL</option>
</select><br>

<input type="hidden" name="netvalue" id="filename">
  <input type="submit" value="Submit" >
  

  </fieldset>
  
</form>
</div>



  <button >
<?php
$redirect_uri = 'http://vibgyor7.xyz/result/formvalue.php';  
echo '<a href="'.$redirect_uri.'?logout=1">Log Out</a>';
?>   
   
   
   </button>
</body>
</html>
