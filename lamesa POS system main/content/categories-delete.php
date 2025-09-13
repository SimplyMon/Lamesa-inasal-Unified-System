<?php
require '../config/function.php';


$paramResultId = checkParamId('id');

if (is_numeric($paramResultId)) {

    $categoryId = validate($paramResultId);

    $category = getById('categories', $categoryId);

    if ($category['status'] == 200) {
        $response = delete('categories', $categoryId);
        if ($response) {
            redirect('inventory.php', 'Category Deleted success');
        } else {
            redirect('inventory.php', 'Invalid something');
        }
    } else {
        redirect('inventory.php', $category['message']);
    }
} else {
    redirect('inventory.php', 'Invalid ID');
}
