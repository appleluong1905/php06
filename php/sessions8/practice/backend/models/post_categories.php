<?php
/**
 * Xóa bản ghi có khóa chính là $id
 */
function post_categories_delete($id) {
    $id = intval($id);


    //xóa danh mục
    $sql = "DELETE FROM post_categories WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}