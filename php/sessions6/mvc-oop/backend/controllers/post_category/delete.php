<?php
//load model
require_once('backend/models/post_categories.php');

$cid = intval($_GET['cid']);
post_categories_delete($cid);

header('location:admin.php?controller=post_category');