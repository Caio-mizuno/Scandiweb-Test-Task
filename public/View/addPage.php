<!DOCTYPE html>

<html lang="en">

<?php
require __DIR__ . '/../../vendor/autoload.php';
require_once('..\src\components\head.php');

?>

<body>

    <div id="product_form" class="conatiner" style="position:absolute;top:0;width:100%;">
        <form action="/saveProduct" method="post">
            <?php
            require_once('..\src\components\navbarAddPage.php');
            if (isset($_GET['Message'])) {
                echo "<p class='text-center text-rose-600 font-semibold bg-stone-200 px-4'>" . $_GET['Message'] . "</p>";
            }
            ?>
            <div class="pt-20 mx-20">
                <div class="row g-3">
                    <div class="col">
                        <input id="sku" name="sku" type="text" class="form-control" placeholder="SKU" aria-label="Sku" required="required" />
                    </div>
                    <div class="col">
                        <input id="name" name="name" type="text" class="form-control" placeholder="Name" aria-label="Name" required="required" />
                    </div>

                </div>
                <div class="row g-3 pt-4">
                    <div class="col">
                        <input id="price" name="price" type="number" min="0.00" step="0.01" class="form-control" placeholder="Price in $" required="required" />

                    </div>
                </div>

                <div class="row g-3 pt-4">
                    <div class="col">
                        <label for="product_type" class="form-label">Product Type</label>
                        <select id="product_type" name="product_type" class="form-select" required="required">
                            <option selected>Choose one</option>
                            <option id="DVD" value="dvd">DVD</option>
                            <option id="Book" value="book">Book</option>
                            <option id="Furniture" value="furniture">Furniture</option>
                        </select>
                    </div>
                </div>

                <!-- BOX : Size -->
                <div class="row g-3 pt-4">
                    <div class="col">
                        <div id="size"></div>
                    </div>
                </div>
                <!-- BOX : Weight-->
                <div id="weight"></div>
                <!-- BOX : Height-->
                <!-- BOX : Width-->
                <!-- BOX : Lenght-->
                <div class="row g-3 ">
                    <div class="col">
                        <div id="height" class="py-4"></div>
                        <div id="width" class="py-4"></div>
                        <div id="lenght" class="py-4"></div>
                    </div>

                </div>
            </div>

        </form>
    </div>


    <script src=" .\js\buttonSelect.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>