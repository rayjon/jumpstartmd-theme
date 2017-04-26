<form class="contact-us-form" name="contact-us-form" id="contact-us-form" method="post" onsubmit="return jsmd_web_to_lead_populate()">
	<input type="hidden" name="retURL" value="http://www.jumpstartmd.com/thank-you-for-contacting-us/" />
	<input type="hidden" name="oid" id="oid">
	<input type="hidden" id="external" name="external" value="1" />
	<input type="hidden" id="teravisiontech__Web_to_x_form_id__c" name="teravisiontech__Web_to_x_form_id__c" value="a0w40000008wKImAAM"/>
    <input type="hidden" name="Campaign_ID" value="null" />
    
    <!--  ----------------------------------------------------------------------  -->
    <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
    <!--  these lines if you wish to test in debug mode.                          -->
<!--
    <input type="hidden" name="debug" value=1>                             
    <input type="hidden" name="debugEmail" value="web@crisaba.com">
-->
    <!--  ----------------------------------------------------------------------  -->
    
    <fieldset>
        <label for="I_am__c" >I am</label>
        <select id="I_am__c" name="I_am__c" title="" class="">
            <option value="Interested in the program">Interested in the program</option>
            <option value="a current member">a current member</option>
            <option value="a former member">a former member</option>
        </select>
    </fieldset>
    
    <fieldset>
	    <label for="first_name">First Name</label>
        <input id="first_name" name="first_name" type="text"  size="20" required>
    </fieldset>
	
	<fieldset>
	    <label for="last_name">Last Name</label>
        <input id="last_name" name="last_name" type="text" size="20" required>
	</fieldset>
	
	<fieldset>
	    <label for="email">Email</label>
        <input id="email" name="email" type="email" size="20" required>
	</fieldset>
	
	<fieldset>
        <label for="phone">Phone</label>
        <input id="phone" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" name="phone" type="tel" title="Phone Format: XXX-XXX-XXXX" required>
	</fieldset>
	
	<fieldset>
	    <label for="Comments__c">Comments</label>
        <textarea id="Comments__c" name="Comments__c" rows="5" cols="30" required></textarea>
	</fieldset>
	
	<label for="honey-bean" class="honey-bean">Honey Bean</label>
    <input id="honey_bean" class="honey-bean" name="honey-bean" type="text">
	
	<input id="GA_Campaign__c" name="GA_Campaign__c" type="hidden" value="" class="text " />
	<input id="GA_Content__c" name="GA_Content__c" type="hidden" value="" class="text " />
	<input id="GA_Medium__c" name="GA_Medium__c" type="hidden" value="" class="text " />
	<input id="GA_Source__c" name="GA_Source__c" type="hidden" value="" class="text " />
	<input id="GA_Term__c" name="GA_Term__c" type="hidden" value="" class="text " />
    <input id="Source_URL__c" name="Source_URL__c" type="hidden" class="text " value="<?php the_permalink(); ?>" />

    <div class="button-wrap">
        <input type="submit" value="Contact Us" name="submit">
    </div>
</form>