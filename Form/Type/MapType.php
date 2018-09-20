<?php declare(strict_types=1);

namespace Caldera\MapTypeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MapType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('latitude', NumberType::class)
            ->add('longitude', NumberType::class);
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
