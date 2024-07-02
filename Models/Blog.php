<?php
include_once './Configs/Connect.php';
class Blog extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array
     */

    /* Blog */

    public function getBlog($id)
    {
        $sql = "SELECT * FROM tin_tuc WHERE id = :id";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':id', $id, PDO::PARAM_INT);
        $pre->execute();
        $blogDetail = $pre->fetch(PDO::FETCH_ASSOC);
        return $blogDetail;
    }

    public function getFourOtherBlog($id)
    {
        $sql = "SELECT * FROM tin_tuc 
            WHERE id != :id 
            ORDER BY thoi_gian DESC 
            LIMIT 4";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':id', $id, PDO::PARAM_INT);
        $pre->execute();
        $fourBlogs = $pre->fetchAll(PDO::FETCH_ASSOC);
        return $fourBlogs;
    }

    public function getAllBlog()
    {
        $sql = "SELECT * FROM tin_tuc";
        $pre = $this->pdo->prepare($sql);
        $pre->execute();
        $blogList = $pre->fetchAll(PDO::FETCH_ASSOC);
        return $blogList;
    }

    public function getRequests()
    {
        $sql = "SELECT * FROM booking";
        $pre = $this->pdo->prepare($sql);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get1Blog()
    {
        $sql = "SELECT * FROM tin_tuc 
                ORDER BY thoi_gian DESC 
                LIMIT 1";
        $pre = $this->pdo->prepare($sql);
        $pre->execute();
        $latestBlog = $pre->fetch(PDO::FETCH_ASSOC);
        return $latestBlog;
    }

    public function getFourLatestBlogsExcludingOldest()
    {
        $sql = "SELECT * FROM tin_tuc 
                ORDER BY thoi_gian DESC 
                LIMIT 5";
        $pre = $this->pdo->prepare($sql);
        $pre->execute();
        $blogList = $pre->fetchAll(PDO::FETCH_ASSOC);
        if (count($blogList) >= 5) {
            array_shift($blogList);
        }
        return $blogList;
    }

    public function returnLastId()
    {
        return $this->pdo->lastInsertId();
    }
}
