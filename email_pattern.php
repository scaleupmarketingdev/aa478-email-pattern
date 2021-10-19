<?php
//Test Connection

// create/update a new contact "7-25-2019"
require_once("isdk.php");	
$app = new iSDK;

if( $app->cfgCon("aa478")){ 

	$contact_id = $_REQUEST['contactId'];
	$companyname= $_REQUEST['companyname'];
	
	//Get company ID
	$returnFields = array('CompanyID');
	$query = array('Company' => $companyname);
	$contacts = $app->dsQuery("Company",1,0,$query ,$returnFields );
	
	foreach($contacts as $contact){
		$company_id = $contact['CompanyID'];
	}
	
	//Get company email pattern data
	$returnFields = array('_CompanyEmailPattern');
	$pattern= $app->dsLoad("Company", $company_id , $returnFields);
	
	foreach($pattern as $patterns){
		$companypattern = $patterns;
	}
 	
 	//Update the company email pattern field of the contact
 	$grp = array('_CompanyEmailPattern1'  => $companypattern);
	$grpID = $app->dsUpdate("Contact", $contact_id, $grp);
} 
?> 

	
