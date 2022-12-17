<?php

namespace App\Enums;

enum InterestTypeEnum:string
{
    case Saving = 'saving';
    case Personal = 'personal';
    case Bussiness = 'bussiness';
    case Car = 'car';
    case Home = 'home';
    case Tour = 'tour';
}
