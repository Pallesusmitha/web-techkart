<?php
require_once "header.php";
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col1">
                <div class="product">
                    <img src="img/l2.jpg" alt="product" width="100%">

                    <div class="col2">
                        <h1>Mi NoteBook Ultra Win 11</h1>
                        <h4>INR 63999 Rupees</h4>
                        <br>
                        <h3>Product Details</h3>
                        <p>
                        <ul>
                            <li> i5 11th Gen</li>
                            <li> Iris Xe Graphics </li>
                            <li> 16GB RAM </li>
                            <li> 512GB NVMe SSD </li>
                            <li> MS Office 2021 </li>
                        </ul>
                        </p>
                        <br>Colour :
                        <select name="colour" id="colour">
                            <option value="">Select Colour</option>
                            <option value="Red">Burning Red</option>
                            <option value="Orange">Lal Kesari</option>
                            <option value="Green">Nature Green</option>
                        </select>
                        <br>
                        <br>

                        <br>
                        <button id="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<footer>
    <p>Copyright &copy; BMSTechKart.com </p>
</footer>
</main>
<style>
    * {
        box-sizing: border-box;
    }

    section {
        margin: auto;
        padding-top: 20px;
    }

    img {
        border-radius: 0;
        float: left;
    }

    .col1 img {
        padding-right: 50px;
    }

    .col2 {
        margin: auto;
        padding: 0 20%;
    }

    .logo_container img {
        border-radius: 500px;
    }

    .button {
        background-color: #182179;
        border: none;
        color: white;
        padding: 5px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 30px;
    }
</style>
<script>
    const addToCartButton = document.getElementById("add-to-cart");
    addToCartButton.addEventListener("click", function() {
        const product = {
            name: "Mi NoteBook Ultra Win 11 ",
            price: 63999,
            image: "img/l2.jpg",
        };

        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart.push(product);
        localStorage.setItem("cart", JSON.stringify(cart));
    });
    document.querySelector("#add-to-cart").addEventListener("click", function() {
        alert("Item added to cart!");
    });
</script>
</body>

</html>