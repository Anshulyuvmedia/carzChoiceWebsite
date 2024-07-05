{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Specifications')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">dashboard</a></li>&nbsp;/
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        @php
        $groupedspecs = $specifications->groupBy('formlabels');
        @endphp
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('storespecifications') }}" method="POST">
                            @csrf
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach ($groupedspecs as $formlabel => $group)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading-{{ $loop->index }}">
                                        <button
                                            class="accordion-button {{ $loop->first ? '' : 'collapsed' }} text-black fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse-{{ $loop->index }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="flush-collapse-{{ $loop->index }}">
                                            {{ $formlabel }}
                                        </button>
                                        <input type="hidden" name="formlabels[]" value="{{ $formlabel }}">
                                        <input type="hidden" name="vehicleid" value="{{ $vehicleid }}">
                                    </h2>
                                    <div id="flush-collapse-{{ $loop->index }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="flush-heading-{{ $loop->index }}"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="card-body table-responsive">
                                            <table id="datatable-buttons"
                                                class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Feature</th>
                                                        <th>Value</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $index = 0; @endphp
                                                    @foreach ($group as $row)
                                                    <tr>
                                                        <td>{{ $index + 1 }} <input type="hidden" name="indexnos[{{ $formlabel }}][]" value="{{ $index }}"></td>
                                                        <td>{{ $row->value }} <input type="hidden" name="featurenames[{{ $formlabel }}][]" value="{{ $row->value }}"></td>
                                                        <td>
                                                            <input type="hidden" name="values[{{ $formlabel }}][{{ $index }}]" value="0">
                                                            <input class="form-control border-dark-subtle"
                                                                placeholder="enter" name="values[{{ $formlabel }}][{{ $index }}]" type="text" value=""
                                                                id="example-text-input-{{ $formlabel }}{{ $index }}">
                                                        </td>
                                                    </tr>
                                                    @php $index++ @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-12 d-flex align-items-end justify-content-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@if (session('success'))
<script>
    swal("Success", "{{ session('success') }}", "success");
</script>
@endif

@if (session('error'))
<script>
    swal("Error", "{{ session('error') }}", "error");
</script>
@endif
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function confirmDelete(id) {
        let smiley = '😊';
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = "/deletevariants/" + id;
            }else {
                swal("Great Decision....!! Your data is safe! " + smiley);
            }
        });
    }

    function toggleTable(button) {
    const table = button.nextElementSibling;
    if (table.style.display === "none") {
        table.style.display = "table";
    } else {
        table.style.display = "none";
    }
}
</script>
@endpush
