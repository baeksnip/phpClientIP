# phpClientIP

This simple script in php stores the ip of the person who opens it in a text file
To always have the IP for consultation updated, you can have a local script that is executed at regular time intervals
In my case I use a bash script, which is called by cron every five minutes

In cron I have defined the following task
*/5 * * * * /ROUTE_TO_SCRIPT/ip.sh
