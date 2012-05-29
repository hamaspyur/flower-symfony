<?php

/**
 * Petal filter form base class.
 *
 * @package    hamaspyur
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePetalFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'flower1_id'    => new sfWidgetFormFilterInput(),
      'flower2_id'    => new sfWidgetFormFilterInput(),
      'connection_id' => new sfWidgetFormFilterInput(),
      'colour'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'flower1_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'flower2_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'connection_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'colour'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('petal_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Petal';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'flower1_id'    => 'Number',
      'flower2_id'    => 'Number',
      'connection_id' => 'Number',
      'colour'        => 'Text',
    );
  }
}
