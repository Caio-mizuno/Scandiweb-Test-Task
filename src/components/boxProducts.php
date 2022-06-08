<?php
namespace Caiom\Task\Components;
require __DIR__ . '/../../vendor/autoload.php';
use Caiom\Task\Controller\deleteDtProduct;
class Box{

    public int $id;

    public function createBox($id,$sku,$name,$price,$product_type,?int $size = null,?float $weight = null,
    ?float $height = null,?float $width = null,?float $lenght = null)
    {
        // Here start a box by the id of Database
        $this->id = $id; 
        ?>
        <div class="card w-60 h-60 text-center mx-16 mt-8 border-gray-600">
                <input id="product_CB<?=$id?>"  name="product_CheckBox" style="position:absolute;top:8px;left:8px;" class="delete-checkbox" type="checkbox" value="<?php echo $this->id;?>">
                <div class="mt-4">
                    <p class="py-2" ><?php echo $sku;?></p>
                    <p class="py-2"><?php echo $name;?></p>
                    <p class="py-2"><?php echo (number_format($price,2)." $");?></p>
                    <p class="py-2">
                        <?php 
                            if($product_type == 1)echo $size." MB ";
                            else if($product_type == 2)echo $weight." Kg";
                            else{
                                echo "Dimension: ".$height."x".$width."x".$lenght;
                            }
                            ?>
                    </p>
                    <label class="py-2" id="id-p" name="id-product" value="<?php echo $id;?>"><?php echo $id;?></label>
                </div>
            </div>
        <?php
    }
    public function deleteBox($id){
        $controller = new deleteDtProduct();
        $controller->requestProcess($id);
    
    }  
}
