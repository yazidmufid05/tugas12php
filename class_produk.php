<?php
class Produk {
    private $dbh;

    public function __construct($dbh){
        $this->dbh = $dbh;
    }

    public function getAllProduk(){
        $sql = "SELECT * FROM produk";
        $rs = $this->dbh->query($sql);
        return $rs;
    }

    public function getAllJenisProduk(){
        $sql = "SELECT * FROM jenis_produk";
        $rs = $this->dbh->query($sql);
        return $rs;
    }

    public function addProduk($nama, $qty, $harga, $jenis_produk_id) {
        try {
            $stmt = $this->dbh->prepare("INSERT INTO produk (nama, qty, harga, jenis_produk_id) VALUES (?, ?, ?, ?)");
            $stmt->bindParam(1, $nama);
            $stmt->bindParam(2, $qty);
            $stmt->bindParam(3, $harga);
            $stmt->bindParam(4, $jenis_produk_id);

            return $stmt->execute();
        } catch (PDOException $e) {
            // Tangani kesalahan database jika diperlukan
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>
