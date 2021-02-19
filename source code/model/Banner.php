<?php

class Banner {
    public $url;
    public $title;
    public $description;

    /**
     * Banner constructor.
     * @param $url
     * @param $title
     * @param $description
     */
    public function __construct($url, $title, $description)
    {
        $this->url = $url;
        $this->title = $title;
        $this->description = $description;
    }
}

?>