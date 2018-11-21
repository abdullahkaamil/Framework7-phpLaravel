@extends('layouts.app')
@section('content')

        <div class="card">
            <div class="card-header">
                Student Update form
            </div>
            <div class="card-content card-content-padding">
                <form method="post" action="{{ route('main.update2',$mains['id']) }}">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="s_name" value={{ $mains['s_name'] }} />
                    </div>
                    <div class="form-group">
                        <label for="Surname">Surname :</label>
                        <input type="text" class="form-control" name="s_surname" value={{ $mains['s_surname'] }} />
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="button button-big button-green">Update</button>
                    </div>
                </form>
            </div>
        </div>

@endsection
