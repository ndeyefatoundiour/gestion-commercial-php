<?php


function createProduct()
    {
        global $products;
        do {
            $errors = [];
            $libelle = saisie("Entrez le libellé: ");
            required($libelle, $errors, "Le libellé est obligatoire");
            unique($products, $libelle, $errors, "Ce libellé existe déjà");
            $prix = (int)saisie("Donner le prix :");
            intPositif($prix,$errors,"Le prix dois etre positif ");
            $quantite = (int)saisie("Donner la quantite :");
            intPositif($quantite,$errors,"La quantite dois etre positif ");
            showError($errors);
        } while (!empty($errors));
        $newProduct = [
            "ref" => genererReference($products),
            "libelle" => $libelle,
            "prix" => $prix,
            "quantite" => $quantite
        ];
        addProduct($products, $newProduct); 

    }











?>