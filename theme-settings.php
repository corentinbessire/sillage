<?php

/**
 * @file
 * Theme settings form for sillage theme.
 */

declare(strict_types=1);

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function sillage_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['sillage'] = [
    '#type' => 'details',
    '#title' => t('Theme Colors'),
    '#open' => TRUE,
  ];

  $form['sillage']['primary'] = [
    '#type' => 'textfield',
    '#title' => t('Primary Color - Default'),
    '#default_value' => theme_get_setting('primary'),
  ];
  $form['sillage']['primary_dark'] = [
    '#type' => 'textfield',
    '#title' => t('Primary Color - Dark'),
    '#default_value' => theme_get_setting('primary_dark'),
  ];
  $form['sillage']['secondary'] = [
    '#type' => 'textfield',
    '#title' => t('Secondary Color - Default'),
    '#default_value' => theme_get_setting('secondary'),
  ];
  $form['sillage']['secondary_light'] = [
    '#type' => 'textfield',
    '#title' => t('Secondary Color - Light'),
    '#default_value' => theme_get_setting('secondary_light'),
  ];
  $form['sillage']['secondary_dark'] = [
    '#type' => 'textfield',
    '#title' => t('Secondary Color -  Dark'),
    '#default_value' => theme_get_setting('secondary_dark'),
  ];
  $form['sillage']['accent'] = [
    '#type' => 'textfield',
    '#title' => t('Accent Color - Default'),
    '#default_value' => theme_get_setting('accent'),
  ];
  $form['sillage']['accent_light'] = [
    '#type' => 'textfield',
    '#title' => t('Accent Color - Light'),
    '#default_value' => theme_get_setting('accent_light'),
  ];
  $form['sillage']['accent_dark'] = [
    '#type' => 'textfield',
    '#title' => t('Accent Color - Dark'),
    '#default_value' => theme_get_setting('accent_dark'),
  ];
  $form['sillage']['info'] = [
    '#type' => 'textfield',
    '#title' => t('Info Color'),
    '#default_value' => theme_get_setting('info'),
  ];
  $form['sillage']['warning'] = [
    '#type' => 'textfield',
    '#title' => t('Warning Color'),
    '#default_value' => theme_get_setting('warning'),
  ];
  $form['sillage']['error'] = [
    '#type' => 'textfield',
    '#title' => t('Error Color'),
    '#default_value' => theme_get_setting('error'),
  ];
  $form['sillage']['success'] = [
    '#type' => 'textfield',
    '#title' => t('Success Color'),
    '#default_value' => theme_get_setting('success'),
  ];
}
