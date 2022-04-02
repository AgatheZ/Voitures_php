<?php

namespace App\Form;

use App\Entity\Voiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Client;
use App\Entity\Parking;

class VoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('immatriculation')
            ->add('marque')
            ->add('carburant')
            ->add('nombrePlaces')
            ->add('Client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => 'nom',
            ])
            ->add('parking', EntityType::class, [
                'class' => Parking::class,
                'choice_label' => 'numParking',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}
