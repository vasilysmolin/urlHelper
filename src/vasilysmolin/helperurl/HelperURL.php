<?php

    namespace vasilysmolin\helperurl;

    class HelperURL
    {
        /**
         * @return mixed
         */

         public function getCurPageURL ()
         {
             $pageURL = 'http';
             if(isset($_SERVER['HTTPS'])){
                 if($_SERVER['HTTPS'] == 'on'){$pageURL .= "s";}
             }
             $pageURL .= '://';
             if ($_SERVER['SERVER_PORT'] != '80') {
                 $pageURL .= $_SERVER['SERVER_NAME'].':'
	                 . $_SERVER['SERVER_PORT']
                 . $_SERVER['SCRIPT_FILENAME'] 
                 . $_SERVER['DOCUMENT_ROOT'];
             }else{
	             $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'] . ':' . $_SERVER['SERVER_PORT'];
             }
             return $pageURL;
         }

	    public function getCurPageURLHtmlString()
	    {
		    $pageURL = 'Server Name: ' . 'http';
		    if (isset($_SERVER['HTTPS'])) {
			    if ($_SERVER['HTTPS'] == 'on') {
				    $pageURL .= "s";
			    }
		    }
		    $pageURL .= '://';
		    if ($_SERVER['SERVER_PORT'] != '80') {
			    $pageURL .= $_SERVER['SERVER_NAME'] . ':'
				    . $_SERVER['SERVER_PORT'] . '<br>'
				    . 'File Name: ' . $_SERVER['SCRIPT_FILENAME'] . '<br>'
				    . 'Document Root: ' . $_SERVER['DOCUMENT_ROOT'] . '<br>';
		    } else {
			    $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'] . ':' . $_SERVER['SERVER_PORT'];
		    }
		    return $pageURL;
	    }

    }
?>