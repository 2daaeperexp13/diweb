<?php

namespace App\Form;

use App\Entity\Producto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('precio')
            ->add('stock')
            ->add('categoria')
            ->add('tipoProducto')
            ->add('imgProductos',FileType::class,[
                'mapped'=>false,
                'multiple'=>true,
                'label'=>'Imágenes del producto',
                'attr'=>['accept' => 'image/*',
                        'multiple' => 'multiple',
                        'data-show-upload'=>'true', 
                        'data-show-caption'=>'true',
                        'class'=>'file']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Producto::class,
        ]);
    }
}
