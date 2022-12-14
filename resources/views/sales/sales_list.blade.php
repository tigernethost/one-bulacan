@extends(backpack_view('layouts.top_left'))

@php
  $defaultBreadcrumbs = [
    trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
    $crud->entity_name_plural => url($crud->route),
    trans('backpack::crud.list') => false,
  ];

  // if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
  $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
  <div class="container-fluid">
    <h2>
      <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
      <small id="datatable_info_stack">{!! $crud->getSubheading() ?? '' !!}</small>
    </h2>
  </div>
@endsection

@section('content')

<!-- Default box -->
  <div class="row">
@if ($errors->has('paid_to'))
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $errors->first('paid_to') }}</strong>
  </div>
@endif
@if ($errors->has('reference_no'))
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $errors->first('reference_no') }}</strong>
  </div>
@endif
    <!-- THE ACTUAL CONTENT -->
    <div class="{{ $crud->getListContentClass() }}">
      <div class="">
        <div class="row mb-0">
          <div class="col-6">
            @if ( $crud->buttons()->where('stack', 'top')->count() ||  $crud->exportButtons())
            <div class="hidden-print {{ $crud->hasAccess('create')?'with-border':'' }}">

              @include('crud::inc.button_stack', ['stack' => 'top'])

            </div>
            @endif
          </div>
          <div class="col-6">
              <div id="datatable_search_stack" class="float-right"></div>
          </div>
        </div>

        {{-- Backpack List Filters --}}
        @if ($crud->filtersEnabled())
          @include('crud::inc.filters_navbar')
        @endif

        <div class="overflow-hidden mt-2">

        <table id="crudTable" class="bg-white table table-striped table-hover nowrap rounded shadow-xs border-xs" cellspacing="0">
            <thead>
              <tr>
                {{-- Table columns --}}
                @foreach ($crud->columns() as $column)
                  <th
                    data-orderable="{{ var_export($column['orderable'], true) }}"
                    data-priority="{{ $column['priority'] }}"
                    data-visible="{{ var_export($column['visibleInTable'] ?? true) }}"
                    data-visible-in-modal="{{ var_export($column['visibleInModal'] ?? true) }}"
                    data-visible-in-export="{{ var_export($column['visibleInExport'] ?? true) }}"
                    >
                    {!! $column['label'] !!}
                  </th>
                @endforeach

                @if ( $crud->buttons()->where('stack', 'line')->count() )
                  <th data-orderable="false" data-priority="{{ $crud->getActionsColumnPriority() }}" data-visible-in-export="false">{{ trans('backpack::crud.actions') }}</th>
                @endif
              </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
              <tr>
                {{-- Table columns --}}
                @foreach ($crud->columns() as $column)
                  <th>{!! $column['label'] !!}</th>
                @endforeach

                @if ( $crud->buttons()->where('stack', 'line')->count() )
                  <th>{{ trans('backpack::crud.actions') }}</th>
                @endif
              </tr>
            </tfoot>
          </table>

          @if ( $crud->buttons()->where('stack', 'bottom')->count() )
          <div id="bottom_buttons" class="hidden-print">
            @include('crud::inc.button_stack', ['stack' => 'bottom'])

            <div id="datatable_button_stack" class="float-right text-right hidden-xs"></div>
          </div>
          @endif

        </div><!-- /.box-body -->

      </div><!-- /.box -->
    </div>

  </div>
  
</div>

{{-- ADD PAID MODAL --}}
<div class="modal fade" id="paidModal" 
  tabindex="-1" role="dialog" 
  aria-labelledby="paidModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" 
            id="paidModalLabel"></h4>
            <button type="button" class="close" 
            data-dismiss="modal" 
            aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
          <form method="POST" action="{{ url($crud->route.'/paid') }}">
            @csrf
            {!! csrf_field() !!}
              <div class="modal-body">
                  <div class="form-group">
                      <input type="hidden" id="sales_id" name="sales_id" value="">
                      <label>Duration</label>
                      <select class="form-control" name="lenght_of_time" id="lenght_of_time">
                        <option value="1year">1 year</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Payment Thru</label>
                      <select class="form-control" name="payment_thru" id="payment_thru">
                        <option value="Cash">Cash</option>
                        <option value="Paymaya">Paymaya</option>
                        <option value="Gcash">Gcash</option>
                        <option value="True Money">True Money</option>
                        <option value="Complimentary">Complimentary</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="text" id="paid_to" name="paid_to" value="" placeholder="Paid to">
                      @if($errors->has('paid_to'))
                          <div class="error">{{ $errors->first('paid_to') }}</div>
                      @endif
                      <input class="form-control" type="text" id="reference_no" name="reference_no" value="" placeholder="Reference no.">
                      @if($errors->has('reference_no'))
                          <div class="error">{{ $errors->first('reference_no') }}</div>
                      @endif
                  </div>
              </div>
              <div class="modal-footer">
                  <span class="pull-right">
                  <button id="submit_paid" name="submit_paid" type="submit" class="btn btn-primary">
                      Paid
                  </button>
                  </span>
                  <button type="button" 
                  class="btn btn-default" 
                  data-dismiss="modal">Cancel</button>
              </div>
          </form>
    </div>
</div>
@endsection

@section('after_styles')
  <!-- DATA TABLES -->
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
  <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/form.css') }}">
  <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/list.css') }}">
  
  <!-- CRUD LIST CONTENT - crud_list_styles stack -->
  @stack('crud_list_styles')
@endsection

@section('after_scripts')
	@include('crud::inc.datatables_logic')

  <script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
  <script src="{{ asset('packages/backpack/crud/js/form.js') }}"></script>
  <script src="{{ asset('packages/backpack/crud/js/list.js') }}"></script>
  <script>
    $( document ).ready(function() {
      $('input[name="paid_to"').show();
      $('input[name="reference_no"').hide();
      $('#submit_paid').attr('disabled',true);
      if ($('select[name="payment_thru"').find(":selected").val() == 'Cash'){
        $('#paid_to').keyup(function(){
            if($(this).val.length !=0){
                $('#submit_paid').attr('disabled', false);
            }
        });
      }else{
        $('#reference_no').keyup(function(){
            if($(this).val.length !=0){
                $('#submit_paid').attr('disabled', false);
            }
        });
      }
    
    });
    $('select[name="payment_thru"').on('change', function() {
        $('#submit_paid').attr('disabled',true);
        if ($('select[name="payment_thru"').find(":selected").val() == 'Cash'){
            $('input[name="paid_to"').show();
            $('input[name="reference_no"').hide();
            $('input[name="reference_no"').val('');
            $('#paid_to').keyup(function(){
                if($(this).val.length !=0){
                    $('#submit_paid').attr('disabled', false);
                }
            });
        }
        else if ($('select[name="payment_thru"').find(":selected").val() == 'Complimentary')
        {
          $('input[name="paid_to"').hide();
          $('input[name="paid_to"').val('');
          $('input[name="reference_no"').hide();
          $('input[name="reference_no"').val('');
          $('#submit_paid').attr('disabled', false);

        }
        else {
          $('input[name="paid_to"').hide();
          $('input[name="reference_no"').show();
          $('input[name="paid_to"').val('');
          $('#reference_no').keyup(function(){
              if($(this).val.length !=0){
                  $('#submit_paid').attr('disabled', false);
              }
          });
        }
    });
    $(function() {
        $('#paidModal').on("show.bs.modal", function (e) {
            $("#sales_id").val($(e.relatedTarget).data('id'));
            $("#paidModalLabel").html($(e.relatedTarget).data('title'));
            $("#paid-title").html($(e.relatedTarget).data('title'));
        });
        $("#paidModal").on("hidden.bs.modal", function(){
            $('#submit_paid').attr('disabled',true);
            $('input[name="reference_no"').val('');
            $('input[name="paid_to"').val('');
        });
    });
</script>

  <!-- CRUD LIST CONTENT - crud_list_scripts stack -->
  @stack('crud_list_scripts')
@endsection
