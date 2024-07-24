<?php
namespace Els\Manager\ContactApiManager;

use GuzzleHttp\Client;
use Els\Entity\ContactInfos;
use Els\Manager\ApiBaseManager;
use Els\Traits\Hydrator;
use GuzzleHttp\Exception\GuzzleException;

class ContactApiManager extends ApiBaseManager
{
    use Hydrator;

    /**
     * @return array|null
     * @throws GuzzleException
     */
    public function getSectionsFromUrl(): ?array
    {
        $client = new Client([]);
        $sectionsText = [];
        if($this->url && $this->method) {
            $response = $client->request($this->method, $this->url);
            $request = json_decode($response->getBody()->getContents(), true);
            $datas = $request;

            if(is_array($datas)) {

                if(array_key_exists('error', $datas)) {
                    return ["error" => $datas['message']];
                }

                foreach ($datas as $data) {
                    $sectionsText[] = new ContactInfos($data);
                }
            }

            return $sectionsText;
        } else {
            return $sectionsText;
        }

    }

}
