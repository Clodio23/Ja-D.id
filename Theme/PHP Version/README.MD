# How to choose between dark and light theme?
    1. Go to settings.php file.
    2. Find (active-theme).
    3. Change the value to "Dark" or "Light".


# How to edit <head> tag elements such [ meta - link - title]?
  If you opend any php file such [ index.php - domains.php - etc ] you will find these variables:

    1. $__title
    2. $__meta_title
    3. $__meta_description
    4. $__meta_keywords
    4. $__class
    4. $__id

    Some of these vars has default values which located in settings.php page.
    In case you delete one of them, the default value will be applied.

  ### 1. $__title
    Default value: $page_title;
    Usage: To set custom title for any page.

  ### 2. $__meta_title
    Default value: $meta_title;
    Usage: To set custom meta title for any page.

  ### 3. $__meta_description
    Default value: $meta_description;
    Usage: To set custom description for any page.

  ### 4. $__meta_keywords
    Default value: $meta_keywords;
    Usage: To set custom keywords for any page.

  ### 5. $__class
    Default value: ''
    Usage: To set custom class for any page.
    Do not change this var value for any reason.

  ### 6. $__class
    Default value: ''
    Usage: To set custom id for any page.
    Do not change this var value for any reason.


# How to hide Header for any page?
    1. Go to the page you want.
    2. Inside the <?php ?> tag add the var below.
    3. $__hide_header = 'true';


# How to hide Footer for any page?
    1. Go to the page you want.
    2. Inside the <?php ?> tag add the var below.
    3. $__hide_footer = 'true';


# How to hide Live chat bubble for any page?
    1. Go to the page you want.
    2. Inside the <?php ?> tag add the var below.
    3. $__hide_chat_bubble = 'true';


# What is (meta_theme_color) in settings.php?
    The theme-color value for the name attribute of the <meta> element indicates a suggested color that user agents should use to customize the display of the page or of the surrounding user interface. If specified, the content attribute must contain a valid CSS <color>.

# sanitize.php?
    PHP file that contains some of template's functions.

# init.php?
    PHP file contains all other necessary component files.
    [settings.php - sanitize.php - header.inc.php - preloader.inc.php - navbar.inc.php - theme-settings.inc.php].