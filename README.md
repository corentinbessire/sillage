tailwind_starterkit theme, generated from starterkit_theme. Additional information on generating themes can be found in the [Starterkit documentation](https://www.drupal.org/docs/core-modules-and-themes/core-themes/starterkit-theme).

## Set up

### Mac Os

Prerequisite : `rename` (`brew install rename`)

```bash
cd tailwind_starterkit
find . -name "*tailwind_starterkit.*" -exec rename -s 'tailwind_starterkit' [THEME_NAME]  -v {} ";"
find . \( ! -regex '.*/\..*' \) -type f | LC_ALL=C xargs sed -i '' 's/tailwind_starterkit/tailwind_starterkit/g'
find . \( ! -regex '.*/\..*' \) -type f | LC_ALL=C xargs sed -i '' 's/tailwind_starterkit/tailwind_starterkit/g'
cd ..
mv tailwind_starterkit [THEME_NAME]

```


### Linux (@ToDo)
