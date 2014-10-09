<?php

	require_once 'CloudPrint.php';
        $gcp = new GoogleCloudPrint();
        if($gcp->loginToGoogle("phpgang@gmail.com", "PHPGang"))
        {
            $printers = $gcp->getPrinters();
            $printerid = "";
            if(count($printers)==0)
            {
                $content = "Could not get printers";
            }
            else
            {
                $printerid = $printers[0]['id'];
                $resarray = $gcp->sendPrintToPrinter($printerid, "Printing Doc using Google Cloud Printing", "upload/" . $_FILES["upload"]["name"], "application/pdf");
                if($resarray['status']==true)
                {
                    $content = "Document has been sent to printer and should print shortly.";
                }
                else
                {
                    $content = "An error occured while printing the doc. Error code:".$resarray['errorcode']." Message:".$resarray['errormessage'];
                }
            }
        }
?>