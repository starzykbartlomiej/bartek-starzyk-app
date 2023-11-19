<x-body>
    <x-slot name="content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="category-grid">
                <div class="timeline-empty">
                </div>
                <div class="category-card" style="justify-content: center">
                    <div class="timeline-component timeline-content">
                        <form action="/category" method=post>
                            @csrf
                            <label for="email">Email</label><br>
                            <input type="text" id="email" name="email" class="input-white"><br><br>

                            <label for="password">Password</label><br>
                            <input type="password" id="password" name="password" class="input-white"><br><br>
                            <button class="white-border-button"> Login</button><br><br>
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            <br>

                        </form>
                    </div>
                </div>
                <div class="timeline-empty">
                </div>
            </div>
        </form>
    </x-slot>
</x-body>
