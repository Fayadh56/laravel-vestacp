<?php

namespace Gwiddle\LaravelVestaCP;

class VestaCP
{
    public function __construct()
    {
        $this->cp_hostname = getenv('VESTACP_HOSTNAME');
        $this->cp_username = getenv('VESTACP_USERNAME');
        $this->cp_password = getenv('VESTACP_PASSWORD');
    }

    public function call($command, $arguments)
    {
        if($this->cp_hostname == '' or $this->cp_hostname == 'null' or $this->cp_username == '' or $this->cp_username == 'null' or $this->cp_password == '' or $this->cp_password == 'null') {
            return(-1);
        }

        $postvars = array(
            'user' => $this->cp_username,
            'password' => $this->cp_password,
            'returncode' => "yes",
            'cmd' => $command
        );

        $index = 1;
        foreach($arguments as $argument) {
            $postvars["arg" . $index] = $argument;
            $index += 1;
        }

        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->cp_hostname . ':8083/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);
        
        return $answer;

    }

    public function isSuccessCode($code){
        if($code == 0 or $code == -1){
            return "true";
        }  else {
            return "false";
        }
    }
}