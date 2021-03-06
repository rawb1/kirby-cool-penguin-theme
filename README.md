# Cool Penguin theme :penguin:

A blog theme 🐧 for [Kirby CMS](https://getkirby.com/)

> **WIP:** this is stil a work in progress [DEMO 🐧](https://rawb1.me/)

<img width="350" alt="Screenshot_2021-04-12_at_16 13 30-removebg-preview" src="https://user-images.githubusercontent.com/25453942/114409446-c19d7700-9baa-11eb-958b-83b28c93464a.png">

## Table of contents
  - [About](#about)
    - [Features](#features)
    - [Built with](#built-with)
  - [Get started](#get-started)
    - [Prerequisites](#prerequisites)
    - [Install](#install)
    - [Usage](#usage)
    - [Configuration](#configuration)
    - [Compatibility](#compatibility)
  - [Roadmap](#roadmap)
  - [Contributing](#contributing)
  - [Acknowledgements](#acknowledgements)
  - [License](#license)
  
## About
Inspired by [Hexo Cactus Theme](https://probberechts.github.io/hexo-theme-cactus/) from [**Pieter Robberechts**](https://github.com/probberechts)

### Features
- Fully responsive
- Medium like images zoom
- Configurable color schemes with dark mode
- Pick your own code highlighting scheme
- Everything is configurable in the kirby panel
- Font Awesome icons

### Built with
- [Kirby CMS](https://getkirby.com/)
- [Fontawesome](https://fontawesome.com/) icons
- François Chalifour [medium-zoom](https://github.com/francoischalifour/medium-zoom)
- Johann Schopplich [kirby-highlighter](https://github.com/johannschopplich/kirby-highlighter)
- diesdas ⚡️ digital [kirby-meta-knight](https://github.com/diesdasdigital/kirby-meta-knight)
- Sylvain Jule [markdown-field](https://github.com/sylvainjule/kirby-markdown-field), [backups](https://github.com/sylvainjule/kirby-backups)  and [pagetable](https://github.com/sylvainjule/kirby-pagetable)
- Nico Hoffmann [retour-for-kirby](https://github.com/distantnative/retour-for-kirby)
- Büro für Gestaltung [kirby-colors](https://github.com/hananils/kirby-colors)
- Oblik Studio [kirby-link-field](https://github.com/OblikStudio/kirby-link-field)
- [Highlightjs](https://highlightjs.org/) syntax styles
- Penguin icon made by [Freepik](https://www.freepik.com) from [www.flaticon.com](https://www.flaticon.com/)

## Get started

### Compatibility
- Kirby 3 or later
- php 7.1 or later
  
### Prerequisites
- git
- composer
- php-mbstring php-curl php-ctype php-gd zip unzip php-zip php-sqlite3 php-xml

### Install
```sh
git clone https://github.com/rawb1/kirby-cool-penguin-theme.git
cd kirby-cool-penguin-theme/
composer install
```

### Usage
```sh
php -S localhost:8000 kirby/router.php
```

## Configuration
Add a config files to extend the default one. [Kirby doc](https://getkirby.com/docs/guide/configuration#multi-environment-setup)
For example `site/config/config.localhost.php` 

### Logo and favicons
To override the default logo you can add a `logo.svg` or `a logo.png` at the root of the project 

> Further configuration is done via the kirby panel.

## Deployment
- You can find how to deploy this theme using git [here](https://rawb1.me/posts/how-to-deploy-kirby-cms-using-git)
- You can find how to serve this theme using caddy [here](https://rawb1.me/posts/how-to-serve-kirby-cms-using-caddy)

## Roadmap
* [x] Deployment documentation
* [x] Copyright years
* [x] ~~CSS Image lightbox~~ medium like image zoom
* [ ] Pages search
* [ ] Tags search
* [ ] Comments support
* [ ] I18n support
* [ ] RSS support

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## Acknowledgements
- Inspired by [Hexo Cactus Theme](https://github.com/probberechts/hexo-theme-cactus) from [**Pieter Robberechts**](https://github.com/probberechts)
- Powered by [Kirby](https://github.com/getkirby/kirby)
  
## License
Distributed under the MIT License. See LICENSE for more information.
