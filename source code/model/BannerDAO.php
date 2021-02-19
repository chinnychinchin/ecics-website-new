<?php

require_once 'common.php';

class BannerDAO
{

    public function getAll()
    {
        // STEP 1
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        // STEP 2
        $sql = "SELECT * FROM banners";
        $stmt = $conn->prepare($sql);

        // STEP 3
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // STEP 4
        $banners = []; // Indexed Array of Post objects
        while ($row = $stmt->fetch()) {
            $banners[] = new Banner($row['url'], $row['title'],$row['description']);
        }

        // STEP 5
        $stmt = null;
        $conn = null;

        // STEP 6
        return $banners;
    }

}

?>