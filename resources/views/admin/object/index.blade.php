@extends('admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>object</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">object</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>

                </ul>
            </div>
        </div>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Thông tin lớp</h3>

                </div>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên môn học</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($object as $key => $value)
                            <tr>
                                <td>
                                    @php
                                        $key++;
                                    @endphp
                                    {{ $key }}
                                </td>
                                <td>{{ $value->name_object }}</td>
                                <td style=" display:flex;gap:0 8px">
                                    <a href="{{ Route('object.edit', [$value->id_object]) }}"><span
                                            class="status completed">Sửa</span></a>
                                    <form action="{{ Route('object.destroy', [$value->id_object]) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="status completed" style="border:none">Xóa</button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
