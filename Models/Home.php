<?php
include_once './Configs/Connect.php';
class Home extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array
     */

    /* Home */

    /* Lấy sản phẩm theo danh muc id */
    public function getSanphambyCombo($danhmuc_id)
    {
        $sql = "SELECT * FROM sanpham WHERE danhmuc_id = :danhmuc_id ORDER BY created_at DESC LIMIT 6";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':danhmuc_id', $danhmuc_id, PDO::PARAM_INT);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }



    public function returnLastId()
    {
        return $this->pdo->lastInsertId();
    }
}
