# Asynchronous File Upload
A bit of trickery to simulate an AJAX file upload.

## HTML
A file tag within a form tag, and an invisible iframe. The form tag's *action* parameter is set to the *id* of the iframe. There is also a div, id *pnlMessage*, for displaying error/success messages.

## PHP
Upon file upload, this PHP script attempts to save the file to the *uploads* folder and outputs either a success or error message. A bit of JavaScript at the end delivers the message into *pnlMessage*.
