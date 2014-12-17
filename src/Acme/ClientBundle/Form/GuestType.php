<?php

namespace Acme\ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GuestType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('guestFirstName')
            ->add('guestLastName')
            ->add('gusetGender')
            ->add('guestCar')
            ->add('gusetCarName')
            ->add('guestCarCompany')
            ->add('gusetCompany')
            ->add('guestCompanyName')
            ->add('guestMobileNo')
            ->add('guestPhoneNo')
            ->add('gusetRegisterDate')
            ->add('guestLoginName')
            ->add('guestLoginDate')
            ->add('guestPassword')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\ClientBundle\Entity\Guest'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_clientbundle_guest';
    }
}
