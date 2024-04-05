
<?php
function filter_sanpham_by_price($minPrice, $maxPrice) {
    $sql = "SELECT * FROM sanpham WHERE price BETWEEN $minPrice AND $maxPrice ORDER BY id DESC";
    $filteredSanpham = pdo_query($sql);
    return $filteredSanpham;
}
?>