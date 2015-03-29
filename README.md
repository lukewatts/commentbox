- **Name:** Comment Box
- **Description:** PHP, MySQl and AJAX comment box which shows the specified amount of comments above a the comment form. Gravatars are used with the associated emails given.
- **Author:** Luke Watts
- **Author URL:** http://luke-watts.com
- **Version:** 1.0.0
- **License:** MIT

Comment Box
===========
PHP, MySQl and AJAX comment box which shows the specified amount of comments above a the comment form. Gravatars are used with the associated emails given.

Usage
-----
Simply add the 'commentbox' directory to you're project and require_once('commentbox/controller.php') file.

Then use `display_commentbox(5)` (where 5 is the number of comments to display) where you want the comments and form to be displayed.

Structure
---------
index.php: Simple homepage demonstrating the comment box.
- style.css: Simple styles so it's not too ugly.
- script.js: The ajax whicn refreshes the commentbox so comments are displayed as the happen.
- commentbox/controller.php: This handles the form request and reponse back to the page. It also loads all other files needed.
- commentbox/DB/DB.php: A very simple class which wraps the PDO connection using a singleton pattern so the DB conncetion is only made once. Keeps everything fast.
- commentbox/model.php: This is there simply to connect to the DB and somewhere to add other data logic.
- commentbox/views.php: The functions displaying the (success/error) messages and output HTML for the commentbox is in commentbox/view.php

Schema
------
```CREATE SCEMA commentbox;
USE commentbox;

CREATE TABLE comments (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL DEFAULT '',
    email VARCHAR(255) NOT NULL DEFAULT'',
    comment TEXT,
    created_at DATETIME DEFAULT 0,
    updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP,
    user_id INT UNSIGNED NOT NULL
);
```
