<?php
session_start();
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="image/icon.png" type="image/x-icon" />
  <title>Cafe Ratu - Menu</title>
</head>

<body style="padding-top: 80px">
  <header>
    <div class="navbar">
      <ul>
        <li class="nav-icon"><img src="image/icon.png" alt="" /></li>
        <li class="links"><a href="index.php#home">Home</a></li>
        <li class="links"><a href="index.php#about">About</a></li>
        <li class="links"><a href="#special-offer">Specials</a></li>
        <li class="links dropdown">
          <a href="#">Menu</a>
          <div class="dropdown-content">
            <a href="#foods">Foods</a>
            <a href="#drinks">Drinks</a>
          </div>
        </li>
        <li class="links"><a href="index.html#contacts">Contact Us</a></li>
        <li class="cart-icon"><a href="#"><img src="image/cart.png" alt="Cart" /></a></li>
      </ul>
    </div>
  </header>
  <section id="special-offer" class="menu-section">
    <div class="special-content">
      <h2>Special Offer</h2>
      <div class="menu-items">
        <div class="menu-item">
          <img src="image/special.jpg" alt="Special Offer">
          <h3>Chef's Daily Special</h3>
          <p>Our chef's special dish of the day, featuring a unique creation using the freshest ingredients.</p>
          <span>$14</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
      </div>
    </div>
  </section>
  <section id="foods" class="menu-section">
    <div class="food-content">
      <h2>Foods</h2>
      <div class="menu-items">

        <div class="menu-item">
          <img src="image/food1.jpg" alt="Food 1">
          <h3>Grilled Chicken with Roasted Vegetables</h3>
          <p>Grilled chicken breast served with a medley of roasted vegetables.</p>
          <span>$12</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
        <div class="menu-item">
          <img src="image/food2.jpg" alt="Food 2">
          <h3>Spaghetti Bolognese</h3>
          <p>Classic Italian pasta dish with a rich meat sauce.</p>
          <span>$10</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
        <div class="menu-item">
          <img src="image/food3.jpg" alt="Food 3">
          <h3>Margherita Pizza</h3>
          <p>Traditional pizza topped with tomato sauce, mozzarella cheese, and fresh basil.</p>
          <span>$9</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
        <div class="menu-item">
          <img src="image/food4.jpg" alt="Food 4">
          <h3>Caesar Salad</h3>
          <p>Crisp romaine lettuce tossed in Caesar dressing with Parmesan cheese and croutons.</p>
          <span>$8</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
        <div class="menu-item">
          <img src="image/food5.jpg" alt="Food 5">
          <h3>Beef Burger</h3>
          <p>Juicy beef patty served on a toasted bun with lettuce, tomato, onion, and pickles.</p>
          <span>$11</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
      </div>
    </div>
  </section>
  <section id="drinks" class="menu-section">
    <div class="drink-content">
      <h2>Drinks</h2>
      <div class="menu-items">
        <div class="menu-item">
          <img src="image/drink1.jpg" alt="Drink 1">
          <h3>Iced Caramel Macchiato</h3>
          <p>A refreshing blend of espresso, milk, and caramel syrup served over ice.</p>
          <span>$5</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
        <div class="menu-item">
          <img src="image/drink2.jpg" alt="Drink 2">
          <h3>Strawberry Smoothie</h3>
          <p>Fresh strawberries blended with yogurt and a touch of honey.</p>
          <span>$6</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
        <div class="menu-item">
          <img src="image/drink3.jpg" alt="Drink 3">
          <h3>Mint Lemonade</h3>
          <p>A zesty and refreshing lemonade infused with fresh mint leaves.</p>
          <span>$4</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
        <div class="menu-item">
          <img src="image/drink4.jpg" alt="Drink 4">
          <h3>Matcha Latte</h3>
          <p> A creamy and frothy green tea latte made with matcha powder and steamed milk.</p>
          <span>$5</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
        <div class="menu-item">
          <img src="image/drink5.jpg" alt="Drink 5">
          <h3>Tropical Fruit Punch</h3>
          <p> A delightful combination of tropical fruits and juices.</p>
          <span>$4</span>
          <button class="order-btn" onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Order</button>
        </div>
      </div>
    </div>
  </section>
  <div id="cart-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Your Cart</h2>
      <table>
        <thead>
          <tr>
            <th>Item</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($_SESSION['cart'])) {
            $totalPrice = 0;
            foreach ($_SESSION['cart'] as $item) {
              echo "<tr>";
              echo "<td>" . $item['name'] . "</td>";
              echo "<td>" . $item['price'] . "</td>";
              echo "</tr>";
              $totalPrice += $item['price'];
            }
            echo "<tr>";
            echo "<td><strong>Total</strong></td>";
            echo "<td><strong>$" . $totalPrice . "</strong></td>";
            echo "</tr>";
          }
          ?>
        </tbody>

      </table>
    </div>
  </div>
  <script>
    var cartModal = document.getElementById("cart-modal");
    var cartIcon = document.querySelector(".cart-icon a");
    var closeModal = document.querySelector(".modal .close");

    cartIcon.addEventListener("click", function(event) {
      event.preventDefault();
      cartModal.style.display = "block";
    });

    closeModal.addEventListener("click", function() {
      cartModal.style.display = "none";
    });
    window.addEventListener("click", function(event) {
      if (event.target == cartModal) {
        cartModal.style.display = "none";
      }
    });
  </script>
</body>

</html>