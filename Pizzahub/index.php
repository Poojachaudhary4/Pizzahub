<!--
    Add your code to this file or create files as required.
    -->

<!-- This is the Homepage of our pizza ordering website and also the main page of source code.
The name of our website is PizzaHub 
Author : Pooja ,Hardik
Date : 12 October 2022
-->
<!-- <!DOCTYPE> declaration. The declaration is not an HTML tag.It is an "information" to the browser about what document type to expect.-->
<!DOCTYPE HTML>  
  <html>
      
<!-- The <head> element is a container for metadata (data about data) and is placed between the <html> tag and the <body> tag-->
      <head>
          <!-- Metadata is data about the HTML document. Metadata is not displayed. 
          Metadata typically define the document title, character set, styles, scripts, and other meta information.-->
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Pizzahub</title> <!-- This is the title of our webpage it can be viewed at the top of browser as tab name or as heading of a tab.-->
          <!-- The <link> tag defines the relationship between the current document and an external resource. -->
          <link href="../css/index.css" rel="stylesheet"/> 
      </head>
<!--The <body> tag defines the document's body.The <body> element contains all the contents of an HTML document, such as headings, paragraphs, images, lists, etc.-->
      <body>
<!--The <header> element represents a container for introductory content or a set of navigational links.-->
          <header>
<!--The <div> tag defines a division or a section in an HTML document.The <div> tag is used as a container for HTML elements - which is then styled with CSS-->
<!--We can also give multiple classes to a tag using class attribute. This given class name is used in css to modify the content.-->
              <div class="logo">
<!-- The <span> tag is an inline container used to mark up a part of a text, or a part of a document.-->
                  <h1 style="margin:0 0 0 10px;align-self:center;"> <span style="color:yellow">Pizza</span><span style="color:red">Hub</span></h1>
                  <!--The <h1> to <h6> tags are used to define HTML headings.<h1> tag has the largest default font size and it decreases continuously to <h6> tag.These font sizes can be changed if required in css.-->
                  <!-- The text must be inside the <span></span> tag and then a particular property ca be applies to a specified text. -->

                  <!--Image can be imported to a webpage using <img../> tag-->
                  <img src="images/pizza.svg" class="pizza_logo"/>    <!-- This image is located in a folder named images.-->
              </div>
              <!-- The <ul> tag defines an unordered (bulleted) list.-->
              <ul class="nav">
                  <!--The <a> tag defines a hyperlink, which is used to jump from one page to another.-->
                  <li><a href="index.php" >Home</a></li>
                  <li><a href="Form1.php" >Place Order</a></li>
                  <!--# can be used to simply remain on the current page It does not take the user anywhere. -->
                  <li><a href="#" >Login</a></li>
                  <li><a href="#" >Cart</a></li>
              </ul>
          </header>

          <!--The <main> tag specifies the main content of a document.-->
          <main>
              <!-- This is the main content of our website.-->
              <div class="About">
                  <!-- The <style> tag is used to define style information (CSS) for a document. It can also be used as an attribute.-->
                  <h2 style="padding:4px"><span style="color:yellow">Pizza</span><span style="color:red">Hub</span></h2>
                  <!-- The <p> tag defines a paragraph. The paragraph Written below is copied from Domino's Website : https://www.dominos.co.in/-->
                  <p >What’s better than having a crispy melty pizza, you ask?<br /> <!--The <br/> tag can be used to enter to next line.-->
                      Having that crispy and melty pizza in the comfort of your own home with the ones you love, we say.<br />
                      With Pizzahub it is always “Rishton ka time”. Whether it's a treat for your promotion, a kid topping his class or winning the heart of your wife who is too tired to cook after a long day at work! A cheesy slice of the best pizza is all one needs to put things into perspective and start any celebration. <br />
                      Plus, you do not even need to rush to the restaurant to have one now. A call, a few clicks on our website or a few touches on the mobile screen is all you have to do to have that tempting, light-on-the-pocket pizza at your doorstep.<br />

                      There is something for everyone here. The vegetarians, non-vegetarians, the sides’ lovers and also the ones who love to have something sweet by the time they reach the last bite of the last slice of pizza slice. </p>

                  <h2><span style="color:yellow">WHO W</span><span style="color:red">E ARE ?</span></h2>
                  There’s nothing cookie-cutter about Pizza Hut. Not our pizzas. Not our people. And definitely not the way we live life. Around here, we don’t settle for anything less than food we’re proud to serve. And we don’t just clock in. Not when we can also become our best, make friends, and have fun while we’re at it. We’re the pizza company that lives life unboxed.

                  We’re not for people who want to blend in: pushing boundaries is part of our heritage. We have more than 16,000 restaurants and 350,000 team members in more than 100 countries. Whether it’s the original Stuffed Crust or putting a pizza in outer space, we never stop driving ourselves to deliver hot pizzas, fast every time – anywhere you want to enjoy it.
                  </div>
          </main>
          <!--The <footer> tag defines a footer for a document or section.-->
          <footer>
              <div class="container">
                  <div>
                      <h4>Quick Links</h4>
                      <ul class="navf">
                          <li><a href="index.php" >Home</a></li>
                          <li><a href="Form1.php" >Place Order</a></li>
                          <li><a href="#" >Login</a></li>
                          <li><a href="#" >Cart</a></li>            
                      </ul>
                  </div>
                  <div>
                      <h4>Queries</h4>
                      <ul class="navf">
<!-- # is used to access to id names and in <a> tag ,# can be used to jump to a specific point on an internal or external page.-->
                          <li><a href="tandc.php#coupons" >Coupons/Deals Conditions </a></li>
                          <li><a href="tandc.php#cancel" >Cancellation</a></li>            
                          <li><a href="tandc.php#refund" >Refunds</a></li>
                          <li><a href="tandc.php#free" >30 Minutes or Free</a></li>
                      </ul>
                  </div>
                  <div class="contact"><h4>Contact Us :</h4><br />
                      <ul class="navf">
                          <li>Email : pizzahub@yahoo.com<br/></li>
                          <li>Telephone : 01698-202035</li>
                      </ul>
                  </div>
                  <!-- The <textarea> tag defines a multi-line text input control.The <textarea> element is often used in a form, to collect user inputs like comments or reviews.The size of a text area is specified by the cols and rows attributes (or with CSS).-->
                  <label for="review" style="display:inline"><h4>Review :</h4> </label>
                  <textarea id="review" name="review" rows="7" cols="40" placeholder="Type Something..." ></textarea>
              </div>
              <p>
                  <br />
                  <small>
                      © Pizzahub Pvt.Ltd. Since 2003  |  <a href="tandc.php" rel="internal" title="Terms & Conditions Page">Terms And Conditions  </a>| Privcay Policy
                  </small>
                <label for="Submit" style="display:inline">
              </p>
          </footer>
    
  </body>
</html>
