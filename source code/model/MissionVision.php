<?php

class MissionVision {
    public $title;
    public $subtitle;
    public $description;

    /**
     * MissionVision constructor.
     * @param $title
     * @param $subtitle
     * @param $description
     */
    public function __construct($title, $subtitle, $description)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
    }


}

?>