<?php
namespace Els\Entity;

class CardsContents extends BaseEntity
{
    private ?int $id = null;

    private ?string $cardCategory = null;
    private ?string $cardName = null;
    private ?string $cardLang = null;
    private ?string $cardVersion = null;
    private ?string $cardPretitle = null;
    private ?string $cardTitle = null;
    private ?string $cardText = null;

    private array $cardImg = ['img_source' => null, 'img_alt_text' => null, 'img_as_link' => null];

    private array $cardButtonData = ['url' => null, 'text'=> null];

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return CardsContents
     */
    public function setId(?int $id): CardsContents
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardName(): ?string
    {
        return $this->cardName;
    }

    /**
     * @param string|null $cardName
     * @return CardsContents
     */
    public function setCardName(?string $cardName): CardsContents
    {
        $this->cardName = $cardName;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCardImg(): ?array
    {
        return $this->cardImg;
    }

    /**
     * @param array $cardImg
     * @return CardsContents
     */
    public function setCardImg(array $cardImg): CardsContents
    {
        $this->cardImg  = $cardImg;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getCardLang(): ?string
    {
        return $this->cardLang;
    }

    /**
     * @param string|null $cardLang
     * @return CardsContents
     */
    public function setCardLang(?string $cardLang): CardsContents
    {
        $this->cardLang = $cardLang;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardVersion(): ?string
    {
        return $this->cardVersion;
    }

    /**
     * @param string|null $cardVersion
     * @return CardsContents
     */
    public function setCardVersion(?string $cardVersion): CardsContents
    {
        $this->cardVersion = $cardVersion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardPretitle(): ?string
    {
        return $this->cardPretitle;
    }

    /**
     * @param string|null $cardPretitle
     * @return CardsContents
     */
    public function setCardPretitle(?string $cardPretitle): CardsContents
    {
        $this->cardPretitle = $cardPretitle;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardTitle(): ?string
    {
        return $this->cardTitle;
    }

    /**
     * @param string|null $cardTitle
     * @return CardsContents
     */
    public function setCardTitle(?string $cardTitle): CardsContents
    {
        $this->cardTitle = $cardTitle;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardText(): ?string
    {
        return $this->cardText;
    }

    /**
     * @param string|array|null $cardText
     * @return CardsContents
     */
    public function setCardText(string | array | null $cardText): CardsContents
    {
        $this->cardText = $this->createParagraphs($cardText);
        return $this;
    }

    /**
     * @return array
     */
    public function getCardButtonData(): array
    {
        return $this->cardButtonData;
    }

    /**
     * @param array $cardButtonData
     * @return CardsContents
     */
    public function setCardButtonData(array $cardButtonData): CardsContents
    {
        $this->cardButtonData = $cardButtonData;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardCategory(): ?string
    {
        return $this->cardCategory;
    }

    /**
     * @param string|null $cardCategory
     * @return CardsContents
     */
    public function setCardCategory(?string $cardCategory): CardsContents
    {
        $this->cardCategory = $cardCategory;
        return $this;
    }
}
