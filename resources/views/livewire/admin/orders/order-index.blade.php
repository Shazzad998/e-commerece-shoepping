<div class="main-content" style="min-height: 852px;">
    <section class="section">
        <div class="section-header">
        <h1>All Orders</h1>
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
                    <th scope="col">Order Id</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Phone</th>
                    <th scope="col">Ordered Items</th>
                    <th scope="col">Total</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Action</th>
                    </tr>
                    @foreach ($orders as $order)
                    <tr class="{{ ($this->isChecked($order->id))? 'table-primary' : '' }}">
                        <td>
                        <div class="custom-checkbox custom-control">
                            <input type="checkbox" value="{{ $order->id }}" wire:model="checked" class="custom-control-input" id="checkbox-{{ $orders->firstItem()+$loop->index }}">
                            <label for="checkbox-{{ $orders->firstItem()+$loop->index }}" class="custom-control-label">&nbsp;</label>
                        </div>
                        </td>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->firstname }} {{ $order->lastname }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->orderedItems->count() }}</td>
                        <td>{{ $order->total }}</td>
                        <td>@switch ($order->transaction->payment_method) 
                            @case ('bkash')
                                {{ 'Bkash' }}
                                @break
                            @case ('card')
                                {{ 'Credit/Debit Card' }}
                                @break
                            @case ('paypal')
                                {{ 'Paypal' }}
                                @break
                            @case ('rocket')
                                {{ 'Rocket' }}
                                @break
                            
                            @default
                                {{ 'Cash On Delevery' }}
                                @break
                            @endswitch
                         </td>


                        <td><span class="badge
                            @switch($order->transaction->status) 
                                @case('pending')
                                    badge-warning
                                    @break

                                @case('approved')
                                    badge-success
                                    @break

                                @case('declined')
                                    badge-danger
                                    @break

                                @default
                                    badge-primary
                            @endswitch
                            ">
                            {{ $order->transaction->status }}
                        </span></td>

                        <td><span class="badge
                            @switch($order->status) 
                                @case('delivered')
                                    badge-primary
                                    @break

                                @case('canceled')
                                    badge-danger
                                    @break

                                @default
                                    badge-primary
                            @endswitch
                            ">
                            {{ $order->status }}
                        </span></td>
                        <td>
                        <a href="" class="btn btn-icon btn-sm text-black-50"> <i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-icon btn-sm text-black-50"> <i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-icon btn-sm text-black-50" wire:click.prevent="deleteConfirm({{ $order->id }})"> <i class="fas fa-trash-alt"></i></a>
                        
                        </td>
                    </tr>
                @endforeach

                </tbody>
                </table>
            </div>
            <div class="float-right">
                {{ $orders->links('layouts.includes.pagination') }}
            </div>
            </div>
        </div>
        </div>
    </section>


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