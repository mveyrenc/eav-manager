<?php

namespace CleverAge\EAVManager\AdminBundle\Form\Type;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Sidus\EAVBootstrapBundle\Form\Type\AutocompleteDataSelectorType;
use Sidus\EAVModelBundle\Form\Type\SimpleDataSelectorType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Very similar to the behavior of an embed type but allowing multi-families
 */
class EmbedMultiFamilyEntryType extends AutocompleteDataSelectorType
{
    /**
     * @param Registry             $doctrine
     * @param string               $dataClass
     */
    public function __construct(
        Registry $doctrine,
        $dataClass
    ) {
        $this->repository = $doctrine->getRepository($dataClass);
    }

    /**
     * @param FormView      $view
     * @param FormInterface $form
     * @param array         $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
    }

    /**
     * @param OptionsResolver $resolver
     *
     * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'max_results' => 0,
                'choices' => [],
                'choice_loader' => null,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'embed_multi_family_entry';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return SimpleDataSelectorType::class;
    }
}
