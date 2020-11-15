<?php

    //setting the column variable as the first column is 2
    $colNum = 1;

    //loop to print each coupon in array
    for($index = 0; $index < count($bestSellers); $index++)
    {

        echo "
            <div class='product-card-grid' 
            style='grid-column: {$colNum}; grid-row: 2;'>
                <img src='./View/Public/Images/{$bestSellers[$index][0]}.jpg'>
                <p class = 'product-card-desc'>{$bestSellers[$index][1]}</p>
                <p class = 'product-card-price'>{$bestSellers[$index][2]}</p>
                </button>
            </div>
        ";
        // increment column num
        $colNum++;
    }



?>