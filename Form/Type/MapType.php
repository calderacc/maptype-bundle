<?php declare(strict_types=1);

namespace Caldera\MapTypeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MapType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        var_dump($options);
        die;
        $builder
            ->add('latitude', NumberType::class, [
                'data' => $options['latitude'],
            ])
            ->add('longitude', NumberType::class, [
                'data' => $options['longitude'],
            ]);
    }

    public function getParent(): string
    {
        return FormType::class;
    }

    public function getName(): string
    {
        return 'map';
    }

    public function getBlockPrefix(): string
    {
        return 'map';
    }
}
