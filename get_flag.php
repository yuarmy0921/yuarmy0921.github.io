<?php
if ($_FILES['flag']['error'] === UPLOAD_ERR_OK) {
    echo '檔案名稱: ' . $_FILES['flag']['name'] . '<br/>';
    echo '檔案類型: ' . $_FILES['flag']['type'] . '<br/>';
    echo '檔案大小: ' . ($_FILES['flag']['size'] / 1024) . ' KB<br/>';
    echo '暫存名稱: ' . $_FILES['flag']['tmp_name'] . '<br/>';

} else {
    echo '錯誤代碼：' . $_FILES['flag']['error'] . '<br/>';
}
?>