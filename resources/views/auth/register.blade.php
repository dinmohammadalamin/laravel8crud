<x-guest-layout>
    {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}
        @csrf

        <!-- Name -->
        <div>
            {!! Form::label('name', __('Name')) !!}
            {!! Form::text('name', old('name'), ['class' => 'block mt-1 w-full', 'required' => 'required', 'autofocus' => 'autofocus', 'autocomplete' => 'name']) !!}
            {!! $errors->first('name', '<p class="text-red-500 mt-2">:message</p>') !!}
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            {!! Form::label('email', __('Email')) !!}
            {!! Form::email('email', old('email'), ['class' => 'block mt-1 w-full', 'required' => 'required', 'autocomplete' => 'username']) !!}
            {!! $errors->first('email', '<p class="text-red-500 mt-2">:message</p>') !!}
        </div>

        <!-- Age -->
        <div class="mt-4">
            {!! Form::label('age', __('Age')) !!}
            {!! Form::number('age', old('age'), ['class' => 'block mt-1 w-full', 'required' => 'required']) !!}
            {!! $errors->first('age', '<p class="text-red-500 mt-2">:message</p>') !!}
        </div>

        <!-- Gender -->
        <div class="mt-4">
            {!! Form::label('gender', __('Gender')) !!}
            {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female', 'other' => 'Other'], old('gender'), ['class' => 'block mt-1 w-full', 'required' => 'required']) !!}
            {!! $errors->first('gender', '<p class="text-red-500 mt-2">:message</p>') !!}
        </div>

        <!-- Date of Birth -->
        <div class="mt-4">
            {!! Form::label('dob', __('Date of Birth')) !!}
            {!! Form::date('dob', old('dob'), ['class' => 'block mt-1 w-full', 'required' => 'required']) !!}
            {!! $errors->first('dob', '<p class="text-red-500 mt-2">:message</p>') !!}
        </div>
        

        <!-- Password -->
        <div class="mt-4">
            {!! Form::label('password', __('Password')) !!}
            {!! Form::password('password', ['class' => 'block mt-1 w-full', 'required' => 'required', 'autocomplete' => 'new-password']) !!}
            {!! $errors->first('password', '<p class="text-red-500 mt-2">:message</p>') !!}
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            {!! Form::label('password_confirmation', __('Confirm Password')) !!}
            {!! Form::password('password_confirmation', ['class' => 'block mt-1 w-full', 'required' => 'required', 'autocomplete' => 'new-password']) !!}
            {!! $errors->first('password_confirmation', '<p class="text-red-500 mt-2">:message</p>') !!}
        </div>

        

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            {!! Form::submit(__('Register'), ['class' => 'ml-4']) !!}
        </div>
    {!! Form::close() !!}
</x-guest-layout>
