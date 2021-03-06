<?php
/**
 * RecipeCommentForm
 *
 * Created By Panda on 16/04/21
 */

namespace Main\Form;

use Zend\InputFilter\InputFilter;

class RecipeCommentFilter extends InputFilter {

    public function __construct() {

        $this->add(array(
            'name' => 'recipe_id',
            'required' => true,
            'filters' => array(
                array('name' => 'StringTrim'),
            ),
            'validators' => array(
                array(
                    'name' => 'StringLength',
                    'options' => array( 'min' => 1 ),
                ),
            ),
        ));
        
        $this->add(array(
            'name' => 'content',
            'required' => true,
            'filters' => array(
                array('name' => 'StringTrim'),
            ),
            'validators' => array(
                array(
                    'name' => 'StringLength',
                    'options' => array(
                        'encoding' => 'UTF-8',
                        'min'      => 2,
                    ),
                ),
            ),
        ));
    }

}