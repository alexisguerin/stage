<?php

namespace App\Form;

use App\Entity\DemandeCSE;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CSEType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nature')
            ->add('email')
            ->add('editeur')
            /* ->add('datecreation', DateType::class, [
                'widget'=>'single_text',
            ]) */
            ->add('contenu')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DemandeCSE::class,
        ]);
    }
}
