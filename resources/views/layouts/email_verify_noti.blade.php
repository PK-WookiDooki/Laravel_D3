@user
    @if (is_null(session('auth')->email_verified_at))
        <div class="alert alert-info">
            Verify your account/email <a class="text-blue-800 border-b border-b-blue-800 inline-block"
                href="{{ route('auth.verifyCode') }}">
                Here</a> !
        </div>
    @endif
@enduser
