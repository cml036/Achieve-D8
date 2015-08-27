<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class HelloForm extends FormBase {

  public function getFormId() {
    return 'hello_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['message'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Please enter a message.')
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    );

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    dpm($form_state, '$form_state @ submitForm');
    drupal_set_message(t('Your message is @message', array('@message' => $form_state->getValues()['message'])));
  }

}
