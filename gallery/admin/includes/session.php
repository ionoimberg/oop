<?php


    class Session {

        private  $signed_in = false;
        public $user_id;

        public function __construct()
        {
            session_start();
            $this->check_the_login();

        }


        private function check_the_login() {

            if(isset($_SESSION['id'])) {

                $this->user_id = $_SESSION['id'];
                $this->signed_in = true;

            } else {

                unset($this->user_id);
                $this->signed_in = false;

            }
        }


        public function is_signed_in()
        {
            return $this->signed_in;
        }

        public function login($user) {

            if($user) {

                $this->user_id = $_SESSION['id'] = $user->id;
                $this->signed_in = true;

            }
        }


        public function logout() {

            unset($_SESSION['id']);
            unset($this->user_id);
            $this->signed_in = false;
        }
    }


$session = new Session();









