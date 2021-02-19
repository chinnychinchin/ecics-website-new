<?php

class AboutUs {
    public $intro;
    public $list_intro;
    public $list_items;
    public $conclusion;

    /**
     * AboutUs constructor.
     * @param $intro
     * @param $list_intro
     * @param $list_items
     * @param $conclusion
     */
    public function __construct($intro, $list_intro, $list_items, $conclusion)
    {
        $this->intro = $intro;
        $this->list_intro = $list_intro;
        $this->list_items = $list_items;
        $this->conclusion = $conclusion;
    }


}

?>