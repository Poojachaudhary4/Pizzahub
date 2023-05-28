<!DOCTYPE html>
<html>
    <head>
        <title>PizzaHub | Order</title>
        <link href="css/Form.css" rel="stylesheet">
    </head>        
    <body>    
        
        <header>
            <ul class="nav">
                <li><a href="index.php" >Home</a></li>
                <li><a href="Form1.php" >Place Order</a></li>
                <li><a href="#" >Login</a></li>
                <li><a href="#" >Cart</a></li>
            </ul>
        </header>
        
        <main>
        
            <form id="pizza_order_info" action="Formcal.php" method="get">
                
                <div class="logo">
                    <h1 > <span style="color:yellow">Pizza</span><span style="color:red">Hub</span></h1>
                    <img src="images/pizza.svg" class="pizza_logo"/>
                </div>
                
                <div><!--Taking First name as input from customer-->
                    <label for="fname">First Name : </label>
                    <input type="text" id="fname" name="fname" size="30" maxlength="50" placeholder="Type your first name">
                </div><br />
                
                <div><!--Taking last name as input from customer-->
                    <label for="lname">Last Name : </label>
                    <input type="text" id="lname" name="lname" size="30" maxlength="50" placeholder="Type your last name">
                </div><br />
                
                <div><!--Taking Mobili Number as input from customer-->
                    <label for="mobile">Mobile Number :</label>
                    <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required/>
                </div><br />
                
                <div><!--Taking Email as input from customer-->
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" placeholder="Email" required/>
                </div><br />
                
                <div>
                    <div><!--Taking Address as input from customer-->
                        <label for="address">Address :</label>
                        <textarea type="text" id="Address" name="Address"  rows="3" cols="30" placeholder="Address" required/></textarea>
                    </div><br />
                    
                    <!--The <select> element is used to create a drop-down list.The <select> element is most often used in a form, to collect user input.-->
                    <label for="Select pizza" >Select pizza size : </label>
                <!--The name attribute is needed to reference the form data after the form is submitted -->
                    <select id="size" name="size" > 
                        <!--The <option> tags inside the <select> element define the available options in the drop-down list.-->
                        <option>--Select--</option>
                        <option value="s">Small</option>    <!--These are types of available pizza sizes-->
                        <option value="m">Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">Extra-large</option>
                    </select>
                </div>
                <div>
                    <label for="shape">Shape :</label>    <!--Available Pizza Shapes-->
                    <select id="shape" name="Shape">
                        <option>--Choose--</option>
                        <option value="R">Round</option>
                        <option value="S">Square</option>
                    </select>
                </div>
                <br/>
              <div>
                    <label for="quantity">Number of Pizza's : </label>  <!--Asking Customer about Number of pizza -->
                    <input type="number" id="quantity" name="quantity" Size="3" maxlength="5" placeholder="How many pizza's you want" required/>
                </div><br />
               
            
                <div>    <!--The type of pizza that is ordered Veggie or Non-Veg or Combination-->
                    <label for="type" >Type of pizza you want : </label>
                    <select  name="Pizza">    <!--Again using select tag-->
                        <option>--Choose--</option>
                        <option value="V">Veggie</option> 
                        <option value="NV">Non-Veg.</option>
                        <option value="C">Combination</option>
                    </select>
                </div><br />
            <!--The <fieldset> tag is used to group related elements in a form.The <fieldset> tag draws a box around the related elements.-->
              <fieldset>
                  <!--The <legend> tag defines a caption for the <fieldset> element.-->
                <legend >Crust Type's</legend> 
                <div>
                  <!--The <input> tag specifies an input field where the user can enter data.The <input> element is the most important form element.-->
                    <!--The <input type="radio"> defines a radio button.
                        Radio buttons are normally presented in radio groups (a collection of radio buttons describing a set of related options). Only one radio button in a group can be selected at the same time.
                    -->
                    <label for="label">Crust :</label>
                    <select  name="p" required>
                        <option > --Select--</option>
                      <option name="p" id="Deep">Deep Dish Pizza</option>
                      <option name="p" id="Crust">Thin Crust Pizza</option>
                      <option name="p" id="Whole">Whole Grain</option>
                      <option name="p" id="Regular">Regular</option>
                        </select>
                </div>
              </fieldset>
              <fieldset>
                <legend > Toppings</legend>
                <div>
                    <!--The <input type="checkbox"> defines a checkbox.
                    The checkbox is shown as a square box that is ticked (checked) when activated.
                    Checkboxes are used to let a user select one or more options of a limited number of choices.-->
                  <label for="veggie toppings">VEG: </label>            
                  <label for="Green Pepper">Green-Pepper</label>
                    <!-- Veg Toppings to be selected by User-->
                    <input type="checkbox" name="vegtopping" id="Green-Pepper" value="Green-Pepper"/> 
                  <label for="Tomatoes">Tomatoes</label>
                      <input type="checkbox" name="vegtopping" id="tomatoes" value="tomatoes" />
                  <label for="Mushroom">Mushroom</label>
                      <input type="checkbox" name="vegtopping" id="Mushroom" value="Mushroom" />
                  <label for="Onion">Onion</label>
                      <input type="checkbox" name="vegtopping" id="Onion" value="Onion" />
              </div> 
              </fieldset>
              <fieldset>
                  <div>
                      <!-- Non-Veg Toppings to be selected by User-->
                  <label for="non-veg toppings">NON-VEG: </label>
                  <label for="Pepperoni">Pepperoni</label>
                      <input type="checkbox" name="nonvegtopping" id="Pepperoni" value="Pepperoni" />
                  <label for="Italian Sausage">Italian Sausage</label>
                      <input type="checkbox" name="nonvegtopping" id="Italian Sausage" value="Italian Sausage" />
                  <label for="Ham">Ham</label>
                      <input type="checkbox" name="nonvegtopping" id="Ham" value="Ham" />
                  <label for="Bacon">Bacon</label>
                      <input type="checkbox" name="nonvegtopping" id="Bacon" value="Bacon" />
              </div>
              </fieldset>
          <fieldset>
            <legend id="dmode">Delivery-mode</legend>
            <div >
                <!--Delivery mode -->
              <label for="delivery-mode" >Mode of delivery: </label>
              <label for="dmode">Pick-up</label>
              <input type="radio" name="dmode" id="pickup" value="Pick-up" required/><br/>
              <label for="home-delivery">Home-Delivery</label>
              <input type="radio" name="dmode" id="hd" value="home-Delivery" />            
            </div>
          </fieldset>
          <fieldset>
              <!--The <input type="submit"> defines a submit button which submits all form values to a form-handler.-->
            
              <input type="submit" value="Submit"/>
              <!--The <input type="reset"> defines a reset button which resets all form values.-->
              <input type="reset" value="Reset"/>
          </fieldset>
        </form>
    </main>
      <footer><!-- Footer -->
            <p>
                <small><sup>©</sup>PizzaHub Inc. All rights reserved</small>
            </p>
        </footer>
    </body>
</html>