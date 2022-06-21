<!DOCTYPE html>
<html lang="en">
    <?php
        define("dir",__DIR__);
        $path = str_replace("/View","/src/components/head.php",dir);
        require_once($path);
    ?>
   <header>
        <?php
            $path = str_replace("/View","/src/components/navbarAddPage.php",dir);
            require_once($path);
            
        ?>
    </header>
<body id="myFrame">

    <div  class="conatiner" >
        <form id='product_form' action="./saveProduct" method="post">
        
        <!--Error menssages-->
            <?php
                
                if (isset($_GET['Message'])) {
                    echo "<p class='text-center text-rose-600 font-semibold bg-stone-200 px-4'>" . $_GET['Message'] . "</p>";
                }
            ?>
        <!--form inputs-->
            <div class="pt-20 mx-20">
                <div>
                    <span>
                        <label for="sku">SKU</label>
                        <input id="sku" name="sku" type="text" class="w-full border-2 border-solid border-slate-300" required="required" />
                    </span>
                </div>
                <div>
                    <span>
                <label for="name">NAME</label>
                <input id="name" name="name" type="text" class="w-full border-2 border-solid border-slate-300" required="required" />
                    </span>
                </div>
                <div>
                    <span>
                        <label for="price">Price in $</label>
                        <input id="price" name="price" class="w-full border-2 border-solid border-slate-300" type="number" min="0.00" step="0.01"   
                        required="required"/>
                     </span>
                </div>

                <div>
                    <span>
                        <label for="productType">Product Type</label>
                        <select id="productType" name="productType" class="w-full border-2 border-solid border-slate-300" required="required">
                            <option selected>Choose one</option>
                            <option id="DVD" value="DVD">DVD</option>
                            <option id="Book" value="Book">Book</option>
                            <option id="Furniture" value="Furniture">Furniture</option>
                        </select>
                </span>
                </div>
                
                <!-- BOX : Size -->
                <div id="DVD">
                    <div name="size"  >
                        <label >Size (MB)</label>
                        <input id="size" name="size"  class="w-full border-2 border-solid border-slate-300" type="number">
                    </div>
                </div>
                    
                <!-- BOX : Weight-->
                <div id="Book">
                    <div name="weight">
                        <label >Weight (Kg)</label>
                        <input id="weight" name="weight" class="w-full border-2 border-solid border-slate-300" type="number" >
                    </div>
                </div>
                 
                <!-- BOX : Height-->
                <!-- BOX : Width-->
                <!-- BOX : Lenght-->
                
                <div id="Furniture">
                    <div  name="height" class="py-4">
                        <label >Height (cm)</label>
                        <input id="height" name="height" class="w-full border-2 border-solid border-slate-300" type="number"  >
                    </div>
                    <div name="width" class="py-4">
                        <label >Width (cm)</label>
                        <input id="width" name="width"  class="w-full border-2 border-solid border-slate-300" type="number" >
                    </div>
                    <div name="length"  class="py-4">
                        <label >Length (cm)</label>
                        <input id="length" name="length" class="w-full border-2 border-solid border-slate-300" name="length" type="number">
                    </div>
                </div>
                  
            </div>
            <!--Buttons of form-->
           <div class="flex-nowrap" style="position:absolute;top:5px;right:0%;">
                <ul class="flex me-auto float-right">
                    <li class="">
                        <input id="Save" name="Save" value="Save" type="submit" href="./saveProduct" class="active btn btn-success mx-4 text-white" style="padding: 9px 48px;" >
                        </input>
                    </li>
                    <li class="">
                        <a id="Cancel" name="Cancel" class="btn  border-2 mx-4" style="color:#c91d1d;border-color:#c91d1d;" href="./">Cancel</a>
                    </li>
                </ul>
            </div>
        </form>
    </div>


    <script src=" ./js/buttonSelect.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>