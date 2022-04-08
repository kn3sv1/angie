<?php

include_once 'HobbyModel.php';

class HobbyController {
    /** @var HobbyModel $hobbyModel */
    private $hobbyModel;

    public function __construct()
    {
        $this->hobbyModel = new HobbyModel();
    }

    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=hobby&action=index
     */
    public function indexAction()
    {
        $hobbies = $this->hobbyModel->getAll();

        include 'views/Hobby/index.php';
    }

    public function viewAction()
    {
        if (!isset($_GET['id'])) {
            die('<p style="color:red">please provide id in URL</p>');
        }

        $hobby = $this->hobbyModel->getById($_GET['id']);
        if (empty($hobby)) {
            die('<p style="color:red">Hobby doesnt exist</p>');
        }

        include 'views/Hobby/view.php';
    }

    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=hobby&action=add
     */
    public function addAction()
    {
        $messageInfo = '';
        if (!empty($_POST['name'])) {
            $hobby =  [
                'name'=> $_POST['name'],
            ];
            $this->hobbyModel->create($hobby);
            $messageInfo = 'succesfully submitted';
        }
        include 'views/Hobby/add.php';
    }


    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=hobby&action=update&id=1
     */
    public function updateAction()
    {
        if (!isset($_GET['id'])) {
            die('<p style="color:red">please provide id in URL</p>');
        }

        $hobby = $this->hobbyModel->getById($_GET['id']);
        if (empty($hobby)) {
            die('<p style="color:red">Hobby doesnt exist</p>');
        }
        $messageInfo = '';
        if (!empty($_POST['submit'])) {
            $hobby['name'] = $_POST['name'];


            //more productive way
            $this->hobbyModel->update($hobby);

            $messageInfo = 'succesfully updated';
        }

        include 'views/Hobby/update.php';
    }
}
