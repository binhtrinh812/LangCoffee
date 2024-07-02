<?php
include_once './Configs/Connect.php';
class Person extends Connect
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
    public function getPersonById($nguoitamsu_id)
    {
        $sql = "SELECT * FROM nguoitamsu JOIN booking ON nguoitamsu.booking_id = booking.booking_id  WHERE nguoitamsu_id = :nguoitamsu_id";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':nguoitamsu_id', $nguoitamsu_id, PDO::PARAM_INT);
        $pre->execute();
        $personDetail = $pre->fetch(PDO::FETCH_ASSOC);
        return $personDetail;
    }

    public function getFourOtherPersons($nguoitamsu_id)
    {
        $sql = "SELECT * FROM nguoitamsu 
                WHERE nguoitamsu_id != :nguoitamsu_id 
                ORDER BY created_at DESC 
                LIMIT 4";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':nguoitamsu_id', $nguoitamsu_id, PDO::PARAM_INT);
        $pre->execute();
        $fourPersons = $pre->fetchAll(PDO::FETCH_ASSOC);
        return $fourPersons;
    }


    public function getRequests()
    {
        $sql = "SELECT * FROM booking";
        $pre = $this->pdo->prepare($sql);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllNguoitamsu()
    {
        $sql = "SELECT * FROM nguoitamsu";
        $pre = $this->pdo->prepare($sql);
        $pre->execute();
        $nguoiTamsuList = $pre->fetchAll(PDO::FETCH_ASSOC);
        return $nguoiTamsuList;
    }

    public function returnLastId()
    {
        return $this->pdo->lastInsertId();
    }
}
