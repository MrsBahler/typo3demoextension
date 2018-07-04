<?php

namespace BenediktSeurig\ListEverything\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Listitem extends AbstractEntity
{

    /**
     * The name of the listitem
     *
     * @var string
     **/
    protected $name = '';

    /**
     * The description of the listitem
     *
     * @var string
     **/
    protected $description = '';

    /**
     * The listnumber in the store inventory
     *
     * @var int
     **/
    protected $listnumber = 0;

    /**
     * Listitem constructor.
     *
     * @param string $name
     * @param string $description
     * @param int $listnumber
     */
    public function __construct($name = '', $description = '', $listnumber = 0)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setListnumber($listnumber);
    }

    /**
     * Sets the name of the listitem
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Gets the name of the listitem
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the description of the listitem
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Gets the description of the listitem
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the listnumber in the store inventory of the listitem
     *
     * @param int $listnumber
     */
    public function setListnumber(int $listnumber)
    {
        $this->listnumber = $listnumber;
    }

    /**
     * Gets the listnumber in the store inventory of the listitem
     *
     * @return int
     */
    public function getListnumber()
    {
        return $this->listnumber;
    }

}
