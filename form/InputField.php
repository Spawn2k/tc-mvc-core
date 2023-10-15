<?php

namespace spawn2k\phpmvc\form;

use spawn2k\phpmvc\Model;

class InputField extends BaseField
{

  public const TYPE_TEXT = 'text';
  public const TYPE_PASSWORD = 'password';
  public const TYPE_NUMBER = 'number';


  public string $type;

  public function __construct(Model $model, string $attribute)
  {
    $this->type = self::TYPE_TEXT;
    parent::__construct($model, $attribute);
  }

  public function __toString()
  {

    return sprintf(
      ' <div class="mb-3">
    <label class="form-label">%s</label>
    %s
    <div class="invalid-feedback">%s</div>
    </div>',
      $this->model->getLabels($this->attribute),
      $this->renderInput(),
      $this->model->getFirstError($this->attribute),
    );
  }

  public function passwordField()
  {
    $this->type = self::TYPE_PASSWORD;
    return $this;
  }

  public function renderInput(): string
  {
    return sprintf(
      '<input type="%s" name="%s" value="%s" class="form-control %s">',
      $this->type,
      $this->attribute,
      $this->model->{$this->attribute},
      $this->model->hastError($this->attribute) ? 'is-invalid' : '',
    );
  }
}
