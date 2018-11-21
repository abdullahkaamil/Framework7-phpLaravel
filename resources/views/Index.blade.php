@extends('layouts.app')
@section('content')



    <div class="data-table data-table-init card">
        <div class="card-header">
            <!-- Table links/actions -->
            <div class="data-table-links">
                <a href="{{ url('/home') }}" class="link icon-only"><i class="icon f7-icons">add</i></a>
                       </div>
            <!-- Table actions -->
            <div class="data-table-actions">
                <a class="link icon-only"><i class="icon f7-icons">sort</i></a>
            </div>
        </div>
        <div class="card data-table">
            <table>
                <thead>
                <tr>
                    <th class="numeric-cell">No</th>
                    <th class="label-cell"> Name</th>
                    <th class="label-cell"> Surname</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $mains as $main)
                <tr>
                    <tr>
                        <td class="numeric-cell"> {{  $main->id  }}</td>
                        <td class="label-cell"> {{  $main->s_name  }}</td>
                        <td class="label-cell"> {{  $main->s_surname  }}</td>
                 <td>   <a href="{{ route('main.update',$main->id) }}" class="link icon-only"><i class="icon f7-icons">compose</i></a>
                 </td>
                    <td class="actions-cell">

                        <form action="{{  route('main.destroy',$main->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="link icon-only"><i class="icon f7-icons"> trash</i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>





@endsection
