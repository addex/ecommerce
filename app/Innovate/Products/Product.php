<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:33 PM
 */

namespace Innovate\Products;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Innovate\Products\Traits\Attribute\ProductAttribute;
use Innovate\Products\Traits\Relationship\ProductRelationship;
use Innovate\SEOProvider\ObjectFlat;
use Sofa\Eloquence\Eloquence;

/**
 * Class Product
 * @package Innovate\Products
 */
class Product extends \Spiritix\LadaCache\Database\Model implements ObjectFlat,SluggableInterface{


    /**
     * This are trait definition's and a solution for the conflict inside them
     */
    use Translatable,ProductRelationship,ProductAttribute,SluggableTrait,Eloquence{

        Eloquence::getAttribute  as getAttributeEloquence;
        Translatable::getAttribute insteadof Eloquence;

        Eloquence::setAttribute  as setAttributeEloquence;
        Translatable::setAttribute insteadof Eloquence;

        Eloquence::save  as saveEloquence;
        Translatable::save insteadof Eloquence;

        Eloquence::toArray   as toArrayEloquence;
        Translatable::toArray  insteadof Eloquence;

        Eloquence::__isset   as __issetEloquence;
        Translatable::__isset  insteadof Eloquence;
     }

    /**
     * The translation model for product
     * @var string
     */
    public $translationModel = 'Innovate\Products\ProductTranslation';


    /**
     * The translated attributes in this model
     * @var array
     */
    public $translatedAttributes = ['name', 'cart_description','short_description','long_description'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
 //   protected  $fillable = ['title','description'];

    /**
     * This array holds information about
     * @var array
     */
    protected $sluggable =[
        'build_from' =>'sku',
        'save_to' => 'slug',
    ];

    /**
     * The searchable attributes on the model with there relevance
     *
     * The numbers on the value of the array are the relevance of that column from 1-100 when searching
     * @var array
     */
    protected $searchableColumns = [
        'sku' => 10,
        'location' => 10,
        'slug' =>10,
        'product_translations.name' =>15,
    ];




}