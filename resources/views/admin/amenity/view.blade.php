@extends('admin.layout.app')

@section('heading','Amenity')

@section('right_top_button')
<a href="{{ route('admin_amenity_add') }}" class="button green">Add New</a>
@endsection



@section('main_content')

<section class="section main-section">

    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-view-list"></i></span>
                Amenity
            </p>
            <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a>
        </header>
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($amenities as $amenity)
                    <tr>
                        <td data-label="Company">{{ $amenity->name }}</td>


                        <td class="actions-cell">
                            <div class="buttons right nowrap">
                                <a href="{{ route('admin_amenity_edit',$amenity->id) }}" class="button small blue "
                                    type="button">
                                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                                </a>
                                <a href="{{ route('admin_amenity_delete',$amenity->id) }}" class="button small red "
                                    type="button">
                                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
            
        </div>
    </div>
</section>



<div class="divider"></div>

@endsection