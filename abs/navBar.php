<?php

// function print_logo ($path) {
//   echo "<img src=\"" . $path . "\" class=\"img\" width=\"200\" height=\"100\">";
// }


function print_home_owner_navbar ($path) {
  echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">" .
    "<a class=\"navbar-brand\" href=\"#\">" .
      "<img src=\"" . $path . "\" width=\"30\" height=\"30\" alt=\"\">" .
    "</a></a>" .
    "<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">" .
      "<span class=\"navbar-toggler-icon\"></span>" .
    "</button>" .
    "<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">" .
      "<div class=\"navbar-nav\">" .
        "<a class=\"nav-item nav-link active\" href=\"./landing.php\">HOME <span class=\"sr-only\">(current)</span></a>" .
        "<a class=\"nav-item nav-link\" href=\"./newRequest.php\">NEW REQUEST</a>" .
        "<a class=\"nav-item nav-link\" href=\"./receivedRequests.php\">RECEIVED REQUESTS</a>" .
        "<a class=\"nav-item nav-link\" href=\"./contact.php\">CONTACT</a>" .
      "</div>" .
    "</div>" .
  "</nav>";
}

function print_manager_navbar ($path) {
  echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">" .
    "<a class=\"navbar-brand\" href=\"#\">" .
      "<img src=\"" . $path . "\" width=\"30\" height=\"30\" alt=\"\">" .
    "<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">" .
      "<span class=\"navbar-toggler-icon\"></span>" .
    "</button>" .
    "<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">" .
      "<div class=\"navbar-nav\">" .
        "<a class=\"nav-item nav-link active\" href=\"#\">HOME <span class=\"sr-only\">(current)</span></a>" .
        "<a class=\"nav-item nav-link\" href=\"#\">MANAGE REQUESTS</a>" .
        "<a class=\"nav-item nav-link\" href=\"#\">TODAY'S SCHEDULE</a>" .
        "<a class=\"nav-item nav-link\" href=\"#\">VENDORS</a>" .
        "<a class=\"nav-item nav-link\" href=\"#\">CALENDAR</a>" .
      "</div>" .
    "</div>" .
  "</nav>";
}

?>