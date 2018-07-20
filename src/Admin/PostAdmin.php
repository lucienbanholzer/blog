<?php
/**
 * Created by PhpStorm.
 * User: lucien.banholzer
 * Date: 18/07/2018
 * Time: 17:35
 */

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', TextType::class);
        $formMapper->add('subtitle', TextType::class);
        $formMapper->add('intro', TextareaType::class,["attr" => ["class" => "js-tinymce"] ]);
        $formMapper->add('content', TextareaType::class,["attr" => ["class" => "js-tinymce"] ]);
        $formMapper->add('url', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
        $datagridMapper->add('subtitle');
        $datagridMapper->add('intro');
        $datagridMapper->add('content');
        $datagridMapper->add('url');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title');
        $listMapper->addIdentifier('subtitle');
        $listMapper->addIdentifier('intro');
        $listMapper->addIdentifier('content');
        $listMapper->addIdentifier('url');
    }
}