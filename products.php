
<?php

include "navbar.php";

$products= [
    'product 1' => [
              'price' => '620',
              'img' => 'images/1.jpg',
              'desc' => 'ay 7aga'
            ],
            'product 2' => [
                'price' => '4500',
                'img' => 'images/2.jpg',
                'desc' => 'ay 7aga'
              ],
              'product 3' => [
                'price' => '7200',
                'img' => 'images/3.jpg',
                'desc' => 'ay 7aga'
              ],
            'product 4' => [
              'price' => '6500',
              'img' => 'images/2.jpg',
              'desc' => 'ay 7aga'
            ],
            'product 5' => [
              'price' => '3400',
              'img' => 'images/1.jpg',
              'desc' => 'ay 7aga'
            ],
            'product 6' => [
                'price' => '8100',
                'img' => 'images/3.jpg',
                'desc' => 'ay 7aga'
              ],
                  
        ];
    
?>

<div class="container ">
<div class="row m-3">
    
<?php
foreach($products as $key => $value) 
{
?>  
<div class="col-s-6 col-md-4">
    

<div class="card mb-5" style="width: 18rem;">
  <img src="<?php echo $value['img'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <small ><?php echo $value['price']  ?> LE.</small>  
    <h5 class="card-title"><?php echo $key ?></h5>
    <p class="card-text"><?php echo $value['desc'] ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>
<?php
}

?>
</div>
</div>