<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\hello\Entity\HelloEntity;

class HelloFormBase extends FormBase {

  /**
   * The message to be displayed.
   */
  protected $message;

  /**
   * The hello entity. Used to store form data.
   */
  protected $entity;

  /**
   * {@inheritdoc)
   */
  public function getFormId() {
    return 'hello_form_base';
  }

  /**
   * {@inheritdoc}
   *
   * @return array
   *  The form structure.
   */
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

    // Use the procedural wrapper to create the hello entity.
    $entity = HelloEntity::create(array(
      'name' => t('name'),
      'message' => $form_state->getValues()['message']
    ));

    // Permanently save the entity for storage.
    //$entity->save();

    // Messages used for testing.
    drupal_set_message(t('The message you entered is "@message".', array('@message' => $form_state->getValues()['message'])));
    drupal_set_message(t('Your message, "@message", was saved.', array('@message' => $entity->getMessage())));

    // Redirect the page to the hello page.
    $form_state->setRedirect('hello.hello_page');
  }

}
