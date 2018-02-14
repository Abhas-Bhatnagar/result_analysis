
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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			*{margin: 0px;padding: 0px;}
			body{background: lightgreen;}
			#header{width: 100%;height: 80px;background: #333;box-shadow: 0px 2px 4px gray;}
			#logo{width:200px;height: 80px;float: left;padding-left:40px;}
			#navbar{width:1000px;height: 80px;margin: 0px auto;float: right;}
			#navbar>li{float: left;list-style: none;width: 190px;height: 80px;border-right:1px solid #534444;border-left: 1px solid #534444;}
			li>a{text-decoration: none;color: white;font-family: cursive;font-size: 20px;line-height: 80px;display: block;text-align: center;}
			li>a:hover,
			li>a:focus{background: MediumSeaGreen;color: #333;}
			#res_btn{width: 50px;height: 50px;float: right;display: none;}
			@media screen and (max-width:1260px){
				#logo>img{width:150px;height: 60px;float: left;padding-left:20px;padding-top: 10px;}
				#navbar{width:800px;height: 80px;margin: 0px auto;float: right;}
				#navbar>li{float: left;list-style: none;width: 150px;height: 80px;border-right:1px solid #534444;border-left: 1px solid #534444;}
				li>a{text-decoration: none;color: white;font-family: cursive;font-size: 20px;line-height: 80px;display: block;text-align: center;}
			}
			@media screen and (max-width:1060px){
				#header{width: 100%;height: 80px;background: #333;box-shadow: 0px 2px 4px gray;position:relative;top:80px;}
				#logo{width:100%;height: 90px;float: left;padding-left:20px;padding-top: 10px;position: absolute;top:-90px;background: black;}
				#navbar{width:100%;height: 60px;margin: 0px auto;}
				#navbar>li{width: 18%;}
				li>a{font-size: 16px;}
			}
			@media screen and (max-width:768px){
				#header{height: 50px;}
				#navbar{width:100%;height: 50px;margin: 0px auto;}
				#navbar>li{width: 19%;height: 50px;}
				li>a{font-size: 16px;line-height: 50px;}
			}
			@media screen and (max-width: 480px){
				#header{height: 0px;}
				#navbar{width:100%;height: 50px;margin: 0px auto;margin-top:-40px;
					display: none;}
				#navbar>li{float: none;list-style: none;width: 100%;height: 50px;background: #333;border-bottom: 1px solid lightgreen;}
				li>a{font-size: 16px;line-height: 50px;}
				#res_btn{display: block;position: relative;top:-80px;cursor: pointer;}
			}
		</style>
	</head>
<head>
<title>
	Semester marks
</title>
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

                            alert("Result will be uploaded soon.");
                            return "http://vibgyor7.xyz/result/formvalue.php";
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

<body>

	<script type="text/javascript">
			var nav = false;
		function show_hide_nav(id){
			var navbar = document.getElementById(id);
			
			if(nav == false){
				navbar.style.display = "block";
				nav = true;
			}else{
				navbar.style.display = "none";
				nav = false;
			}
		}
	</script>
	<div id="header">
		<div id="logo"><img src="vy.png"/></div>
		<div id="res_btn" onclick="show_hide_nav('navbar')" ><img src="button.png"/></div>
		<ul id="navbar">
			<li><a href="#">Home</a></li>
			<li><a href="#">Feedback</a></li>
			<li><a href="#">Contact</a></li>
			
		</ul>
	</div>

</body>


</head>
<body onload="myFunction()" background="bg.jpg">
<!-- target="_self" autocomplete="on"autofocus-->
<div >
<form name="myForm"  onsubmit="this.action = fileName();" id="demo1" >
 <fieldset>
 <legend><?php echo "Welcome ".$_SESSION['name']." "; ?></legend><br>
    
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
  <option value="IT">IT</option>
  <option value="ECE">ECE</option>
  <option value="CIVIL">CIVIL</option>
 <option value="ME">ME</option>
  <option value="EI">EI</option>
  <option value="EN">EN</option></select><br>


  <input type="submit" value="Download" >
  

  </fieldset>
  
</form>
</div>



  


<a href="http://vibgyor7.xyz/feedback/">
<input type="image" src="images/feed.png" alt="Submit"  width="200" height="65"
img style="margin: 120px 700px"
> 
</a>




<a href="http://vibgyor7.xyz/contact/">
<input type="image" src="images/con.png" alt="Submit"  width="200" height="65"
img style="margin: -43px 700px"
> 
</a>



</body>




</html>
<?php
}
?>
