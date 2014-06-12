Indy Hall Wordpress Intercom
================================================================================

This is a Wordpress plugin that lets you automate physical access to a
location using an intercom system and a voice over IP service (in this
case Twilio).

Goals
--------------------------------------------------------------------------------

This plugin should allow for the following features:

 - [ ] Define access times (i.e. "Business Hours" and "After Hours")
    - [ ] Day(s) of week
    - [ ] Hours of days
    - [ ] Pull in holiday days via iCalendar or web service?
 - [ ] Manage access restrictions based on user role
    - [ ] What access times are allowed?
    - [ ] Authentication requirements per access time
       - [ ] No access
       - [ ] PIN only
       - [ ] PIN & text verification
       - [ ] PIN & admin permission
       - [ ] Should an admin be notified?
 - [ ] Manage PIN codes for each user
 - [ ] Allow users to manage their own PIN numbers
    - [ ] Enforce security policy (i.e. no 1234 or 0000)
    - [ ] Enforce uniqueness
    - [ ] **Alternately,** should PINs just be auto-generated and now allow user control?