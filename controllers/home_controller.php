<?php

include_once '_classes/Articles.php';
include_once '_classes/Categories.php';
include_once '_classes/Messages.php';
include_once '_classes/Chapters.php';
include_once '_classes/Admin.php';

$allArticles = Articles::getAllArticles();
$allCategories = Categories::getAllCategories();

$lastArticle = Articles::getLastArticle();
$lastArticleLeft = Articles::getLastArticle(5);
$lastArticleRight = Articles::getLastArticle(3);

$allMessages = Messages::getAllMessages();
$lastMessage = Messages::getLastMessage(1);


