# _Word Frequency_

#### _Epicodus-PHP, Week 2 Independent Project, 07.7.2017_

#### By _**Nathan Stewart**_

## Description

_This PHP exercise allows the user to enter a word, then a string of words or leters, then returns how frequently the word appears in the string._

## Prerequisites

_You will need the following properly installed on your computer:_

* [MAMP](https://www.mamp.info/en/) for Windows or MacOS
* [PHP](https://secure.php.net/)
* [Composer](https://getcomposer.org/)

## Configuration/Dependencies

_The app will use PHPunit,  Silex, and Twig._

## Setup/Installation

* Open GitHub site on your browser: https://github.com/GStewartN/Word-Frequency
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
  * type 'cd desktop' and press enter
  * type 'git clone' then paste the repository link and press enter
  * type 'cd WordFrequency' to access the path on your computer
  * type 'composer install' in terminal to download dependencies
  * type 'cd web' to enter the web folder, then type 'php -S localhost:8000' to open local server
* In your browser, enter 'localhost:8000' to view the webpage on your browser


## Specifications

| Behavior | Input | Output |
|----------|-------|--------|
| User visits landing page, clicks submit button without entering anything into the form | Nothing but a submit button click | A small popup in the form field instructs user to enter information to continue |
| User visits land page, facerolls the keyboard | Gibberish with a mix of letters, numbers, and special characters entered into the form fields, then submit button clicked | A new page displays with a message instructing the user to enter letters only |
| User visits landing page, enters a different single letter in both form fields  | The letter "a" is entered in first field, and "b" in second, then submit button clicked | A new page displays the entered letters, and a message saying no matches were found |
| User visits landing page, enters the same single letter into each form field  | The letter "a" is entered in first field, and "a" in second, then submit button clicked | A new page displays the entered letters, and a message saying one match was found
| User visits landing page, enters a single multiple letter word into both fields  | The word "dog" is entered into both form fields then submitted | A new page displays the entered words, and a message saying one match was found
| User visits landing page, enters a single multiple letter word into the first field, and several words into the next field | The word "dog" is entered into the first field, and "Dog Day Afternoon" into the second, then submitted | A new page displays the entered words, and a message saying one match was found
| User visits landing page, enters a single multiple letter word into the first field, and several words into the next field | The word "dog" is entered into the first field, and "Its a dog eat dog world" into the second, then submitted | A new page displays the entered words, and a message saying two matches were found

## Technologies Used

* _PHP_
* _HTML_
* _Bootstrap_
*  _CSS_
* _Silex_
* _Twig_
* _Composer_
* _MAMP_
* _PHPUnit_

### License

MIT License

Copyright &copy; 2017 Nathan Stewart

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
