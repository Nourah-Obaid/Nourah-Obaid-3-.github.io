<?php 
$host='localhost';
$user ='root';
$password ='';
$database ='RCP-DB';
$conn= mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
die("cant connect with database". mysqli_connect_error());
}

if (@$_POST['forward'] == 'forward') {
      $sql = "INSERT INTO `movement` (`id`,`forward`) VALUES (NULL,'Forward')";
	   $conn->query($sql);
	   $act= 'Forward';
     } 
     elseif (@$_POST['backward'] == 'backward') {
        $sql = "INSERT INTO `movement` (`id`,`backward`)  VALUES (NULL,'Backward')";
		$conn->query($sql);
       $act= 'Backward';
     } 
     elseif (@$_POST['right'] == 'right') {
       $sql = "INSERT INTO `movement` (`id`,`right`) VALUES (NULL,'Right')";
       $conn->query($sql);
       $act= 'Right';
	//   echo $conn->error ;
     }
     elseif (@$_POST['left'] == 'left') {
        $sql = "INSERT INTO `movement` (`id`,`left`) VALUES (NULL,'Left')";
		$conn->query($sql);
		$act= 'Left';
     }
     elseif (@$_POST['stop'] == 'stop') {
        $sql = "INSERT INTO `movement` (`id`,`stop`) 	VALUES (NULL,'Stop')";
		$conn->query($sql);
		$act= 'Stop';
     }else {
    
		$act= 'No Action';
     }
     
     $actdiv ="<div class='act'>$act</div>";
     
?>
<!DOCTYPE HTML>
<html>  
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="description" content="robot">
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->     
    <style>
    img {
    display: block;
	margin-right: 350px ;
	margin-left:  auto ;
	width: 570px;
	height: 200px;
}
.Wrapper {
	display: block;
	border-radius: 75px;
	width: 350px;
	height: 350px;
	margin-bottom: 40px;
	margin-top: 90px;
	margin-right:  448px ;
	margin-left: auto ;
	padding: 10px 25px;
	background: white;
	box-shadow: 0 8px 10px -4px rgba(0, 0, 0, 0.5), 0 40px 50px -15px rgba(0, 0, 0, 0.2), inset 0 -2px 8px 1px rgba(204, 194, 181, 1), 0px 2px 1px 0px rgba(255,255,255,0.8) inset;
}
.panel {
	padding: 2%;
	display: block;
	text-align: center;
	margin: auto;
}
.button {
	border-radius: 100%;
	background-color: #50ccc8;
	border: none;
	outline: 2px;
	padding: 7%;
	margin: 1%;
	font-size: 150%;
	transition-duration: 0.5s;
	cursor: pointer;
	display: inline;
	box-shadow: 3px 3px 7px #333;
}
.button:hover {
	background-color: #29435c;
	color: white;
	transform: scale(1.1);
}
.button1 svg {
	transform: rotate(-90deg);
}
.button2 svg {
	transform: rotate(-180deg);
}
.button3 {
	background-color:  #50ccc8;
}
.button3:hover {
	background-color: #9c0c3c;
}
.button4 svg {
	transform: rotate(0deg);
}
.button5 svg {
	transform: rotate(90deg);
}
body {
	background-image: url("pr.jpeg");
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	
	justify-content: center;
}
.title {
	color: #33667a;
	text-shadow: 1px 1px rgba(255, 255, 255, 0.15);
	font-family: "Courier New", monospace;
	font-weight: 800;
	text-transform: uppercase;
	text-align: center;
	margin-bottom: 2rem;
	font-size: 1.5rem;
}
.act {
	display: block;
	width: 100px;
	border-radius: 9px;
	height: 28px;
	text-align: center;
	padding: 5px;
	font-size: 1.5em;
	color: #50ccc8;
	margin-bottom:40px;
	margin-right: 590px;
	margin-left: auto;
background: white;
	box-shadow: 0 8px 10px -4px rgba(0, 0, 0, 0.5), 0 40px 50px -15px rgba(0, 0, 0, 0.2), inset 0 -2px 8px 1px rgba(204, 194, 181, 1), 0px 2px 1px 0px rgba(255,255,255,0.8) inset;


}
  
    
    </style>
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->   
  </head>     
  <body>  
<?=@$actdiv?>  
    
    <div class="Wrapper"> 
      <h1 class="title"> <b>   robot control panel </b>  </h1> 
      <div class="panel">      
        <form action="RCP-PHP.php" method="post">
          <section>      
            <button type="submit" name="forward" value="forward" class="button button1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/>
              </svg>
            </button>      
          </section>      
          <section>        
            <button type="submit" name="left" value="left" class="button button2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/>
              </svg>
            </button>        
            <button type="submit" name="stop" value="stop" class="button button3">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 16 16" version="1.1">    
                <!-- bar 1 -->	    
                <path fill="#D8D8D8" d="M0,0 L6,0 L6,16 L0,16 L0,0 Z" id="bar1">      
                  <animate xlink:href="#bar1"                attributeName="d"                from="M0,0 L6,0 L6,16 L0,16 L0,0 Z"                	to="M0,0 L6,3.20001221 L6,12.7999878 L0,16 L0,0 Z"                dur="0.3s" 	               fill="freeze"  	               begin="startAnimation.begin" />      
                  <animate xlink:href="#bar1"                attributeName="d"                	from="M0,0 L6,3.20001221 L6,12.7999878 L0,16 L0,0 Z"                to="M0,0 L6,0 L6,16 L0,16 L0,0 Z"                dur="0.3s" 	               fill="freeze"  	               begin="reverseAnimation.begin" />    
                </path>    
                <!-- horizontal line -->    	
                <path fill="#D8D8D8" d="M10,0 L16,0 L16,16 L10,16 Z" id="bar2">      
                  <animate attributeName="d" 	               from="M10,0 L16,0 L16,16 L10,16 Z" 	               to="M5.9944458,3.20001221 L15,8 L15,8 L5.9944458,12.7999878 Z"                dur="0.3s"                fill="freeze"                 begin="startAnimation.begin" />      
                  <animate attributeName="d" 	               from="M5.9944458,3.20001221 L15,8 L15,8 L5.9944458,12.7999878 Z" 	               to="M10,0 L16,0 L16,16 L10,16 Z"                dur="0.3s"                fill="freeze"                 begin="reverseAnimation.begin" />    
                </path>       
                <!--  controls -->     
                <!-- these are on top of the visible icon. Their radius changes depending on which is active
                    Opacity is set to 0 so you can't see them-->     
                <circle cx="16" cy="16" r="16" fill-opacity="0">      
                  <animate dur="0.01s" id="startAnimation" attributeName="r" values="16; 0" fill="freeze" begin="click" />      
                  <animate dur="0.01s" attributeName="r" values="0; 16" fill="freeze" begin="reverseAnimation.end" />    
                </circle>    
                <circle cx="16" cy="16" r="0" fill-opacity="0">      
                  <animate dur="0.001s" id="reverseAnimation" attributeName="r" values="16; 0" fill="freeze" begin="click" />      
                  <animate dur="0.001s" attributeName="r" values="0; 16" begin="startAnimation.end"  fill="freeze"  />    
                </circle>  
              </svg>
            </button>        
            <button type="submit" name="right"  value="right"  class="button button4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  viewBox="0 0 24 24">
                <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/>
              </svg>
            </button>      
          </section>      
          <section>      
            <button  type="submit" name="backward"  value="backward"  class="button button5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/>
              </svg>
            </button>       
          </section>
        </form>     
      </div>
    </div>     
       <img src="logo.png">
      <br><br>  
  </body>
</html>
