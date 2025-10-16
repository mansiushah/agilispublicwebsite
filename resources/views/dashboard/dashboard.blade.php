
<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="mb-3">Welcome, {{ $user->full_name ?? 'User' }} 👋</h2>
        <p class="text-muted mb-4">You are successfully logged in to your dashboard.</p>

        <hr>

        <div class="mt-3">
            <h5>Your Account Details:</h5>
            <ul>
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>First Logon:</strong> {{ $user->first_logon ? 'Yes' : 'No' }}</li>
                <li><strong>Verified:</strong> {{ $user->otp_verify ? 'Yes' : 'No' }}</li>
                <li><strong>Member Since:</strong> {{ $user->created_at->format('d M, Y') }}</li>
            </ul>
        </div>

        <div class="mt-4">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="btn btn-danger">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="get" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>

