<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 10:59 AM
 */

namespace Innovate\Category;


use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Innovate\Category\Traits\Relationship\CategoryDescriptionRelationship;

class CategoryDescription extends \Spiritix\LadaCache\Database\Model {
    use Translatable,CategoryDescriptionRelationship;

    protected $table = 'category_description';

    public $translationModel = 'Innovate\Category\CategoryDescriptionTranslation';

    public $translatedAttributes = ['name', 'description'];

}
