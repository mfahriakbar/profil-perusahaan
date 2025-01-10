@extends('layouts.admin')

@section('title', 'Kelola Berita')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Berita</h2>
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Berita
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($news as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                @if($item->image)
                                    <img src="{{ asset('uploads/images/'.$item->image) }}" alt="News Image" style="height: 50px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada berita</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $news->links() }}
        </div>
    </div>
</div>
@endsection
