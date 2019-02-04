<?php

class Admin extends DatabaseObject {
    static protected $table_name = "admins";
    static protected $db_columns = ['id', 'first_name', 'last_name', 'email', 'username', 'hashed_password'];


    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $username;
    protected $hashed_password;
    public $password;
    public $confirm_password;

    public function __construct($args=[]) {
        $this->id = $args['id'] ?? NULL;
        $this->first_name = $args['first_name'] ?? NULL;
        $this->last_name = $args['last_name'] ?? NULL;
        $this->email = $args['email'] ?? NULL;
        $this->username = $args['username'] ?? NULL;
        $this->password = $args['password'] ?? NULL;
        $this->confirm_password = $args['confirm_password'] ?? NULL;
     }

     public function get_name() {
        return $this->first_name . " " . $this->last_name;
     }


}

?>