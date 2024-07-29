<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Check out</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <section class="mb-lg-14 mb-8 mt-8">
                    <div class="container">
                        <!-- row -->
                        <div>
                            <!-- row -->
                            <div class="row">
                                <!-- accordion -->
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <!-- accordion item -->
                                    <div class="accordion-item py-4">

                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- heading one -->
                                            <a href="#" class="fs-5 text-inherit h4 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                <i class="feather-icon icon-map-pin me-2 text-muted"></i>Add
                                                delivery address
                                            </a>
                                        </div>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample" style="">
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class="col-12 mb-4">
                                                        <!-- form -->
                                                        <div class="border p-6 rounded-3">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <!-- First Row -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="name">Name</label>
                                                                            <input type="text" wire:model='name'
                                                                                class="form-control" id="name"
                                                                                name="name" placeholder="Enter name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" wire:model='email'
                                                                                name="email" class="form-control"
                                                                                id="email" placeholder="Enter email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <!-- Second Row -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone">Phone</label>
                                                                            <input type="number" wire:model='phone'
                                                                                class="form-control" id="phone"
                                                                                name="phone"
                                                                                placeholder="Enter phone number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="address">Address</label>
                                                                            <textarea class="form-control" id="address"
                                                                                rows="3" name="address"
                                                                                wire:model='address'
                                                                                placeholder="Enter your address"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="accordion-item py-4">

                                        <a href="#" class="text-inherit h5 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">
                                            <i class="feather-icon icon-credit-card me-2 text-muted"></i>Payment
                                            Method
                                            <!-- collapse -->
                                        </a>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample" style="">

                                            <div class="mt-5">
                                                <div>
                                                    <!-- card -->
                                                    <div class="card card-bordered shadow-none">
                                                        <div class="card-body p-6">
                                                            <!-- check input -->
                                                            <div class="d-flex">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault" id="cashonDelivery"
                                                                        checked="checked">
                                                                    <label class="form-check-label ms-2"
                                                                        for="cashonDelivery">

                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <!-- title -->
                                                                    <h5 class="mb-1 h6"> Cash on Delivery</h5>
                                                                    <p class="mb-0 small">Pay with cash when your
                                                                        order is
                                                                        delivered.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>


                </section>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click='payProduct()' class="btn btn-primary"
                    data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>