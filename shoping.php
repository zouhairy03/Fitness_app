<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- <link rel="shortcut icon" href="android-chrome-192x192.ico" type="image/x-icon"> -->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
<link rel="stylesheet" href="shopping.css">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container px-4 px-lg-5">
            <a class="navbar-brand bg-mask" href="index.php"><img src="logo1.jpeg" alt="" width="160" style="object-fit:contain"  height="80"></a>
                <a class="navbar-toggler" type="a" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href=" http://localhost:8888/my%20project/ ">Home</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="a" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <div id="cart-items"> -->
  <!-- Cart items will be dynamically generated here -->
                   <form class="d-flex">
      <a id="cart-btn" class="btn btn-outline-dark" type="submit">
        <i class="bi-cart-fill me-1"></i>
        Cart
        <span id="cart-count" class="badge bg-dark text-white ms-1 rounded-pill">0</span>
      </a>
    <!-- </form> -->
<!-- </div> -->

   
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <!-- <form action="try.php" method="post"> -->
        <section class="py-5">
        <form action="try.php" method="post">
            <div class="container px-4 px-lg-5 mt-5" >
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="PROTEIN1.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" name="view_options">View options</a>

</div>
                            </div>
                        </div>
                    </div>
</form>


  





                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="PROTEIN.2" alt="..." /> -->
                                            <img class="card-img-top " src="protein8.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" >
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent d-flex gap-3 border-raduis-4">
                                <!-- <div class="text-center"><button class="btn btn-outline-dark mt-auto" href="">Add to cart</button></div> -->
                                <div class="text-center">
  <a class="btn btn-outline-dark mt-auto" onclick="handleBuyClick()" href="payment.php">Buy</a>
</div>                             
 <div class="text-center"><button type="button" class="btn btn-outline-dark mt-auto add-to-cart-btn" data-product-id="123">Add to cart</button></div>  

                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="PROTEIN.2" alt="..." /> -->
                                            <img class="card-img-top" src="protein5.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" >
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent d-flex gap-3 border-raduis-4">
                                <!-- <div class="text-center"><button class="btn btn-outline-dark mt-auto" href="">Add to cart</button></div> -->
                                <div class="text-center">
  <a class="btn btn-outline-dark mt-auto" onclick="handleBuyClick()" href="payment.php">Buy</a>
</div>                             
 <div class="text-center"><button type="button" class="btn btn-outline-dark mt-auto add-to-cart-btn" data-product-id="123">Add to cart</button></div>  

                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="PROTEIN.2" alt="..." /> -->
                                            <img class="card-img-top" src="protein7.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" >
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent d-flex gap-3 border-raduis-4">
                                <!-- <div class="text-center"><button class="btn btn-outline-dark mt-auto" href="">Add to cart</button></div> -->
                                <div class="text-center">
  <a class="btn btn-outline-dark mt-auto" onclick="handleBuyClick()" href="payment.php">Buy</a>
</div>                             
 <div class="text-center"><button type="button" class="btn btn-outline-dark mt-auto add-to-cart-btn" data-product-id="123">Add to cart</button></div>  

                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="PROTEIN.2" alt="..." /> -->
                                            <img class="card-img-top" src="protein6.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" >
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent d-flex gap-3 border-raduis-4">
                                <!-- <div class="text-center"><button class="btn btn-outline-dark mt-auto" href="">Add to cart</button></div> -->
                                <div class="text-center">
  <a class="btn btn-outline-dark mt-auto" onclick="handleBuyClick()" href="payment.php">Buy</a>
</div>                             
 <div class="text-center"><button type="button" class="btn btn-outline-dark mt-auto add-to-cart-btn" data-product-id="123">Add to cart</button></div>  

                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="PROTEIN.2" alt="..." /> -->
                                            <img class="card-img-top" src="protein10.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" >
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent d-flex gap-3 border-raduis-4">
                                <!-- <div class="text-center"><button class="btn btn-outline-dark mt-auto" href="">Add to cart</button></div> -->
                                <div class="text-center">
  <a class="btn btn-outline-dark mt-auto" onclick="handleBuyClick()" href="payment.php">Buy</a>
</div>                             
 <div class="text-center"><button type="button" class="btn btn-outline-dark mt-auto add-to-cart-btn" data-product-id="123">Add to cart</button></div>  

                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="PROTEIN.2" alt="..." /> -->
                                            <img class="card-img-top" src="protein11.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" >
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent d-flex gap-3 border-raduis-4">
                                <!-- <div class="text-center"><button class="btn btn-outline-dark mt-auto" href="">Add to cart</button></div> -->
                                <div class="text-center">
  <a class="btn btn-outline-dark mt-auto" onclick="handleBuyClick()" href="payment.php">Buy</a>
</div>                             
 <div class="text-center"><button type="button" class="btn btn-outline-dark mt-auto add-to-cart-btn" data-product-id="123">Add to cart</button></div>  

                            </div>
                        </div>
                    </div>
                    <a href="homepage.php" style="margin-left:200px; font-size:1.3rem;font-family:sans-serif;color:black;">Go back</a>

        </section>

<!-- <a href="homepage.php" style="margin-left:00px;font-size:1rem;font-family:sans-serif;color:black;">Go back</a> -->
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Fitness Club 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


        <!-- <script>
$(document).ready(function() {
  $(".add-to-cart-btn").click(function() {
    var productId = $(this).data("product-id");
    var quantity = 1; // or get the quantity from a form field

    $.ajax({
      type: "POST",
      url: "/add-to-cart",
      data: { productId: productId, quantity: quantity },
      success: function(response) {
        alert("Product added to cart!");
      },
      error: function(xhr, status, error) {
        alert("Error adding product to cart: " + error);
      }
    });
  });
});
</script> -->
<script>
    const addToCartBtns = document.querySelectorAll('.add-to-cart-btn');
    const cartCount = document.querySelector('#cart-count');
    
    addToCartBtns.forEach(addToCartBtn => {
      addToCartBtn.addEventListener('click', function() {
        let count = parseInt(cartCount.textContent);
        cartCount.textContent = count + 1;
      });
    });
  </script>

<script>
  function handleBuyClick() {
    // Add your code here to complete the purchase
    // For example, you could redirect the user to a checkout page
    // window.location.href = "https://example.com/checkout";
  }
</script>
<!-- <script>
    // Get the navbar logo image element
const logoImage = document.querySelector('.navbar-brand img');

// Set the new logo image source
logoImage.src = 'logo.jpeg';

// Set the new logo image alt text
logoImage.alt = 'My New Logo';

</script> -->

    </body>
</html>
