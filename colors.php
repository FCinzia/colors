<?php
  if (isset($_GET['source'])) {
highlight_file($_SERVER['SCRIPT_FILENAME']);
exit;
  }
?>
<html>
  <head>
    <title> colors </title>
  </head>
<body>

<form method="GET" action="assignment6.php">
 <p>background color:  <input type="text" name="background"></p>
 <p>foreground color: <input type="text" name="foreground"></p>
 <p><input type="submit"></p>
 </form>
<?php

 $foreground='black';
 $background='white'; 
   
 $background = $_REQUEST['background'];
 $foreground = $_REQUEST['foreground'];

    
 if ($background != $foreground){
    
   switch($background): 
     case "pink":
       $background = 'pink';
       break;
     case 'orange':
       $background = 'orange';
       break;
     case 'blue':
       $background = 'blue';
       break;
     case 'green':
       $background = 'green';
       break;
     case 'purple':
       $background = ' purple';
       break;
     case 'aqua':
       $background = 'aqua';
       break;
     default:
       $background = 'white';
   endswitch;
  
   switch($foreground): 
     case 'pink':
       $foreground = 'pink';
       break;
     case 'orange':
       $foreground = 'orange';
       break;
     case 'blue':
       $foreground = 'blue';
       break;
     case 'green':
       $foreground = 'green';
       break;
     case 'purple':
       $foreground = ' purple';
       break;
     case 'aqua':
       $foreground = 'aqua';
       break;
     default:
       $foreground = 'black';
   endswitch;
 
  echo ('
    <body bgcolor=" '.$background.' " text=" '. $foreground.' ">
  ');



 }
 else {
   echo "ERROR: Text and background cannot have the same color!";
 }

  
   
  

?>
</body>
</html>