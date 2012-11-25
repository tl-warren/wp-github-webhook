<?php

# Separated with comma. Empty string - all ips allowed.
# Look in admin panel for GitHub public IP's
# Example: '127.0.0.1, 192.168.1.1'
define('__ALLOWED_IPS__', '1.1.1.1, 2.2.2.2');

# Emails to send sync results
define('MAIL_TO', 'log@yourdomain.com');

# Mail everything, including logs.
define('MAIL_LOGS', true);

# Mail only if error occured
define('MAIL_ERRORS', true);


#
# HOST configuration
#
# Config file for storing information about production servers
# in which web site must be synced (allowed configuration when 
# one repository sync to multiple web nodes)
#
# [server short name]
# proto = ''
#

$hosts_conf = array(
	# Development server with SSH server and rsync
	'dev' => array(
		'proto'		=> 'rsync+ssh',
		'host'		=> '127.0.0.1',
		'user'		=> '',
		'password'	=> '',
		'path'		=> '/var/www/'
	),
	# Shared Hosting with FTP access
	'prod' => array(
		'proto'		=> 'ftp',
		'host'		=> '127.0.0.1',
		'user'		=> '',
		'password'	=> '',
		'path'		=> ''
	)
);

#
# REPOSITORIES configuration
#
$repo_conf = array(
	'https://github.com/username/repo' => array(
		'branch'	=> 'master',
		'hosts'		=> 'prod',
		'repo_path'	=> '',
		'server_path'	=> '',
		'config_folder'	=> ''
	)
);
