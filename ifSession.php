<?php
session_start()

if ($_session["godkjent"] == "YES") {


    print "velkommen"
}

else if ($_session["godkjent"] != "YES") {


    print "avvist"
}

?>