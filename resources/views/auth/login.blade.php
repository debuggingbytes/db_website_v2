<div class="container-fluid mt-5">
  <div class="row mt-5">
    <div class="mx-auto col-md-6">      
      <x-guest-layout>
          <x-jet-authentication-card>
              <x-slot name="logo">
                <div class="text-center">

                  <img src='https://www.debuggingbytes.com/files/images/db-full-logo.png' class='img-fluid w-75 p-2 mb-5'>
                </div>
              </x-slot>
      
              <x-jet-validation-errors class="mb-4" />
      
              @if (session('status'))
                  <div class="mb-4 font-medium text-sm text-green-600">
                      {{ session('status') }}
                  </div>
              @endif
              <div class="p-5">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="d-flex align-items-center justify-content-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-muted me-5" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                        <x-jet-button class="btn btn-info">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>
              </div>
          </x-jet-authentication-card>
      </x-guest-layout>
    </div>
  </div>
</div>

