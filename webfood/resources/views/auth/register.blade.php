<x-guest-layout>
    @php
        $page='home';
        $isPages='false';
    @endphp
    @include('layouts.header')
    @include('layouts.menu')
    <div class="form-login">
        <div class="container">
            <div class="row justify-content-center mt-5 align-content-center">
                <div class="col-md-5 justify-content-center mt-5 bg-light rounded p-3">
                    <h2 class="text-uppercase text-center text-primary display-6 mt-2" style="color: #81c408;">Sign Up
                    </h2>
                    <div class="form-body mx-2 my-3 p-3">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="form-group mb-3 d-flex">
                                <div class="input-group flex-nowrap me-1">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Firstname" name="firstName"
                                        required autofocus autocomplete="firstName">
                                </div>
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Lastname" name="lastName"
                                        required autofocus autocomplete="lastName">
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                            <!-- Email Address -->
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-envelope-fill"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                        :value="old('email')" required autocomplete="username">
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-geo-alt-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Address" name="address"
                                        required autocomplete="address">
                                </div>
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-telephone-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Phone number"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="numberPhone" pattern="[0-9]+" required autocomplete="numberPhone">
                                </div>
                                <x-input-error :messages="$errors->get('numberPhone')" class="mt-2" />
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-lock-fill"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required autocomplete="password">
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <!-- Confirm Password -->
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-lock-fill"></i></span>
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                                <div class="form-group mb-2 d-flex justify-content-center">
                                    <button type="submit" class="btn-form btn">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
