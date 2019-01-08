<?php

namespace App\Core;

interface IModel
{
    public static function findAll();
    public static function findOneByPk($id);
}