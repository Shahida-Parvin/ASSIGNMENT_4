@extends('layout')

@section('content')
    <h2>Contact Details</h2>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Address:</strong> {{ $contact->address }}</p>
    <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
    <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('contacts.index') }}">Back to Contacts</a>
@endsection
