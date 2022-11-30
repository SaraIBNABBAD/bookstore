<?php

namespace Bookstore\Controllers;

use Bookstore\Models\User as ModelsUser;
use Bookstore\helpers\Connection;
use Bookstore\Models\Book;

class User
{

    function createUser() {
        
        if (isset($_POST['signup'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $user = new ModelsUser($name, $email,$password );
            if ($user->insertUser()) {
                header("location:$baseUrl/auth");
            }else{
                echo "User Insertion Error";
            }
        }
    
    }

    // display Add book page user
    // public function bookpageuser()
    // {
    //     require "views/user/userBook.php";
    // }

    public function getbookuser(){
        $book = new Book();
        $bookList = $book ->getAll();
        require "views/user/userBook.php";
    }
    public function onebookuser($id){
        $book = new Book();
        $books = $book ->getOneById($id);
        require "views/user/onebook.php";
    }
}
