
#!/bin/bash

show_help() {
    echo "Usage: ./setup.sh themeName"
    echo ""
    echo "Options:"
    echo "  themeName        The name of the Theme to create."
}

# Check if the first argument is --help
if [[ "$1" == "--help" ]]; then
    show_help
    exit 0
fi

themeName=$1

find . -name "*tailwind_starterkit.*" -exec rename -s 'tailwind_starterkit' ${themeName}  -v {} ";"
find . \( ! -regex '.*/\..*' \) -type f | LC_ALL=C xargs sed -i '' 's/tailwind_starterkit/${themeName}/g'
rm -rf .git
cd ..
mv tailwind_starterkit ${themeName}
