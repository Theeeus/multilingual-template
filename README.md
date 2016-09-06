# multilingual-template
This is a simple template to create a multilingual website using php

Usage

1) Directory

The 'languages' folder contains one file for each language supported on the website. You must create and array $lang and all the attributes that will later be displayed on the webiste.
The 'common.php' file is the control and must be adjusted when including/deleting languages or if you want to change the cookie settings.

2) Index.php
The 'index.php' file includes the 'common.php' file and checks for the language selected. Then you just have to output the constants you created into the page.

3) Switching between languages
To switch between languages you must link to the selected language, for example: yourwebsite.com/index.php?lang=[LANG HERE]
