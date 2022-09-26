<div id="fault-notes" style="display: none;">
   <div id="fault-location" style="display: none;">
      <p>Please confirm whether this issue is in a private area, or a communal area.</p>
      <div class="form-group valid">
         <label class="col-md-2 control-label">Location of the issue</label>
         <div class="col-md-8">
            <div class="radio-inline radio radio-nice">
               <input type="radio" name="IssueLocationType" value="Private" id="private" class="valid">
               <label for="private" data-title="This issue is in a private area">Private</label>
            </div>
            <div class="radio-inline radio radio-nice">
               <input type="radio" name="IssueLocationType" value="Communal" id="communal">
               <label for="communal" data-title="This issue is in a communal area">Communal</label>
            </div>
         </div>
      </div>
   </div>
   <div class="fault-notes-class-appliance" style="display: none;">
      <p>So that your problem is dealt with as quickly as possible please provide us with as many of the details as possible for the affected appliance. Please include the appliance type, make, model and serial number (if possible). Please also provide an outline of the problem and describe any warning lights or unusual sounds.</p>
   </div>
   <div class="fault-notes-class-bulbs" style="display: none;">
      <p>Light Bulbs: Please explain what the problem is and item(s) affected in as much detail as possible. e.g type and size of bulb, screw cap/bayonet cap, standard, compact, LED, halogen etc.</p>
   </div>
   <div class="fault-notes-class-fence" style="display: none;">
      <p>Fences: Please explain the problem in as much detail as possible. For non-timber fences also include what material the fence is made out of.  Please also upload photos of the fence.</p>
   </div>
   <div class="fault-notes-class-item" style="display: none;">
      <p>Please state the number and (if possible) the size of those affected and upload photos of it/them. Please also include any other relevant details in this section.</p>
   </div>
   <div class="fault-notes-class-leak" style="display: none;">
      <p>Please explain the extent of the leak by reference to: (a) how big a container is needed and how often the container has to be emptied e.g. one cup every hour or one cup every day; and (b) whether the leak is constant or intermittent.  Please also provide us with as many details as possible about the item that is leaking.</p>
   </div>
   <div class="fault-notes-class-rooms" style="display: none;">
      <p>Please explain the problem in as much detail as possible and provide details of which room or rooms are affected, when the problem was first noticed and how frequent the problem is.</p>
   </div>
   <div class="fault-notes-class-property-services" style="display: none;">
      <p>Please advise what is required, giving as much detail as possible.</p>
   </div>
   <div class="form-group fault-notes-class-appliance" style="display: none;">
      <label class="col-md-2 control-label" for="FaultApplianceType">Appliance type *</label>
      <div class="col-md-8">
         <input type="text" id="FaultApplianceType" class="form-control validate-ignore validate" name="FaultApplianceType" maxlength="30">
      </div>
   </div>
   <div class="form-group fault-notes-class-appliance" style="display: none;">
      <label class="col-md-2 control-label" for="FaultApplianceMake">Make *</label>
      <div class="col-md-8">
         <input type="text" class="typeahead-appliance-make form-control validate-ignore validate" id="FaultApplianceMake" name="FaultApplianceMake" maxlength="30">
      </div>
   </div>
   <div class="form-group fault-notes-class-appliance" style="display: none;">
      <label class="col-md-2 control-label" for="FaultApplianceModel">Model *</label>
      <div class="col-md-8">
         <input type="text" id="FaultApplianceModel" class="form-control validate-ignore validate" name="FaultApplianceModel" maxlength="30">
      </div>
   </div>
   <div class="form-group fault-notes-class-appliance" style="display: none;">
      <label class="col-md-2 control-label" for="FaultApplianceSerialNumber">Serial number</label>
      <div class="col-md-8">
         <input type="text" id="FaultApplianceSerialNumber" class="form-control validate-ignore" name="FaultApplianceSerialNumber" maxlength="30">
      </div>
   </div>
   <div class="form-group fault-notes-class-appliance" style="display: none;">
      <label class="col-md-2 control-label" for="FaultNumberOfFloors">Number of flights of stairs to the appliance</label>
      <div class="col-md-8">
         <input type="text" id="FaultNumberOfFloors" class="form-control validate-ignore" name="FaultNumberOfFloors" maxlength="30">
      </div>
   </div>
   <div class="form-group fault-notes-class-bulbs" style="display: none;">
      <label class="col-md-2 control-label" for="FaultBulbsType">Type of bulb (e.g. standard or LED)</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultBulbsType" name="FaultBulbsType" maxlength="50" placeholder="For example, Standard, LED, Fluorescent tube">
      </div>
   </div>
   <div class="form-group fault-notes-class-bulbs" style="display: none;">
      <label class="col-md-2 control-label" for="FaultBulbsSize">Size of bulb (e.g. standard or compact)</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultBulbsSize" name="FaultBulbsSize" maxlength="50" placeholder="For example,  standard or compact">
      </div>
   </div>
   <div class="form-group fault-notes-class-bulbs" style="display: none;">
      <label class="col-md-2 control-label" for="FaultBulbsFittings">Bulb fittings (e.g. screwcap or bayonette)</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultBulbsFittings" name="FaultBulbsFittings" maxlength="50" placeholder="For example, screwcap or bayonette">
      </div>
   </div>
   <div class="form-group fault-notes-class-bulbs" style="display: none;">
      <label class="col-md-2 control-label" for="FaultBulbsNumber">Number of bulbs affected</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultBulbsNumber" name="FaultBulbsNumber" maxlength="50" placeholder="For example, 1 or two">
      </div>
   </div>
   <div class="form-group fault-notes-class-fence" style="display: none;">
      <label class="col-md-2 control-label" for="FaultFenceDescription">Fence description (eg wood or wire)</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultFenceDescription" name="FaultFenceDescription" maxlength="50" placeholder="For example, wood or wire or brick">
      </div>
   </div>
   <div class="form-group fault-notes-class-item" style="display: none;">
      <label class="col-md-2 control-label" for="FaultItemNumber">Number affected</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultItemNumber" name="FaultItemNumber" maxlength="50" placeholder="For example, 1 or two">
      </div>
   </div>
   <div class="form-group fault-notes-class-item" style="display: none;">
      <label class="col-md-2 control-label" for="FaultItemSize">Size of item</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultItemSize" name="FaultItemSize" maxlength="50" placeholder="For example, 50cm x 15cm">
      </div>
   </div>
   <div class="form-group fault-notes-class-toilet" style="display: none;">
      <label class="col-md-2 control-label" for="FaultSoleToilet">Only toilet in property</label>
      <div class="col-md-8">
         <label class="radio-inline">
         <input type="radio" name="FaultSoleToilet" id="FaultSoleToiletNo" value="No" class="validate-ignore"> No
         </label>
         <label class="radio-inline">
         <input type="radio" name="FaultSoleToilet" id="FaultSoleToiletYes" value="Yes" class="validate-ignore"> Yes
         </label>
         <label for="FaultSoleToilet" class="error" style="display:none;"></label>
      </div>
   </div>
   <div class="form-group fault-notes-class-leak" style="display: none;">
      <label class="col-md-2 control-label" for="FaultLeakContainer">How big a container is needed for the leak?</label>
      <div class="col-md-8">
         <select class="form-control validate-ignore" id="FaultLeakContainer" name="FaultLeakContainer">
            <option value="">(please select)</option>
            <option>Cup</option>
            <option>Bowl</option>
            <option>Bucket</option>
            <option>Bath</option>
            <option>Other</option>
         </select>
      </div>
   </div>
   <div class="form-group fault-notes-class-leak" style="display: none;">
      <label class="col-md-2 control-label" for="FaultLeakEmptyRate">How often do you have to empty it?</label>
      <div class="col-md-8">
         <select class="form-control validate-ignore" id="FaultLeakEmptyRate" name="FaultLeakEmptyRate">
            <option value="">(please select)</option>
            <option>Every few minutes</option>
            <option>15 minutes</option>
            <option>30 minutes</option>
            <option>Hourly</option>
            <option>A few times a day</option>
            <option>Daily</option>
            <option>Other</option>
         </select>
      </div>
   </div>
   <div class="form-group fault-notes-class-leak" style="display: none;">
      <label class="col-md-2 control-label" for="FaultLeakIntermittency">Is the leak constant or intermittent?</label>
      <div class="col-md-8">
         <select class="form-control validate-ignore" id="FaultLeakIntermittency" name="FaultLeakIntermittency">
            <option value="">(please select)</option>
            <option>Constant</option>
            <option>Intermittent </option>
            <option>Other</option>
         </select>
      </div>
   </div>
   <div class="form-group fault-notes-class-rooms" style="display: none;">
      <label class="col-md-2 control-label" for="FaultRoomsName">Which room(s) affected?</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultRoomsName" name="FaultRoomsName" maxlength="50" placeholder="For example, kitchen, hallway">
      </div>
   </div>
   <div class="form-group fault-notes-class-rooms" style="display: none;">
      <label class="col-md-2 control-label" for="FaultRoomsStarted">When was the problem first noticed?</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultRoomsStarted" name="FaultRoomsStarted" maxlength="50" placeholder="For example, 1st Aug, last week">
      </div>
   </div>
   <div class="form-group fault-notes-class-rooms" style="display: none;">
      <label class="col-md-2 control-label" for="FaultRoomsFrequency">How frequent is the problem?</label>
      <div class="col-md-8">
         <input type="text" class="form-control validate-ignore" id="FaultRoomsFrequency" name="FaultRoomsFrequency" maxlength="50" placeholder="For example, daily, sometimes, often">
      </div>
   </div>
   <div class="form-group">
      <label class="col-md-2 control-label" for="FaultNotes">Fault detail *</label>
      <div class="col-md-8">
         <textarea id="FaultNotes" name="FaultNotes" rows="5" class="validate form-control resizing" maxlength="4000" aria-describedby="FaultNotesFieldNode" style="height: auto;" aria-invalid="true"></textarea>
         <div class="chars-remaining">4000 characters remaining</div>
         <em id="additional-notes-default" class="field-note">Please include as much useful information as possible about the issue</em>
         <em id="additional-notes-property-services" class="field-note" style="display: none;">Please advise when you would like the service to take place, (if applicable) how frequently you would like it to happen, and any other information about the service required</em>
      </div>
   </div>
</div>