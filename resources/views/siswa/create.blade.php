@extends('layouts.app')

@section('title', 'Add User')
@section('page-title', 'User Management')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <div class="flex justify-between mb-4">
            <h2 class="text-lg font-semibold">Add New User</h2>
        </div>

        <form method="POST" action="{{ route('users.store') }}" class="bg-white p-6 rounded shadow">
            @csrf

            <label class="block mb-2">Name</label>
            <input type="text" name="name" class="border p-2 w-full" value="{{ old('name') }}">
            @error('name')
                <div class="text-red-600">{{ $message }}</div>
            @enderror

            <label class="block mb-2 mt-4">Email</label>
            <input type="email" name="email" class="border p-2 w-full" value="{{ old('email') }}">
            @error('email')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
            <label class="block mb-2 mt-4">Password</label>
            <input type="password" name="password" class="border p-2 w-full" placeholder="password">
            @error('password')
                <div class="text-red-600">{{ $message }}</div>
            @enderror



            <label class="block mb-2 mt-4">Role</label>
            <select name="role" class="border p-2 w-full">
                <option value="">-- Pilih Role --</option>
                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            @error('role')
                <div class="text-red-600">{{ $message }}</div>
            @enderror

            <div class="text-right mt-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
@endsection
