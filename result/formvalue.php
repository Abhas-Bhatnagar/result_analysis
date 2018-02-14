<!DOCTYPE html>

<?php
session_start(); //session start



if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
  unset($_SESSION['name']);
  echo "<script> window.location = 'http://vibgyor7.xyz/result' </script>";
}


if (isset($_SESSION['access_token']))

{

?>
<html>
<head>
<title>
	Semester marks
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/jpg" href="logo.jpg"/>

<script src="jquery-3.1.0.min.js"></script>
<script>
// -----------------------------------------------------------------------------------------

 var message="This function is not allowed here.";
 
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
                             alert(message);
                             return false;
                             }
               }

               function clickNS4(e){
                             if (document.layers||document.getElementById&&!document.all){
                                            if (e.which==2||e.which==3){
                                                      alert(message);
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

   document.oncontextmenu=new Function("alert(message);return false;")
			   
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
function fileName(){

                            course=document.getElementById('course').value;
                            branch=document.getElementById('branch').value;
                            year=document.getElementById('year').value;

			if (course == "B.Tech" && year=="3rd_year")
				{	if (branch=="CSE")
					return "http://139.59.32.48/kiet/btech/b_third/cse/CSE6th.xlsx";
					else if(branch=="ECE")
					return "http://139.59.32.48/kiet/btech/b_third/ece/ECE6th.xlsx";
					else if(branch=="CIVIL")
					return "http://139.59.32.48/kiet/btech/b_third/civil/CIVIL6th.xlsx";
					else if(branch=="EI")
					return "http://139.59.32.48/kiet/btech/b_third/ei/EI6th.xlsx";
					else if(branch=="EN")
					return "http://139.59.32.48/kiet/btech/b_third/en/EN.xlsx";
					else if(branch=="IT")
					return "http://139.59.32.48/kiet/btech/b_third/it/IT6sem.xlsx";
					else if(branch=="ME")
					return "http://139.59.32.48/kiet/btech/b_third/me/ME6th.xlsx";
				}
				else if(course == "B.Tech" && year=="2nd_year")
				{	if (branch=="CSE")
					return "http://139.59.32.48/kiet/btech/b_second/cse/CSE4th.xlsx";
					else if(branch=="ECE")
					return "http://139.59.32.48/kiet/btech/b_second/ece/ECE4th.xlsx";
					else if(branch=="CIVIL")
					return "http://139.59.32.48/kiet/btech/b_second/civil/CIVIL4th.xlsx";
					else if(branch=="EI")
					return "http://139.59.32.48/kiet/btech/b_second/ei/EI4th.xlsx";
					else if(branch=="EN")
					return "http://139.59.32.48/kiet/btech/b_second/en/EN4th.xlsx";
					else if(branch=="IT")
					return "http://139.59.32.48/kiet/btech/b_second/it/IT4th.xlsx";
					else if(branch=="ME")
					return "http://139.59.32.48/kiet/btech/b_second/me/ME4th.xlsx";
				}
				else if(course == "B.Tech" && year=="1st_year")
                                {       if (branch=="CSE")
                                        return "http://vibgyor7.xyz/kiet/btech/b_first/cse/CSE_2nd_sem_1st.xlsx";
                                        else if(branch=="ECE")
                                        return "http://vibgyor7.xyz/kiet/btech/b_first/ece/ECE_2nd_sem_1st.xlsx";
                                        else if(branch=="CIVIL")
                                        return "http://vibgyor7.xyz/kiet/btech/b_first/civil/civil_2nd_sem.zip";
                                        else if(branch=="EI")
                                        return "http://vibgyor7.xyz/kiet/btech/b_first/ei/EI_2nd_sem_1st.xlsx";
                                        else if(branch=="EN")
                                        return "http://vibgyor7.xyz/kiet/btech/b_first/en/EN_2nd_sem_1st.xlsx";
                                        else if(branch=="IT")
                                        return "http://vibgyor7.xyz/kiet/btech/b_first/me/ME_2nd_sem_2nd.xlsx";
                                        else if(branch=="ME")
                                        return "http://vibgyor7.xyz/kiet/btech/b_first/me/ME_2nd_sem_1st.xlsx";
                                }


                            alert("Kindly email your queries for that you may see contact page");
                            return "http://vibgyor7.xyz/result/formvalue.php";
               }
</script>
<style>

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}


input[type=text], select {
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
.chip {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    font-size: 16px;
    line-height: 50px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}
.bottomleft {
    position: absolute;
    bottom: 0;
    left: 0;
}

</style>
</head>
<body onload="myFunction()" background="bg.jpg">
<!-- target="_self" autocomplete="on"autofocus-->
<ul class="topnav">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="http://vibgyor7.xyz/result/about_project.php">About Project</a></li>
  <li><a href="http://vibgyor7.xyz/contact/">Contact</a></li>
   <li><a href="http://vibgyor7.xyz/feedback/">Feedback</a></li>
   <li class="chip">
 			 <img class="left" src="img_avatar.png" alt="Person" width="96" height="96">
 				<?php echo "Welcome ".$_SESSION['name']." "; ?>
</li>
   <li class="right"><a href="http://vibgyor7.xyz/result/formvalue.php?logout=1">logout</a></li>
   
</ul>

<div >
<form name="myForm"  onsubmit="this.action = fileName();" id="demo1" >
 <fieldset>
 <legend>KIET Semester Result Analysis</legend><br>
    
    <legend> Result information:</legend>
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
  <option value="ECE">ECE</option>
  <option value="CIVIL">CIVIL</option>
<option value="IT">IT</option> 
<option value="ME">ME</option>
  <option value="EI">EI</option>
  <option value="EN">EN</option></select><br>


  <input type="submit" value="Download" >
  

  </fieldset>
  
</form>

</body>
</html>
<?php
}
?>
