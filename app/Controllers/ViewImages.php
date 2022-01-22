<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

class ViewImages extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $data = ['result' => $db->query("SELECT * FROM images")];
        $db->close();
        return view('view_images', $data);
    }
}
