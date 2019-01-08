<?php

namespace App\Models;

use App\Core\AbstractModel;

/**
 * Класс новостей
 *
 * Class News
 * @property $id
 * @property $date
 * @property $title
 * @property $description
 */
class News extends AbstractModel
{
    /*  public $id;  public $date;  public $title;  public $description;  */

    protected static $table = 'news';

    /*
    public function __construct($date, $title, $description)
    {
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
    }
    */
}