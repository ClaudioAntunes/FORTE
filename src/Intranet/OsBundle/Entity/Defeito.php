<?php

namespace Intranet\OsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Defeito
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Intranet\OsBundle\Entity\DefeitoRepository")
 */
class Defeito
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
     * @ORM\Column(name="reclamacao", type="string", length=255)
     */
    private $reclamacao;


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
     * Set reclamacao
     *
     * @param string $reclamacao
     * @return Defeito
     */
    public function setReclamacao($reclamacao)
    {
        $this->reclamacao = $reclamacao;

        return $this;
    }

    /**
     * Get reclamacao
     *
     * @return string 
     */
    public function getReclamacao()
    {
        return $this->reclamacao;
    }
}
