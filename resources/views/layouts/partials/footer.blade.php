{{-- Footer Partial --}}
<footer class="site-footer">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="footer-copyright mb-2 mb-md-0">
            &copy; {{ date('Y') }} {{ config('site.business_name') }}. All Rights Reserved.
        </div>
        <div class="footer-social d-flex align-items-center">
            <span class="me-2">Follow Us on Facebook</span>
            <a href="{{ config('site.facebook_url') }}" target="_blank"
               title="{{ config('site.business_name') }} on Facebook">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
    </div>
</footer>
