<?php

namespace App\Controller\Admin;

use App\Entity\DateConcert;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class DateConcertCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DateConcert::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            DateTimeField::new('date_heure')->setFormat('dd/MM/yyyy à HH:mm'),
        ];
    }
}
