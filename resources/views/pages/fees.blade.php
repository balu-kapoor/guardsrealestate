@extends('layout')

@section('page-head')
    @include('includes.head')
@endsection

@section('page-css')
    {{--    load page css here--}}
@endsection

@section('navigation')
    @include('includes.navigation')
@endsection

@section('page-body')
    <main>

        <div class="main-heading-row">
            <img src="{{asset('images/serviceNew.jpg')}}" class="responsive-img ">
            <div class="header-row-heading">
                <div class="header-row">
                    <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">fees & terms</h1>
                </div>
            </div>
        </div>

        <div class="about-us">
            <div class="privacy-container">
                <div class="container">
                    <div class="privacy-text-block">
                        <div class="guards-heading-box">
                            <h4 class="heading-guards guards-border guards-bottom-border">Guards Real Estate’s Fee structure is extremely competitive.</h4>
                        </div>
                        <p class="p-l-text">We offer a No Let No Fee & No Sale No Fee Service to all of our clients, for more information get in touch. </p>
                        <p class="p-l-text">See Standard Fees Below: </p>
                    </div>
                    <!-- form -->
                    @if (!Cookie::get('asked-for-fees'))                                                                                
                    <div class="col s12 m6">
                        <!-- <h4 class="heading-guards guards-border guards-bottom-border">Send us an email</h4> -->
                        <p class="contact-text p-l-text">
                            Please submit the form to see fee details.
                        </p>
                        <div class="form-block">
                            <div class="row">
                                <form class="col s12" method="post" action="{{route('submit-enquiry')}}">
                                    @csrf
                                    <div class="row">                                        
                                        <div class="input-field col s12 m6 {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <input name="name" id="first_name" type="text" placeholder="Name" value="{{ old('name')}}">
                                        </div>
                                        <div class="input-field col s12 m6 {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <input name="email"  id="email" type="email" placeholder="Email" value="{{ old('email')}}">
                                        </div>
                                        <div class="input-field col s12 m12 {{ $errors->has('phone') ? 'has-error' : '' }}">
                                            <input name="phone"  id="phone" type="text" placeholder="Phone" value="{{ old('phone')}}">
                                        </div>                                       
                                        <div class="input-field col s12 m12 {{ $errors->has('message') ? 'has-error' : '' }}">
                                            <textarea name="message"  id="message" class="materialize-textarea" placeholder="Your Message">{{ old('message')}}</textarea>
                                        </div>
                                        <div class="col s12">
                                            <button type="submit" value="Submit" class="btn-guards">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                    <ul class="collapsible">
                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Seller Fees</div>
                            <div class="collapsible-body">
                                <b>Standard Fees</b>
                                <table>
                                    <tr>
                                        <td style="width:60%">Sole agency</td> <td>2.5% (3% + VAT)</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">Multiple agency</td> <td>3% (3.6% + VAT)</td>
                                    </tr>
                                </table>
                                <br/>
                                <b>Other Fees</b>
                                <table>
                                    <tr>
                                        <td style="width:60%">Energy Performance Certificate</td> <td>£115.60 (+VAT)</td>
                                    </tr>
                                </table>
                            </div>

                        </li>
                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Buyer Fees</div>
                            <div class="collapsible-body">
                                Full conveyancing service. Please request individual quotations. Conveyancing will pay a referral fee to Guards Real Estate at their own discretion. This does not affect the amount of legal fees you pay or your ability to choose your own legal services provider.
                            </div>

                        </li>
                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Tenant Fees</div>
                            <div class="collapsible-body">
                                <b>Security Deposit</b>
                                <table>
                                    <tr>
                                        <td style="width:60%">Deposit for a long-let tenancy</td> <td>Equivalent to five weeks' rent</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">Deposit for a short-let tenancy</td> <td>Equivalent to five weeks' rent</td>
                                    </tr>
                                </table>
                                <br/>
                                <b>Holding Deposit</b>
                                <table>
                                    <tr>
                                        <td style="width:60%">Holding deposit for all tenancies</td> <td>One weeks rent</td>
                                    </tr>
                                </table>
                                <br/>
                                <b>Other fees</b>
                                <table>
                                    <tr>
                                        <td style="width:60%">Early termination upon landlord's approval being a replacement tenant support package.This includes referencing for new replacement tenant, AST for new replacement tenant ,deed of surrender, marketing of property and providing tenant leads. The liability of finding the new tenant falls on the tenant who is looking to terminate their contract earlier when in breach of their agreement.</td> <td>£420+(VAT)</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">Contract variation, novation, amendment or change of occupant at the tenant’s request within an existing tenancy</td> <td>£50+(VAT)</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">Default fee of interest on late rent if rent is more than 14 days overdue</td> <td>3% above Bank of England base rate</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">Default fee for lost keys or other respective security devices</td> <td>Actual cost of replacement</td>
                                    </tr>
                                </table>
                                <small><i>All fees unless otherwise stated are inclusive of VAT</i></small>
                            </div>

                        </li>
                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Landlord Fees</div>
                            <div class="collapsible-body">
                                <b>Standard Fees</b>
                                <table>
                                    <tr>
                                        <th style="width:60%">Lettings only</th> <th>11% (+ VAT)</th>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- Renewal for 1st year</td> <td>10% (+ VAT)</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- Renewal for 2nd year</td> <td>9% (+ VAT)</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- Continuation period after renewals</td> <td>7% (+ VAT)</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th style="width:60%">Management service (fees apply per property)</th>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- 1-2 properties</td> <td>6% (+ VAT)</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- 3-4 properties</td> <td>5% (+ VAT)</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- 5 or more properties</td> <td>4% (+ VAT)</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- Renewals on 1st 2 years / Continuation period after renewals</td> <td>4% (+ VAT)</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th style="width:60%">Short lets (inc obligatory management service)</th> <th>24% (+ VAT)</th>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- Renewals on 1st 2 years</td> <td>24% (+ VAT)</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th style="width:60%">Tenancy Agreement</th>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- Long let</td> <td>£168 (+VAT)</td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">- Short let</td> <td>£168 (+VAT)</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td style="width:60%">Anti-Money Laundering and Identification Checking Fee</td> <td> £30 (+VAT)</td>
                                    </tr>
                                </table>

                            </div>

                        </li>

                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Other Fees</div>
                            <div class="collapsible-body">

                                <table>
                                    <tr>
                                        <th>Size</th>
                                        <th>Cleaning</th>
                                        <th>
                                            Inventory/Check-in
                                        </th>
                                        <th>
                                            Check-out
                                        </th>
                                        <th>
                                            Electrical Report
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Studio</td>
                                        <td>
                                            £192 (+VAT)
                                        </td>
                                        <td>
                                            £175 (+VAT)
                                        </td>
                                        <td>
                                            £150 (+VAT)
                                        </td>
                                        <td>
                                            £240 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1 bed</td>
                                        <td>
                                            £240 (+VAT)
                                        </td>
                                        <td>
                                            £200 (+VAT)
                                        </td>
                                        <td>
                                            £150 (+VAT)
                                        </td>
                                        <td>
                                            £240 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2 bed</td>
                                        <td>
                                            £270 (+VAT)
                                        </td>
                                        <td>
                                            £225 (+VAT)
                                        </td>
                                        <td>
                                            £150 (+VAT)
                                        </td>
                                        <td>
                                            £300 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3 bed</td>
                                        <td>
                                            £330 (+VAT)
                                        </td>
                                        <td>
                                            £250 (+VAT)
                                        </td>
                                        <td>
                                            £200 (+VAT)
                                        </td>
                                        <td>
                                            £360 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4 bed</td>
                                        <td>
                                            £420 (+VAT)
                                        </td>
                                        <td>
                                            £300 (+VAT)
                                        </td>
                                        <td>
                                            £200 (+VAT)
                                        </td>
                                        <td>
                                            £450 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5+ bed</td>
                                        <td>
                                            £504 (+VAT)
                                        </td>
                                        <td>
                                            £325 (+VAT)
                                        </td>
                                        <td>
                                            £200 (+VAT)
                                        </td>
                                        <td>
                                            £540 (+VAT)
                                        </td>
                                    </tr>
                                </table>
                                <br/>
                                <table>
                                    <tr>
                                        <td style="width:60%">
                                            Additional Property Inspection
                                        </td>
                                        <td>
                                            £120 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Carbon Monoxide Alarm Installation
                                        </td>
                                        <td>
                                            £75 plus £20 per alarm (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Court Appearance (charged per day or part thereof)
                                        </td>
                                        <td>
                                            £420 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Deposit Protection Registration
                                        </td>
                                        <td>
                                            £50 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Energy Performance Certificate
                                        </td>
                                        <td>
                                            £115.60 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Fire Blanket
                                        </td>
                                        <td>
                                            £20 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Gas Safety Certificate
                                        </td>
                                        <td>
                                            £140 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            HMRC Return for Non-Resident Landlords
                                        </td>
                                        <td>
                                            £350 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Income & Expenditure Report
                                        </td>
                                        <td>
                                            £145 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Legionella Risk Assessment
                                        </td>
                                        <td>
                                            £120 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Licensing Application Service Fee
                                        </td>
                                        <td>
                                            £299 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Portable Appliance Test
                                        </td>
                                        <td>
                                            £150 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Section 21
                                        </td>
                                        <td>
                                            £120 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Deed of Surrender
                                        </td>
                                        <td>
                                            £120 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Addendum Letter
                                        </td>
                                        <td>
                                            £120 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Smoke Alarm Installation
                                        </td>
                                        <td>
                                            £75 plus £20 per alarm (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Smoke & Carbon Monoxide Test (on start of Tenancy)
                                        </td>
                                        <td>
                                            £60 (+VAT)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Works Managed
                                        </td>
                                        <td>
                                            10% (+VAT) of invoice total
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:60%">
                                            Works Non-Managed
                                        </td>
                                        <td>
                                            20% (+VAT) of invoice total
                                        </td>
                                    </tr>
                                </table>
                                <br/>

                            </div>

                        </li>
                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Lettings Terms and Conditions</div>
                            <div class="collapsible-body">
                                <div class="privacy-text-block">
                                    <p class="p-l-text">Notice of Right to Cancel:</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">ONCE THE TERMS AND CONDITIONS HAVE BEEN SIGNED THERE IS AN AUTOMATIC 14 DAYS WITHIN WHICH YOU CAN CANCEL THE INSTRUCTION FOR US TO LET OUT YOUR PROPERTY</h4>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">1. DEFINITIONS AND INTERPRETATION</h4>
                                    </div>
                                    <p class="p-l-text">The following definitions and rules of interpretation apply in this Agreement.</p>
                                </div>
                                <div class="privacy-text-block">
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">1.1 DEFINITIONS</h4>
                                    </div>
                                    <p class="p-l-text"><b>Tenant:</b> shall mean any one or more individuals or corporate entities introduced by us or named as tenant in the tenancy agreement or lease.</p>
                                    <p class="p-l-text"><b>The Tenancy:</b> the entire period that the tenant remains in occupation of the property including any extension or renewal or period of holding over whether by way of agreement, memorandum or otherwise.</p>
                                    <p class="p-l-text"><b>Rent:</b> any payment to be made by the tenant or the agent(s) of the tenant for use of the property whether expressed to be rent, a premium or any other form of payment, whether paid directly by the tenant or his agent(s) or obtained from other means such as deduction from the deposit
                                    </p>
                                    <p class="p-l-text"><b>Commission:</b> the commission or fees, details of which are set out in Section 4.</p>
                                </div>
                                <div class="privacy-text-block">
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">2. THE SERVICES</h4>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">2.1 Lettings Service</h4>
                                    </div>
                                    <p class="p-l-text">a) To reach agreement with you, the landlord, in advance a rent to be quoted for the property and market the property as appropriate at the agreed rental.</p>
                                    <p class="p-l-text">b) Introduce a prospective tenant for the property.</p>
                                    <p class="p-l-text">c)Apply for appropriate references and forward to you for approval (or agree with you in writing in advance the extent of the agent ’s authority to accept a tenant on the landlords’ behalf). Any company   investigations or searches would be charged separately. (x2.5 annual rent to be worked out in line with the offer form, independent reference checks will be an additional charge of £50+vat and will need to be selected from the owner acceptance form)</p>
                                    <p class="p-l-text">d) Negotiate the terms of the tenancy between yourself and the Tenant and ensure that an appropriate tenancy agreement and notices are prepared and signed by or on behalf of the landlord and tenant.</p>
                                    <p class="p-l-text">e) Collect and hold any security deposit paid by the tenant against rent arrears or dilapidations should you (the Landlord) require so in writing.</p>
                                    <p class="p-l-text">f) Arrange for the preparation of an independent inventory prior to the commencement of the tenancy (if requested), and for the inventory to be checked at the commencement of the tenancy (see para 4.4 for costs)</p>
                                    <p class="p-l-text">g) Make all reasonable endeavours to notify the Local Authority and service companies (gas, electricity, water ) of a change of occupant or user at the commencement of the tenancy if relevant account numbers and information is provided to us (the Agent). We cannot accept any responsibilities for inaccuracies or delays on the part of the Local Authority or Service Companies concerned. Please note that these bodies increasingly require instructions from a landlord or tenant as appropriate, not from an agent. We also recommend you (the Landlord) to forward the Tenants’ details to the Local Authority.</p>
                                    <p class="p-l-text">h) In the event you agree to a change of tenant during an existing tenancy, we reserve the right to make an additional charge to cover the costs of taking references, arranging for any new tenant(s) to enter into the tenancy agreement and the service of any appropriate notices.</p>
                                    <p class="p-l-text">i) Collect the monthly or quarterly instalments of rent on landlord’s behalf and forward net rents to the landlord’s bank account.</p>
                                    <p class="p-l-text">j) Prepare and submit monthly or quarterly statement to yourself and /or your accountant.</p>
                                    <p class="p-l-text">k) Arrange for the inventory to be checked at the termination of the tenancy and a check-out report to be supplied at a reasonable cost. Any damage or dilapidation’s that may have occurred during the tenancy are recorded on this report. A copy of this sent to the Landlord and Tenant who must mutually agree what amount (if any) is to be deducted from the dilapidation’s deposit.</p>
                                    <p class="p-l-text">l)Should any work be requested to be organised, organised or carried out by our Suppliers with the exception of the Landlords who take our Management Package, we will charge 20% administration fee.</p>
                                    <p class="p-l-text">m) Should you require a property visit when the property has not been managed by Guards Real Estate, we will charge £ 120.00 (plus VAT £ 144.00) per any visit.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">2.2 Lettings and Management Service</h4>
                                    </div>
                                    <p class=p-l-text">In addition to the services outlined in 2.1 above, we will:</p>
                                    <p class=p-l-text">n) Make all reasonable endeavours to notify the Local Authority and service companies (telephone, gas, electricity, water) of a change of occupant or user at the termination of the tenancy on the basis of g) above.</p>
                                    <p class=p-l-text">o) Pay from rent received current outgoings such as ground rent, insurance premiums (on receipt of demands), service charges, maintenance contracts, etc., subject to the agent holding sufficient funds on your behalf. Although we will best attempt to query any obvious discrepancies it must be understood we are entitled to accept and pay without question demands and accounts which appear to be in order. Please note you are expected to instruct your Insurance Company governed by Financial Services and Markets Act 2000 we are unable to arrange insurance on your behalf, notify your insurer of any claims or complete the documentation relating to those claims.</p>
                                    <p class=p-l-text">We cannot accept responsibility for the adequacy of any insurance cover or for the verification of service/maintenance charge demands or estimates where applicable.</p>
                                    <p class=p-l-text">p) Carry out a routine inspection of the property twice a year included on full management fee of 6% (if no serious defect requiring our inspection has been reported to us in the meantime) and report to the landlord on each occasion. It should be appreciated that any such inspection and assessment of those defect which are brought to our notice would be of a cursory nature and would embrace only apparent or obvious defects and would not amount in any way to a structural or other survey. Any further inspection by us or structural or other survey by a qualified body would be by special arrangement and subject to an additional fee. We shall not be responsible for any hidden or latent defects within the property. Should you require more than 2 visits a year, we can arrange so at reasonable cost please see m).</p>
                                    <p class=p-l-text">q) All property management jobs obtained by Guards Real Estate will provide the Landlord with a minimum of 2 estimates from different suppliers. Minding we hold sufficient funds, or the Landlord has provided Guards Real Estate with sufficient funds to carry the work out, the work will be organised within 48 hrs and completed within 7 days from the day the complaint has been reported.</p>
                                    <p class=p-l-text">r) Deal with day-to-day management matters including minor works up to a maximum of £ 360. 00 inc VAT for any one item without further instruction from you, the cost of such work to be paid from the initial payment of rent and maintained at the agreed level from subsequent net rents passing from the tenant to yourself. Please note that we are not able to arrange for any works prior to a letting unless we are holding sufficient funds from you to cover the costs.</p>
                                    <p class=p-l-text">s) Deal with matters of redecoration, renewal, replacement or repair between £300.00 and £10, 000 with your verbal authority (save in the case of an emergency and/or when it is impractical to do so). Except in an emergency, whenever practical, 3 estimates will be obtained and submitted to the landlord for works likely to cost more than £ 350.00. Upon receipt of the landlord ’s written approval of such estimates we will organise and inspect works in excess of any fees for an additional administration fee of 20% of the cost of the works. Such charge will be deducted from any monies received by us on your behalf unless payment is received from you direct.</p>
                                    <p class=p-l-text">t) Lodge and progress any insurance claim relating to the property on your behalf. An additional fee of 20% of total value of the claim will be charged, for which we will pursue the claim (without liability as to its merits) through to payment or rejection by your insurers. Should you decide not to proceed with any insurance claim, we shall be entitled to charge for the work undertaken. In the event the claim is not successful, we shall be entitled to charge for the work undertaken. u) Put in hand any cleaning and repair works arising from the schedule of dilapidation’s as outlined in k) above (subject to availability of funds held on your behalf) and obtain estimates for major works if appropriate. We will submit the same to both the landlord and tenant and it will be your responsibility to agree with the tenant what amount is to be deducted from the dilapidations deposit.</p>
                                    <p class=p-l-text">u) Arrange and pay from rent received for any cleaning and minor repairs on a change of tenant during the management appointment.</p>
                                    <p class=p-l-text">v) When managing a property let by another party, we will require copies of the tenancy agreement, inventory, appliance guarantees or warranties, tenant references and any other relevant notices or documents relating to the property. We will also require a set of keys for the property for emergency purposes.</p>
                                    <p class=p-l-text">w)  20% administration charge for property maintenance works unless on
                                        Guards Protection managed package which will become 10% administration charge.
                                        For us to obtain any contractor quotes there will be a £50 upfront payment due for all
                                        non managed properties, the £50 will be refunded into the quote when a job is confirmed via text, verbally or email & the job is instructed, alternatively the £50 will not be refunded to the payee when not accepting a quote through Guards Real Estate as a payment fee.
                                    </p>
                                    <h5>Notice of Termination of Services </h5>
                                    <p class=p-l-text">Unless otherwise agreed in writing in advance, our appointment as agents is for the duration of the tenancy as defined in these Terms of Conditions of Business, subject to 14 days written notice to terminate on either side. In the event such termination takes place, we will remain entitled to commission for introducing the tenant(s).</p>
                                    <p class=p-l-text">In the event that the Tenant or a person connected to the Tenant renews, extends, holds-over and/or enters into an assumed, inferred, written or verbal new agreement for which rental income is received or payable, the commission is payable to Guards Real Estate regardless of Landlord cancelling or terminating this agreement.</p>
                                    <p class=p-l-text">It must be noted that our standard management service as set out above does not apply when the property is not let, but we shall be pleased to discuss with your requirements for management during void periods. For the avoidance of doubt the managed package is Guards Protection Management Package. Cancelation policy for Guards protection management package is 3 months in areas, it is noted that all maintenance works which have been confirmed prior to the cancellation of the management package are to continue with Guards Real Estate and there will be the standard fee of 20% administration charges for the organisation of these works in the event of a cancellation process being activated.</p>
                                </div>
                                <div class="privacy-text-block">
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3. GENERAL INFORMATION</h4>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.1 Rent</h4>
                                    </div>
                                    <p class="p-l-text">Unless otherwise agreed, the rent quoted to a tenant by us on your behalf will be inclusive of all out going for which you are liable as a landlord such as ground rent, service charges, etc., but will exclude gas electricity and other fuel charges, telephone, water rates and council tax (or any charge that may replace it) which are payments for which the tenant is in most circumstances responsible for.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.2 Dilapidation’s Deposit</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>Unless otherwise agreed, this will normally be a sum equivalent to five weeks rent. The agent will collect and hold the security deposit in a separate client account.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>It is Landlords’ responsibility to register the Deposit with the relevant protection scheme. The Landlord can decide to instruct the agent to organise the protection of the Deposit or can do it himself/herself. Guards Real Estate holds no responsibility for the Deposit being registered with the relevant service when held by Landlord and it is Landlords’ responsibility to return the Deposit to the Tenant at the end of the Tenancy in accordance with the relevant clauses set out in the Tenancy Agreement.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>The Agent (Guards Real Estate) is an Insurance Member of My Deposit governmental deposit protection scheme. When the Deposit is held by Agent (Guards Real Estate) it will be insured by “My Deposits” deposit protection scheme at Landlords’ cost £ 50.00 (£ 60.00). Full details of the scheme can be found at <a href="www.mydeposits.co.uk" target="_blank"></a>www.mydeposits.co.uk.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Any interest made on the Deposit when held by Guards Real Estate will remain in possession of Guards Real Estate.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Should Guards Real Estate be appointed to hold the Deposit and Landlord decides to use his/her own scheme, the Landlord has to request this in writing and provide the details of this scheme (certificate for the relevant Tenancy and any other relevant details) must be provided to Guards Real Estate at least 5 days prior to the commencement of the Tenancy. Should the Landlord fail in obtaining this duty within 5 days, Guards Real Estate will register the Deposit as per</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>to protect Landlords’ interest and in obtaining Guards Real Estate legal obligations.</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.3 Inventories</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>We recommend that an independent Inventory Clerk is employed to prepare an Inventory and check in/check out on the commencement and termination of the tenancy. Please note this is a requirement if we are providing the Letting and Management Service. In arranging for the preparation of an Independent Inventory, we cannot be held responsible for an error or omission on the part of the appointed clerk.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Guards Real Estate strongly advise all clients to obtain Inventory and Schedule of Condition as Check In Report (upon the start of the Tenancy) and Inventory and Schedule of Condition as Check Out Report (upon termination of the Tenancy). Should you decide you will not obtain these, we will be unable to assist you in recovering any damages from the Deposit.</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.4 Rent Remittances</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>The UK banking system is such that it can take up to 10 days to clear funds paid to us by means of standing order or cheque and to transfer them (less fees and any other monies due to us) to your account. Any monies dispatched will be without prejudice to final clearance.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Guards Real Estate take no responsibility for any charges made by banks whilst doing the rent payments to the landlord whether it is an Overseas Landlord (currency exchange or any other fees incurred) or the Landlord with Residence in the United Kingdom.</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.5 Insurance</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>The property and its contents should be comprehensively insured to include third party and occupier’s liability risks. Failure to inform your insurer that the property is let could render the policy void. You should obtain detailed advice from your insurers as to the nature and extent of the cover required. Guards Real Estate strongly advise the Landlord arranges insurance policy covering loss of rent, contents and legal expenses.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Activities and administration of the Insurance Policies are governed in the Financial Services and Market Act 2000 and Guards Real Estate cannot arrange insurance on your behalf, notify your insurer of any claims or complete the relevant documentation in relation to any claims.</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.6 Leasehold Property </h4>
                                    </div>
                                    <p class="p-l-text">If the property to be let is leasehold, it is the landlord’s responsibility to ensure that (1) any intended letting is permitted under the terms of the lease; (2) the intended letting is for a period expiring prior to the expiry of your lease; (3) the written permission of your superior landlord is obtained and Licence to Sub-Underlet is granted if necessary. period expiring prior to the expiry of your lease; (3) the written permission of your superior landlord is obtained and Licence to Sub-Underlet is granted if necessary.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.7 Mortgage </h4>
                                    </div>
                                    <p class="p-l-text">Where the property is subject to a mortgage or loan, it is the landlord’s responsibility to ensure that written permission is obtained from the mortgagee and/or lender. We require you to confirm that you have obtained this permission in writing. Please note that applying for permission after a tenant has been found could prejudice the tenancy. Some tenants may also request sight of written confirmation that permission has been granted.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.8 Ownership</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>Authority to let the property should be obtained from any joint owner(s) who should be named in the tenancy agreement. Where any party comprises more than one person the obligations and liabilities of that party under this agreement shall be joint and several obligations and liabilities of those persons.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Where the Landlord is joint owner, he must ensure that all owners are named in the tenancy agreement and that he is authorised to give instructions on their behalf.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>These terms are applied to all properties owned by the Landlord or the person entity acting on behalf of the Landlord for all future tenancies agreed by the Landlord until further written notice from Guards Real Estate.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>The Landlord must ensure that all necessary licences and approvals are obtained for any tenancy he accepts and kept updated through the tenancy term including but not limited to Council Landlord Licences, HMO Licences and any other council/governmental landlord licences.</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.9 Contractors</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>Our panel of appointed contractors is constantly monitored to ensure that all members comply with our high standards of quality, cost and reliability. We will endeavour to use any contractor specified by you but cannot guarantee to do so, particularly in an emergency. Whilst exercising all due care and attention in our choice and administration of contractors we cannot accept any reasonability for any loss or damage caused by the neglect or default of any contractor.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Any commission, interest or any other income earned by Guards Real Estate whilst carrying out our duties as an Agent for the Landlords’ property is to be retained by Guards Real Estate.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Should the Landlord organise any work through Guards Real Estate, the Landlord is liable to cover all of the costs for materials and contractor work. Should you not pay Guards Real Estate for such work organised, Guards Real Estate reserves the right to share your details with the contractor and the Landlord is liable for all of the costs for exercising such work.</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.10 Waiting at properties</h4>
                                    </div>
                                    <p class="p-l-text">In the event that you instruct a contractor to attend the property who is unable to collect keys from our offices or give and keep to a specific date and time of call, the agent will charge waiting time at the property of £ 20.00 per hour.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.11 Keys</h4>
                                    </div>
                                    <p class="p-l-text">We require three sets of keys for your property; if you are unable to supply three complete sets, we will have them cut at your expense. It is recommended to replace locks before the tenancy commence if there are any lost or unaccounted keys to the property. We cannot be held liable for lost or unaccounted keys. It may be necessary for you to provide to us with a letter of authority for some security keys to be cut.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.12 Instructions to Solicitors</h4>
                                    </div>
                                    <p class="p-l-text">Should any rent arrears or breaches of contract be brought to our attention, you will be informed as soon as is reasonably practicable. Thereafter you become responsible for instructing your own solicitor as necessary and for all fees and charges involved. We cannot take legal action for you as the tenancy contract is between you and your tenant(s), nor can we accept liability for arrears or breaches of covenant.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.13 Courts & Tribunals</h4>
                                    </div>
                                    <p class="p-l-text">Application for fair rent or preparation for, or appearances before the Rent Officer Rent Assessment Committee or any other court or tribunal will be by special arrangement and subject to an additional charge that will be agreed with you in advance.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">3.14 Landlord and Tenant Act 1987</h4>
                                    </div>
                                    <p class="p-l-text">We are obliged to include your full name and address on all rent demands. If your address is outside England and Wales, then we must provide the tenant with an address within England and Wales to which notices (including Notices in proceedings) may be served upon you. We will require this information before a tenancy comes. If the information provided changes during the tenancy the agent must be informed immediately.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">4.0 COMMISSION, FEES AND CHARGES</h4>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">4.1 Letting (Heritage Package) and Management service (Guards Protection Management Package)</h4>
                                    </div>
                                    <p class="p-l-text">The commission for Lettings Service is 11% plus VAT (13.20% inc VAT) for the entire length of the tenancy, the commission will be payable upfront at the start of the tenancy.
                                        Our commission for Management Service is 6% plus VAT (7.2% inc VAT) of the total rent payable for the duration of the tenancy, payable from and at the same frequency as rent received. Guards Real Estate managed protection package inclusions are only applicable on 6% managed services, Guards Real Estate are not to be held liable for works which are not carried out within these services, this is the landlord’s responsibility.
                                    </p>
                                    <p class="p-l-text">For short-term lettings, a 24% plus VAT (28.8% inc VAT) of the total rent payable for the duration of the tenancy and the commission will be payable upfront at the start of the tenancy.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">4.2 Renewal Fees</h4>
                                    </div>
                                    <p class="p-l-text">If the letting continues for a period exceeding the aggregate twelve months, whether pursuant to the original tenancy agreement or a continuation (Periodic Tenancy), extension or renewal of the term originally granted or any new tenancy granted to the same tenant or any person nominated or introduced by the original tenant, the commission will be :</p>
                                    <table>
                                        <tr>
                                            <td>first renewal</td>
                                            <td>10% plus VAT (12% inc VAT)</td>
                                        </tr>
                                        <tr>
                                            <td>second renewal</td>
                                            <td>9% plus VAT (10.8% inc VAT)</td>
                                        </tr>
                                        <tr>
                                            <td>subsequent renewals beyond the second renewal</td>
                                            <td>7% plus VAT (9.6% inc VAT)</td>
                                        </tr>
                                    </table>
                                    <p class="p-l-text">The appropriate fee payable as set out above for the second renewals and any subsequent term is irrespective of whether Guards Real Estate Ltd have been involved in negotiation.
                                        We will be entitled in this case to receive rent directly from the tenant in payment of fees.
                                        In the event of any promotional discounts on the introduction fee, renewal fee’s will be fixed to the yearly introduction fee there will be no reduction each year & the owner of the apartment will not be entitled to any reductions of renewals as seen above.
                                    </p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">4.3 Tenancy Agreement</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>Unless we are instructed otherwise 14 days prior to the commencement of the Tenancy, we will use our standard form of tenancy agreement at the cost of £ 168.00 (plus VAT 201.60) per every agreement issued by Guards Real Estate for the Tenancy on your Premises.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Our standard form of memorandum is used to renew the tenancy to an existing tenant unless otherwise agreed with you. Although our documents are reviewed and updated regularly by our legal advisers. We must advise you that we are not solicitors.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Guards Real Estate strongly advises to the Landlord to consult your own solicitor should you require further information about rights and obligations as a landlord.</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">4.4 Inventory</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>The charge for preparing an independent Inventory and for checking in and out will vary depending upon the property involved. The cost of preparation of the Inventory is borne by the landlord and the cost of the check-in and check-out is the Landlord’ responsibility. The appropriate sums will be withheld from rents received to meet the inventory clerk’s invoice.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>According to the Tenant Fee Ban Act June 2019, the Agent nor the Landlord can charge the Tenant any Check Out Inventory Fees and those are solely Landlord’s responsibility. The Tenants’ responsibility is to return the Property /Premises to the same standard as per the Inventory and Schedule of Condition made upon the commencement of the Tenancy.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>The importance of the Check in and Check Out Inventory and Schedule of Condition is in the Deposit deductions upon the Check-out should the Tenant breach any tenancy agreement clause or does any damages to the Property/Premises. Should you decide not to carry out such document, Guards Real Estate will not be able to assist you in any deductions you wish to be made to the Deposit. Guards Real Estate strongly advises the Landlord to organise the Check in and Check Out Inventory and Schedule of Condition to all Landlord whether the Landlord appoints Guards Real Estate or appoints its own Inventory Clerk</span>
                                            </label>
                                        </p>
                                    </div>
                                    <h5>Value added Tax</h5>
                                    <p class="p-l-text">Except where otherwise stated our commissions, fees and charges will be subject to VAT at the prevailing rate or any other tax which may take its place.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">Variation and Jurisdiction</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>Variation to our Lettings Terms and Conditions of Business will only be valid if agreed in writing with the manager of Guards Real Estate Ltd. Acceptance of these Terms and Conditions of Business forms a binding legal agreement in accordance with English law and is subject to the jurisdiction of English Courts alone.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Guards Real Estate reserves the right to change its schedule of fees or terms and conditions of the business. By signing this agreement, the Landlord agrees to be bounded by any changes upon being given notice and no objections are raised within 14 days of the receipt of the updated terms and conditions.</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">Liability of a landlord to Commissions, Fees and Charges</h4>
                                    </div>
                                    <p class="p-l-text">Commission and other charges are due and payable by the Landlord in accordance with Paragraph 4 of any letting of the property to a tenant and references is to the tenant include:
                                        Any “associate” of the tenant as defined in Section 303(8) of the Income and Corporation Taxes Act 1970.
                                    </p>
                                    <p class="p-l-text">Any close company as defined in Section 282 of the Act in which that person or any associate as defined is a participator as defined in Section 303(i) of the Act.</p>
                                    <p class="p-l-text">Any company (or any connected person or entity of that company) which shall be the employer or former employer or proposed guarantor of that person.</p>
                                    <p class="p-l-text">Where the tenant is a company, any person employed by the company or for whom the company is, or has become, or proposes to become guarantor and includes any company which is a holding company of the company or subsidiary company of the company or a member of the same group, as defined in Section 272 of the Act, as a company.</p>
                                    <p class="p-l-text">Any person or entity introduced by the tenant or the occupier of the property.</p>
                                    <p class="p-l-text">Should the viewing with the prospect Tenant be obtained by Guards Real Estate and then the same prospect Tenant decides to put the offer forward with a different agency than Guards Real Estate, the full fee is payable to Guards Real Estate.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">Administration charges to the Landlord and in the event of landlord failure to proceed:</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>Once an offer has been accepted verbally or in writing by the landlord, we shall draw up agreements and take up references. If the landlord subsequently informs us, they do not wish to proceed with the Tenancy, there will be a penalty charge of £1000.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Should the same Tenant renew, extend, hold-over of the property or the new agreement has been made between the Landlord and the Tenant, the Renewal Commission is payable to Guards Real Estate along with the administration fee of £ 96.00 (plus VAT £ 115.20).</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>In the event of the owner acceptance being signed or email confirmation accepting an offer alongside a signed tenancy agreement via: Guards Real Estate on behalf of the landlord or the landlord signing of the tenancy agreement & the tenants executing the contract by signing tenancy agreement, this will result in the landlord being liable to pay the full fees due to Guards Real Estate for the term of the tenancy by way of service for the introduction of tenants.</span>
                                            </label>
                                        </p>
                                    </div>
                                    <h5>Mail</h5>
                                    <p class="p-l-text">It is not part of the usual function of Guards Real Estate Ltd to forward any mail. Therefore, no responsibility can be taken for your mail and it is recommended that it be re-directed via the Post Office.</p>
                                    <h5>Lettings Boards</h5>
                                    <p class="p-l-text">Unless otherwise instructed by you, we will place a To-Let board outside the property if we deem necessary</p>
                                    <h5>Indemnity</h5>
                                    <p class="p-l-text">You will indemnify and keep us indemnified from and against any and all losses, damage or liability whether criminal or civil, suffered from and during the time that we are or were acting on your behalf.</p>
                                    <h5>Private dealings</h5>
                                    <p class="p-l-text">You will not enter into negotiations nor conclude any binding agreement to lease or sell (as the case may) be your property with:</p>
                                    <p class="p-l-text">Any prospective or former tenant introduced to you by us and on the basis of our standard terms and conditions applicable from time to time.</p>
                                    <p class="p-l-text">Any prospective purchaser introduced to you (in whatever capacity) by us, the standard terms and conditions is applicable.</p>
                                    <h5>Sale of Property</h5>
                                    <p class="p-l-text">In the event that a tenant, any associated party or any person introduced at any time by Guards Real Estate Ltd purchase the property or any interest in it (either after entering into a tenancy agreement or otherwise and whether by transfer of the landlord’s interest in the property or the grant of a lease) the commission on the sale at the rate of 2.5% of the sale price shall be payable to the agent on completion of sale.</p>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">4.14 Agents’ Responsibility Towards the Landlord</h4>
                                    </div>
                                    <div class="checkbox-block">
                                        <p class="p-l-text">
                                            <label>
                                                <span>Once the Landlord accepts the offer presented by Guards Real Estate either verbally or in writing, Guards Real Estate keeps the right to sign the tenancy agreement on the Landlords behalf.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>References, Guards Real Estate performs only an Identity Check and the Landlord will be sent all reference before the start of the Tenancy. Should Guards Real Estate find the Identity Check satisfying we will proceed with the Tenancy on your behalf. We hold no responsibility in accuracy of the Identity Checks, or the information contained with them. Guards Real Estate cannot warrant the Tenant as suitable nor guarantee the Tenancy in any way. The identity checks are worked out on a 2.5 x annual income rate and this is documented. Should the Landlord prefer Independent Checks classed as Reference Checks which are organised by third parties and instructs Guards Real Estate to organise them, the fee of £ 70.00 (plus VAT £ 84.00) per Tenant.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>The Landlord will be sent all of the references collected by the Agent (Guards Real Estate) and is due to check the sent references and sign the authorisation form enclosed with it. In the event that Landlord provides no comments on the sent references within 24 hrs, Guards Real Estate will consider the references suitable to the Landlord and will proceed with the Tenancy whether or not the authorisation form has been signed by the Landlord in action of signing the Tenancy Agreement on Landlord’s behalf.</span>
                                            </label>
                                        </p>
                                        <p class="p-l-text">
                                            <label>
                                                <span>Once the Tenancy Agreement has been signed and the contract between the Landlord and the Tenant introduced to the Landlord by Guards Real Estate is deemed, these Terms and Conditions are binding to the Landlord therefore the landlord or the introducer appointed by the owner is liable to pay the full amount of fees due to Guards Real Estate. (Please note that once the owner/introducer has accepted the offer and the references have been completed via an identity check or independent reference process Guards Real Estate will sign the tenancy agreement on behalf of the landlord unless stated otherwise at the signing of these terms of business.)</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="guards-heading-box">
                                        <h4 class="heading-guards guards-border guards-bottom-border">Legislation</h4>
                                    </div>
                                    <h5>Furniture and Furnishings</h5>
                                    <p class="p-l-text">In 1988 the Government introduced new regulations on the use of any filling material or re- upholstery whether foam or non-foam and the requirements of furniture to meet the “cigarette test” introduced in 1980. From March 1993 all newly rented furnished properties should only be furnished with contents that meet the “cigarette test” and carrying the appropriate label. Furniture manufactured prior to 1950 is exempt from these regulations as the Department of Trade and Industry has pointed out that most of the defective materials that cause fire were not in used prior to 1950. All furniture manufactured after 1983 should already comply with the regulations but there is a particular concern for foam filled furniture manufactured between 1950 and 1983. The landlord must ensure that furniture complies with the above legislation for tenant(s) occupy the property and any furniture failing to comply must be removed by the landlord and stored at the landlord’s expense. All properties must also have a smoke alarm fitted</p>
                                    <h5>The Gas Safety (Installation and Use) Regulation 1994</h5>
                                    <p class="p-l-text">On 31 October 1994 the Gas Safety (Installation and Use) Regulation 1994 came into force. Under Regulations 35(2) it is the duty of any person (i.e. landlord) who owns a gas appliance and pipework installed in the premises to ensure that such appliance and pipework is maintained in a safe condition so as to prevent risk or injury to any person. The Regulations cover all appliances and all types of gas, i.e. mains, propane or calor gas for heating, lighting, cooking or other purposes for which gas can be used. The owner (i.e. the landlord) of any gas appliance must ensure that each appliance is checked for safety at least every 12 months by a qualified gas engineer, e.g. an employee of British Gas or a GAS SAFE registered person. A record must be kept of all safety inspections and the results open to the tenant’s inspection by law. The landlord must have a Gas Safety Inspection carried out before a tenant(s) occupies the property and signs the tenancy agreement. (Further information can be obtained from British Gas on 0800 300 363). (A copy of the certificate must now be given to the tenant before the tenancy commences). If the landlord is unable to or has not provided the Gas Safety Certificate within 10 days of the date Guards Real Estate has required the certificate to be provided, Guards Real Estate Ltd will provide the certificate at the landlord’s expense.</p>
                                    <h5>The Electrical  (Safety)  Regulation  1994  and  the  Plug  &  Sockets  etc. (Safety) Regulations 1994</h5>
                                    <p class="p-l-text">It is a criminal offence to supply unsafe electrical equipment with rented accommodation. The maximum fine is £5,000. The above Regulations apply to portable domestic electrical equipment such as: Electric heaters, lamps, televisions, radios, vacuum cleaners, irons, toasters, microwaves, refrigerators and other kitchen equipment.</p>
                                    <p class="p-l-text">Built-in electrical goods such as cookers and certain storage heaters are not covered by the Regulation, however, and landlords should be aware that any person injured by the landlord’s property could sue for damages.</p>
                                    <p class="p-l-text">Electrical items must be examined by a qualified electrician prior to tenants taking occupation and if required we can instruct at an approved Contractor to carry out this check on your behalf. The portable appliance test must be undertaken for each new set of tenants.</p>
                                    <h5>Tax</h5>
                                    <p class="p-l-text">The 1995 Finance Act deals with the collection of tax on rent income for non-resident landlords as follows:</p>
                                    <p class="p-l-text">The Act will not affect the landlord’s actual tax liability, but it will affect the way in which monies are collected by the Inland Revenue. Vendor Terms:</p>
                                    <p class="p-l-text">A non-resident landlord will be able to apply directly or through his UK accountant to the Inland Revenue for self-assessment on the tax from rental income. If granted and confirmed by the Inland Revenue this will enable the agent to release the rent gross without making a tax retention thereby easing the landlord’s tax flow. Joint owners must each apply to Inland Revenue.</p>
                                    <p class="p-l-text">If the landlord is not granted self-assessment, the agent will have to pay to the Inland Revenue on a quarterly basis the appropriate income tax percentage of the net rentals. The calculation for tax paid by the agent will not include mortgage interest, depreciation or other tax-deductible items. Any overpayment of tax will then need to be reclaimed at the end of teach tax year by the landlord submitting a statement of accounts to the Inland Revenue directly. Unless the exception has been received from Inland Revenue confirming that the Landlord is allowed to account for the tax himself under the Self-Assessment Regime and such has been provided to Guards Real Estate, Guards Real Estate is obliged by law to collect/deduct tax at appropriate rate from rents received and account to Inland Revenue for these monies collected.</p>
                                    <p class="p-l-text">When considering applications for self-assessment the Inland Revenue will look favourably on landlords who have their tax affairs in order to April 1995.</p>
                                    <p class="p-l-text">The Landlord is responsible for obtaining the Exemption and the Exemption is not transferrable between the Agents. No interest shall be paid for the taxes retained by Guards Real Estate. If the Landlord requires an exemption from the taxes, the Landlord should complete either NRL1 or NRL2 form quoting the Guards Real Estate reference number with the registered office address. Please ask for relevant information upon applying for such documentation. Unless Guards Real Estate receives the Exemption Certificate from HMRC directly, Guards Real Estate is legally bound to deduct taxes from any income.</p>
                                    <p class="p-l-text">Should Guards Real Estate carry out any work in submitting the quarterly or annual tax returns when the Landlord is considered to be a Non-UK Resident and the exemption is not provided by Landlord to Guards Real Estate, Guards Real Estate will charge the Landlord a fee of £ 350.00 (plus VAT £ 420.00) for the work done on Landlords’ behalf.</p>
                                    <h5>Housing Act 1996</h5>
                                    <p class="p-l-text">From Friday 28 February 1997 there is no longer the need for a private landlord to serve a Notice of an Assured Shorthold Tenancy before making a tenancy agreement. All new Tenancies are automatically deemed to be Assured Shorthold Tenancies. The new legislation has also ensured that landlords are now able to evict tenants more easily for rent arrears.</p>
                                    <h5>Legionnaires Disease</h5>
                                    <p class="p-l-text">The landlord must comply with the Health and Safety Executive’s Code of Practice, you are strongly advised to carry out a risk assessment at the Property prior to letting in order to highlight any risk of legionnaire’s disease.</p>
                                    <h5>Void Periods</h5>
                                    <p class="p-l-text">Where possible we will aim to fill in the void periods by short letting your apartment on a fixed term short let which is charged at the rate of 24% shown above on page 2. Traditionally a short let will be 1-6 months providing you with a fixed short let tenancy for the term agreed. Alternatively, we will look towards using other methods to avoid you losing your rental income, when doing so this will provide you with a flat rental rate income therefore the additional amount received will be paid to Guards Real Estate for providing the service and these shall include day to day or weekly rental/stays up to a month. (*This clause will become active once the property has been void for more than 5 days from the date of when Guards Real Estate have been instructed. *)</p>
                                    <h5>SECURITY DEPOSITS</h5>
                                    <p class="p-l-text">From the 6 April 2007, when you either rent your property out or renew an existing tenancy agreement, you must protect the security deposit using a government authorised tenancy deposit scheme. (From 1st October 2010, the maxi-
                                        mum rent threshold was increased from £25,000 to £100,000 per year for tenancies in England).
                                    </p>
                                    <h5>Who does this affect?</h5>
                                    <p class="p-l-text">The legislation covers all Assured Shorthold Tenancy Agreement i.e. tenancy agreements in the names of individuals (opposed to a company or charity etc.) and where the rent is no more than £250,000.00 per annum. If the property falls outside this range, the legislation does not affect the landlord.</p>
                                    <p class="p-l-text">As the landlord, you have the following options: </p>
                                    <h6>The Custodial Scheme</h6>
                                    <p class="p-l-text">The security deposit is paid into the scheme i.e. it is not held with either the landlord or the agent. At the end of the tenancy an application is made to the scheme to have the deposit refunded to the tenant less any agreed costs for dilapidations. If there is a dispute between the landlord and the tenant, there will be a free service offered by the scheme protecting the deposit to resolve the dispute. The Scheme will pay to the tenant the undisputed amount and will retain the disputed amount until an agreement is reached.</p>
                                    <p class="p-l-text">The security deposit is paid into the scheme i.e. it is not held with either the landlord or the agent. At the end of the tenancy an application is made to the scheme to have the deposit refunded to the tenant less any agreed costs for dilapidations. If there is a dispute between the landlord and the tenant, there will be a free service offered by the scheme protecting the deposit to resolve the dispute. The Scheme will pay to the tenant the undisputed amount and will retain the disputed amount until an agreement is reached.
                                        Whilst there is no cost for this service, it must be stressed that neither the landlord nor the agent will hold the deposit. Therefore, the process of returning the deposit may take longer than normal. Furthermore, any proposed dilapidations
                                        must be made in writing to the scheme before any costs are incurred.
                                    </p>
                                    <h6>Insurance-based scheme</h6>
                                    <p class="p-l-text">The security deposit is held by either the landlord or agent in the normal way (but registered with one of the two Insurance schemes). If at the end of the tenancy agreement there is a dispute in respect of the amount of the deposit that is to be returned, the insurance company are notified. At this point the deposit is then immediately paid over the insurance company who will then act as adjudicator. The conclusions they come are purely evidence based and are binding. Should the Deposit be registered on the “My Deposits” Insurance Based Scheme by the Agent (Guards Real Estate) the amount of £ 50.00 (plus VAT £60.00) will be charged to the Landlord and the Agent will act as a Stakeholder (be holding the deposit) in the specified account. Guards Real Estate will not pay any interest on the Deposit.</p>
                                    <h6>Deposits currently held by Guards Real Estate Ltd</h6>
                                    <p class="p-l-text">If the tenants do not renew their tenancy, the deposit will be dealt with in the normal way i.e. an inventory check out will be carried out with a schedule of dilapidations (if any) posted to you for your consideration.</p>
                                    <p class="p-l-text">If the tenancy is being renewed, we must hand over the security deposit amount to the custodial scheme or confirm in writing to both the landlord and the tenant that the deposit will remain with us but will not be protected by the insurance- based scheme. The cost for the protection of the Deposit is payable at £50.00 (plus VAT £ 60.00) per deposit by the
                                        Landlord.
                                    </p>
                                    <h6>Deposit currently held by Guards Real Estate Ltd for Overseas landlord clients</h6>
                                    <p class="p-l-text">The agent has the authority of the landlord to make decisions on the return of the deposit to the tenant on his/her behalf on any matters pertaining to the deposit and it’s reimbursement and can lodge any disputed deposit monies with the My deposit Tenancy Deposit Protection scheme if required to do so by the Scheme without the need of any recourse to the Overseas landlord whose property we are managing and holding the deposit.</p>
                                    <p class="p-l-text">We cannot be held liable for any costs or losses in relation to or as a result of any verdict given by the adjudication panel of the Mydeposit scheme.</p>
                                    <h6>Deposits currently held by the landlord</h6>
                                    <p class="p-l-text">If the tenancy is renewed, the landlord must place the deposit in one of the approved schemes. Should you as the Landlord decide to hold and protect the Deposit on your own, you must send us an email in writing within 10 days of the receipt of the Deposit requiring the Deposit to be sent to you on nominated bank account. Guards Real Estate holds no liability for any Deposits held by Landlord, and it is solely Landlords Liability.</p>
                                    <p class="p-l-text">Should the Landlord fail in sending the request in writing within the 10 days of Guards Real Estate receiving the Deposit from the Tenant providing that Guards Real Estate has noted the Landlord of receipt of the same. Acting on your behalf and protecting you as a Landlord as well as obtaining our duties as an Agent we will register the Deposit on your behalf and at the Landlord cost and the charge will be £ 50.00 (plus VAT £60.00) per each deposit registered.</p>
                                    <h6>What if the landlord does not want to hold the deposit?</h6>
                                    <p class="p-l-text">The deposit can be paid to us and we will hold the deposit in their client account. We will however need to register the deposit with Mydeposit. Whilst the agent will not charge you for holding the deposit, the Insurance Fee of £50.00 (plus VAT £60.00) per each and every deposit must be paid by the Landlord in advance.</p>
                                    <h6>What can happen if the landlord does not comply with the new legislation?</h6>
                                    <p class="p-l-text">The court can order the landlord to either repay the deposit to the tenant or protect it in a scheme. If the landlord has not protected the deposit, and they fail to do so within 30 days, they will be ordered to pay the tenant up to three times the amount of the deposit.</p>
                                    <p class="p-l-text">Furthermore, you will not be able to regain possession of the property using notice-only grounds for possession under Section 21 of the Housing Act 1988.</p>
                                    <h6>What’s next?</h6>
                                    <p class="p-l-text">You can contact us if you wish us to hold the security deposit which will be registered with one of the insurance-based schemes.</p>
                                    <p class="p-l-text">If you are already holding the security deposit, we must receive confirmation in writing and the certificate matching this as to which scheme you will be using. Please note that this must be done within 30 days of any new tenancy or renewal date.</p>
                                    <h6>GDPR COMPLIANCE</h6>
                                    <p class="p-l-text">What personal information about you will be used the following definitions shall apply to this section of the Agreement:</p>
                                    <p class="p-l-text">‘Data Protection Laws’ means applicable legislation protecting the personal data of natural persons, including in particular the Data Protection
                                        Act 1998 and any replacement to it (and, from 25 May 2018, the GDPR), together with binding guidance and codes of practice issued from time to time by relevant supervisory authorities; and ‘GDPR’ means Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the protection of natural persons with regard to the processing of personal data and on the free movement of such data including where applicable any local implementing laws as updated from time to time.
                                    </p>
                                    <p class="p-l-text">Where Guards Real Estate LTD handles your personal information, it will do so in accordance with Data Protection Laws. If you would like more detailed information on how Guards Real Estate handle your personal information you can read Guards Real Estate Privacy Policy which can be found at http://www.guardsrealestate.com/privacy-policy/ in the event you would like more information, contact us: <a href="mailto:info@guardsrealestate.com">info@guardsrealestate.com</a></p>
                                    <h6>NEW LEGISLATION FOR LANDLORDS – EPC</h6>
                                    <p class="p-l-text">If you let or re-let your property after 1st October 2008, you will be required to provide your tenant with an Energy
                                        Performance Certificate (EPC). The EPC gives homeowners, tenants and buyers information on the energy efficiency of their property. It gives the building a standard energy and carbon emission efficiency grade from “A” to “G”, where “A” is the best and with the average to date being D/E.
                                    </p>
                                    <p class="p-l-text">As of 1st April 2018, the requirement for any properties rented out in the private rented sector to have a minimum energy
                                        performance rating of “E” on an Energy Performance Certificate (EPC) for all new tenancies and for all existing tenancies on 1st April 2020. It will be unlawful to rent a property which breaches the requirement for a minimum E rating, unless
                                        there is an applicable exemption. A civil penalty of up to £4,000 will be imposed for breaches.
                                    </p>
                                    <h6>What else does the certificate do?</h6>
                                    <p class="p-l-text">EPCs are measured using the same calculations for all homes, so you can compare the energy efficiency of different properties.</p>
                                    <p class="p-l-text">Part of the EPC is a recommendation report which will list the potential rating that you home could achieve, if you made changes. The report lists improvements that you could carry out and how this would change the energy and carbon emission rating of the property.</p>
                                    <p class="p-l-text">The landlord can use this information to:</p>
                                    <ul>
                                        <li>Cut fuel bills.</li>
                                        <li>Improve energy performance of the property.</li>
                                        <li>Help cut carbon emissions.</li>
                                        <li>Once the EPC is carried out, it will be valid for 10 years.</li>
                                    </ul>
                                    <h6>MARKETING, FEES AND REFUNDS</h6>
                                    <p class="p-l-text">Guards Real Estate offers a NO LET NO FEE service meaning that you will not be charged any marketing fees should you let the property with another agent. In the event that you accept the offer whether verbally or in writing, the commission/ fee agreed as per these terms and conditions is payable in full to Guards Real Estate.</p>
                                    <p class="p-l-text">Should the Landlord decide to withdraw from the offer for whatever reason other than the failed references a penalty fee of £1000+VAT is payable to Guards Real Estate alongside with the fee as set out in these terms and conditions for damages caused to the reputation of the business. Failed references are those which have not been signed off by the landlord or have deemed failed through the selected third-party reference company. The Penalty fee and commission due is payable to Guards Real Estate within 7 days of withdrawing from the accepted offer.</p>
                                    <p><u>Introduction only refund policy:</u></p>
                                    <p class="p-l-text">Guards Real Estate offers no refund policy on introduction only service regardless whether the landlord is on rent collect or not. The landlord will need to recover any losses from the tenant at their own discretion. The landlord is responsible to chase and mediate any disputes on their own and Guards Real Estate will not get involved due to the owner choosing to manage the property.</p>
                                    <p><u>Managed Properties refund property:</u></p>
                                    <p class="p-l-text">Guards Real Estate offers no refund policy when managing a property. In the event that the tenant breaches the tenancy agreement Guards Real Estate will offer litigant mediation services to the landlord at no extra cost however charges would apply if professional third-party legal help is required. Guards Real Estate will put a credit towards the new rental which is calculated as follows:</p>
                                    <p class="p-l-text">Example of 12 months term managed property:</p>
                                    <p class="p-l-text">Upfront Fee paid to Guards Real Estate / by 12, X the term the tenant hasn’t stayed in the tenancy = [the credit amount]</p>
                                    <p class="p-l-text">The credit is applicable and can be used within 12 months on the disputed managed property only and can only be used for the fee that is due to be paid to Guards Real Estate for the introduction of a new tenant.</p>
                                    <p class="p-l-text">Should the Landlord serve the notice /evict or breach the contract himself, and the Tenant has not breached the contract in any way, we will find the new Tenant for the Landlord at the agreed fee as a new let.</p>
                                    <p class="p-l-text">In the event the landlord does not wish to use the credit for us to find a new tenant then all overpaid fees will be the current disputed tenant’s liability due to the tenant breaching the tenancy agreement; therefore, the landlord is to instruct a solicitor to chase all damages due to them from the tenant on the basis the mediation and credit on the account is not feasible for the landlord.</p>
                                    <p class="p-l-text">The Landlord should recover the cost of the damages and losses including the fee paid to Guards Real Estate from the Tenant. Guards Real Estate cannot guarantee in any way Tenants’ quality and responsibilities.</p>
                                    <p class="p-l-text">
                                        The Landlord will be provided photos made by Guards Real Estate for their Premises. Guards Real Estate reserves the copyright to any marketing tools organised and provided by Guards Real Estate including photos of the Premises, any documents issued by Guards Real Estate and anything else provided by Guards Real Estate to the Landlord. Should any of the Photos, Documents or any other material provided by Guards Real Estate to the Landlord be marketed /used by any competitors will be charged at £ 250 .00 per item /photo/ document. The Landlord is liable for such payment for sharing such documents.</p>
                                    <p class="p-l-text">
                                        The fee to Guards Real Estate is always paid upfront and in any event that Guards Real Estate agrees to the fee being split over split payments through the term of tenancy it is to be noted that this is considered as arrears and the owner is due to pay this at agreed terms before the tenancy ends caused by the end of contractual tenancy or by any other disruptions ,In the event the split payment agreement is not honoured for whatever reason the interest rates will apply at 5% per day on the outstanding amounts. </p>
                                    <h6>Notice of Right to Cancel:</h6>
                                    <h5>ONCE THE TERMS AND CONDITIONS HAVE BEEN SIGNED THERE IS AN AUTOMATIC 14 DAYS WITHIN WHICH YOU CAN CANCEL THE INSTRUCTION FOR US TO LET/MANAGE YOUR PROPERTY. </h5>
                                    <p class="p-l-text">(Cancellation will need to be confirmed via post or written email which will need to be in a clear statement exercising that you are cancelling these terms of business, the cancellation process is applicable if the signing of documentation has been confirmed on a virtual basis and you have not signed this agreement face to face with one of Guards Real Estate’s representatives & have not met face to face in the signing of these terms of business in line with the ( Information , Cancellation and Additional Charges) Regulations 2013 (“the Cancellation Regulations”) right to cancel as per consumer contracts. )
                                    </p>
                                </div>
                            </div>

                        </li>
                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Sales Terms and Conditions</div>
                            <div class="collapsible-body">
                                <h6>Notice of Right to Cancel:</h6>
                                <h5>ONCE THE TERMS AND CONDITIONS HAVE BEEN SIGNED
                                    THERE IS AN AUTOMATIC 14 DAYS WITHIN WHICH YOU CAN
                                    CANCEL THE INSTRUCTION FOR US TO SELL YOUR PROPERTY
                                    THERE ON AFTER THE CANCELLATION PERIOD FOR MULTI
                                    AGENCY IS 4 WEEKS NOTICE AND SOLE AGENCY IS SUBJECTED
                                    TO A MINMUM TERM OF THREE MONTHS FROM THE DATE OF WHICH THE TERMS OF BUSINESS ARE SIGNED.
                                </h5>
                                <p class="p-l-text">Cancellation will need to be confirmed via post or written email
                                    which will need to be in a clear statement exercising that you
                                    are cancelling these terms of business, the cancellation process
                                    is applicable if the signing of documentation has been confirmed
                                    on a virtual basis and you have not signed this agreement face
                                    to face with one of Guards Real Estate’s representatives & have not met
                                    face to face in the signing of these terms of business in line with
                                    the (Information, Cancellation and Additional Charges) Regulations 2013 (“the Cancellation Regulations”) right to cancel as per consumer contracts.
                                </p>
                                <h6>Private Sale:</h6>
                                <p class="p-l-text">When Guards Real Estate has received instruction to sell a/this
                                    property, on a sole agency service or a multi-agency service it is to be noted that any private offers are to be negotiated
                                    through Guards Real Estate at a fee of no less than 1% + VAT (1.20%inc VAT) of the completed sale price.
                                    through Guards Real Estate at a fee of no less than 1% + VAT (1.20%inc VAT) of the completed sale price.
                                </p>
                                <h6>Introducers:</h6>
                                <p class="p-l-text"> For the avoidance of doubt Guards Real Estate will have the right to sub- instruct other agencies throughout any time of the marketing of your property, it is to be noted that we will only do so, when considering your best interests. This will not be at any additional costs & all viewings will be coordinated by Guards Real Estate.</p>
                                <h6>Third Parties:</h6>
                                <p class="p-l-text">It is to be noted that Guards Real Estate work alongside with third party companies whilst working with a purchaser and we may offer additional services to purchases being financial services and mortgages to prospective purchases & guests who we will work in conjunction with, this will apply when a purchaser may have a property to sell or whilst taking an offer forward, some of these companies may offer Guards Real Estate agency services hoping to earn commission.</p>
                                <p class="p-l-text">Guards Real Estate agree that they will forward all information within in a vast time, frame of receiving an offer to ensure that all prospective purchasers are not in any way discriminated
                                    between purchasers because one or more have agreed to take any other services from Guards Real Estate.
                                </p>
                                <p class="p-l-text">Guards Real Estate may refer its clients to third party services in doing so we may receive a fee for a referral from the third-party company whilst conducting to take services, some which are with surveyors, solicitors, mortgage brokers, EPC providers. It is to be noted that Guards Real Estate does not have any business association related with these companies and these companies
                                    are separate entities to Guards Real Estate this will merely be classed as a referral & Guards Real Estate do not hold any reasonability for third party company referrals or conducted work carried out with third party companies.
                                </p>
                                <h6>9. Other Services:</h6>
                                <p class="p-l-text">A purchaser may instruct us about related services. Guards Real
                                    Estate will receive a fee on the occasion of an agreement to do so which it will be retained. Guards Real Estate offers numerous services such as:
                                </p>
                                <ul>
                                    <li>The Management of this or another property. </li>
                                    <li>The sale or rental of this or another property.</li>
                                    <li>Third party referrals for (but not limited to) mortgages, EPC providers, solicitors, contractors.</li>
                                </ul>
                                <h6>Copyright:</h6>
                                <p class="p-l-text">Guards Real Estate owns & retains copyright whilst working with you and there being a connection of this work, all work which is produced is to be owned by Guards Real Estate.</p>
                                <p class="p-l-text">Guards Real Estate has the right to advertise/publish, sell or lease these items. Some of the following which are included are documents, photos, drawings, reports & maps. If the owner provides copies of these items to third parties or uses them for their own leisure, then a charge of £250 will be payable by the owner for each item.</p>
                                <p class="p-l-text">The fee is payable when the owner allows the items to be used by anyone except Guards Real Estate therefore if we have provided permission or declined permission, the fee is applicable in any event that this arrangement is not honoured by reasonable action not taken to stop it.</p>
                                <h6>Multiple agency</h6>
                                <p class="p-l-text">While Guards Real Estate Ltd is instructed along with other agents, you will be liable to pay remuneration to us, in addition to any other costs or charges agreed, if at any time unconditional contracts for the sale for the property are exchanged with a purchaser introduced by us; or with a purchaser to whose attention, we brought the availability of the property.</p>
                                <p class="p-l-text">A multiple agency instruction can be terminated at any time by either party giving four weeks’ notice in writing.</p>
                                <h6>Energy Performance Certificate (EPC)</h6>
                                <p class="p-l-text">It is a legal requirement to have commissioned an EPC before
                                    marketing can commence on your property. We can arrange this at the cost of £115.50+vat.
                                </p>
                                <h6>Fees payable:</h6>
                                <p class="p-l-text">Below Services are applicable as confirmed on page 1
                                    (please note email confirmation of page one agreement will also be taken into consideration when terms have been provided & a confirmation of service is acknowledged via email confirmation)
                                    Guards Real Estate Ltd fees are calculated as a percentage (%) of the sale price achieved + VAT at the prevailing rate. As our fees are based on a percentage of the achieve sale price, should this be higher or lower than the asking prices our fees will be correspondingly higher or lower. Unless otherwise agreed,
                                </p>
                                <h6>For all sole agency instructions this percentage is at a rate of 2.5% + VAT.</h6>
                                <p class="p-l-text">The sale price will be deemed to include and any extra
                                    prices for fixtures, fittings, goods, chattels, carpets, curtains and other such related items.
                                </p>
                                <h6>For all multiple agency instructions, the percentage is a rate of 3% + VAT.</h6>
                                <h6>Responsibility of fees</h6>
                                <p class="p-l-text">The responsibility for the payment of fees remains with the parties named on this document. Guards Real Estate Ltd will be entitled to a commission fee if you terminate this contract and go on to sell the property to a purchaser that Guards Real Estate Limited has introduced within 6 months of the date of our instruction ended. However, we reserve the rights to any commission fee if a purchaser first introduced by us goes on to buy a property through another estate agent in circumstances
                                    where that purchaser was introduced by the other sestet agent is introduced, this time limit will not apply.
                                </p>
                                <p class="p-l-text">There may be a dual fee liability if:</p>
                                <ul>
                                    <li>The seller has previously instructed another agent to sell
                                        the same property on a sole agency, joint sole agency or a sole selling right basis; or
                                    </li>
                                    <li>The seller instructs another agent during or after the period of our sole agency or joint sole agency.</li>
                                </ul>
                                <h6>Time and payment of fees</h6>
                                <p class="p-l-text">All our fees become due and payable upon exchange of con- tracts. However, and at our discretion fees may be paid out of the completion monies. By signing this document, you are
                                    hereby authorising your lawyers to pay our fees out of the sales proceeds.
                                </p>
                                <h6>Interest </h6>
                                <p class="p-l-text">We reserve the right to charge interest from the date of exchange of contracts on any amounts still outstanding 28 days after our fees are first demanded. The prescribed rate of interest shall be 3% above the Bank of England base rate as at the date they are first demanded and payable from that date.</p>
                                <h6>Connected persons</h6>
                                <p class="p-l-text">As required by Section 21 of the Estate Agents Act 1979, unless specifically stated otherwise, we are not aware of any personal interest existing between ourselves or anyone in our employment or any connected person(s) and yourself. If you are or become aware of such an interest you should notify us immediately.</p>
                                <h6>Anti-money Laundering Regulations</h6>
                                <p class="p-l-text">Guards Real Estate Ltd is subject to the Money Laundering Regulations 2007. As a result, we will need to ask you for suitable identification and be unable to proceed with any work on your behalf we are unable obtain this from you.</p>
                                <h6>Date protection and privacy policy </h6>
                                <p class="p-l-text">Guards Real Estate Ltd complies with all data protection and privacy laws. We undertake to comply with the Act in all our dealings with your personal data. We will keep your personal information secure.</p>
                                <h6>Disclosure</h6>
                                <p class="p-l-text">It is a requirement of this agreement that should an offer be agreed privately, via another estate agent or solicitor, the seller must disclose to us the identity of the purchaser prior to exchange of contracts.</p>
                                <h6>Jurisdiction</h6>
                                <p class="p-l-text">The High Court and the County Court of England and Wales shall have jurisdiction to hear and determine any action or proceedings in respect of this agreement.</p>
                                <h6>Entire agreement and variations </h6>
                                <p class="p-l-text">This contract constitutes the entire agreement between us and the seller and supersedes all prior agreements, understandings,
                                    representations or communication between the parties. No amendment or variation to this contract will have any contractual effect unless approved in writing by a Nathan Di Carlo Harris of Guards Real Estate Ltd.
                                </p>
                            </div>

                        </li>
                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Referral Fees</div>
                            <div class="collapsible-body">
                                <a class="btn-guards " href="{{asset('uploads/tenants+voucher+.pdf')}}" title="" target="_blank">Tenants</a>
                                <a class="btn-guards " href="{{asset('uploads/landlords+voucher+.pdf')}}" title="" target="_blank">Landlords</a>
                            </div>

                        </li>
                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Credit card charges</div>
                            <div class="collapsible-body">
                                Guards Real Estate does not charge credit card admin fees.
                            </div>

                        </li>
                    </ul>
                    @endif
                </div>
            </div>

        </div>
    </main>
@endsection

@section('page-js')

@endsection


@section('footer')
    @include('includes.footer')
@endsection
