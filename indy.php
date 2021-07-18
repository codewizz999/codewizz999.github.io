<!DOCTYPE html>                             
<html>                                      
<head>                                      
<link rel="stylesheet" href="screen.css" type="text/css" />  
<link rel="stylesheet" type="text/css" href="css/android.css" media="only screen and (max-width: 600px)" />  
                       <link rel="stylesheet" type="text/css" href="desktop.css" media="screen and (min-width: 601px)" />  
                      <!--[if IE]>                               
<link rel="stylesheet" type="text/css" href="desktop.css" media="all" />  
              <![endif]-->     
                            <meta name="viewport" content="user-scalable=no, width=device-width" />  
               <title>Codewizz999desk</title> 
</head>                                     
<body>
<div id="header" style="position:fixed;background-color:white; top:0;">                 
<h2 onclick="codewizzhref()" style="text-align:center;">Codewizz999.desk</h2>                                                       
<div id="nav" style="border-bottom:2px solid black;background-color:white;">            
<ul class="navl">                           
<li><span type="button" style="font-size:20px;cursor:pointer" onclick="opennav()" >
<strong>Menu</strong></span></li>                
<li><input type="button" value="Apps-Games" onclick="gameshref()"></li>
             <li><input type="button" value="Dash"onclick="dashhref()"></li>
             <li><input type="button" value="FullStack"onclick="fullsackhref()"></li>
             <li><input type="button" value="Profile" onclick="profilehref()"></li>                  
</ul>                                   
</div>
</div>
<form action="#" method="post" enctype="multipart/form-data">   
                          Type Folder Name:<input type="text" name="foldername" /><br/><br/>   
                   Select Folder to Upload: <input type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" moxdirectory="" /><
br/><br/>                                     <input type="Submit" value="Upload" 
name="upload" />                                    
</form>
  <?php include '/up.php';?>                 
<script src="js/main.js"></script>          
</body>                                     
</html>
