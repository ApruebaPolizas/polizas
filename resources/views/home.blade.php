@extends('layouts.main')


@section('content')
<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
        
      
            <img src="{{URL::asset('/image/20944152.jpg')}}" alt="profile Pic"  width="500">
        </div>  
    </div>
</div>
<!----footer class="py-5 footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <strong>Contact App</strong>
                <small class="d-block mb-3">© 2021-2022</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#">Email Marketing</a></li>
                    <li><a href="#">Email Template</a></li>
                    <li><a href="#">Email Broadcast</a></li>
                    <li><a href="#">Autoresponder Email</a></li>
                    <li><a href="#">RSS-to-Email</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#">Landing page Guide</a></li>
                    <li><a href="#">Inbound Marketing Guide</a></li>
                    <li><a href="#">Email Marketing Guide</a></li>
                    <li><a href="#">Helpdesk Guide</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer---->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
@endsection