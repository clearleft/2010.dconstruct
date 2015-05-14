<?php

require_once("speaker-data.php");

class DconFrame {

    // Some configuration and other variables.
    static $register_url = "http://dconstruct10.eventbrite.com";
    static $tickets_for_sale = True;
    static $media_url_1 = "http://media01.dconstruct.org/2010-0008";
    static $media_url_2 = "http://media02.dconstruct.org/2010-0008";
    static $media_url_3 = "http://media03.dconstruct.org/2010-0008";
    #static $media_url_1 = "";
    #static $media_url_2 = "";
    #static $media_url_3 = "";
    static $media_version = "0008";
    
    static $errors = array();
    
    
    // Dont' allow access to the file system, willy-nilly.
    // If you add a new page, add it to this list.
    private static $page_white_list = array(
        "home",
        "schedule",
        "workshops",
        "sponsors",
        "location",
        "accessibility",
        "privacy",
        "contact",
        "credits",
        "terms",
        "speakers",
		"podcast",
        "404"
    );
    private static $speaker_page_white_list = array(
        "david-mccandless",
        "james-bridle",
        "john-gruber",
        "marty-neumeier",
        "brendan-dawes",
        "merlin-mann",
        "samantha-warren",
        "hannah-donovan",
        "tom-coates",
        "mark-boulton",
        "simon-collison",
        "steven-stark",
        "curtis-james",
        "jeremy-keith"
    );

    // Look up content pages
    private static $content_pages = array(
        "terms" => "Terms &amp; Conditions",
        "privacy" => "Privacy Policy",
        "accessibility" => "Accessibility",
        "contact" => "Contact",
        "404" => "404 Not Found",
        "sponsors" => "Sponsors",
		"podcast" => "Podcast"
    );
    
    function init() {
        // If this is not a page, then crap out and show a 404.
        if (!self::page_exists_and_is_white_listed()) {
            self::return_404();
            exit;
        }
        // If speaker is not white listed.
        if ($_GET["page"] == "speakers" && !self::speaker_page_is_white_listed()) {
            self::return_404();
            exit;
        }
        
        // Sending contact form?
        if ($_GET["page"] == "contact" && isset($_POST["submit"])) {
        
            $criteria = array(
            	"email"		=> array("required","email"),
            	"name"		=> array("required"),
            	"message"	=> array("required")
            );
            
            self::$errors = self::check_input($_POST,$criteria);
            
            if (count(self::$errors) < 1) {
                self::send_mail();
                header ("Location: /base.php?page=contact&result=thanks");
                exit;
            }
        }
    }
    
    function page_exists_and_is_white_listed() {
        return (in_array($_GET["page"], self::$page_white_list) && file_exists("includes/" . $_GET['page'] . ".php"));
    }
    
    function speaker_page_is_white_listed() {
        return (in_array($_GET["speaker"], self::$speaker_page_white_list));
    }
    
    function page_has_tiles() {
        return (file_exists("tile-includes/" . $_GET['page'] . ".php"));
    }
    
    function is_content_page() {
        return (array_key_exists($_GET["page"], self::$content_pages));
    }
    
    function return_404() {
        header("HTTP/1.0 404 Not Found");
        $_GET['page'] = "404";
        echo include("base.php");
        exit;
    }
    
    function get_page_id() {
        if (self::is_content_page()) {
            return "content";
        }
        return $_GET['page'];
    }
    
    function get_page_tiles() {
        if (self::page_exists_and_is_white_listed() && self::page_has_tiles()) {
            include("tile-includes/" . $_GET['page'] . ".php");
        } else {
            include("tile-includes/content.php");
        }
    }
    
    function get_page_content() {
        include("includes/" . $_GET['page'] . ".php");
    }
    
    function get_title($full) {
        $title = "";
        if ($full) {
            $title = "| dConstruct 2010";
        }
        if ($_GET["page"] == 'home') {
            $title = "dConstruct 2010";
        }
        else if (self::is_content_page()) {
            $title = self::$content_pages[$_GET["page"]] . " " . $title;
        } else {
            $title = ucwords($_GET["page"]) . " " . $title;
        }
        return $title;
    }
    
    function send_mail() {
        if (!empty($_POST["email"]) && stristr($_POST["email"]," ")) {
        	$_POST["email"] = substr($_POST["email"],0,strpos($_POST["email"]," "));
        }
        if (!empty($_POST["message"]) && stristr($_POST["message"],"Content-Type:")) {
        	$_POST["message"] = substr($_POST["message"],0,strpos($_POST["message"],"Content-Type:"));
        }
        if (!empty($_POST["name"]) && stristr($_POST["name"],"Content-Type:")) {
        	$_POST["name"] = substr($_POST["name"],0,strpos($_POST["name"],"Content-Type:"));
        }

        $recipient = 'info@clearleft.com';

        $subject = "dConstruct website message";

        if (!empty($_POST["name"])) $subject.= " from ".$_POST["name"];

        mail($recipient,$subject,stripslashes($_POST["message"]),"FROM: ".$_POST["email"]);
    }
    
    function check_input($data=array(),$criteria=array()) {

    	$return = array();

    	foreach($criteria as $key => $tests) {

    		foreach ($tests as $criterion) {

    			switch($criterion) {

    				case "required":

    					if (empty($data[$key])) {

    						$return[$key] = "is required";

    					}

    				break;

    				case "email":

    					if (
    					isset($data[$key])
    					&&
    					!stristr($data[$key],'@')
    					&&
    					!stristr($data[$key],'.')
    					) {

    						$return[$key] = "must be real";

    					}

    				break;

    				case "number":

    					if (
    					isset($data[$key])
    					&&
    					!is_numeric($data[$key])
    					) {

    						$return[$key] = "must be a number";

    					}

    				break;

    			}
    		}
    	}

    	return $return;

    }
    
}

?>