# aa478-email-pattern
<p align="center">
<img src="https://gedlynk.com/wp-content/uploads/2015/11/Infusionsoft-Logo-EPS-vector-image-2.png" style="width:35%;"/>
</p>

<h3>For more info about the infusionsoft syntax Click <a href="https://developer.infusionsoft.com/docs/xml-rpc/#contact">here</a></h3>
<h4>Current URL: https://scaleupmarketing.asia/httpscripts/aa478/note/removetags.php</h4>
<p>Script Description: 
  When HTTP POST REQUEST is triggered 
  carrying the variables companyname & contactId
  
  The script will scan the infusionsoft database if the company exists using the data from the "companyname" variable that we passed   
  If it exist, the script will get the company id of that company or else it will create a new one.   
  After getting the company id from the company table, we will also need to get the custom field "_CompanyEmailPattern"   
  After getting the "_CompanyEmailPattern" data, we will update "_CompanyEmailPattern1" customer field of the current contact.
</p>
