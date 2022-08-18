<div class="main-content" style="min-height: 852px;">
    <section class="section">
      <div class="section-header">
        <h1>All Categories</h1>
        <button class="btn btn-icon icon-left btn-primary ml-auto" wire:click.prevent="showModal"><i class="fas fa-user-plus"></i> Create</button>
      </div>

      <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4></h4>
            <div class="card-header-form">
              <form>
                <div class="input-group">
                  <input type="text" wire:model.lazy="search" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-md">
                  <thead>
                    <tr>
                      <th scope="col">SL</th>
                      <th scope="col">Category Image</th>
                      <th scope="col">Category Name</th>
                      <th scope="col">Slug</th>
                      <th scope="col">Number of products</th>
                      <th scope="col">Status</th>
                      <th scope="col">Created_at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                            <td><img src="{{ asset('storage') }}/{{ $category->image }}" alt="" width="80"></td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->products->count() }}</td>
                            <td><span class="badge badge-{{ ($category->status)? 'success' : 'danger' }}">{{ ($category->status)? 'Active' : 'Inactive' }}</span></td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                              <a href="" class="btn btn-icon btn-sm text-black-50"> <i class="fas fa-eye"></i></a>
                              <a href="" wire:click.prevent="edit({{ $category->id }})" class="btn btn-icon btn-sm text-black-50"> <i class="fa fa-edit"></i></a>
                              <a href="" class="btn btn-icon btn-sm text-black-50" wire:click.prevent="deleteConfirm({{ $category->id }})"> <i class="fas fa-trash-alt"></i></a>
                              
                            </td>
                        </tr>
                      @endforeach

                  </tbody>
                </table>
              </div>
              <div class="card-footer text-right">
                {{ $categories->links('layouts.includes.pagination') }}
            </div>
            </div>
          </div>
        </div>
    </section>



    {{-- --------Form Modal--------- --}}
    <div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" id="formModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Create Category</h5>
              <button type="button" class="close" aria-label="Close" wire:click.prevent="closeModal">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="card">
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

                            @if ($image)
                            <div class="form-group row mb-4">
                                <label for="image" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image Preview</label>
                                <div class="col-sm-12 col-md-7">
                                    <img src="{{ $image->temporaryUrl() }}" alt="" width="70">
                                </div>
                            </div>
                            @endif

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
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">

                
              <button type="button" class="btn btn-secondary" wire:click.prevent="closeModal">Close</button>
              @if ($edit)
                <button type="button" class="btn btn-primary" wire:click="update">Update</button>
                @else
                <button type="button" class="btn btn-primary" wire:click="store">Create</button>
              @endif
              
            </div>
          </div>
        </div>
    </div>
    



      {{-- -----Delete Modal------- --}}

    <div class="modal fade" tabindex="-1" role="dialog" id="confirmModal" aria-hidden="true" wire:ignore.self>       
      <div class="modal-dialog modal-md" role="document">         
        <div class="modal-content">           
          <div class="modal-header">             
            <h5 class="modal-title">Realy?</h5>             
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">               
              <span aria-hidden="true">×</span>             
            </button>           
          </div>           
          <div class="modal-body">           
            Do you want to continue?
          </div>           
          <div class="modal-footer">           
            <button type="button" class="btn btn-danger btn-shadow" wire:click.prevent="destroy">Yes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>         
        </div>       
      </div>    
    </div>


    @if (session('success'))
    {!! session('success') !!}
    @endif

    @if (session('error'))
    {!! session('error') !!}
    @endif

</div>