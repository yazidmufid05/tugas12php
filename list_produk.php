<?php
   require_once 'dbkoneksi.php';
   require_once 'class_produk.php';

   $objproduk = new Produk($dbh);
   $rsproduk = $objproduk->getAllProduk();
?>
<h3>Daftar Produk</h3>
<style>
    table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .action-links {
            text-align: center;
        }

        .action-links a {
            display: inline-block;
            margin: 0 5px;
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
            color: #333;
        }
    </style>
<table border="1" width="100%">
    <thead>
        <tr><th>No</th><th>Nama Produk</th><th>Qty</th>
        <th>Harga</th><th>Action</th></tr>
    </thead>
    <tbody>
    <?php
        $nomor = 1;
        foreach($rsproduk as $row){
            echo '<tr><td>'.$nomor.'</td>
            <td>'.$row->nama.'</td>
            <td>'.$row->qty.'</td>
            <td>'.$row->harga.'</td>
            <td align="center">
            <a href="edit.php?id='.$row->id.'">Edit</a>
            <a href="delete.php?id='.$row->id.'">Del</a>
            </td></tr>';
            $nomor++;
        }
    ?>
    </tbody>
    </table>