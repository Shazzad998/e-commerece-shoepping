<div class="main-content" style="min-height: 852px;">
    <section class="section">
      <div class="section-header">
        <h1>All Products</h1>
        <button class="btn btn-icon icon-left btn-primary ml-auto" wire:click.prevent="showModal"><i class="fas fa-user-plus"></i> Create</button>
      </div>

      <div class="section-body">
        <div class="card">
          <div class="card-body">
            <div class="float-left">
              <div class="input-group">
                <h4 class="col-form-label">Per Page</h4>
                <select wire:model="paginate" name="paginate" class="form-control ml-2">
                  <option value="10">10</option>
                  <option value="30">30</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                  <option value="200">200</option>
                  <option value="400">400</option>
                </select>
              </div>
            </div>

            @if ($checked)
              <div class="float-left">
                <div class="dropdown d-inline ml-5">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    With Selected ({{ count($checked) }})
                  </button>
                  <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#multipleConfirmModal">Delete</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div> 
            @endif
            <div class="float-right">
                <div class="input-group">
                  <input type="text" wire:model="search" class="form-control" placeholder="Search">
                </div>
            </div>

            <div class="clearfix mb-3"></div>

            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th class="text-center pt-2">
                      <div class="custom-checkbox custom-checkbox-table custom-control">
                        <input type="checkbox" class="custom-control-input">
                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                      </div>
                    </th>
                    <th scope="col">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Regular Price</th>
                    <th scope="col">Featured</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                  @foreach ($products as $product)
                  <tr class="{{ ($this->isChecked($product->id))? 'table-primary' : '' }}">
                      <td>
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" value="{{ $product->id }}" wire:model="checked" class="custom-control-input" id="checkbox-{{ $products->firstItem()+$loop->index }}">
                          <label for="checkbox-{{ $products->firstItem()+$loop->index }}" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td><img src="{{ asset('storage') }}/{{ $product->image }}" alt="" width="70"></td>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->category->name }}</td>
                      <td>{{ $product->brand->name }}</td>
                      <td>{{ $product->regular_price }}</td>
                      <td><span class="badge badge-{{ ($product->featured)? 'success' : 'danger' }}">{{ ($product->featured)? 'Active' : 'Inactive' }}</span></td>
                      <td>{{ $product->quantity }}</td>
                      <td><span class="badge badge-{{ ($product->status)? 'success' : 'danger' }}">{{ ($product->status)? 'Active' : 'Inactive' }}</span></td>
                      <td>
                        <a href="" class="btn btn-icon btn-sm text-black-50"> <i class="fas fa-eye"></i></a>
                        <a href="" wire:click.prevent="edit({{ $product->id }})" class="btn btn-icon btn-sm text-black-50"> <i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-icon btn-sm text-black-50" wire:click.prevent="deleteConfirm({{ $product->id }})"> <i class="fas fa-trash-alt"></i></a>
                        
                      </td>
                  </tr>
                @endforeach

                </tbody>
              </table>
            </div>
            <div class="float-right">
              {{ $products->links('layouts.includes.pagination') }}
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

                              <div class="form-group row mb-4">
                                <label for="category_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <select id="category_id"  class="form-control @error('category_id') is-invalid @enderror" wire:model="category_id" >
                                      <option value="">Choose One..</option>
                                      @foreach ($categories as $category)
                                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                                      @endforeach
                                    </select>
        
                                    @error('category_id')
                                        <span class="invalid-feedback">
                                        {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                              </div>

                              <div class="form-group row mb-4">
                                <label for="brand_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Brand</label>
                                <div class="col-sm-12 col-md-7">
                                    <select id="brand_id"  class="form-control @error('brand_id') is-invalid @enderror" wire:model="brand_id" >
                                      <option value="">Choose One..</option>
                                      @foreach ($brands as $brand)
                                          <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                      @endforeach
                                    </select>
        
                                    @error('brand_id')
                                        <span class="invalid-feedback">
                                        {{ $message }}
                                        </span>
                                    @enderror
                                    
                                </div>
                              </div>


                              <div class="form-group row mb-4">
                                <label for="size" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Size</label>
                                <div class="col-sm-12 col-md-7">
                                  <div class="selectgroup selectgroup-pills @error('size') is-invalid @enderror">
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="size" value="S" class="selectgroup-input" wire:model="size">
                                      <span class="selectgroup-button">S</span>
                                      
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="size" value="M" class="selectgroup-input" wire:model="size">
                                      <span class="selectgroup-button">M</span>
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="size" value="L" class="selectgroup-input" wire:model="size">
                                      <span class="selectgroup-button">L</span>
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="size" value="XL" class="selectgroup-input" wire:model="size">
                                      <span class="selectgroup-button">XL</span>
                                    </label>
                                    
                                  </div>
                                  @error('size')
                                      <span class="invalid-feedback" style="display: block">
                                      {{ $message }}
                                      </span>
                                  @enderror

                                  
                                  
                                </div>

                                
                              </div>


                              <div class="form-group row mb-4">
                                <label for="short_description" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea id="short_description" style="height: 70px" class="form-control @error('short_description') is-invalid @enderror" wire:model="short_description" ></textarea>
        
                                    @error('short_description')
                                        <span class="invalid-feedback">
                                        {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                              </div>

                              <div class="form-group row mb-4">
                                <label for="description" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea id="description" style="height: 70px" class="form-control @error('description') is-invalid @enderror" wire:model="description" ></textarea>
        
                                    @error('description')
                                        <span class="invalid-feedback">
                                        {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                              </div>

                              <div class="form-group row mb-4">
                                <label for="regular_price" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Regular Price</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="regular_price" type="text" step=".01" class="form-control @error('regular_price') is-invalid @enderror" wire:model="regular_price" >
        
                                    @error('regular_price')
                                        <span class="invalid-feedback">
                                        {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                              </div>

                              <div class="form-group row mb-4">
                                <label for="onsale_price" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">OnSale Price</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="onsale_price" type="text" step=".01" class="form-control @error('onsale_price') is-invalid @enderror" wire:model="onsale_price"  autocomplete="onsale_price">
        
                                    @error('onsale_price')
                                        <span class="invalid-feedback">
                                        {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                              </div>

                              <div class="form-group row mb-4">
                                <label for="sku" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SKU</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="sku" type="text" class="form-control @error('sku') is-invalid @enderror" wire:model="sku"  >
        
                                    @error('sku')
                                        <span class="invalid-feedback">
                                        {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                              </div>


                              @if ($old_featured_image)
                              <div class="form-group row mb-4">
                                  <label for="image" class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Existing Featured Image</label>
                                  <div class="col-sm-12 col-md-7">
                                      <img src="{{ asset('storage') }}/{{ $old_featured_image }}" alt="" width="70">
                                  </div>
                              </div>
                              @endif

                              @if ($featured_image)
                              <div class="form-group row mb-4">
                                  <label for="" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Featured Image Preview</label>
                                  <div class="col-sm-12 col-md-7">
                                      <img src="{{ $featured_image->temporaryUrl() }}" alt="" width="70">
                                  </div>
                              </div>
                              @endif


                              <div class="form-group row mb-4">
                                <label for="featured_image" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Featured Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" class="form-control @error('featured_image') is-invalid @enderror" wire:model="featured_image">
        
                                    @error('featured_image')
                                        <span class="invalid-feedback">
                                        {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                              </div>



                              <div class="form-group row mb-4">
                                <label for="featured" class="col-form-label text-md-right col-md-3">featured</label>
                                <div class="col-sm-12 col-md-7">
                                    <label class="mt-2">
                                        <input type="checkbox" wire:model="featured" id="featured" class="custom-switch-input" checked>
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </div>
                              </div>

                              <div class="form-group row mb-4">
                                <label for="quantity" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">quantity</label>
                                <div class="col-sm-12 col-md-7">
                                    <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" wire:model="quantity"  >
        
                                    @error('quantity')
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
                                <label for="images" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" class="form-control @error('images') is-invalid @enderror" wire:model="images">
        
                                    @error('images')
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


    {{-- -----Multiple Delete Modal------- --}}

    <div class="modal fade" tabindex="-1" role="dialog" id="multipleConfirmModal" aria-hidden="true" wire:ignore.self>       
      <div class="modal-dialog modal-md" role="document">         
        <div class="modal-content">           
          <div class="modal-header">             
            <h5 class="modal-title">Are you sure?</h5>             
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">               
              <span aria-hidden="true">×</span>             
            </button>           
          </div>           
          <div class="modal-body">           
            Do you want to delete all selected items?
          </div>           
          <div class="modal-footer">           
            <button type="button" class="btn btn-danger btn-shadow" wire:click.prevent="bulkDestroy">Yes</button>
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