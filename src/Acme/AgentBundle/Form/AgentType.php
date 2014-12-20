<?php

namespace Acme\AgentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;

class AgentType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('agentId')
                ->add('agentFirstname')
                ->add('agentLastname')
                ->add('agentLastextra')
                ->add('agentLastone')
                ->add('agentEmail')
                ->add('agentpPassword', 'password')
                ->add('agentMobile', 'text', array(
                    'max_length' => 10,
                ))
                ->add('agentPhone', 'text', array(
                ))
                ->add('agentCar', 'choice', array(
                    'choices' => array('m' => 'Mercedes', 'b' => 'bmw', 'a' => 'Audi'),
                ))
                ->add('agentGender', 'choice', array(
                    'choices' => array('m' => 'Male', 'f' => 'Female'),
                ))
                ->add('agentCarCompany', 'choice', array(
                    'choices' => array(
                        'b' => 'BMW',
                        'm' => 'mercedes',
                        'a' => 'Audi'
                    )
                ))
                ->add('agentWebsite', 'language')
                ->add('agentCity', 'country')
//                ->add('agentCity', 'language', array('empty_data' => 'empty'))
                ->add('agentPostcode')
                ->add('agentAddress1', 'text', array(
//                    'divisor' => 100,
//                    'currency' => 826,
                ))
                ->add('agentAddress2', 'textarea', array(
                    'attr' => array('class' => 'tinymce'),
                    'invalid_message' => 'You entered an invalid value - it should include %num% letters',
                    'invalid_message_parameters' => array('%num%' => 6),
                ))
                ->add('agentRegistrationDate')
                ->add('agentLoginDate')
                ->add('agentAge')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\AgentBundle\Entity\Agent'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'acme_agentbundle_agent';
    }

}
