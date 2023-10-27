<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-slot name="slotLogin">
        @php
            $page="home";
            $isPages=false;
        @endphp
        @include('layouts.header')
        @include('layouts.menu')
        <div class="form-login mt-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 justify-content-center mt-5 bg-light rounded p-4">
                        <h2 class="text-uppercase text-center text-primary display-6 mt-2" style="color: #81c408;">Login
                        </h2>
                        <div class="form-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email Address -->
                                <div>
                                    <div class="form-group mb-2">
                                        <label for="email" style="color:#868789">Email</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping"><i
                                                    class="bi bi-person-fill"></i></span>
                                            <input type="email" id='email' required autofocus
                                                autocomplete="username" name='email' class="form-control"
                                                placeholder="Email" aria-label="Username"
                                                aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div>
                                    <div class="form-group mb-2">
                                        <label for="password" style="color:#868789">Password</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping"><i
                                                    class="bi bi-lock-fill"></i></span>
                                            <input type="password" id="password" name="password" class="form-control"
                                                placeholder="Password" aria-label="Passwork"
                                                aria-describedby="addon-wrapping" required
                                                autocomplete="current-password">
                                        </div>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="form-check mt-3 mb-3 d-flex justify-content-between">
                                    <label for="remember_me" class="">
                                        <input id="remember_me" type="checkbox" class="form-check-input"
                                            name="remember">
                                        <span
                                            class="form-check-label"style="color:#868789">{{ __('Remember me') }}</span>
                                    </label>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="register fst-italic">Forget your password?</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group mb-2 d-flex justify-content-end">
                                    <button type="submit" class="btn-form btn">Submit</button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-center mb-2">
                                <span style="color:#868789">Don't have an account?</span>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="register">SignUp</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </x-slot>
</x-guest-layout>
