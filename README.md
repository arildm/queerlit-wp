# Queerlit info site

Info pages for https://queerlit.dh.gu.se/

## Setup

- WordPress core as a git submodule in `wp/`. This is defined in `index.php`. To update WP version:
  1. `cd wp/`
  2. `git fetch --all --tags`
  3. checkout the desired commit
  4. `cd ..`
  5. commit the submodule change
- The `wp-content/` directory is moved outside `wp/`, so we can keep custom code there. This is defined in `wp-config.php`.

### Deploy

Do something like:

```
rsync -az index.php wp-config.php wp wp-content cdh03:/var/www/queerlit/om/
```
