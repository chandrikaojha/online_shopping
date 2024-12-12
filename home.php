</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Example</title>
  
  <!-- Bootstrap CSS -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<body>
  <style>
    /* General Reset */
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
font-family: 'Arial', sans-serif;
line-height: 1.6;
background-color: #bf7ed5;
display: inline-flexbox;
}

/* Header */
header {
display: flex;
justify-content: space-between;
align-items: center;
padding: 10px 20px;
background-color: #1f5a04;
color: rgb(234, 11, 11);

}

.logo-img {
height: 65px;
}

.nav-links {
list-style: none;
display: flex;
gap: 20px;
}

.nav-links a {
text-decoration: none;
color: white;
font-weight: bold;
}

.nav-links a:hover {
text-decoration: underline;
}

.signup-btn,
.login-btn {
background-color: rgb(159, 211, 234);
color: #007BFF;
padding: 5px 10px;
border-radius: 5px;
text-decoration: none;
}

.signup-btn:hover,
.login-btn:hover {
background-color: #0056b3;
color: white;
}

/* Banner Section */
.banner {
background: url('banner.jpg') no-repeat center center/cover;
color: white;
text-align: center;
padding: 100px 20px;
}

.banner-content h1 {
font-size: 36px;
margin-bottom: 10px;
}

.banner-content p {
font-size: 18px;
margin-bottom: 20px;
}

.btn {
background-color: #007BFF;
color: white;
padding: 10px 20px;
border-radius: 5px;
text-decoration: none;
font-weight: bold;
}

.btn:hover {
background-color: #0056b3;
}

/* Categories Section */
.categories {
padding: 50px 20px;
text-align: center;
background-color: #88b2cf;
}

.category-container {
display: flex;
justify-content: center;
gap: 20px;
flex-wrap: wrap;
}

.category-card {
background: white;
border: 1px solid #ddd;
border-radius: 10px;
padding: 20px;
width: 200px;
text-align: center;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.category-card img {
width: 100%;
height: 150px;
border-radius: 10px;
margin-bottom: 10px;
}

/* About Section */
.about {
padding: 50px 20px;
background-color: white;
text-align: center;
}

/* Contact Section */
.contact {
padding: 50px 20px;
background-color: #f4f4f4;
text-align: center;
}

.contact form {
max-width: 400px;
margin: 0 auto;
display: flex;
flex-direction: column;
gap: 10px;
}

.contact input,
.contact textarea {
padding: 10px;
border: 1px solid #ddd;
border-radius: 5px;
}

.contact button {
padding: 10px;
background-color: #007BFF;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}

.contact button:hover {
background-color: #0056b3;
}

/* Footer */
footer {
text-align: center;
padding: 10px;
background-color: #ddb40d;
color: rgb(70, 2, 71);
}

</style>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Shopping Navbar</title>
  <!-- Bootstrap CSS -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- Logo / Brand Name -->
      <div class="logo">
        <!-- Website Logo -->
        <img src="presents-logo.jpg" alt="Online Shopping Logo" class="logo-img">
    </div>
    

      <!-- Toggle Button for Mobile View -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div  style="background-color: #0056b3; height: 65px;"class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Shop by Categories">categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About Us">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact Us">Contact</a>
          </li>
        </ul>

        <!-- Search Bar -->
        <form class="d-flex ms-3">
          <input class="form-control me-2" type="search" placeholder="Search products" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <!-- User Actions -->
        <ul class="navbar-nav ms-3">
          <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link" href="signup.php">signup</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
              </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="rows">
    <section class="banner" id="home">
        <div class="banner-content">
            <h1 style="color: #0056b3;">Welcome to Online Shopping</h1>
            <p  style="color: #4c8cd2;">Find the best products at unbeatable prices!</p>
            <a href="#categories" class="btn">Start Shopping</a>
        </div>
    </section>
</div>


        <!-- Categories Section -->
        <section class="categories" id="categories">
          <h2>Shop by Categories</h2>
          <div class="category-container">
              <!-- Category Cards -->
              <div class="category-card">
                  <img src="lichy.jpeg" alt="Electronics">
                  <h3>lichy</h3>
              </div>
              <div class="category-card">
                  <img src="pear.jpg" alt="Clothing">
                  <h3>pears</h3>
              </div>
              <div class="category-card">
                  <img src="images/apple.jpg" alt="Home Appliances">
                  <h3>apple</h3>
              </div>
              <div class="category-card">
                  <img src="orange.jpg" alt="Books">
                  <h3>orange</h3>
              </div>

              <div class="category-card">
                <img src="images/peach.jpg" alt="Books">
                <h3>peach</h3>
            </div>

            <div class="category-card">
              <img src="images/all fruits.png" alt="Books">
              <h3>fruits</h3>
          </div>

          </div>
      </section>


            <!-- Contact Section -->
           


        <!-- Footer Section -->
        <footer>
          <p>&copy; 2024 Online Shopping. All rights reserved.</p>
      </div>
      </footer>
      <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
    </div>



  <!-- Bootstrap JS -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>
  <!-- Bootstrap Icons (optional for cart/account icons) -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" 
    rel="stylesheet">
</body>
</html>


  <!-- Your content goes here -->

  <!-- Bootstrap JS -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>
