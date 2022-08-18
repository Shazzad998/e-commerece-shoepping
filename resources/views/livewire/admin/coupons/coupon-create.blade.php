<div class="main-content" style="min-height: 852px;">

    <section class="section">
        <div class="section-header">
          <h1>Create Coupon</h1>
          <a href="{{ route('admin.coupons.index') }}" class="btn btn-icon icon-left btn-primary ml-auto"><i class="fas fa-eye"></i> View</a>
        </div>
  
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4></h4>
                </div>
                <div class="card-body">
                    <form> 
                        <div class="form-group row mb-4">
                            <label for="code" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Coupon Code</label>
                            <div class="col-sm-12 col-md-7">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" wire:model="code"  autocomplete="code">
        
                                @error('code')
                                    <span class="invalid-feedback">
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        <div class="form-group row mb-4">
                            <label for="type" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Coupon Type</label>
                            <div class="col-sm-12 col-md-7">
                                <select id="type" class="form-control @error('type') is-invalid @enderror" wire:model="type">
                                    <option value="fixed">Fixed</option>
                                    <option value="percent">Percent</option>
                                </select>
        
                                @error('type')
                                    <span class="invalid-feedback">
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        <div class="form-group row mb-4">
                            <label for="value" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Value</label>
                            <div class="col-sm-12 col-md-7">
                                <input id="value" type="number" class="form-control @error('value') is-invalid @enderror" wire:model="value"  autocomplete="value">
        
                                @error('value')
                                    <span class="invalid-feedback">
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="cart_value" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cart Value</label>
                            <div class="col-sm-12 col-md-7">
                                <input id="cart_value" type="number" class="form-control @error('cart_value') is-invalid @enderror" wire:model="cart_value"  autocomplete="cart_value">
        
                                @error('cart_value')
                                    <span class="invalid-feedback">
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="expiry_date" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Expiry Date</label>
                            <div class="col-sm-12 col-md-7">
                                <input id="expiry_date" type="text" class="form-control @error('expiry_date') is-invalid @enderror datepicker" wire:model="expiry_date"  >
        
                                @error('expiry_date')
                                    <span class="invalid-feedback">
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
        
        
                        <div class="form-group row mb-4">
                            <label for="status" class="col-form-label text-md-right col-md-3">Status</label>
                            <div class="col-sm-12 col-md-7">
                                <label class="mt-2">
                                    <input type="checkbox" wire:model="status" id="status" class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </div>
                        </div>
        
        
        
                    </form>
                </div>
        
                <div class="card-footer text-right">
                    <button class="btn btn-primary" wire:click="store">Submit</button>
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
