<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" content="width=device-width, initial-scale=1">
  <title>EMA Content</title>
  
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/default.css">  
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
  <script src="js/ema.js" type="text/javascript"></script>
  <script>
    function swapStyleSheet(sheet){
      document.getElementById('pagestyle').setAttribute('href', sheet);
    }
  </script>
</head>

<body>
  <header>
    <nav>
      <h2>EMA CATERING</h2>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <div class="button-block">
      <button class="cssbutton" onclick="swapStyleSheet('css/blue.css')">Blue</button>
      <button class="cssbutton" onclick="swapStyleSheet('css/red.css')">Red</button>
      <button class="cssbutton" onclick="swapStyleSheet('css/default.css')">Default</button>
    </div>
  </header>
  <section id="about">
    <h1>About</h1>
    <h2>Our Story</h2>
    <p>EMA Enterprises, based in the Kalamazoo, Michigan, is owned and operated by Mike Leeuw. EMA has three sectionisions; restaurants, catering, and concessions. Currently, EMA owns and operates eight restaurants. EMA also operates a catering company that caters a wide range of events serving 4 to 40,000 people. The concession sector of the company includes Western Michigan University, the Kalamazoo Expo, and the Lansing Airport. Within the Lansing Airport the company franchises a Biggby Coffee.
      <br>Mike Leeuw began the company in 2006 with one restaurant, and has continued to grow the company into what EMA is today. All three children have been heavily involved in the growing of the company, and continue to work for EMA when they return home from their respective locations around the country.</p>
  </section>
  <section id="menu">
    <header>
      <h1>Menu</h1>
      <iframe src="print.php" style="display:none" name="frame"></iframe>
      <a id="menu-print-button" onclick="frames['frame'].print()" value="menu-print" class="menu-print"><i class="fa fa-print"></i> Click Here to Print</a>
    </header>
    <div class="printable">
      <h2>Ordering Information</h2>
      <div class="item">
        <h3>Food/Beverage</h3>
        <p>Food and beverage are available in inpidual and group servings. Catering orders come with all necessary plates, cups, utensils, napkins, serving utensils and condiments.</p>
      </div>
      <div class="item">
        <h3>Events with Alcoholic Beverages</h3>
        <p>EMA Catering is only permitted to sell wine and beer off premises. Any alcohol purchases by the customer cannot be returned. EMA Catering will supply a bartender at $20 per hour charge. 1 bartender 100 guests is required.</p>
      </div>
      <div class="item">
        <h3>Event Services</h3>
        <p>EMA Catering can provide you with four types of services. Pick up service at any restaurant location Drop off services, includes delivery, setup, and service staff for your event, service charge 18%. Plated Dinners with full service wait staff add $5 per person. All selections subject to the service charge and tax. Delivery
          <ol>
            <li>There is no minimum delivery fee.</li>
            <li>There is a 15% service charge on all delivery orders and applicable Michigan sales tax.</li>
            <li>All orders puchased outside a 30 mile radius will be assessed additional fee.</li>
          </ol>
        </p>
      </div>
      <div class="item">
        <h3>Cancellations</h3>
        <p>All Cancellations within 24 hours are subject to a 100% charge.</p>
        <h3>Payment</h3>
        <p>EMA Catering accepts Visa, Mastercard, American Express, and Discover.</p>
      </div>
    </div>
    <div class="printable">
      <h2>Early Risers</h2>
      <div class="item">
        <h3>Continental Breakfast</h3>
        <h4>$6.50/person</h4>
        <p>Includes muffins, pastries, juice, and Water Street Coffee
          <br>
          <br>*fresh fruit, yogurt, and granola available for an additional charge.</p>
      </div>
      <div class="item">
        <h3>Breakfast Sandwich or Wrap</h3>
        <h4>$9.50/person</h4>
        <p>Homemade fresh English muffin or tortilla with egg, sausage and cheese.</p>
      </div>
      <div class="item">
        <h3>Our Famous Biscuits and Gravy</h3>
        <h4>$10.50/person</h4>
        <p>Hot biscuits served with our homemade gravy.</p>
      </div>
      <div class="item">
        <h3>Oatmeal or Yogurt Bar</h3>
        <h4>$9.50/person</h4>
        <p>Your choice of build-your-own oatmeal or yogurt with toppings including fresh fruit, granola, brown sugar and more.</p>
      </div>
      <div class="item">
        <h3>Classic Skillet</h3>
        <h4>$10/person</h4>
        <p>Traditional scrambler complete with eggs, hashbrowns, green peppers, and onions, all smothered with melted cheddar cheese.</p>
      </div>
      <div class="item">
        <h3>Breakfast Casserole</h3>
        <h4>$10.75/person</h4>
        <p>EMA's breakfast casserole. Eggs, cheese, bacon, seasoning, and baked to a golden brown. Also available vegetarian.</p>
      </div>
      <div class="item">
        <h3>Omlette Bar</h3>
        <h4>$10.75/person</h4>
        <p>Variety of meat, cheese, and vegetable toppings, cooked to order (18% service charge).</p>
      </div>
      <div class="item">
        <h3>Sides</h3>
        <h4>$2/person each</h4>
        <h5 class="header">Meats</h5>
        <ul>
          <li>Bacon</li>
          <li>Sausage Patties</li>
          <li>Sausage Links</li>
          <li>Carved Ham</li>
          <li>Chicken Links</li>
        </ul>
        <h5 class="header">Others</h5>
        <ul>
          <li>Eggs</li>
          <li>Hashbrowns</li>
          <li>Bagels</li>
          <li>Muffins</li>
          <li>Home Fries</li>
        </ul>
      </div>
    </div>
    <div class="printable">
      <h2>Lunch Time</h2>
      <div class="item">
        <h3>Portable Salad Bar</h3>
        <h4>$9.50/person</h4>
        <p><em>15 person minimum • For smaller groups please ask.</em>
          <br>
          <br>Brought to your business. Includes fresh salad items, hot soup or assortment of wraps or sandwiches.</p>
      </div>
      <div class="item">
        <h3>Taco Bar</h3>
        <h4>$10.50/person</h4>
        <p>Your choice of pulled pork, pulled chicken, taco meat, or chicken strips. Sides: hard or soft shell tortillas, salsa, sour cream, shredded cheese, onions, refried beans, lettuce, and tomato.</p>
      </div>
      <div class="item">
        <h3>Hot Dog Bar</h3>
        <h4>$10.50/person</h4>
        <p>We believe we have the best hot dogs in Kalamazoo!
          <br>
          <br>A quarter pound all beef hot dog on a special grilled hot dog bun with chili, cheese, ketchup, mustard, relish, and onion.
          <br>
          <br>Also comes with chips and two side dishes.
          <br>
          <br><strong>We grill our buns on site!</strong></p>
      </div>
      <div class="item">
        <h3>Baked Potato Bar with Salad</h3>
        <h4>$10.50/person</h4>
        <p>Brought to your business. Includes butter, sour cream, bacon, chili &amp; broccoli, fresh salad items.</p>
      </div>
      <div class="item">
        <h3>Deli Bar</h3>
        <h4>$9.50/person</h4>
        <p>Comes with turkey, ham, roast beef and chicken salad. American and Swiss cheese. Tomato, lettuce, onions, pickles, sliced green peppers, mayo, spicy and yellow mustard.</p>
      </div>
      <div class="item">
        <h3>Lunch in a Basket</h3>
        <h4>$8.50/person</h4>
        <p>Wraps or sandwiches are arranged in an attractive basket or tray with chips and a side dish.</p>
      </div>
      <div class="item">
        <h3>Signature Soups</h3>
        <h4>$2.75/person</h4>
        <p>Chili, Broccoli Cheese, Hot Pepper Crab, Chicken Noodle, and Wisconsin Cheese Soup.
          <br>
          <br><em>Special soup requests require a 48 hour notice</em></p>
      </div>
      <div class="item">
        <h3>Executive Black Box Lunch</h3>
        <h4>$7.75/person</h4>
        <p>Your choice of turkey, ham, roast beef, egg salad, tuna, apple chicken salad, chicken strips, or chicken salad with lettuce, tomato, mustard and mayo as a sandwich or wrap. Wraps include shredded cheese and ranch.
          <br>
          <br>OR
          <br>
          <br>A veggie wrap with assorted delicious vegetables. Add guacamole for $0.50.
          <br>
          <br>* To complete your lunch, you will find chips, a side dish, and dessert.</p>
      </div>
      <div class="item">
        <h3>Kid's Meals</h3>
        <h4>$4.99/person</h4>
        <p>Mac and cheese, hot dogs, peanut butter and jelly, 1/4 lb hamburger or Dino Nuggets.
          <br>
          <br>Includes chips, a cookie, and drink.
          <br>
          <br>Add fries for $1.00.</p>
      </div>
    </div>
    <div class="printable">
      <h2>Create-A-Meal</h2>
      <div class="description">
        <p>Create a customized dinner menu with your own personal selections from the list below. All meals include your choice of 3 of the following side dishes and a variety of assorted dinner rolls.</p>
        <p>
          <ul>
            <li>1 Entree Meal $12/person</li>
            <li>1 Entree Meal $14/person</li>
            <li>3 Entree Meal $16/person</li>
          </ul>
        </p>
      </div>
      <div class="item longlist">
        <h3>Entrees</h3>
        <p>St. Louis Style BBQ Ribs (Market Price) <i class="fa fa-cutlery"></i></p>
        <p>Grilled Chicken Breast</p>
        <p>BBQ Pulled Pork</p>
        <p>Apple Bourbon Chicken</p>
        <p>Carved Pork Loin</p>
        <p>Chicken Monterey</p>
        <p>Carved Ham</p>
        <p>BBQ Chicken Breast</p>
        <p>Carved Turkey</p>
        <p>BBQ Pulled Chicken</p>
        <p>Carved Roast Beef</p>
        <p>Fried Chicken</p>
        <p>Beef Tenderloin (Market Price)</p>
        <p>Italian Lasagna</p>
        <p>Signature Burger</p>
        <p>Spinach Lasagna</p>
        <p>Prime Rib (Market Price)</p>
        <p>Cheese Lasagna</p>
        <p>New York Strip Steak</p>
        <p>Stuffed Shells</p>
        <p>Filet (Market Price)</p>
        <p>Eggplant Parmesan</p>
        <p>Grilled Salmon</p>
        <p>Portabella Mushroom Ravioli</p>
        <p>Bourbon Salmon</p>
        <p>White Cheddar Mac</p>
      </div>
      <div class="item longlist">
        <h3>Side Dishes</h3>
        <p>Signature Items</p>
        <p>Tossed Salad </p>
        <p>Roasted Vegetables</p>
        <p>Caesar Salad </p>
        <p>Apple Broccoli Salad</p>
        <p>Salad (spinach-seasonal)</p>
        <p>Red Skin Potatoes /or Mashed</p>
        <p>Pasta Salad </p>
        <p>Green Beans</p>
        <p>Cole Slaw</p>
        <p>Macaroni-n-Cheese</p>
        <p>Baked Potatoes</p>
        <p>Rice Pilaf</p>
        <p>Green Bean Medley</p>
        <p>Pulled Pork Baked Beans</p>
        <p>Baby Carrots</p>
        <p>Potato Salad</p>
        <p>Mashed Potatoes and Gravy</p>
        <p>Macaroni Salad</p>
        <p>German Potato Salad</p>
      </div>
    </div>
  </section>
  <section id="contact">
    <header>
      <h1>Contact</h1>
    </header>
    <h2>Send Us a Message</h2>
    <form class="email" action="email.php" method="post">
      <label>Name
        <input id="name" type="text" name="name" required="">
      </label>
      <br>
      <label>Email
        <input id="email" type="email" name="email" required="">
      </label>
      <br>
      <label>Phone Number
        <input id="phone" type="phone" name="phone" required="" pattern="^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$">
      </label>
      <br>
      <label>Message
        <input id="message" type="textarea" name="message" required="">
      </label>
      <br>
      <button type="submit" value="Submit">Submit</button>
    </form>
    <h2>Get in Touch</h2>
    <p>4010 Gull rd. Kalamazoo, MI</p>
    <p>
      <a href="tel:2693441415"><i class="fa fa-phone"></i> (269) 344-1415</a>
    </p>
  </section>
  <footer>Created and Designed by KzooToYou &copy;
    <script>
    document.write(new Date().getFullYear())
    </script>
  </footer>
</body>

</html>
