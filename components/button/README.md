# Button Component

This is a Single Directory Component (SDC) that provides a reusable button element with configurable style and size
options.

## Usage

You can use this component in your Twig templates or PHP render arrays:

### In Twig:

```twig
{{ include('lug:button',{
  text: 'Click me',
  url: 'https://example.com',
  attributes: {
    'data-custom': 'value'
  }
}) }}
```

### In PHP:

```php
$build['button'] = [
  '#type' => 'component',
  '#component' => 'lug:button',
  '#props' => [
    'text' => 'Click me',
    'url' => 'https://example.com',
    'attributes' => [
      'data-custom' => 'value',
    ],
  ],
];
```

## Properties

| Name       | Type   | Description                                                       | Default  |
|------------|--------|-------------------------------------------------------------------|----------|
| text       | string | The text to display in the button                                 | Required |
| url        | string | The URL the button links to                                       | Required |
| attributes | object | Additional HTML attributes for the button element                 | {}       |


## CSS

This component doesn't include CSS, as it's expected to be styled by your theme or the Button Field module's CSS.

## Customization

To customize the appearance of the title styles, override the component in your theme by:

1. Creating a matching component in your theme's components directory
2. Implementing your own CSS for the different styles and sizes
3. Extending the base component template as needed
