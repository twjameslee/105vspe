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
        parent::__construct();
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', ['slug' => $slug]);
        return $query->row_array();
    }
}