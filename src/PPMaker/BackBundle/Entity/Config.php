<?php

namespace PPMaker\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPMaker\BackBundle\Entity\ConfigRepository")
 */
class Config
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bundleName", type="string", length=255)
     */
    private $bundleName;

    /**
     * @var string
     *
     * @ORM\Column(name="bundleIcon", type="string", length=255)
     */
    private $bundleIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="bundleFront", type="string", length=255)
     */
    private $bundleFront;

    /**
     * @var string
     *
     * @ORM\Column(name="bundleBack", type="string", length=255)
     */
    private $bundleBack;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bundleActif", type="boolean")
     */
    private $bundleActif;

    /**
     * @var integer
     *
     * @ORM\Column(name="bundleNavOrder", type="integer")
     */
    private $bundleNavOrder;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bundleName
     *
     * @param string $bundleName
     * @return Config
     */
    public function setBundleName($bundleName)
    {
        $this->bundleName = $bundleName;

        return $this;
    }

    /**
     * Get bundleName
     *
     * @return string 
     */
    public function getBundleName()
    {
        return $this->bundleName;
    }

    /**
     * Set bundleIcon
     *
     * @param string $bundleIcon
     * @return Config
     */
    public function setBundleIcon($bundleIcon)
    {
        $this->bundleIcon = $bundleIcon;

        return $this;
    }

    /**
     * Get bundleIcon
     *
     * @return string 
     */
    public function getBundleIcon()
    {
        return $this->bundleIcon;
    }

    /**
     * Set bundleFront
     *
     * @param string $bundleFront
     * @return Config
     */
    public function setBundleFront($bundleFront)
    {
        $this->bundleFront = $bundleFront;

        return $this;
    }

    /**
     * Get bundleFront
     *
     * @return string 
     */
    public function getBundleFront()
    {
        return $this->bundleFront;
    }

    /**
     * Set bundleBack
     *
     * @param string $bundleBack
     * @return Config
     */
    public function setBundleBack($bundleBack)
    {
        $this->bundleBack = $bundleBack;

        return $this;
    }

    /**
     * Get bundleBack
     *
     * @return string 
     */
    public function getBundleBack()
    {
        return $this->bundleBack;
    }

    /**
     * Set bundleActif
     *
     * @param boolean $bundleActif
     * @return Config
     */
    public function setBundleActif($bundleActif)
    {
        $this->bundleActif = $bundleActif;

        return $this;
    }

    /**
     * Get bundleActif
     *
     * @return boolean 
     */
    public function getBundleActif()
    {
        return $this->bundleActif;
    }

    /**
     * Set bundleNavOrder
     *
     * @param integer $bundleNavOrder
     * @return Config
     */
    public function setBundleNavOrder($bundleNavOrder)
    {
        $this->bundleNavOrder = $bundleNavOrder;

        return $this;
    }

    /**
     * Get bundleNavOrder
     *
     * @return integer 
     */
    public function getBundleNavOrder()
    {
        return $this->bundleNavOrder;
    }
}
