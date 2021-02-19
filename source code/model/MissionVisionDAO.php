<?php

require_once 'common.php';

class MissionVisionDAO
{

    public function getAll()
    {
        // STEP 1
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        // STEP 2
        $sql = "SELECT * FROM missionvision";
        $stmt = $conn->prepare($sql);

        // STEP 3
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // STEP 4
        $statements = []; // Indexed Array of MissionVision objects
        while ($row = $stmt->fetch()) {
            $statements[] = new MissionVision($row['title'], $row['subtitle'],$row['description']);
        }

        // STEP 5
        $stmt = null;
        $conn = null;

        // STEP 6
        return $statements;
    }

}

?>