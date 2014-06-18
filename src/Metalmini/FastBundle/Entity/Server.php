<?php

namespace Metalmini\FastBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Server
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Metalmini\FastBundle\Entity\ServerRepository")
 */
class Server
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="rootpasswd", type="string", length=255)
     */
    private $rootpasswd;

    /**
     * @var string
     *
     * @ORM\Column(name="sudouser", type="string", length=255)
     */
    private $sudouser;

    /**
     * @var string
     *
     * @ORM\Column(name="sudopasswd", type="string", length=255)
     */
    private $sudopasswd;

    /**
     * @var string
     *
     * @ORM\Column(name="mysqlroot", type="string", length=255)
     */
    private $mysqlroot;

    /**
     * @var string
     *
     * @ORM\Column(name="mysqlrootpasswd", type="string", length=255)
     */
    private $mysqlrootpasswd;

    /**
     * @var array
     *
     * @ORM\Column(name="altnames", type="json_array")
     */
    private $altnames;


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
     * Set name
     *
     * @param string $name
     * @return Server
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Server
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set rootpasswd
     *
     * @param string $rootpasswd
     * @return Server
     */
    public function setRootpasswd($rootpasswd)
    {
        $this->rootpasswd = $rootpasswd;

        return $this;
    }

    /**
     * Get rootpasswd
     *
     * @return string 
     */
    public function getRootpasswd()
    {
        return $this->rootpasswd;
    }

    /**
     * Set sudouser
     *
     * @param string $sudouser
     * @return Server
     */
    public function setSudouser($sudouser)
    {
        $this->sudouser = $sudouser;

        return $this;
    }

    /**
     * Get sudouser
     *
     * @return string 
     */
    public function getSudouser()
    {
        return $this->sudouser;
    }

    /**
     * Set sudopasswd
     *
     * @param string $sudopasswd
     * @return Server
     */
    public function setSudopasswd($sudopasswd)
    {
        $this->sudopasswd = $sudopasswd;

        return $this;
    }

    /**
     * Get sudopasswd
     *
     * @return string 
     */
    public function getSudopasswd()
    {
        return $this->sudopasswd;
    }

    /**
     * Set mysqlroot
     *
     * @param string $mysqlroot
     * @return Server
     */
    public function setMysqlroot($mysqlroot)
    {
        $this->mysqlroot = $mysqlroot;

        return $this;
    }

    /**
     * Get mysqlroot
     *
     * @return string 
     */
    public function getMysqlroot()
    {
        return $this->mysqlroot;
    }

    /**
     * Set mysqlrootpasswd
     *
     * @param string $mysqlrootpasswd
     * @return Server
     */
    public function setMysqlrootpasswd($mysqlrootpasswd)
    {
        $this->mysqlrootpasswd = $mysqlrootpasswd;

        return $this;
    }

    /**
     * Get mysqlrootpasswd
     *
     * @return string 
     */
    public function getMysqlrootpasswd()
    {
        return $this->mysqlrootpasswd;
    }

    /**
     * Set altnames
     *
     * @param array $altnames
     * @return Server
     */
    public function setAltnames($altnames)
    {
        $this->altnames = $altnames;

        return $this;
    }

    /**
     * Get altnames
     *
     * @return array 
     */
    public function getAltnames()
    {
        return $this->altnames;
    }
}
