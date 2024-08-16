@extends('layout')

@section('content')
    <h2>Create New Contact</h2>
    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="phone">Phone (optional)</label>
        <input type="text" name="phone" id="phone">
        
        <label for="address">Address (optional)</label>
        <textarea name="address" id="address" rows="4"></textarea>
        
        <button type="submit">Create Contact</button>
    </form>
@endsection
