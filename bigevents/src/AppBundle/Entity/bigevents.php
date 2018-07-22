<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bigevents
 *
 * @ORM\Table(name="bigevents")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\bigeventsRepository")
 */
class bigevents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="eventName", type="string", length=255, nullable=true)
     */
    private $eventName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eventDate", type="datetime", nullable=true)
     */
    private $eventDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eventDateEnd", type="datetime", nullable=true)
     */
    private $eventDateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="eventDesc", type="string", length=255, nullable=true)
     */
    private $eventDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="eventImg", type="string", length=255, nullable=true)
     */
    private $eventImg;

    /**
     * @var int
     *
     * @ORM\Column(name="eventCapacity", type="integer", nullable=true)
     */
    private $eventCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="eventMail", type="string", length=255, nullable=true)
     */
    private $eventMail;

    /**
     * @var string
     *
     * @ORM\Column(name="eventPhone", type="string", length=255, nullable=true)
     */
    private $eventPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="eventUrl", type="string", length=255, nullable=true)
     */
    private $eventUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="eventType", type="string", length=255, nullable=true)
     */
    private $eventType;

    /**
     * @var string
     *
     * @ORM\Column(name="eventStreet", type="string", length=255, nullable=true)
     */
    private $eventStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="eventStreetN", type="string", length=255, nullable=true)
     */
    private $eventStreetN;

    /**
     * @var string
     *
     * @ORM\Column(name="eventZip", type="string", length=255, nullable=true)
     */
    private $eventZip;

    /**
     * @var string
     *
     * @ORM\Column(name="eventCity", type="string", length=255, nullable=true)
     */
    private $eventCity;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eventName
     *
     * @param string $eventName
     *
     * @return bigevents
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     *
     * @return bigevents
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set eventDateEnd
     *
     * @param \DateTime $eventDateEnd
     *
     * @return bigevents
     */
    public function setEventDateEnd($eventDateEnd)
    {
        $this->eventDateEnd = $eventDateEnd;

        return $this;
    }

    /**
     * Get eventDateEnd
     *
     * @return \DateTime
     */
    public function getEventDateEnd()
    {
        return $this->eventDateEnd;
    }

    /**
     * Set eventDesc
     *
     * @param string $eventDesc
     *
     * @return bigevents
     */
    public function setEventDesc($eventDesc)
    {
        $this->eventDesc = $eventDesc;

        return $this;
    }

    /**
     * Get eventDesc
     *
     * @return string
     */
    public function getEventDesc()
    {
        return $this->eventDesc;
    }

    /**
     * Set eventImg
     *
     * @param string $eventImg
     *
     * @return bigevents
     */
    public function setEventImg($eventImg)
    {
        $this->eventImg = $eventImg;

        return $this;
    }

    /**
     * Get eventImg
     *
     * @return string
     */
    public function getEventImg()
    {
        return $this->eventImg;
    }

    /**
     * Set eventCapacity
     *
     * @param integer $eventCapacity
     *
     * @return bigevents
     */
    public function setEventCapacity($eventCapacity)
    {
        $this->eventCapacity = $eventCapacity;

        return $this;
    }

    /**
     * Get eventCapacity
     *
     * @return int
     */
    public function getEventCapacity()
    {
        return $this->eventCapacity;
    }

    /**
     * Set eventMail
     *
     * @param string $eventMail
     *
     * @return bigevents
     */
    public function setEventMail($eventMail)
    {
        $this->eventMail = $eventMail;

        return $this;
    }

    /**
     * Get eventMail
     *
     * @return string
     */
    public function getEventMail()
    {
        return $this->eventMail;
    }

    /**
     * Set eventPhone
     *
     * @param string $eventPhone
     *
     * @return bigevents
     */
    public function setEventPhone($eventPhone)
    {
        $this->eventPhone = $eventPhone;

        return $this;
    }

    /**
     * Get eventPhone
     *
     * @return string
     */
    public function getEventPhone()
    {
        return $this->eventPhone;
    }

    /**
     * Set eventUrl
     *
     * @param string $eventUrl
     *
     * @return bigevents
     */
    public function setEventUrl($eventUrl)
    {
        $this->eventUrl = $eventUrl;

        return $this;
    }

    /**
     * Get eventUrl
     *
     * @return string
     */
    public function getEventUrl()
    {
        return $this->eventUrl;
    }

    /**
     * Set eventType
     *
     * @param string $eventType
     *
     * @return bigevents
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set eventStreet
     *
     * @param string $eventStreet
     *
     * @return bigevents
     */
    public function setEventStreet($eventStreet)
    {
        $this->eventStreet = $eventStreet;

        return $this;
    }

    /**
     * Get eventStreet
     *
     * @return string
     */
    public function getEventStreet()
    {
        return $this->eventStreet;
    }

    /**
     * Set eventStreetN
     *
     * @param string $eventStreetN
     *
     * @return bigevents
     */
    public function setEventStreetN($eventStreetN)
    {
        $this->eventStreetN = $eventStreetN;

        return $this;
    }

    /**
     * Get eventStreetN
     *
     * @return string
     */
    public function getEventStreetN()
    {
        return $this->eventStreetN;
    }

    /**
     * Set eventZip
     *
     * @param string $eventZip
     *
     * @return bigevents
     */
    public function setEventZip($eventZip)
    {
        $this->eventZip = $eventZip;

        return $this;
    }

    /**
     * Get eventZip
     *
     * @return string
     */
    public function getEventZip()
    {
        return $this->eventZip;
    }

    /**
     * Set eventCity
     *
     * @param string $eventCity
     *
     * @return bigevents
     */
    public function setEventCity($eventCity)
    {
        $this->eventCity = $eventCity;

        return $this;
    }

    /**
     * Get eventCity
     *
     * @return string
     */
    public function getEventCity()
    {
        return $this->eventCity;
    }
}

