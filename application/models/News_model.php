<?php

/**
 * Created by PhpStorm.
 * User: James
 * Date: 2016/1/8
 * Time: 上午1:36
 */
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {

    }
}