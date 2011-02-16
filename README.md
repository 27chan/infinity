# Tinyboard - A lightweight PHP imageboard.

## About
Tinyboard is an imageboard software package written in PHP. It aims to maintain a stable, fast, clean and user-friendly engine for imageboards. Development for Tinyboard started in October 2010 and the project is being lead by [OmegaSDG][o] ("Omega Software Develop Group"). You can contact the development team over IRC at irc.n0v4.com #tinyboard.

Tinyboard is not currently at a stable state.

[o]: http://omegasdg.com/

## Requirements
 1. PHP >= 5.2.0
 2. php-gd
 3. php-pdo with appropriate driver for your database

## Installation
 1. Tinyboard requires an SQL database and a user to work. Create one.
 2. Import 'install.sql' into the database. There are several ways to do this.
	- using phpMyAdmin
	- `mysql -uUSERNAME -pPASSWORD DATABASE < install.sql`
 3. Edit 'instance-config.php' to suit your installation. You should copy some values from '[inc/config.php][c]' to redefine them in the instance-config.
 4. Make sure that the Tinyboard directory is writable. Depending on your setup, you may need to `chmod` "." to 777, with `chmod 777 .`
 5. Ensure everything is okay by running [test.php][t] in a browser. The script will try and help you correct your errors.
 6. Run the [post.php][p] script. It should create an index.html and redirect you to it if everything is okay.
 7. Optional (highly recommended): Either delete or chmod as unreadable the following files: [test.php][t], [install.sql][i], and this [README][r].
 
An automated installation script will be completed soon.

[t]: http://github.com/savetheinternet/Tinyboard/blob/master/test.php
[p]: http://github.com/savetheinternet/Tinyboard/blob/master/post.php
[c]: http://github.com/savetheinternet/Tinyboard/blob/master/inc/config.php
[i]: http://github.com/savetheinternet/Tinyboard/blob/master/install.sql
[r]: http://github.com/savetheinternet/Tinyboard/blob/master/README.md

## License
Copyright (c) 2010-2011, Omega Software Development Group <http://omegasdg.com/>

Permission to use, copy, modify, and/or distribute this software is granted, 
provided that the following terms are obeyed.

1. The above copyright notice, this permission notice, and these terms must 
appear in all copies and modifications of this software.

2. This software must not be utilized in any manner that is primarily intended 
for or directed toward commercial advantage or private monetary compensation.

3. Any changes to this software must be made easily publicly available in the 
form of source code.

THIS SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH 
REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND 
FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT, 
INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS 
OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER 
TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF 
THIS SOFTWARE.