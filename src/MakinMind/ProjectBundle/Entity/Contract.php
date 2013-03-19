<?php

namespace MakinMind\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MakinMind\ProjectBundle\Entity\Contract
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MakinMind\ProjectBundle\Entity\ContractRepository")
 */
class Contract
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime $creaDate
     *
     * @ORM\Column(name="creaDate", type="datetime")
     */
    private $creaDate;

    /**
     * @var datetime $signDate
     *
     * @ORM\Column(name="signDate", type="datetime", nullable=true)
     */
    private $signDate;

    /**
     * @var float $amount
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var smallint $status
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="MakinMind\ProjectBundle\Entity\Project")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;

    /**
     * @ORM\ManyToOne(targetEntity="MakinMind\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $worker;

    /**
     * @ORM\OneToOne(targetEntity="MakinMind\ProjectBundle\Entity\ContractTypes", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $standardized;

    /**
     * @ORM\OneToOne(targetEntity="MakinMind\ResourceBundle\Entity\Resource", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $customized;


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
     * Set creaDate
     *
     * @param datetime $creaDate
     */
    public function setCreaDate($creaDate)
    {
        $this->creaDate = $creaDate;
    }

    /**
     * Get creaDate
     *
     * @return datetime 
     */
    public function getCreaDate()
    {
        return $this->creaDate;
    }

    /**
     * Set signDate
     *
     * @param datetime $signDate
     */
    public function setSignDate($signDate)
    {
        $this->signDate = $signDate;
    }

    /**
     * Get signDate
     *
     * @return datetime 
     */
    public function getSignDate()
    {
        return $this->signDate;
    }

    /**
     * Set amount
     *
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set status
     *
     * @param smallint $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return smallint 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set project
     *
     * @param MakinMind\ProjectBundle\Entity\Project $project
     */
    public function setProject(\MakinMind\ProjectBundle\Entity\Project $project)
    {
        $this->project = $project;
    }

    /**
     * Get project
     *
     * @return MakinMind\ProjectBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set worker
     *
     * @param MakinMind\UserBundle\Entity\User $worker
     */
    public function setWorker(\MakinMind\UserBundle\Entity\User $worker)
    {
        $this->worker = $worker;
    }

    /**
     * Get worker
     *
     * @return MakinMind\UserBundle\Entity\User 
     */
    public function getWorker()
    {
        return $this->worker;
    }

    /**
     * Set standardized
     *
     * @param MakinMind\ProjectBundle\Entity\ContractTypes $standardized
     */
    public function setStandardized(\MakinMind\ProjectBundle\Entity\ContractTypes $standardized)
    {
        $this->standardized = $standardized;
    }

    /**
     * Get standardized
     *
     * @return MakinMind\ProjectBundle\Entity\ContractTypes 
     */
    public function getStandardized()
    {
        return $this->standardized;
    }

    /**
     * Set customized
     *
     * @param MakinMind\ResourceBundle\Entity\Resource $customized
     */
    public function setCustomized(\MakinMind\ResourceBundle\Entity\Resource $customized)
    {
        $this->customized = $customized;
    }

    /**
     * Get customized
     *
     * @return MakinMind\ResourceBundle\Entity\Resource 
     */
    public function getCustomized()
    {
        return $this->customized;
    }
}