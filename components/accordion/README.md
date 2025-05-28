# Accordion Component

This is a Single Directory Component (SDC) that provides a collapsible accordion element, with a title and optional
subtitle, customizable open state, and support for HTML attributes.

## Usage

You can use this component in your Twig templates or PHP render arrays:

### In Twig:

```twig
{{ include('sillage:accordion', {
  title: 'Section Title',
  subtitle: 'Optional subtitle',
  default_state: true,
  attributes: {
    'data-accordion-id': 'section-1'
  }
}) }}
```

### In PHP:

```php
$build['accordion'] = [
  '#type' => 'component',
  '#component' => 'sillage:accordion',
  '#props' => [
    'title' => 'Section Title',
    'subtitle' => 'Optional subtitle',
    'default_state' => 'closed',
    'attributes' => [
      'data-accordion-id' => 'section-1',
    ],
  ],
  '#slots' => [
    'content' => [
      '#markup' => '<p>This is the hidden content shown when the accordion is expanded.</p>',
    ],
  ],
];
```

## Properties

| Name          | Type   | Description                                                       | Default  |
|---------------|--------|-------------------------------------------------------------------|----------|
| title         | string | Title of the Accordion                                            | Required |
| subtitle      | string | Optional subtitle of the Accordion                                | null     |
| default_state | string | Default Sate of the Accordion                                     | closed   |
| attributes    | object | Additional HTML attributes for the accordion trigger or container | {}       |

## Slots

| Slot    | Description                                        |
|---------|----------------------------------------------------|
| content | The content to be shown when the accordion is open |

## Examples

### Open by Default

```twig
{{ component('accordion', {
  title: 'Details',
  default_state: true
}, {
  content: '<p>Here is some detailed information revealed when open.</p>'
}) }}
```

### With Subtitle

```twig
{{ component('accordion', {
  title: 'More Info',
  subtitle: 'Click to expand'
}, {
  content: '<ul><li>Point A</li><li>Point B</li></ul>'
}) }}
```

### Custom Attributes

```twig
{{ component('accordion', {
  title: 'Advanced Settings',
  attributes: {
    'data-settings-type': 'advanced'
  }
}, {
  content: '<p>Here are some advanced configuration options.</p>'
}) }}
```

## CSS

This component does not include CSS by default. It is expected to be styled by your theme, allowing for full control
over transitions, icon toggling, spacing, and typography.

## Customization

To customize this component:

1. Override the `accordion` component in your theme's components directory
2. Add or modify template logic as needed
3. Apply custom styles for the accordion headers, body, open/closed states, etc.
