<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 3:37 PM
 */

namespace Innovate\Eav\Value;


use Illuminate\Database\Eloquent\Model;
use Innovate\Eav\Value\Traits\Relationship\ProductAttributeVarcharRelationship;

class ProductAttributeVarchar extends Model {

    use ProductAttributeVarcharRelationship;

    protected $table = 'product_attribute_varchar';


    /**
     * @var array
     */
    protected  $fillable = ['product_id','product_attribute_id','value'];
}