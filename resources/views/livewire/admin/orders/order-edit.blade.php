<div class="main-content" style="min-height: 852px;">

    <section class="section">
        <div class="section-header">
          <h1>Create Brand</h1>
          <a href="{{ route('admin.brands.index') }}" class="btn btn-icon icon-left btn-primary ml-auto"><i class="fas fa-eye"></i> View</a>
        </div>
  
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4></h4>
                </div>
                <div class="card-body">
                    <form> 
                        <div class="form-group row mb-4">
                            <label for="name" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" wire:keyup="getSlug"  autocomplete="name">
        
                                @error('name')
                                    <span class="invalid-feedback">
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        <div class="form-group row mb-4">
                            <label for="slug" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                            <div class="col-sm-12 col-md-7">
                                <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" wire:model="slug"  autocomplete="slug">
        
                                @error('slug')
                                    <span class="invalid-feedback">
                                    {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if ($old_image)
                        <div class="form-group row mb-4">
                            <label for="image" class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Existing Image</label>
                            <div class="col-sm-12 col-md-7">
                                <img src="{{ asset('storage') }}/{{ $old_image }}" alt="" width="70">
                            </div>
                        </div>
                        @endif
        
                        
                        <div class="form-group row mb-4">
                            <label for="image" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image Preview</label>
                            <div class="col-sm-12 col-md-7">
                                @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" alt="" width="70">
                                @endif
                            </div>
                        </div>
                        
        
                        <div class="form-group row mb-4">
                            <label for="image" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" wire:model="image">
        
                                @error('image')
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
