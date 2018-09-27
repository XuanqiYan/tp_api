<?php
namespace app\common;

class Aes {

    private $key = null;
   
    private $iv=null;
    
    public function __construct() {
		$this->key = 'oScGU3fj8m/tDCyvsbEhwI91M1FcwvQqWuFpPoDHlFk='; 
		$this->iv = 'w2wJCnctEG09danPPI7SxQ==';
      
    }


    public function encrypt($sing) {
       	$encrypted = openssl_encrypt($sing, 'aes-256-cbc', base64_decode($this->key),OPENSSL_RAW_DATA, base64_decode($this->iv));
        return base64_encode($encrypted);

    }
   
   
    public function decrypt($sing) {
       	$encrypted = base64_decode($sing);
		$decrypted = openssl_decrypt($encrypted, 'aes-256-cbc', base64_decode($this->key), OPENSSL_RAW_DATA, base64_decode($this->iv));

        return $decrypted;
    }

}

?>
