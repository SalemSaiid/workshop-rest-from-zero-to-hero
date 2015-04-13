<?php

namespace Acme\HelloBundle\Model;

use JMS\Serializer\Annotation\XmlRoot;

/** @XmlRoot("hello") */
class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}