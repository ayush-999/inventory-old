@extends('layouts.master')

@section('title', 'Purchase')

@section('content')
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="section-body">
                        <h2 class="section-title">{{ $page_title }}</h2>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-hover table-bordered table-md">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Sl No.</th>
                                                <th>Purchase No</th>
                                                <th>Total Amount</th>
                                                <th>Paid Amount</th>
                                                <th>Due Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($purchases as $purchase)
                                             <tr>
                                                <td class="align-middle text-center">{{ $loop->index + 1 }}</td>
                                                <td class="align-middle">{{ $purchase->purchase_no }}</td>
                                                <td class="align-middle">{{ $purchase->total_amount }}</td>
                                                <td class="align-middle">{{ $purchase->paid_amount }}</td>
                                                <td class="align-middle">{{ $purchase->due_amount }}</td>
                                                <td class="align-middle">
                                                    <a href="{{ route('purchase.edit', $purchase->id) }}" class="btn btn-info">Edit</a> |
                                                    <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#exampleModal" id="{{ $purchase->id }}">
                                                      Delete
                                                    </button> |
                                                    <a class="btn btn-success"
                                                        href="{{ route('purchase.show', $purchase->id) }}">View</a>
                                                </td>
                                             </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="deleteModal" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to delete this data?</p>
            
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
        </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();

            $('.delete').on('click', function () {
                const id = this.id;
                $('#deleteModal').attr('action', '{{ route("purchase.destroy", "") }}' + '/' + id);
            });
        });
    </script>
@endsection