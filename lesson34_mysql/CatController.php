<?php

include_once 'CatModel.php';
include_once 'HobbyModel.php';

class CatController {
    /** @var CatModel $catModel */
    private $catModel;

    /** @var HobbyModel $hobbyModel */
    private $hobbyModel;

    public function __construct()
    {
        $this->catModel = new CatModel();
        $this->hobbyModel = new HobbyModel();
    }

    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=cat&action=index
     */
    public function indexAction()
    {
        $cats = $this->catModel->getAll();

        include 'views/Cat/index.php';
    }

    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=cat&action=view&id=5
     */
    public function viewAction()
    {
        if (!isset($_GET['id'])) {
            die('<p style="color:red">please provide id in URL</p>');
        }

        $cat = $this->catModel->getById($_GET['id']);
        if (empty($cat)) {
            die('<p style="color:red">Cat doesnt exist</p>');
        }

        include 'views/Cat/view.php';
    }

    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=cat&action=add
     */
    public function addAction()
    {
        $messageInfo = '';
        if (!empty($_POST['name'])) {

            $cat =  [
                'name'=> $_POST['name'],
                'color'=> $_POST['color'],
                'city'=> $_POST['city'],
                //'photo'=> $_POST['photo'],
                'photo'=> null, //null means not set property to have option not to upload photo
                //so in database (mysql) we will have value null
                'hobby'=> $_POST['hobby'],
                'friend'=> $_POST['friend'],
            ];
            if (!empty($_FILES["photo"]["tmp_name"])) {
                $source_file = $_FILES['photo']['tmp_name'];
                $target_file = "photos/" . $cat['name'] . ".png";
                move_uploaded_file($source_file, $target_file);
                $cat['photo'] = $target_file;
            }

            $this->catModel->create($cat);
            $messageInfo = 'succesfully submitted';
        }
        include 'views/Cat/add.php';
    }

    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=cat&action=update&id=5
     */
    public function updateAction()
    {
        if (!isset($_GET['id'])) {
            die('<p style="color:red">please provide id in URL</p>');
        }

        $cat = $this->catModel->getById($_GET['id']);
        if (empty($cat)) {
            die('<p style="color:red">Cat doesnt exist</p>');
        }
        $messageInfo = '';
        if (!empty($_POST['submit'])) {
            $cat['name'] = $_POST['name'];
            $cat['color'] = $_POST['color'];
            $cat['city'] = $_POST['city'];
            //$cat['photo'] = $_POST['photo'];
            $cat['photo'] = null;
            $cat['hobby'] = $_POST['hobby'];
            $cat['friend'] = $_POST['friend'];

            if (!empty($_FILES["photo"]["tmp_name"])) {
                $source_file = $_FILES['photo']['tmp_name'];
                $target_file = "photos/" . $cat['name'] . ".png";
                move_uploaded_file($source_file, $target_file);
                $cat['photo'] = $target_file;
            }

            //more productive way
            $this->catModel->update($cat);

            //more advaced way
//            $this->catModel->update(
//                [
//                    'name'=> $cat['name'],
//                    'color'=> $cat['color'],
//                    'city'=> $cat['city'],
//                    'photo'=> $cat['photo'],
//                    'id' => $cat['id'],
//                ]
//            );

            //very simple way for learners
//            $this->catModel->update(
//                [
//                    'name'=> $_POST['name'],
//                    'color'=> $_POST['color'],
//                    'city'=> $_POST['city'],
//                    'photo'=> $_POST['photo'],
//                    'id' => $cat['id'],
//                ]
//            );
            $messageInfo = 'succesfully updated';
        }

        include 'views/Cat/update.php';
    }
}
