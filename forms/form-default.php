<form id="get-started-form" class="get-started-form" method="POST" onsubmit="return jsmd_web_to_lead_populate();">
    <input type="hidden" id="retURL" name="retURL" value="">
	<input type="hidden" name="oid" id="oid">
	<input type="hidden" id="external" name="external" value="1">
	<input type="hidden" id="teravisiontech__Web_to_x_form_id__c" name="teravisiontech__Web_to_x_form_id__c" value="a0w40000008wK41AAE">
    <input type="hidden" name="Campaign_ID" value="null">

    <!--  ----------------------------------------------------------------------  -->
    <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
    <!--  these lines if you wish to test in debug mode.                          -->
<!--          <input type="hidden" name="debug" value=1>                              -->
    <!--  <input type="hidden" name="debugEmail"                                  -->
    <!--  value="hwoolmington@jumpstartmd.com">                                   -->
    <!--  ----------------------------------------------------------------------  -->
    <section class="fields">
        <fieldset>
            <input  id="first_name" maxlength="40" name="first_name" type="text" required>
            <label for="first_name">First Name</label>
        </fieldset>
    
        <fieldset>
            <input  id="last_name" maxlength="80" name="last_name" type="text" required>
            <label for="last_name">Last Name</label>
        </fieldset>
        
        <fieldset>
            <input  id="email" maxlength="80" name="email" type="email" required>
            <label for="email">Email</label>
        </fieldset>
      
        <fieldset>
            <input  id="phone" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" name="phone" type="tel" title="Phone Format: XXX-XXX-XXXX"required>
            <label for="phone">Phone</label>
        </fieldset>
        
            <label>What service are you inquiring about?</label>
            <select required onchange="jmd_set_ret_url()" id="primary-product" name="00N33000002PWo1" title="Primary Product">
                <option value="">Please Choose an Option</option>
                <option value="JumpstartMD® Weight Loss Program">JumpstartMD® Weight Loss Program</option>
                <option value="Bioidentical Hormone Replacement">Bioidentical Hormone Replacement</option>
            </select>
            <br>
        
            <label>How did you first hear about JumpstartMD?</label>
            <select required id="00N33000002PWnw" name="00N33000002PWnw" title="Lead channel">
                <option value="">Please Choose an Option</option>
                <option value="Friend or member">Friend or member</option>
                <option value="Physician">Physician</option>
                <option value="Radio">Radio</option>
                <option value="Online search">Online search</option>
                <option value="Online ad">Online ad</option>
                <option value="TV commercial">TV commercial</option>
                <option value="Other">Other</option>
            </select>
        
        <label for="honey-bean" class="honey-bean">Honey Bean</label>
        <input id="honey_bean" class="honey-bean" name="honey-bean" type="text">
    </section>

    <input id="GA_Campaign__c" name="GA_Campaign__c" type="hidden" class="text " value="" />			
    <input id="GA_Content__c" name="GA_Content__c" type="hidden" class="text " value="" />		
    <input id="GA_Medium__c" name="GA_Medium__c" type="hidden" class="text " value="" />		
    <input id="GA_Source__c" name="GA_Source__c" type="hidden" class="text " value="" />		
    <input id="GA_Term__c" name="GA_Term__c" type="hidden" class="text " value="" />		
    <input id="Source_URL__c" name="Source_URL__c" type="hidden" class="text " value="<?php the_permalink(); ?>" />
    
    <div class="button-wrap">
        <input id="get_started_submit" type="submit" name="get_started_submit" value="Get Started">
    </div>
</form>
	