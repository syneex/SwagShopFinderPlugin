<?php declare(strict_types=1);

namespace SwagShopFinder\Core\Content\ShopFinder;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class ShopFinderEntity extends Entity
{
    use EntityIdTrait;

    /*
     * @var bool
     */
    protected $active;

    /*
     * @var string
     */
    protected $name;

    /*
     * @var string
     */
    protected $street;

    /*
     * @var string
     */
    protected $postCode;

    /*
     * @var string
     */
    protected $city;

    /*
     * @var string|null
     */
    protected $url;

    /*
     * @var string|null
     */
    protected $telephone;

    /*
     * @var string|null
     */
    protected $openTimes;

    /*
     * @var CountryEntity|null
     */
    protected $country;

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active): void
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street): void
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param mixed $postCode
     */
    public function setPostCode($postCode): void
    {
        $this->postCode = $postCode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getOpenTimes()
    {
        return $this->openTimes;
    }

    /**
     * @param mixed $openTimes
     */
    public function setOpenTimes($openTimes): void
    {
        $this->openTimes = $openTimes;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }
}