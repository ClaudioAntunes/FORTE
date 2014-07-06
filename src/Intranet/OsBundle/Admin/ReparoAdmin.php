<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// src/Intranet/OsBundle/Admin/ReparoAdmin.php

namespace Intranet\OsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ReparoAdmin extends Admin
{
    // Campos do bloco Criar e Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('servico', 'text', array('label' => 'Serviço'))
            ->add('duracao') #, 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('valor') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Campos para aparecer no filtro de pesquisa:
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('servico')
            ->add('duracao')
            ->add('valor')
        ;
    }

    // Campos para aparecer na lista:
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('servico')
            ->add('duracao')
            ->add('valor')
        ;
    }
}