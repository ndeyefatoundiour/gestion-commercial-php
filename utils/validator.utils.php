<?php


function saisie(string $message):string{
        return readline ($message);
    }

    function required(string $value,array &$errors,string $errorRequired, string $fieledName="libele"):void{
        if(empty($value)){
            $errors[$fieledName]['required'] = $errorRequired;
        }
    }

    function unique(array $datas,string $value,array &$errors,string $errorUnique,string $key='libelle'):void{
        foreach ($datas as $data) {
            if ($data[$key] === $value) {
                $errors[$key]['unique'] = $errorUnique;
            }
        }
    }

    function intPositif(int $value, array &$errors,string $errorIntPositif, string $key='prix') : void {
        if ($value<0) {
            $errors[$key]['positif'] = $errorIntPositif;
        }
    }

    function showError(array $errors){
        foreach($errors as $errorField){
            foreach($errorField as $error)
                echo "$error \n";
            }
    }









?>