<?php

namespace BlogBundle\Form;


use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class PostType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

//        $userId = Controller::get('security.token_storage')->getToken()->getUser()->getId();


        $builder
            ->add('title', TextType::class, array('attr' => array('autofocus' => true), 'label' => 'Title',))
            ->add('postcontent', TextareaType::class, array('attr' => array('rows' => 15), 'label' => 'Content',))
            ->add('category', EntityType::class, array('class' => 'BlogBundle:Category', 'choice_label' => 'name', 'expanded' => false, 'multiple' => false));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BlogBundle\Entity\Post',
        ));
    }

}