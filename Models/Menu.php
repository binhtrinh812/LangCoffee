<?php
include_once './Configs/Connect.php';
class Menu extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array
     */

    /* Menu */

    /* Lấy danh sách danh mục */
    public function getDanhmuc($danhmuc_id)
    {
        $sql = "SELECT * FROM danhmuc_sanpham WHERE danhmuc_id = :danhmuc_id";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':danhmuc_id', $danhmuc_id, PDO::PARAM_INT);
        $pre->execute();
        $danhmuc = $pre->fetch(PDO::FETCH_ASSOC);

        if ($danhmuc) {
            $sql = "SELECT * FROM sanpham WHERE danhmuc_id = :danhmuc_id";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':danhmuc_id', $danhmuc_id, PDO::PARAM_INT);
            $pre->execute();
            $products = $pre->fetchAll(PDO::FETCH_ASSOC);
            $danhmuc['products'] = $products;
        }
        return $danhmuc;
    }

    public function getProductDetail($sp_id)
    {
        $sql = "SELECT * FROM sanpham WHERE sp_id = :sp_id";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':sp_id', $sp_id, PDO::PARAM_INT);
        $pre->execute();
        $productDetail = $pre->fetch(PDO::FETCH_ASSOC);
        return $productDetail;
    }

    public function getNewestProductsInSameCategory($sp_id)
    {
        // Lấy danh mục của sản phẩm hiện tại
        $sql = "SELECT danhmuc_id FROM sanpham WHERE sp_id = :sp_id";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':sp_id', $sp_id, PDO::PARAM_INT);
        $pre->execute();
        $danhmuc_id = $pre->fetchColumn();

        // Lấy 4 sản phẩm mới nhất cùng danh mục
        $sql_newest = "SELECT * FROM sanpham 
                   WHERE danhmuc_id = :danhmuc_id AND sp_id != :sp_id 
                   ORDER BY created_at DESC 
                   LIMIT 4";
        $pre_newest = $this->pdo->prepare($sql_newest);
        $pre_newest->bindParam(':danhmuc_id', $danhmuc_id, PDO::PARAM_INT);
        $pre_newest->bindParam(':sp_id', $sp_id, PDO::PARAM_INT);
        $pre_newest->execute();
        $newestProducts = $pre_newest->fetchAll(PDO::FETCH_ASSOC);

        return $newestProducts;
    }



    public function returnLastId()
    {
        return $this->pdo->lastInsertId();
    }
}
