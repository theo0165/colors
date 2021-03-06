![](https://i.giphy.com/media/3o7aD56B2QS5MyTGfe/giphy.webp)

# C O L O R S

Text about the project and why it exists. This would also be a great place to link the project on One.com.

# Installation

Step 1-6 is done in the terminal.

1. Clone this repository
    ```bash
      git clone https://github.com/theo0165/the-elephpant-in-the-room
      cd ./the-elephphant-in-the-room
    ```
2. Install node.js
    ```bash
      brew install node
    ```
3. Install sass globally
    ```bash
      npm install -g sass
    ```
4. Create css directory
    ```bash
      mkdir ./public/style/css
    ```
5. Compile scss to css
    ```bash
      sass --no-source-map public/style/scss:public/style/css
    ```
6. Start php server
    ```bash
      php -S localhost:8000
    ```
7. Navigate to the website: [http://localhost:8000](http://localhost:8000)
8. Congrats, you have successfully set up the site. If the website does not work please make sure the website is started in the root directory of the repository.

# Code Review

Code review written by [Sofia Dersén](https://github.com/sdersen).

1. `Overall` - Since the site contains multiple files and a complicated structure there is overall, not enough comments.
2. `components/new.php:9` - You use both Post and Pallet in regards to the pallets on the page. In database called “posts”.
3. `public/cookie.js:38-56` - The function would perhaps have been easier to find in a footer or overall-file.
4. `include/sidebar.php:10-12` - Using both Palette and Post, in sidebar menu.
5. `include/sidebar.php:15` - Search field missing label.

# Testers

Tested by the following people:

1. [Christopher Micheal](https://github.com/chrs-m)
2. [Patrik Staaf](https://github.com/patrikstaaf)
3. [Sofia Dersén](https://github.com/sdersen)

# Idea

1. Color template generator
    - Anonymous posting, no login
    - Likes
    - Database
        - Color template posts
        - Likes. Like is linked to post id
            - 1 like per ip per post? Alt per session
            - IP in like table, check ip before liking.

### Design

-   Sidebar with logo, nav
-   Grid with "posts".
-   Light/dark theme

### TODO

-   [x] Mobile optimization
-   [x] Sort top
-   [x] Dark theme
-   [x] Cookie/ip collection consent
-   [x] Test on web server
-   [x] Fix API route in htaccess
-   [ ] Fix html validation error, see [here](https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&checkerrorpages=yes&useragent=Validator.nu%2FLV+http%3A%2F%2Fvalidator.w3.org%2Fservices&acceptlanguage=&doc=https%3A%2F%2Ftheosandell.com%2Fcolors%2F)
-   [x] Validate form input on create new in browser.
-   [x] Fix copy to clipboard on single
