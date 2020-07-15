## 15/7/2020
### Logging
- The Laravel logging facilities provide a simple layer on top of the powerful Monolog library. By default, Laravel is configured to create daily log files for your application which are stored in the storage/logs directory. You may write information to the log like so:
- Laravel utilizes the Monolog library, which provides support for a variety of powerful log handlers. Laravel makes it a cinch to configure these handlers, allowing you to mix and match them to customize your application's log handling.
- All of the configuration for your application's logging system is housed in the config/logging.php configuration file. 
- #### Configuring The Channel Name
    - By default, Monolog is instantiated with a "channel name" that matches the current environment, such as production or local. To change this value, add a name option to your channel's configuration:

>'stack' => [
    'driver' => 'stack',
    'name' => 'channel-name',
    'channels' => ['single', 'slack'],
],

#### Available Channel Drivers
- #### Name and  Description
>stack---A wrapper to facilitate creating "multi-channel" channels
single----	A single file or path based logger channel (StreamHandler)
daily---	A RotatingFileHandler based Monolog driver which rotates daily
slack---	A SlackWebhookHandler based Monolog driver
papertrail---	A SyslogUdpHandler based Monolog driver
syslog---	A SyslogHandler based Monolog driver
errorlog---	A ErrorLogHandler based Monolog driver
monolog	---A Monolog factory driver that may use any supported Monolog handler
custom---	A driver that calls a specified factory to create a channel

- It is find in the storage/logs  folder. All error are stored on daily basis.
- #### Writing Log Messages
- You may write information to the logs using the Log facade. As previously mentioned, the logger provides the eight logging levels defined in the RFC 5424 specification: emergency, alert, critical, error, warning, notice, info and debug:
- An array of contextual data may also be passed to the log methods:

>Log::info('Log message', ['context' => 'Other helpful information']);

>Log::emergency($message);
Log::alert($message);
Log::critical($message);
Log::error($message);
Log::warning($message);
Log::notice($message);
Log::info($message);
Log::debug($message);
- So, you may call any of these methods to log a message for the corresponding level. By default, the message will be written to the default log channel as configured by your config/logging.php configuration file:
>Log::info('This is some useful information.');
Log::warning('Something could be going wrong.');
Log::error('Something is really going wrong.');


