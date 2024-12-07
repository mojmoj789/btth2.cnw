<?php
    class users {
        private $id;
        private $username;
        private $password;
        private $role;

        /**
         * @param $id
         * @param $username
         * @param $password
         * @param $role
         */
        public function __construct($id, $username, $password, $role)
        {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id): void
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getUsername()
        {
            return $this->username;
        }

        /**
         * @param mixed $username
         */
        public function setUsername($username): void
        {
            $this->username = $username;
        }

        /**
         * @return mixed
         */
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * @param mixed $password
         */
        public function setPassword($password): void
        {
            $this->password = $password;
        }

        /**
         * @return mixed
         */
        public function getRole()
        {
            return $this->role;
        }

        /**
         * @param mixed $role
         */
        public function setRole($role): void
        {
            $this->role = $role;
        }



    }