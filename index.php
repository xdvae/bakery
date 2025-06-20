<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sweet Crumbs Bakery</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="hero">
  <div class="hero-text">
    <h1>Sweet Crumbs Bakery</h1>
    <p>Your daily dose of love baked fresh.</p>
    <a href="#menu" class="btn-primary">See Our Menu</a>
  </div>
  <div class="hero-img">
    <img src="https://media.istockphoto.com/id/663898216/photo/fresh-bread-on-shelves-in-bakery.jpg?s=612x612&w=0&k=20&c=YLGc_2wCbYhlKXJIqjqM_MlCWSoDkO-BaiU5W1EavU8=" alt="Bakery showcase">
  </div>
</header>

<section id="menu" class="menu-section">
  <h2>Our Menu</h2>
  <div class="menu-grid">
    <div class="card">
      <img src="https://media.istockphoto.com/id/655156000/photo/chocolate-cupcakes-with-peanut-paste-the-old-grunge-background.jpg?s=612x612&w=0&k=20&c=lAkzeP4qDeChbI2Srg8zbGlzR-zc2A2OkiazVy-i0o4=" alt="Chocolate Cupcake">
      <h3>Chocolate Cupcake</h3>
      <p>Rich, moist chocolate cupcake with creamy frosting.</p>
      <button class="btn-order" onclick="openOrder('Chocolate Cupcake')">Order Now</button>
    </div>
    <div class="card">
      <img src="https://www.kingarthurbaking.com/sites/default/files/2022-12/KABC_Quick-Breads_Blueberry-Muffin_08304.jpg" alt="Blueberry Muffin">
      <h3>Blueberry Muffin</h3>
      <p>Soft muffin bursting with fresh blueberries.</p>
      <button class="btn-order" onclick="openOrder('Blueberry Muffin')">Order Now</button>
    </div>
    <div class="card">
      <img src="https://img.freepik.com/free-photo/delicious-breakfast-with-fresh-croissants-coffee-served-with-butter_1150-37809.jpg?semt=ais_hybrid&w=740" alt="Butter Croissant">
      <h3>Butter Croissant</h3>
      <p>Flaky, buttery and perfect with your morning coffee.</p>
      <button class="btn-order" onclick="openOrder('Butter Croissant')">Order Now</button>
    </div>
    <div class="card">
      <img src="https://t4.ftcdn.net/jpg/02/54/17/41/360_F_254174127_PqpyCkSTaz9bUfBVVt2rd0tftsmM4XvJ.jpg" alt="Sourdough Bread">
      <h3>Sourdough Bread</h3>
      <p>Handcrafted sourdough with a crunchy crust.</p>
      <button class="btn-order" onclick="openOrder('Sourdough Bread')">Order Now</button>
    </div>
  </div>

  <div id="order-form" class="order-form hidden">
    <div class="order-box">
      <button class="close-btn" onclick="closeOrder()">✕</button>
      <h3>Place Your Order</h3>
      <form action="order.php" method="POST">
        <input type="hidden" name="item" id="order-item">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Delivery Address" required></textarea>
        <button type="submit" class="btn-submit">Send Order</button>
      </form>
    </div>
  </div>
</section>

<section class="gallery-section">
  <h2>Gallery</h2>
  <div class="gallery-grid">
    <div class="gallery-item"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWFcxN8w597k6XP9RuYwsD0yMkkITZ5ZuoLw&s" alt="Gallery image 1"></div>
    <div class="gallery-item"><img src="https://media.istockphoto.com/id/1317782863/photo/bakery-owner-giving-food-package-to-customer.jpg?s=612x612&w=0&k=20&c=YirjFLIVOEW4m0sONXG-J30kZWmCFtOZzt-XC6iabDM=" alt="Gallery image 2"></div>
    <div class="gallery-item"><img src="https://thumbs.dreamstime.com/b/modern-bakery-different-kinds-bread-cakes-buns-53321997.jpg" alt="Gallery image 3"></div>
    <div class="gallery-item"><img src="https://t3.ftcdn.net/jpg/01/94/67/46/360_F_194674604_ljLHejiSLubzErvpKQleLptz8RTAspIT.jpg" alt="Gallery image 4"></div>
  </div>
</section>

<section class="about-section">
  <h2>About Us</h2>
  <div class="about-content">
    <img src="https://mindfuldesignconsulting.com/wp-content/uploads/2020/07/Rustic-Bakery-Interior-Design-720x321.jpg" alt="Bakery interior">
    <div class="about-text">
      <p>We’re a family-owned bakery nestled in the heart of the city. At Sweet Crumbs, we believe in crafting every pastry and loaf with care, using only the best local ingredients.</p>
      <p>From our signature croissants to seasonal delights, our mission is simple: spread joy one crumb at a time.</p>
    </div>
  </div>
</section>

<section class="location-section">
  <h2>Find Us</h2>
  <div class="map-container">
    <!-- Replace with your actual Google Maps embed code -->
    <iframe src="https://maps.google.com/maps?q=New%20York%20City&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
  </div>
</section>

<footer class="footer">
  <div class="footer-content">
    <p>© 2025 Sweet Crumbs Bakery. All rights reserved.</p>
    <p><a href="#menu">Menu</a> | <a href="#gallery">Gallery</a> | <a href="#about">About Us</a></p>
  </div>
</footer>

<!-- Order Form Modal -->
<div id="order-form" class="order-form">
  <div class="order-box">
    <button class="close-btn" onclick="closeOrder()">✕</button>
    <h3>Place Your Order</h3>
    <form action="send.php" method="POST">
      <input type="hidden" name="item" id="order-item">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="tel" name="phone" placeholder="Phone Number" required>
      <textarea name="address" placeholder="Delivery Address" required></textarea>
      <button type="submit" class="btn-submit">Send Order</button>
    </form>
  </div>
</div>

<script>
  function openOrder(item) {
    document.getElementById('order-item').value = item;
    document.getElementById('order-form').classList.remove('hidden');
  }
  function closeOrder() {
    document.getElementById('order-form').classList.add('hidden');
  }
</script>
<script>
  function openOrder(itemName) {
    document.getElementById("order-item").value = itemName;
    document.getElementById("order-form").classList.add("visible");
  }

  function closeOrder() {
    document.getElementById("order-form").classList.remove("visible");
  }
</script>


</body>
<?php if (isset($_GET['success'])): ?>
<div id="success-popup" class="popup-overlay">
  <div class="popup-box">
    <p>✅ Your order was placed successfully!</p>
    <button onclick="document.getElementById('success-popup').style.display='none'" class="btn-close-popup">Close</button>
  </div>
</div>
<?php endif; ?>

</html>
