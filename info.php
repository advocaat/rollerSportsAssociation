<?php include("dbconnect.php"); 
    $debugOn = true;    
    $sql = "insert into user (user_fname, user_lname, user_email, user_password) values ('jim', 'jam', 'jom', 'jum')"; 
        if($dbh->exec($sql)){
            echo "inserted name";
        }
        else{
            echo "no workies";
        }
?>
<!doctype html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <title>FNQ Rollersporting</title>
        <link href='styles.css' rel='stylesheet' type='text/css'>
   
    </head>
    <body>

        <header>
            <div id='title'>
            <h1>FNQ Rollersport Association</h1>
            </div>
            <div id='tag'>
                <p>Wheels on Reels</p>
            </div>
        </header>
        <div id='headBuffer'>
        </div>
           <footer>
        </footer>
        
        <div id='mainBody'>
            <?php include("login.php"); ?>

                      <div id='sideNav' class='col'>
                <ul>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='info.php'>About</a></li>
                    <li><a href='peeps.php'>People</a></li>
                    <li><a href='media.php'>Media</a></li>
                    <li><a href='future.php'>Future</a></li>
                    <li><a href='contact.php'>Contact</a></li>
                </ul>
          
            
            </div>
   <div class='row'>
            <div id='topFrame' clas='col'>
                <h2><img class='headImage' width='120' height='120' src="images/filler.png" alt="some site image">Welcome</h2>
                <p>to the Far North Queensland Rollersports Association. We have recently become an incorporated association with the aim of bringing together like minded individuals in support of facilitating our prefered pastimes by pushing for new infastructure for the Far North Queensland community.     </p>   
            
            
            </div>
         
             
            <div id='midLeft' class='col'>
                <h3>First Block</h3>        
                <p>blahty blahty bahty this is some content for the site<img class='firstImage'  width='120' height='120'  src='images/filler.png' alt='some same image'></p>                
                
            </div>
            <div id='midRight' class='col'>
                <h3>Second Block</h3>
                <p>This is some more content probably smething about the site or some shit like that</p>
                
                </div>
            </div>
                  <div id="mainFoot">
                <ul>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='info.php'>About</a></li>
                    <li><a href='peeps.php'>People</a></li>
                    <li><a href='media.php'>Media</a></li>
                    <li><a href='future.php'>Future</a></li>
                    <li><a href='contact.php'>Contact</a></li>
                </ul>
          
                
            
            </div>
        </div>
     
             <script src='pageCont.js'></script>
    </body>
</html>