<?php

namespace Drupal\random_quote_creator\Plugin\Block; //set the namespace to this module

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Provides a 'random quote' Block.
 *
 * @Block(
 *   id = "random_quote_block",
 *   admin_label = @Translation("Random Quote Block"),
 *   category = @Translation("Utility Block"),
 * )
 */
class RandomQuoteBlock extends BlockBase
{ //your block name
  use StringTranslationTrait;


  public function blockForm($form, FormStateInterface $form_state)
  {
    // Build form here for quotes to be added.
    // See https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Entity%21Element%21EntityAutocomplete.php/class/EntityAutocomplete/9.2.x
    $form = parent::blockForm($form, $form_state);


    // Retrieve existing configuration for this block.
    $config = $this->getConfiguration();

    // Add a form field to the existing block configuration form.
    $form['welcome_message'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Welcome Message'),
      '#description' => $this->t('describes the quote generator to a user, text will sit below title. No camels.'),
      '#default_value' => isset($config['welcome_message']) ? $config['welcome_message'] : '',
    ];



    return $form;
  }



  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state)
  {
    // see https://www.drupal.org/docs/drupal-apis/block-api/block-api-overview
    // Save form data to the configuration for the block.

    $this->setConfigurationValue('welcome_message', $form_state->getValue('welcome_message'));
  }

  /**
   * {@inheritdoc}
   */
  public function blockValidate($form, FormStateInterface $form_state)
  {
    // Confirm that the title of the chosen nodes do not have "camel" in the name.
    // Case insensitive.
    $welcome_message_contents = strtolower($form_state->getValue('welcome_message'));

    if (str_contains($welcome_message_contents, "camel")) {
      $form_state->setErrorByName('welcome_message', $this->t('I said no camels!'));
    }
  }



  /**
   * {@inheritdoc}
   */
  public function build()
  {
    // Get quote data from the configuration, pass in to a "quotes" variable.
    $config = $this->getConfiguration();

    // All the quotes we have in Drupal.
    $quotes = $this->getQuotes();

    $welcome_message_contents = isset($config['welcome_message']) ? $config['welcome_message'] : ''; //could be Null Coalesce Operator
    $build = [
      '#theme' => 'random_quote_creator', //links to the function in the .module file
      '#welcome_message' => $welcome_message_contents, // Welcome message to add to the template
      '#attached' => [
        'library' => [
          'random_quote_creator/random_quote_js_css', //links to the function in the .libraries.yml file
        ],
      ],
    ];
    $build['#attached']['drupalSettings']['randomQuoteCreator']['quotes'] = $quotes;
    return $build;
  }

  private function getQuotes() {
    // TODO: fetch from real nodes. Mock the data for now.
    $quotes[] = [
      'quote' => 'A quote',
      'author' => 'an author',

    ];
    $quotes[] = [
      'quote' => 'Another quote',
      'author' => 'another author',

    ];
    return $quotes;
  }
}
