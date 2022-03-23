
                                           <div class="row">
                                           @foreach($itemfoods as $item)
                                           @if($restaurant->contains($item->id))

                                            <div class="col-lg-6" wire:key="{{ $item->id }}">
                                           
                                                <div class="food-item-card">
                                                    <div class="food-item-img" style="
                                background-image: url({{asset('assets/images/img2.jpg')}});
                              "></div>
                                                    <div class="food-item-body">
                                                        <h5 class="card-title">
                                                            {{$item->food_item}}
                                                        </h5>
                                                        <div class="pricing">
                                                            <div class="price-wrap">
                                                                <div class="non-div food-type-div">
                                                                    <i class="bx bxs-circle" ></i>
                                                                </div>
                                                                <span class="price">${{$item->rate}}</span>
                                                                <span class="actual-price">$180.99</span>
                                                            </div>
                                                          
                                                            <div class="add-remove-button">

                                                            <div class="input-group">
                                                            <input wire:click="removeFromCart({{ $item->id }})" type="button" value="-" class="button-minus changeQuantity" id="changeQuantity"
                                                            data-field="quantity" />
                                                            <input type="number" step="1" min="1" value="0"
                                                            name="quantity" readonly class="quantity-field qty-input" />
                                                            <input wire:click="addToCart({{ $item->id }})" type="button" value="+" class="button-plus " id="changeQuantity" data-field="quantity" />
                                                            </div>
                                                            </div>
                                                            
                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                           @endif
                                            @endforeach
                                            </div> 
                                       
