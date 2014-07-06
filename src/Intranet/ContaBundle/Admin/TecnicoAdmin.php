<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// src/Intranet/ContaBundle/Admin/TecnicoAdmin.php

namespace Intranet\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TecnicoAdmin extends Admin
{
    // Campos do bloco Criar e Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nome', 'text', array('label' => 'Nome'))
            ->add('email')#, 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('tel') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Campos para aparecer no filtro de pesquisa:
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nome')
            ->add('email')
            ->add('tel')
        ;
    }

    // Campos para aparecer na lista:
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nome')
            ->add('email')
            ->add('tel')
        ;
    }
}