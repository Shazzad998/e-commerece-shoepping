<div class="main-content" style="min-height: 852px;">

    <section class="section">
        <div class="section-header">
          <h1>Sale Settings</h1>
        </div>
  
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4></h4>
                </div>
                <div class="card-body">
                    <form> 
                        <div class="form-group row mb-4">
                            <label for="sale_date" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sale Date</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" id="sale_date" class="form-control datetimepicker" wire:model="sale_date">
                            </div>
                        </div>
        
        
                        <div class="form-group row mb-4">
                            <label for="status" class="col-form-label text-md-right col-md-3">Status</label>
                            <div class="col-sm-12 col-md-7">
                                <label class="mt-2">
                                    <input type="checkbox" wire:model="status" id="status" class="custom-switch-input" checked>
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </div>
                        </div>
        
        
        
                    </form>
                </div>
        
                <div class="card-footer text-right">
                    <button class="btn btn-primary" wire:click="update">Update</button>
                </div>
            </div>
        </div>
    </section>


    @if (session('success'))
    {!! session('success') !!}
    @endif

    @if (session('error'))
    {!! session('error') !!}
    @endif 


</div>


@push('scripts')


@endpush
