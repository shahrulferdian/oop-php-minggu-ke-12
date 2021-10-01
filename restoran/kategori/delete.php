<?php 

if (isset($_GET['id'])) {
    $id=$_GETQ['id'];
    
    $sql = "SELECT FROM tblkategori WHERE idkategori=$id";
    $db->runSQL($sql);
    header("location:?f=kategori&m=select");
}

?>