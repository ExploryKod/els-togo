<?php
namespace Els\Manager\CardsContentsManager;

use Els\Entity\CardsContents;
use GuzzleHttp\Client;
use Els\Manager\ApiBaseManager;
use Els\Traits\Hydrator;

class CardsContentsApiManager extends ApiBaseManager
{
    use Hydrator;

    /**
     * @param string $url
     * @param string $method
     * @return array|null
     */
    public function getSectionsFromUrl(): ?array
    {
        $client = new Client([]);
        $sectionsCardsText = [];
        if($this->url && $this->method) {
            $response = $client->request($this->method, $this->url);
            $request = json_decode($response->getBody()->getContents(), true);
            $datas = $request;
            $sectionsCardsText[] = new CardsContents($datas);

            return $sectionsCardsText;
        } else {
            return $sectionsCardsText;
        }
    }
}
