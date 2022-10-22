<header  role="banner"><div class="navbar-fixed">

        <nav class="valign-wrapper">
            <div class="container">
                <div id="slide-out" class="sidenav menu">
                    <div class="menu-logo">
                        <img src="{{asset('images/full_logo.svg')}}" >
                        <span>Guards London</span>
                        <a href="tel:2036331271" class="m-text" style="line-height: 1rem;display: block">20 3633 1271</a>
                        <span>Guards Country</span>                        
                        <a href="tel:01642687188" class="m-text" style="line-height: 1rem;display: block">01642 687 188</a>
                    </div>
                    <ul class="collapsible">
                        <li style=" -webkit-animation-duration: .5s;animation-duration:.5s;"><a href="{{route('website-home')}}" class="selected-nav ">Home</a>
                        </li>                       
                        <li style=" -webkit-animation-duration: .7s;animation-duration: .7s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Lettings</div>
                            <ul class="collapsible-body">
                                <li><a href="{{route('website-property-search')}}?list=L">Properties to Let</a></li>
                                <li><a  href="/payments">Make An Offer</a></li>
                                <li><a  href="/landlords">Landlords</a></li>
                                <li><a  href="/guards-protection-management">Management</a></li>
                                <li><a  href="/tenants">Tenants</a></li>
                            </ul>

                        </li>
                        <li style=" -webkit-animation-duration: .9s;animation-duration: .9s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Sales</div>
                            <ul class="collapsible-body">
                                <li><a href="{{route('website-property-search')}}?list=S">Properties for Sale</a></li>
                                <li><a  href="/payments">Make An Offer</a></li>
                            </ul>
                        </li>
                        <li style=" -webkit-animation-duration: 1.1s;animation-duration: 1.1s;"><a href="/valuations" >Valuations</a></li>
                        <li style=" -webkit-animation-duration: 1.2s;animation-duration: 1.2s;">
                        <li style=" -webkit-animation-duration: 1.6s;animation-duration: 1.6s;"><a href="{{route('repair-maintenance')}}">Report a repair</a></li>
                        <li style=" -webkit-animation-duration: 1.6s;animation-duration: 1.6s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>About Us</div>
                            <ul class="collapsible-body">
                                <li><a  href="{{route('website-about')}}">About Us</a></li>
                                <li><a  href="/services">Services</a></li>
                            </ul></li>
                            
    <!--                       <li style=" -webkit-animation-duration: 1.4s;animation-duration: 1.4s;">
                            <div class="collapsible-header"><i class="material-icons">add</i>Members</div>
                            <ul class="collapsible-body">
                                <li><a href="/lettings-membership-package">Membership</a></li>
                            </ul></li>-->
                        <li style=" -webkit-animation-duration: 1.6s;animation-duration: 1.6s;"><a href="{{route('website-contact')}}">Get in touch</a></li>
                    </ul>
                </div>

                <a href="#" data-target="slide-out" style="padding-right: 10px;padding-left: 10px;margin-right: -10px;margin-left: -10px;" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
                <a href="{{route('website-home')}}" class="brand-logo center valign-wrapper">
                    <img src="{{asset('images/horseicon.svg')}}" class="horse" id="hd-logo">
                </a>
                <div class="right" style="  line-height: 30px; text-align: center;">
                    <a class="btn-guards modal-trigger" data-target="modal1" href="#modal1" style="display: block;margin-top:20px;position: relative;">Find your home</a>
                </div>
                <!-- <div class="right" style="  line-height: 30px; text-align: center;">
                    <a class="btn-guards" href="{{ url('valuation/online') }}" style="display: block;margin-top:20px;">Book valuation</a>
                </div> -->
            </div>
        </nav>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        elems = document.querySelectorAll('.collapsible');
        var collapse_instances = M.Collapsible.init(elems, options);
    });
</script>
<style>
    .sidenav .collapsible-header{
        display: block;
        font-size: 24px;

        font-weight: 300;
        padding: 0 32px;
    }
    .sidenav .collapsible-header i{

        height: 61px;
        display: inline-block;
        margin-right: 0;
        font-size: 15px;
    }
    .sidenav .collapsible-body{
    background-color: rgba(14, 31, 47, .5);
        padding-right: 30px;
    }
    .sidenav .collapsible-body li > a{font-size: 17px;}
</style>

