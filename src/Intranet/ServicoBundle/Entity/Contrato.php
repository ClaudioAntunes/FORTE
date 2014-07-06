<?php

namespace Intranet\ServicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrato
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Intranet\ServicoBundle\Entity\ContratoRepository")
 */
class Contrato
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
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="responsavel", type="string", length=255)
     */
    private $responsavel;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=255)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=255)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=50)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=50)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="pcs", type="string", length=10)
     */
    private $pcs;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=10)
     */
    private $notes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataini", type="date")
     */
    private $dataini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datafim", type="date")
     */
    private $datafim;

    /**
     * @var string
     *
     * @ORM\Column(name="valortotal", type="decimal")
     */
    private $valortotal;

    /**
     * @var string
     *
     * @ORM\Column(name="vencimento", type="string", length=50)
     */
    private $vencimento;


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
     * Set cliente
     *
     * @param string $cliente
     * @return Contrato
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set responsavel
     *
     * @param string $responsavel
     * @return Contrato
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get responsavel
     *
     * @return string 
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return Contrato
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     * @return Contrato
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return string 
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     * @return Contrato
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string 
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     * @return Contrato
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string 
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contrato
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Contrato
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Contrato
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set pcs
     *
     * @param string $pcs
     * @return Contrato
     */
    public function setPcs($pcs)
    {
        $this->pcs = $pcs;

        return $this;
    }

    /**
     * Get pcs
     *
     * @return string 
     */
    public function getPcs()
    {
        return $this->pcs;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Contrato
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set dataini
     *
     * @param \DateTime $dataini
     * @return Contrato
     */
    public function setDataini($dataini)
    {
        $this->dataini = $dataini;

        return $this;
    }

    /**
     * Get dataini
     *
     * @return \DateTime 
     */
    public function getDataini()
    {
        return $this->dataini;
    }

    /**
     * Set datafim
     *
     * @param \DateTime $datafim
     * @return Contrato
     */
    public function setDatafim($datafim)
    {
        $this->datafim = $datafim;

        return $this;
    }

    /**
     * Get datafim
     *
     * @return \DateTime 
     */
    public function getDatafim()
    {
        return $this->datafim;
    }

    /**
     * Set valortotal
     *
     * @param string $valortotal
     * @return Contrato
     */
    public function setValortotal($valortotal)
    {
        $this->valortotal = $valortotal;

        return $this;
    }

    /**
     * Get valortotal
     *
     * @return string 
     */
    public function getValortotal()
    {
        return $this->valortotal;
    }

    /**
     * Set vencimento
     *
     * @param string $vencimento
     * @return Contrato
     */
    public function setVencimento($vencimento)
    {
        $this->vencimento = $vencimento;

        return $this;
    }

    /**
     * Get vencimento
     *
     * @return string 
     */
    public function getVencimento()
    {
        return $this->vencimento;
    }
}
