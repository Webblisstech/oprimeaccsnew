<div class="col-md-6 col-xxl-12">
    <div class="card border-0">
        <div class="card-body pb-0">

        </div>
        <ul class="list-group list-group-flush border-top-0">
            <li class="list-group-item">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-secondary">
                            <img
                                src="{{ getImage(getFilePath('product').'/'.$product->image,getFileSize('product')) }}"
                                alt="img"
                                width="420"
                                height="420"
                                class="img-fluid"
                            />
                        </div>
                    </div>
                    <div class="flex-grow-1 mx-2">
                        <a style="padding-bottom:5px; color: #0a0e26" href="{{ route('product.details', $product->id) }}"
                           class="catalog-item__link">
                            {{ $product->name }}
                        </a>
                        <h6 class="mb-0">
                            <span style="font-size: 12px"
                                  class="badge bg-dark">{{ $general->cur_sym }}{{ showAmount($product->price) }}</span>
                            @if($product->in_stock == 0)
                                <span style="font-size: 12px" class="badge bg-danger">out of stock</span>

                            @else
                                <span style="font-size: 12px" class="badge bg--base">{{ getAmount($product->in_stock) }} in stock</span>

                            @endif
                        </h6>
                    </div>
                    <div class="flex-shrink-0">

                        @if($product->in_stock > 0)
                            <a style="color: red; font-size: 20px; margin: 30px" class="purchaseBtn"
                                    data-text="{{ $product->name }}"
                                    data-price="{{ showAmount($product->price).' '.$general->cur_text }}"
                                    data-qty="{{ getAmount($product->in_stock).' qty' }}"
                                    data-id="{{ $product->id }}"
                                    data-amount="{{ getAmount($product->price) }}"
                            >
                               <i class="fa fa-shopping-bag"></i>
                            </a>
                        @else
                            <a style="color: #6e6e6e; font-size: 20px; margin: 30px" class="no-drop">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                        @endif
                    </div>

                </div>
            </li>

        </ul>

    </div>
</div>
