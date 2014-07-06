<?php

namespace Intranet\OsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reparo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Intranet\OsBundle\Entity\ReparoRepository")
 */
class Reparo
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
     * @ORM\Column(name="servico", type="string", length=255)
     */
    private $servico;

    /**
     * @var string
     *
     * @ORM\Column(name="duracao", type="string", length=255)
     */
    private $duracao;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal")
     */
    private $valor;


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
     * Set servico
     *
     * @param string $servico
     * @return Reparo
     */
    public function setServico($servico)
    {
        $this->servico = $servico;

        return $this;
    }

    /**
     * Get servico
     *
     * @return string 
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * Set duracao
     *
     * @param string $duracao
     * @return Reparo
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

        return $this;
    }

    /**
     * Get duracao
     *
     * @return string 
     */
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Reparo
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }
}
