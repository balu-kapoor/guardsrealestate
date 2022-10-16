<div class="panel-body">
   <div class="form-group valid">
      <label class="col-md-2 control-label" for="InputTenantNotes">Further notes</label>
      <div class="col-md-8">
         <textarea id="InputTenantNotes" name="InputTenantNotes" rows="5" maxlength="4000" class="form-control valid"></textarea>
         <div class="chars-remaining">4000 characters remaining</div>
         <em class="field-note">*e.g. parking restrictions or limited access for vans</em>
      </div>
   </div>
   <div class="form-group hide-if-no-occupation valid">
      <div id="TenantPresence" class="col-md-offset-2 col-md-8">
         <div class="radio radio-nice"><input type="radio" name="TenantPresence" value="false" checked="checked" id="input_TenantPresence_false" class="validate valid"><label for="input_TenantPresence_false">I give authority for my property to be accessed without me being present</label></div>
         <p class="form-control-static">
            <strong>
            OR
            </strong>
         </p>
         <div class="radio radio-nice"><input type="radio" name="TenantPresence" value="true" id="input_TenantPresence_true" class="validate"><label for="input_TenantPresence_true">I want to be present when the work is carried out</label></div>
      </div>
   </div>
   <div class="form-group hide-if-no-occupation hide-if-tenant-present valid" style="">
      <label class="col-md-2 control-label" for="InputTenantPetInformation">Pet information</label>
      <div class="col-md-8">
         <input type="text" id="InputTenantPetInformation" class="form-control valid" name="InputTenantPetInformation" maxlength="200">
         <em class="field-note">*If there are pets in the property, please provide details</em>
      </div>
   </div>
   <div class="form-group hide-if-no-occupation hide-if-tenant-present valid" style="">
      <label class="col-md-2 control-label" for="InputTenantAlarmInformation">Alarm information</label>
      <div class="col-md-8">
         <input type="text" id="InputTenantAlarmInformation" class="form-control valid" name="InputTenantAlarmInformation" maxlength="200">
         <em class="field-note">*If there are alarms in the property, please provide details</em>
      </div>
   </div>
   <div class="form-group hide-if-no-occupation hide-if-tenant-present valid" style="">
      <label class="col-md-2 control-label" for="InputTenantParkingRestrictions">Parking restrictions</label>
      <div class="col-md-8">
         <input type="text" id="InputTenantParkingRestrictions" class="form-control valid" name="InputTenantParkingRestrictions" maxlength="200">
         <em class="field-note">*If there are parking restrictions near the property, please provide details</em>
      </div>
   </div>
   <!-- <div class="warning-section spacer-top spacer-bottom hide-if-no-occupation">
      <div class="form-group hide-if-no-occupation valid">
         <div class="col-md-offset-2 col-md-8">
            <label for="InputCovidHasSymptoms">Does anyone in your household have any symptoms of coronavirus?</label>
            <em class="field-note">
            The symptoms being a new continuous cough and/or high temperature.
            <a href="#" target="_doc">Click here for more information</a>
            </em>
            <div class="form-inline">
               <div class="radio radio-nice radio-inline"><input type="radio" name="InputCovidHasSymptoms" value="Yes" id="input_InputCovidHasSymptoms_Yes" class="validate valid"><label for="input_InputCovidHasSymptoms_Yes">Yes</label></div>
               <div class="radio radio-nice radio-inline"><input type="radio" name="InputCovidHasSymptoms" value="No" id="input_InputCovidHasSymptoms_No" class="validate"><label for="input_InputCovidHasSymptoms_No">No</label></div>
            </div>
         </div>
      </div>
      <div class="form-group hide-if-no-occupation">
         <div class="col-md-offset-2 col-md-8">
            <label for="InputCovidIsBeingTested">Is anyone in your household being tested for coronavirus? </label>
            <div class="form-inline">
               <div class="radio radio-nice radio-inline"><input type="radio" name="InputCovidIsBeingTested" value="Yes" id="input_InputCovidIsBeingTested_Yes" class="validate"><label for="input_InputCovidIsBeingTested_Yes">Yes</label></div>
               <div class="radio radio-nice radio-inline"><input type="radio" name="InputCovidIsBeingTested" value="No" id="input_InputCovidIsBeingTested_No" class="validate"><label for="input_InputCovidIsBeingTested_No">No</label></div>
            </div>
         </div>
      </div>
      <div class="form-group hide-if-no-occupation">
         <div class="col-md-offset-2 col-md-8">
            <label for="InputCovidIsSelfIsolating">Is anyone in your household self-isolating due to potential coronavirus infection?</label>
            <div class="form-inline">
               <div class="radio radio-nice radio-inline"><input type="radio" name="InputCovidIsSelfIsolating" value="Yes" id="input_InputCovidIsSelfIsolating_Yes" class="validate"><label for="input_InputCovidIsSelfIsolating_Yes">Yes</label></div>
               <div class="radio radio-nice radio-inline"><input type="radio" name="InputCovidIsSelfIsolating" value="No" id="input_InputCovidIsSelfIsolating_No" class="validate"><label for="input_InputCovidIsSelfIsolating_No">No</label></div>
            </div>
         </div>
      </div>
      <div class="form-group hide-if-no-occupation">
         <div class="col-md-offset-2 col-md-8">
            <label for="InputCovidHasBeenInContact">Has anyone in your household been in contact with someone who has tested positive for coronavirus, within the last 14 days?</label>
            <div class="form-inline">
               <div class="radio radio-nice radio-inline"><input type="radio" name="InputCovidHasBeenInContact" value="Yes" id="input_InputCovidHasBeenInContact_Yes" class="validate"><label for="input_InputCovidHasBeenInContact_Yes">Yes</label></div>
               <div class="radio radio-nice radio-inline"><input type="radio" name="InputCovidHasBeenInContact" value="No" id="input_InputCovidHasBeenInContact_No" class="validate"><label for="input_InputCovidHasBeenInContact_No">No</label></div>
            </div>
         </div>
      </div>
   </div> -->
   <div class="form-group form-group-issue-submit">
      <div class="col-md-offset-2 col-md-8">
         <div class="checkbox checkbox-nice hide-if-no-occupation">
            <label class="check_container">
            <input type="checkbox" name="VulnerableOccupiers" class="" id="inputVulnerableOccupiers" value="true">            
            Is there a <a href="#modal-vulnerable-occupiers" role="button" class="layer-link" data-toggle="modal">vulnerable occupier</a> at this property?
            </label>
         </div>
      </div>
   </div>
   <div class="form-group form-group-issue-submit valid">
      <div class="col-md-offset-2 col-md-8">
         <div class="checkbox checkbox-nice input-agree-terms">
            <label class="check_container">
            <input type="checkbox" name="agreeTerms" class="validate valid" id="inputAgreeTerms" aria-invalid="false">            
            I agree to the <a href="#modal-issue-create-terms" role="button" class="layer-link" data-toggle="modal">terms and conditions</a>
            </label>
         </div>
      </div>
   </div>
   <div class="form-group form-group-issue-submit">
      <div class="col-md-offset-2 col-md-8">
         <div class="checkbox checkbox-nice input-remember-me">
            <label class="tipable check_container" data-title="Do not use this option on a shared PC" data-original-title="" title="">
            <input type="checkbox" name="RememberMe" class="" id="inputRememberMe" value="true">            
            Remember my details next time
            </label>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="col-md-offset-2 col-md-8">
         <p>
            <a class="btn btn-link" href="<?php echo e(url('/privacy')); ?>" target="_www" aria-label="Vierw the privacy notice">View the privacy notice</a>
         </p>
      </div>
   </div>
</div><?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/includes/confirm-form.blade.php ENDPATH**/ ?>