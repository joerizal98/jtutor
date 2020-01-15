<?php
    if(!empty($_GET['id']) and !empty($_GET['name'])){
        $url =  "https://www.jtutor.ml/subject/quiz/?id=".$_GET[id]."&name=".$_GET['name'];
        header('Location: '.$url);
    }else{
        header('Location: https://www.jtutor.ml/subject/Quiz/'); 
    }
?>