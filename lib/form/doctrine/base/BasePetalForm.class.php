<?php

/**
 * Petal form base class.
 *
 * @method Petal getObject() Returns the current form's model object
 *
 * @package    hamaspyur
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePetalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'flower1_id'    => new sfWidgetFormInputText(),
      'flower2_id'    => new sfWidgetFormInputText(),
      'connection_id' => new sfWidgetFormInputText(),
      'colour'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'flower1_id'    => new sfValidatorInteger(array('required' => false)),
      'flower2_id'    => new sfValidatorInteger(array('required' => false)),
      'connection_id' => new sfValidatorInteger(array('required' => false)),
      'colour'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('petal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Petal';
  }

}
