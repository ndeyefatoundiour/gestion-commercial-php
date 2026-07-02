<?php

$products = [
        0=>['ref'=>'REF001','libelle'=>'lib1','prix'=>4000,'quantite'=>18],
        1=>['ref'=>'REF002','libelle'=>'lib2','prix'=>200,'quantite'=>8]
    ];

    function saveProduct(array &$products, array $product){
        $products[] = $product;
    }












?>