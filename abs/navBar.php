<?php

// function print_logo ($path) {
//   echo "<img src=\"" . $path . "\" class=\"img\" width=\"200\" height=\"100\">";
// }

function create_manager_navbar_item ($text, $href, $current) {
  $current_string = "";
  $active_class_string = "";

  if ($current) {
    $current_string = "<span class=\"sr-only\">(current)</span></a>";
    $active_class_string = " active";
  }

  return "<a class=\"nav-item nav-link" . $active_class_string . "\" href=\"" . $href . "\">" . $text . $current_string . "</a>";
}

function print_home_owner_navbar ($image_path, $current_url) {
  $items_details = array(
    array(
      "text"=>"HOME",
      "href"=>"./landing.php"
    ),
    array(
      "text"=>"NEW REQUEST",
      "href"=>"./newRequest.php"
    ),
    array(
      "text"=>"RECEIVED REQUESTS",
      "href"=>"./receivedRequests.php"
    ),
    array(
      "text"=>"CONTACT",
      "href"=>"./contact.php"
    )
  );

  $navbar_beginning = "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">" .
  "<a class=\"navbar-brand\" href=\"./landing.php\">" .
  "<img src=\"" . $image_path . "\" width=\"69\" height=\"42.0\" alt=\"\">" .
  "</a></a>" .
  "<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">" .
  "<span class=\"navbar-toggler-icon\"></span>" .
  "</button>" .
  "<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">" .
  "<div class=\"navbar-nav\">";
  $navbar_end = "</div></div></nav>";
  $navbar_items = "";

  for ($i = 0; $i < count($items_details); $i++) {
    $is_active = ($current_url == $items_details[$i]["href"]);
    $navbar_items .= create_manager_navbar_item($items_details[$i]["text"], $items_details[$i]["href"], $is_active);
  }

  echo $navbar_beginning . $navbar_items . $navbar_end;
}

function print_manager_navbar ($image_path, $current_url) {
  $items_details = array(
    array(
      "text"=>"HOME",
      "href"=>"./landing.php"
    ),
    array(
      "text"=>"MANAGE REQUESTS",
      "href"=>"./openRequests.php"
    ),
    array(
      "text"=>"TODAY'S SCHEDULE",
      "href"=>"./todaysSchedule.php"
    ),
    // array(
    //   "text"=>"VENDORS",
    //   "href"=>"./vendorAssign.php"
    // )
  );

  $navbar_beginning = "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">" .
  "<a class=\"navbar-brand\" href=\"./landing.php\">" .
  "<img src=\"" . $image_path . "\" width=\"69\" height=\"42.0\" alt=\"\">" .
  "</a></a>" .
  "<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">" .
  "<span class=\"navbar-toggler-icon\"></span>" .
  "</button>" .
  "<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">" .
  "<div class=\"navbar-nav\">";
  $navbar_end = "</div></div></nav>";
  $navbar_items = "";

  for ($i = 0; $i < count($items_details); $i++) {
    $is_active = ($current_url == $items_details[$i]["href"]);
    $navbar_items .= create_manager_navbar_item($items_details[$i]["text"], $items_details[$i]["href"], $is_active);
  }

  echo $navbar_beginning . $navbar_items . $navbar_end;
}

?>