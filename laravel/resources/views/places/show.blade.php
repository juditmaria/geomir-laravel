@extends('layouts.box-app')

@section('box-title')
    {{ __('Place') . " " . $place->id }}
@endsection

@section('box-content')
    <img class="img-fluid" src="{{ asset('storage/'.$file->filepath) }}" title="Image preview"/>
    <table class="table">
            <tr>
                <td><strong>ID<strong></td>
                <td>{{ $place->id }}</td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td>{{ $place->name }}</td>
            </tr>
            <tr>
                <td><strong>Description</strong></td>
                <td>{{ $place->description }}</td>
            </tr>
            <tr>
                <td><strong>Lat</strong></td>
                <td>{{ $place->latitude }}</td>
            </tr>
            <tr>
                <td><strong>Lng</strong></td>
                <td>{{ $place->longitude }}</td>
            </tr>
            <tr>
                <td><strong>Author</strong></td>
                <td>{{ $author->name }}</td>
            </tr>
            <tr>
                <td><strong>Created</strong></td>
                <td>{{ $place->created_at }}</td>
            </tr>
            <tr>
                <td><strong>Updated</strong></td>
                <td>{{ $place->updated_at }}</td>
            </tr>
        </tbody>
    </table>

    <!-- Buttons -->
    <div class="container" style="margin-bottom:20px">
        <a class="btn btn-warning" href="{{ route('places.edit', $place) }}" role="button">📝 {{ _('Edit') }}</a>
        <form id="form" method="POST" action="{{ route('places.destroy', $place) }}" style="display: inline-block;">
            @csrf
            @method("DELETE")
            <button id="destroy" type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">🗑️ {{ _('Delete') }}</button>
        </form>
        <a class="btn" href="{{ route('places.index') }}" role="button">⬅️ {{ _('Back to list') }}</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ _('Are you sure?') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ _('You are gonna delete post ') . $place->id }}</p>
                    <p>{{ _('This action cannot be undone!') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="confirm" type="button" class="btn btn-primary">{{ _('Confirm') }}</button>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/delete-modal.js')

@endsection
