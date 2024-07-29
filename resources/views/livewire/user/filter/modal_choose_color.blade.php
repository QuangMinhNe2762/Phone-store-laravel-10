<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">What colors you want to your product ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @forelse ($colors as $item)
                    @if ($item->quantity>0)
                    <div class="col-3">
                        <input wire:model='colorChoose' value="{{$item->color_id}}" type="radio" name="colors"
                            required><span><input type="color" value="{{$item->colors->code}}" disabled
                                style="border: none;width:20px;height:20px;"> {{$item->colors->name}}</span>

                    </div>
                    @endif
                    @empty
                    @endforelse
                </div>
                @error('colorChoose') <span class="text-danger">{{ $colorChoose }}</span>@enderror
            </div>
            <div class="modal-footer">
                <button type="button" wire:click='resetColor' class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click='addToCart'
                    data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>