<?php

namespace Rotteny\BrasilApi;

class CepV2 extends BaseClass {
    
    public static function get(string $cep) : object {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get(self::BASE_URL . $cep);
            return json_decode($response->getBody());
        } catch (\Throwable $th) {
            die($th->getMessage());
        }

    }
}