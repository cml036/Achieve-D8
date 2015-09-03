<?php
namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Mad Libs Form' Block.
 *
 * @Block(
 *  id = "mad_libs_form_block",
 *  admin_label = @Translation("Mad Libs Form Block"),
 * )
 */
class MadLibsFormBlock extends BlockBase {

  public function build() {
    // Returns the HelloForm form.
    $form =  \Drupal::formBuilder()->getForm('Drupal\hello\Form\HelloFormBase');
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    // Add a form field to the existing block configuration form.
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Your Name'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
//  public function blockAccess(AccountInterface $account) {
//    return $account->hasPermission('access content');
//  }

//  /**
//   * {@inheritdoc}
//   */
//  public function blockSubmit($form, FormStateInterface $form_state) {
//    // Save our custom settings when the form is submitted.
//    $this->setConfigurationValue('fax_block_settings', $form_state->getValue('fax_block_settings'));
//  }
}
