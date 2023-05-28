<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>PizzaHub | Order</title>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/Form.css" rel="stylesheet">
    </head>
    <!--PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.PHP scripts are executed on the server and is free to use and download. The default file extension for PHP files is ".php".
    A PHP script starts with < ?php and ends with ?>-->
<html>
    <body>
        <header>
            <ul class="nav">
                <li><a href="index.html" >Home</a></li>
                <li><a href="Form.html" >Place Order</a></li>
                <li><a href="#" >Login</a></li>
                <li><a href="#" >Cart</a></li>
            </ul>
        </header>
        <main>
        
        <div class="logo">
            <h1 > <span style="color:yellow">Pizza</span><span style="color:red">Hub</span></h1>
              <img src="images/pizza.svg" class="pizza_logo"/>
          </div>
        <?php 
        
            /* In PHP, a variable starts with the $ sign, followed by the name of the variable.We do not need to define the type of variable.*/
            /*Value can be accessed from the Form.html file and is used here to declare a messsage to the user.*/
            $fname=$_GET["fname"];
            $lname=$_GET['lname'];    
            $mobile=$_GET['mobile'];
            $email=$_GET['email'];
            $address=$_GET['Address'];
            
            $crust=$_GET['p'];
            $qty=$_GET['quantity'];
            $Pizza=$_GET['size'];
            $mode=$_GET['dmode'];
            $price=0;
            echo("HELL ".$crust.".<br />");
            echo("HELLO ".$mode.".<br />");
            echo("HELLO ".$qty.".<br />");
            if($crust=="Deep"){
                $price= $qty*22;   
            }
  
            else if ($crust=="ust"){
                $price=$qty*18;
            }
            else if($crust=="Whole"){
                $price=$qty*20;
            }
            else if($crust=="Regular"){
                $price=$qty*17;
            }
            
            if($Pizza=="Small Pizza"){
                $price=$qty*8;
            }
            else if($Pizza=="Medium Pizza"){
                $price=$qty*10.5;
            }
            else if($Pizza=="Large Pizza"){
                $price=$qty*15;
            }
                $price=$price+ ($price/18)*100;
            
            if ($mode=="hd"){
                $price= $qty+7;
            }
                
            echo "Price is ".$price.".<br/>";
                
            
              echo("Thanks for ordering. Please pay ".$price." at checkout.<br>");



            /*
            In place of GET method we can also use POST method ,both will function the same way.

            echo function can be used to print any information.Two or more statements can be concatenated using '.' .
            */
            echo "Thank You for ordering pizza from PizzaHub ".$fname.".<br/><br/>Our Delivery boy will contact you on ".$mobile.".<br/> ";
            echo "<br/>A confirmation email has been sent to your provided email : ".$email.".<br/>";
            echo "<br/>Your pizza will be delivered shortly on the address: ".$address.".<br/>";
        ?>
        </main>
        <footer>
            <p>
                  <br />
                  <small>
                      © Pizzahub Pvt.Ltd. Since 2003  |  <a href="tandc.html" rel="internal" title="Terms & Conditions Page">Terms And Conditions  </a>| Privcay Policy
                  </small>
              </p>
        </footer>
    </body>
</html>


