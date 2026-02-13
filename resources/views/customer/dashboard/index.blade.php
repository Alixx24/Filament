@extends('customer.layouts.master')
@section('title', 'Dashboard')

@section('content')


    <section>
        <a class="btn btn-light text-dark " href="{{ route('home') }}"><i class="bi bi-arrow-left"></i></a>

        <a class="btn btn-light text-dark ms-3" type="submit" data-bs-toggle="modal" data-bs-target="#createReqModal">create
            request</a>
        @php
            $payment = \App\Models\Payment::where('user_id', auth()->id())
                ->where('status', 'paid')
                ->first();
        @endphp

        @if ($payment)
            <a class="btn btn-small-text btn-primary" type="submit" href="#">
                Upgraded
            </a>
        @else
            <a class="btn btn-small-text btn-warning" type="submit" data-bs-toggle="modal" data-bs-target="#payModal">
                {{ $payment ? 'Upgraded' : '+unlimited' }}
            </a>
        @endif

    </section>


    <section class="hero-section m-md-5 m-3">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif



        <div class="table-responsive rounded-4">
            <table class="table">
                <thead class="thead-light">
                    <tr>

                        <th scope="col">Name</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Url</th>
                        <th scope="col">Status</th>
                        <th scope="col">Analysis</th>

                    </tr>
                </thead>

                <tbody>


                    @foreach ($fetchRequest as $item)
                        <tr>

                            <td>{{ $item->name }}</td>
                          



                            <td>

                                <input class="form-check-input status-toggle" type="checkbox" data-id="{{ $item->id }}"
                                    {{ $item->status == 1 ? 'checked' : '' }}>
                            </td>

                            <td class="d-flex align-items-center">
                                <a class="btn btn-warning"
                                    href="#">Click!</a>

                                <form method="POST"
                                    action="#">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ms-2">Delete</button>
                                </form>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.status-toggle').on('change', function() {
                var itemId = $(this).data('id');
                var status = $(this).is(':checked') ? 1 : 0;

                $.ajax({
                    url: '/user/dashboard/update-status/' + itemId,
                    method: 'POST',
                    data: {
                        status: status,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert('Status updated successfully');

                    },
                    error: function() {
                        alert('Error updating');

                    }
                });
            });
        });
    </script>
    {{-- <x-approve-pay />

    <x-create-request-modal /> --}}
@endsection
