<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Wrap Order Form</title>
    <style>
      .wrapTypes {
        min-width: 100px;
        min-height: 100px;
        border: solid 5px gray;
      }
    </style>
  </head>
  <body>
    <div class="content">
      <h1>Thursday Wraps/8th grade fundraiser</h1>
      <form>
        Name on Order: 
        <input type="text" name="orderName"><br>
        <div class="wrapTypes"><h2>Wraps Available</h2>
          <div class="wrap"><b>Garden Vegetable Wrap</b><br>spinach, alfalfa, red onion, pepper, cucumber and carrot</div>
          <div class="wrap"><b>California Veggie Wrap</b><br>avocado, lettuce, red onion, pepper, cucumber and carrot</div>
          <div class="wrap"><b>Tuna Wrap</b><br>tuna, lettuce, red onion, pepper, cucumber and carrot</div>
        </div>
        Which wrap would you like?<br>
        <input type="radio" name="orderType" value="Garden Vegetable Wrap">($3.50) Garden Vegetable Wrap<br>
        <input type="radio" name="orderType" value="California Veggie Wrap">($3.50) California Veggie Wrap<br>
        <input type="radio" name="orderType" value="Tuna Wrap">($4.50) Tuna Wrap<br>
        <input type="radio" name="orderType" value="prompt('Please list what you want in your wrap')">Other
      </form>
    </div>
  </body>
</html>