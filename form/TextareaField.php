<?php


namespace thecodeholic-mcv-projects\phpmvc\form;

class TextareaField extends BaseField
{

  public function renderInput(): string
  {
    return sprintf(
      '<textarea name="%s" class="form-control %s">%s</textarea>',
      $this->attribute,
      $this->model->hastError($this->attribute) ? 'is-invalid' : '',
      $this->model->{$this->attribute},
    );
  }
}
