<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// src/Intranet/ServicoBundle/Admin/ContratoAdmin.php

namespace Intranet\ServicoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ContratoAdmin extends Admin
{
    // Campos do bloco Criar e Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('cliente', 'entity', array('class' => 'Intranet\ContaBundle\Entity\Cliente'))
            ->add('responsavel')#, 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('endereco') //if no type is specified, SonataAdminBundle tries to guess it
            ->add('bairro')#, 'text', array('label' => 'Rua e Nº'))
            ->add('tel1')#, 'text', array('label' => 'Bairro'))
            ->add('tel2')#, 'text', array('label' => 'Estado'))
            ->add('email')#, 'text', array('label' => 'Telefone 1'))
            ->add('site')#, 'text', array('label' => 'Telefone 2'))
            ->add('tipo')#, 'text', array('label' => 'Site'))
            ->add('pcs')#, 'text', array('label' => 'Site'))
            ->add('notes')#, 'text', array('label' => 'Site'))
            ->add('dataini')#, 'text', array('label' => 'Site'))
            ->add('datafim')#, 'text', array('label' => 'Site'))
            ->add('valortotal')#, 'currency', array('currency' => $this->currencyDetector->getCurrency()->getLabel()))
            ->add('vencimento')#, 'text', array('label' => 'Site'))
                
                
        ;
    }

    // Campos para aparecer no filtro de pesquisa:
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('cliente')#, 'text', array('label' => 'Nome'))
            ->add('tipo')#, 'text', array('label' => 'Site'))
            ->add('valortotal')#, 'text', array('label' => 'Site'))
            ->add('vencimento')#, 'text', array('label' => 'Site'))
        ;
    }

    // Campos para aparecer na lista:
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('cliente')                
            #->add('cliente')#, 'text', array('label' => 'Nome'))
            ->add('tel1')#, 'text', array('label' => 'Bairro'))
            ->add('tipo')#, 'text', array('label' => 'Site'))
            ->add('pcs')#, 'text', array('label' => 'Site'))
            ->add('notes')#, 'text', array('label' => 'Site'))
            ->add('dataini')#, 'text', array('label' => 'Site'))
            ->add('valortotal')#, 'text', array('label' => 'Site'))
            ->add('vencimento')#, 'text', array('label' => 'Site'))
            ->add('_action', 'actions', array(
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))

        ;
    }
}