<?php

namespace App\Http\Controllers;

use App\Models\TreeUser;

class ApiTreeUserController extends Controller
{
    public function index()
    {
        return "Hello World";
    }

    public function get()
    {
        $treeUser = new TreeUser();
        $treeUser->get();
        dump($treeUser->get());
        exit;
    }

    public function addData()
    {
        $treeUser = new TreeUser();
        $treeUser->addData('yamada');
        return "addData";
    }

    public function deleteData()
    {
        $treeUser = new TreeUser();
        $treeUser->deleteData(5);
        return "deleteData";
    }

    public function updateData()
    {
        $treeUser = new TreeUser();
        $treeUser->updateData(2, 'kate');
        return "updateData";
    }
}
