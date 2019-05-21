<?php

function nickname_generate($nickname){
    $length = rand(2, 4);
    echo strrev($_POST['input']).'<br>';
    echo strtoupper(strrev($_POST['input'])).'<br>';
    echo strtoupper($_POST['input']).'<br>';
    echo "--".strtoupper($_POST['input'])."--".'<br>';
    echo "x".strtoupper($_POST['input']).'<br>';
    echo substr(md5(microtime()),rand(0,26),$length).strtoupper($_POST['input']).'<br>';
    echo "[".substr(md5(microtime()),rand(0,26),$length)."]".strtoupper($_POST['input']).'<br>';
    echo "[".substr(md5(microtime()),rand(0,26),$length)."]".strtolower($_POST['input']).'<br>';
};

function object_generate(){
    class  {
        function {
            return 
        }
    }
};   


function object_revert(){

};

?>