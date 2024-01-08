<?php

namespace App\Controller\Admin;

use App\Entity\Concert;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ConcertCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Concert::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('nom_artiste'),
            TextField::new('designation')->renderAsHtml(),
            TextField::new('description')->renderAsHtml(),
            AssociationField::new('musique'),
            AssociationField::new('scene'),
            AssociationField::new('date_concert'),
            
        ];
    }
}
