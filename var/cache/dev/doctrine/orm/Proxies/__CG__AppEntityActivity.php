<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Activity extends \App\Entity\Activity implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'stock', 'price', 'modifiedPrice', '' . "\0" . 'App\\Entity\\Activity' . "\0" . 'purchaseItems', '' . "\0" . 'App\\Entity\\Activity' . "\0" . 'users', 'id', 'title', 'start', 'end', 'category'];
        }

        return ['__isInitialized__', 'stock', 'price', 'modifiedPrice', '' . "\0" . 'App\\Entity\\Activity' . "\0" . 'purchaseItems', '' . "\0" . 'App\\Entity\\Activity' . "\0" . 'users', 'id', 'title', 'start', 'end', 'category'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Activity $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getStock(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStock', []);

        return parent::getStock();
    }

    /**
     * {@inheritDoc}
     */
    public function setStock(int $stock): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStock', [$stock]);

        return parent::setStock($stock);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(int $price): \App\Entity\Activity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedPrice(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedPrice', []);

        return parent::getModifiedPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceModified(?int $modifiedPrice): \App\Entity\Activity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceModified', [$modifiedPrice]);

        return parent::setPriceModified($modifiedPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getPurchaseItems(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPurchaseItems', []);

        return parent::getPurchaseItems();
    }

    /**
     * {@inheritDoc}
     */
    public function addPurchaseItem(\App\Entity\PurchaseItem $purchaseItem): \App\Entity\Activity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPurchaseItem', [$purchaseItem]);

        return parent::addPurchaseItem($purchaseItem);
    }

    /**
     * {@inheritDoc}
     */
    public function removePurchaseItem(\App\Entity\PurchaseItem $purchaseItem): \App\Entity\Activity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePurchaseItem', [$purchaseItem]);

        return parent::removePurchaseItem($purchaseItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\App\Entity\User $user): \App\Entity\Activity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\App\Entity\User $user): \App\Entity\Activity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getStart(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStart', []);

        return parent::getStart();
    }

    /**
     * {@inheritDoc}
     */
    public function setStart(\DateTimeInterface $start): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStart', [$start]);

        return parent::setStart($start);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnd(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnd', []);

        return parent::getEnd();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnd(\DateTimeInterface $end): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnd', [$end]);

        return parent::setEnd($end);
    }

    /**
     * {@inheritDoc}
     */
    public function getStaffs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStaffs', []);

        return parent::getStaffs();
    }

    /**
     * {@inheritDoc}
     */
    public function addStaff(\App\Entity\Staff $staff): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStaff', [$staff]);

        return parent::addStaff($staff);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStaff(\App\Entity\Staff $staff): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStaff', [$staff]);

        return parent::removeStaff($staff);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassName', []);

        return parent::getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?\App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(?\App\Entity\Category $category): \App\Entity\Calendar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

}
