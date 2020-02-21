<?php
    namespace Config;
    class Response{
        public static function response(){
            $instance = new static();
            return $instance;
        }

        public function message($status, $message, $data = null){
            header('Content-Type: application/json; charset=utf-8');
            http_response_code($status);
            echo json_encode(
                array(
                    'status' => $status,
                    'message' => $message,
                    'data'   => $data
                )
            );
        }
    }
?>