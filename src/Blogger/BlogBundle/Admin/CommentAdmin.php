<?php
/**
 * Created by PhpStorm.
 * User: yury
 * Date: 10.05.15
 * Time: 14:35
 */

namespace Blogger\BlogBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CommentAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('user')
            ->add('comment')
            ->add('approved')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('user')
            ->add('approved')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('comment')
            ->add('blog', 'entity', array('class' => 'Blogger\BlogBundle\Entity\Post'))
            ->add('user', 'entity', array('class' => 'Blogger\BlogBundle\Entity\User'))
            ->add('approved')
        ;
    }
}