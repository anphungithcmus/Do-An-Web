<?php
    include('../config.php');
    if(isset($_POST['tensp'])){
    $tensp=$_POST['tensp'];
    $thutu=$_POST['thutu'];
    $tensp=$_POST['tensp'];
    $giasp=$_POST['giasp'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    $motasp=$_POST['motasp'];
    $idloaisp=$_POST['idloaisp']    ;
    $xuatsu=$_POST['xuatsu'];
    $idnsx=$_POST['idnsx'];
    $thutu=$_POST['thutu'];
    }
    $id=$_GET['id'];
    if(isset($_POST['them'])){
        //thêm
        $sql="insert into chitetsp (tensp,hinhanh,gia,mota,idloaisp,xuatsu,idnsx,thutu) values('$tensp','$hinhanh','$giasp','$motasp','$idloaisp','$xuatsu','$idnsx','$thutu')";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlysp&ac=them');
    }
    else if(isset($_POST['sua'])){
        //sửa
        $sql="update chitetsp set tensp='$tensp',hinhanh='$hinhanh',gia='$giasp',mota='$motasp',idloaisp='$idloaisp',xuatsu='$xuatsu',idnsx='$idnsx',thutu='$thutu' where idsp='$id'";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlysp&ac=sua&id='.$id);
    }
    else{
        //xóa
        $sql="delete from chitetsp where idsp='$id'";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlysp&ac=them');
    }
?>
