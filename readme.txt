

=== WP Add to Calendar ===
Contributors: gubbigubbi
Tags: add to calendar api, add to calendar, add event to calendar
Tested up to: 4.6
License: GPL2
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

This plugin adds an \'Add to Calendar\' button to your to posts or pages. When clicked the button creates an event in the users calendar application (Outlook, Google Calendar, Apple, Yahoo etc).

== Description ==
This plugin adds an \'Add to Calendar\' button to your to posts or pages. When clicked the button creates an event in the users calendar application (Outlook, Google Calendar, Apple, Yahoo etc). This plugin uses the \'Add Event\' API and you need to sign up for a free account before you can use this plugin. 

== Installation ==
1. Sign Up for a free account at https://www.addevent.com/
2. Once you have signed up for an account, go to the api section of the website: https://www.addevent.com/api
3. Copy down your Client ID which is listed like this: ?client=aMesiQFBxzpDEjaJzmcu20126, copy the part after the =, for example: aMesiQFBxzpDEjaJzmcu20126
4. Go to the settings page for WP Add to Calendar
5. Paste your Client ID into the required field
6. Now you can create a button anywhere in a post or page by using this shortcode:
[add-to-calendar start-date=\"\" start-time=\"\" end-date=\"\" end-time=\"\" event-title=\"\" timezone=\"\"]

Where:
Start Date = Event start date. Mandatory. Format: \"MM/DD/YYYY\" or \"DD/MM/YYYY\". Date must contain numeric values only, eg. \"06/25/2015\".
Start time =  Event start time. Format: HH:MM:SS. Value can be 12-hour clock or 24-hour clock. Value must be numeric, eg. \"09:00\". Value must contain at least hour and minute. If event is not an all day event this value is mandatory.
End date =  Event end date. Mandatory. Format: \"MM/DD/YYYY\" or \"DD/MM/YYYY\". Date must contain numeric values only, eg. \"06/25/2015\".
End time = Event end time. Format: HH:MM:SS. Value can be 12-hour clock or 24-hour clock. Value must be numeric, eg. \"09:00\". Value must contain at least hour and minute. If event is not an all day event this value is mandatory.
Event title = The events title
Time zone = Timezone of the event, eg. \"Europe/Paris\". 


