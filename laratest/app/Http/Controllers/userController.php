<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller {

    public function index() {
        return view( 'user.createUser' );
    }

    //add user
    public function addUser( Request $req ) {

        $users = $this->getUsers();
        $user = [
            'id'       => $req->id,
            'name'     => $req->name,
            'username' => $req->username,
            'email'    => $req->email,
        ];
        array_push( $users, $user );
        return view( 'user.userlist' )->with( 'userlist', $users );
    }

    //view details
    public function details( $id ) {
        $users = $this->getUsers();
        $user = '';

        foreach ( $users as $value ) {
            if ( $value['id'] == $id ) {
                $user = $value;
                break;
            }
        }
        return view( 'user.userDetails' )->with( 'user', $user );
    }

    public function editView( $id ) {
        $users = $this->getUsers();
        $user = '';
        foreach ( $users as $value ) {
            if ( $value['id'] == $id ) {
                $user = $value;
                break;
            }
        }
        return view( 'user.editUser' )->with( 'user', $user );
    }

    //edit user
    public function editUser( Request $req, $id ) {
        $users = $this->getUsers();

        $user = [
            'id'       => $req->id,
            'name'     => $req->name,
            'username' => $req->username,
            'email'    => $req->email,
        ];

        array_push( $users, $user );
        return view( 'user.userlist' )->with( 'userlist', $users );

    }

    //delete user
    public function deleteUser( $id ) {
        $users = $this->getUsers();

        foreach ( $users as $value ) {
            if ( $value['id'] == $id ) {
                unset( $users[$id - 1] );
                break;
            }
        }
        return view( 'user.userlist' )->with( 'userlist', $users );
    }

    //display user list
    public function userlist() {
        $users = $this->getUsers();
        return view( 'user.userlist' )->with( 'userlist', $users );
    }

    public function getUsers() {
        return  [
            ['id' => '1', 'name' => 'habib', 'username' => 'habibur', 'email' => 'email@email.com', 'type' => 'admin', 'password' => '123'],
            ['id' => '2', 'name' => 'xy', 'username' => 'xyx', 'email' => 'xyx@email.com', 'type' => 'admin', 'password' => '123'],
            ['id' => '3', 'name' => 'wx', 'username' => 'wxy', 'email' => 'wxy@email.com', 'type' => 'admin', 'password' => '123'],
        ];
        
    }

}
