<?php

include_once '_classes/Chapters.php';

// Modification chapitre
if(!empty($_POST) && isset($_POST['buttonModifchapter'])) {
    $newstory=$_POST['newstory'];
    $newcategory=$_POST['newcategory'];
    $id = $_POST['id'];
    Chapters::modifyChapter($id, $newstory, $newcategory);
}
