<?php
    class cyclrConnectorStore {
        private $apiDomain = '';

        function __construct(){
        }

        public function getConnectors($count){
          return $this->callApi($this->apiDomain.'/api/connectorstore?pagesize='.intval($count));
        }

        public function getConnector($id){
          return $this->callApi($this->apiDomain.'/api/connectorstore/'.intval($id));
        }

        private function callApi($url) {
            $curl = curl_init();
            curl_setopt($url, CURLOPT_GET, 1);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($curl);


            if(curl_error($curl)){
               echo curl_error($curl);
            }

            curl_close($curl);
            return json_decode($result);
        }
    }
?>
