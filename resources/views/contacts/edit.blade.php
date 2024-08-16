@extends('layout')

@section('content')
    <h2>Edit Contact</h2>
    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        @csrf
        @method('PUT')
        
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $contact->name }}" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $contact->email }}" required>
        
        <label for="phone">Phone (optional)</label>
        <input type="text" name="phone" id="phone" value="{{ $contact->phone }}">
        
        <label for="address">Address (optional)</label>
        <textarea name="address" id="address" rows="4">{{ $contact->address }}</textarea>
        
        <button type="submit">Update Contact</button>
    </form>
@endsection
