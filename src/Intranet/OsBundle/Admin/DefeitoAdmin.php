<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// src/Intranet/OsBundle/Admin/DefeitoAdmin.php

namespace Intranet\OsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class DefeitoAdmin extends Admin
{
    // Campos do bloco Criar e Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('reclamacao') #, 'text', array('label' => 'Post Title'))
            #->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            #->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Campos para aparecer no filtro de pesquisa:
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('reclamacao')
            #->add('author')
        ;
    }

    // Campos para aparecer na lista:
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('reclamacao')
            #->add('slug')
            #->add('author')
        ;
    }
}