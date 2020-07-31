<?php

namespace App\Form;

use App\Entity\DemandeComptable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComptaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomdemandeur')
            ->add('maildemandeur')
            ->add('objet')
            ->add('contenu')
            /* ->add('datedemande') */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DemandeComptable::class,
        ]);
    }
}
