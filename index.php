<?php
session_start();
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $host = 'localhost';
  $dbname = 'id20940121_caferatu';
  $username = 'id20940121_adminratu';
  $password = 'bu#6Y4dMK}bYvJ!x';
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $stmt = $pdo->prepare("INSERT INTO message (name, email, message) VALUES (?, ?, ?)");
  $stmt->execute([$name, $email, $message]);
  if ($stmt->rowCount() > 0) {
    $message = 'Message is sent, Thank you';
  } else {
    $message = 'Failed to send the message. Please try again.';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="image/icon.png" type="image/x-icon" />
  <title>Cafe Ratu</title>
</head>

<body style="padding-top: 80px">
  <header>
    <div class="navbar">
      <ul>
        <li class="nav-icon"><img src="image/icon.png" alt="" /></li>
        <li class="links"><a href="#home" class="active">Home</a></li>
        <li class="links"><a href="#about" class="active">About</a></li>
        <li class="links"><a href="menu.php#special-offer" class="active">Specials</a></li>
        <li class="links dropdown">
          <a href="menu.php">Menu</a>
          <div class="dropdown-content">
            <a href="menu.php#foods">Foods</a>
            <a href="menu.php#drinks">Drinks</a>
          </div>
        </li>
        <li class="links"><a href="#contacts" class="active">Contact Us</a></li>
        <li class="cart-icon"><a href=""><img src="image/cart.png" alt="Cart" /></a></li>
      </ul>
    </div>
  </header>
  <section id="home">
    <div class="content">
      <p class="paragraph">Welcome to Cafe Ratu! We offer a cozy and modern dining experience with delicious food and drinks. Join us for a taste sensation!</p>
    </div>
  </section>
  <div class="content-1" id="about">
    <img src="image/image1.jpg" alt="">
    <div class="content-text">
      <h2>About Cafe Ratu</h2>
      <p>Welcome to Cafe Ratu! We offer a cozy and modern dining experience with delicious food and drinks. Join us for a taste sensation!</p>
    </div>
  </div>
  <section id="contacts" class="contact-section">
    <div class="contact-content">
      <h2>Contact Us</h2>
      <div class="contact-info">
        <div class="info-item">
          <img src="image/location-icon.png" alt="Location Icon">
          <p>123 Main Street, City, Country</p>
        </div>
        <div class="info-item">
          <img src="image/phone-icon.png" alt="Phone Icon">
          <p>+1 234 567 890</p>
        </div>
        <div class="info-item">
          <img src="image/email-icon.png" alt="Email Icon">
          <p>info@caferatu.com</p>
        </div>
      </div>
      <h3>Send us a message</h3>
      <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <textarea name="message" placeholder="Your Message" required></textarea>
        </div>
        <div class="form-group">
          <button type="submit">Send Message</button>
        </div>
      </form>
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
    var message = "<?php echo $message; ?>";
    if (message !== '') {
      alert(message);
    }
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

  </script>
</body>

</html>