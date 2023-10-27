<x-app-layout>
    @php
        $page = 'home';
        $isPages = false;
    @endphp
    @include('layouts.header')
    @include('layouts.menu')
    <div class="form-login mt-5">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-5 justify-content-center mt-5 bg-light rounded pt-3">
                    <h2 class="text-uppercase text-center text-primary display-6 mt-2" style="color: #81c408;">User</h2>
                    <div class="form-body mx-2 my-3 mb-5 p-3">
                        <form action="" method="">
                            <div class="form-group mb-3 d-flex">
                                <div class="input-group flex-nowrap me-1">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Firstname" name="firstname" value="{{ Auth::user()->firstName }}">
                                </div>
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Lastname" name="lastname" value="{{ Auth::user()->lastName }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-envelope-fill"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-geo-alt-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Address" name="address" value="{{ Auth::user()->address }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="bi bi-telephone-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Phone number"
                                        name="phoneNumber" value="{{ Auth::user()->numberPhone }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
