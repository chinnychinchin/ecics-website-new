<?php

require_once 'common.php';

class AboutUsDAO
{
    public function getAll()
    {
        // STEP 1
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        // STEP 2
        $sql = "SELECT * FROM aboutus";
        $stmt = $conn->prepare($sql);

        // STEP 3
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // STEP 4
        $aboutus = []; // Indexed Array of Post objects
        while ($row = $stmt->fetch()) {
            $aboutus[] = new AboutUs($row['intro'],$row['list-intro'],$row['list-items'],$row['conclusion']);
        }

        // STEP 5
        $stmt = null;
        $conn = null;

        // STEP 6
        return $aboutus;
    }

}

?>