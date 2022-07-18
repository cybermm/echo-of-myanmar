# Echo of Myanmar

> The layers and volunteers group that help people who need layers and
political advice and discussing.

## Features

- ✍️ Writing blog post in **WYSIWYG editor** base on **user role** (CMS system based feature)
- ✊ Manage **user roles**
- 🔃 **Profile reset** like Facebook password reset
- 🔒 **Authentication** and **Authorization**
- 👨‍💻 **Admin Dashboard**

## Installation

  ```bash
    git clone https://github.com/cybermm/echo-of-myanmar echo-of-myanmar
    cd echo-of-myanmar
    cp .env.example .env
    composer install
    composer setup # create database before setup
    npm install && npm run dev 
    php artisan migrate # if artisan ask for yes/no please provide yes
    php artisan db:seed
  ```

## License

Copyright (c) 2021 Myanmar Cyber Youth released under the <a href="./LICENSE.md">MIT</a> license.
