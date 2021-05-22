<?php
// src/Form/ShoeType.php
namespace App\Form;
use App\Model\Shoe;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ShoeType extends AbstractType
{
 public function buildForm(FormBuilderInterface $builder, array $options)
 {
 $builder
 ->add('name')
 ->add('description')
 ->add('price', MoneyType::class)
 ->add('sizes', CollectionType::class, ['entry_type' => SizeType::class, 
 'entry_options' =>  ['label' => false], 'allow_add' => true, 'allow_delete' => true])

 ->add('save', SubmitType::class)
 ;
 }
 public function configureOptions(OptionsResolver $resolver)
 {
 $resolver->setDefaults([
 'data_class' => Shoe::class,
 ]);
 }
}