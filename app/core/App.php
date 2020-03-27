<?php

class App {
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if( isset($_GET['url']) ){
            $url = rtrim($_GET['url'], '/');                //untuk menghapus '/' di akhir url.
            $url = filter_var($url, FILTER_SANITIZE_URL);   //bersihkan url dari karakter-karakter aneh
            $url = explode('/', $url);                      //pecah url dengan delimiter '/'
            return $url;
        }
    }
}