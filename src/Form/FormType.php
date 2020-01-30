<?php

namespace App\Form;

use App\Entity\Packages;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('affiliate', RadioType::class, [])
            ->add('travel', Radiotype::class)
            ->add('eurozone',RadioType::class)
            ->add('earnings', RadioType::class)
            ->add('overdraft_loan', RadioType::class)
            ->add('insurance', RadioType::class)
            ->add('scale', RadioType::class)
            ->add('type', RadioType::class)
            ->add('withdrawal', RadioType::class)
            ->add('name', TextType::class, [
                'attr' => [
                    'placeholder' => 'Répondez ici...',
                ],
                'required'   => false,
            ])
            ->add('firstname', TextType::class,[
                'attr' => [
                    'placeholder' => 'Répondez ici...',
                ],
                'required'   => false,
            ])
            ->add('age', RadioType::class)
            ->add('email', TextType::class, [
                'attr' => [
                    'placeholder' => 'Répondez ici...',
                ],
                'required'   => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Packages::class,
        ]);
    }
}
