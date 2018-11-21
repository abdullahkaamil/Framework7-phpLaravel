@extends('layouts.app')

@section('content')
    <div class="data-table">
        <br>
        @guest
        @endguest
        <div class="block-title"> Student Entry</div>
        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif
        <form  action="{{ route('main.create') }}" method="post"  id="my-form" class="list-block">
            @csrf
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-media"><i class="icon f7-icons">person</i></div>
                            <div class="item-input">
                                <input type="text" name="s_name" id="s_name" placeholder="Name"
                                       class="form-control  {{ $errors->has('s_name') ? 'is-invalid': '' }}"
                                       value="{{ old('s_name') }}">
                                <div class="invalid-feedback">
                                    {{  $errors->has('s_name') ? $errors->first('s_name'):''  }}
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-media"><i class="icon f7-icons">persons</i></div>
                            <div class="item-input">
                                <input type="text" name="s_surname" id="s_surname" placeholder="Surname"
                                       class="form-control {{ $errors->has('s_surname') ? 'is-invalid': '' }}"
                                       value="{{ old('s_surname') }}">
                                <div class="invalid-feedback">
                                    {{  $errors->has('s_surname') ? $errors->first('s_surname'):''  }}
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <p class="buttons-row">
                <button type="submit" class="button button-raised">Save</button>
            </p>

        </form>



    </div>
@endsection
