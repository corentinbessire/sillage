# Accordion Component

This is a Single Directory Component (SDC) that provides a collapsible accordion element, with a title and optional
subtitle, customizable open state, and support for HTML attributes.

## Usage

You can use this component in your Twig templates or PHP render arrays:

### In Twig:

```twig
  {% embed 'lug:accordion' with {
    title: 'Section Title',
    subtitle: 'Optional subtitle',
    default_state: open
    } only %}
    {% block content %}
      <p>Here is some detailed information revealed when open.</p>
    {% endblock %}
  {% endembed %}
```

### In PHP:

```php
$build['accordion'] = [
  '#type' => 'component',
  '#component' => 'lug:accordion',
  '#props' => [
    'title' => 'Section Title',
    'subtitle' => 'Optional subtitle',
    'default_state' => 'closed',
  ],
  '#slots' => [
    'content' => [
      '#markup' => '<p>This is the hidden content shown when the accordion is expanded.</p>',
    ],
  ],
];
```

## Properties

| Name          | Type   | Description                        | Default  |
|---------------|--------|------------------------------------|----------|
| title         | string | Title of the Accordion             | Required |
| subtitle      | string | Optional subtitle of the Accordion | null     |
| default_state | string | Default Sate of the Accordion      | closed   |

## Slots

| Slot    | Description                                        |
|---------|----------------------------------------------------|
| content | The content to be shown when the accordion is open |

## Examples

### Open by Default

```twig
  {% embed 'lug:accordion' with {
    title: 'Accordion Title',
    default_state: open
    } only %}
    {% block content %}
      <p>Here is some detailed information revealed when open.</p>
    {% endblock %}
  {% endembed %}


```

### With Subtitle

```twig
{{ include('lug:accordion', {
  title: 'Accordion Title',
  subtitle: 'Optional subtitle',
  default_state: closed,
  },
  {
    content: '<p>Here is some detailed information revealed when open.</p>'
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
