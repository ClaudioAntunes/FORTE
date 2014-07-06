<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// src/Intranet/ContaBundle/Admin/ClienteAdmin.php

namespace Intranet\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ClienteAdmin extends Admin
{
    // Campos do bloco Criar e Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nome')#, 'text', array('label' => 'Nome'))
            ->add('empresa')#, 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('email') //if no type is specified, SonataAdminBundle tries to guess it
            ->add('endereco')#, 'text', array('label' => 'Rua e Nº'))
            ->add('bairro')#, 'text', array('label' => 'Bairro'))
            ->add('estado')#, 'text', array('label' => 'Estado'))
            ->add('tel1')#, 'text', array('label' => 'Telefone 1'))
            ->add('tel2')#, 'text', array('label' => 'Telefone 2'))
            ->add('site')#, 'text', array('label' => 'Site'))
                
                
        ;
    }

    // Campos para aparecer no filtro de pesquisa:
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nome')#, 'text', array('label' => 'Nome'))
            ->add('empresa')#, 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('email') //if no type is specified, SonataAdminBundle tries to guess it
            ->add('bairro')#, 'text', array('label' => 'Bairro'))
            ->add('estado')#, 'text', array('label' => 'Estado'))
            ->add('site')#, 'text', array('label' => 'Site'))
        ;
    }

    // Campos para aparecer na lista:
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nome')#, 'text', array('label' => 'Nome'))
            ->add('empresa')#, 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('email') //if no type is specified, SonataAdminBundle tries to guess it
            ->add('tel1')#, 'text', array('label' => 'Telefone 1'))

        ;
    }
}