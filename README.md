# Config.ini

*ini Config Driver*

- **Module Version:** 1.0.0
- **Module URL:** http://github.com/jengo/kohana-config.ini
- **Forked from URL:** http://github.com/Zeelot/kohana-config.json
- **Compatible Kohana Version(s):** 3.2.x

## Description

This is an INI config parser for Kohana 3.2.  Forked from the JSON driver that is for Kohana 3.1 and lower.
parse_ini_file() is faster than including an array and faster than file_get_contests() + json_decode().

## Requirements & Installation

1. Download or clone this repository to your Kohana modules directory
2. Enable the module in your `bootstrap.php` file
3. Attach the ini reader to a directory of your choosing, default is the standard Kohana config directory

<pre></code>/**
 * This attaches the ini reader to a config.json directory
 * (ex: application/config/example.ini)
 */
Kohana::$config->attach(new Config_INI('config'));
</code></pre>

## Example ini File

`application/config/example.ini`

[mail]
from=nobody@example.com


## Example Usage

	$mail_from = Kohana::$config->load('test')->mail['from'];
