<?php

      if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $findus = $_POST['find-us'];
        $message = $_POST['message'];


        $mailto = "g.goel@sap.com";
        $headers = "From : Website".$mailFrom;
        $txt = "You have recieved an email from ".$name.".\n\n" .$message;
        $subject = "mail from basil website"
        mail($mailto,$subject,$txt,$headers);
      }
