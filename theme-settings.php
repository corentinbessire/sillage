<?php

/**
 * @file
 * Theme settings form for lug theme.
 */

declare(strict_types=1);

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function lug_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['lug'] = [
    '#type' => 'details',
    '#title' => t('Theme Colors'),
    '#open' => TRUE,
  ];

  $form['lug']['primary'] = [
    '#type' => 'textfield',
    '#title' => t('Primary Color - Default'),
    '#default_value' => theme_get_setting('primary'),
  ];
  $form['lug']['primary_dark'] = [
    '#type' => 'textfield',
    '#title' => t('Primary Color - Dark'),
    '#default_value' => theme_get_setting('primary_dark'),
  ];
  $form['lug']['secondary'] = [
    '#type' => 'textfield',
    '#title' => t('Secondary Color - Default'),
    '#default_value' => theme_get_setting('secondary'),
  ];
  $form['lug']['secondary_light'] = [
    '#type' => 'textfield',
    '#title' => t('Secondary Color - Light'),
    '#default_value' => theme_get_setting('secondary_light'),
  ];
  $form['lug']['secondary_dark'] = [
    '#type' => 'textfield',
    '#title' => t('Secondary Color -  Dark'),
    '#default_value' => theme_get_setting('secondary_dark'),
  ];
  $form['lug']['accent'] = [
    '#type' => 'textfield',
    '#title' => t('Accent Color - Default'),
    '#default_value' => theme_get_setting('accent'),
  ];
  $form['lug']['accent_light'] = [
    '#type' => 'textfield',
    '#title' => t('Accent Color - Light'),
    '#default_value' => theme_get_setting('accent_light'),
  ];
  $form['lug']['accent_dark'] = [
    '#type' => 'textfield',
    '#title' => t('Accent Color - Dark'),
    '#default_value' => theme_get_setting('accent_dark'),
  ];
  $form['lug']['info'] = [
    '#type' => 'textfield',
    '#title' => t('Info Color'),
    '#default_value' => theme_get_setting('info'),
  ];
  $form['lug']['warning'] = [
    '#type' => 'textfield',
    '#title' => t('Warning Color'),
    '#default_value' => theme_get_setting('warning'),
  ];
  $form['lug']['error'] = [
    '#type' => 'textfield',
    '#title' => t('Error Color'),
    '#default_value' => theme_get_setting('error'),
  ];
  $form['lug']['success'] = [
    '#type' => 'textfield',
    '#title' => t('Success Color'),
    '#default_value' => theme_get_setting('success'),
  ];
}
